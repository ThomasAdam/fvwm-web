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
$title          = "FVWM - Man page - FvwmDebug";
$heading        = "FVWM - Man page - FvwmDebug";
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

<?php decoration_window_start("Manual page for FvwmDebug in unstable branch (2.5.8)"); ?>

<H1>FVWMDEBUG</H1>
Section: FVWM Module (1)<BR>Updated: 2003-06-09<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmDebug - the FVWM module debugger
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<A NAME="ixAAC"></A>
FvwmDebug should be spawned by <I><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></I>(1) for normal functionality.
<P>

To run this module, place this command somewhere in the configuration:
<P>

<blockquote><pre>    Module FvwmDebug [optional-params]</pre></blockquote>
<P>

To stop this module, execute:
<P>

<blockquote><pre>    KillModule FvwmDebug</pre></blockquote>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAD"></A>
This module persistently dumps all fvwm event details and optionally some
other information into the standard error stream or a file, good for
debugging purposes. The output may be optionally redirected to <I>xconsole</I>
or similar window.
<A NAME="lbAE">&nbsp;</A>
<H2>INVOCATION</H2>

<A NAME="ixAAE"></A>
There are several command line switches:
<P>

<B><u>FvwmDebug</u></B>
[ <B>--args</B>|<B>--noargs</B> ]
[ <B>--events</B>|<B>--noevents</B> ]
[ <B>--log</B> <I>file</I> ]
[ <B>--xconsole</B> ]
[ <B>--mask</B> <I>mask</I> ]
[ <B>--xmask</B> <I>mask</I> ]
[ <B>--debug</B> <I>level</I> ]
[ <B>--track</B> <I>tracker-name</I> ]
[ <B>--send-configinfo</B> ]
[ <B>--send-windowlist</B> ]
<P>

Long switches may be abbreviated to shorter switches.
<P>

<B>--noargs</B> - do not print all arguments of the event, just its name.
<B>--args</B> is the default.
<P>

<B>--noevents</B> - do not print even event names, implies <B>--noargs</B>.
It is similar in effect to setting both <B>--mask</B> and <B>--xmask</B> to 0,
but the events are actually received by the module, they are just not printed.
<P>

This option may be useful if <B>--track</B> or/and <B>--debug</B> is used.
<P>

The default is <B>--events</B> normally, and <B>--noevents</B> if one or more
<B>--track</B> options specified.
<P>

<B>-l</B>|<B>--log</B> <I>file</I> - specify the log file name instead of the standard
error stream. If the log file can't be open for writting, the default
standard error stream is used.
<P>

The <I>file</I> may start with a pipe '|', this is similar to the usual meaning
of a pipe, the output is piped to the specified command. See also
<B>--xconsole</B> option.
<P>

<B>-xc</B>|<B>--xconsole</B> - this is a shortcut for:
<P>

<blockquote><pre>    FvwmDebug --log '|xconsole -file /dev/stdin -geometry 600x400 -notify'</pre></blockquote>
<P>

That shows the module output in the <I>xconsole</I> window rather than
the standard error stream.
<P>

<B>-m</B>|<B>--mask</B> <I>mask</I> - set the module mask, 31 bit integer.
By default almost all events are monitored (except for some flood events
like <I></I><FONT><I>CONFIGURE_WINDOW</I></FONT><I></I> or <I></I><FONT><I>FOCUS_WINDOW</I></FONT><I></I>. The special value of <I>-1</I>
sets the maximal mask.
<P>

<B>-x</B>|<B>--xmask</B> <I>mask</I> - set the module extended mask, 31 bit integer.
By default almost all events are monitored (except for some flood events
like <I></I><FONT><I>ENTER_WINDOW</I></FONT><I></I> or <I></I><FONT><I>LEAVE_WINDOW</I></FONT><I></I>. The special value of <I>-1</I>
sets the maximal extended mask.
<P>

<B>-d</B>|<B>--debug</B> <I>level</I> - use the Perl library debugging mechanism.
The useful <I>level</I>s are 2 to 4.
<P>

<B>-t</B>|<B>--track</B> <I>tracker-name</I> - create the given Perl library tracker and
observe its main observable. This option may be specified multiple times.
This options implies <B>--noevents</B> unless explicitely overwritten.
You may optionally try <B>--debug</B>, for example:
<P>

<blockquote><pre>    FvwmDebug -xc --track PageInfo --track GlobalConfig --debug 3</pre></blockquote>
<P>

Run ``fvwm-perllib man'' to get the names of all existing trackers in your
installed Perl library.
<P>

<B>-sc</B>|<B>--send-configinfo</B> - send <B>Send_ConfigInfo</B> command to <I>fvwm</I>
on startup, this results in a lot of events received.
<P>

<B>-sw</B>|<B>--send-windowlist</B> - send <B>Send_WindowList</B> command to <I>fvwm</I>
on startup, this results in a lot of events received.
<A NAME="lbAF">&nbsp;</A>
<H2>SEE ALSO</H2>

<A NAME="ixAAF"></A>
See also FvwmGtkDebug.
<A NAME="lbAG">&nbsp;</A>
<H2>AUTHOR</H2>

<A NAME="ixAAG"></A>
Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt;.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">INVOCATION</A><DD>
<DT><A HREF="#lbAF">SEE ALSO</A><DD>
<DT><A HREF="#lbAG">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 00:48:06 GMT, November 01, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 01-Nov-2003 -->
