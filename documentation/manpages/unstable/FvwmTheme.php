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
$title          = "FVWM - Man page - FvwmTheme";
$heading        = "FVWM - Man page - FvwmTheme";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_FvwmTheme";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmTheme in unstable branch (2.7.1)"); ?>

<H1>FvwmTheme</H1>
Section: Fvwm Modules (1)<BR>Updated: (not released yet) (2.7.1)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<P>
<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmTheme - an fvwm module for managing the appearance of fvwm and its modules
<P>
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

ModuleSynchronous Timeout 5 FvwmTheme
<P>
<B><u>FvwmTheme</u></B> can only be invoked by fvwm.
Command line invocation of the FvwmTheme module will not work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

FvwmTheme creates appearance resources that may be shared by fvwm and other
modules.  It reads an initial configuration and also reacts to configuration
commands and messages sent from fvwm so that the resources can be dynamically
changed.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>INVOCATION</H2>

Starting with 2.5.1, FvwmTheme is obsolete, please read fvwm man page
about the built-in colorsets solution.  However, all options are still
the same, so this man page defines the exact Colorset syntax.
<P>
FvwmTheme must be spawned as a module by fvwm.
<P>

It is highly suggested that FvwmTheme is invoked before any other modules
that use the colorsets provided by FvwmTheme.  Thus FvwmTheme has
to be invoked with the 'ModuleSynchronous' command by inserting the
line 'ModuleSynchronous Timeout 5 FvwmTheme' in the .fvwm2rc file
right after the <I>ImagePath</I> has been defined.
Invoking FvwmTheme from the <I>InitFunction</I>, <I>StartFunction</I>
or <I>RestartFunction</I> or later can cause excessive redrawing of
already running modules.  It is highly suggested
that the configuration lines for FvwmTheme appear in the configuration
file before FvwmTheme is started.  You can find a proper sample
fvwm setup at the end of this document.
It is pointless to run more than one FvwmTheme
so there is no provision for using an alias name.
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

FvwmTheme supports some configuration options.
<P>
<DL COMPACT>
<DT>*FvwmTheme: Colorset <I>n</I> <I>options</I> <DD>
Creates or modifies colorset <I>n</I>. Each colorset has four colors, an
optional pixmap and an optional shape mask.  The four colors are used by
modules as the foreground, background, highlight and shadow colors.  When
a colorset is created it defaults to a foreground of black and background of
gray.  The background and foreground are marked as &quot;average&quot; and &quot;contrast&quot;
(see later) so that just specifying a pixmap or gradient gives sensible
results.
<P>
Warning: The highest colorset number used determines memory consumption.
Thus if you define 'Colorset 100000', the memory for 100001 colorsets is
used.  Keep your colorset numbers as small as possible.
<P>
<I>options</I> is a comma separated list containing some of the keywords:
fg, Fore, Foreground, bg, Back, Background, hi, Hilite, Hilight, sh,
Shade, Shadow, fgsh, Pixmap, TiledPixmap, AspectPixmap, Transparent,
RootTransparent, Shape, TiledShape, AspectShape, NoShape, ?Gradient,
Tint, fgTint, bgTint, Alpha, fgAlpha, Dither, NoDither, IconTint,
IconAlpha, NoShape and Plain.
<P>
<I>fg</I>, <I>Fore</I> and <I>Foreground</I> take a color name as an argument and
set the foreground color.  The special name <I>Contrast</I> may be used to
select a color that contrasts well with the background color.  To reset
the foreground color to the default value you can simply omit the color
name.
<P>
<I>bg</I>, <I>Back</I> and <I>Background</I> take a color name as an argument and
set the background color.  It also sets the highlight and shadow colors to
values that give a 3d effect unless these have been explicitly set with the
options below.  The special name <I>Average</I> may be used to select a color
that is the average color of the pixmap.
If the pixmap is tinted with the
<I>Tint</I>

option, the tint is not taken in account in the computation of the average
color. You should use the
<I>bgTint</I>

