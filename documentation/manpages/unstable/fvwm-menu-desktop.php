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
$title          = "FVWM - Man page - fvwm-menu-desktop";
$heading        = "FVWM - Man page - fvwm-menu-desktop";
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

<?php decoration_window_start("Manual page for fvwm-menu-desktop in unstable branch (2.5.8)"); ?>

<H1>fvwm-menu-desktop</H1>
Section: FVWM Utilities (1)<BR>Updated: 25 April 2002<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

fvwm-menu-desktop - builds GNOME and KDE menus and style commands for FVWM
<P>
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<P>
<u>fvwm-menu-desktop</u>
[ <B>--help</B>|<B>-h</B>|<B>-?</B> ]
[ <B>--version</B>|<B>-v</B>|<B>-V</B> ]
[ <B>--install-prefix</B> <I>DIR</I> ]
[ <B>--desktop</B> <I>NAME</I> ]
[ <B>--type</B> NAME ]
[ <B>--fvwmgtk-alias</B> <I>NAME</I> ]
[ <B>--title</B> <I>NAME</I> ]
[ <B>--name</B> <I>NAME</I> ]
[ <B>--merge-user-menu</B> ]
[ <B>--enable-mini-icons</B> ]
[ <B>--enable-tran-mini-icons</B> ]
[ <B>--mini-icons-path</B> <I>DIR</I> ]
[ <B>--png-icons-path</B> <I>DIR</I> ]
[ <B>--tran-mini-icons-path</B> <I>DIR</I> ]
[ <B>--check-mini-icons</B> <I>PATH</I> ]
[ <B>--icon-toptitle</B>
<I>micon</I>:<I>law</I>:<I>place</I>:<I>side_pic</I>:<I>color</I> ]
[ <B>--icon-title</B>
<I>micon</I>:<I>law</I>:<I>place</I>:<I>side_pic</I>:<I>color</I> ]
[ <B>--icon-folder</B>  <I>micon</I>:<I>law</I>:<I>place</I> ]
[ <B>--icon-app</B> <I>micon</I>:<I>law</I>:<I>place</I> ]
[ <B>--wm-icons</B> ]
[ <B>--enable-style</B> ]
[ <B>--enable-tran-style</B> ]
[ <B>--icon-style</B> <I>micon</I>:<I>icon</I>:<I>law</I> ]
[ <B>--icons-path</B> <I>DIR</I> ]
[ <B>--tran-icons-path</B> <I>DIR</I> ]
[ <B>--check-icons</B> <I>PATH</I> ]
[ <B>--submenu-name-prefix</B> <I>name</I> ]
[ <B>--dir</B> <I>DIR</I> ]
[ <B>--destroy-type</B> <I>FLAG</I> ]
[ <B>--xterm</B> <I>CMD</I> ]
[ <B>--lang</B> <I>NAME</I> ]
[ <B>--utf8</B> ]
[ <B>--uniconv</B> <I>charset</I> ]
[ <B>--uniconv-exec</B> <I>exec</I> ]
[ <B>--menu-style</B> <I>name</I> ]
[ <B>--no-check-app</B> ]
[ <B>--time-limit</B> <I>NUM</I> ]
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

This is a perl script which parses GNOME or KDE menus definitions to build
corresponding FVWM or FvwmGtk menus. The script can also
build icon and mini-icon style commands for the applications.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>USAGE</H2>

There are a lot of options. However the defaults are, I hope, good
enough.
If you want the KDE system menu in the menu &quot;Utilities&quot; add the
following lines in your .fvwm2rc file:


<P>


<blockquote><PRE> ...
AddToMenu Utilities &quot;KDE System Menu&quot; Popup kde-sys
 ...
PipeRead 'fvwm-menu-desktop --desktop kde-sys'</PRE></blockquote>
<P>



For KDE2 you may have to add --utf8 or --uniconv &quot;charset&quot; (see below).
Moreover, with KDE2 you can add --merge-user-menu.
If you use KDE version 1 (see below for KDE2) and you want mini-icons 
in the menu and if the KDE mini-icons are in &quot;mini/&quot;
relative to your FVWM ImagePath add the option --enable-mini-icons.
(if the KDE mini-icons are in some other place
use the --mini-icons-path option, e.g., they are in your
ImagePath plus --mini-icons-path). If you want to build Icon and
MiniIcon style commands for KDE applications, add the option --enable-style.
If you want to have the KDE user menu replace &quot;sys&quot; by &quot;user&quot;. If you use
the KDE menu editor, you may want to pop this menu up dynamically.
Then, put this into your .fvwm2rc file (note the destroy-type).


