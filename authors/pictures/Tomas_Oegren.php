<?php
//--------------------------------------------------------------------
//-  File          : index.php
//-  Project       : FVWM Home Page
//-  Date          : Fri Mar 14 21:32:08 2003
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

if (strlen($rel_path) == 0) $rel_path = "./../..";

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if (strlen("$navigation_check") > 0) return;

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include("$rel_path/definitions.inc");

$theme = "default";
$theme_file = theme_file("birthday_theme.inc");
$layout_file = $theme_file;

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "Tomas Oegren";
$heading        = "Tomas Oegren";
$link_name      = "Tomas Oegren";
$link_picture   = "pictures/icons/authors";
$parent_site    = "top";
$child_sites    = array();
//  RBW...
//  Must be able to cope with register_globals = off.
//$requested_file = basename(my_get_global("PHP_SELF", &$_SERVER));
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));

$this_site      = "authors";

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if (strlen("$navigation_check") > 0) return;

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if (strlen("$site_has_been_loaded") == 0) {
  $site_has_been_loaded = "true";
  include(sec_filename($layout_file));
  exit();
}

decoration_window_start("Tomas &Ouml;gren"); 
?>


<a href="index.php"><img src="Tomas_Oegren.jpg" border="0"></a><br>
<br>

<!-- <a href="">Personal Website</a><br> -->
<br>


<?php 
decoration_window_end(); 
?> 