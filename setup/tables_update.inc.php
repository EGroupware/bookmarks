<?php
  /**************************************************************************\
  * phpGroupWare - Setup                                                     *
  * http://www.phpgroupware.org                                              *
  * --------------------------------------------                             *
  *  This program is free software; you can redistribute it and/or modify it *
  *  under the terms of the GNU General Public License as published by the   *
  *  Free Software Foundation; either version 2 of the License, or (at your  *
  *  option) any later version.                                              *
  \**************************************************************************/

  /**************************************************************************\
  * This file should be generated for you. It should never be edited by hand *
  \**************************************************************************/

  /* $Id$ */

	$test[] = '0.8.1';
	function bookmarks_upgrade0_8_1()
	{
		$GLOBALS['phpgw_setup']->oProc->AlterColumn('phpgw_bookmarks','bm_owner', array('type' => 'int', 'precision' => 4,'nullable' => True));
		$GLOBALS['phpgw_setup']->oProc->AlterColumn('phpgw_bookmarks','bm_category', array('type' => 'int', 'precision' => 4,'nullable' => True));
		$GLOBALS['phpgw_setup']->oProc->AlterColumn('phpgw_bookmarks','bm_subcategory', array('type' => 'int', 'precision' => 4,'nullable' => True));
		$GLOBALS['phpgw_setup']->oProc->AlterColumn('phpgw_bookmarks','bm_rating', array('type' => 'int', 'precision' => 4,'nullable' => True));
		$GLOBALS['phpgw_setup']->oProc->AlterColumn('phpgw_bookmarks','bm_visits', array('type' => 'int', 'precision' => 4,'nullable' => True));

		$GLOBALS['setup_info']['bookmarks']['currentver'] = '0.8.2';
		return $GLOBALS['setup_info']['bookmarks']['currentver'];
	}

	$test[] = '0.8.2';
	function bookmarks_upgrade0_8_2()
	{
		global $setup_info,$phpgw_setup;

		$db2 = $phpgw_setup->db;
		$db2->query("update phpgw_bookmarks SET bm_category = bm_subcategory WHERE bm_subcategory != 0");

		$newtbldef = array(
			'fd' => array(
				'bm_id' => array('type' => 'auto','nullable' => False),
				'bm_owner' => array('type' => 'int', 'precision' => 4,'nullable' => True),
				'bm_access' => array('type' => 'varchar', 'precision' => 255,'nullable' => True),
				'bm_url' => array('type' => 'varchar', 'precision' => 255,'nullable' => True),
				'bm_name' => array('type' => 'varchar', 'precision' => 255,'nullable' => True),
				'bm_desc' => array('type' => 'varchar', 'precision' => 255,'nullable' => True),
				'bm_keywords' => array('type' => 'varchar', 'precision' => 255,'nullable' => True),
				'bm_category' => array('type' => 'int', 'precision' => 4,'nullable' => True),
				'bm_rating' => array('type' => 'int', 'precision' => 4,'nullable' => True),
				'bm_info' => array('type' => 'varchar', 'precision' => 255,'nullable' => True),
				'bm_visits' => array('type' => 'int', 'precision' => 4,'nullable' => True)
			),
			'pk' => array('bm_id'),
			'fk' => array(),
			'ix' => array(),
			'uc' => array()
		);
		$phpgw_setup->oProc->DropColumn('phpgw_bookmarks',$newtbldef,'bm_subcategory');

		$setup_info['bookmarks']['currentver'] = '0.9.1';
		return $setup_info['bookmarks']['currentver'];
	}