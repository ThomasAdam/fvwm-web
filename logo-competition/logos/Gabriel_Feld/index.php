<?php
//--------------------------------------------------------------------
//-  File          : @FILENAME@
//-  Project       : FVWM Home page
//-  Programmer    : Logo Competitor
//--------------------------------------------------------------------

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if (strlen($navigation_check) > 0) return;

$rel_path = "../../..";

//--------------------------------------------------------------------
// load some
//--------------------------------------------------------------------
include($rel_path."/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Logo Competition - Gabriel Feld logos";
$heading        = "FVWM - Logo Competition - Gabriel Feld logos";
$link_name      = "Logo Competition";
$link_picture   = "pictures/icons/logo_competition";
$parent_site    = "news";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "logo_competition";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if (strlen($site_has_been_loaded) == 0) {
	$site_has_been_loaded = "true";
	include(sec_filename($layout_file));
	exit();
}

if( file_exists("./../color_select.inc") ) include("./../color_select.inc");
?>

<?php decoration_window_start("By Gabriel Feld", "100%", ""); ?>

<?php 
// From: Gabriel Feld <gfeld@risd.edu>
// Date: Fri, 29 Aug 2003 09:53:40 -0400
// To: fvwm-logo@lists.sourceforge.net
// Subject: [FVWM-LOGO] logo competition
?>

<p><img src="fvwm1.png"></p>
<p><img src="fvwm2.png"></p>
<p><img src="fvwm3.png"></p>

<?php decoration_window_end(); ?>

<p>Return to <a href="<?php echo conv_link_target('../../logos_new.php');?>">index</a>.</p>