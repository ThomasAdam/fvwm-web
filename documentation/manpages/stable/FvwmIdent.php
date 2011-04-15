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
$title          = "FVWM - Man page - FvwmIdent";
$heading        = "FVWM - Man page - FvwmIdent";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_stable_FvwmIdent";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmIdent in stable branch (2.7.1)"); ?>

<H1>FvwmIdent</H1>
Section: Fvwm Modules (1)<BR>Updated: (not released yet) (2.7.1)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmIdent - the Fvwm identify-window module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

FvwmIdent is spawned by fvwm, so no command line invocation will work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

The FvwmIdent module prompts the user to select a target window, if
the module was not launched from within a window context in Fvwm.
After that, it pops up a window with information about the window
which was selected.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>COPYRIGHTS</H2>

The FvwmIdent program, and the concept for
interfacing this module to the Window Manager, are all original work
by Robert Nation and Nobutaka Suzuki.
<P>
Copyright 1994, Robert Nation and Nobutaka Suzuki. No guarantees or
warranties or anything
are provided or implied in any way whatsoever. Use this program at your
own risk. Permission to use this program for any purpose is given,
as long as the copyright is kept intact.
<P>
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>INITIALIZATION</H2>

During initialization, <I>FvwmIdent</I> gets config info from <B><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></B>'s
module configuration database (see
<I><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></I>(1),

section
<B>MODULE COMMANDS</B>)

to determine which colors and font to use.
<P>
If the FvwmIdent executable is linked to another name, ie ln -s
FvwmIdent MoreIdentify, then another module called MoreIdentify can be
started, with a completely different configuration than FvwmIdent,
simply by changing the keyword  FvwmIdent to MoreIdentify. This way multiple
clutter-reduction programs can be used.
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmIdent can be invoked by binding the action 'Module FvwmIdent'
to a menu or key-stroke in the .fvwm2rc file.  Fvwm will search
directory specified in the ModulePath configuration option to
attempt to locate FvwmIdent. Although nothing keeps you from
launching FvwmIdent at start-up time, you probably don't want to.
Clicking into the FvwmIdent window or pressing a key while it
has focus closes FvwmIdent. Pressing mouse button 2 in the window
restarts FvwmIdent and asks for a new window to select.
<P>
<A NAME="lbAH">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

FvwmIdent reads the same .fvwm2rc file as fvwm reads when it starts up,
and looks for lines as listed below:
<P>
<DL COMPACT>
<DT>*FvwmIdent: Colorset <I>n</I><DD>
Tells the module to use colorset <I>n</I>. See FvwmTheme.
<P>
<DT>*FvwmIdent: Fore <I>color</I><DD>
Tells the module to use <I>color</I> instead of black for text. Switches off the
Colorset option.
<P>
<DT>*FvwmIdent: Back <I>color</I><DD>
Tells the module to use <I>color</I> instead of white for the window
background. Switches off the Colorset option.
<P>
<DT>*FvwmIdent: Font <I>fontname</I><DD>
Tells the module to use <I>fontname</I> instead of fixed for text.
<P>
<DT>*FvwmIdent: MinimalLayer <I>layer</I><DD>
FvwmIdent places its window on the layer of a target window. But not
below the minimal layer. By default, the minimal layer is 4 just like
the fvwm default layer. If <I>layer</I> is 0, the layer of the target
window is always used. If <I>layer</I> is &quot;default&quot; or not specified,
the default behavior is restored. If <I>layer</I> is &quot;none&quot;, FvwmIdent
is placed as a normal window even if the target window is above it.
<P>
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2>AUTHOR</H2>

Robert Nation and Nobutaka Suzuki (<A HREF="mailto:nobuta-s@is.aist-nara.ac.jp">nobuta-s@is.aist-nara.ac.jp</A>).
<P>
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">COPYRIGHTS</A><DD>
<DT><A HREF="#lbAF">INITIALIZATION</A><DD>
<DT><A HREF="#lbAG">INVOCATION</A><DD>
<DT><A HREF="#lbAH">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAI">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 16:22:47 GMT, April 15, 2011


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 15-Apr-2011 -->
