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
$title          = "FVWM - Man page - FvwmWindowMenu";
$heading        = "FVWM - Man page - FvwmWindowMenu";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_FvwmWindowMenu";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmWindowMenu in unstable branch (2.5.24)"); ?>

<H1>FvwmWindowMenu</H1>
Section: Fvwm Modules (1)<BR>Updated: 2004-06-29<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmWindowMenu - open configurable fvwm menu listing current windows
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<A NAME="ixAAC"></A>
FvwmWindowMenu should be spawned by <I><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></I>(1) for normal functionality.
<P>

Run this module from your StartFunction:
<P>

<blockquote><pre>    AddToFunc StartFunction
    + I Module FvwmWindowMenu</pre></blockquote>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAD"></A>
A substitute for <I>fvwm</I> builtin <B>WindowList</B>, but written in Perl
and easy to customize. Unlike <B><a href="<?php echo conv_link_target('./FvwmIconMan.php');?>">FvwmIconMan</a></B> or <B><a href="<?php echo conv_link_target('./FvwmWinList.php');?>">FvwmWinList</a></B> the
module does not draw its own window, but instead creates an
<I>fvwm</I> menu and asks <I>fvwm</I> to pop it up.
<P>

By defining a set of regular expressions, windows may
be sorted into sections based on a regexp matching the window
name, class or resource and included in the menu.
<P>

Similarly, another set of regular expressions can be used to exclude
items from the menu.
<P>

Any windows not matching an instance of the include or exclude list will
be placed in the last section of the menu.
<A NAME="lbAE">&nbsp;</A>
<H2>USAGE</H2>

<A NAME="ixAAE"></A>
Run the module, supposedly from StartFunction in <I>.fvwm2rc</I>:
<P>

<blockquote><pre>    Module FvwmWindowMenu</pre></blockquote>
<P>

To actually invoke the menu add something like:
<P>

<blockquote><pre>    Key Menu A N SendToModule FvwmWindowMenu \
        Post Root c c SelectOnRelease Menu</pre></blockquote>
<P>

or:
<P>

<blockquote><pre>    Mouse 2 A N SendToModule FvwmWindowMenu Popup</pre></blockquote>
<P>

The additional parameters are any valid <B>Menu</B> command parameters without a
menu name, see fvwm.
<P>

Recognized actions are <B>Post</B> (or its alias <B>Menu</B>) and <B>Popup</B>, they
create <I>fvwm</I> menus and invoke them using the corresponding commands
<B>Menu</B> and <B>Popup</B>. If the module was started with ``-g'' switch, it
additionally supports <B>PostBar</B> (not implemented yet).
<P>

Set module options for windows to include (Show) or exclude (DontShow).
The syntax is:
<P>

<blockquote><pre>    *FvwmWindowMenu: ShowName pattern
    *FvwmWindowMenu: ShowClass pattern
    *FvwmWindowMenu: ShowResource pattern
    *FvwmWindowMenu: DontShowName pattern
    *FvwmWindowMenu: DontShowClass pattern
    *FvwmWindowMenu: DontShowResource pattern</pre></blockquote>
<P>

Pattern is a perl regular expression that will be evaluated in m// context.
See <I><A HREF="/cgi-bin/man/man2html/1+perlre">perlre</A></I>(1).
<P>

For example:
<P>

<blockquote><pre>    *FvwmWindowMenu: ShowResource ^gvim
    *FvwmWindowMenu: ShowName Galeon|Navigator|mozilla-bin|Firefox</pre></blockquote>
<P>

will define two sections containing respectively browsers, and GVim. A third
section will contain all other windows.
<P>

To only include matching windows, add:
<P>

<blockquote><pre>    *FvwmWindowMenu: DontShowName .*</pre></blockquote>
<P>

Similarly:
<P>

<blockquote><pre>    *FvwmWindowMenu: DontShowName ^Fvwm
    *FvwmWindowMenu: DontShowClass Gkrellm</pre></blockquote>
<P>

will cause the menu to ignore windows with name beginning with Fvwm
or class gkrellm.
<P>

