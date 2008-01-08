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
$title          = "FVWM - Man page - FvwmWinList";
$heading        = "FVWM - Man page - FvwmWinList";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_FvwmWinList";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmWinList in unstable branch (2.5.25)"); ?>

<H1>FvwmWinList</H1>
Section: Fvwm Modules (1)<BR>Updated: (not released yet) (2.5.25)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmWinList - the fvwm window list module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<B><u>FvwmWinList</u></B> [<I>name</I>]
<P>
FvwmWinList is spawned by fvwm, so no command line invocation will work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

The FvwmWinList module provides a window list made up of buttons, each
corresponding to a window that fvwm is managing.  Clicking on the buttons
with any of the three mouse buttons will either do a default action or
can be user configured.  Like the other modules, FvwmWinList only works
when fvwm is used as the window manager.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>COPYRIGHTS</H2>

The FvwmWinList module is the original work of Mike Finger.
<P>
Copyright 1994, Mike Finger. The author makes no guarantees or warranties of
any kind about the use of this module.  Use this modules at your own risk.
You may freely use this module or any portion of it for any purpose as long
as the copyright is kept intact.
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>INITIALIZATION</H2>

During initialization, <I>FvwmWinList</I> gets config info from <B><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></B>'s
module configuration database (see
<I><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></I>(1),

section
<B>MODULE COMMANDS</B>).

Available options are discussed in a later section.
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmWinList can be invoked by fvwm during initialization by inserting the
line 'Module FvwmWinList' in the .fvwm2rc file.
<P>
FvwmWinList can also be bound to a keystroke, mouse button, or menu option to
be invoked later, in this case using 'Transient' as an argument will cause
FvwmWinList to resemble the built in window list.
<P>
<A NAME="lbAH">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

<DL COMPACT>
<DT>*FvwmWinList: Geometry <I>{+-}&lt;X&gt;{+-}&lt;Y&gt;</I><DD>
Specifies the location and gravity of the FvwmWinList window.  At the current
time, size is not supported and FvwmWinList will resize itself as buttons are
added.  If the NoAnchor option is not specified then the windows gravity
corner will be anchored, and the window will grow in the opposite direction.
(i.e. If the geometry is specified -5-5, that is SoutEastGravity.  This will
cause the window to draw up and to the left as windows are added)
<P>
<DT>*FvwmWinList: Font <I>font</I><DD>
Specifies the font to be used for labeling the buttons.
<P>
<DT>*FvwmWinList: Colorset <I>n</I><DD>
Specifies the colorset to use for the buttons. See FvwmTheme. Defaults to 0.
<P>
<DT>*FvwmWinList: Fore <I>color</I><DD>
Specifies the color to use for the button names. Cancels *FvwmWinList: Colorset.
<P>
<DT>*FvwmWinList: Back <I>color</I><DD>
Specifies the color for the buttons. Cancels *FvwmWinList: Colorset.
<P>
<DT>*FvwmWinList: FocusColorset <I>n</I><DD>
Specifies the colorset to use for the button for the window that
has the input focus. Defaults to 1.
<P>
<DT>*FvwmWinList: FocusFore <I>color</I><DD>
Specifies the color to use for the button names for the window that
has the input focus. If omitted, the color from <B>*FvwmWinList: Fore</B>
is used. Cancels *FvwmWinList: FocusColorset.
<P>
<DT>*FvwmWinList: FocusBack <I>color</I><DD>
Specifies the color to use for the button for the window that
has the input focus. If omitted, the color from <B>*FvwmWinList: Back</B>
is used. Cancels *FvwmWinList: FocusColorset.
<P>
<DT>*FvwmWinList: IconColorset <I>n</I><DD>
Specifies the colorset to use for buttons for windows that
are iconified. Defaults to 0.
<P>
<DT>*FvwmWinList: IconFore <I>color</I><DD>
Specifies the color to use for the button names for windows that
are iconified. If omitted, the color from <B>*FvwmWinList: Fore</B>
is used. Cancels *FvwmWinList: IconColorset.
<P>
<DT>*FvwmWinList: IconBack <I>color</I><DD>
Specifies the color to use for the button for windows that
are iconified. If omitted, the color from <B>*FvwmWinList: Back</B>
is used. Cancels *FvwmWinList: IconColorset.
<P>
<DT>*FvwmWinList: DontDepressFocus<DD>
By default FvwmWinList will show the button for the window that has the
input focus as pressed in. This option disables that feature.
<P>
<DT>*FvwmWinList: ButtonFrameWidth <I>width</I><DD>
Specify the width of the 3D borders around the buttons in FvwmWinList.
<P>
<DT>*FvwmWinList: FollowWindowList<DD>
Specifies that FvwmWinList will keep its list in the same order as fvwm.
This is the order displayed by the &quot;WindowList NoDeskSort&quot; fvwm command.
This is not the default as it is more visually disturbing when the focus
changes.
<P>
<DT>*FvwmWinList: UseSkipList<DD>
Tells FvwmWinList to not show the windows that are listed on a WindowListSkip
line in the configuration file.
<P>
<DT>*FvwmWinList: ShowCurrentDesk<DD>
Specifies that only windows on the current desk are displayed.
<P>
<DT>*FvwmWinList: NoAnchor<DD>
By default, FvwmWinList will anchor the gravity corner so the window will grow
in the opposite direction.  This undoes that option, i.e. the window will
always grow down.  Do not use this option if a negative geometry was
specified.
<P>
<DT>*FvwmWinList: UseIconNames<DD>
Tells FvwmWinList to use the icon name of the window instead of the full window
name.  This is useful to keep the width of the window small.
<P>
<DT>*FvwmWinList: LeftJustify<DD>
By default, FvwmWinList will center the icon text in the icon.  This option
causes it to be justified flush with the left edge of the icon. This option is
turned on when MiniIcons are used.
<P>
<DT>*FvwmWinList: MinWidth <I>width</I><DD>
<DT>*FvwmWinList: MaxWidth <I>width</I><DD>
Specify the minimum and maximum widths that the buttons will shrink or grow
to.  The buttons will normally size to fit the longest name, but certain
applications produce icon titles that can easily fill the screen.  Setting
these parameters constrains the size of the buttons to be between the two
values.  Setting them identically will fix the size of the buttons.
Setting Max &lt; Min will have unpredictable results.
<P>
<DT>*FvwmWinList: TruncateLeft<DD>
If names get truncated because of the setting of <B>FvwmWinList: MaxWidth</B>,
they will normally get truncated on the right, so only the start of the names
are visible. Setting this resource will cause them to get truncated on the left,
so that the end of names are visible. This is useful when the window title
contains a directory and file name, for example.
<P>
<DT>*FvwmWinList: Action <I>action response</I><DD>
Tells FvwmWinList to do <I>response</I> when <I>action</I> is done.  The
currently supported <I>action</I>s are: Click1, Click2, Click3 and so on.
By default the module supports 3 mouse buttons, but it can be compiled
to support more.  The currently
supported <I>response</I>s are any fvwm built-in commands, including modules
and functions.
Warning: The use of the former syntax that allowed to use comma
separated lists of commands is strongly discouraged due to synchronization
problems with fvwm.  Please use complex fvwm functions instead (defined with
the 'AddToFunc' command of fvwm).
<P>
<DT>*FvwmWinList: NoIconAction <I>action</I><DD>
Tells FvwmWinList to do <I>action</I> is when a NoIcon style window is
iconified or de-iconified. Relevant coordinates are appended to <I>action</I> so
that the icon can be traced to an FvwmWinList button. An example action
is &quot;*FvwmWinList: NoIconAction SendToModule FvwmAnimate animate&quot;. A blank or
null action turns this feature off.
<P>
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2>SAMPLE CONFIGURATION</H2>

