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

  $phpgw_info["flags"]["currentapp"] = "bookmarks";
  $phpgw_info["flags"]["enable_nextmatchs_class"] = True;
  include("../header.inc.php");

  $phpgw->template->set_file(array(standard            => "common.standard.tpl",
                                   msie_js             => "common.msie_js.tpl",
                                   body                => "create.body.tpl",
                                   possible_dup        => "create.possible_dup.tpl",
                                   possible_dup_lines  => "create.possible_dup.line.tpl"
                            ));

  set_standard("create", &$phpgw->template);

  // if browser is MSIE, then need to add this bit
  // of javascript to the page so that MSIE correctly
  // brings quik-mark and mail-this-link popups to the front.
  if (check_browser() == "MSIE") {
     $phpgw->template->parse(MSIE_JS, "msie_js");
  }

  // initialize variable that holds id of newly created bookmark
  $id = 0;

### Submit Handler
### Get a database connection
//$db    = new bk_db;
$bmark = new bmark;


## Check if there was a submission
while ( is_array($HTTP_POST_VARS)
     && list($key, $val) = each($HTTP_POST_VARS)) {
  switch ($key) {

  ## Create a new bookmark
  case "bk_create_x":
  case "bk_create":

    if(!$bmark->add(&$id, $url, $name, $desc, $keyw, $bookmarks_category, $bookmarks_subcategory, 
                    $bookmarks_rating, $public)) break;
    break;

  default:
    break;
 }
}

# if dislpaying b/c of error, show previous data
if ($url > "") {
  $default_url = $url;
# otherwise default from URL if available
} elseif ($curl > "") {
  $default_url = $curl;
# otherwise just default to http://
} else {
  $default_url = "http://";
}

# if dislpaying b/c of error, show previous data
if ($name > "") {
  $default_name = $name;
# otherwise default from URL if available
} elseif ($ctitle > "") {
  $default_name = $ctitle;
}

# if dislpaying b/c of error, show previous data
if ($desc > "") {
  $default_desc = $desc;
# otherwise default from URL if available
} elseif ($ctitle > "") {
  $default_desc = $ctitle;
}

# if dislpaying b/c of error, show previous data
if ($keyw > "") {
  $default_keyw = $keyw;
}

# if dislpaying b/c of error, show previous data
if ($category > 0) {
  $default_category = $category;
} else {
  $default_category = 0;
}

# if dislpaying b/c of error, show previous data
if ($subcategory > 0) {
  $default_subcategory = $subcategory;
} else {
  $default_subcategory = 0;
}

# if dislpaying b/c of error, show previous data
if ($rating > 0) {
  $default_rating = $rating;
} else {
  $default_rating = 0;
}

## Check to see if any existing bookmarks are a "close match".
## don't do this check after a save.
/*if ($default_url != "http://") {
   $db_dup   = $phpgw->db;

   ## the "close match" consists of looking for other URLs at the
   ## hostname that match the first $bookmarker->possible_dup_chars
   ## after the hostname.
   $url_elements = parse_url($default_url);
   $hostname  = $url_elements[host];
   $scheme    = $url_elements[scheme];
   $path_part = substr($url_elements[path], 0, $bookmarker->possible_dup_chars);
   $look_for = $scheme."://".$hostname.$path_part."%";

   $query = sprintf("select url, name from bookmark where url like '%s' and username = '%s'", $look_for, $phpgw_info["user"]["account_id"]);
   $db_dup->query($query,__LINE__,__FILE__);
   if ($db_dup->Errno == 0) {
      while ($db_dup->next_record()){
         $phpgw->template->set_var(array(DUP_URL   => $db_dup->f("url"),
                                         DUP_NAME  => htmlspecialchars(stripslashes($db_dup->f("name")))
                                  ));
         $phpgw->template->parse(POSSIBLE_DUP_LINES, "possible_dup_lines", TRUE);
         $possible_dups_found = TRUE;
     }
     if ($possible_dups_found){
        $phpgw->template->parse(POSSIBLE_DUP, "possible_dup");
     }
   }
} */

load_ddlb("bookmarks_category", $default_category, &$category_select, FALSE);
load_ddlb("bookmarks_subcategory", $default_subcategory, &$subcategory_select, FALSE);
//load_ddlb("bookmarks_rating", $default_rating, &$rating_select, FALSE);

# only default the public checkbox the first time the
# page is shown. after that, show the value that the
# user chose.
/*if ($id == 0) {
  if ($auth->auth["default_public"] == "Y") {
    $default_public = "CHECKED";
  }
} else {
  if ($public == "on") {
    $default_public = "CHECKED";
  }
} */

  $rating_select = '<select name="bookmarks_rating">'
           . ' <option value="0">--</option>'
           . ' <option value="1">1 - ' . lang("Lowest") . '</option>'
           . ' <option value="2">2</option>'
           . ' <option value="3">3</option>'
           . ' <option value="4">4</option>'
           . ' <option value="5">5</option>'
           . ' <option value="6">6</option>'
           . ' <option value="7">7</option>'
           . ' <option value="8">8</option>'
           . ' <option value="9">9</option>'
           . ' <option value="10">10 - ' . lang("Highest") . '</option>'
           . '</select>';

  $phpgw->template->set_var(array(
    FORM_ACTION            => $phpgw->link(),
    DEFAULT_URL            => $default_url,
    DEFAULT_NAME           => htmlspecialchars(stripslashes($default_name)),
    DEFAULT_DESC           => htmlspecialchars(stripslashes($default_desc)),
    DEFAULT_KEYW           => htmlspecialchars(stripslashes($default_keyw)),
    DEFAULT_CATEGORY       => $default_category,
    DEFAULT_SUBCATEGORY    => $default_subcategory,
    DEFAULT_RATING         => $default_rating,
    CATEGORY_SELECT        => $category_select,
    SUBCATEGORY_SELECT     => $subcategory_select,
    RATING_SELECT          => $rating_select,
    DEFAULT_PUBLIC         => $default_public
  ));

  $phpgw->common->phpgw_footer();
?>
