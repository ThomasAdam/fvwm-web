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
if (strlen("$navigation_check") > 0) return;

$rel_path = "./../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Perl library - FVWM::Tracker::ModuleConfig";
$heading        = "FVWM - Perl library - FVWM::Tracker::ModuleConfig";
$link_name      = "Perl library";
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
	if (strlen($layout) > 0) {
		$file = "$rel_path/layout_$layout.inc";
		if (file_exists($file)) $layout_file = $file;
	}
	include(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FVWM::Tracker::ModuleConfig in unstable branch (2.5.7)"); ?>

<H1>FVWM::Tracker::ModuleConfig</H1>
Section: FVWM Perl library (3)<BR>Updated: 2003-05-31<BR>Source: <a href="ftp://ftp.fvwm.org/pub/fvwm/devel/sources/perllib/FVWM/Tracker/ModuleConfig.pm">FVWM/Tracker/ModuleConfig.pm</a><br>
<A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAC"></A>
This is a subclass of <B><a href="<?php echo conv_link_target('./FVWM::Tracker.php');?>">FVWM::Tracker</a></B> that enables to read the module
configuration.  The module configuration is usually represented using a hash,
but it may be represented as array of lines too.
<P>

This tracker defines the following observables:
<P>

<blockquote><pre>    &quot;config line added&quot;</pre></blockquote>
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSYS</H2>

<A NAME="ixAAD"></A>
Using <B><a href="<?php echo conv_link_target('./FVWM::Module.php');?>">FVWM::Module</a></B> <TT>$module</TT> object:
<P>

<blockquote><pre>    my $configTracker = $module-&gt;track(&quot;ModuleConfig&quot;);
    my $configHash = $configTracker-&gt;data;
    my $font = $configHash-&gt;{Font} || 'fixed';</pre></blockquote>
<P>

or:
<P>

<blockquote><pre>    my $configTracker = $module-&gt;track(
        &quot;ModuleConfig&quot;, InitialConfig =&gt; { Font =&gt; 'fixed' } );
    my $font = $configTracker-&gt;data('Font');</pre></blockquote>
<A NAME="lbAD">&nbsp;</A>
<H2>OVERRIDDEN METHODS</H2>

<A NAME="ixAAE"></A>
<DL COMPACT>
<DT><B>new</B> <I>module</I> <I>params</I><DD>
<A NAME="ixAAF"></A>
It is possible to specify additional parameters that this tracker understands.


<P>


<blockquote><pre>    ConfigType     - &quot;hash&quot; or &quot;array&quot;
    ModuleName     - module to query, the default is $module-&gt;name
    LineFilter     - &quot;asis&quot;, &quot;spacefree&quot; (default), &quot;lowerkeys&quot;, &quot;upperkeys&quot;
    DefaultConfig  - the config hash/array of config to initially use</pre></blockquote>
<DT><B>data</B> [<I>line-key-or-number</I>]<DD>
<A NAME="ixAAG"></A>
Returns an array ref of configuration hashes or one hash ref (if
<I>line-key-or-number</I> is given).


<P>


Returns <I>undef</I> if the configuration line for <I>line-key-or-number</I> is not
defined.
<DT><B>dump</B> [<I>line-key-or-number</I>]<DD>
<A NAME="ixAAH"></A>
Works similarly like <B>data</B>, but returns one or many debug lines.


<P>


Returns an empty string if no module configuration is defined.
</DL>
<A NAME="lbAE">&nbsp;</A>
<H2>AUTHOR</H2>

<A NAME="ixAAI"></A>
Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt;.
<A NAME="lbAF">&nbsp;</A>
<H2>SEE ALSO</H2>

<A NAME="ixAAJ"></A>
For more information, see <a href="<?php echo conv_link_target('./FVWM::Module.php');?>">FVWM::Module</a> and <a href="<?php echo conv_link_target('./FVWM::Tracker.php');?>">FVWM::Tracker</a>.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">DESCRIPTION</A><DD>
<DT><A HREF="#lbAC">SYNOPSYS</A><DD>
<DT><A HREF="#lbAD">OVERRIDDEN METHODS</A><DD>
<DT><A HREF="#lbAE">AUTHOR</A><DD>
<DT><A HREF="#lbAF">SEE ALSO</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 23:11:21 GMT, May 30, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by perllib2php on 31-May-2003 -->
