<?php
//--------------------------------------------------------------------
//-  File          : download/index.php
//-  Project       : FVWM Home Page
//-  Date          : Fri Mar 14 21:32:08 2003
//-  Programmer    : Uwe Pross
//-  Last modified : <14.04.2003 21:05:18 uwe>
//--------------------------------------------------------------------

$rel_path = "..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include($rel_path.'/definitions.inc'); 

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Download";
$link_name      = "Download";
$link_picture   = "pictures/icons/download";
$parent_site    = "top";
$child_sites    = array("icons");
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "download";

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if( strlen("$navigation_check") > 0 ) return;

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if( strlen("$site_has_been_loaded") == 0 ) {
  $site_has_been_loaded = "true";
  if( strlen($layout) > 0 ) {
    $file = $rel_path."/layout_".$layout.".inc";
    if( file_exists($file) ) $layout_file = $file;
  }
  include(sec_filename("$layout_file"));
  exit();
}
?>

<?php decoration_window_start("Download fvwm"); ?>

  <h4>Current packages:</h4>
  <ul>
    <li>
      Latest Stable Release (<b>2.4.15</b>):
      <a href="ftp://ftp.fvwm.org/pub/fvwm/version-2/fvwm-2.4.15.tar.gz">tar.gz</a>,
      <a href="ftp://ftp.fvwm.org/pub/fvwm/version-2/fvwm-2.4.15.tar.bz2">tar.bz2</a>
    </li>
  
    <li>
      Latest Unstable Release (<b>2.5.6</b>):
      <a href="ftp://ftp.fvwm.org/pub/fvwm/version-2/fvwm-2.5.6.tar.gz">tar.gz</a>,
      <a href="ftp://ftp.fvwm.org/pub/fvwm/version-2/fvwm-2.5.6.tar.bz2">tar.bz2</a>
    </li>

    <li>
      Latest Alpha Versions:
      <a href="ftp://ftp.fvwm.org/pub/fvwm/version-2/testing/">here</a>
    </li>
    
    <li>
      Latest snapshot:
      <a href="ftp://ftp.fvwm.org/pub/fvwm/devel/snapshots/">here</a>
    </li>

    <li>
      Latest CVS sources via ftp:
      <a href="ftp://ftp.fvwm.org/pub/fvwm/devel/sources/">here</a>
    </li>

    <li>Direct CVS access: see below</li>

    <li>
      RPM packages:
      <!-- <a href="ftp://fvwm-themes.sourceforge.net/pub/fvwm-themes/rpm/"> -->
      <a href="http://fvwm-themes.sourceforge.net/rpm/">here</a>
  </ul>
  
  <h4>Obsolete packages:</h4>
  <ul>
    <li>
      Older 2.x.x versions: <a href="ftp://ftp.fvwm.org/pub/fvwm/version-2/">here</a>
      (<b>Note!</b> Versions prior to 2.4.0 are no longer supported.)</li>
    
    <li>
      Last 1.xx Version: <a href="ftp://ftp.fvwm.org/pub/fvwm/version-1/fvwm-1.24r.tar.gz">1.24r</a>
      (<b>Note!</b> This version is no longer supported.)</li>
    
    <li>
      Very old 1.x releases: <a href="ftp://ftp.fvwm.org/pub/fvwm/version-1/">here</a></li>
  </ul>

  Just click on the links above to download them.
  <p>
    If you find any bugs, you can enter them into the
    <a href="http://www.fvwm.org/cgi-bin/fvwm-bug">FVWM
      Bug Tracking System</a>. If possible, please try searching to see if someone
    else has already reported this bug. If you have more or better information,
    feel free to add a note!
  </p>

  <p>
    If you just have a question, be sure to read our
    <a href="<?php echo conv_link_target('../documentation/manpages/');?>">Documentation</a>
    first, then you might want to try our 
    <a href="<?php echo conv_link_target('../contact/index.php');?>">Mailing List</a>.
  </p>
  
  <p>
    When asking for help, of course always remember to provide the release
    number of fvwm, your operating system, and any other information you think
    might be pertinent.
  </p>

  <h2>What package should you use?</h2>
  Note that since the days of 2.1.x the second digit of the version number
  marks a release as a stable release (even number like 2.2.x) or as a development
  (i.e. alpha or beta) release (odd number like 2.3.4).
  
  <h4>Stable release:</h4>
  <p>
    Use it if you have no specific reason to use one of the other
    packages.  Questions about the stable releases should be asked on
    our <a href="<?php echo conv_link_target('../contact/index.php');?>">Mailing List</a>.
  </p>

  <strong>If you use anything else but the latest stable release we will make
    no promises that anything works.</strong>

  <h4>Older 2.x.x and 1.x versions:</h4>
  <p>
    Don't use them. If you encounter a problem we will most likely ask you
    to upgrade.  There is a constant stream of bug fixes and we cannot spend
    our time fixing the same bugs again and again.
  </p>

  <strong>Problems in one of the below packages should be discussed on the
fvwm-workers <a href="<?php echo conv_link_target('../contact/index.php');?>">Mailing List</a>.</strong>

  <h4>Latest Alpha and Beta versions:</h4>
  <p>
    Use them if you can tolerate some bugs and really need one of the new
    features.
  </p>

  <h4>Daily snapshots:</h4>
  <p>
    If you want the development stuff but don't want to set up the build
    environment. Note that the snapshots may not even compile. Use them at
    your own risk.
  </p>

  <h4>CVS access:</h4>
  <p>
    When you must have the latest stuff, up to the minute, or want to contribute
    heavily. Please read the 
    <a href="<?php echo conv_link_target('../documentation/dev_cvs.php');?>">CVS</a> instructions.
  </p>

  <h4>FTP source tree:</h4>
  <p>
    If you want to use CVS but can't. This directory is updated every three
    hours. It is simpler to use CVS than to fetch these files, but if you are
    behind a restrictive firewall or don't need CVS features like easy patch
    generation or commits then you can use an FTP mirroring tool to grab this
    directory. Since this is an exact copy of what you'd get if you did a CVS
    checkout, you should read up on <a href="<?php echo conv_link_target('../documentation/dev_cvs.php');?>">CVS</a>.
  </p>

<?php decoration_window_end(); ?>