<?php
//--------------------------------------------------------------------
//-  File          : documentation/manpages/template.php
//-  Project       : FVWM Home Page
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

// This is an autogenerated file, use perllib2php to create it.

//--------------------------------------------------------------------
// this manpages should not appear in the navigation structure
// so we hide its contents from navgen
//--------------------------------------------------------------------
if(isset($navigation_check)) return;

$rel_path = "./../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Perl library - FVWM::Commands";
$heading        = "FVWM - Perl library - FVWM::Commands";
$link_name      = "Perl library";
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
	if(isset($layout)) {
		$file = "$rel_path/layout_$layout.inc";
		if (file_exists($file)) $layout_file = $file;
	}
	include(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FVWM::Commands in unstable branch (2.5.8)"); ?>

<H1>FVWM::Commands</H1>
Section: FVWM Perl library (3)<BR>Updated: 2003-10-26<BR>Source: <a href="ftp://ftp.fvwm.org/pub/fvwm/devel/sources/perllib/FVWM/Commands.pm">FVWM/Commands.pm</a><br>
<A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FVWM::Commands - lists all available FVWM commands
<A NAME="lbAC">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAC"></A>
This class is autogenerated from the fvwm sources.
<P>

It may be used to get a list of all available <FONT>FVWM</FONT> commands including the
command name, its short description and some other command properties.
<A NAME="lbAD">&nbsp;</A>
<H2>USAGE</H2>

<A NAME="ixAAD"></A>
<blockquote><pre>    use lib `fvwm-perllib dir`;
    use FVWM::Commands;
    use POSIX;</pre></blockquote>
<P>

<blockquote><pre>    my $date = strftime(&quot;%d-%b-%Y&quot;, gmtime($FVWM::Commands::TIME));
    my $version = $FVWM::Commands::VERS;
    print &quot;The recognized commands for fvwm $version as of $date:\n\n&quot;;
    foreach my $command (@FVWM::Commands::LIST) {
        printf &quot;  %-21s - %s\n&quot;, $command-&gt;{name}, $command-&gt;{descr};
    }</pre></blockquote>
<A NAME="lbAE">&nbsp;</A>
<H2>PUBLIC CONSTANTS</H2>

<A NAME="ixAAE"></A>
<DL COMPACT>
<DT>$VERS<DD>
<A NAME="ixAAF"></A>
The fvwm version number at the generation time like ``2.6.0'' plus the info
that may indicate that this is not a final version, but a cvs snapshot.
<DT>$TIME<DD>
<A NAME="ixAAG"></A>
The unix time of the command list generation.


<P>


Example:


<P>


<blockquote><pre>    print &quot;The FVWM command list found on your system was generated &quot;
        . (time() - $FVWM::Commands::TIME) / 86400 . &quot; days ago\n&quot;;</pre></blockquote>
<DT>@LIST<DD>
<A NAME="ixAAH"></A>
The command list that is an array of hashes with keys <I>name</I>, <I>cursor</I>,
<I>descr</I> (string) and <I>window</I> (boolean).


<P>


<I>name</I> may be special, like ``+'', ``#'' and ``*''.  Other names usually contain
only isalpha characters, like <B>Move</B>, <B>SendToModule</B>.


<P>


<I>cursor</I> may be either empty or the cursor context used in <B>CursorStyle</B>
(like ``<FONT>SELECT</FONT>'' or ``<FONT>MOVE</FONT>''), associated with the command.


<P>


<I>descr</I> is a short one line description of the command.


<P>


<I>window</I> is true for commands that need a window.


<P>


Example:


<P>


<blockquote><pre>    # get command names only
    @commandNames = map { $_-&gt;{name} } @FVWM::Commands::LIST;</pre></blockquote>
</DL>
<A NAME="lbAF">&nbsp;</A>
<H2>AUTHOR</H2>

<A NAME="ixAAI"></A>
Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt;.
<A NAME="lbAG">&nbsp;</A>
<H2>SEE ALSO</H2>

<A NAME="ixAAJ"></A>
For more information about the commands themselves, see <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I>(1).
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">DESCRIPTION</A><DD>
<DT><A HREF="#lbAD">USAGE</A><DD>
<DT><A HREF="#lbAE">PUBLIC CONSTANTS</A><DD>
<DT><A HREF="#lbAF">AUTHOR</A><DD>
<DT><A HREF="#lbAG">SEE ALSO</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 00:48:42 GMT, November 01, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by perllib2php on 01-Nov-2003 -->