option to get the &quot;real&quot; average color.
The background color is reset to the default value if the color name is omitted.
<P>
<I>hi</I>, <I>Hilite</I> and <I>Hilight</I> take a color name as an argument and
set the highlight color.  If the highlight color is not explicitly set,
the default is to calculate it from the background color.  To switch back
to the default behavior the color name can be omitted.
<P>
<I>sh</I>, <I>Shade</I> and <I>Shadow</I> take a color name as an argument and
set the shadow color.  If the shadow color is not explicitly set,
the default is to calculate it from the background color.  To switch back
to the default behavior the color name can be omitted.
<P>
<I>fgsh</I>

takes a color name as an argument and sets the color used by the
shadowing font effect. See the
<B>FONT SHADOW EFFECTS</B>

section of the fvwm man page. By default this color is computed from
the foreground and background colors.
To switch back to the default the color name can be omitted.
<P>
<I>Pixmap</I>, <I>TiledPixmap</I> and <I>AspectPixmap</I> take a file name as
an argument, search the <I>ImagePath</I> and use it as the background pixmap.
Any transparent parts are filled with the background color.  Not specifying a
file name removes any existing one from the colorset.  <I>TiledPixmap</I>
produces repeated copies of the image with no scaling, <I>Pixmap</I>
causes the image to be stretched to fit whatever object the colorset is applied
to and <I>AspectPixmap</I> stretches to fit but retains the image
aspect ratio.
<P>
<I>Transparent</I> tries to create a transparent background pixmap.
The pixmap may be used as a window background to achieve root transparency.
For this you should use the
<B>ParentalRelativity</B>

fvwm style.
The root background change may be detected or not, this depends on the program
used to set the background. If you use fvwm-root, xsetbg (xli),
FvwmBacker with a solid or a colorset colors or a recent version of Esetroot
(&gt;= 9.2) a background change should be detected. If background changes are not
detected (e.g., if you use xv or xsetroot) you can force detection by using
the -d option of fvwm-root:


<P>


<blockquote><PRE>xv -root -quit mybg.png; fvwm-root -d</PRE></blockquote>
<P>



Due to the way X implements transparency no guarantees can be made
that the desired effect can be achieved. The application may even
crash.  If you experience any problems with this option, do not use
it.
<P>
Using outline move and resize (see the
<B>OpaqueMoveSize</B>

command and the
<I>ResizeOpaque</I>

style) as well as setting the
<I>WindowShadeShrinks</I>

style may help. The transparency achieved with
<I>Transparent</I>

depends on whether the colorset is applied to the foreground or the
background of a window. In the second case the transparency is
relative to the parent window of the window on which the colorset is
defined. For example:


<P>


<blockquote><PRE>Colorset 12 VGradient 200 grey30 grey60
Colorset 17 Transparent
*FvwmIconMan: Colorset 12
*FvwmIconMan: PlainColorset 17</PRE></blockquote>
<P>



gives an IconMan with a vertical grey gradient background and the
buttons use the background (by transparency). To obtain a
(root) transparent IconMan:


<P>


<blockquote><PRE>Colorset 12 Transparent
Colorset 17 Transparent
Colorset 18 Transparent
Colorset 19 Transparent
*FvwmIconMan: Colorset 12
*FvwmIconMan: PlainColorset 17
*FvwmIconMan: FocusColorset 18
*FvwmIconMan: IconColorset  19</PRE></blockquote>
<P>



The Colorset IconMan option defines the IconMan window background, but
the PlainColorset and the FocusColorset are drawn on the
foreground. So, the transparency of the IconMan buttons is achieved
by drawing nothing.  Now if this IconMan is swallowed in an
FvwmButtons as:


<P>


<blockquote><PRE>FvwmButtons:(Colorset 10, Swallow &quot;FvwmIconMan&quot; 'FvwmIconMan')</PRE></blockquote>
<P>



