<?php
//--------------------------------------------------------------------
//-  File          : dev_downloadbugs.php
//-  Project       : FVWM Home page
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

if(!isset($rel_path)) $rel_path = "./..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
if(!isset($navigation_check)) include_once($rel_path.'/definitions.inc'); 

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Downloading Bug Reports";
$heading        = "FVWM - Downloading Bug Reports";
$link_name      = "Downloading Bug Reports";
$link_picture   = "pictures/icons/doc_developers_download_bugs";
$parent_site    = "developers";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = str_replace(".php", "", "$requested_file");

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if(isset($navigation_check)) return;

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
  $site_has_been_loaded = "true";
  include_once(sec_filename("$layout_file"));
  exit();
}

decoration_window_start("Downloading Bug Reports");
?>

  <p>
    You can access bug reports one at a time using Jitterbug,
    from <a href="http://www.fvwm.org/cgi-bin/fvwm-bug">here</a>.
    For developer access use
    <a href="http://www.fvwm.org/cgi-bin/fvwm-bug.private">this</a>.
    Sometimes thats too tedious.
    You can download whole sections
    of the bug database in tar.gz format using these links:</a>
    <ul>
      <li><a href="http://fvwm.org/fvwm-bugs.tar.gz">All bugs</a></li>
      <li><a href="http://fvwm.org/fvwm-bugs-incoming.tar.gz">Incoming</a></li>
      <li><a href="http://fvwm.org/fvwm-bugs-confirmed.tar.gz">Confirmed</a></li>
    </ul>

<?php decoration_window_end(); ?>
