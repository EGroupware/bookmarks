<?php
	/**************************************************************************\
	* phpGroupWare - Bookmarks                                                 *
	* http://www.phpgroupware.org                                              *
	* Based on Bookmarker Copyright (C) 1998  Padraic Renaghan                 *
	*                     http://www.renaghan.com/bookmarker                   *
	* --------------------------------------------                             *
	*  This program is free software; you can redistribute it and/or modify it *
	*  under the terms of the GNU General Public License as published by the   *
	*  Free Software Foundation; either version 2 of the License, or (at your  *
	*  option) any later version.                                              *
	\**************************************************************************/

	/* $Id$ */

	$phpgw_info['flags'] = array(
		'currentapp' => 'bookmarks',
		'nonavbar'   => True,
		'noheader' => True
	);

	include('../header.inc.php');
	$phpgw->bookmarks = createobject('bookmarks.bookmarks');
	$location_info    = $phpgw->bookmarks->read_session_data();

	if (is_array($location_info))
	{
		$extravars     = 'bm_cat=' . $location_info['bm_cat'];
	}

	if (is_array($location_info) && $location_info['returnto'])
	{
		$phpgw->redirect($phpgw->link('/bookmarks/' . $location_info['returnto'],$extravars));
	}
	else
	{
		if ($phpgw_info['user']['preferences']['bookmarks']['defaultview'] == 'tree')
		{
			$phpgw->redirect($phpgw->link('/bookmarks/tree.php',$extravars));
		}
		else
		{
			$phpgw->redirect($phpgw->link('/bookmarks/list.php',$extravars));
		}
	}
?>