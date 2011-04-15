<?php
//--------------------------------------------------------------------
//-  File          : documentation/manpages/template.php
//-  Project       : FVWM Home Page
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

// This is an autogenerated file, use manpages2php to create it.

//--------------------------------------------------------------------
// this manpages should not appear in the navigation structure
// so we hide its contents from navgen
//--------------------------------------------------------------------
if(isset($navigation_check)) return;

$rel_path = "../../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include_once("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Man page - FvwmSave";
$heading        = "FVWM - Man page - FvwmSave";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_stable_FvwmSave";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmSave in stable branch (2.7.1)"); ?>

<H1>FvwmSave</H1>
Section: Fvwm Modules (1)<BR>Updated: (not released yet) (2.7.1)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmSave - the Fvwm desktop-layout saving module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

FvwmSave is spawned by fvwm, so no command line invocation will work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

When called, this module will attempt to save your current desktop
layout into a file called new.xinitrc. Ideally, this file will look just
like .xinitrc, but in reality, you will have to edit it to get a
usable configuration, so be sure to keep a backup of your old .xinitrc.
<P>
Your applications must supply certain hints to the X window system.
Emacs, for example, does not, so FvwmSave can't get any
information from it.
<P>
Also, FvwmSave assumes that certain command line options are
globally accepted by applications, which may not be the case.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 16:22:47 GMT, April 15, 2011


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 15-Apr-2011 -->
