<?php
//--------------------------------------------------------------------
//-  File          : authors/index.php
//-  Project       : FVWM Home Page
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

$rel_path = "..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
if( strlen("$navigation_check") == 0 ) include_once($rel_path.'/definitions.inc'); 

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Authors";
$heading        = "FVWM - Authors";
$link_name      = "Authors";
$link_picture   = "pictures/icons/authors";
$parent_site    = "home";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "authors";

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if( strlen("$navigation_check") > 0 ) return;

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if( strlen("$site_has_been_loaded") == 0 ) {
  $site_has_been_loaded = "true";
  include_once(sec_filename("$layout_file"));
  exit();
}
?>

<?php decoration_window_start("Authors of FVWM"); ?>

<h3>Here you can see <a href="<?php echo conv_link_target('pictures/index.php'); ?>">pictures</a> of some FVWM authors</h3>


<h4 class="author">Rafal Bisingier</h4>
<p class="author">
WindowLayer and Layers options to the Maximize command. EdgeLeaveCommand
</p>

<h4 class="author">George Potapov</h4>
<p class="author">
ShowOnlyFocused option for FvwmIconMan.
</p>

<h4 class="author">Jim C. Brown</h4>
<p class="author">
MailDir option in FvwmTaskBar.
</p>

<h4 class="author">Norman Yarvin</h4>
<p class="author">
Extend conditionals to handle multiple window names.
</p>

<h4 class="author">Funda Wang</h4>
<p class="author">
Chinese translations.
</p>

<h4 class="author">Anton Kazennikov</h4>
<p class="author">
Menu navigation patch.
</p>

<h4 class="author">Johan Svedberg</h4>
<p class="author">
Swedish translations.
</p>

<h4 class="author">Andrei Mitrofanow</h4>
<p class="author">
German translations. Debian package creation procedure.
</p>

<h4 class="author">David Lazar</h4>
<p class="author">
Use font for selected buttons in Start button.
</p>

<h4 class="author">Scott Smedley</h4>
<p class="author">
Wrote FvwmTabs module. Improved Perl module support. FakeKeyPress command. Window-specific key/mouse bindings. FvwmButtons: HoverIcon, HoverTitle, HoverColorset, PressIcon, PressTitle &amp; PressColorset options. FvwmWindowMenu: rewrote to use WindowList tracker.
</p>

<h4 class="author">Francis Litterio</h4>
<p class="author">
Fixed building FvwmScript under cygwin.  Added CenterPlacement style.
</p>

<h4 class="author">David Fries</h4>
<p class="author">
Fixed the GNOME1 patch. WindowList class name sorting.
</p>

<h4 class="author">Nadim Shaikli</h4>
<p class="author">
Added joining and shaping in bi-directional languages that need this; Arabic translations.
</p>

<h4 class="author">Richard Lister</h4>
<p class="author">
New module FvwmWindowMenu.
</p>

<h4 class="author">Marcus Lundblad</h4>
<p class="author">
Vector button offsets patch. New styles restricting window operations (Close,Maximize,Iconify). Implemented support for combining charaters.
</p>

<h4 class="author">Jason Weber</h4>
<p class="author">
FvwmProxy module.
</p>

<h4 class="author">Cameron Simpson</h4>
<p class="author">
Documentation fixes.
</p>

<h4 class="author">Ben Winslow</h4>
<p class="author">
Fixed a core dump.
</p>

<h4 class="author">Ben Mathews</h4>
<p class="author">
Modified FvwmTaskBar to allow shortcut buttons in the taskbar
</p>

<h4 class="author">David Fries</h4>
<p class="author">
WindowList option SortClassName.
</p>

<h4 class="author">Anders Andersson</h4>
<p class="author">
Spelling fixes in all man pages.
</p>

<h4 class="author">Steve Talley</h4>
<p class="author">
Style option IconSize.
</p>

<h4 class="author">Maxim F. Ischenko</h4>
<p class="author">
Original patch for MaxLabelWidth option in WindowList command.
</p>

<h4 class="author">Jan Echternach</h4>
<p class="author">
TMPDIR security patch.
</p>

<h4 class="author">Stian Sletner</h4>
<p class="author">
WindowList option IconifiedAtEnd.
</p>