Other options:
<DL COMPACT>
<DT>*FvwmWindowMenu: <I>OnlyIconified</I> {on|off}<DD>
<A NAME="ixAAF"></A>
show only iconified windows
<DT>*FvwmWindowMenu: <I>AllDesks</I> {on|off}<DD>
<A NAME="ixAAG"></A>
show windows from all desks
<DT>*FvwmWindowMenu: <I>AllPages</I> {on|off}<DD>
<A NAME="ixAAH"></A>
show windows from all pages
<DT>*FvwmWindowMenu: <I>MaxLen</I> 32<DD>
<A NAME="ixAAI"></A>
max length in chars of entry
<DT>*FvwmWindowMenu: <I>MenuName</I> MyMenu<DD>
<A NAME="ixAAJ"></A>
name of menu to popup
<DT>*FvwmWindowMenu: <I>MenuStyle</I> MyMenuStyle<DD>
<A NAME="ixAAK"></A>
name of MenuStyle to apply
<DT>*FvwmWindowMenu: <I>Debug</I> {0,1,2,3}<DD>
<A NAME="ixAAL"></A>
level of debug info output, 0 means no debug
<DT>*FvwmWindowMenu: <I>Function</I> MyWindowListFunc<DD>
<A NAME="ixAAM"></A>
function to invoke on menu entries; defaults to WindowListFunc
<DT>*FvwmWindowMenu: <I>ItemFormat</I> formatstring<DD>
<A NAME="ixAAN"></A>
how to format menu entries; substitutions are made as follows:
<DL COMPACT><DT><DD>
<DL COMPACT>
<DT>%n, %i, <TT>%c</TT>, <TT>%r<DD>


<A NAME="ixAAO"></A>
the window name, icon name, class or resource
<DT>%x, %y<DD>


<A NAME="ixAAP"></A>
the window x or y coordinates w.r.t. the page the window is on.
<DT>%X, %Y<DD>


<A NAME="ixAAQ"></A>
the window x or y coordinates w.r.t. the desk the window is on.
<DT>%d<DD>
<A NAME="ixAAR"></A>
the window desk number
<DT>%m<DD>
<A NAME="ixAAS"></A>
the window's mini-icon
<DT>%M<DD>
<A NAME="ixAAT"></A>
the window's mini-icon only for iconified windows, otherwise empty
<DT>%t<DD>
<A NAME="ixAAU"></A>
a tab
<DT>%%<DD>
a literal %
</DL>
</DL>

<DL COMPACT><DT><DD>


<P>


The format string must be quoted. The default string is
``%m%n%t%t(+%x+%y) - Desk %d</TT>''.
</DL>

</DL>
<A NAME="lbAF">&nbsp;</A>
<H2>MORE EXAMPLES</H2>

<A NAME="ixAAV"></A>
Fancy binding of the window menu to the right windows key on some keyboards.
Hold this button while navigating using cursor keys, then release it.
<P>

<blockquote><pre>    CopyMenuStyle * WindowMenu
    MenuStyle WindowMenu SelectOnRelease Super_R
    *FvwmWindowMenu: MenuStyle WindowMenu</pre></blockquote>
<P>

<blockquote><pre>    AddToFunc StartFunction I Module FvwmWindowMenu</pre></blockquote>
<P>

<blockquote><pre>    Key Super_R A A SendToModule FvwmWindowMenu Post Root c c WarpTitle</pre></blockquote>
<A NAME="lbAG">&nbsp;</A>
<H2>AUTHORS</H2>

<A NAME="ixAAW"></A>

<DL COMPACT>
<DT>Ric Lister &lt;<A HREF="http://cns.georgetown.edu/~ric/">http://cns.georgetown.edu/~ric/</A>&gt;<DD>
<A NAME="ixAAX"></A>


<DT>Scott Smedley<DD>
<A NAME="ixAAY"></A>

<DT>Mikhael Goikhman<DD>
<A NAME="ixAAZ"></A>
<P>
</DL>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">USAGE</A><DD>
<DT><A HREF="#lbAF">MORE EXAMPLES</A><DD>
<DT><A HREF="#lbAG">AUTHORS</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 16:32:41 GMT, November 24, 2007


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 24-Nov-2007 -->