then, IconMan become a child of FvwmButtons and it is transparent
relative to FvwmButtons. So, in this case IconMan uses Colorset
10 as background. If you want root transparency
use the
<I>RootTransparent</I>

option. FvwmButtons, FvwmIconMan, FvwmIdent, FvwmScroll and
FvwmTaskBar are relatively simple. There is one main colorset option
which defines the background of the window and the other colorsets
(if any) are drawn on the foreground. The case of FvwmWinList and
FvwmProxy are simpler. With FvwmWinList all the colorsets are drawn on
the foreground and with FvwmProxy the two colorsets refer to the
window backgrounds. FvwmPager is more
complicated as almost everything in the pager are windows with some parental
relations (the mini windows are the child and the desktops are the
parents and all this is complicated by the hilighted page). So, the
colorsets apply to the background of these windows. You should
experiment. For FvwmForm and FvwmScript the situation is similar.
There is a main window (a child of the root window) which corresponds
to the main colorset and most of the widgets are windows which are
children of the main window.
<I>Tint</I>

may work or not with the
<I>Transparent</I>

option. When the colorset is drawn on the foreground
<I>Tint</I>

should work. In the other cases, tinting works in some exceptional cases
(and may be very slow). Tinting may work with fvwm menu (without
animation). In the other case tinting may work if your X server has
backing store enabled (try xdpyinfo to see if this the case).
But, there is a chance that the backing store support of your
X server does not work well with the terrible hack used to Tint
the ParentRelative Pixmap. So, to get tinted root transparency
it is more safe to use the
<I>RootTransparent</I>

option.
<P>
<I>RootTransparent</I> [ <I>buffer</I> ] 

creates a root transparent background. To make this option work, you
must use an Esetroot compatible program, fvwm-root with the
--retain-pixmap option or FvwmBacker with the RetainPixmap option (and
colorset or solid backgrounds).  The
<I>buffer</I>

keyword is useful only when the
<I>Tint</I>

option is used too. This speeds up creation of windows which use the
colorset (useful for fvwm menus) at the cost of memory usage.
It also speeds up opaque move and resize which can be unacceptably slow
without
<I>buffer</I>.

However, this option may add a lot of memory to your X server (depending
on the size of the image used to set the background). In summary, using
outline move and resize for modules which use such a colorset may be
a good idea.
<P>
<I>Shape</I>, <I>TiledShape</I> and <I>AspectShape</I> take a file name as
an argument, search the <I>ImagePath</I> and use it as the shape bitmap.
<I>TiledShape</I> produces repeated copies of the bitmap with no scaling,
<I>Shape</I> causes the bitmap to be stretched to fit whatever object the
colorset is applied to and <I>AspectShape</I> stretches to fit but
retains the bitmap aspect ratio.  If the file is a pixmap in xpm format,
the shape mask of the pixmap is used.
<P>
Warning: Due to the way X11 implements shapes and the implementation
of the FvwmTheme module you cannot take back making windows shaped.
You may have to restart fvwm or the shaped application.
<P>
<I>?Gradient ...</I> creates a pixmap and stretches it to fit the window.
<I>?Gradient</I> may be one of HGradient, VGradient, DGradient, BGradient,
SGradient, CGradient, RGradient or YGradient.  The gradient types are as
follows:  H is horizontal; V is vertical; D is diagonal from top left to
bottom right; B is a backwards diagonal from bottom left to top right; S
is concentric squares; C is concentric circles; R is a radar like pattern
and Y is a Yin Yang style (but without the dots, we are not <I>that</I> mad).
Please refer to the <I>COLOR GRADIENTS</I> section in the <I>fvwm</I> man page
for the syntax of gradients.
<P>
<I>Tint</I>

takes 2 arguments, a color and a percentage between 0 and 100.
It causes the image defined using
<I>?Pixmap</I>

or
<I>?Gradient</I>

to be tinted with the specified color using the percentage.
If the image is transparent
<I>Tint</I>

tints only the image part.
Unfortunately, a colorset background specified using the
<I>Transparent</I>