<h4 class="author">Derek B. Noonburg</h4>
<p class="author">
Weighted sorting in FvwmIconMan.
</p>

<h4 class="author">Jochen Klenner</h4>
<p class="author">
WindowList option CurrentAtEnd.
</p>

<h4 class="author">Uwe Pross</h4>
<p class="author">
EdgeCommand.
</p>

<h4 class="author">Dave Trollope</h4>
<p class="author">
Memory management clean up patches.
</p>

<h4 class="author">Daniel Henninger</h4>
<p class="author">
Timeout feature in FvwmForm.
</p>

<h4 class="author">Suzanne Skinner</h4>
<p class="author">
Multi-pixmap titlebars patch.
</p>

<h4 class="author">Lorenz Minder</h4>
<p class="author">
Patches for fvwm-setup95 and safestrdup.
</p>

<h4 class="author">Johannes Zellner</h4>
<p class="author">
StrokeWidth option for StrokeFunc.
</p>

<h4 class="author">Darren Stuart Embry</h4>
<p class="author">
ActiveColorset uses colour set supplied hilight and shadow colours.
</p>

<h4 class="author">Neil Bird</h4>
<p class="author">
Add $c, $r, $n variables for Functions. Add Next/Prev conditions to WindowId and WindowList. Attempted fix of OLDecor hints use for decorations. Add DestroyStyle command.
</p>

<h4 class="author">Alan F. Ho</h4>
<p class="author">
fvwm-logo-colorful.xpm, a prototype of a current default FvwmBanner logo.
</p>

<h4 class="author">Olivier Chapuis</h4>
<p class="author">
Rewrote fonts loading and text rendering with locale, Xft, rotation, encoding and shadow support.  Rewrote image loading and added PNG support with alpha blending.  Added XRender support with full emulation if not present.  Added XShm support for faster XImage manipulation.  Added EWMH support (with a lot of new styles and commands) for KDE and GNOME.  Added Gettext support and (LocalePath command and $[gt.str] variable).  Some French translation.  Rewrote the color limit code and added dithering for screen with a depth &lt; 24. Colorset support in BorderStyle, TitleStyle and ButtonsStyle and MultiPixmap. Solid option of MultiPixmap. Merge MultiPixmap code and regular title bar drawing code.  AdjustedPixmap, StretchedPixmap and ShrunkPixmap options for the decorations commands. MinHeight option to TitleStyle. UseTitleDecorRotation Style.  Colorset Improvement: lot of works with the Transparent option, new options RootTransparent, Tint, fgTint, bgTint, Alpha, fgAlpha, Dither, NoDither, IconTint, IconAlpha, fgsh. Bitmap support in Colorset.  BorderColorset, HilightBorderColorset, IconBackgroundColorset, IconTitleColorset, HilightIconTitleColorset, IconTitleRelief, IconBackgroundRelief and IconBackgroundPadding Styles.  MinOverlapPercentPlacement, PlacementOverlapPenalties and PlacementOverlapPercentPenalties Styles. Indexed{Window,Icon}Name Styles.  Adjusted, Stretched, Shrunk option to IconSize style.  layer flags to the Maximize command.  DesktopName command with variables $[desk.name&lt;n&gt;] and dynamic update for FvwmPager.  layer flags to the Maximize command.  OnlySkipList, NoDeskNum, NoCurrentDeskTitle, TitleForAllDesks, NoNumInDeskTitle options to WindowList.  CopyMenuStyle, BusyCursor, EscapeFunc and PrintInfo commands.  StrokeFunc command and some works on the STROKE patch.  PlacedByFvwm condition. libs: setSyncMask to define the messages on which a module is lock on send (not my idea); put SendFvwmPipe in the library; amelioration of SlideWindow. FvwmButtons: (No)FvwmModule Swallow option; Vastly improved redrawing with complex colorset configuration; position option for panel. FvwmBacker: RetainPixmap option.  FvwmEvent: StartDelay option. FvwmIconBox: UseSkipList options; aliases support.  FvwmIconMan: Full colorset support.  FvwmM4/Cpp: -lock and -noread options.  FvwmPager: Aliases support; some fixes.  FvwmPager: Aliases support.  FvwmScript: The Default configuration options; UseGettext and WindowLocaleTitle head instruction; LocaleTitle widget instruction; NoFocus and Left, Center, and Right flags option for text position; Key and ChangeLocaleTitle instructions; GetPid, Parse, SendMsgAndGet, LastString and Gettext functions; SendToModule ScriptName SendString command; rewrite some scripts examples and new script examples. FvwmScroll: p option for a percentage reduction.  FvwmTaskBar: Focus, Rows, 3DFvwm, NoIconAction options, take in account the real border width for geometry computation, AutoHide amelioration; aliases support.  FvwmWinList: geometries fixes; aliases support. utile: fvwm-menu-desktop script for GNOME and KDE desktop menus.  fvwm-root improvement (root properties). Bugfixes!
</p>

