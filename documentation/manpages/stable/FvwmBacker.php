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
if (strlen("$navigation_check") > 0) return;

$rel_path = "../../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Man page - FvwmBacker";
$heading        = "FVWM - Man page - FvwmBacker";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if (strlen($site_has_been_loaded) == 0) {
	$site_has_been_loaded = "true";
	include(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmBacker in stable branch (2.4.16)"); ?>

<H1>FvwmBacker</H1>
Section: User Commands  (1)<BR>Updated: 3 July 2001<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmBacker - the FVWM background changer module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

FvwmBacker is spawned by fvwm, so no command line invocation will work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<P>
The FvwmBacker module provides functionality to change the background
when changing desktops.  Any command can be executed to change the
backgrounds.  Actually, any arbitrary command can be sent to fvwm to
execute, so you could also do things such as changing window border
colors, etc.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>COPYRIGHTS</H2>

The FvwmBacker module is the original work of Mike Finger.
<P>
Copyright 1994, Mike Finger. The author makes no guarantees or
warranties of any kind about the use of this module.  Use this modules
at your own risk.  You may freely use this module or any portion of it
for any purpose as long as the copyright is kept intact.
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>INITIALIZATION</H2>

During initialization, <I>FvwmBacker</I> gets config info from 
<B>fvwm</B>'s module configuration database (see 
<I><a href="<?php echo conv_link_target('./fvwm2.php');?>">fvwm2</a></I>(1),

section
<B>MODULE COMMANDS</B>).

Available options are discussed in a later section.
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmBacker can be invoked by fvwm during initialization by inserting
the line
<P>
<PRE>
AddToFunc StartFunction I Module FvwmBacker
</PRE>

<P>
in the .fvwm2rc file.
<P>
FvwmBacker can be started using a 'Module FvwmBacker' command or stopped
using a 'KillModule FvwmBacker' command at any time when fvwm is running.
<P>
FvwmBacker must reside in a directory that is listed in the ModulePath
option of FVWM for it to be executed by FVWM.
<P>
<A NAME="lbAH">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

The following is the only supported option at present:
<P>
<DL COMPACT>
<DT>*FvwmBacker: Command <I>(Desk d, Page x y) command</I><DD>
Specifies the <I>command</I> to execute when the viewport matches the
arguments for the desk d, page x coordinate and y coordinate. Any or all of
these three numeric arguments can be replaced with an asterisk (*) to indicate
that any value matches, in this case Desk or Page parts can be skipped.
<P>
If either the <I>Desk</I> or the <I>Page</I> parts are omitted, the
command is not executed if only the desk or the page is switched.  If
neither is given, the command is executed only once when the module is
started.  This is not the same as using asterisks for the numeric
arguments:  if asterisks are used, the command is always executed when
only the desk or page changes, if the corresponding part is omitted, the
command is never executed when only the desk or page changes.
<P>
If the <I>command</I> is <I>-solid</I> FvwmBacker uses the next
argument as a color in the X database and sets the background to that
color without generating a system call to xsetroot (only single word
color names may be used).
<P>
If the <I>command</I> is <I>colorset</I> FvwmBacker uses the background
specified in colorset <I>n</I> for the given desk.  Please refer to
the man page of the FvwmTheme module for details about colorsets.
<P>
Otherwise the command is sent to fvwm to execute.
<P>
<P>
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2>OLD-STYLE OPTIONS</H2>

There is continued support for the now deprecated option:
<P>
<DL COMPACT>
<DT>*FvwmBacker: Desk <I>d command</I><DD>
<P>
It is functionally equivalent to omitting the page coordinates with
<I>*FvwmBacker: Command</I>:
<P>
<PRE>

*FvwmBacker: Command (Desk Id) command

</PRE>

<P>
</DL>
<A NAME="lbAJ">&nbsp;</A>
<H2>SAMPLE CONFIGURATION</H2>

The following are excepts from an .fvwm2rc file which describe
FvwmBacker initialization commands:
<P>
<PRE>

####
# Set Up Backgrounds for different desktop pages (2 desks, 3x2 pages).
####
*FvwmBacker: Command (Page 2 *) -solid steelblue
*FvwmBacker: Command (Desk 0, Page 0 0) Exec xpmroot $[HOME]/bg2.xpm
*FvwmBacker: Command (Desk 0, Page 0 1) -solid midnightblue
*FvwmBacker: Command (Desk 0, Page 1 *) -solid yellow
*FvwmBacker: Command (Desk 1, Page * 0) -solid navy
*FvwmBacker: Command (Desk 1, Page * 1) Colorset 5

</PRE>

<P>
<A NAME="lbAK">&nbsp;</A>
<H2>AUTHOR</H2>

Mike Finger (<A HREF="mailto:mfinger@mermaid.micro.umn.edu">mfinger@mermaid.micro.umn.edu</A>)
<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<A HREF="mailto:Mike_Finger@atk.com">Mike_Finger@atk.com</A>)
<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(doodman&nbsp;on&nbsp;IRC,&nbsp;check&nbsp;the&nbsp;#linux&nbsp;channel)
<A NAME="lbAL">&nbsp;</A>
<H2>Modified by</H2>

Andrew Davison (<A HREF="mailto:davison@cs.monash.edu.au">davison@cs.monash.edu.au</A>)
<P>
Michael Han (<A HREF="mailto:mikehan@best.com">mikehan@best.com</A>)
<P>
Mikhael Goikhman (<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>)
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
<DT><A HREF="#lbAI">OLD-STYLE OPTIONS</A><DD>
<DT><A HREF="#lbAJ">SAMPLE CONFIGURATION</A><DD>
<DT><A HREF="#lbAK">AUTHOR</A><DD>
<DT><A HREF="#lbAL">Modified by</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 17:47:35 GMT, May 30, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 30-May-2003 -->