option can give strange results. See the
<I>Transparent</I>

option for details.
With no arguments this option removes the tint.
<P>
<I>fgTint</I>

takes 2 arguments, a color and a percentage between 0 and 100.
It causes the color defined using
<I>fg</I>

to be tinted with the specified color using the percentage.
With no arguments this option removes the tint.
<P>
<I>bgTint</I>

takes 2 arguments, a color and a percentage between 0 and 100.
It causes the color defined using
<I>bg</I>

to be tinted with the specified color using the percentage.
If the
<I>sh</I>

and
<I>hi</I>

colors are not specified, they are recomputed from the tinted bg color.
With no arguments this option removes the tint.
<P>
<I>Alpha</I>

takes a percentage between 0 and 100 as an argument.
It causes fvwm to merge the image defined using
<I>?Pixmap</I>

or
<I>?Gradient</I>

with the
<I>bg</I>

color using the percentage. If the percentage is 0 the image is hidden and
if it is 100 the image is displayed as usual (no merge).
The default is 100 and it is restored if no argument is given.
<P>
<I>fgAlpha</I>

takes a percentage between 0 and 100 as an argument.
It causes fvwm to merge the text and the colorset background using the
percentage. If the percentage is 0 the text is hidden and if it is 100
the text is displayed as usual (no merge).
This option has an effect only with fonts loaded by Xft, see the
<B>FONT NAMES AND FONT LOADING</B>

section of fvwm man page.
The default is 100 and it is restored if no argument is given.
<P>
<I>Dither</I>

causes fvwm to dither the image defined using
<I>?Pixmap</I>

or
<I>?Gradient.</I>

This is useful only with displays with depth less than or equal to 16 (i.e.,
on displays which can only display less than 65537 colors at once).
The dithering effect lets you simulate having more colors
available that you actually have.
<I>NoDither</I>

causes fvwm to do not dither the images.
<I>Dither</I>

is the default if the depth is less than or equal to 8
(a screen with 256 colors or less).
In depth 15 (32768 colors) and 16 (65536 colors), the
default is
<I>NoDither</I>,

however this effect can be useful with images which contain
a lot of close colors. For example a fine gradient will look
more smooth.
<P>
<I>IconTint</I>

takes 2 arguments, a color and a percentage between 0 and 100.
It causes fvwm or a module to tint the &quot;icons&quot; which are rendered
into the colorset background with the specified color using a percentage.
Here &quot;icons&quot; means, fvwm Icons, fvwm menu icons,
MiniIcons which represent applications in various modules, images
loaded by modules (e.g., images specified by the
<I>Icon</I>

FvwmButtons button option) ...etc.
With no arguments this option removes the icon tint.
<P>
<I>IconAlpha</I>

takes a percentage between 0 and 100 as an argument.
It causes fvwm to merge the &quot;icons&quot; which are rendered
into the colorset background using this percentage.
The default is 100 and it is restored if no argument is given.
<P>
<I>Note</I>:

It is equivalent to use &quot;Tint a_color rate&quot; and &quot;Alpha a&quot; if a = 100
and the bg color is a_color. This equivalence does not hold for IconAlpha
and IconTint as the background can be an image or a gradient (and not a
uniform color background).
However, in some cases you can achieve (almost) the same effect by using
IconTint in the place of IconAlpha. This is preferable as, in general,
IconAlpha generates more redrawing than IconTint.
<P>
<I>NoShape</I>

removes the shape mask from the colorset while
<I>Plain</I>

removes the background pixmap or gradient.
<P>
</DL>
<A NAME="lbAG">&nbsp;</A>
<H2>COMMANDS</H2>

The following fvwm command may be executed at any time to alter the colorsets.
It may be bound to a menu item or typed into a module such as FvwmConsole.
<P>
<DL COMPACT>
<DT>SendToModule FvwmTheme Colorset <I>options</I><DD>
The syntax is the same as the configuration option.
<P>
</DL>
<A NAME="lbAH">&nbsp;</A>
<H2>EXAMPLES</H2>