The following are excepts from a .fvwm2rc file which describe FvwmWinList
initialization commands:
<P>
<PRE>

########
# Pop up the window list in transient mode on button 3 press &amp; hold

Mouse 3   R   A   Module FvwmWinList Transient

AddToFunc DeiconifyAndRaise
+ I Iconify off
+ I Raise

########################## Window-Lister ###############################
*FvwmWinList: Back DarkOliveGreen
*FvwmWinList: Fore PaleGoldenRod
*FvwmWinList: Font -*-new century schoolbook-bold-r-*-*-*-120-*-*-*-*-*-*
*FvwmWinList: Action Click1 Function DeiconifyAndRaise
*FvwmWinList: Action Click2 Iconify
*FvwmWinList: Action Click3 Module FvwmIdent
*FvwmWinList: UseSkipList
*FvwmWinList: UseIconNames
*FvwmWinList: Geometry -50-85
*FvwmWinList: MinWidth 70
*FvwmWinList: MaxWidth 120
# I prefer the text centered
#*FvwmWinList: LeftJustify
# I like it anchored
#*FvwmWinList: NoAnchor
# A flat list in most recently focused order
#*FvwmWinList: FollowWindowList
#*FvwmWinList: BorderReliefWidth 0
# pretend to be a taskbar
*FvwmWinList: NoIconAction SendToModule FvwmAnimate animate


</PRE>

<P>
<A NAME="lbAJ">&nbsp;</A>
<H2>AUTHOR</H2>

Mike Finger (<A HREF="mailto:mfinger@mermaid.micro.umn.edu">mfinger@mermaid.micro.umn.edu</A>)
<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<A HREF="mailto:Mike_Finger@atk.com">Mike_Finger@atk.com</A>)
<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(doodman&nbsp;on&nbsp;IRC,&nbsp;check&nbsp;the&nbsp;#linux&nbsp;channel)
<P>
Various Patches by
<BR>&nbsp;&nbsp;&nbsp;John&nbsp;Heidemann&nbsp;&lt;<A HREF="mailto:johnh@ficus.CS.UCLA.EDU">johnh@ficus.CS.UCLA.EDU</A>&gt;&nbsp;and
<BR>&nbsp;&nbsp;&nbsp;Jason&nbsp;L&nbsp;Tibbitts&nbsp;&lt;<A HREF="mailto:tibbs@tcamc.uh.edu">tibbs@tcamc.uh.edu</A>&gt;.
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
<DT><A HREF="#lbAI">SAMPLE CONFIGURATION</A><DD>
<DT><A HREF="#lbAJ">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 10:24:38 GMT, January 08, 2008


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 08-Jan-2008 -->