<h4 class="author">Mikhael Goikhman</h4>
<p class="author">
Parsing Restart command, Session*Function and StartFunction special functions, {Save|Quit}Session commands, some work on restart logic and session stuff, FormFvwmRootCursor, creating fvwm-menu-* scripts, FvwmWharf improvements, new FvwmBacker syntax, new default FvwmBanner logo, updates to envvar lib, FVWM_DATADIR/FVWM_USERDIR changes, fvwm-config script, some work on configure, module alias support in KillModule &amp; SendToModule, many small fixes.
</p>

<h4 class="author">Matthias Clasen</h4>
<p class="author">
Session management, layered stacking order, maximized shaded windows, FvwmGtk module, colored and xpm cursors.
</p>

<h4 class="author">Nagi Aboulenein</h4>
<p class="author">
Original idea for 'previous page' parameter (MoveToPage and GotoPage).
</p>

<h4 class="author">Dan Espen</h4>
<p class="author">
Color Limiting, Multiple IconBoxes, Iconification Animation, new 3d hilight/shadow calc from scwm as a library routine, updated web docs, lots of improvements in FvwmForm, replacement of FvwmTalk with FvwmForm, fvwm setup form.
</p>

<h4 class="author">Tony Finch</h4>
<p class="author">
Original patch for opaque resizing for 2.2.
</p>

<h4 class="author">Will French</h4>
<p class="author">
$d, $x and $y macros for functions.
</p>

<h4 class="author">Julian Gilbey</h4>
<p class="author">
Fixes in the fvwmrc_convert script.
</p>

<h4 class="author">German Gomez Garcia</h4>
<p class="author">
Implemented new menu style definition, allowing multiple definitios and gradients and pixmaps 'ala' ButtonStyle. See doc/README.styles for more info.
</p>

<h4 class="author">Udo Grabowski</h4>
<p class="author">
Private colormaps on subwindows.
</p>

<h4 class="author">Mike Han</h4>
<p class="author">
Multiple menu hotkeys. Automatic menu hotkeys. Reverse-resolution for FvwmIconMan. Multiple FvwmIconMan invocations. FvwmBacker per-page hacks (only usable after lots of fixes by others). Finally killed FvwmAudio. Finished off GSFR in modules.
</p>

<h4 class="author">Albrecht Kadlec</h4>
<p class="author">
Code &amp; manual cleanups, enhancements, Fixes and module-library which partially made it into fvwm-2.0.42-47d. Rewrite &amp; cleanup of FvwmAuto &amp; FvwmAudio. Created FvwmEvent to supersede FvwmAudio (&amp; FvwmAuto).
</p>

<h4 class="author">Andrew Morton</h4>
<p class="author">
MoveThreshold command.
</p>

<h4 class="author">Robert Nation</h4>
<p class="author">
The original author of fvwm.
</p>

<h4 class="author">Tomas Ogren</h4>
<p class="author">
Animated windowshading, &quot;adaptive maximize&quot;, various bugfixes.
</p>

<h4 class="author">Jay Painter</h4>
<p class="author">
Gnome support (thanks, Jay!).
</p>

<h4 class="author">Chetan Patil</h4>
<p class="author">
Patch fix MoveToPage command without arguments.
</p>

<h4 class="author">Mark Rainford</h4>
<p class="author">
Handling of transient windows in Raise/Lower: reasonable emulation of Motif group behaviour is now possible. $v variable in fvwm commands.
</p>