<P>


<P>


<blockquote><PRE>*FvwmTheme: Colorset 3 fg wheat, bg navy</PRE></blockquote>
<P>



<P>
If necessary this creates colorsets 0, 1, 2 and 3 and then changes colorset
3 to have a foreground of wheat, a background of navy.
<P>


<P>


<blockquote><PRE>*FvwmTheme: Colorset 3 bg &quot;navy blue&quot;</PRE></blockquote>
<P>



<P>
changes the background color of colorset 3 to navy blue. The foreground and
pixmap are unchanged.
<P>


<P>


<blockquote><PRE>*FvwmTheme: Colorset 3 AspectPixmap large_murky_dungeon.xpm</PRE></blockquote>
<P>



<P>
Causes depression.
<P>


<P>


<blockquote><PRE>*FvwmTheme: Colorset 3 bg Average</PRE></blockquote>
<P>



<P>
Sets the background color and the relief colors to match the background
pixmap. This is the default setting but it must be used if a background color
was specified and is now not required.
<P>


<P>


<blockquote><PRE>*FvwmTheme: Colorset 3 YGradient 200 3 \
  blue 1000 navy 1 blue 1000 navy</PRE></blockquote>
<P>



<P>
Adds a Yin Yang gradient background pixmap to colorset 3.  If the
background is set to average it is recomputed along with the foreground
if that is set to contrast.
<P>


<P>


<blockquote><PRE> #!/bin/sh
 FvwmCommand &quot;SendToModule FvwmTheme Colorset 7 fg navy, bg gray&quot;
 while true
 do
   FvwmCommand &quot;SendToModule FvwmTheme Colorset 7 fg gray&quot;
   sleep 1
   FvwmCommand &quot;SendToModule FvwmTheme Colorset 7 fg navy&quot;
   sleep 1
 done</PRE></blockquote>
<P>



<P>
Makes colorset 7 blink.
<P>
The color names used in colorsets can be substituted in any fvwm
command.  Please refer to the <I>COMMAND EXPANSION</I>
section in the fvwm man page and the example below for a description.
<P>
<A NAME="lbAI">&nbsp;</A>
<H2>SAMPLE FVWM CONFIGURATION</H2>

<P>
Below you can find a fvwm configuration file that demonstrates the
use of the FvwmTheme module.  The order in which FvwmTheme and the
other modules are configured and started is important.
<P>


<P>


