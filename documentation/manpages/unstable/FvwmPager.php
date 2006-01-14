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
$title          = "FVWM - Man page - FvwmPager";
$heading        = "FVWM - Man page - FvwmPager";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_FvwmPager";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmPager in unstable branch (2.5.15)"); ?>

<H1>FvwmPager</H1>
Section: FVWM Modules (1)<BR>Updated: 14 January 2006 (2.5.15)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmPager - the FVWM Pager module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<B><u>FvwmPager</u></B> [ <I>-transient</I> ] [ <I>name</I> ] [ <I>first desk</I> [ <I>last desk</I> ] ]
FvwmPager is spawned by fvwm, so no command line invocation will work.
<P>
All desks with desk numbers between <I>first desk</I> and <I>last
desk</I> are displayed. If <I>last desk</I> is omitted only the
<I>first desk</I> is shown. If both desk numbers are omitted, the
current desk is used instead. If you use an asterisk '*' in place
of <I>first desk</I> the pager will always show the current
desktop, even when you switch desks.
<P>
Example lines to put in your .fvwm2rc:
<P>
<PRE>

Module FvwmPager 0 3

</PRE>

or
<PRE>

Module FvwmPager *

</PRE>

or from within an fvwm pop-up menu:
<PRE>

AddToMenu Module-Popup Modules Title
+ Audio        Module FvwmAudio
+ Auto         Module FvwmAuto 200
+ Buttons      Module FvwmButtons
+ Console      Module FvwmConsole
+ Ident        Module FvwmIdent
+ Banner       Module FvwmBanner
+ Pager        Module FvwmPager 0 3

</PRE>

or
<PRE>

+ Pager        Module FvwmPager *

</PRE>

<P>
If the pager is started with the <I>-transient</I> option, the next
time a button is released the pager is closed. Note that this
option does only work if the window style of the pager window is 'sticky'
(see the fvwm man page). You should use the 'StaysOnTop'
style too.
<P>
Example:
<P>
<PRE>

Style FvwmPager Sticky, StaysOnTop
*FvwmPager: Rows       1
*FvwmPager: Columns    1
Mouse 3 R C Module FvwmPager -transient

</PRE>

<P>
With this in your .fvwm2rc, if you press control and button 3 in
the root window the pager pops up under the mouse and while the
viewport moves with the mouse.
<P>
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

The FvwmPager module shows a miniature view of the Fvwm desktops
which are specified in the command line. This is a useful reminder
of where your active windows are. Windows in the pager are shown
in the same color as their fvwm decorations.
<P>
The pager can be used to change your viewport into the current
desktop, to change desktops, or to move windows around.
<P>
Pressing mouse button 1 in the pager will cause you viewport to
change to the selected page of the selected desk. If you click
with button 1 in the desk-label area, you will switch desks but
not pages within the desk.
<P>
Dragging mouse button 2 on a miniature view of a window will cause
that window to be move to the location where you release the mouse
button, but your viewport will not change. If you drag the window
out of the pager and onto your desktop, a full size image of the
window will appear for you to place. There is no way to pick up a
full size image of the window and move it into the pager,
however. Since some mice do not have button 2, I have made
provisions to drag windows in the pager by using pressing
modifier-1 (usually Alt) and dragging with button 3.
<P>
Clicking mouse button 3 on a location will cause the viewport to
move to the selected location and switch desks if necessary, but
will not align the viewport to a page boundary. Dragging button 3
will cause the viewport to move as you drag but not switch
desktops, even if the pointer moves to another desktop.
<P>
With the <I>*FvwmPager: SloppyFocus</I> option the focus is
transfered to the window pointed at with the mouse when the
pointer is inside the pager.
<P>
When iconified, the pager will work as a fully functional current
desk only pager. Windows and viewports can be moved within the
icon of the pager. Users will want to make sure that they have no
lines similar to
<PRE>

Icon &quot;Fvwm Pager&quot; whatever

</PRE>

in their .fvwm2rc files.
<P>
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>COPYRIGHTS</H2>

The FvwmPager program, and the concept for interfacing this module
to the Window Manager, are all original work by Robert Nation.
<P>
Copyright 1994, Robert Nation. No guarantees or warranties or
anything are provided or implied in any way whatsoever. Use this
program at your own risk. Permission to use this program for any
purpose is given, as long as the copyright is kept intact.
<P>
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>INITIALIZATION</H2>

During initialization, <I>FvwmPager</I> gets config info from
<B><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></B>'s module configuration database (see
<I><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></I>(1),