<P>


<blockquote><PRE>AddToMenu Utilities &quot;KDE User Menu&quot; Popup kde-user
  ...
AddToMenu kde-user
+ DynamicPopupAction PipeRead 'fvwm-menu-desktop --desktop kde-user --enable-mini-icons [--destroy-type dynamic] [other options]'</PRE></blockquote>
<P>



<P>
For GNOME it is natural to use FvwmGtk
menus. The following example builds &quot;all&quot; GNOME menus (with some
mini-icons in the system menu). You need to specify the
GNOME installation prefix if it is not /usr (with the
option --install-prefix). Moreover, the GNOME icons need to be in your
ImagePath and the non .png mini-icons you use for the user-menu
need to be in mini/ (if not, use the --png-icons-path option and
the --mini-icons-path option, respectively).
<P>


<P>


<blockquote><PRE>Module FvwmGtk
*FvwmGtk: Destroy gnome-all
*FvwmGtk: Menu gnome-all
*FvwmGtk: Title &quot;Gnome Menus&quot;
*FvwmGtk: Separator
*FvwmGtk: Destroy gnome-sys
*FvwmGtk: Submenu &quot;System&quot; gnome-sys
*FvwmGtk: Destroy gnome-user
*FvwmGtk: Submenu &quot;User&quot; gnome-user
*FvwmGtk: Destroy gnome-redhat
*FvwmGtk: Submenu &quot;RedHat&quot; gnome-redhat

PipeRead 'fvwm-menu-desktop --type gtk --enable-mini-icons --icon-folder :re --icon-app :re --icon-title :re --icon-toptitle :re'

PipeRead 'fvwm-menu-desktop --type gtk --desktop gnome-user --enable-mini-icons'

PipeRead 'fvwm-menu-desktop --type gtk --desktop gnome-redhat --enable-mini-icons'

# To obtain the menu above with Alt-button1 on the root window
Mouse 1  R  M  SendToModule FvwmGtk gnome-all</PRE></blockquote>
<P>