<h4 class="author">Chris Rankin</h4>
<p class="author">
Rework of signal handlers (fvwm, FvwmButtons, FvwmIconMan, FvwmPager and FvwmEvent).
</p>

<h4 class="author">Steven M. Robbins</h4>
<p class="author">
Autoconf &amp; automake support, configuration &amp; portability improvements, and general code gadfly a la Paul Smith.
</p>

<h4 class="author">Chris Ross</h4>
<p class="author">
Addition of ReliefThickness feature to FvwmIconMan. Solaris Xinerama support.
</p>

<h4 class="author">Paul D. Smith</h4>
<p class="author">
Purify support (heap rot, array overwrites, memory stompage of all sorts). Some autoconf/automake/portability help.  Initial cut at a generic debugging API.  Rework module interface API on fvwm's side. General code gadfly: tiptoe in; change some code; run away, run away!
</p>

<h4 class="author">Benoit Triquet</h4>
<p class="author">
Original idea and some code for IgnoreModifiers command.
</p>

<h4 class="author">Fabien Villard</h4>
<p class="author">
OpenVMS port.
</p>

<h4 class="author">Dominik Vogt</h4>
<p class="author">
Improved ShuffleButtons algorithm (FvwmButtons), button geometries (FvwmButtons), Menu Position Hints, XResources.c, various move/resize and menu enhancements, MoveToPage, MoveToDesk, various parsing functions, COPYING file, a myriad of bugfixes, Rewrite of MenuStyle syntax, Silent command, GSFR preparations, various enhancements and bugfixes for FvwmButtons, FvwmPager and FvwmTaskBar, split function and menu code, FAQ rewrite, rewrite of toggling function syntax (with hints from Matthias Claasen), IgnoreModifiers command, enhancements of GotoPage and MoveToPage syntax, Repeat command, menu code clean up, panel enhancements (FvwmButtons), transient FvwmPager, GSFR for the main module, dynamic menus, recursive menus, rewrite of menu drawing, speed up startup with lots of menus, new menu styles BorderWidth, ItemFormat, VerticalItemSpacing, VerticalTitleSpacing, Hilight3DThickness and SubmenusLeft, major clean up of the menu code, improved transient FvwmPager, improved transient window handling, MaxWindowSize style, Improved(?) mouse paging, RaiseTransient and LowerTransient styles, nicer cursors, helped with colorset implementation, variables for FvwmButtons actions, fvwm-cats page, ported &amp;%!#?-95 like config file from fvwm95, cleanup of gradient drawing code, rewrite of opaque resize patch for 2.3.8, HideSizeWindow command, enhanced CursorStyle command, TitleAtBottom style, patches to obsolete Recapture command (styles apply immediately), new old styles BackingStore/BackingStoreOff and SaveUnder/SaveUnderOff, more WindowList enhancements, look of sticky icons, WindowList menu style, PointerKey command, several FvwmTheme options, FvwmTheme parsing, styles Font and IconFont, introduced the decor_w, smooth window shading, smooth (well, sort of) opaque resizing, many many more bugfixes. Lost motivation to continue this list.
</p>

<h4 class="author">A.J. Weber</h4>
<p class="author">
SnapAttraction patch.
</p>

<h4 class="author">Bob Woodside</h4>
<p class="author">
StartsOnPage style, Stacking Order chain, new variable module packets, GSFR for the modules.
</p>

<h4 class="author">Charles Hines</h4>
<p class="author">
Contributed some patches in the early days of fvwm.  Later took over maintenance of fvwm-2.0.x after Rob Nation, the original author of fvwm, decided to &quot;retire&quot;.  Made a fair amount of changes and fixes, and incorporated changes and fixes from numerous people all over the net.  Did this from about August of 1995 until May of 1998 when he came to the realization that he didn't have enough time to properly devote to it and decided to &quot;retire&quot; himself, handing Brady Montz the torch.  Shortly thereafter is when fvwm became &quot;ruled by committee&quot; and this previous fvwm dictator is now happy to see fvwm surviving and thriving with this new development methodology (and may even contribute again himself, someday).
</p>

<h4 class="author">Dan Astoorian</h4>
<p class="author">
Wrote extras/fvwmperl, before X11::Fvwm (available via CPAN) made it obsolete.
</p>