section
<B>MODULE COMMANDS</B>).

<P>
To use FvwmPager with several different configurations, you can
invoke FvwmPager with an optional parameter, which it will use as
its <I>name</I> instead (e.g &quot;Module FvwmPager
OtherPager&quot;). OtherPager will then read only the lines in the
configuration file starting with &quot;*OtherPager&quot;, and not the lines
belonging to FvwmPager. This way multiple pager instances may be
used.
<P>
Note: the old way to use the FvwmPager with several different
configurations is to link the executable to another name, i.e.
<PRE>

ln -s FvwmPager OtherPager

</PRE>

This may work, but this method is not supported.
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>KEYBOARD FOCUS CONTROL</H2>

You can direct the keyboard focus to any window on the current
desktop by clicking with button 2 on its image in the pager. The
window does not need to be visible, but it does need to be on the
current page.
<P>
<A NAME="lbAH">&nbsp;</A>
<H2>INVOCATION</H2>

The invocation method was shown in the synopsis section
<P>
<A NAME="lbAI">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

<DL COMPACT>
<DT>*FvwmPager: Geometry <I>geometry</I><DD>
Completely or partially specifies the pager windows location and
geometry, in standard X11 notation. In order to maintain an
undistorted aspect ratio, you might want to leave out either the
width or height dimension of the geometry specification .
<P>
<DT>*FvwmPager: Rows <I>rows</I><DD>
Tells fvwm how many rows of desks to use when laying out the pager
window.
<P>
<DT>*FvwmPager: Columns <I>columns</I><DD>
Tells fvwm how many columns of desks to use when laying out the
pager window.
<P>
<DT>*FvwmPager: IconGeometry <I>geometry</I><DD>
Specifies a size (optional) and location (optional) for the
pager's icon window. Since there is no easy way for FvwmPager to
determine the height of the icon's label, you will have to make an
allowance for the icon  label height when using negative
y-coordinates in the icon location specification (used to specify
a location relative to the bottom instead of the top of the
screen).
<P>
<DT>*FvwmPager: StartIconic<DD>
Causes the pager to start iconified.
<P>
<DT>*FvwmPager: NoStartIconic<DD>
Causes the pager to start normally.  Useful for canceling the
effect of the <I>StartIconic</I> option.
<P>
<DT>*FvwmPager: LabelsBelow<DD>
Causes the pager to draw desk labels below the corresponding desk.
<P>
<DT>*FvwmPager: LabelsAbove<DD>
Causes the pager to draw desk labels above the corresponding
desk. Useful for canceling the effect of the <I>LabelsBelow</I>
option.
<P>
<DT>*FvwmPager: ShapeLabels<DD>
Causes the pager to hide the labels of all but the current
desk. This turns off label hilighting.
<P>
<DT>*FvwmPager: NoShapeLabels<DD>
Causes the pager to show the labels of all visible desks. Useful
for canceling the effect of the <I>ShapeLabels</I> option.
<P>
<DT>*FvwmPager: Font <I>font-name</I><DD>
Specified a font to use to label the desktops.  If <I>font_name</I>
is &quot;none&quot; then no desktop labels will be displayed.
<P>
<DT>*FvwmPager: SmallFont <I>font-name</I><DD>
Specified a font to use to label the window names in the pager. If
not specified, the window labels will be omitted. Window labels
seem to be fairly useless for desktop scales of 32 or greater.  If
<I>font_name</I> is &quot;none&quot; then no window names will be displayed.
<P>
<DT>*FvwmPager: Fore <I>color</I><DD>
Specifies the color to use to write the desktop labels, and to
draw the page-grid lines.
<P>
<DT>*FvwmPager: Back <I>color</I><DD>
Specifies the background color for the window.
<P>
<DT>*FvwmPager: Hilight <I>color</I><DD>
The active page and desk label will be highlighted by using this
background pattern instead of the normal background.
<P>
<DT>*FvwmPager: HilightPixmap <I>pixmap</I><DD>
The active page will be highlighted by using this background
pattern instead of the normal background.
<P>
<DT>*FvwmPager: DeskHilight<DD>
Hilight the active page with the current hilight
color/pixmap. Useful for canceling the effect of the
<I>NoDeskHilight</I> option.
<P>
<DT>*FvwmPager: NoDeskHilight<DD>
Don't hilight the active page.
<P>
<DT>*FvwmPager: WindowColors <I>fore back hiFore hiBack</I><DD>
Change the normal/highlight colors of the windows. <I>fore</I> and
<I>hiFore</I> specify the colors as used for the font inside the
windows. <I>back</I> and <I>hiBack</I> are used to fill the windows
with.
<P>
<DT>*FvwmPager: WindowLabelFormat <I>format</I><DD>
This specifies a printf() like format for the labels in the mini
window. Possible flags are: %t, %i, %c, and %r for the window's
title, icon, class, or resource name, respectively.  The default
is &quot;%i&quot;.
<P>
<DT>*FvwmPager: Label <I>desk label</I><DD>
Assigns the text <I>label</I> to desk <I>desk</I> (or the current
desk if desk is &quot;*&quot;) in the pager window. Useful for assigning
symbolic names to desktops, i.e.
<PRE>

