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
$title          = "FVWM - Man page - FvwmConsole";
$heading        = "FVWM - Man page - FvwmConsole";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_FvwmConsole";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmConsole in unstable branch (2.5.29)"); ?>

<H1>FvwmConsole</H1>
Section: Fvwm Modules (1)<BR>Updated: 03 April 2010 (2.5.29)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<P>
<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmConsole - an fvwm command input interface
<P>
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

Module FvwmConsole [options]
<P>
<I>FvwmConsole</I> can only be invoked by fvwm.
Command line invocation of the <I>FvwmConsole</I> module will not work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

FvwmConsole allows the user to type fvwm configuration commands
interactively, and have them executed immediately.  This tool is
particularly useful for testing new configuration ideas, or for
implementing temporary changes to your environment.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmConsole must be spawned as a module by fvwm.  FvwmConsole takes all
<I><A HREF="/cgi-bin/man/man2html/1+xterm">xterm</A></I>(1) options.
<P>

FvwmConsole can be invoked by inserting the line 'Module FvwmConsole' in
the .fvwm2rc file.  This can be placed on a line by itself, if
FvwmConsole is to be spawned during fvwm's initialization, or can be
bound to a menu or mouse button or keystroke to invoke it later.
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

FvwmConsole uses <I><A HREF="/cgi-bin/man/man2html/1+xterm">xterm</A></I>(1).  All resources set for xterm are
inherited unless overridden by command line options.
<P>
<DL COMPACT><DT><DD>
Module FvwmConsole -g 40x10 -fg black -bg green3
</DL>

<P>
A different terminal emulator can be specified with the -terminal
option.  However, only terminal programs that understand the options
-name, -title and -e can be used.
<P>
<DL COMPACT><DT><DD>
Module FvwmConsole -terminal rxvt
</DL>

<P>
Previous versions of FvwmConsole supported a -e option to choose a
different front-end.  Although this option is still provided for
backwards compatibility its use is discouraged unless you know
exactly what you are doing.
<P>
<DL COMPACT><DT><DD>
Module FvwmConsole -e FvwmConsoleC.pl
</DL>

<P>
(see <I><a href="<?php echo conv_link_target('./FvwmConsoleC.pl.php');?>">FvwmConsoleC.pl</a></I>(1)).
<P>

Also X resources can be set in your ~/.Xdefaults file:
<P>
<DL COMPACT><DT><DD>
FvwmConsole*VT100*geometry: 40x4
<BR>

FvwmConsole*font: 7x14
</DL>

<P>
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>COMMAND EDITING</H2>

<P>
There are a few options.  If the GNU readline library is available, it
can be used.
<P>

If Perl5 is installed, FvwmConsoleC.pl can be used as a command editor.
This can be accomplished by either copying FvwmConsoleC.pl
to fvwmlib directory as FvwmConsoleC or
invoking FvwmConsole with -e option.
For example:
<P>
<DL COMPACT><DT><DD>
Module FvwmConsole -e FvwmConsoleC.pl
</DL>

<P>
If neither one is installed, a simple input reading function which
doesn't have editing capabilities is used.
<P>

GNU readline and FvwmConsoleC.pl have some frequent used commands
in common as default.
These commands are similar to emacs.
For more details, refer GNU readline man and info pages, and
FvwmConsoleC.pl man page.
<P>
<DL COMPACT><DT><DD>

<DL COMPACT>
<DT>Ctrl-A<DD>
- beginning of line
<DT>Ctrl-B<DD>
- previous char
<DT>Ctrl-D<DD>
- delete char
<DT>Ctrl-E<DD>
- end of line
<DT>Ctrl-F<DD>
- next char
<DT>Ctrl-H<DD>
- backspace
<DT>Ctrl-K<DD>
- erase to the end of line
<DT>Ctrl-N<DD>
- next line
<DT>Ctrl-P<DD>
- previous line
<DT>Ctrl-R<DD>
- search reverse
<DT>Ctrl-U<DD>
- delete line
<DT>Meta-B<DD>
- previous word
<DT>Meta-F<DD>
- next word
<DT>Esc &lt;<DD>
- beginning of history
<DT>Esc &gt;<DD>
- end of history
</DL>
</DL>


<P>
<A NAME="lbAH">&nbsp;</A>
<H2>EXITING</H2>

<P>
FvwmConsole can be stopped by entering the EOF character (usually CTRL-D).
<P>

<B>Note!</B> Do not use the &quot;quit&quot; command, as this is an fvwm builtin:
typing &quot;quit&quot; at the FvwmConsole command line will cause fvwm to exit.
<P>
<A NAME="lbAI">&nbsp;</A>
<H2>SEE ALSO</H2>

<I><A HREF="/cgi-bin/man/man2html/1+xterm">xterm</A></I>(1), <I><a href="<?php echo conv_link_target('./FvwmConsoleC.pl.php');?>">FvwmConsoleC.pl</a></I>(1), GNU Readline library
<P>
<A NAME="lbAJ">&nbsp;</A>
<H2>AUTHOR</H2>

FvwmConsole is the original work of Toshi Isogai.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">INVOCATION</A><DD>
<DT><A HREF="#lbAF">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAG">COMMAND EDITING</A><DD>
<DT><A HREF="#lbAH">EXITING</A><DD>
<DT><A HREF="#lbAI">SEE ALSO</A><DD>
<DT><A HREF="#lbAJ">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 00:02:20 GMT, April 04, 2010


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 04-Apr-2010 -->
