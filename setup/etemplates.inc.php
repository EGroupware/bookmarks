<?php
/**
	* eGroupWare - eTemplates for Application bookmarks
	* http://www.egroupware.org
	* generated by soetemplate::dump4setup() 2010-06-21 03:50
	*
	* @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
	* @package bookmarks
	* @subpackage setup
	* @version $Id: class.soetemplate.inc.php 30442 2010-05-30 11:19:50Z ralfbecker $
	*/

$templ_version=1;

$templ_data[] = array('name' => 'bookmarks.add','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:10:{i:0;a:4:{s:2:"h1";s:6:",!@msg";s:2:"c4";s:4:",top";s:2:"c6";s:4:",top";s:1:"A";s:5:"200px";}i:1;a:2:{s:1:"A";a:3:{s:4:"type";s:4:"html";s:4:"span";s:11:"all,message";s:4:"name";s:3:"msg";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:2;a:2:{s:1:"A";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:6:"2,,0,0";i:1;a:2:{s:4:"type";s:5:"label";s:5:"label";s:3:"URL";}i:2;a:3:{s:4:"type";s:5:"image";s:4:"name";s:7:"favicon";s:5:"align";s:5:"right";}}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"name";s:3:"url";s:4:"span";s:5:",text";s:4:"size";s:4:",255";}}i:3;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:4:"Name";}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"name";s:4:"name";s:4:"span";s:5:",text";s:4:"size";s:4:",255";}}i:4;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:11:"Description";}s:1:"B";a:3:{s:4:"type";s:8:"textarea";s:4:"name";s:4:"desc";s:4:"span";s:5:",text";}}i:5;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:8:"Keywords";}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"name";s:8:"keywords";s:4:"span";s:5:",text";s:4:"size";s:4:",255";}}i:6;a:2:{s:1:"A";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:6:"2,,0,0";i:1;a:2:{s:4:"type";s:5:"label";s:5:"label";s:8:"Category";}i:2;a:4:{s:4:"type";s:6:"button";s:4:"name";s:13:"edit_category";s:4:"size";s:4:"edit";s:5:"align";s:5:"right";}}s:1:"B";a:2:{s:4:"type";s:10:"select-cat";s:4:"name";s:8:"category";}}i:7;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:6:"Rating";}s:1:"B";a:3:{s:4:"type";s:13:"select-number";s:4:"name";s:6:"rating";s:4:"size";s:5:",0,10";}}i:8;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"Private";}s:1:"B";a:2:{s:4:"type";s:8:"checkbox";s:4:"name";s:6:"access";}}i:9;a:2:{s:1:"A";a:5:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"2";s:4:"span";s:3:"all";i:1;a:3:{s:4:"type";s:6:"button";s:5:"label";s:4:"Save";s:4:"name";s:4:"save";}i:2;a:3:{s:4:"type";s:6:"button";s:4:"name";s:6:"cancel";s:5:"label";s:6:"Cancel";}}s:1:"B";a:1:{s:4:"type";s:5:"label";}}}s:4:"rows";i:9;s:4:"cols";i:2;s:5:"align";s:6:"center";s:7:"options";a:0:{}}}','size' => '','style' => 'input[type="text"], .text input {
  width: 50em;
}

textarea {
  width: 55em;
  height: 5em;
}','modified' => '1263935075',);