*FvwmPager: Label 1 Mail
*FvwmPager: Label 2 Maker
*FvwmPager: Label * Matlab

</PRE>

<P>
<B>Note</B>:

There is currently a much better way to specify desk names
globally (and not just in FvwmPager) using
<B>DesktopName</B>

command, so you should not use this option anymore.
<P>
<DT>*FvwmPager: DeskColor <I>desk color</I><DD>
Assigns the color <I>color</I> to desk <I>desk</I> (or the current
desk if desk is &quot;*&quot;) in the pager window. This replaces the
background color for the particular <I>desk</I>.  This only works
when the pager is full sized. When Iconified, the pager uses the
color specified by *FvwmPager: Back.
<P>
<B>TIP:</B> Try using *FvwmPager: DeskColor in conjunction with
FvwmCpp (or FvwmM4) and FvwmBacker to assign identical colors to
your various desktops and the pager representations.
<P>
<DT>*FvwmPager: Pixmap <I>pixmap</I><DD>
Use <I>pixmap</I> as background for the pager.
<P>
<DT>*FvwmPager: DeskPixmap <I>desk pixmap</I><DD>
Assigns the pixmap <I>color</I> to desk <I>desk</I> (or the current
desk if desk is &quot;*&quot;) in the pager window. This replaces the
background pixmap for the particular <I>desk</I>.
<P>
<B>TIP:</B> Try using *FvwmPager: DeskPixmap in conjunction with
FvwmCpp (or FvwmM4) and FvwmBacker to assign identical pixmaps to
your various desktops and the pager representations.
<P>
<DT>*FvwmPager: DeskTopScale <I>number</I><DD>
If the geometry is not specified, then a desktop reduction factor
is used to calculate the pager's size. Things in the pager window
are shown at 1/<I>number</I> of the actual size.
<P>
<DT>*FvwmPager: MiniIcons<DD>
Allow the pager to display a window's mini icon in the pager, if
it has one, instead of showing the window's name.
<P>
<DT>*FvwmPager: MoveThreshold <I>pixels</I><DD>
Defines the distance the pointer has to be moved before a window
being dragged with button 2 is actually moved. The default value
is three pixels. If the pointer moved less that this amount the
window snaps back to its original position when the button is
released. If <I>pixels</I> is less than zero the default value is
used. The value set with the <I>MoveThreshold</I> command in fvwm
is inherited by FvwmPager but can be overridden with this option.
<P>
<DT>*FvwmPager: SloppyFocus<DD>
If the SloppyFocus option is used, you do not need to click into
the mini window in the pager to give the real window the
focus. Simply putting the pointer over the window inside the pager
is enough.
<P>
Note: This option interferes slightly with the MouseFocus and
SloppyFocus styles of fvwm.  Sometimes, if you click into the
pager window to change pages or desks and then move the pointer<TT>&nbsp;</TT>to<BR>
a place on the screen where a window of the new page will appear,
this new window does not get the input focus.  This may happen if
you drag the pointer over one of the mini windows in the pager.
There is nothing that can be done about this - except not using
SloppyFocus in the pager.
<P>
<DT>*FvwmPager: SolidSeparators<DD>
By default the pages of the virtual desktop are separated by
dashed lines in the pager window.  This option causes FvwmPager to
use solid lines instead.
<P>
<DT>*FvwmPager: NoSeparators<DD>
Turns off the lines separating the pages of the virtual desktop.
<P>
<DT>*FvwmPager: Balloons [<I>type</I>]<DD>
Show a balloon describing the window when the pointer is moved
into a window in the pager. The default format (the window's icon
name) can be changed using BalloonStringFormat. If <I>type</I> is
<I>Pager</I> balloons are just shown for an un-iconified pager; if
<I>type</I> is <I>Icon</I> balloons are just shown for an iconified
pager. If <I>type</I> is anything else (or null) balloons are
always shown.
<P>
<DT>*FvwmPager: BalloonFore <I>color</I><DD>
Specifies the color for text in the balloon window. If omitted it
defaults to the foreground color for the window being described.
<P>
<DT>*FvwmPager: BalloonBack <I>color</I><DD>
Specifies the background color for the balloon window. If omitted
it defaults to the background color for the window being
described.
<P>
<DT>*FvwmPager: BalloonFont <I>font-name</I><DD>
Specifies a font to use for the balloon text. Defaults to
<I>fixed</I>.
<P>
<DT>*FvwmPager: BalloonBorderWidth <I>number</I><DD>
Sets the width of the balloon window's border. Defaults to 1.
<P>
<DT>*FvwmPager: BalloonBorderColor <I>color</I><DD>
Sets the color of the balloon window's border. Defaults to black.
<P>
<DT>*FvwmPager: BalloonYOffset <I>number</I><DD>
The balloon window is positioned to be horizontally centered
against the pager window it is describing. The vertical position
may be set as an offset. Negative offsets of <I>-n</I> are placed
<I>n</I> pixels above the pager window, positive offsets of
<I>+n</I> are placed <I>n</I> pixels below. Offsets of -1 and 1
represent the balloon window close to the original window without
a gap. Offsets of 0 are not permitted, as this would permit direct
transit from pager window to balloon window, causing an event
loop. Defaults to +3. The offset will change sign automatically,
as needed, to keep the balloon on the screen.
<P>
<DT>*FvwmPager: BalloonStringFormat format<DD>
The same as <I>*FvwmPager: WindowLabelFormat</I>, it just specifies
the string to display in the balloons. The default is &quot;%i&quot;.
<P>
<DT>*FvwmPager: Colorset <I>desk colorset</I><DD>
Tells the module to use colorset <I>colorset</I> for <I>desk</I>. If
you use an asterisk '*' in place of <I>desk</I>, the colorset is
used on all desks. Please refer to the man page of the FvwmTheme
module for details about colorsets.
<P>
<DT>*FvwmPager: BalloonColorset <I>desk colorset</I><DD>
Tells the module to use colorset <I>colorset</I> for balloons on
<I>desk</I>. If you use an asterisk '*' in place of <I>desk</I>, the
colorset is used on all desks. Please refer to the man page of the
FvwmTheme module for details about colorsets.
<P>
<DT>*FvwmPager: HilightColorset <I>desk colorset</I><DD>
Tells the module to use colorset <I>colorset</I> for hilighting on
<I>desk</I>. If you use an asterisk '*' in place of <I>desk</I>, the
colorset is used on all desks. Please refer to the man page of the
FvwmTheme module for details about colorsets.
<P>
<DT>*FvwmPager: WindowColorsets <I>colorset activecolorset</I><DD>
Uses colorsets in the same way as *FvwmPager: WindowColors. Please
refer to the man page of the FvwmTheme module for details about
colorsets.  The shadow and hilight colors of the colorset are only
used for the window borders if the *FvwmPager: Window3DBorders is
specified too.
<P>
<DT>*FvwmPager: WindowBorderWidth <I>n</I><DD>
Specifies the width of the border drawn around the mini
windows. This also sets the minimum size of the mini windows to (2
* <I>n</I> + 1). The default is 1.
<P>
<DT>*FvwmPager: Window3DBorders<DD>
Specifies that the mini windows should have a 3d borders based on
the mini window background. This option only works if *FvwmPager:
WindowColorsets is specified.
<P>
<DT>*FvwmPager: UseSkipList<DD>
Tells FvwmPager to not show the windows that are using the
WindowListSkip style.
<P>
</DL>
<A NAME="lbAJ">&nbsp;</A>
<H2>AUTHOR</H2>

Robert Nation
<BR>

DeskColor patch contributed by Alan Wild
<BR>

MiniIcons &amp; WindowColors patch contributed by Rob Whapham
<BR>

Balloons patch by Ric Lister &lt;<A HREF="mailto:ric@giccs.georgetown.edu">ric@giccs.georgetown.edu</A>&gt;
<BR>

fvwm-workers: Dominik, Olivier, Hippo and others.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">COPYRIGHTS</A><DD>
<DT><A HREF="#lbAF">INITIALIZATION</A><DD>
<DT><A HREF="#lbAG">KEYBOARD FOCUS CONTROL</A><DD>
<DT><A HREF="#lbAH">INVOCATION</A><DD>
<DT><A HREF="#lbAI">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAJ">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 20:43:07 GMT, January 14, 2006


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 14-Jan-2006 -->