<blockquote><PRE> # where your images are
 ImagePath &lt;put your image path here&gt;

 #
 # FvwmTheme
 #
 # The FvwmTheme setup must be first in the config file,
 # right after the paths are set.
 #
 # Instead of the *FvwmTheme: Colorset... lines below you
 # could read in a file with these commands.  So to change
 # your color scheme you can simply copy a different file
 # over your palette file and restart fvwm:
 #
 # Read /home/my_user_name/.fvwm/.fvwm_palette
 #

 # 0 = Default colors
 # 1 = Inactive windows
 # 2 = Active windows
 # 3 = Inactive menu entry and menu background
 # 4 = Active menu entry
 # 5 = greyed out menu entry (only bg used)
 # 6 = module foreground and background
 # 7 = hilight colors
 *FvwmTheme: Colorset 0 fg black, bg rgb:b4/aa/94
 *FvwmTheme: Colorset 1 fg black, bg rgb:a1/b2/c8
 *FvwmTheme: Colorset 2 fg black, bg rgb:da/9a/68
 *FvwmTheme: Colorset 3 fg black, bg rgb:b4/aa/94, \
   VGradient 100 dtcolor5 rgb:b4/aa/94
 *FvwmTheme: Colorset 4 fg black, bg rgb:b4/aa/94
 *FvwmTheme: Colorset 5 fg rgb:d2/bf/a8, \
   bg rgb:b4/aa/94
 *FvwmTheme: Colorset 6 fg black, bg rgb:b4/aa/94, \
   VGradient 100 dtcolor5 rgb:b4/aa/94
 *FvwmTheme: Colorset 7 fg black, bg rgb:94/ab/bf

 # run FvwmTheme before anything else is done
 ModuleSynchronous Timeout 5 FvwmTheme

 #
 # general setup
 #
 Style * Colorset 1
 Style * HilightColorset 2
 MenuStyle * MenuColorset 3
 MenuStyle * ActiveColorset 4
 MenuStyle * GreyedColorset 5

 #
 # Applications
 #
 AddToFunc InitFunction
 + I Exec exec xterm -fg $[fg.cs0] -bg $[bg.cs0]

 #
 # module setup
 #

 # ... more FvwmPager config lines ...
 *FvwmPager: Colorset * 6
 *FvwmPager: BalloonColorset * 6
 *FvwmPager: HilightColorset * 7
 *FvwmPager: WindowColorsets 1 2

 # ... more FvwmIconMan config lines ...
 *FvwmIconMan: Colorset 6
 *FvwmIconMan: FocusColorset 2
 *FvwmIconMan: FocusAndSelectColorset 2
 *FvwmIconMan: PlainColorset 6
 *FvwmIconMan: SelectColorset 6
 *FvwmIconMan: TitleColorset 6

 # ... more FvwmButtons config lines ...
 *FvwmButtons: Colorset 6
 # sample button passing color to xterm
 *FvwmButtons: (Title xterm, \
   Action &quot;Exec exec xterm -fg $[fg.cs6] -bg[bg.cs6]&quot;)

 # ... more FvwmWharf config lines ...
 *FvwmWharf: Colorset 6

 # ... more FvwmIdent config lines ...
 *FvwmIdent: Colorset 6

 # ... more FvwmWinList config lines ...
 *FvwmWinList: Colorset      1
 *FvwmWinList: FocusColorset 2
 *FvwmWinList: IconColorset  1

 # ... more FvwmTaskBar config lines ...
 *FvwmTaskBar: Colorset     6
 *FvwmTaskBar: IconColorset 6
 *FvwmTaskBar: TipsColorset 0</PRE></blockquote>
<P>



<P>
If you need to have more colors and don't want to reinvent the wheel,
you may use the convention used in fvwm-themes, it defines the meaning
of the first 40 colorsets for nearly all purposes:
<P>
<BR>&nbsp;<B><A HREF="http://fvwm-themes.sourceforge.net/doc/colorsets">http://fvwm-themes.sourceforge.net/doc/colorsets</A></B>
<P>
<A NAME="lbAJ">&nbsp;</A>
<H2>BUGS</H2>

<P>
Initialization of fvwm, FvwmTheme and the other modules is tricky.
Please pay close attention to the text in the <I>INVOCATION</I>
section.  The example above demonstrates the proper way to get a
FvwmTheme setup running.
<P>
<A NAME="lbAK">&nbsp;</A>
<H2>AUTHOR</H2>

<P>
Prefers to remain anonymous.
With help from Brad Giaccio and Dominik Vogt.
<P>
<A NAME="lbAL">&nbsp;</A>
<H2>COPYRIGHT</H2>

Copyright (C) 1999 Joey Shutup.  No guarantees or warranties or anything are
provided or implied in any way whatsoever.  Use this program at your own risk.
Permission to use this program for any purpose is given, as long as the
copyright is kept intact.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">INVOCATION</A><DD>
<DT><A HREF="#lbAF">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAG">COMMANDS</A><DD>
<DT><A HREF="#lbAH">EXAMPLES</A><DD>
<DT><A HREF="#lbAI">SAMPLE FVWM CONFIGURATION</A><DD>
<DT><A HREF="#lbAJ">BUGS</A><DD>
<DT><A HREF="#lbAK">AUTHOR</A><DD>
<DT><A HREF="#lbAL">COPYRIGHT</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 16:23:05 GMT, April 15, 2011


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 15-Apr-2011 -->