$templ_data[] = array('name' => 'bookmarks.edit','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:4:{i:0;a:1:{s:2:"h1";s:6:",!@msg";}i:1;a:2:{s:1:"A";a:3:{s:4:"type";s:4:"html";s:4:"span";s:11:"all,message";s:4:"name";s:3:"msg";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:2;a:2:{s:1:"A";a:4:{s:4:"type";s:3:"tab";s:5:"label";s:43:"General|Details|Links|Custom fields|History";s:4:"name";s:36:"general|details|links|custom|history";s:4:"span";s:3:"all";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:3;a:2:{s:1:"A";a:6:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"4";i:1;a:3:{s:4:"type";s:6:"button";s:4:"name";s:4:"edit";s:5:"label";s:4:"Edit";}i:2;a:3:{s:4:"type";s:6:"button";s:5:"label";s:4:"Save";s:4:"name";s:4:"save";}i:3;a:3:{s:4:"type";s:6:"button";s:4:"name";s:5:"apply";s:5:"label";s:5:"Apply";}i:4;a:3:{s:4:"type";s:6:"button";s:4:"name";s:6:"cancel";s:5:"label";s:6:"Cancel";}}s:1:"B";a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Delete";s:5:"align";s:5:"right";s:4:"name";s:6:"delete";}}}s:4:"rows";i:3;s:4:"cols";i:2;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '','modified' => '1264004383',);

$templ_data[] = array('name' => 'bookmarks.edit.custom','template' => '','lang' => '','group' => '0','version' => '','data' => 'a:1:{i:0;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:2:{i:0;a:0:{}i:1;a:1:{s:1:"A";a:1:{s:4:"type";s:12:"customfields";}}}s:4:"rows";i:1;s:4:"cols";i:1;}}','size' => '','style' => '','modified' => '1264108709',);

$templ_data[] = array('name' => 'bookmarks.edit.details','template' => '','lang' => '','group' => '0','version' => '','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"size";s:3:",,0";s:4:"data";a:6:{i:0;a:1:{s:1:"A";s:5:"200px";}i:1;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:5:"Owner";}s:1:"B";a:3:{s:4:"type";s:14:"select-account";s:4:"name";s:5:"owner";s:8:"readonly";s:1:"1";}}i:2;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:5:"Added";}s:1:"B";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:5:"added";s:8:"readonly";s:1:"1";}}i:3;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"Updated";}s:1:"B";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:7:"updated";s:8:"readonly";s:1:"1";}}i:4;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:12:"Last visited";}s:1:"B";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:7:"visited";s:8:"readonly";s:1:"1";}}i:5;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:12:"Total visits";}s:1:"B";a:3:{s:4:"type";s:5:"label";s:4:"name";s:6:"visits";s:5:"align";s:5:"right";}}}s:4:"rows";i:5;s:4:"cols";i:2;s:7:"options";a:1:{i:2;s:1:"0";}}}','size' => ',,0','style' => '','modified' => '1264004252',);

$templ_data[] = array('name' => 'bookmarks.edit.general','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:1:{i:0;a:7:{s:4:"type";s:4:"grid";s:4:"data";a:7:{i:0;a:5:{s:2:"h1";s:6:",@edit";s:1:"A";s:5:"200px";s:2:"h2";s:7:",!@edit";s:2:"c4";s:4:",top";s:2:"c6";s:4:",top";}i:1;a:3:{s:1:"A";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:6:"2,,0,0";i:1;a:2:{s:4:"type";s:5:"label";s:5:"label";s:3:"URL";}i:2;a:3:{s:4:"type";s:5:"image";s:4:"name";s:8:"@favicon";s:5:"align";s:5:"right";}}s:1:"B";a:3:{s:4:"type";s:5:"label";s:4:"size";s:59:",bookmarks.bookmarks_ui.redirect&bm_id={$cont[id]},,,_blank";s:4:"name";s:3:"url";}s:1:"C";a:1:{s:4:"type";s:5:"label";}}i:2;a:3:{s:1:"A";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:6:"2,,0,0";i:1;a:2:{s:4:"type";s:5:"label";s:5:"label";s:3:"URL";}i:2;a:3:{s:4:"type";s:5:"image";s:4:"name";s:8:"@favicon";s:5:"align";s:5:"right";}}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"name";s:3:"url";s:4:"span";s:8:"all,text";s:4:"size";s:4:",255";}s:1:"C";a:1:{s:4:"type";s:5:"label";}}i:3;a:3:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:4:"Name";}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"name";s:4:"name";s:4:"span";s:8:"all,text";s:4:"size";s:4:",255";}s:1:"C";a:1:{s:4:"type";s:5:"label";}}i:4;a:3:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:11:"Description";}s:1:"B";a:3:{s:4:"type";s:8:"textarea";s:4:"name";s:4:"desc";s:4:"span";s:8:"all,text";}s:1:"C";a:1:{s:4:"type";s:5:"label";}}i:5;a:3:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:8:"Keywords";}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"name";s:8:"keywords";s:4:"span";s:8:"all,text";s:4:"size";s:4:",255";}s:1:"C";a:1:{s:4:"type";s:5:"label";}}i:6;a:3:{s:1:"A";a:7:{s:4:"type";s:4:"hbox";s:4:"size";s:6:"1,,0,0";s:4:"span";s:3:"all";s:4:"data";a:4:{i:0;a:0:{}i:1;a:2:{s:1:"A";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:1:"2";i:1;a:2:{s:4:"type";s:5:"label";s:5:"label";s:8:"Category";}i:2;a:3:{s:4:"type";s:6:"button";s:4:"name";s:13:"edit_category";s:4:"size";s:4:"edit";}}s:1:"B";a:3:{s:4:"type";s:10:"select-cat";s:4:"size";s:1:"4";s:4:"name";s:8:"category";}}i:2;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:6:"Rating";}s:1:"B";a:3:{s:4:"type";s:13:"select-number";s:4:"name";s:6:"rating";s:4:"size";s:5:",0,10";}}i:3;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"Private";}s:1:"B";a:2:{s:4:"type";s:8:"checkbox";s:4:"name";s:6:"access";}}}s:4:"rows";i:3;s:4:"cols";i:2;i:1;a:7:{s:4:"type";s:4:"grid";s:4:"size";s:9:"80%,,,,,0";s:4:"span";s:1:"2";s:4:"data";a:4:{i:0;a:2:{s:2:"c1";s:4:",top";s:1:"A";s:5:"200px";}i:1;a:2:{s:1:"A";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:6:"2,,0,0";i:1;a:2:{s:4:"type";s:5:"label";s:5:"label";s:8:"Category";}i:2;a:4:{s:4:"type";s:6:"button";s:4:"name";s:13:"edit_category";s:4:"size";s:4:"edit";s:5:"align";s:5:"right";}}s:1:"B";a:2:{s:4:"type";s:10:"select-cat";s:4:"name";s:8:"category";}}i:2;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:6:"Rating";}s:1:"B";a:3:{s:4:"type";s:13:"select-number";s:4:"name";s:6:"rating";s:4:"size";s:5:",0,10";}}i:3;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"Private";}s:1:"B";a:3:{s:4:"type";s:8:"checkbox";s:4:"name";s:6:"access";s:4:"size";s:14:"private,public";}}}s:4:"rows";i:3;s:4:"cols";i:2;s:7:"options";a:2:{i:0;s:3:"80%";i:5;s:1:"0";}}}s:1:"B";a:1:{s:4:"type";s:5:"label";}s:1:"C";a:1:{s:4:"type";s:5:"label";}}}s:4:"rows";i:6;s:4:"cols";i:3;s:5:"align";s:6:"center";s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => 'input[type="text"], .text input {
  width: 40em;
}

textarea {
  width: 44em;
  height: 5em;
}

.no_wrap {
  white-space: nowrap;
}','modified' => '1264004123',);

$templ_data[] = array('name' => 'bookmarks.edit.history','template' => '','lang' => '','group' => '0','version' => '','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:2:{i:0;a:0:{}i:1;a:1:{s:1:"A";a:2:{s:4:"type";s:10:"historylog";s:4:"name";s:7:"history";}}}s:4:"rows";i:1;s:4:"cols";i:1;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '','modified' => '1264004438',);

$templ_data[] = array('name' => 'bookmarks.edit.links','template' => '','lang' => '','group' => '0','version' => '','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:6:{i:0;a:8:{s:1:"A";s:3:"100";s:2:"h1";s:7:",!@edit";s:2:"h2";s:7:",!@edit";s:2:"c1";s:2:"th";s:2:"c2";s:3:"row";s:2:"c4";s:2:"th";s:2:"c5";s:11:"row_off,top";s:2:"h3";s:7:",!@edit";}i:1;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"span";s:3:"all";s:5:"label";s:16:"Create new links";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:2;a:2:{s:1:"A";a:3:{s:4:"type";s:7:"link-to";s:4:"span";s:3:"all";s:4:"name";s:7:"link_to";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:3;a:2:{s:1:"A";a:3:{s:4:"type";s:8:"link-add";s:4:"span";s:3:"all";s:4:"name";s:7:"link_to";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:4;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"span";s:3:"all";s:5:"label";s:14:"Existing links";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:5;a:2:{s:1:"A";a:3:{s:4:"type";s:9:"link-list";s:4:"span";s:3:"all";s:4:"name";s:7:"link_to";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}}s:4:"rows";i:5;s:4:"cols";i:2;s:4:"size";s:17:"100%,245,,,,,auto";s:7:"options";a:3:{i:0;s:4:"100%";i:1;s:3:"245";i:6;s:4:"auto";}}}','size' => '100%,245,,,,,auto','style' => '','modified' => '1264004330',);

$templ_data[] = array('name' => 'bookmarks.export','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:6:{i:0;a:4:{s:2:"h1";s:6:",!@msg";s:2:"h2";s:11:",!@bm_count";s:2:"h3";s:10:",@bm_count";s:2:"c3";s:4:",top";}i:1;a:2:{s:1:"A";a:3:{s:4:"type";s:4:"html";s:4:"span";s:11:"all,message";s:4:"name";s:3:"msg";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:2;a:2:{s:1:"A";a:4:{s:4:"type";s:5:"label";s:5:"label";s:32:"%s bookmarks selected for export";s:4:"name";s:8:"bm_count";s:4:"span";s:3:"all";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:3;a:2:{s:1:"A";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:6:"2,,0,0";i:1;a:2:{s:4:"type";s:5:"label";s:5:"label";s:20:"Categories to export";}i:2;a:2:{s:4:"type";s:5:"label";s:5:"label";s:50:"(Selecting a category includes all sub-categories)";}}s:1:"B";a:3:{s:4:"type";s:8:"tree-cat";s:4:"size";s:1:"1";s:4:"name";s:8:"category";}}i:4;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:13:"Export format";}s:1:"B";a:2:{s:4:"type";s:6:"select";s:4:"name";s:6:"format";}}i:5;a:2:{s:1:"A";a:5:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"2";s:4:"span";s:3:"all";i:1;a:3:{s:4:"type";s:6:"button";s:5:"label";s:6:"Export";s:4:"name";s:6:"export";}i:2;a:3:{s:4:"type";s:6:"button";s:4:"name";s:6:"cancel";s:5:"label";s:6:"Cancel";}}s:1:"B";a:1:{s:4:"type";s:5:"label";}}}s:4:"rows";i:5;s:4:"cols";i:2;s:5:"align";s:6:"center";s:7:"options";a:0:{}}}','size' => '','style' => '','modified' => '1264092736',);

$templ_data[] = array('name' => 'bookmarks.import','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:8:{i:0;a:3:{s:2:"h1";s:6:",!@msg";s:2:"c5";s:2:"th";s:2:"c3";s:2:"th";}i:1;a:2:{s:1:"A";a:3:{s:4:"type";s:4:"html";s:4:"name";s:3:"msg";s:4:"span";s:11:"all,message";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:2;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:13:"Bookmark file";}s:1:"B";a:2:{s:4:"type";s:4:"file";s:4:"name";s:4:"file";}}i:3;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:5:"label";s:49:"Note: You can use bookmark files exported as HTML";s:4:"span";s:8:"all,help";}s:1:"B";a:3:{s:4:"type";s:6:"select";s:4:"size";s:18:"Netscape / Firefox";s:4:"name";s:4:"type";}}i:4;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:21:"Import under category";}s:1:"B";a:2:{s:4:"type";s:10:"select-cat";s:4:"name";s:8:"category";}}i:5;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"span";s:8:"all,help";s:5:"label";s:38:"Sub-folders will create new categories";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:6;a:2:{s:1:"A";a:1:{s:4:"type";s:5:"label";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:7;a:2:{s:1:"A";a:5:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"2";s:4:"span";s:3:"all";i:1;a:4:{s:4:"type";s:6:"button";s:4:"span";s:3:"all";s:5:"label";s:6:"Import";s:4:"name";s:6:"import";}i:2;a:3:{s:4:"type";s:6:"button";s:4:"name";s:6:"cancel";s:5:"label";s:6:"Cancel";}}s:1:"B";a:1:{s:4:"type";s:5:"label";}}}s:4:"rows";i:7;s:4:"cols";i:2;s:5:"align";s:6:"center";s:7:"options";a:0:{}}}','size' => '','style' => '','modified' => '1264033712',);

$templ_data[] = array('name' => 'bookmarks.list','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:4:{i:0;a:1:{s:2:"h1";s:6:",!@msg";}i:1;a:2:{s:1:"A";a:4:{s:4:"type";s:5:"label";s:4:"span";s:11:"all,message";s:5:"align";s:6:"center";s:4:"name";s:3:"msg";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:2;a:2:{s:1:"A";a:3:{s:4:"type";s:9:"nextmatch";s:4:"name";s:9:"nextmatch";s:4:"span";s:3:"all";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:3;a:2:{s:1:"A";a:3:{s:4:"type";s:6:"button";s:5:"label";s:3:"add";s:4:"name";s:3:"add";}s:1:"B";a:6:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"3";s:5:"align";s:5:"right";i:1;a:6:{s:4:"type";s:8:"checkbox";s:4:"name";s:7:"use_all";s:5:"label";s:11:"whole query";s:8:"onchange";s:127:"if (this.checked==true && !confirm(\'Apply the action on the whole query, NOT only the shown bookmarks!!!\')) this.checked=false;";s:4:"help";s:68:"Apply the action on the whole query, NOT only the shown bookmarks!!!";s:8:"disabled";s:1:"1";}i:2;a:6:{s:4:"type";s:6:"select";s:8:"onchange";i:1;s:4:"size";s:19:"Select an action...";s:7:"no_lang";s:1:"1";s:4:"name";s:6:"action";s:4:"help";s:16:"Select an action";}i:3;a:8:{s:4:"type";s:6:"button";s:4:"size";s:9:"arrow_ltr";s:5:"label";s:9:"Check all";s:4:"name";s:9:"check_all";s:4:"help";s:9:"Check all";s:7:"onclick";s:77:"toggle_all(this.form,form::name(\'nextmatch[rows][checked][]\')); return false;";s:6:"needed";s:1:"1";s:4:"span";s:14:",checkAllArrow";}}}}s:4:"rows";i:3;s:4:"cols";i:2;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '','modified' => '1263921818',);

$templ_data[] = array('name' => 'bookmarks.list.row','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:9:{s:2:"c1";s:10:"nmr,bottom";s:2:"c2";s:7:"nmr,top";s:1:"B";s:1:"*";s:1:"C";s:3:"1px";s:1:"D";s:4:"50em";s:1:"F";s:3:"10%";s:1:"G";s:3:"10%";s:1:"E";s:17:",@no_customfields";s:1:"H";s:2:"1%";}i:1;a:8:{s:1:"A";a:1:{s:4:"type";s:5:"label";}s:1:"B";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:1:"2";i:1;a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:4:"Name";s:4:"name";s:7:"bm_name";}i:2;a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:4:"name";s:7:"bm_desc";s:5:"label";s:11:"Description";}}s:1:"C";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:1:"2";i:1;a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:8:"Category";s:4:"name";s:8:"category";}i:2;a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:4:"name";s:9:"bm_rating";s:5:"label";s:6:"Rating";}}s:1:"D";a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:8:"Keywords";s:4:"name";s:11:"bm_keywords";}s:1:"E";a:4:{s:4:"type";s:22:"nextmatch-customfields";i:1;a:3:{s:4:"type";s:16:"nextmatch-header";s:4:"name";s:12:"customfields";s:4:"size";s:13:"Custom fields";}i:2;a:5:{s:4:"type";s:4:"grid";s:4:"data";a:2:{i:0;a:0:{}i:1;a:1:{s:1:"A";a:4:{s:4:"type";s:19:"customfields-header";s:4:"size";s:13:"@customfields";s:5:"align";s:5:"right";s:7:"no_lang";s:1:"1";}}}s:4:"rows";i:1;s:4:"cols";i:1;s:7:"options";a:0:{}}s:4:"name";s:12:"customfields";}s:1:"F";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:6:"2,,0,0";i:1;a:3:{s:5:"label";s:12:"Last visited";s:4:"name";s:7:"visited";s:4:"type";s:20:"nextmatch-sortheader";}i:2;a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:4:"name";s:9:"bm_visits";s:5:"label";s:12:"Total visits";}}s:1:"G";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:6:"2,,0,0";i:1;a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:4:"name";s:5:"added";s:5:"label";s:7:"Created";}i:2;a:3:{s:4:"name";s:7:"updated";s:5:"label";s:13:"Last modified";s:4:"type";s:20:"nextmatch-sortheader";}}s:1:"H";a:6:{s:4:"type";s:4:"hbox";s:5:"align";s:6:"center";s:4:"size";s:1:"2";i:1;a:3:{s:4:"type";s:5:"label";s:5:"label";s:7:"Actions";s:5:"align";s:6:"center";}i:2;a:8:{s:4:"type";s:6:"button";s:4:"size";s:5:"check";s:5:"label";s:9:"Check all";s:4:"name";s:9:"check_all";s:4:"help";s:9:"Check all";s:7:"onclick";s:60:"toggle_all(this.form,form::name(\'checked[]\')); return false;";s:6:"needed";s:1:"1";s:5:"align";s:5:"right";}s:4:"span";s:8:",noPrint";}}i:2;a:8:{s:1:"A";a:6:{s:4:"type";s:5:"image";s:4:"size";s:14:"$row_cont[url]";s:5:"label";s:15:"$row_cont[name]";s:4:"name";s:15:"${row}[favicon]";s:4:"span";s:8:",favicon";s:5:"align";s:5:"right";}s:1:"B";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:1:"2";i:1;a:3:{s:4:"type";s:4:"hbox";s:4:"size";s:6:"1,,0,0";i:1;a:3:{s:4:"type";s:5:"label";s:4:"size";s:63:",bookmarks.bookmarks_ui.redirect&bm_id=${row_cont[id]},,,_blank";s:5:"label";s:26:"${row_cont[stripped_name]}";}}i:2;a:2:{s:4:"type";s:5:"label";s:4:"name";s:12:"${row}[desc]";}}s:1:"C";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:1:"2";i:1;a:3:{s:4:"type";s:10:"select-cat";s:4:"name";s:16:"${row}[category]";s:8:"readonly";s:1:"1";}i:2;a:3:{s:4:"type";s:5:"image";s:4:"name";s:23:"bar-{$row_cont[rating]}";s:4:"help";s:19:"Rating of this site";}}s:1:"D";a:2:{s:4:"type";s:5:"label";s:4:"name";s:16:"${row}[keywords]";}s:1:"E";a:3:{s:4:"type";s:17:"customfields-list";s:4:"span";s:13:",customfields";s:4:"name";s:4:"$row";}s:1:"F";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:1:"2";i:1;a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:15:"${row}[visited]";s:8:"readonly";s:1:"1";}i:2;a:3:{s:4:"type";s:5:"label";s:4:"name";s:14:"${row}[visits]";s:7:"no_lang";s:1:"1";}}s:1:"G";a:5:{s:4:"type";s:4:"vbox";s:4:"size";s:6:"3,,0,0";i:1;a:3:{s:4:"type";s:14:"select-account";s:4:"name";s:13:"${row}[owner]";s:8:"readonly";s:1:"1";}i:2;a:4:{s:4:"type";s:9:"date-time";s:4:"name";s:13:"${row}[added]";s:8:"readonly";s:1:"1";s:4:"span";s:7:",noWrap";}i:3;a:4:{s:4:"type";s:9:"date-time";s:4:"name";s:15:"${row}[updated]";s:8:"readonly";s:1:"1";s:4:"span";s:8:",noBreak";}}s:1:"H";a:8:{s:4:"type";s:4:"hbox";s:4:"size";s:4:"5,,0";i:1;a:3:{s:4:"type";s:5:"image";s:4:"size";s:49:"bookmarks.bookmarks_ui.view&bm_id=${row_cont[id]}";s:4:"name";s:4:"view";}i:2;a:4:{s:4:"type";s:6:"button";s:4:"name";s:21:"edit[${row_cont[id]}]";s:4:"size";s:4:"edit";s:5:"label";s:4:"Edit";}i:3;a:4:{s:4:"type";s:6:"button";s:4:"name";s:23:"delete[{$row_cont[id]}]";s:4:"size";s:6:"delete";s:7:"onclick";s:136:"var str = egw::lang(\'Delete\');  if( confirm(str + \' {$row_cont[stripped_name]}?\')) { return submitit(eTemplate, this.id);} return false;";}i:4;a:3:{s:4:"type";s:5:"image";s:4:"name";s:4:"mail";s:4:"size";s:49:"bookmarks.bookmarks_ui.mail&bm_id=${row_cont[id]}";}s:4:"span";s:8:",noPrint";i:5;a:3:{s:4:"type";s:8:"checkbox";s:4:"name";s:9:"checked[]";s:4:"size";s:13:"$row_cont[id]";}}}}s:4:"rows";i:2;s:4:"cols";i:8;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '','modified' => '1263926025',);

$templ_data[] = array('name' => 'bookmarks.mail','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:6:{i:0;a:1:{s:2:"c4";s:4:",top";}i:1;a:2:{s:1:"A";a:3:{s:4:"type";s:4:"html";s:4:"name";s:3:"msg";s:4:"span";s:11:"all,message";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:2;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:19:"To E-Mail Addresses";}s:1:"B";a:3:{s:4:"type";s:4:"text";s:4:"name";s:2:"to";s:4:"size";s:2:"50";}}i:3;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"Subject";}s:1:"B";a:3:{s:4:"type";s:4:"text";s:4:"name";s:7:"subject";s:4:"size";s:2:"50";}}i:4;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"Message";}s:1:"B";a:3:{s:4:"type";s:8:"textarea";s:4:"size";s:4:"4,50";s:4:"name";s:7:"message";}}i:5;a:2:{s:1:"A";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"2";i:1;a:3:{s:4:"type";s:6:"button";s:5:"label";s:4:"Send";s:4:"name";s:4:"send";}i:2;a:3:{s:4:"type";s:6:"button";s:4:"name";s:6:"cancel";s:5:"label";s:6:"Cancel";}}s:1:"B";a:1:{s:4:"type";s:5:"label";}}}s:4:"rows";i:5;s:4:"cols";i:2;s:5:"align";s:6:"center";s:7:"options";a:0:{}}}','size' => '','style' => '','modified' => '1264025999',);

$templ_data[] = array('name' => 'bookmarks.tree','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:1:{i:0;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:1:{s:2:"h1";s:6:",!@msg";}i:1;a:1:{s:1:"A";a:3:{s:4:"type";s:4:"html";s:4:"span";s:11:"all,message";s:4:"name";s:3:"msg";}}i:2;a:1:{s:1:"A";a:2:{s:4:"type";s:4:"tree";s:4:"name";s:4:"tree";}}}s:4:"rows";i:2;s:4:"cols";i:1;}}','size' => '','style' => 'a.action {
  float: right;
}','modified' => '1264098471',);

