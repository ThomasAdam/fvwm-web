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
$title          = "FVWM - Man page - fvwm-convert-2.6";
$heading        = "FVWM - Man page - fvwm-convert-2.6";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_stable_fvwm-convert-2.6";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for fvwm-convert-2.6 in stable branch (2.6.2)"); ?>

<H1>fvwm-convert-2.6</H1>
Section: Fvwm Modules (1)<BR>Updated: 06 August 2011 (2.6.2)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

fvwm-convert-2.6 - convert fvwm 2.4.x configuration file to fvwm 2.6 style
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<B><u>fvwm-convert-2.6</u></B>

[<I>--follow-read</I>|<I>-f</I>]

[<I>--help</I>|<I>-h</I>]

source

[<I>dest</I>]

<A NAME="lbAD">&nbsp;</A>
<H2>OPTIONS</H2>

The following options are supported:
<DL COMPACT>
<DT><B>--help</B> | <B>-h</B><DD>
Prints a usage message to the screen.
<DT><B>--follow-read</B> | <B>-f</B><DD>
Follows files found along with the
<B>Read</B>

command.
</DL>
<A NAME="lbAE">&nbsp;</A>
<H2>DESCRIPTION</H2>

<B><u>fvwm-convert-2.6</u></B>

converts an fvwm 2.4.x configuration file into a fvwm 2.6
file with compatible syntax.  It is not suitable to convert older 2.x
configuration files.  Please use
<B><a href="<?php echo conv_link_target('./fvwm-convert-2.2.php');?>">fvwm-convert-2.2</a></B>

to convert these to the 2.2.x format first, and then if necessary
<B><a href="<?php echo conv_link_target('./fvwm-convert-2.4.php');?>">fvwm-convert-2.4</a></B>

<P>

By default,
<B><u>fvwm-convert-2.6</u></B>

won't look for a given config file.  This must be specified as the first
parameter to
<B>fvwm-convert-2.6.  </B>

Different source and destination files may be given.
If the destination file already exists, this program exits.
If no destination file is given, then the filename is 
the same name as the source file with the suffix &quot;.converted&quot;
added.  Without an absolute path given as the destination path to the
destination file, the program will create the destination file in the CWD.
<P>

<B><u>fvwm-convert-2.6</u></B>

makes the following changes:
<DL COMPACT>
<DT><B>Style lines</B>

<DD>
In fvwm 2.4, most style options could be negated from their counterparts
using NoFoo -- fvwm-convert-2.6 corrects this by now using !Foo.
<DT><B>ModulePath</B>

<DD>
In fvwm 2.4 and beyond, the ModulePath is compiled into fvwm.
<B><u>fvwm-convert-2.6</u></B>

comments out any ModulePath commands it finds.
If you are using your own modules, (not the ones that come with fvwm),
you will have to fix your configuration file after using
<B><u>fvwm-convert-2.6</u></B>.

<DT><B>Conditional command syntax</B>

<DD>
In fvwm 2.4, the conditional command options were whitespace-separated --
they should now be comma-separated instead.  In addition, the older syntax
to Next and Prev of using [*] to denote all windows has been removed
entirely.  Both these checks and conversions are done on function commands,
key/mouse bindings.
<DT><B>WindowShadeSteps</B>

<DD>
In fvwm 2.4, the WindowShadeSteps command is replaced by the
WindowShadeSteps Style option.
<B><u>fvwm-convert-2.6</u></B>

makes this change.
<DT><B><a href="<?php echo conv_link_target('./FvwmTheme.php');?>">FvwmTheme</a></B>

<DD>
In fvwm 2.6, the FvwmTheme module is replaced by a series of Colorset
commands.  Whilst
<B><u>fvwm-convert-2.6</u></B>

will try and make this change, it is still recommended that this is checked
after conversion.
<DT><B>EdgeResistance</B>

<DD>
In fvwm 2.6, the EdgeResistance command is has been split to include an
additional style option for EdgeMoveResistance.
<B><u>fvwm-convert-2.6</u></B>

makes any changes necessary.
<DT><B>StartFunction / RestartFunction / InitFunction</B>

<DD>
In fvwm 2.6, the need for using InitFunction and/or RestartFunction is
redundant when StartFunction is read at both of these times.
<B>fvwm-convert-2.6 </B>

attempts to convert this.
<DT><B>Read</B>

<DD>
If 
<B>-f</B>

or
<B>--follow-read</B>

is given, any files
<B><u>fvwm-convert-2.6</u></B>

can detect and open will be converted automatically, else a list of files
that can be followed are printed to the screen.
<P>
<DT></DL>
<A NAME="lbAF">&nbsp;</A>
<H2>BUGS</H2>

<DD>
<P>
<I>InitFunction</I>

and
<I>RestartFunction</I>

and hence
<I>StartFunction</I>

are printed at the end of the files -- this slight reordering might put some
comments before in an odd spot.
<P>
When converting over FvwmTheme lines, the colorset definitions might well be
broken, but these cannot easily be converted.
<P>
Bug reports can be sent to the fvwm-workers mailing list (see the
<I>FAQ</I>).

<A NAME="lbAG">&nbsp;</A>
<H2>AUTHOR</H2>

Thomas Adam &lt;<A HREF="mailto:thomas.adam22@gmail.com">thomas.adam22@gmail.com</A>&gt;
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">OPTIONS</A><DD>
<DT><A HREF="#lbAE">DESCRIPTION</A><DD>
<DT><A HREF="#lbAF">BUGS</A><DD>
<DT><A HREF="#lbAG">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 11:58:09 GMT, August 06, 2011


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 06-Aug-2011 -->
