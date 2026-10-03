<?php
/**
 * Test the ajax endpoint the bookmark list's Delete action now calls
 *
 * @link https://www.egroupware.org
 * @package bookmarks
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 */

namespace EGroupware\Bookmarks;

use EGroupware\Api;
use EGroupware\Api\LoggedInTest;

require_once realpath(__DIR__ . '/../../api/tests/LoggedInTest.php');

/**
 * bookmarks_ui::ajax_action() is a new endpoint: Delete used to submit the whole eTemplate,
 * rebuilding the list and losing its scroll position and selection.
 *
 * The delete loop itself moved out of _list() into action() so both paths share it - the old
 * submit branch is now two lines calling the same method, which is what these tests pin.
 *
 * PASS CRITERIA
 * The bookmark really went away (read back through bookmarks_bo), one the user may not delete
 * does not, and the response carries an egw.refresh call.
 */
class AjaxActionTest extends LoggedInTest
{
	/** @var \bookmarks_ui */
	protected $ui;
	/** @var \bookmarks_bo */
	protected $bo;
	/** @var int[] bm_ids created by this test */
	protected $ids = [];

	protected function setUp() : void
	{
		Api\Json\Response::get()->initResponseArray();
		$this->ui = new \bookmarks_ui();
		$this->bo = new \bookmarks_bo();
	}

	protected function tearDown() : void
	{
		foreach($this->ids as $id)
		{
			$GLOBALS['egw']->db->delete('egw_bookmarks', ['bm_id' => $id], __LINE__, __FILE__, 'bookmarks');
		}
		$this->ids = [];
	}

	/**
	 * A real eTemplate request id, the way the browser sends one along - the endpoint refuses
	 * without it, see Nextmatch::validateExecId().  Writing to the request is what persists it.
	 */
	protected function execId() : string
	{
		$request = \EGroupware\Api\Etemplate\Request::read();
		$id = $request->id();
		$request->content = ['nm' => []];
		unset($request);
		return $id;
	}

	/**
	 * The egw.refresh call the response should carry, or null
	 */
	protected function refreshCall() : ?array
	{
		$response = Api\Json\Response::get();
		$prop = (new \ReflectionClass($response))->getProperty('responseArray');
		$prop->setAccessible(true);
		foreach((array)$prop->getValue($response) as $chunk)
		{
			$chunk = (array)$chunk;
			if (($chunk['type'] ?? null) === 'apply' && (($chunk['data']['func'] ?? null) === 'egw.refresh'))
			{
				return (array)$chunk['data']['parms'];
			}
		}
		return null;
	}

	/**
	 * @param int $owner account owning the bookmark, defaults to the logged-in user
	 */
	protected function makeBookmark(string $name, $owner=null) : int
	{
		$GLOBALS['egw']->db->insert('egw_bookmarks', [
			'bm_owner'  => $owner ?? $GLOBALS['egw_info']['user']['account_id'],
			'bm_access' => 'private',
			'bm_url'    => 'https://example.org/'.urlencode($name),
			'bm_name'   => $name,
			'bm_desc'   => 'created by bookmarks/tests/AjaxActionTest.php',
		], false, __LINE__, __FILE__, 'bookmarks');

		return $this->ids[] = $GLOBALS['egw']->db->get_last_insert_id('egw_bookmarks', 'bm_id');
	}

	protected function exists($id) : bool
	{
		return (bool)$GLOBALS['egw']->db->select('egw_bookmarks', 'bm_id', ['bm_id' => $id],
			__LINE__, __FILE__, false, '', 'bookmarks')->fetchColumn();
	}

	/**
	 * The regression shape: the endpoint has to reach the delete loop and really delete.
	 */
	public function testDeleteRemovesTheBookmark()
	{
		$id = $this->makeBookmark('AjaxActionTest delete');
		$this->assertTrue($this->exists($id), 'fixture was not created');

		$this->ui->ajax_action($this->execId(), 'delete', [$id]);

		$this->assertFalse($this->exists($id), 'delete must remove the bookmark');
		$this->assertNotNull($this->refreshCall(),
			'the endpoint must answer with egw.refresh, or the list drops no rows');
	}

	/**
	 * Without a valid exec id the endpoint must do nothing at all.
	 */
	public function testABogusExecIdDeletesNothing()
	{
		$id = $this->makeBookmark('AjaxActionTest bogus exec id');

		$this->ui->ajax_action('bookmarks_nobody_not-a-real-request-id', 'delete', [$id]);

		$this->assertTrue($this->exists($id), 'a rejected request must not run the action');
		$this->assertNull($this->refreshCall(), 'and must not answer with egw.refresh either');
	}

	/**
	 * bookmarks_bo::delete() refuses a bookmark the user has no rights to, and the count in the
	 * message has to reflect that rather than claiming it deleted one.
	 */
	public function testABookmarkTheUserMayNotDeleteIsNotCounted()
	{
		// owned by the anonymous SiteMgr account, private - not ours to delete
		$id = $this->makeBookmark('AjaxActionTest foreign', $this->foreignAccount());
		if (!$id)
		{
			$this->markTestSkipped('no second account to own a foreign bookmark');
		}

		$this->ui->ajax_action($this->execId(), 'delete', [$id]);

		$this->assertTrue($this->exists($id), 'a bookmark the user may not delete must survive');
		$parms = $this->refreshCall();
		$this->assertStringContainsString('0', (string)$parms[0], 'and must not be counted');
	}

	/**
	 * An account id that is not the logged-in user, or 0 if there is none
	 */
	protected function foreignAccount() : int
	{
		foreach((array)$GLOBALS['egw']->accounts->search(['type' => 'accounts']) as $account_id => $account)
		{
			if ($account_id != $GLOBALS['egw_info']['user']['account_id'])
			{
				return (int)$account_id;
			}
		}
		return 0;
	}

	/**
	 * More than one row changed means no id at all: egw.refresh() takes a single id, and
	 * Et2Nextmatch.refresh(id, null) only defaults its type when that type is undefined - a
	 * literal null falls through and updates nothing.
	 */
	public function testAMultiRowDeleteAsksForAFullReload()
	{
		$first = $this->makeBookmark('AjaxActionTest multi 1');
		$second = $this->makeBookmark('AjaxActionTest multi 2');

		$this->ui->ajax_action($this->execId(), 'delete', [$first, $second]);

		$parms = $this->refreshCall();
		$this->assertNull($parms[2], 'no single id for a multi-row action');
		$this->assertNull($parms[3], 'and no type, so egw.refresh reloads the list');
	}

	/**
	 * _targetapp must be a real app name: egw.refresh() resolves it before its msg-only
	 * early-return, and a name that is not an app throws in the kdots framework.
	 */
	public function testRefreshNamesTheAppInBothSlots()
	{
		$id = $this->makeBookmark('AjaxActionTest refresh args');

		$this->ui->ajax_action($this->execId(), 'delete', [$id]);

		$parms = $this->refreshCall();
		$this->assertSame('bookmarks', $parms[1],
			'bookmarks sends no push, so it cannot use the msg-only sentinel');
		$this->assertSame('bookmarks', $parms[4], 'never the msg-only-push-refresh sentinel');
	}
}
