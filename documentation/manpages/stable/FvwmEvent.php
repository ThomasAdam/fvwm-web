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
$title          = "FVWM - Man page - FvwmEvent";
$heading        = "Man page - FvwmEvent";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));

// Since manpages shall not apear in the navigation structure this
// page must identify itself with another name. It says here that
// it's name is manpages which belongs actually to the table of
// content page for all man pages. The layout file will therefore
// mark the navigation entry for the toc file as choosen althought
// it is actually not choosen.
$this_site      = "manpages";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if (strlen($site_has_been_loaded) == 0) {
	$site_has_been_loaded = "true";
	if (strlen($layout) > 0) {
		$file = "$rel_path/layout_$layout.inc";
		if (file_exists($file)) $layout_file = $file;
	}
	include(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmEvent"); ?>

<H1>FvwmEvent</H1>
Section: User Commands  (1)<BR>Updated: 3 July 2001<BR><A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

<I>FvwmEvent</I> - the FVWM Event module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<I>FvwmEvent</I> is a more versatile replacement for <I>FvwmAudio</I>.
It can in general be used to hook any <I>fvwm</I> function or program to any
window manager event. E.g: Delete unwanted Netscape Pop ups or
application error pop ups as they appear, play sounds, log events to a
file and the like. Be creative, You'll find a use for it.
<P>
<I>FvwmEvent</I> is spawned by <I>fvwm</I>, so no command line invocation will
work.  From within the <I>.fvwm2rc</I> file, <I>FvwmEvent</I> is spawned as
follows:
<PRE>

Module FvwmEvent

</PRE>

or from within an <I>fvwm</I> pop-up menu:
<PRE>

DestroyMenu Module-Popup
AddToMenu Module-Popup &quot;Modules&quot; Title
+ &quot;Event&quot;        Module FvwmEvent
+ &quot;Auto&quot;         Module FvwmAuto 200
+ &quot;Buttons&quot;      Module FvwmButtons
+ &quot;Console&quot;      Module FvwmConsole
+ &quot;Ident&quot;        Module FvwmIdent
+ &quot;Banner&quot;       Module FvwmBanner
+ &quot;Pager&quot;        Module FvwmPager 0 3

</PRE>

<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

The <I>FvwmEvent</I> module communicates with the <I>fvwm</I> window manager
to bind <I>actions</I> to window manager <I>events</I>.  Different actions
may be assigned to distinct window manager events.
<P>
<I>FvwmEvent</I> can be used to bind sound files to events like
<I>FvwmAudio</I> (RiP) did. It can be used for logging event traces to
a log file, while debugging <I>fvwm</I>.
<P>
<I>FvwmEvent</I> can also have builtin support for the rplay library.
(heritage of FvwmAudio)
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>INVOCATION</H2>

The invocation method was shown in the synopsis section. No command
line invocation is possible. <I>FvwmEvent</I> must be invoked by the
<I>fvwm</I> window manager. <I>FvwmEvent</I> accepts a single
argument:
<P>
<DL COMPACT>
<DT>-audio<DD>
Enables FvwmAudio compatibility mode.
<P>
<DT>alias<DD>
Makes FvwmEvent use <I>alias</I> as its name. This affects which lines
from the user's configuration file are used.
<P>
Invoking FvwmEvent as <I>FvwmAudio</I> (either by using an alias or
creating a symlink) enables FvwmAudio compatibility mode.
<P>
<P>
<P>
</DL>
<A NAME="lbAF">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

<I>FvwmEvent</I> gets config info from <B>fvwm</B>'s module configuration
database (see
<I><a href="<?php echo conv_link_target('fvwm2.php');?>">fvwm2</a>"</I>(1),

section
<B>MODULE COMMANDS</B>),

and looks for certain configuration options:
<P>
<DL COMPACT>
<DT>*FvwmEvent: Cmd <I>command</I><DD>
This determines the <I>fvwm</I> function that is to be called with the
event parameters. You might want to do one of the following (details below):
<PRE>

        # play sounds
        *FvwmEvent: Cmd <I>builtin-rplay</I>

        # execute distinct fvwm functions
        *FvwmEvent: Cmd

        # execute distinct external programs
        *FvwmEvent: Cmd exec

</PRE>

This version of <I>FvwmEvent</I> has builtin <I>rplay</I> support which does not
need to invoke an external audio player to play sounds.  The rplay
support is enabled when <I>FvwmEvent</I> is compiled with <I>HAVE_RPLAY</I>
defined and when <I>FvwmEvent: Cmd</I> is set to <I>builtin-rplay</I>. See
remarks below if <I>FvwmEvent</I> is invoked in FvwmAudio compatibility mode.
<P>
For example:
<PRE>

        *FvwmEvent: Cmd <I>builtin-rplay</I>
        *FvwmEvent: add_window drip.au

</PRE>

rplay can be obtained via anonymous ftp at
<PRE>

        &lt;URL:<A HREF="ftp://ftp.sdsu.edu/pub/rplay">ftp://ftp.sdsu.edu/pub/rplay</A>&gt; or
        &lt;URL:<A HREF="ftp://ftp.x.org/contrib/Event/audio/rplay">ftp://ftp.x.org/contrib/Event/audio/rplay</A>&gt;

</PRE>

<I>FvwmEvent</I> also has support for any other external program.
e.g: the rsynth 'say' command:
<PRE>

        *FvwmEvent: Cmd &quot;Exec /rsynth/say&quot;
        *FvwmEvent: destroy_window &quot;window closed&quot;

</PRE>

You can also use <I>fvwm</I>'s builtin <I>Echo</I> command as
<I>FvwmEvent: Cmd</I> to obtain debug output for <I>fvwm</I> events quietly.
I used this setup to debug FvwmAuto:
<PRE>

        *FvwmEvent: Cmd <I>Echo</I>
        *FvwmEvent: focus_change &quot;focus change&quot;
        *FvwmEvent: raise_window &quot;raise window&quot;

</PRE>

You can even call different shell commands for each event just by setting
<PRE>

        *FvwmEvent: Cmd exec
        *FvwmEvent: add_window killname &quot;APPL ERROR&quot;

</PRE>

<DT>*FvwmEvent: PassID<DD>
Specifies that the event action will have an ID parameter added to the end
of the command line. Most events will have the windowID of the window that the
event refers to, new_desk will have the new desk number. The windowID is a
hexadecimal string preceded by 0x, desk numbers are decimal.
<P>
<DT>*FvwmEvent: <I>window-manager-event action-or-filename</I><DD>
Binds particular actions to window manager events.
<P>
e.g. for audio-events:
<PRE>

        *FvwmEvent: startup TaDa.au
        *FvwmEvent: shutdown Elvis_Left.au
        *FvwmEvent: unknown doh.au

        *FvwmEvent: new_page beam_trek.au
        *FvwmEvent: new_desk beam_trek.au
        *FvwmEvent: add_window drip.au
        *FvwmEvent: raise_window swoosh.au
        *FvwmEvent: lower_window swoosh.au
        *FvwmEvent: configure_window hammer.au
        *FvwmEvent: focus_change boing.au
        *FvwmEvent: destroy_window explosion.au
        *FvwmEvent: iconify ploop.au
        *FvwmEvent: deiconify ploop.au
        *FvwmEvent: window_name huh.au
        *FvwmEvent: icon_name beep.au
        *FvwmEvent: res_class beep.au
        *FvwmEvent: res_name beep.au
        *FvwmEvent: end_windowlist twang.au

        *FvwmEvent: icon_location beep.au
        *FvwmEvent: map beep.au
        *FvwmEvent: error beep.au
        *FvwmEvent: config_info beep.au
        *FvwmEvent: end_config_info beep.au
        *FvwmEvent: icon_file beep.au
        *FvwmEvent: default_icon beep.au
        *FvwmEvent: string plapper.au

        *FvwmEvent: mini_icon beep.au
        *FvwmEvent: windowshade beep.au
        *FvwmEvent: dewindowshade beep.au

</PRE>

Provided <I>fvwm</I> supports it (not yet), there's an additional event to
replace all <I>fvwm</I> beeps with a sound:
<PRE>

        *FvwmEvent: beep beep.au

</PRE>

The toggle_paging event will be supported, as soon, as it's
resurrected by <I>fvwm</I>:
<PRE>

        *FvwmEvent: toggle_paging fwop.au

</PRE>

<DT>*FvwmEvent: Delay <I>5</I><DD>
Specifies that an event-action will only be executed if it occurs at
least 5 seconds after the previous event.  Events that occur during
the delay period are ignored.  This option is useful if you don't want
several sounds playing at the same time.  The default delay is 0 which
disables the Event delay.
<P>
<DT>*FvwmEvent: StartDelay <I>delay</I><DD>
Specifies that an event-action will only be executed if it occurs at
least <I>delay</I> seconds after the startup event. Events that occur during
the delay period are ignored.  This option is useful when <I>fvwm</I>
starts and restarts using an audio player.  The default delay is 0.
<P>
</DL>
<A NAME="lbAG">&nbsp;</A>
<H2>RPLAY OPTIONS</H2>

The following options are only valid with builtin rplay support.
i.e: when <I>FvwmEvent</I> was compiled with <I>HAVE_RPLAY</I> defined.
They are used only if <I>FvwmEvent: Cmd</I> is set
to <I>builtin-rplay</I>.
<P>
<P>
<DL COMPACT>
<DT>*FvwmEvent: RplayHost <I>hostname</I><DD>
Specifies what host the rplay sounds will play on.  The <I>hostname</I>
can also be an environment variable such as $HOSTDISPLAY.
<P>
<DT>*FvwmEvent: RplayPriority <I>0</I><DD>
Specifies what priority will be assigned to the rplay sounds when they
are played.
<P>
<DT>*FvwmEvent: RplayVolume <I>127</I><DD>
Specifies what volume will be assigned to the sounds when they are
played.
<P>
</DL>
<A NAME="lbAH">&nbsp;</A>
<H2>FvwmAudio Compatibility Mode</H2>

<P>
When invoked in FvwmAudio compatibility mode (see above), FvwmEvent
accepts the following options to provide backwards compatibility
for FvwmAudio:
<P>
<DL COMPACT>
<DT>*FvwmEvent: PlayCmd <I>command</I><DD>
This is equivalent to using *FvwmEvent: Cmd to Exec commands. This
determines the independent audio player program that will actually
play the sounds. If the play command is set to <I>builtin-rplay</I>
then the builtin rplay support will be used.
<P>
<DT>*FvwmAudio: Dir <I>directory</I><DD>
Specifies the directory to look for the audio files.  This option is
ignored when rplay is used.
<P>
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2>BUGS</H2>

It's REALLY noisy when <I>fvwm</I> starts and restarts using an audio player.
You can use FvwmEvent: StartDelay to fix this problem.
<P>
<A NAME="lbAJ">&nbsp;</A>
<H2>COPYRIGHTS</H2>

This module has evolved of <I>FvwmAudio</I>, which in term is heavily based
on a similar Fvwm module called <I>FvwmSound</I> by Mark
Boyns. <I>FvwmAudio</I> simply took Mark's original program and
extended it to make it generic enough to work with any Audio
player. Due to different requests to do specific things on specific events,
<I>FvwmEvent</I> took this one step further and now calls any
<I>fvwm</I> function, or builtin-rplay. If <I>fvwm</I>'s Exec function
is used, any external program can be called with any parameter.
<P>
The concept for interfacing this module to the Window Manager, is
original work by Robert Nation.
<P>
Copyright 1998 Albrecht Kadlec.
Copyright 1994, Mark Boyns and Mark Scott.  No guarantees or
warranties or anything are provided or implied in any way whatsoever.
Use this program at your own risk.  Permission to use and modify this
program for any purpose is given, as long as the copyright is kept intact.
<P>
<P>
<P>
<A NAME="lbAK">&nbsp;</A>
<H2>AUTHORS</H2>

<PRE>
1994  FvwmSound  Mark Boyns       (<I><A HREF="mailto:boyns@sdsu.edu">boyns@sdsu.edu</A></I>)
1994  FvwmAudio  Mark Scott       (<I><A HREF="mailto:mscott@mcd.mot.com">mscott@mcd.mot.com</A></I>)
1996  FvwmAudio  Albrecht Kadlec
1998  FvwmEvent  Albrecht Kadlec  (<I><A HREF="mailto:albrecht@auto.tuwien.ac.at">albrecht@auto.tuwien.ac.at</A></I>)

</PRE>
<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">INVOCATION</A><DD>
<DT><A HREF="#lbAF">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAG">RPLAY OPTIONS</A><DD>
<DT><A HREF="#lbAH">FvwmAudio Compatibility Mode</A><DD>
<DT><A HREF="#lbAI">BUGS</A><DD>
<DT><A HREF="#lbAJ">COPYRIGHTS</A><DD>
<DT><A HREF="#lbAK">AUTHORS</A><DD>
</DL>
<HR>
This document was created by
<A HREF="./">man2html</A>,
using the manual pages.<BR>
Time: 02:56:42 GMT, April 17, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 17-Apr-2003 05:56:40 -->