<P>
You can specify FvwmGtk alias: Module FvwmGtk MyGnomeMenu.
In this case you must pass an additional parameter to fvwm-menu-desktop:
--fvwmgtk-alias MyGnomeMenu.
<P>
Of course you can build FVWM (i.e., no FvwmGtk) GNOME menus.
GNOME and KDE2 use PNG icons which are not supported by FVWM menu.
However, if you have XPM version of the GNOME or of the KDE2 (mini-)icons 
you can build FVWM menus and style commands with these icons using the 
option --enable-tran-mini-icons and --enable-tran-style. The
FVWM Themes package (<A HREF="http://fvwm-themes.sourceforge.net/)">http://fvwm-themes.sourceforge.net/)</A> contains
an utility, fvwm-themes-images, which can convert automatically 
(with the help of ImageMagick) all GNOME and KDE2 icons to XPM
icons.
<P>
You can build sub menus using the --dir options. However,
if you want to use more than one submenu
it is better to build the &quot;all&quot; menu and to use the submenu names.
See the option --submenu-name-prefix for information on submenu
names. Nevertheless, you may put the menu in a tmp file using
redirection to see the submenu names.
<P>
If you think that fvwm-menu-desktop slows your startup too much do
not use PipeRead.  Instead run  fvwm-menu-desktop
and 
redirect the menu to a file and Read that file in
your .fvwm2rc file.
Another possibility is to use DynamicPopupAction
(with fvwm menu), the menu (and the styles) will be built only if
you pop up the menu. The
following menu creates a &quot;kde-all&quot; menu which contains the user menu
which is built each time you pop up &quot;kde-all&quot; and contains a pop up
to the system menu which is built only the first time you pop it up.


<P>


<blockquote><PRE>AddToMenu kde-all
+ DynamicPopupAction FuncRecreateKdeAll

AddToMenu kde-sys
+ DynamicPopupAction PipeRead 'fvwm-menu-desktop \
--desktop kde-sys [options, but --destroy-type d* or n*]'

AddToFunc FuncRecreateKdeAll \
I PipeRead 'fvwm-menu-desktop \
--desktop kde-user --enable-mini-icons --name kde-all \
--destroy-type dynamic [options you like]'
+ I AddToMenu &quot;kde-all&quot; &quot;&quot; Nop
+ I AddToMenu &quot;kde-all&quot; &quot;Kde System%mini/mini-k.xpm%&quot; Popup kde-sys</PRE></blockquote>
<P>



<P>
fvwm-menu-desktop takes into account your $LANG environment variable,
which may be overwritten using the --lang option.
<P>
Hint, if you need a different menu font or item format from the ones used
in the default MenuStyle, you may use the --menus-style option to assign
a non-default MenuStyle name to menus built by this script.
Don't forget to create a new menu style in your .fvwm2rc, using CopyMenuStyle
and MenuStyle commands.
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>OPTIONS</H2>

<P>
<DL COMPACT>
<DT>Main Options<DD>
<P>
<DT><B>--help</B><DD>
Show the help and exit.
<DT><B>--version</B><DD>
Show the version and exit.
<DT><B>--install-prefix</B> <I>DIR</I><DD>
The prefix of GNOME or KDE installation. Default
is /usr for GNOME (other common prefixes: /usr/local, /opt/gnome).
For KDE the default is $KDEDIR and you probably do not need
to use this option.
<DT><B>--desktop</B> <I>NAME</I><DD>
Use gnome-sys for the GNOME system menu (this is the default),
gnome-user for
the GNOME user menu, gnome-redhat for the AnotherLevel
menu of Red Hat, kde-sys for the KDE system menu and kde-user for
the KDE user menu. It may be useful to use KDE or GNOME as a flag with
the --dir option.
<DT><B>--type</B> <I>NAME</I><DD>
If NAME is fvwm, a native FVWM menu will be built (this is
the default). If NAME is gtk, a FvwmGtk menu will be built.
<DT><B>--fvwmgtk-alias</B> <I>NAME</I><DD>
The name for then FvwmGtk module to use instead of default FvwmGtk.
<DT><B>--title</B> <I>NAME</I><DD>
Define the menu title of the top menu. Default
is &quot;Gnome System Menu&quot; for gnome-sys, &quot;Gnome User Menu&quot; for
gnome-user, &quot;Gnome Red Hat Menu&quot; for gnome-redhat. For KDE the
default is given by KDE itself (or are similar to GNOME title).
<DT><B>--name</B> <I>NAME</I><DD>
Define the menu name of the top menu. Default is the --desktop
name if you use one above.
<DT><B>--merge-user-menu</B><DD>
with the system menu (gnome-sys or kde-sys, based on the --desktop option)
and takes into account changes to the system menu that it is now
possible to do in the &quot;user directory&quot; (at least with KDE version 2
menu editor).
<P>
<P>
<DT>Icons Options<DD>
<P>
By default, fvwm-menu-desktop  builds mini-icon free menus. To enable
mini-icons use one of the two following options.
<P>
<DT><B>--enable-mini-icons</B><DD>
This option enables mini-icons in the menu.
The desktop hints are used if it is possible
(fvwm menu can't use .png icons). Use
the --mini-icons-path and the --png-icons-path to specify
the good paths. By using the --icon-* options below you
can control mini-icons in menus.
<DT><B>--enable-tran-mini-icons</B><DD>
This option applies only to fvwm menus and is useful to build GNOME or KDE2 
menus with mini-icons (and if you have XPM version of the GNOME or KDE2
PNG icons).
If this option is used any
icon hint foo.png is translated to path/foo.xpm
where path is determined by the --tran-mini-icons-path option
(xpm icons are used as with the previous option).
<DT><B>--mini-icons-path</B> <I>DIR</I><DD>
Define the directory of the .xpm mini-icons (relative to your
ImagePath). Default is &quot;mini/&quot;.
<DT><B>--png-icons-path</B> <I>DIR</I><DD>
Define the directory of .png icons. Default is &quot;&quot; (i.e., in your
ImagePath). Useful only with FvwmGtk menus.
<DT><B>--tran-mini-icons-path</B> <I>DIR</I><DD>
Define the directory of the mini-icons for the --enable-tran-mini-icons
option. Default is mini/. It is
preferable to give the complete path so that fvwm-menu-desktop can check
if the translated mini-icons exists (and the &quot;re&quot; law will apply in
a good way).
<DT><B>--check-mini-icons</B> <I>PATH</I><DD>
Where PATH is a list of directories with &quot;:&quot; as a separator. Then,
fvwm-menu-desktop checks that the mini icons actually exist in one of
these directories (this check is not done for the translated mini icons).
<BR>&nbsp;
<DT>Comments<DD>
<P>
To control  mini-icons in menus you can use the 4 following options
which work similarly.
<P>
In these options <I>law</I> may be <I>no</I>, <I>dh</I>, <I>re</I> or <I>ow</I>.
<I>no</I> means &quot;do not use mini-icon&quot; (this does not affect side pic).
<I>dh</I> means &quot;use only the mini-icons GNOME/KDE hints&quot;.
<I>re</I> means &quot;use mini-icons GNOME/KDE hints but if it is empty
use the specified mini-icon&quot;.
<I>ow</I> means &quot;override the mini-icons GNOME/KDE hints by the specified
mini-icon&quot;.
<P>
The path to the specified icons is given by the
options --mini-icons-path, --png-icons-path
or --tran-mini-icons-path (i.e., you just have to
specify the icon, the path is computed). For the sidepic you need to
give the complete relative path from your ImagePath.
<P>
Note that for the FVWM menu (without the --enable-tran-mini-icons option)
a .png icon hint is
considered as an empty hint, so for the system menu use no=dh and re=ow
(you may use .xpm icons in a user menu). If
the --tran-mini-icons-path option is set with a complete path,
then if the .xpm icon which corresponds  to a .png icon hint
does not exist, the icon hint is considered as empty.
<P>
<P>
<I>place</I>, <I>sidepic</I> and <I>color</I>
apply only with fvwm menus. <I>place</I> is either left or up.
<I>left</I> means that the icon will be placed on the left of the
label. <I>up</I> means that the icon will be placed above the label.
<I>sidepic</I> needs to be nothing or an icon (for a picture in the
bottom left of the menu). <I>color</I> applies only
if a sidepic icon is given and it is the color for the region of the menu
containing the sidepic picture.
<P>
When you use an option below, if an icon, a law ...etc is not
specified (i.e., empty) the default is used (e.g, if you want,
for an FVWM menu, the icon folder.xpm on the left of the top title
and the sidepic fvwm2.xpm on the left of this menu
use the following: --icon-toptitle :ow::fvwm2.xpm).
<P>
<DT><B>--icon-toptitle</B> <I>micon</I>:<I>law</I>:<I>place</I>:<I>sidepic</I>:<I>color</I><DD>
Mini-icon for the top title and sidepic for the top menu.
Default for fvwm menus: folder.xpm:no:left::.
Default for fvwm menus with --enable-tran-mini-icons:
gnome-logo-icon-transparent.xpm:no:left:.
Default for gtk menus:
gnome-logo-icon-transparent.png:no.
<DT><B>--icon-title</B> <I>micon</I>:<I>law</I>:<I>place</I>:<I>sidepic</I>:<I>color</I><DD>
Use the option below for submenus.
Default for fvwm menus: folder.xpm:dh:left::.
Default for fvwm menus with --enable-tran-mini-icons:
gnome-folder.xpm:dh:left::.
Default for gtk menus: gnome-folder.png:dh
<DT><B>--icon-folder</B><DD>
<I>micon</I>:<I>law</I>:<I>place</I>:<I>sidepic</I>:<I>color</I>&quot;
Mini-icons for pop up item.
Default for fvwm menus: folder.xpm:dh:left.
Default for fvwm menus with --enable-tran-mini-icons: gnome-folder.xpm:dh:left.
Default for gtk menus: gnome-folder.png:dh.
<DT><B>--icon-app</B> <I>micon</I>:<I>law</I>:<I>place</I><DD>
Mini-icon for applications item.
Default for fvwm menus: mini-x.xpm:dh.
Default for fvwm menus
with --enable-tran-mini-icons: gnome-default.xpm:dh.
Default for gtk menus: gnome-default.png:dh
<P>
<DT><B>--wm-icons</B><DD>
This is a shortcut, which can be used if you plan to use icons from the
wm-icons package. Currently this is equivalent to:
--enable-mini-icons
--mini-icons-path ''
--icon-toptitle menu/folder-open.xpm:ow
--icon-title menu/folder-open.xpm:ow
--icon-folder menu/folder.xpm:ow
--icon-app menu/utility.xpm:ow.
<P>
<DT>Style Options<DD>
<P>
<DT><B>--enable-style</B> <I>mini-icon</I>:<I>icon</I>:<I>law</I>:<I>addstyle</I><DD>
Build icons and mini-icons style commands for the applications in the built
menu.
<DT><B>--style-tran</B><DD>
Only useful with FvwmGtk GNOME or KDE2 menus. Make translation as the
enable-tran-mini-icon option but only for style
(not for mini-icons menus).
<DT><B>--icon-style</B> <I>mini-icon</I>:<I>icon</I>:<I>law</I>:<I>addstyle</I><DD>
This option
is  similar to the options --icon-* above. Default law is &quot;dh&quot;
(there is no &quot;no&quot; law).
Default mini-icon is mini-x.xpm and default icon
is x.xpm. You can add a style to all applications with
addstyle. If you use the enable-tran-mini-icon options the translated
(mini-)icons will be used (if translation is needed)
and the default icons are gnome-default.xpm.
If you use the --enable-tran-style options above the default icons
are gnome-default.xpm.
The paths to mini-icons are the same as those for the menus. The
path to the icons is computed from the mini-icons path: they are one
directory up to the corresponding mini-icons path (so the &quot;defaults&quot;
are &quot;&quot; and this is consistent with KDE1 and XPM icons builded by 
fvwm-themes-images).
<DT><B>--icons-path</B> <I>DIR</I><DD>
Not useful in a normal situation.
Define the directory of the icons. Default is one directory up from
the path given by the --mini-icons-path option. To set the path to &quot;&quot;
you need to use &quot;inpath&quot;.
<DT><B>--tran-icons-path</B> <I>DIR</I><DD>
Similar to the above option.
<DT><B>--check-icons</B> <I>PATH</I><DD>
Where PATH is a list of directories with &quot;:&quot; as a separator. Then,
fvwm-menu-desktop checks that the icons actually exist in one of
these directories (this chack is not done for the translated icons, use a
full path in --tran-icons-path to do so).
<P>
<DT>Other Options<DD>
<P>
<DT><B>--submenu-name-prefix</B> <I>NAME</I><DD>
May be useful in some unfortunate cases. By default the name of a sub menu
is of the form prefix-adirname-level where prefix is the desktop
flag, adirname is the name of the directory of the description of the
sub menus (not a complete path) and where level is an integer equal to
the number of &quot;cd&quot;s you need to do to go from the root to the directory of the
description of the sub menus. You may change the prefix using the
present option.
<DT><B>--dir</B> <I>DIR</I><DD>
Set the directory where fvwm-menu-desktop
looks for a GNOME/KDE menu description to <I>DIR</I>.
The name of the menu is 'desktop-name' and the title is 'desktop' name
where 'desktop' is either GNOME or
KDE (if fvwm-menu-desktop can't find which desktop is concerned, you can
help with the --desktop option) and where 'name' is the name of the
right directory of <I>DIR</I> (or a hint of the desktop for the title).
Note that if this option is not set, the description directory is
install-prefix/share/gnome/apps if --desktop is gnome-sys,
$HOME/.gnome/apps  if --desktop is gnome-user,
$HOME/.gnome/apps-redhat  if --desktop is gnome-redhat,
$KDEDIR/share/applink if --desktop is kde-sys and
$HOME/.kde/share/applnk if--desktop is sys-user.
<DT><B>--destroy-type</B> <I>flag</I><DD>
flag may be &quot;y(es)&quot;, &quot;no&quot;, &quot;d(ynamic)&quot;. Default is &quot;yes&quot; with FVWM menus,
&quot;no&quot; with FvwmGtk menus and dynamic applies only with FVWM menus.
If &quot;yes&quot; is used the top menu will be destroyed (DestroyMenu &quot;name&quot;),
if &quot;no&quot; is used the top menu will not be destroyed (useful for FvwmGtk
menus called by another menu via FvwmGtkSubMenu or to give the same
name to two or more menus built by fvwm-menu-desktop). If dynamic
is used the menu will be destroyed/recreated (may be useful with
DynamicPopupAction). Note that all the built sub menus are always
destroyed.
<DT><B>--xterm</B> <I>CMD</I><DD>
Define complete X terminal command to run applications in it if needed.
Default is 'xterm -e'.
<DT><B>--lang</B> <I>NAME</I><DD>
Default is the value of $LANG. Useful if your language is not GNOME/KDE
compliant and you prefer a non-English compliant
language. Also useful if fvwm-menu-desktop gives bad result with your language.
<DT><B>--utf8</B><DD>
Assume that the desktop entries used UTF-8 encoding. This is the case
with KDE version 2 and will be probably the case with GNOME version 2.
At the present time this option work only if you have perl version 5.6 
or better and if your language use latin-1 font. If one of these conditions
is not satisfied, then this option is equivalent to --lang en. For other
languages/charsets use the --uniconv option. The advantage of this option
as compared to the following option is that it is fast.
<DT><B>--uniconv</B> <I>charset</I><DD>
Use iconv, uniconv or internal method to translate utf8 desktop entries
into an appropriate &quot;charset&quot;. You can choose between one of the supported
tools using --uniconv-exec option. iconv comes with glibc &gt;= 2.1.1 and
uniconv comes with the utf8 editor yudit. Type &quot;iconv --list&quot; or &quot;man
uniconv&quot; for the list of supported charsets. Of course you must also use the
appropriate font using the MenuStyle command. Also, $LANG (or --lang xx)
must be compatible with the charset. Note, if you don't use an internal
method, fvwm-menu-desktop is very slow with this option: you probably need
to use the --time-limit option and you should redirect the result into a
file and read this file in your FVWM configuration.
<DT><B>--uniconv-exec</B> <I>exec</I><DD>
Where exec is either iconv or uniconv or internal. Allows to choose the
program which perform the UTF8 translation in the case of the --uniconv
option. The internal method is only available with perl 5.8.0 and better.
The default is either internal (if available) or iconv.
<DT><B>--menu-style</B> <I>name</I><DD>
By default the generated FVWM menus use the default MenuStyle (i.e., the
MenuStyle &quot;*&quot;). You can specify another MenuStyle name using this option.
<DT><B>--[no]check-app</B><DD>
Either check or don't check that applications to execute are in your path.
Default is --check-app.
<DT><B>--time-limit</B> <I>NUM</I><DD>
Change the internal limit (15 seconds) for running this script
to NUM seconds, 0 means unlimited running. This limiting may be useful
to cut mistakes with the --dir or --install-path options.
<P>
</DL>
<A NAME="lbAG">&nbsp;</A>
<H2>BUGS</H2>

This script needs more testing to see if all options work well
(note that the script does not check for inconsistency of the given options).
If Desktop menu hints are changed the script may not work as
expected. I have tested the script with gnome-core-1.0.3, kde-1.1, kde-1.2
and kde-2.0.
<P>
<A NAME="lbAH">&nbsp;</A>
<H2>AUTHORS</H2>

Olivier Chapuis &lt;<A HREF="mailto:olivier.chapuis@free.fr">olivier.chapuis@free.fr</A>&gt;
<P>
Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt; - some changes
<P>
<A NAME="lbAI">&nbsp;</A>
<H2>COPYING</H2>

The script is distributed by the same terms as FVWM itself.
See GNU General Public License for details.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">USAGE</A><DD>
<DT><A HREF="#lbAF">OPTIONS</A><DD>
<DT><A HREF="#lbAG">BUGS</A><DD>
<DT><A HREF="#lbAH">AUTHORS</A><DD>
<DT><A HREF="#lbAI">COPYING</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 00:48:09 GMT, November 01, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 01-Nov-2003 -->
