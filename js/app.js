/**
 * EGroupware - Bookmarks - Javascript UI
 *
 * @link http://www.egroupware.org
 * @package bookmarks
 * @author Hadi Nategh	<hn-AT-stylite.de>
 * @copyright 2015 Stylite AG
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @version $Id:$
 */

/**
 * UI for bookmarks
 *
 * @augments AppJS
 */
app.classes.bookmarks = AppJS.extend(
{
	appname: 'bookmarks',
	/**
	 * et2 widget container
	 */
	et2: null,
	/**
	 * path widget
	 */

	/**
	 * Constructor
	 *
	 * @memberOf app.bookmarks
	 */
	init: function()
	{
		// call parent
		this._super.apply(this, arguments);
	},

	/**
	 * Destructor
	 */
	destroy: function()
	{
		delete this.et2;
		// call parent
		this._super.apply(this, arguments);
	},

	/**
	 * This function is called when the etemplate2 object is loaded
	 * and ready.  If you must store a reference to the et2 object,
	 * make sure to clean it up in destroy().
	 *
	 * @param et2 etemplate2 Newly ready object
	 */
	et2_ready: function(et2)
	{
		// call parent
		this._super.apply(this, arguments);
		switch (et2.name)
		{
			case 'bookmarks.list':
				this.setState
				break;
			case 'bookmarks.tree':
				break;
		}
	},

	/**
	 * Observer method receives update notifications from all applications
	 *
	 * App is responsible for only reacting to "messages" it is interested in!
	 *
	 * @param {string} _msg message (already translated) to show, eg. 'Entry deleted'
	 * @param {string} _app application name
	 * @param {(string|number)} _id id of entry to refresh or null
	 * @param {string} _type either 'update', 'edit', 'delete', 'add' or null
	 * - update: request just modified data from given rows.  Sorting is not considered,
	 *		so if the sort field is changed, the row will not be moved.
	 * - edit: rows changed, but sorting may be affected.  Requires full reload.
	 * - delete: just delete the given rows clientside (no server interaction neccessary)
	 * - add: requires full reload for proper sorting
	 * @param {string} _msg_type 'error', 'warning' or 'success' (default)
	 * @param {object|null} _links app => array of ids of linked entries
	 * or null, if not triggered on server-side, which adds that info
	 * @return {false|*} false to stop regular refresh, thought all observers are run
	 */
	observer: function(_msg, _app, _id, _type, _msg_type, _links)
	{
		var tree = this.et2.getWidgetById('tree');
		if (tree)
		{
			var itemId = _id != 'undefined'?_app+"::"+_id:0;
			switch (_type)
			{
				case 'update':
				case 'edit':
					tree.refreshItem(tree.input.getParentId(itemId)||0);
			}
		}
	},
	/**
	 * Redirect the selected bookmark's leaf
	 * 
	 * @param {type} _id
	 * @param {type} _widget
	 */
	tree_onclick: function (_id, _widget)
	{
		// Get the bookmark id
		var id = _id.split('/');
		if (id) id = id[id.length-1];
		
		var url = _widget.getUserData(_id,'url');

		if (url) this.egw.open_link(this.egw.link('/index.php','menuaction=bookmarks.bookmarks_ui.redirect&bm_id='+id),'_blank');
	},

	/**
	 *
	 * @param {type} _action
	 * @param {type} _selected
	 */
	tree_action: function (_action, _selected)
	{
		// Get the bookmark id
		var id = _selected[0].id.split('/');
		if (id) id = id[id.length-1];

		switch (_action.id)
		{
			case 'visit':
				this.egw.open_link(this.egw.link('/index.php','menuaction=bookmarks.bookmarks_ui.redirect&bm_id='+id),'_blank');
				break;
			case 'edit':
				this.egw.open_link(this.egw.link('/index.php','menuaction=bookmarks.bookmarks_ui.edit&bm_id='+id),'',egw().link_get_registry('bookmarks','add_popup'), 'bookmarks');
				break;
			case 'add':
				this.egw.openPopup(this.egw.link('/index.php','menuaction=bookmarks.bookmarks_ui.create&cat_id='+id),'750','300','_blank');
				break;
			case 'mailto':
				//TODO
				break;
			case 'delete':
				//TODO

		}
	},

	/**
	 * Set a state previously returned by getState
	 *
	 * Called by favorites to set a state saved as favorite.
	 *
	 * @param {object} state containing "name" attribute to be used as "favorite" GET parameter to a nextmatch
	 */
	setState: function(_state)
	{
		this._super.apply(this,arguments);
		//TODO
	},
	
	/**
	 * Return state object defining current view
	 *
	 * Called by favorites to query current state.
	 *
	 * @return {object} description
	 */
	getState: function()
	{
		var state = this.state;
		//TODO
		return state;
	}

});