<h4 class="author">Greg J. Badros</h4>
<p class="author">
Substantial rewrite of fvwm-2.0.x menuing code to support arbitrary depth menus, animated menus, Win95 look, better logically-based shortcut keys, auto-splitting of long menus, check for re-used hot-keys, integrated LEFT_MENUS option.  Added primitives: animated-moves, SetEnv, fix to Echo. Improve modules: Make FvwmM4 pass args on to m4, font-related seg-fault bug fix in FvwmButtons.
</p>

<h2>Further Authors</h2>
<p class="author">
Along with a cast of thousands (well, dozens) mentioned in old
ChangeLog entries.  If you find your name below, please send an
entry in the style of the above entries, to the mailing list
<a href="mailto:fvwm-workers@fvwm.org">fvwm-workers@fvwm.org</a>.

</p>
<h4>Andrew (a.b.) Atrens</h4>
<h4>John Aughey</h4>
<h4>Graham Barr</h4>
<h4>David Barth</h4>
<h4>Mike Blatchley</h4>
<h4>Mark Boyns</h4>
<h4>Eli Burke</h4>
<h4>Martin Cartwright</h4>
<h4>Beat Christen</h4>
<h4>Frederic Cordier</h4>
<h4>Andrew Davison</h4>
<h4>Frederic Devernay</h4>
<h4>Austin Donnelly</h4>
<h4>Matthias Ettrich</h4>
<h4>Evans &amp; Sutherland Computer Corporation</h4>
<h4>Frank Fejes</h4>
<h4>Thomas Zuwei Feng</h4>
<h4>Mike Finger</h4>
<h4>Pete Forman</h4>
<h4>Patrice Fortier</h4>
<h4>Todd Fries</h4>
<h4>Larry Gensch</h4>
<h4>Romano Giannetti</h4>
<h4>Peter Gray</h4>
<h4>Kaj Groner</h4>
<h4>Eddy J. Gurney</h4>
<h4>Markus Gutschke</h4>
<h4>Georg Hager</h4>
<h4>John Heidemann</h4>
<h4>Paul Hudson</h4>
<h4>Sverre H. Huseby</h4>
<h4>Toshi Isogai</h4>
<h4>Jesper James</h4>
<h4>Thimo Jansen</h4>
<h4>Michael A. Kazda</h4>
<h4>Jonathan Kelley</h4>
<h4>Andreas Klemm</h4>
<h4>Alfredo Kengi Kojima</h4>
<h4>Chris Laas</h4>
<h4>Tom LaStrange</h4>
<h4>Ric Lister</h4>
<h4>David MacKenzie</h4>
<h4>Don Mahurin</h4>
<h4>Pekka Marjola</h4>
<h4>Anthony Martin</h4>
<h4>Christophe Martin</h4>
<h4>Makoto Matushita</h4>
<h4>Grant McDorman</h4>
<h4>Henry R. McTague</h4>
<h4>Roman Mitnitski</h4>
<h4>Brady Montz</h4>
<h4>Ludvig A. Norin</h4>
<h4>Bill Oswald</h4>
<h4>Carsten Paeth</h4>
<h4>Hector Peraza</h4>
<h4>Per Persson</h4>
<h4>Trent Piepho</h4>
<h4>Pekka Pietik{inen</h4>
<h4>Mark Powell</h4>
<h4>Randy Ray</h4>
<h4>William E. Roadcap</h4>
<h4>Frank Scheelen</h4>
<h4>Eric Schott</h4>
<h4>Mark Scott</h4>
<h4>Cameron Simpson</h4>
<h4>Kit Smithers</h4>
<h4>Nobutaka Suzuki</h4>
<h4>Szijarto Szabolcs</h4>
<h4>Andrew Taylor</h4>
<h4>Jason L. Tibbitts</h4>
<h4>Jarl Totland</h4>
<h4>Ilkka E T Tuohela</h4>
<h4>Andrew Veliath</h4>
<h4>Barry A. Warsaw</h4>
<h4>Dan Weeks</h4>
<h4>Brian Wellington</h4>
<h4>Rob Whapham</h4>
<h4>Alan Wild</h4>
<h4>Randall Winchester</h4>
<h4>Bo Yang</h4>

<?php decoration_window_end(); ?>
