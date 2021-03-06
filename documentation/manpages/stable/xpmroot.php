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
$title          = "FVWM - Man page - xpmroot";
$heading        = "FVWM - Man page - xpmroot";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for xpmroot in stable branch (2.4.16)"); ?>

<H1>XPMROOT</H1>
Section: User Commands  (1)<BR>Updated: 3 July 2001<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

xpmroot - Sets the root window of the current X display to an Xpm pixmap
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<B><u>xpmroot</u></B> <I>file</I>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<I>xpmroot</I> reads the Xpm file specified in the command line
and displays it in the root window.
<A NAME="lbAE">&nbsp;</A>
<H2>BUGS</H2>

Repeated use of xpmroot with different xpm pixmaps will use up slots in
your color table pretty darn fast.
<A NAME="lbAF">&nbsp;</A>
<H2>AUTHOR</H2>

Rob Nation
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">BUGS</A><DD>
<DT><A HREF="#lbAF">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 17:47:38 GMT, May 30, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 30-May-2003 -->
