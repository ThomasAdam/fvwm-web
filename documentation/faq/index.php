<?php
//--------------------------------------------------------------------
//-  File          : documentation/faq.php
//-  Project       : FVWM Home Page
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

$rel_path = "../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
if(strlen($navigation_check) == 0) include_once($rel_path."/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - FAQ";
$heading        = "FVWM - FAQ";
$link_name      = "FAQ";
$link_picture   = "pictures/icons/doc_faq";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "faq";

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if (strlen($navigation_check) > 0) return;

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if (strlen($site_has_been_loaded) == 0) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Frequently Asked Questions"); ?>

<h2>FAQ Contents</h2>
<pre style="margin-left:5%;">
<a name="toc_0."></a><a href="#0.">0.</a> <u>The</u> most frequently asked questions :)

<a name="toc_0.1"></a>     <a href="#0.1">0.1</a>  A few minutes after fvwm is started my keyboard and
          mouse bindings stop working.  What can I do?
<a name="toc_0.2"></a>     <a href="#0.2">0.2</a>  I use XMMS, but it ignores some window styles.
<a name="toc_0.3"></a>     <a href="#0.3">0.3</a>  I like transparency.  What can I do?

<a name="toc_1."></a><a href="#1.">1.</a> About Fvwm

<a name="toc_1.1"></a>     <a href="#1.1">1.1</a>  What does fvwm stand for?
<a name="toc_1.2"></a>     <a href="#1.2">1.2</a>  Where do I find the current versions of fvwm?
<a name="toc_1.3"></a>     <a href="#1.3">1.3</a>  Any WWW Sites about fvwm?
<a name="toc_1.4"></a>     <a href="#1.4">1.4</a>  Where do I ask questions about fvwm?
<a name="toc_1.5"></a>     <a href="#1.5">1.5</a>  What are the differences between fvwm 1.xx and 2.xx?
<a name="toc_1.6"></a>     <a href="#1.6">1.6</a>  What's the relative memory usage for the various window
          managers out there?
<a name="toc_1.7"></a>     <a href="#1.7">1.7</a>  Why the rename of the various files (fvwm2, .fvwm2rc,
          fvwm2.man)?
<a name="toc_1.8"></a>     <a href="#1.8">1.8</a>  When will fvwm release X.Y.Z be ready?

<a name="toc_2."></a><a href="#2.">2.</a> Installation

<a name="toc_2.1"></a>     <a href="#2.1">2.1</a>  I want to use fvwm, but I don't have root access on my
          machine.  Can I still install and run it?
<a name="toc_2.2"></a>     <a href="#2.2">2.2</a>  I'm trying to use fvwm under CDE/COSE, but encountering
          difficulties.  Any suggestions?
<a name="toc_2.3"></a>     <a href="#2.3">2.3</a>  I'm trying to compile fvwm under SunOS using cc, but the
          compiler is having lots of problems.  What gives?
<a name="toc_2.4"></a>     <a href="#2.4">2.4</a>  I want colored icons, but they won't work.  Why not?
          When I run configure, it reports &quot;no&quot; to &quot;Have XPM
          support?&quot;  How can I get XPM support?
<a name="toc_2.5"></a>     <a href="#2.5">2.5</a>  I'm a sysadmin, and if I wanted to force fvwm to read a
          system rc file and then the user's rc file, how would I
          do that?
<a name="toc_2.6"></a>     <a href="#2.6">2.6</a>  I'm a sysadmin, and if I wanted fvwm to look for all of
          its rc files in a hidden directory, say ~/.fvwm, much
          like CDE does, how could I do that?
<a name="toc_2.7"></a>     <a href="#2.7">2.7</a>  How can I use fvwm with GNOME version &lt;= 1?
<a name="toc_2.8"></a>     <a href="#2.8">2.8</a>  How can I use fvwm with GNOME version &gt;= 2 or KDE
          version &gt;= 2?

<a name="toc_3."></a><a href="#3.">3.</a> Features, Configuration, Functions &amp; Commands

<a name="toc_3.1"></a>     <a href="#3.1">3.1</a>  I use fvwm on a RedHat Linux system and can't figure out
          how to change my fvwm configuration.  I've read the fvwm
          man page but when I edit my .fvwm2rc nothing seems to
          happen.  What's going on?
<a name="toc_3.2"></a>     <a href="#3.2">3.2</a>  Is it possible to raise a window when I click into the
          window itself, not just the border?
<a name="toc_3.3"></a>     <a href="#3.3">3.3</a>  How do I get Alt-Tab behavior like another GUI?
<a name="toc_3.4"></a>     <a href="#3.4">3.4</a>  What's the difference between the Focus and FlipFocus
          commands?
<a name="toc_3.5"></a>     <a href="#3.5">3.5</a>  You can bind mouse movements to keystrokes, how about
          mouse presses?
<a name="toc_3.6"></a>     <a href="#3.6">3.6</a>  I'd like to bind a key to paste/use the current
          selection, how can I do that?
<a name="toc_3.7"></a>     <a href="#3.7">3.7</a>  Will fvwm ever support a separate colormap for each
          desktop?
<a name="toc_3.8"></a>     <a href="#3.8">3.8</a>  I really like the horizontal bars that appear on the
          title bars of sticky windows.  Can I get those on other
          windows as well?
<a name="toc_3.9"></a>     <a href="#3.9">3.9</a>  How do I set the Sun keyboard key xxxx to an fvwm
          command? Or more generally, I'm having problems defining
          key bindings for fvwm - what can I do?
<a name="toc_3.10"></a>    <a href="#3.10">3.10</a>  My .fvwmrc from version 1.xx no longer works.  What do I
          do?
<a name="toc_3.11"></a>    <a href="#3.11">3.11</a>  What happened to the fvwm 1.xx 'include' command?
<a name="toc_3.12"></a>    <a href="#3.12">3.12</a>  How do I get window titles on sub windows of ...
<a name="toc_3.13"></a>    <a href="#3.13">3.13</a>  I just upgraded to version &gt;= 2.3.2, and my
          configuration settings disappeared!  How do I get them
          back?
<a name="toc_3.14"></a>    <a href="#3.14">3.14</a>  Some applications (e.g. Eterm) don't use the icon I
          defined for them. Why?
<a name="toc_3.15"></a>    <a href="#3.15">3.15</a>  I don't like the gaps in my icon box when I de-iconify
          an application.  Is there some kind of auto arrange
          function?
<a name="toc_3.16"></a>    <a href="#3.16">3.16</a>  How do I set up an fvwm menu item that shuts down my
          Linux machine?
<a name="toc_3.17"></a>    <a href="#3.17">3.17</a>  Although the Recapture command is obsolete, do I still
          need it to apply certain style changes?
<a name="toc_3.18"></a>    <a href="#3.18">3.18</a>  When my specific window (or all windows) pops up, I want
          it to get focus/be moved/be resized/be closed/be
          shaded...  How?
<a name="toc_3.19"></a>    <a href="#3.19">3.19</a>  When my specific window (or all windows) is closed, I
          want to switch desks/wrap to my app X/popup a menu/start
          app X...  How?
<a name="toc_3.20"></a>    <a href="#3.20">3.20</a>  I have a multi head setup (multiple screens used under
          X).  How can I tell fvwm to use different configurations
          for the screens?
<a name="toc_3.21"></a>    <a href="#3.21">3.21</a>  How do I maximize a window but not cover up FvwmTaskBar?
<a name="toc_3.22"></a>    <a href="#3.22">3.22</a>  Why my close button looks pressed in maximized windows?
          Why don't buttons show on the titlebar of some windows?
<a name="toc_3.23"></a>    <a href="#3.23">3.23</a>  How to define transparent menus?
<a name="toc_3.24"></a>    <a href="#3.24">3.24</a>  How to define transparent modules?
<a name="toc_3.25"></a>    <a href="#3.25">3.25</a>  How to define transparent decorations?
<a name="toc_3.26"></a>    <a href="#3.26">3.26</a>  How about transparent applications too?
<a name="toc_3.27"></a>    <a href="#3.27">3.27</a>  How can I define emacs type multi-keystroke fvwm bindings?
<a name="toc_3.28"></a>    <a href="#3.28">3.28</a>  How do I remove all decorations from a window?
<a name="toc_3.29"></a>    <a href="#3.29">3.29</a>  What's the best way to make on-the-fly config changes?
<a name="toc_3.30"></a>    <a href="#3.30">3.30</a>  How can I toggle a window's layer?

<a name="toc_4."></a><a href="#4.">4.</a> Modules

<a name="toc_4.1"></a>     <a href="#4.1">4.1</a>  I'm using FvwmButtons (or GoodStuff in 1.xx), and
          sometimes the buttons stay depressed, and other times
          they don't.  Why is that?
<a name="toc_4.2"></a>     <a href="#4.2">4.2</a>  When having FvwmButtons swallow an app, is it possible
          to have button presses assigned to actions as well?  For
          instance, I'd like to swallow xload and have a button
          press pop up an xterm, or swallow xbiff and have a
          button press bring up the list of messages.
<a name="toc_4.3"></a>     <a href="#4.3">4.3</a>  I'm seeing odd things when trying to preprocess files
          with the FvwmM4/Cpp module...
<a name="toc_4.4"></a>     <a href="#4.4">4.4</a>  I heard about this FvwmFileMgr module.  Where can I find
          it?
<a name="toc_4.5"></a>     <a href="#4.5">4.5</a>  I used to use GoodStuff in fvwm 1.xx, but it's not in
          the 2.xx distribution.  What do I use now?
<a name="toc_4.6"></a>     <a href="#4.6">4.6</a>  I want to have the sub panels in FvwmButtons not at
          their default position near the button but somewhere
          else on the screen.  Is this possible?
<a name="toc_4.7"></a>     <a href="#4.7">4.7</a>  How can I open a sub panel or push buttons in
          FvwmButtons with a keyboard shortcut?

<a name="toc_5."></a><a href="#5.">5.</a> Development, Known Problems &amp; Bug Reports

<a name="toc_5.1"></a>     <a href="#5.1">5.1</a>  I'd really like to see neat feature XYZ in
          fvwm. Wouldn't that be cool?  I even have a patch.  When
          can it be added?
<a name="toc_5.2"></a>     <a href="#5.2">5.2</a>  How do I create/submit/apply patches?
<a name="toc_5.3"></a>     <a href="#5.3">5.3</a>  How do I submit a bug report?
<a name="toc_5.4"></a>     <a href="#5.4">5.4</a>  I have a window that is behaving unexpectedly under
          fvwm, but just fine under (whatever other window
          manager), or I have just some random bug.  What do I do?
<a name="toc_5.5"></a>     <a href="#5.5">5.5</a>  Why do NumLock, CapsLock and ScrollLock interfere with
          ClickToFocus and/or my mouse bindings?
<a name="toc_5.6"></a>     <a href="#5.6">5.6</a>  Menus with gradient backgrounds flicker or are very
          slow.
<a name="toc_5.7"></a>     <a href="#5.7">5.7</a>  Why won't the StartIconic style work with {Netscape,
          etc.}?
<a name="toc_5.8"></a>     <a href="#5.8">5.8</a>  How do I capture the output (e.g. errors) of fvwm?
<a name="toc_5.9"></a>     <a href="#5.9">5.9</a>  I try to run some program under fvwm, but it dies with
          an X11 error like BadAccess.  The same program works
          just fine under MWM or OLWM.  What's going on?
<a name="toc_5.10"></a>    <a href="#5.10">5.10</a>  Every time I update my install, my currently running
          fvwm session dies.  Why is that?
<a name="toc_5.11"></a>    <a href="#5.11">5.11</a>  After I restart fvwm certain windows or icons raise
          above all other windows and cannot be lowered by any
          means.  One example are the shortcuts of KFM (the KDE
          file manager).  What can I do about that?
<a name="toc_5.12"></a>    <a href="#5.12">5.12</a>  The StartsOnPage style does not work for me.  Why?
<a name="toc_5.13"></a>    <a href="#5.13">5.13</a>  Some modules can not be started when I restart fvwm.
<a name="toc_5.14"></a>    <a href="#5.14">5.14</a>  I'm running Rational Rose and fvwm ignores its windows.
<a name="toc_5.15"></a>    <a href="#5.15">5.15</a>  Although I use the WindowListSkip style for my modules
          they still show up in FvwmIconMan, FvwmWinList etc.
<a name="toc_5.16"></a>    <a href="#5.16">5.16</a>  When I Maximize an application, sometimes I get gaps
          around the edges, and other times I don't.  What's going
          on?

<a name="toc_6."></a><a href="#6.">6.</a> Miscellaneous

<a name="toc_6.1"></a>     <a href="#6.1">6.1</a>  What exactly is the difference between a DESK, a PAGE,
          and the SCREEN?
<a name="toc_6.2"></a>     <a href="#6.2">6.2</a>  I'd really like {NeXT, Win95, etc} look and feel.  Are
          you going to support that?
<a name="toc_6.3"></a>     <a href="#6.3">6.3</a>  Where can I get more XPMs for icons?
<a name="toc_6.4"></a>     <a href="#6.4">6.4</a>  Linux XF86 virtual screen size &amp; fvwm interaction...
<a name="toc_6.5"></a>     <a href="#6.5">6.5</a>  I know this question doesn't have to do with fvwm, but
          what happened to to rxvt and rclock which Rob Nation
          used to support?  Where can I find them now?
<a name="toc_6.6"></a>     <a href="#6.6">6.6</a>  How do I set the background with fvwm?
<a name="toc_6.7"></a>     <a href="#6.7">6.7</a>  When I use Fvwm, my XYZ isn't the right color.  What's
          wrong?
<a name="toc_6.8"></a>     <a href="#6.8">6.8</a>  I just got a mouse with 57 buttons.  How do I make Fvwm
          use them?
<a name="toc_6.9"></a>     <a href="#6.9">6.9</a>  Why does fvwm change my X Cursor theme?

<a name="toc_7."></a><a href="#7.">7.</a> Hints and Examples from the Developers

<a name="toc_7.1"></a>     <a href="#7.1">7.1</a>  An easy way to test new configurations.
<a name="toc_7.2"></a>     <a href="#7.2">7.2</a>  Using shell commands for configuration.
<a name="toc_7.3"></a>     <a href="#7.3">7.3</a>  How to start applications on a page or desk other than
          the current.
<a name="toc_7.4"></a>     <a href="#7.4">7.4</a>  How to start applications on a page or desk other than
          the current without moving the viewport to the new page
          or desk.
<a name="toc_7.5"></a>     <a href="#7.5">7.5</a>  A more efficient MWM menu style.
<a name="toc_7.6"></a>     <a href="#7.6">7.6</a>  Placing menus on the screen.
<a name="toc_7.7"></a>     <a href="#7.7">7.7</a>  Are you flipping pages by accident when moving the mouse
          close to the border of the screen?
<a name="toc_7.8"></a>     <a href="#7.8">7.8</a>  Lining up your windows and icons.
<a name="toc_7.9"></a>     <a href="#7.9">7.9</a>  Moving the mouse/focus/page with the keyboard.
<a name="toc_7.10"></a>    <a href="#7.10">7.10</a>  The cat safe desktop :-)
<a name="toc_7.11"></a>    <a href="#7.11">7.11</a>  Lowering and moving windows.
<a name="toc_7.12"></a>    <a href="#7.12">7.12</a>  Toggling windows on and off.
<a name="toc_7.13"></a>    <a href="#7.13">7.13</a>  Starting applications by clicking on an icon (also known
          as &quot;docking&quot; applications).
<a name="toc_7.14"></a>    <a href="#7.14">7.14</a>  Positioning a window using arithmetic.
<a name="toc_7.15"></a>    <a href="#7.15">7.15</a>  Hiding the mouse pointer.
<a name="toc_7.16"></a>    <a href="#7.16">7.16</a>  Finding the mouse pointer.
<a name="toc_7.17"></a>    <a href="#7.17">7.17</a>  Autohiding FvwmButtons or other windows.
<a name="toc_7.18"></a>    <a href="#7.18">7.18</a>  Using application screenshots as icon or mini icon
          thumbnails.

======================================================================
<a name="0."></a>                <a href="#toc_0.">0</a> - The most frequently asked question
======================================================================

<a name="0.1"></a><a href="#toc_0.1">0.1</a>  A few minutes after fvwm is started my keyboard and mouse
     bindings stop working.  What can I do?

A: Probably your NumLock, CapsLock or ScrollLock key is pressed.  See
   Q 5.5 for more details.

Trivia: In all my years as an fvwm developer this has been by far the
   most frequently asked question.  Whoever can solve this problem so
   that this question is never asked again will be mentioned in big
   letters on the fvwm home page :-)

----------------------------------------------------------------------

<a name="0.2"></a><a href="#toc_0.2">0.2</a>  I use XMMS, but it ignores some window styles.

A: XMMS wants to do everything by itself and overrides many
   settings of the window manager.  Check the options menu in XMMS
   and if that does not help, ask the XMMS people about it at

        <a href="http://xmms.org/">http://xmms.org/</a>

   <u>Please</u> do not ask XMMS questions on the fvwm mailing lists
   and do not report XMMS related bugs before you tried the XMMS
   mailing lists.  No offense meant, but we really have more
   important things to do than providing user support for third
   party software.

----------------------------------------------------------------------

<a name="0.3"></a><a href="#toc_0.3">0.3</a>  I like transparency.  What can I do?

A: See questions 3.23, 3.24, 3.25, 3.26 that deal with transparency.

   Also see configurations supplied in fvwm-themes package, some
   themes use transparent menus, modules and/or decorations.  E.g.:

        <a href="http://fvwm-themes.sf.net/screenshots/full/transparent.png">http://fvwm-themes.sf.net/screenshots/full/transparent.png</a>
        <a href="http://fvwm-themes.sf.net/screenshots/full/transparent.jpg">http://fvwm-themes.sf.net/screenshots/full/transparent.jpg</a>


======================================================================
<a name="1."></a>                            <a href="#toc_1.">1</a> - About Fvwm
======================================================================

<a name="1.1"></a><a href="#toc_1.1">1.1</a>  What does fvwm stand for?

A: &quot;Fill_in_the_blank_with_whatever_f_word_you_like_at_the_time
   Virtual Window Manager&quot;.  Rob Nation (the original Author of fvwm)
   doesn't really remember what the F stood for originally, so we
   have several potential answers:

     Feeble, Fabulous, Famous, Fast, Foobar, Fantastic, Flexible,
     F!@#$%, Flashy, fvwm (the GNU recursive approach), Free, Final,
     Funky, Fred's (who the heck is Fred?), Freakin', Flawed,
     Father-of-all, Feivel (the mouse from &quot;An American Tail&quot;),
     Frungy (hey, where does that come from?), Floppy, Foxy,
     Frenzied, Funny, Fumbling etc.

   Just pick your Favorite (hey, there's another one!), which will of
   course change depending on your mood and whether or not you've run
   across any bugs recently.  I prefer Fabulous or Fantastic myself,
   although I often use F!@#$% or Freakin' while debugging...

   Recently 'Feline' is becoming popular.  Perhaps this has something
   to do with the discovery that four of the six core developers have
   cats (averaging 1.17 cats)?  Miaow.

   Know what? I found another one while stroking my cats: FEEDING :-)

   Check this link:
       <a href="http://fvwm.org/fvwm-cats/">http://fvwm.org/fvwm-cats/</a>

----------------------------------------------------------------------

<a name="1.2"></a><a href="#toc_1.2">1.2</a>  Where do I find the current versions of fvwm?

A: New main distribution site (official + beta code):

                <a href="ftp://ftp.fvwm.org/pub/fvwm/">ftp://ftp.fvwm.org/pub/fvwm/</a>

   Alternate sites:

            USA:
                <a href="ftp://sunsite.unc.edu/pub/Linux/X11/window-managers/">ftp://sunsite.unc.edu/pub/Linux/X11/window-managers/</a>
                <a href="ftp://ftp.cs.columbia.edu/pub/cheah/">ftp://ftp.cs.columbia.edu/pub/cheah/</a>

            Europe:
                <a href="ftp://unix.hensa.ac.uk/pub/walnut.creek/FreeBSD/incoming/">ftp://unix.hensa.ac.uk/pub/walnut.creek/FreeBSD/incoming/</a>
                <a href="ftp://ftp.jussieu.fr/pub/X11/fvwm/">ftp://ftp.jussieu.fr/pub/X11/fvwm/</a>
                <a href="ftp://ftp.loria.fr/pub/unix/fvwm/">ftp://ftp.loria.fr/pub/unix/fvwm/</a>

   By the way, 1.24r was the last released version of the 1.xx series
   and the first official release of 2.xx is 2.2.  As of 2.2, an odd
   second digit denotes development releases and even numbers denote
   stable releases.

----------------------------------------------------------------------

<a name="1.3"></a><a href="#toc_1.3">1.3</a>  Any WWW Sites about fvwm?

A: Yup.  The official site is:

        <a href="http://www.fvwm.org/">http://www.fvwm.org/</a>

   There are links on the official site to other related fvwm sites.

----------------------------------------------------------------------

<a name="1.4"></a><a href="#toc_1.4">1.4</a>  Where do I ask questions about fvwm?

A: If your local fvwm maintainer can't help you, then try the fvwm 
   mailing list.  The fvwm discussion mailing list address is:

                           <a href="mailto:fvwm@fvwm.org">fvwm@fvwm.org</a>

   And there is an announce mailing list as well:

                       <a href="mailto:fvwm-announce@fvwm.org">fvwm-announce@fvwm.org</a>

   They are maintained by Jason Tibbitts, and are Majordomo based
   mailing lists.  To subscribe to the list, send &quot;subscribe fvwm&quot; in
   the body of a message to &lt;list&gt;-<a href="mailto:request@fvwm.org">request@fvwm.org</a>.  For example, to
   subscribe to the fvwm mailing list, send a request to
   <a href="mailto:fvwm-request@fvwm.org">fvwm-request@fvwm.org</a>.

   To unsubscribe from a list, send &quot;unsubscribe fvwm&quot; in the body
   of a message to &lt;list&gt;-<a href="mailto:request@fvwm.org">request@fvwm.org</a>.  To report problems, send
   mail to <a href="mailto:fvwm-owner@fvwm.org">fvwm-owner@fvwm.org</a>.

   Here's the list descriptions and instructions directly from Jason:

   ------------------------------------------------------------------
   (fvwm)

   Description
   -----------

   This list is for discussion relating to the fvwm window manager,
   which is intended to have a small memory footprint and a rich
   feature set, be extremely customizable and extendible and have a
   high degree of Motif MWM compatibility.  All relevant discussion
   is encouraged.  Posting of binaries or irrelevant discussion is
   strongly frowned upon.  Posting of short patches (less than 200
   lines) is acceptable, but all patches should also be sent to the
   fvwm-workers list (see Q5.2, below) for inspection and possible
   inclusion in the distribution.


   Instructions
   ------------

   To send a message to the list, mail to <a href="mailto:fvwm@fvwm.org">fvwm@fvwm.org</a>.  For help on
   dealing with the mailing list software (for getting the archives or
   other files which may be made available) send the message &quot;help&quot; to
   <a href="mailto:fvwm-request@fvwm.org">fvwm-request@fvwm.org</a>.  If you have problems with the mailing list
   itself and need to talk to a human, send mail to
   <a href="mailto:fvwm-owner@fvwm.org">fvwm-owner@fvwm.org</a>. This address is for mailing list issues only;
   reports on the fvwm software will be sent to /dev/null.

   Archives of previous messages are available; to get them send the
   above mentioned help message and investigate the &quot;index&quot; and &quot;get&quot;
   commands or ftp them from
   <a href="ftp://ftp.fvwm.org/pub/fvwm/list-archive/.">ftp://ftp.fvwm.org/pub/fvwm/list-archive/.</a>


   (fvwm-announce)

   This list is for announcements relating to the fvwm window manager,
   which is intended to have a small memory footprint and a rich
   feature set, be extremely customizable and extendible and have a
   high degree of Motif MWM compatibility.

   Replies to messages from this list are set by default to go the
   fvwm discussion list, <a href="mailto:fvwm@fvwm.org">fvwm@fvwm.org</a>.

   The current fvwm distribution is available for ftp at
   <a href="ftp://ftp.fvwm.org/pub/fvwm/">ftp://ftp.fvwm.org/pub/fvwm/</a>
   ------------------------------------------------------------------

----------------------------------------------------------------------

<a name="1.5"></a><a href="#toc_1.5">1.5</a>  What are the differences between fvwm 1.xx and 2.xx?

A: A lot.  To name a few general ones:
        - Bug fixes.  1.xx is not worked on at all any more.
        - Better rc file format.  No longer order dependent.
        - More flexible and powerful.  For example, many previously
          global options now operate on a per window group level
          instead.
        - More and better modules.
        - M4 preprocessing is no longer part of the fvwm exec, but
          rather has been moved to a module.  There is also a module
          to use cpp too.  See the FvwmM4 and FvwmCpp man pages.

   Be sure to check the NEWS file for new or changed features too.

----------------------------------------------------------------------

<a name="1.6"></a><a href="#toc_1.6">1.6</a>  What's the relative memory usage for the various window managers
     out there?

A: Here's a little table comparing some of them.  It was done on an
   AIX based IBM RS6000 model 355 using the same number of windows (3)
   and XSession to switch between the window managers, and I used
   'top' to show the values:

      SIZE   RES
      545K  652K fvwm2 (fvwm 2.0.35)
      457K  528K fvwm  (fvwm 1.24rb)
      856K  960K ctwm  (ctwm 3.2p1)
     1004K 1156K mwm   (mwm 1.2)
      543K  632K twm   (???)
      263K  328K aixwm (a simple ugly window manager included w/ aix)

   Note: This information is terribly outdated.

----------------------------------------------------------------------

<a name="1.7"></a><a href="#toc_1.7">1.7</a>  Why the rename of the various files (fvwm2, .fvwm2rc, fvwm2.man)?

A: Some people find this annoying, but it was done for several reasons:

        - so both 1.xx and 2.xx can be installed for use, in case some
          people at the same site would rather stay at 1.xx
        - the syntax of the rc files is pretty different and
          completely incompatible
        - when people ask questions, if they explicitly mention their
          .fvwm2rc file I know that they are running one of the 2.xx
          versions, since they rarely mention exactly what version
          they are running.

   Note, starting from 2.5.1, the executable fvwm2 became fvwm again.
   Also, starting from 2.5.11, the default config file is either
   personal ~/.fvwm/config or system wide $datadir/fvwm/config.
   So, we completely returned to the &quot;fvwm&quot; name.

----------------------------------------------------------------------

<a name="1.8"></a><a href="#toc_1.8">1.8</a>  When will fvwm release X.Y.Z be ready?

A: This is always a difficult question to answer.  We work on fvwm on
   a volunteer basis.  Things get done when we have the time.

   Joining the fvwm-workers mailing list might prove instructive.


======================================================================
<a name="2."></a>                           <a href="#toc_2.">2</a> - Installation
======================================================================

<a name="2.1"></a><a href="#toc_2.1">2.1</a>  I want to use fvwm, but I don't have root access on my machine.
     Can I still install and run it?

A: Very easily, using the '--prefix' flag at configure time.

   Suppose your home directory is /home/sam.  After unpacking the
   fvwm sources, do &quot;./configure --prefix=/home/sam [other options as
   needed]'.  Now, after building (&quot;make&quot;) and installing (&quot;make
   install&quot;), you will find the binaries in /home/sam/bin, the
   man pages in /home/sam/man, etc.  The modules will be in
   /home/sam/libexec, and fvwm binary will have this module path
   built in.

----------------------------------------------------------------------

<a name="2.2"></a><a href="#toc_2.2">2.2</a>  I'm trying to use fvwm under CDE/COSE, but encountering
     difficulties.  Any suggestions?

A: Sure - here's one from Graeme McCaffery:

   -----
     Finally I have found out how to run fvwm properly from CDE 8-))
     (thanks to Lars Sodergren).

     First set your home session in Dtwm.  That usually is an empty
     session, though you could have the CDE session manager remember
     what your desktop was like instead of FvwmSaveDesk etc..

     Then you have to set two resources in .Xdefaults:

       Dtsession*wmStartupCommand: /home/orion/spxgm/bin/Fvwm
       Dtsession*waitWmTimeout: 1

     In this case I run fvwm from a shell script so that library
     variables etc are set properly for everyone.  The waitWmTimeout
     tells the session manager how long to wait until it starts the
     window manager.  I've set it to 1 second.  By default it's 60
     seconds.

     Finally you have to quit with

       /usr/dt/bin/dtaction ExitSession (or whatever your path is for dtaction)

     Now you can happily use CDE programs and fvwm.
   -----

     On the other hand, here is a link to a web page that describes
     how to add multiple window managers to the CDE login menu:

        <a href="http://twirl.mcc.ac.uk/~zzassgl/wm.html">http://twirl.mcc.ac.uk/~zzassgl/wm.html</a>

----------------------------------------------------------------------

<a name="2.3"></a><a href="#toc_2.3">2.3</a>  I'm trying to compile fvwm under SunOS using cc, but the compiler
     is having lots of problems.  What gives?

A: cc under SunOS is not an ANSI C compiler.  Try using acc or gcc
   instead.

----------------------------------------------------------------------

<a name="2.4"></a><a href="#toc_2.4">2.4</a>  I want colored icons, but they won't work.  Why not?
     When I run configure, it reports &quot;no&quot; to &quot;Have XPM support?&quot;  How
     can I get XPM support?

A: Fvwm uses the XPM (X PixMap) library to provide support for colored
   and shaped icons.  XPM doesn't ship with the basic X distribution
   as provided by The Open Group or XFree86.  However, many vendors
   will bundle it as a standard component anyway.  If not, you can get
   a copy of the source from <a href="ftp://ftp.x.org/contrib/libraries/">ftp://ftp.x.org/contrib/libraries/</a> and
   build it yourself.

   If you have XPM on your system, there are a number of ways
   configure could still decide not to use it.

   First, if you've installed XPM in a non-standard place (not in the
   normal system or X11 directories--say in /opt/xpm or /usr/local or
   similar) then you need to tell configure where to look.  Use the
   --with-xpm-library and --with-xpm-includes options (see
   INSTALL.fvwm).  Typically configure will say &quot;Xpm library or header
   not found&quot; if this is the problem.

   Second, your version of XPM may be too old.  Fvwm requires XPM 3.4g
   or better.  Typically configure will say &quot;Xpm library version is
   too old!&quot; if this is the problem.  In that case, you'll need to
   install a newer version.

   Third, XPM may be mis-installed on your system.  If configure says
   &quot; Xpm library version and header file version don't match!&quot; then
   this may be the problem.  Either use the --with-xpm-library and
   --with-xpm-includes options to specify more precisely what you
   want, or try re-installing XPM.

   Last, there could be a linker error.  This is especially common on
   systems where XPM may be built as a shared library and installed in
   a non-standard directory (Solaris is a good example).  There are
   some notes about building using shared libraries in the
   INSTALL.fvwm file.

   If you can't figure it out, contact the fvwm mailing list.  Please
   be sure to provide the type of hardware and operating system you're
   using, how you invoked configure, and extract the lines dealing
   with XPM from the config.log file and include that.

----------------------------------------------------------------------

<a name="2.5"></a><a href="#toc_2.5">2.5</a>  I'm a sysadmin, and if I wanted to force fvwm to read a system rc
     file and then the user's rc file, how would I do that?

A: Well, you could probably do something like this.  Have the first
   line of everyone's ~/.fvwm/config or ~/.fvwm/.fvwm2rc files be
   'Read global.config' and have global.config reside in
   &quot;$datadir&quot;/fvwm (the value of $datadir is set on ./configure step).

----------------------------------------------------------------------

<a name="2.6"></a><a href="#toc_2.6">2.6</a>  I'm a sysadmin, and if I wanted fvwm to look for all of its rc
     files in a hidden directory, say ~/.fvwm, much like CDE does, how
     could I do that?

A: Fvwm now supports ~/.fvwm search directory by default.

   This could be probably done similarly to Q2.5 above.  The system rc
   &quot;$datadir&quot;/fvwm/config (or system.fvwm2rc) could do something like:

        Read Init      quiet
        Read Decors    quiet
        Read Styles    quiet
        Read Functions quiet
        Read Menus     quiet
        Read Keys      quiet
        Read Modules   quiet

   or whatever breakdown you deemed appropriate, and you would have
   default versions of these in &quot;$datadir&quot;/fvwm/ that it could find
   in case the user was missing one of them and you wanted to supply
   defaults.

----------------------------------------------------------------------

<a name="2.7"></a><a href="#toc_2.7">2.7</a>  How can I use fvwm with GNOME (version &lt;= 1)?

A: Since the latest fvwm versions are mostly GNOME compliant, you may
   simply run GNOME applications, like panel, gmc, gnome-terminal and
   all others with fvwm.

   The included fvwm-menu-desktop script (with a massive man page)
   will help you build fvwm menus for gnome applications.

   To ensure you run fvwm and not gnome-session, create .Xclients file
   in your home directory and put a call to fvwm in it. The file
   ~/.xinitrc can be used for the same purpose if you want to bypass
   any system-wide logic installed by your distributor or sysadmin.

   An alternative solution is to run fvwm inside of
   /usr/bin/gnome-session. After you start gnome-session (don't start
   fvwm yourself), go to the foot menu in the GNOME panel, then choose


     System menus / Settings / Desktop / Window Manager

   and create an entry for fvwm.  Fvwm supports session management.

   If you run gnome-session, SessionInitFunction and
   SessionRestartFunction are called instead of InitFunction and
   RestartFunction, see the fvwm man page.

   StartFunction, for running modules, is called as usual.


   Here are examples of the GNOME Window Manager hints support in
   fvwm:

   o If you run gnome panel inside fvwm without GNOME support, you
     can't fully use GNOME pager applets (if at all); with GNOME
     support you can correctly see pages/desks and move windows
     between them inside applets. You can also use the GNOME Tasklist
     applet and manage your windows using it.

   o If you run gmc and bind GnomeButton (see the man page), you can
     pass root clicks to a gnome application (i.e. to gmc in this
     case).

----------------------------------------------------------------------

<a name="2.8"></a><a href="#toc_2.8">2.8</a> How can I use fvwm with GNOME version &gt;= 2 or KDE version &gt;= 2?

A: Most standard applications work as any other application with
   fvwm. However, some features and special applications such as
   panels, pagers, taskbars and desktops need a special
   support. Interaction between the window manager, the desktop
   environment and applications is standardized in the Extended Window
   Manager Hints specification. fvwm supports this specification since
   the 2.5.x series (GNOME, GTK, KDE and QT since their version
   2). See the &quot;Extended Window Manager Hints&quot; section of the fvwm
   manual page and the commands and styles which start with &quot;EWMH&quot; for
   more details.

   You can use fvwm as the GNOME window manager. For this, start GNOME
   (gnome-session). The game is to replace the running window manager
   (sawfish or metacity by default) by fvwm. You may try to type &quot;fvwm
   --replace&amp;&quot; in a terminal. If this does not work kill fvwm and open
   the session properties dialog (run &quot;gnome-session-properties&amp;&quot; in a
   terminal) and change, in the second tab, the metacity (or sawfish)
   Style value from &quot;Restart&quot; to &quot;Normal&quot; (do not forget to &quot;Apply&quot;
   this change), so that gnome-session won't restart it when you kill
   it. Then, run &quot;killall metacity; sleep 1; fvwm &amp;&quot; in a
   terminal. After you have succeeded starting fvwm you just have to
   save your session (say via GNOME session logout). The next time you
   start gnome-session, fvwm will be used (and you do not need to save
   the session again at logout). Note that if you use gnome-smproxy,
   and run an FvwmButtons which swallows some applications which use
   the old session protocol these applications are restarted by
   gnome-session and FvwmButtons at session restart which can cause
   trouble.

   You can also use fvwm as the KDE window manager.  KDE is started by
   a shell script called &quot;startkde&quot;. This script starts ksmserver
   which starts the window manager (kwin by default). To start fvwm
   you should add the option &quot;-w fvwm&quot; to the ksmserver command line
   (close to the end of the script). You may copy startkde to
   startkde_fvwm somewhere in your path, edit startkde_fvwm and
   finally replace startkde by startkde_fvwm in your X startup script
   (e.g., ~/.xinitrc, ~/.Xclients or ~/.xsession). Note that ksmserver
   does not support the fvwm Restart command. You should use &quot;Restart
   fvwm&quot; for restarting fvwm. But if you do that it is a bad idea to
   save the session later.

======================================================================
<a name="3."></a>          <a href="#toc_3.">3</a> - Features, Configuration, Functions &amp; Commands
======================================================================

<a name="3.1"></a><a href="#toc_3.1">3.1</a>  I use fvwm on a RedHat Linux system and can't figure out how to
     change my fvwm configuration.  I've read the fvwm man page but
     when I edit my .fvwm2rc nothing seems to happen.  What's going
     on?

A: RedHat Linux installs the X server accompanied (by default) by a
   configuration management system.  In earlier releases it was called
   TheNextLevel and in more recent releases it's called
   AnotherLevel. For further information about TheNextLevel, consult
   RedHat's documentation in /usr/doc/TheNextLevel/.  For information
   about AnotherLevel, do a 'man AnotherLevel'.

----------------------------------------------------------------------

<a name="3.2"></a><a href="#toc_3.2">3.2</a>  Is it possible to raise a window when I click into the window
     itself, not just the border?

A: Any version later than 2.0.46 (i.e. 2.1.0 or later) has this
   feature.  In the 2.2.x series, use:

     GlobalOpts MouseFocusClickRaises

With the later 2.3.x betas and after use:

     Style * MouseFocusClickRaises

----------------------------------------------------------------------

<a name="3.3"></a><a href="#toc_3.3">3.3</a>  How do I get Alt-Tab behavior like another GUI?

A: The built in command WindowList provides a very close approximation
   to the Alt-Tab feature found in another GUI.  It doesn't look the
   same but the following fvwm/config sample will provide a similar
   interface:

      Key Tab A M WindowList Root c c NoDeskSort

   Starting with release 2.3.2, the above key binding is built-in.

   Starting with release 2.3.15 you can hold the alt key down and keep
   hitting tab.  A single alt-tab selects the previous window. The
   remainder of this FAQ entry describes releases prior to 2.3.2.

   Hitting Alt-Tab will pop up the WindowList menu.  Unlike another
   GUI you should not keep the Alt key held down, the menu will stay
   up until you hit Return/Enter/Space or Escape.  You can change
   focus to a window on the menu by using the up and down arrow keys
   to move the menu selection and then hitting Return or
   Enter. Hitting Escape will close the menu without doing anything.
   The WindowList menu has hot keys assigned for the first 26 windows
   and you can use the hot key to go directly to the window.

   The menu invoked with the above line will show all windows in most
   recently focused order unless you have used the Focus command (see
   Q3.4).  It shows each windows name and geometry with some extra
   flags to indicate Sticky, OnTop and iconified windows.

   A simpler style can be used with the following:

      Key Tab A M WindowList Root c c CurrentDesk, NoGeometry

   This will just list the windows on the current desk (titles only).

   The other GUI has the feature of selecting the previous window if
   Alt-TAB is hit and released quickly.  This behavior can be exactly
   duplicated with 2.5.1 or later but not with earlier fvwm versions.

     Key Tab A M WindowList Root c c \
       CurrentDesk, NoGeometry, CurrentAtEnd, IconifiedAtEnd

   Similar functionality can be assigned to hitting Alt-TAB twice in
   quick succession (like a double click for keys):

     DestroyFunc my_dbltab2
     AddToFunc   my_dbltab2
     + I WindowListFunc

     DestroyFunc my_dbltab
     AddToFunc   my_dbltab
     + I Prev (CurrentDesk) my_dbltab2

     Key Tab A M WindowList Root c c \
       CurrentDesk, NoGeometry my_dbltab

   There are a lot of options to the WindowList command to control
   which windows are listed in which order and it may not be possible
   to set conditions for the Prev command to reliably select the
   second item when double keying.  The WindowList command has no
   parallel for CurrentPage, Transient, Visible, Maximized, Raised,
   and pattern matching.  The Prev conditions have no parallel for
   OnTop, Alphabetic and desk sorting.  The WindowList menu respects
   the WindowListSkip style attribute whereas Prev respects the
   CirculateSkip and CirculateSkipIcon style attributes.

----------------------------------------------------------------------

<a name="3.4"></a><a href="#toc_3.4">3.4</a>  What's the difference between the Focus and FlipFocus commands?

A: Both of these commands change the keyboard focus to the target
   window.  They differ only in the way they affect the internally
   held list of windows.  This list is used by the Next, Prev and
   WindowList commands.  The list is normally sorted in most recently
   focused order with new windows being added to the end.  The
   FlipFocus command plucks the target window from the list and
   inserts it at the beginning, The Focus command rotates the list
   around until the target window is at the beginning.  The behavior
   of FlipFocus is also used when changing focus with the mouse and
   the automatic focus changing when using ClickToFocus style.

   If you never use the Focus command the list will remain in most
   recently focused order.  If you do use the Focus command the list
   will gradually get back to most recently focused order as you use
   FlipFocus.

   The Focus command is very useful in conjunction with the Next and
   Prev commands.  e.g.

      Key KP_Add A M Next (AcceptsFocus, CurrentDesk, !Iconic) Focus
      Key KP_Subtract A M Prev (AcceptsFocus, CurrentDesk, !Iconic) Focus

   Or for fvwm versions earlier than 2.4.1:

      Key KP_Add A M Next [CurrentDesk !Iconic] Focus
      Key KP_Subtract A M Prev [CurrentDesk !Iconic] Focus

   These bindings allow you to circulate the focus around the windows
   on the current desk in both directions.  If Prev FlipFocus were
   used the focus would toggle between the top two windows on the
   window list.

   If you have several windows on a desk and you want to set the
   circulation order for the Next and Prev commands you should focus
   on the windows using the mouse or FlipFocus in the order you want.
   Fvwm will learn the order and use it for the Next and Prev
   commands.  If you subsequently use the mouse to focus or FlipFocus
   the order will be lost.

----------------------------------------------------------------------

<a name="3.5"></a><a href="#toc_3.5">3.5</a>  You can bind mouse movements to keystrokes, how about mouse
     presses?

A: Although fvwm has commands for binding movements to keystrokes,
   controlling the pointer with the keyboard should really be handled
   by the X server.  The following is an excerpt of the X FAQ on this
   topic:

     If you have the X Keyboard (XKB) Extension, you can enable mouse
     keys, which makes it possible to generate mouse motion and button
     events using the keyboard.  Events generated by MouseKeys are
     completely transparent -- they will work with any application
     that connects to a server that has the X Keyboard Extension,
     regardless of whether the application itself uses XKB.

     XKB is enabled by default in X11R6.1.

     First, set up the Num Lock key so that Shift+Num_Lock
     toggles mouse keys:

       $ xmodmap -e &quot;keysym Num_Lock = Num_Lock Pointer_EnableKeys&quot;

     (XFree86 3.1.2E is based on R6.1 and has the X Keyboard
     Extension; it also has a binding to Pointer_EnableKeys in
     its default keymap. You use Alt+Shift+Num_Lock to toggle
     MouseKeys on and off.  If you are using an earlier release
     of X or XFree86, you won't have XKB and the instructions
     will not work.  See <a href="http://www.XFree86.org/FAQ">http://www.XFree86.org/FAQ</a> for more
     information.)

     You might also have to turn off server num lock for this to
     work.  Now press &quot;Shift+Num_Lock&quot; to enable MouseKeys.  When
     MouseKeys are on:

     o)   The keypad arrow keys move the pointer
     o)   The keypad '5' key behaves like the 'default' pointer
          button.
     o)   The keypad '0' key locks the default pointer button
          (for easy dragging).
     o)   The keypad '.' key unlock the default pointer button
          (to release a drag).
     o)   The keypad '+' key double-clicks the default pointer
          button.
     o)   The keypad '/' key sets the 'default' button to Button1
     o)   The keypad '*' key sets the default button to Button2
     o)   The keypad '-' key sets the default button to Button3

     This is the default configuration, but the mechanism allows
     for nearly infinite configurability.

     [thanks to Erik Fortune (<a href="mailto:erik@westworld.engr.sgi.com">erik@westworld.engr.sgi.com</a>), 6/96]

----------------------------------------------------------------------

<a name="3.6"></a><a href="#toc_3.6">3.6</a>  I'd like to bind a key to paste/use the current selection, how can
     I do that?

A: You can't directly with fvwm, but there may be a solution that is
   more generally applicable - use the program 'xcb' available at
   <a href="ftp://ftp.x.org/contrib/utilities/">ftp://ftp.x.org/contrib/utilities/</a> or from your favorite mirror.
   It could probably be used to get the desired effect or close to
   it. This is most useful for running programs and passing the
   selection to them (e.g. - invoke your favorite browser with the
   current selection as the URL).  To get a semi-generic paste
   facility to work, you'll probably need to use 'xse' (see Q3.5).  If
   anyone comes up with a good example of this, please send it to the
   fvwm mailing list for inclusion here.

----------------------------------------------------------------------

<a name="3.7"></a><a href="#toc_3.7">3.7</a>  Will fvwm ever support a separate colormap for each desktop?

A: Doubtful, although I'd like to see it too.  I believe that it'd be
   possible to change the default colormap whenever you switch desks,
   which would give programs started when that desk is active that
   colormap, how would you deal with windows being moved across desks?

   Plus fvwm itself needs certain colormap entries for all of its
   drawing (borders, menus, etc), so these colors would have to be
   pre-allocated in all of the colormaps, or something like that.

   While this all <u>might</u> be technically possible, I don't feel that
   it's really feasible right now (too much code bloat and
   complexity), especially since most color hog programs
   (i.e. Netscape) allow you to have them install private colormaps.

   I may explore this a little at some point in the future though.

----------------------------------------------------------------------

<a name="3.8"></a><a href="#toc_3.8">3.8</a>  I really like the horizontal bars that appear on the title bars
     of sticky windows.  Can I get those on other windows as well?

A: Yes.  For release 2.3.14 and after, put the line

     Style * StippledTitle

   in your fvwm/config (or .fvwm2rc).  For earlier releases use

     GlobalOpts StipledTitles

   (Yes, the spelling was inconsistent.)

----------------------------------------------------------------------

<a name="3.9"></a><a href="#toc_3.9">3.9</a>  How do I set the Sun keyboard key xxxx to an fvwm command?  Or
     more generally, I'm having problems defining key bindings for
     fvwm - what can I do?

A: From Jon Mountjoy, one of fvwm's users:
     - Function keys on Sun Keyboard on Top Row are F1 - F8
     - Keys on the function keypad on the Left of the Sun Keyboard
       are F11 == Stop, F12 == Again, ..., F20 == Cut

     His Example:

     # Function keys on Sun Keyboard on Top Row
     Key F1     A     N       Exec me(netscape) &amp;
     Key F2     A     N       Exec me(netscape -install) &amp;
     Key F5     A     N       Exec makex(Adder)
     Key F6     A     N       Exec makex(Lambda)
     Key F7     A     N       Exec makex(Castor)
     Key F8     A     N       Exec xterm -T Local &amp;

     # Keys on the function keypad on the Left of the Sun Keyboard:
     # F11 = Stop, F12 = Again, ..., F20 = Cut
     Key F11    AWF   N       Next (!iconic, CurrentPage) Focus
     Key F12    AWF   N       Prev (!iconic, CurrentPage) Focus
     Key F13    WF    N       Maximize     100 100
     Key F15    WF    N       RaiseLower &quot;&quot;
     Key F17    WIF   N       Iconify &quot;&quot;
     Key F18    WF    N       Stick &quot;&quot;
     Key F20    WIF   N       Delete &quot;&quot;
     Key Help   AWF   N       Iconify &quot;&quot;

   A more general solution is to use xev (usually distributed w/ X11)
   or xkeycaps (an X11 interface to xmodmap written by Jamie Zawinski,
   available from ftp.x.org) to find out what the keysym for whatever
   key you want REALLY is, and use that for binding fvwm commands.

----------------------------------------------------------------------

<a name="3.10"></a><a href="#toc_3.10">3.10</a>  My .fvwmrc from version 1.xx no longer works.  What do I do?

A: Start with a new one or convert your old one.  This can be done by
   hand or with a little help from the 'fvwm-convert-2.2' in the
   utils directory.

   And here is a list of rc file command changes compiled by Makoto
   'MAR_kun' MATSUSHITA &lt;<a href="mailto:matusita@ics.es.osaka-u.ac.jp">matusita@ics.es.osaka-u.ac.jp</a>&gt;.  It may or
   may not be 100% accurate or complete, especially as changes evolve,
   but it's a good start.

   Note that there have been some changes in 2.1.x and up that are not
   reflected in the conversion script yet.

   ** Fvwm-1.xx commands **                   ** Fvwm-2.0.x equivalent **

   AppsBackingStore                           (obsoleted)
   AutoRaise delay                            (obsoleted, use FvwmAuto)
   BackingStore                               (obsoleted)
   BoundaryWidth Width                        Style (BorderWidth width)
   ButtonStyle button# WidthxHeight           &lt;-
   CenterOnCirculate                          (obsoleted)
   CirculateSkip windowname                   Style (CirculateSkip)
   CirculateSkipIcons                         Style (CirculateSkipIcon)
   ClickTime delay                            &lt;-
   ClickToFocus                               Style (ClickToFocus)
   Cursor  cursor_num cursor_type             CursorStyle context cursornum
   DecorateTransients                         Style (DecorateTransient)
   DeskTopScale Scale                         (obsoleted, use FvwmPager)
   DeskTopSize HorizontalxVertical            &lt;-
   DontMoveOff                                (obsoleted)
   EdgeResistance scrolling moving            &lt;-
   EdgeScroll horizontal vertical             &lt;-
   Font fontname                              MenuStyle (arg4)
   Function FunctionName                      AddToFunc (not compatible)
   HiBackColor colorname                      Style (HilightFore color)
   HiForeColor colorname                      Style (HilightFore color)
   Icon windowname bitmap-file                Style (Icon iconname-file)
   IconBox left top right bottom              Style (IconBox l t r b)
   IconFont fontname                          Style (IconFont fontname)
   IconPath path                              ImagePath path
   Key keyname Context Modifiers Function     &lt;-
   Lenience                                   Style (Lenience)
   MenuBackColor colorname                    MenuStyle (arg2)
   MenuForeColor colorname                    MenuStyle (arg1)
   MenuStippleColor colorname                 MenuStyle (arg3)
   Module ModuleName                          &lt;-
   ModulePath path                            &lt;-
   Mouse Button Context Modifiers Function    &lt;-
   MWMBorders                                 Style (MWMBorder)
   MWMButtons                                 Style (MWMButtons)
   MWMDecorHints                              Style (MWMDecor)
   MWMFunctionHints                           Style (MWMFunctions)
   MWMHintOverride                            Style (HintOverride)
   MWMMenus                                   MenuStyle (arg5)
   NoBorder windowname                        Style (NoBorder)
   NoBoundaryWidth Width                      Style (HandleWidth width)
   NoPPosition                                Style (NoPPosition)
   NoTitle windowname                         Style (NoTitle)
   OpaqueMove percentage                      OpaqueMoveSize percentage
   OpaqueResize                               (obsoleted)
   Pager  X_Location Y_Location               (obsoleted, use FvwmPager)
   PagerForeColor colorname                   (obsoleted, use FvwmPager)
   PagerBackColor colorname                   (obsoleted, use FvwmPager)
   PagerFont fontname                         (obsoleted, use FvwmPager)
   PagingDefault pagingdefaultvalue           (obsoleted)
   PixmapPath                                 ImagePath path
   Popup PopupName                            AddToMenu (not compatible)
   RandomPlacement                            Style (RandomPlacement)
   SaveUnders                                 (obsoleted)
   SloppyFocus                                Style (SloppyFocus)
   SmartPlacement                             Style (SmartPlacement)
   StartsOnDesk windowname desk-number        Style (StartsOnDesk desk-number)
   StaysOnTop windowname                      Style (StaysOnTop)
   StdBackColor colorname                     Style (BackColor color)
   StdForeColor colorname                     Style (ForeColor color)
   StickyBackColor colorname                  (obsoleted)
   StickyForeColor colorname                  (obsoleted)
   Sticky windowname                          Style (Sticky)
   StickyIcons                                Style (StickyIcon)
   StubbornIcons                              (obsoleted)
   StubbornIconPlacement                      (obsoleted)
   StubbornPlacement                          (obsoleted)
   Style windowname options                   &lt;-
   SuppressIcons                              Style (NoIcon)
   WindowFont fontname                        Style (Font fontname)
   WindowListSkip windowname                  Style (WindowListSkip)
   XORvalue number                            &lt;-

   ** fvwm-1 built-in functions ***

   Beep                                       &lt;-
   CirculateDown [ name window_name ]         Next (not compatible)
   CirculateUp [ name window_name ]           Prev (not compatible)
   Close                                      &lt;-
   CursorMove horizontal vertical             &lt;-
   Delete                                     &lt;-
   Desk arg1 arg2                             &lt;-
   Destroy                                    &lt;-
   Exec name command                          &lt;-
   Focus                                      &lt;-
   Function                                   &lt;-
   GotoPage  x y                              &lt;-
   Iconify [ value ]                          &lt;-
   Lower                                      &lt;-
   Maximize [  horizontal vertical ]          &lt;-
   Module name ModuleName                     Module ModuleName
   Move [ x y ]                               &lt;-
   Nop                                        &lt;-
   Popup                                      &lt;-
   Quit                                       &lt;-
   Raise                                      &lt;-
   RaiseLower                                 &lt;-
   Refresh                                    &lt;-
   Resize [ x y ]                             &lt;-
   Restart  name WindowManagerName            &lt;-
   Stick                                      &lt;-
   Scroll horizonal vertical                  &lt;-
   Title                                      &lt;-
   TogglePage                                 (obsoleted)
   Wait name                                  &lt;-
   Warp [ name window_name ]                  Next or Prev (not compatible)
   WindowsDesk new_desk                       (obsoleted, use MoveToDesk)
   WindowList arg1 arg2                       &lt;-

   *** New in fvwm-2 **

   All
   AnimatedMove
   BugOpts
   BusyCursor
   DefaultColors
   DefaultColorset
   DefaultFont
   DefaultIcon
   DefaultLayers
   Destroy
   DestroyMenu
   EdgeThickness
   Emulate
   EscapeFunc
   ExecUseShell
   HideGeometryWindow
   KillModule
   Layer
   Menu menu-name double-click-action
   MoveToDesk
   MoveToPage
   Next (conditions) command
   None (arguments) command
   Pick
   PointerKey
   Prev (conditions) command
   QuitSession
   Read filename
   Recapture
   RecaptureWindow
   SaveQuitSession
   SaveSession
   Silent
   SnapAttraction
   SnapGrid
   StrokeFunc
   XORPixmap
   +
   (more functions are being added from time to time, so please check
    the man page and the NEWS file too).

----------------------------------------------------------------------

<a name="3.11"></a><a href="#toc_3.11">3.11</a>  What happened to the fvwm 1.xx 'include' command?

A: It was actually part of the M4 preprocessing.  You can use the
   'Read' builtin to get the same effect, or use the FvwmM4 module.

----------------------------------------------------------------------

<a name="3.12"></a><a href="#toc_3.12">3.12</a>  How do I get window titles on sub windows of ... (e.g.
      Netscape)?

A: These windows are known as 'transient' windows because of their
   short lived nature.  To get the window decorations for transient
   windows you can use the Style command:

     Style * DecorateTransient

   or to switch it off:

     Style * NakedTransient

----------------------------------------------------------------------

<a name="3.13"></a><a href="#toc_3.13">3.13</a>  I just upgraded to version &gt;= 2.3.2, and my configuration
      settings disappeared!  How do I get them back?

A: The directory for system-wide configuration files changed from
   ${sysconfdir} (/usr/local/etc, unless set otherwise at configure
   time) to a subdirectory, ${sysconfdir}/fvwm.  Move your config
   files by hand and restart fvwm.

   This change was made because fvwm now installs several files into
   this directory.

----------------------------------------------------------------------

<a name="3.14"></a><a href="#toc_3.14">3.14</a>  Some applications (e.g. Eterm) don't use the icon I defined for
      them. Why?

A: Eterm provides its own icon and fvwm does not know if it is a plain
   icon or if Eterm wants to draw into it (like xbiff does when you
   get new mail).  You can explicitly override the application
   provided icon with a style command:

     Style &lt;application-name&gt; IconOverride

----------------------------------------------------------------------

<a name="3.15"></a><a href="#toc_3.15">3.15</a>  I don't like the gaps in my icon box when I de-iconify an
      application.  Is there some kind of auto arrange function?

A: Assuming you are using the IconBox option of the Style command
   this can be done with a tricky fvwm function.  Put the
   DeiconifyAndRearrange function below in your configuration file:

     DestroyFunc DeiconifyAndRearrange
     AddToFunc DeiconifyAndRearrange
      + C Iconify off
      + C All (CurrentPage, Iconic) PlaceAgain Icon

   This works with fvwm-2.5.3 and later.  Older fvwm releases can
   achieve the same effect with:

     DestroyFunc DeiconifyAndRearrange
     AddToFunc DeiconifyAndRearrange
      + C Iconify off
      + C All (CurrentPage, Iconic) RecaptureWindow

   However, as the Recapture and RecaptureWindow commands may be
   removed in the future, please use PlaceAgain instead of
   Recapture if possible.

   Also, replace all places where you call the Iconify builtin
   function to de-iconify an icon with a call to the new function.
   For example, replace

     DestroyFunc IconFunc
     AddToFunc IconFunc
      + C Iconify off
      + M Raise
      + M Move
      + D Iconify off

   with:
     
     DestroyFunc IconFunc
     AddToFunc IconFunc
      + C DeiconifyAndRearrange
      + M Raise
      + M Move
      + D DeiconifyAndRearrange

   and:

     Mouse 1 I A Iconify off

   with:

     Mouse 1 I A DeiconifyAndRearrange

----------------------------------------------------------------------

<a name="3.16"></a><a href="#toc_3.16">3.16</a>  How do I set up an fvwm menu item that shuts down my Linux
      machine?

A: Write a little shell script to run the shutdown command.

   Install sudo on your system (see the man page, etc.)

   Set up the sudoers config file to allow you, your wife, etc. to run
   that script with root permissions.

   Add a menu item to your fvwm root menu (or wherever) that invokes
   &quot;sudo /my/script/name&quot;.

----------------------------------------------------------------------

<a name="3.17"></a><a href="#toc_3.17">3.17</a>  Although the Recapture command is obsolete, do I still need it
	to apply certain style changes?

A: Excerpt from the man page:

   There are many commands that affect look and feel of specific,
   some or all windows, like Style, Mouse, the FvwmTheme module (for
   fvwm 2.4.x), Colorsets and many others.  For performance reasons
   such changes are not applied immediately but only when fvwm is idle,
   i.e. no user interaction or module input is pending.  Specifically,
   new Style options that are set in a function are not applied until
   after the function has completed.  This can sometimes lead to
   unwanted effects.  To force that all pending changes are applied
   immediately, use the UpdateStyles, Refresh or RefreshWindow commands.

----------------------------------------------------------------------

<a name="3.18"></a><a href="#toc_3.18">3.18</a>  When my specific window (or all windows) pops up, I want it to
      get focus/be moved/be resized/be closed/be shaded...  How?

A: The following discusses a general solution, you should substitute
   the application names used in the examples as well as fvwm commands
   (Move, Iconify, Close) with the ones you need.  To get resource
   names of an application you want to catch, use FvwmIdent module.

   The first possible approach to achieve what you want is to have a
   separate function to start your application, like:

     DestroyFunc StartKedit
     AddToFunc   StartKedit
     + I Exec exec kedit
     + I Wait kedit
     + I Next (kedit) Resize 100p 200p

   This approach has 3 problems:
     1) You need to use StartKedit function to start your application,
        this will not work if you start it from the command line.
     2) If for some reason the application is not started, fvwm waits
        for it in Wait, you will need to press Ctrl-Alt-Esc.
     3) If you have more than one kedit window, it is not guaranteed
        that the right one is resized.

   But this approach has one plus - it also enables any fvwm commands
   that you may want to issue before executing your command.  For
   example, to start kedit window iconic, but not affect its
   subwindows, you can use:

     DestroyFunc StartAppIconic
     AddToFunc   StartAppIconic
     + I Style $0 StartIconic
     + I Exec exec $0 $1
     + I Wait $0
     + I Style $0 StartNormal
     + I UpdateStyles

     StartAppIconic kedit /tmp/my.txt


   The second approach is to use FvwmEvent, this solves the first two
   problems (in fvwm 2.2) or all three problems (in fvwm 2.3 and
   later).

   The sample to use with fvwm 2.2.3+ versions (this resizes the newly
   created window &quot;My Window&quot;, supposing you have only one such
   window):

     DestroyModuleConfig FvwmEvent*
     *FvwmEvent add_window SetGeometryForMyWindow

     DestroyFunc SetGeometryForMyWindow
     AddToFunc   SetGeometryForMyWindow
     + I Next (&quot;My Window&quot;) Move +10p +10p
     + I Next (&quot;My Window&quot;) Resize 100p 200p

     AddToFunc StartFunction I Module FvwmEvent

   The sample to use with fvwm 2.3.21 to 2.4.15 versions (consider to
   upgrade and use the version below).  This moves a newly created
   window named &quot;My Window&quot;, and warps a pointer to all new windows
   regardless of their name:

     *FvwmEvent-NewWindow: Cmd
     *FvwmEvent-NewWindow: PassId
     *FvwmEvent-NewWindow: StartDelay 4
     *FvwmEvent-NewWindow: add_window FuncFocusWindow

     DestroyFunc FuncFocusWindow
     AddToFunc   FuncFocusWindow
     + I WindowId $0 (&quot;My Window&quot;) Move 200p 100p
     + I WindowId $0 Focus
     + I WindowId $0 WarpToWindow

     AddToFunc StartFunction I FvwmEvent FvwmEvent-NewWindow

   And finally the suggested configuration for 2.5.7+ and
   2.4.16+. This moves a newly created window named &quot;My Window&quot;, and
   wraps a pointer to all new windows regardless of their name:

     *FvwmEvent-NewWindow: StartDelay 4
     *FvwmEvent-NewWindow: add_window FuncFocusWindow

     DestroyFunc FuncFocusWindow
     AddToFunc   FuncFocusWindow
     + I ThisWindow (&quot;My Window&quot;) Move 200p 100p
     + I Focus
     + I WarpToWindow

     AddToFunc StartFunction I FvwmEvent FvwmEvent-NewWindow

----------------------------------------------------------------------

<a name="3.19"></a><a href="#toc_3.19">3.19</a>  When my specific window (or all windows) is closed, I want to
      switch desks/wrap to my app X/popup a menu/start app X...  How?

A: Please read the answer to the previous question to understand
   better.

   Again, there are two approaches.  The first is good in one kind of
   situations, bad in others:

     DestroyFunc StartKedit
     AddToFunc   StartKedit
     + I Exec kedit; xmessage -name DummyWindow -g +10000+10000 &quot;dummy&quot;
     + I Wait DummyWindow
     + I Exec xmessage -timeout 10 &quot;Sorry, you can't close kedit&quot;
     + I StartKedit

   The second approach is to use FvwmEvent:

     *FvwmEvent-OldWindow: Cmd
     *FvwmEvent-OldWindow: PassId
     *FvwmEvent-OldWindow: destroy_window FuncPopupMyMenu

     DestroyFunc FuncPopupMyMenu
     AddToFunc   FuncPopupMyMenu
     # go to the desk 0 when any window is closed
     + I GotoDesk 0
     # popup my menu when &quot;panel&quot; is closed
     + I WindowId $0 (&quot;panel&quot;) Popup MenuFvwmRoot

     AddToFunc StartFunction I FvwmEvent FvwmEvent-OldWindow

----------------------------------------------------------------------

<a name="3.20"></a><a href="#toc_3.20">3.20</a>  I have a multi head setup (multiple screens used under X).  How
      can I tell fvwm to use different configurations for the screens?

A: Fvwm spawns itself into all found screens unless -s command line
   parameter is specified, as explained in the man page.  All spawned
   fvwm processes by default use the same configuration on each
   screen. There are several ways to change the default behavior.

   Write your configuration file as you would if you had only one
   screen.  Then move the screen specific lines into separate
   configuration files and call them, for example, config.&lt;screen&gt;
   where &lt;screen&gt; is the screen number.  Usually this will be 0 for
   the main screen and 1 for the secondary screen.  Place the screen
   specific files in the $HOME/.fvwm directory or whatever you set
   $FVWM_USERDIR to.  Now add this line to your config file:

     Read config.$[screen]

   The $[screen] will be replaced with the number of the screen each
   instance of fvwm is started on.


   Another method, which should work for older fvwm versions as well,
   is to specify a separate file for each screen explicitly.  For
   this, start a separate fvwm for each screen in your .xinitrc (or
   .Xclients):

     fvwm -s -d :0.0 -f config-0 &amp;
     fvwm -s -d :0.1 -f config-1 &amp;
     fvwm -s -d :0.2 -f config-2

   Note that only the last command is without a trailing ampersand.
   If you wish, config-* files may all include &quot;Read config-common&quot;.

----------------------------------------------------------------------

<a name="3.21"></a><a href="#toc_3.21">3.21</a>  How do I maximize a window but not cover up FvwmTaskBar?

A: Instead of Maximize use &quot;Maximize 100 -30p&quot; where 30 is the width
   of your FvwmTaskBar.

   Or use EwmhBaseStruts in Fvwm 2.5.x or later.

----------------------------------------------------------------------

<a name="3.22"></a><a href="#toc_3.22">3.22</a>  Why my close button looks pressed in maximized windows?
      Why don't buttons show on the titlebar of some windows?

A: Fvwm has some builtin idea of what the buttons do, and some
   applications can request that certain buttons not be shown.
   For example, it's normal for Fvwm to suppress the iconify button
   (builtin button 4, the second button from the right) on a
   transient (dialog) window.

   The command:

     Style * DecorateTransient

   tells fvwm you want titles and buttons on transient windows.

     Style * MwmFunctions

   tells fvwm to accept application hints to hide certain buttons.

     ButtonStyle 2 - Clear MWMDecorMin

   says button 2 performs the minimize (iconify) function.

     Mouse 0 2 A Iconify

   makes any mouse button on button 2 iconify the window.
   Buttons won't show until some action is assigned to them using
   Mouse or Key commands.

   Things to look for in the man page are:

     DecorateTransient, MwmDecorXXX, MwmFunctions

   So, if you use Windows-like buttons, then redefine button hints:

     ButtonStyle 1 - Clear MWMDecorMenu
     ButtonStyle 2 - Clear
     ButtonStyle 4 - Clear MWMDecorMax
     ButtonStyle 6 - Clear MWMDecorMin

   Finally, this command makes button relief to follow the state:

     Style * MWMButtons

----------------------------------------------------------------------

<a name="3.23"></a><a href="#toc_3.23">3.23</a>  How to define transparent menus?

A: First, it may help to read about colorsets in fvwm and FvwmTheme
   man pages.

   We speak about transparency, not translucency here.  This means
   the background of the parent window (for example the root window)
   will be used for our &quot;transparent&quot; areas, this is not always the
   window under our &quot;transparent&quot; window.  However, it is possible
   to get a real transparency (i.e. translucency) by applying one
   patch and using new Colorset Translucent option the patch adds.
   We do not discuss this here, however you may get this patch with
   README.patch included from:

     <a href="http://fvwm-themes.sf.net/patch/">http://fvwm-themes.sf.net/patch/</a>


   To define a transparent colorset, use something like:

     Colorset 23 Transparent, fg rgb:ff/ff/c4, bg darkgray

   (you may use any other number greater than 0 instead of 23)

   There is another way to define transparent colorset, by using
   RootTransparent instead of Transparent, but please remember,
   you should use a good utility to set the root background image,
   like &quot;fvwm-root -r&quot; or &quot;Esetroot&quot; or &quot;wmsetbg&quot;, otherwise
   RootTransparent will not work:

     Colorset 23 RootTransparent, fg rgb:ff/ff/c4, bg darkcyan

   The good thing about RootTransparent is that it is possible to
   automatically calculate the average background color (used for
   highlighting/shading) and efficiently tint the visible part of the
   root image using something like:

     Colorset 23 RootTransparent, fg rgb:ff/ff/c4, bg average, \
       Tint black 20, bgTint black 20

   If you have enough memory, you may use &quot;RootTransparent buffer&quot;
   to speed up transparent menus, modules or decorations.

   If you are not sure whether you use &quot;fvwm-root -r&quot; or similar
   utility to set the root background, do not use RootTransparent
   option, use Transparent option without tinting, and set the bg
   color explicitly.

   Once a transparent colorset is defined, use it in menus:

     MenuStyle * MenuColorset 23

   See the man pages for a more complete explanation of colorsets.

----------------------------------------------------------------------

<a name="3.24"></a><a href="#toc_3.24">3.24</a>  How to define transparent modules?

A: See question 3.23 to learn how to define a transparent colorset
   (you may reuse the same transparent colorset or define separate
   colorsets for different modules).

   Then read the man page for your specific module that you want to
   make transparent and specify this transparent colorset(s), like:

     *FvwmPager: Colorset * 23
     *FvwmButtons: Colorset 23
     *FvwmIconMan: Colorset 23

     Style FvwmPager ParentalRelativity
     Style FvwmButtons ParentalRelativity
     Style FvwmIconMan ParentalRelativity

   A side note: the ParentalRelativity option is not always needed.
   It is not needed if you use RootTransparent or you never intend to
   move a module inside its parent, or you swallow a module, since
   FvwmButtons adds ParentalRelativity automatically for swallowed
   fvwm modules.  Otherwise you need Style ParentalRelativity for
   transparent windows, but doing this for all windows is overhead.

   Note, that previously &quot;Pixmap none&quot; option was used to define
   transparency; Pixmap option is obsolete, use colorsets instead.

   If you swallow FvwmPager (or FvwmIconMan) into FvwmButtons, then
   you may configure both FvwmPager and FvwmButtons to be transparent
   or just one of them to be transparent, depending on what you want
   to achieve.

----------------------------------------------------------------------

<a name="3.25"></a><a href="#toc_3.25">3.25</a>  How to define transparent decorations?

A: See question 3.23 to learn how to define a transparent colorset.
   Only RootTransparent method works for transparent decorations!
   This basically means that you should use external utilities like
   &quot;wmsetbg&quot; or &quot;Esetroot&quot; to set background in JPG/GIF/TIFF format
   and our utility &quot;fvwm-root -r&quot; for XPM/PNG images.

   To get transparent decorations, use a configuration like this:

     AddToFunc StartFunction
     + I Exec fvwm-root -r $HOME/wallpapers/sea.png

     Colorset 41 RootTransparent buffer, fg white, bg average, \
       Tint cyan 15, bgTint cyan 15  # tint is optional
     Colorset 42 RootTransparent buffer, fg white, bg average, \
       Tint red  15, bgTint red  15  # tint is optional

     Style * Colorset 41, HilightColorset 42  # to use fg and bg
     BorderStyle Inactive Colorset 42 -- flat
     BorderStyle Active   Colorset 41 -- flat
     TitleStyle AllInactive Colorset 42 -- flat
     TitleStyle AllActive   Colorset 41 -- flat
     ButtonStyle All -- UseTitleStyle flat

   It is possible to define partially transparent decorations too.
   You may achieve this by adding &quot;AddTitleStyle Colorset NN PP&quot;,
   or even &quot;TitleStyle Colorset NN PP&quot;.  Please read the man page.
   Also search in fvwm-themes to see whether some theme provides
   the window decoration look similar to what you want to achieve.

----------------------------------------------------------------------

<a name="3.26"></a><a href="#toc_3.26">3.26</a>  How about transparent applications too?

A: This is not really an fvwm related question, you should find X
   applications supporting transparency and read their documentation.

   Depending on the application you should set the root image in one
   or another way.  Usually utilities like fvwm-root (with possible
   &quot;-r&quot; parameter), Esetroot or wmsetbg should be used.

   There is a wide range of terminal emulators that may be configured
   to be transparent, like Eterm, aterm, gnome-terminal and others.
   Here is an example command line:

     aterm -ls -sh 70 -bg black -fg white -tr +sb -fn 7x14 -fb 7x14bold

   Some applications have transparent theme, e.g. gkrellm and xmms.

   Some applications may show text on the root image, e.g. root-tail.

   There are a lot of other applications supporting transparency not
   listed here, search in FreshMeat, <a href="http://freshmeat.net/.">http://freshmeat.net/.</a>

----------------------------------------------------------------------

<a name="3.27"></a><a href="#toc_3.27">3.27</a>  How can I define emacs type multi-keystroke fvwm bindings?

A: In emacs, keys can be set up as prefix keys, so that once
   you type the prefix key, a subsequent key has a special meaning.
   For example, Control-a would normally go to the beginning of a line
   but Control-c Control-a might do something completely different.
   There are at least 2 ways to do the same thing with fvwm.

   The simplest technique is to use the prefix key to invoke a menu
   and then use the menu hot keys as the second key in the binding.
   Since menu hot keys don't include modifiers, you can only use plain
   keys for the second key in the sequence.

   This second technique lets you use any key for the second key but
   only works with 2.5.x or later.
   This approach invokes a function on the first key that defines the
   action of the second key for a short time and then removes it:

   DestroyFunc Ctrl-Alt-F-Action
   AddToFunc   Ctrl-Alt-F-Action
   + I Key X A A Exec xterm
   + I Key C A A Exec xcalc
   # optionally popup a prompt window here
   + I Schedule 5000 Key X A A -
   + I Schedule 5000 Key C A A -

   # Press Ctrl-Alt-F and then &quot;x&quot; or &quot;c&quot;
   Key F A CM Ctrl-Alt-F-Action

   With this, you press the second key in 5 seconds otherwise the
   binding for the second key is removed.


   With fvwm-2.5.24 or later (using SendToModule) a much better
   solution is:

      SendToModule buttons-alias PressButton A 1
   
   This would send the FvwmButtons instance &quot;button-alias&quot; a command
   to invoke the action that button &quot;A&quot; has as though the button were
   clicked with mouse button 1.  For instance:

      *button-alias: (Id A, Title &quot;My Button&quot;, Action (Mouse 1) \
         `Exec exec xcalc`)

----------------------------------------------------------------------

<a name="3.28"></a><a href="#toc_3.28">3.28</a>  How do I remove all decorations from a window?


A:  I see this a lot on IRC.  Most people try and do this:

    Style * !Title, BorderWidth 0

    This doesn't always work because many forget about a window having
    having handles -- which sit on the border.  If a window has defined
    handles, then these effectively override any of border settings --
    especially the &quot;BorderWidth&quot; option.  But there are Handle
    equivalents, hence the correct way to remove decorations from a window
    would be:

    Style * !Title, !Borders, !Handles

    To set the BorderWidth of a window which has handles:

    Style * HandleWidth 5
   
----------------------------------------------------------------------

<a name="3.29"></a><a href="#toc_3.29">3.29</a>  What's the best way to make on-the-fly config changes?

A:  Often is the case, one might want to make config changes to fvwm.
    Adding them to the .fvwm2rc file (or in more recent releases
    .fvwm/.fvwm2rc or ~/.fvwm/config) and then restarting fvwm is one
    way -- but this has problems with memory, especially with Colorset
    definitions being redeclared, etc.

    The better approach to making changes is instead to use FvwmConsole
    which is a way of making live changes to fvwm configs.  When you're
    satisfied that they're correct, then you can add them to your fvwm
    config file so that they're there the next time fvwm loads, thus
    reducing the need to restart fvwm.

----------------------------------------------------------------------

<a name="3.30"></a><a href="#toc_3.30">3.30</a>  How can I toggle a window's layer?

A:  Usually what people want from this, is a means of making a window
    stay on top for a time, and then putting it back in the layer it
    was in originally.

    This is best achieved with a function, as in:

    DestroyFunc ToggleLayer
    AddToFunc   ToggleLayer
    + I ThisWindow (Layer 6) Layer
    + I TestRc (NoMatch) Layer 0 6

    This function first of all checks to see if the window that's going
    to be toggled is in layer 6 (which in this context is assumed to be
    the layer which is used for the style StaysOnTop -- see the
    DefaultLayers command for more information), and if it is, to put it
    in the layer it was previously in.

    Otherwise, if we didn't do it (because the window in question was in
    any other layer), the window is put in layer 6.

    This function can be bound in the usual way, either via the Pick
    command to some key/mouse binding, or bound to a button on the
    titlebar, etc.

======================================================================
<a name="4."></a>                             <a href="#toc_4.">4</a> - Modules
======================================================================

<a name="4.1"></a><a href="#toc_4.1">4.1</a>  I'm using FvwmButtons (or GoodStuff in 1.xx), and sometimes the
     buttons stay depressed, and other times they don't.  Why is that?

A: From the FvwmButtons man page:

       If command is an fvwm Exec command, then the button
       will remain pushed in until a window whose name or
       class matches the quoted portion of the command is
       encountered.  This is intended to provide visual
       feedback to the user that the action he has requested
       will be performed.  If the quoted portion contains no
       characters, then the button will pop out immediately.
       Note that users can continue pressing the button, and
       re-executing the command, even when it looks &quot;pressed
       in.&quot;

----------------------------------------------------------------------

<a name="4.2"></a><a href="#toc_4.2">4.2</a>  When having FvwmButtons swallow an app, is it possible to have
     button presses assigned to actions as well?  For instance, I'd
     like to swallow xload and have a button press pop up an xterm, or
     swallow xbiff and have a button press bring up the list of
     messages.

A: Yes, with the alpha release 2.5.0 or any later release.  For older
   releases, read on.

   The button presses normally get passed through to the swallowed
   application, but if you put a title on the button, you can
   assign actions to that. Here's an example that someone sent to
   the mailing list once:

   *FvwmButtons(1x4,       \
     Title           'System Info', \
     Swallow         &quot;xload&quot; 'Exec xload', \
     Action(Mouse 1) 'Exec xosview -cua0 -net 200 -ul -l -geometry 325x325', \
     Action(Mouse 2) 'Exec xcpustate -interval 1 -bg &quot;#a4978e&quot; -fg black', \
     Action(Mouse 3) 'Exec rxvt -fg &quot;khaki&quot; -bg &quot;dark olive green&quot; \
                           -fat -n top -T Top -7 -e top' )

   And you could come up with something similar for xbiff (untested):

   *FvwmButtons(1x2, \
     Title 'Check Mail' Swallow &quot;xbiff&quot; 'Exec xbiff', \
     Action(Mouse 1) 'Exec from | xmessage -file -' )

   plus you could bind another button (say Mouse 3) to run your
   mail program.

   Sometime in the future I'll probably try and fix it so that you can
   actually assign a button press over the application itself...

----------------------------------------------------------------------

<a name="4.3"></a><a href="#toc_4.3">4.3</a>  I'm seeing odd things when trying to preprocess files with the
     FvwmM4/Cpp module...

A: Yup, I imagine that you might be.  Things like the InitFunction not
   being called or windows that were running before fvwm started not
   getting their Borders &amp; Style options set, etc.

   The reason for all this is because of the fact that FvwmM4 is a
   module.  Fvwm won't be looking at the commands coming back from
   the module until after it hits the main loop of the code, AFTER the
   startup is all done and it has already tried to execute the
   InitFunction.

   To force synchronous execution of FvwmM4/Cpp use:

     ModuleSynchronous FvwmM4/Cpp -lock filename

   See the man page for more details.

----------------------------------------------------------------------

<a name="4.4"></a><a href="#toc_4.4">4.4</a>  I heard about this FvwmFileMgr module.  Where can I find it?

A: The FvwmFileMgr module disappeared because a file manager doesn't
   need to be integrated with a window manager and something like xfm
   does a much better job.  I recommend you pick that up instead (from
   ftp.x.org or your favorite mirror).

----------------------------------------------------------------------

<a name="4.5"></a><a href="#toc_4.5">4.5</a>  I used to use GoodStuff in fvwm 1.xx, but it's not in the 2.xx
     distribution.  What do I use now?

A: GoodStuff was renamed to FvwmButtons.  Same module, new name (that
   fits in with the other modules naming convention).

----------------------------------------------------------------------

<a name="4.6"></a><a href="#toc_4.6">4.6</a>  I want to have the sub panels in FvwmButtons not at their default
     position near the button but somewhere else on the screen.  Is
     this possible?

A: Yes, but not with the current implementation of the panels.  Please
   read question 7.12 for instructions.

----------------------------------------------------------------------

<a name="4.7"></a><a href="#toc_4.7">4.7</a>  How can I open a sub panel or push buttons in FvwmButtons
     with a keyboard shortcut?

A: FvwmButtons does not support keyboard shortcuts itself.  Since
   fvwm version 2.3.24 the FakeClick command can be used to
   simulate a click in the FvwmButtons window:

   fvwm-2.3.24 or later:

     DestroyFunc press_fvwmbuttons
     AddToFunc press_fvwmbuttons
     + I Next (FvwmButtons, CirculateHit) WarpToWindow $1 $2
     + I FakeClick depth 2 press $0 release $0

   fvwm-2.5.1 or later (moves the pointer back to the original
   position):

     DestroyFunc press_fvwmbuttons
     AddToFunc press_fvwmbuttons
     + I SetEnv pointer_x $[pointer.x]
     + I SetEnv pointer_y $[pointer.y]
     + I Next (FvwmButtons, CirculateHit) WarpToWindow $1 $2
     + I FakeClick depth 2 press $0 release $0
     + I WindowId root WarpToWindow $[pointer_x]p $[pointer_y]p

   With this function, you can warp the pointer to the desired
   button to press and simulate a click.  Call it with

     press_fvwmbuttons btn xoff yoff
                         ^    ^    ^
                         |    |    |___ y offset of the button
                         |    |________ x offset of the button
                         |_____________ button to press

   For example, if the button of a panel is at 30% of FvwmButtons'
   width and 10% of its height and you want to simulate mouse
   button 1, issue

    press_fvwmbuttons 1 30 10

   You can bind this to a key.  For example:

     Key f1 a n press_fvwmbuttons 1 30 10

   Note that this solution does not work well if the mouse is moved at
   the same time.

   With fvwm-2.5.24 or later (using SendToModule) a much better
   solution is:

      SendToModule buttons-alias PressButton A 1
   
   This would send the FvwmButtons instance &quot;button-alias&quot; a command
   to invoke the action that button &quot;A&quot; has as though the button were
   clicked with mouse button 1.  For instance:

      *button-alias: (Id A, Title &quot;My Button&quot;, Action (Mouse 1) \
         `Exec exec xcalc`)

   
======================================================================
<a name="5."></a>            <a href="#toc_5.">5</a> - Development, Known Problems &amp; Bug Reports
======================================================================

<a name="5.1"></a><a href="#toc_5.1">5.1</a>  I'd really like to see neat feature XYZ in fvwm.  Wouldn't
     that be cool?  I even have a patch.  When can it be added?

A: If you plan to write a patch, <u>please</u>, first of all fetch the
   latest development release from our web site or better yet use CVS
   as described in <a href="http://fvwm.org/documentation/dev_cvs.php.">http://fvwm.org/documentation/dev_cvs.php.</a>  It is
   also a good idea to contact the fvwm-workers list.  At times,
   patches for older releases may prove completely worthless, e.g.
   because the fix has already been integrated, a feature already
   added or removed or simply because the code is very different to
   the code you patches.  You will do yourself and us a great favor.
   Otherwise all your hard work may be wasted.

   People are always requesting or suggesting new features (many of
   which are great ideas and where a lot of the current features came
   from).  One of the more common ones for example is Windows 95 look
   and feel (although since this was first written, that particular
   feature has actually been indirectly implemented via several
   appearance-affecting features).

   I'd like to make a statement about this.  fvwm is supposed to be
   small, fast, powerful, and flexible, and sometimes tradeoffs have
   to be made here.  The module interface helps here, as a lot of
   features that not everyone wants or needs don't have to be in the
   main module consuming resources for those people that don't want or
   need them.

   So if you have a suggestion (or a patch), please think of a way to
   make it as small and generic as possible if you feel it belongs in
   the main module.

   If you plan to make a patch, please contact the fvwm-workers
   mailing list first.  From time to time we are changing the code in
   a very disruptive way and if you create a patch to a version before
   such changes were made we will all have a hard time to integrate
   the patch.  Most of the time we will ask you to update the patch
   for the current code anyway.

   Bear in mind that we make no guarantees that we'll add any
   requested feature or apply any submitted patches to the official
   version, but please don't let this dissuade you from submitting
   them.  We like to get new ideas and we're always curious to see how
   someone would implement a given feature, even if we never plan to
   put it in fvwm. Also, we may choose to re-implement any patches
   submitted, which may change the syntax, functionality, etc.  Please
   don't take offense from that, as we mean no offense and we
   generally have a good reason (at least by our way of thinking) for
   our actions...

----------------------------------------------------------------------

<a name="5.2"></a><a href="#toc_5.2">5.2</a>  How do I create/submit/apply patches?

A: First of all, please read the first section of the answer to Q5.1!

   Please add proper entries to the ChangeLog file(s) and possibly to
   NEWS and AUTHORS files whenever you submit a patch.  The ChangeLog
   lists <u>all</u> changed files and functions along with a useful
   explanation of the change details.  The NEWS file mentions all
   user-visible changes, including bug fixes.  Also, do not forget to
   write a section for the man page if the patch includes new
   features.

   You can find more detailed instructions for working with the
   fvwm sources in the files doc/DEVELOPERS and doc/CONVENTIONS in
   CVS or the tarballs.

   Creating a patch against CVS sources (preferable) -

        1) Execute &quot;cvs update -AdP&quot; to ensure there are no conflicts
           with the most recent sources.
        2) Don't forget to update the ChangeLog file (see below) and
           all manual pages if needed.
        3) In the base cvs directory run: cvs diff -u &gt;myfeature.patch

   Creating a patch against released sources -

        1) Copy the original file(s) to the same name with the
           additional extension of .orig (or something like that).
        2) Update the ChangeLog file.  If you use (x)emacs, move the
           cursor into the function you changed and hit &lt;ctrl&gt;-x 4 a.
           This will generate an empty ChangeLog entry in the right
           file (there are several ChangeLogs).  Add a description of
           what you did.  Do this each time you change a function or
           file (for changes outside of functions).  You should update
           the AUTHORS and NEWS files too if appropriate.
           Please take the time to add the ChangeLog entries, it makes
           our work a lot easier.
        3) Run diff with either the -c (context) or -u (unified)
           switch on the sets of files, with the .orig file FIRST.  I
           prefer unified diff's because they are smaller, but
           sometimes they aren't as readable (and some diff versions
           don't support unified diffs), so either context or unified
           diffs are fine (but please, no &quot;plain&quot; diffs).

        ex: cp fvwm.c fvwm.c.orig ; &lt;edit&gt; ; diff -u fvwm.c.orig fvwm.c

   Submitting a patch -

        Mail it to the fvwm-workers mailing list
        &lt;<a href="mailto:fvwm-workers@fvwm.org">fvwm-workers@fvwm.org</a>&gt;.

        If your patch is large you should compress it (preferably with
        gzip).  Should it still be larger than 25k you might want to
        to place it on a web page and email the URL to the mailing
        list or ask on the fvwm-workers list first.

        Be sure to read the answer to Q5.1.

        Don't forget the ChangeLog and the documentation.

   Applying a patch -

        Get a copy of the program 'patch' from your favorite source,
        such as <a href="ftp://ftp.gnu.org/gnu/patch/,">ftp://ftp.gnu.org/gnu/patch/,</a> compile it, and then
        follow its directions (generally just cd into the appropriate
        directory and run 'patch &lt; patchfile').

----------------------------------------------------------------------

<a name="5.3"></a><a href="#toc_5.3">5.3</a>  How do I submit a bug report?

A: Please do not report any 'bugs' related to XMMS to the fvwm the fvwm 
   mailing lists but send them to the XMMS developers instead.

   Please write a DETAILED description of your problem.  By detailed we
   mean more than just &quot;my window isn't behaving right&quot; or
   &quot;I found a bug&quot;:

        - If you want a template for a bug report, see the &quot;fvwm-bug&quot;
          shell script that comes with fvwm.
        - Describe the problem as best you can, preferably with
          suggestions on how to reproduce it easily
        - If applicable, include information from:
                xwininfo (preferably w/ the -all option)
                xprop
                FvwmIdent
                xdpyinfo (maybe)
        - What exact version of fvwm you are running.
        - What OS &amp; version you are running under
        - What version of X11 are you running under, and is it an MIT
          server or a vendor specific server (e.g. the OpenWindow X
          server under SunOS)
        - How was fvwm compiled (compiler &amp; version, options, etc)
        - What settings do you have in your config file that may be
          pertinent.

   This should be sent to the fvwm-workers mailing list.

----------------------------------------------------------------------

<a name="5.4"></a><a href="#toc_5.4">5.4</a>  I have a window that is behaving unexpectedly under fvwm, but
     just fine under (whatever other window manager), or I have just
     some random bug.  What do I do?

A: First, check your rc file and your .Xdefaults to make sure that
   something blatantly obvious in there isn't causing the problem.
   Second, <u>PLEASE PLEASE PLEASE</u> check the FAQ, BUGS, TODO, and man
   pages.  Finally, check the official WWW page and the mailing list
   archives (which have a search facility) stored there.

   If you still can't figure it out, report your problem as a bug
   (see Q5.3).

----------------------------------------------------------------------

<a name="5.5"></a><a href="#toc_5.5">5.5</a>  Why do NumLock, CapsLock and ScrollLock interfere with
     ClickToFocus and/or my mouse bindings?

A: Because they are treated as modifiers.  You can use the
   IgnoreModifiers command to turn individual modifiers off for
   bindings.  With XFree86 and fvwm version 2.4.0 or above, the
   right command is

     IgnoreModifiers L25

   If you changed your modifiers manually or are using a different
   X server use the 'xmodmap' command to find out which modifiers
   correspond to the keys you want to switch off.

   This command creates a lot of extra network traffic, depending
   on your CPU, network connection, the number of Key, Mouse or
   PointerKey commands in your configuration file and the number
   of modifiers you want to ignore.  If you do not have a
   lightning fast machine or very few bindings you should not
   ignore more than two modifiers.  So do not ignore scroll-lock
   if you have no problem with it.

   A better way to solve this problem is to modify the keyboard
   mapping of your X server.  The commands

     xmodmap -e &quot;clear Lock&quot;
     xmodmap -e &quot;clear Mod2&quot;
     xmodmap -e &quot;clear Mod5&quot;

   remove the CapsLock, NumLock and ScrollLock from the keyboard
   map.  Pressing these keys has no effect then.  To re-add them
   try this:

     xmodmap -e &quot;add Lock = Caps_Lock&quot;
     xmodmap -e &quot;add Mod2 = Num_Lock&quot;
     xmodmap -e &quot;add Mod5 = Scroll_Lock&quot;

   Fvwm has to be restarted to use the changes made by
   xmodmap.  Please refer to the man page of the xmodmap command
   for further details.  If you disable the CapsLock key in your
   keyboard map in this way, you can speed up fvwm a bit by
   removing the Lock modifier from the list of ignored modifiers:

     IgnoreModifiers


   Since we all occasionally press NumLock or ScrollLock, it makes
   sense to redefine some main bindings to work with any modifiers.
   I.e. consider to replace something like this in your configuration:

     Mouse 1 R N Menu MenuFvwmRoot

   with this:

     Mouse 1 R A Menu MenuFvwmRoot

----------------------------------------------------------------------

<a name="5.6"></a><a href="#toc_5.6">5.6</a>  Menus with gradient backgrounds flicker or are very slow.

A: The flickering is caused by fvwm constantly redrawing the menus
   when a sub menu pops up or down.  One way to help this is to use
   a X server with backing storage (XFree86 has backing storage
   support, I don't know about other servers but I guess that any
   decent X server has it).  If your Xserver is started with the
   -bs option, remove it.  If not try the -wm option, for example:

     startx -- -wm

   You may have to adapt this example to your system (e.g. if you
   use xinit to start X).

   If that doesn't help, either because your X server does not have
   backing storage or because system resources are limited, make
   sure sub menus do not overlap the parent menu:

     MenuStyle &lt;stylename&gt; PopupOffset 1 100

   Unfortunately this does not work properly with the fvwm
   menu style.

   For the speed problem both suggestions above might help too.
   Another thing to try is to turn hilighting of the active menu
   item other than by foreground color off.  Put these lines in your
   fvwm/config after the menu styles have been defined:

     MenuStyle &lt;stylename&gt; Hilight3DOff, HilightBackOff
     MenuStyle &lt;Stylename&gt; ActiveFore &lt;preferred color&gt;

----------------------------------------------------------------------

<a name="5.7"></a><a href="#toc_5.7">5.7</a>  Why won't the StartIconic style work with {Netscape, etc.}?

A: The application won't allow it.  This has only been observed with
   Netscape.  When Netscape starts up, fvwm starts the main window in
   the iconic state.  Netscape immediately issues another MapRequest,
   to which the window manager must respond by de-iconifying the
   window, according to the ICCCM rules.  (Netscape can be persuaded
   to start iconic, however, by invoking it with the -iconic command
   line flag.)

----------------------------------------------------------------------

<a name="5.8"></a><a href="#toc_5.8">5.8</a>  How do I capture the output (e.g. errors) of fvwm?

A: Errors are reported to the standard error file.  You can redirect
   standard error to a file when fvwm is started: &quot;fvwm 2&gt;
   fvwm-errors&quot;. X sessions started by xdm often redirect errors to a
   file named &quot;.xsession-errors&quot;.

   Alternatively, FvwmConsole or &quot;FvwmForm FvwmForm-Talk&quot; modules
   will display error messages.

----------------------------------------------------------------------

<a name="5.9"></a><a href="#toc_5.9">5.9</a>  I try to run some program under fvwm, but it dies with an X11
     error like BadAccess.  The same program works just fine under MWM
     or OLWM.  What's going on?

A: The error message usually looks something like this:

        X Error of failed request:  BadAccess (attempt to access private
        resource denied)
         Major opcode of failed request:  28 (X_GrabButton)
         Serial number of failed request:  1595
         Current serial number in output stream:  1596

   Well, this is telling you that there is a conflict in key/button
   assignments.  In your config you have bound some key/button that
   this program really wants to bind to an action, but it can't since
   fvwm has already done so (but you weren't doing it in the rc file
   for your previous window manager).  Figure out what the offending
   key binding is and remove it from your fvwm/config, or temporarily
   via &quot;FvwmForm FvwmForm-Talk&quot; by removing the fvwm binding (see the
   man page for the Key &amp; Mouse commands).

----------------------------------------------------------------------

<a name="5.10"></a><a href="#toc_5.10">5.10</a>  Every time I update my install, my currently running fvwm
      session dies.  Why is that?

A: Many OSes swap the program from memory via the image on the disk,
   and if you overwrite it, and then the current one tries to swap
   something back into memory before you restart, it'll core dump.  To
   avoid this, rename your old executables or move them to some other
   directory.  The 'mv' command preserves the inode so it won't
   core dump, but then when you restart fvwm it'll pick up the new
   copy.

----------------------------------------------------------------------

<a name="5.11"></a><a href="#toc_5.11">5.11</a>  After I restart fvwm certain windows or icons raise above
      all other windows and cannot be lowered by any means.  One
      example are the shortcuts of KFM (the KDE file manager).
      What can I do about that?

A: Some applications use so called 'override redirect' windows that
   are not (and cannot be) managed by the window manager.  By
   convention as defined in the ICCCM, such windows must only be
   displayed for a very short time.  KFM and possibly other
   applications ignore this convention and use permanent 'override
   redirect' windows, e.g. the KFM shortcuts.  Fvwm can not easily
   detect these windows when it restarts and places the windows
   managed by fvwm below them.

   However, since fvwm version 2.3.8 there is a command that will
   help you, although it might cause trouble with other applications
   using 'override redirect' windows.  We can't make any promises
   since KFM is violating the conventions and the applications may
   violate them in different ways.

   Now the command.  Put this anywhere in your config file:

     BugOpts RaiseOverUnmanaged on

----------------------------------------------------------------------

<a name="5.12"></a><a href="#toc_5.12">5.12</a>  The StartsOnPage style does not work for me.  Why?

A: Many applications request a specific position where they want to
   appear (the so called 'program specified position').  Unless fvwm
   is told explicitly to ignore this, the program specified position
   overrides the StartsOnPage style.  Use this line in your
   configuration file:

     Style * NoPPosition

----------------------------------------------------------------------

<a name="5.13"></a><a href="#toc_5.13">5.13</a>  Some modules can not be started when I restart fvwm.

A: You may see the following error message on the console:

     [fvwm][PositiveWrite]: &lt;&lt;ERROR&gt;&gt; Failed to read descriptor:
     - data available=N
     - terminate signal=N

   It means that fvwm has given up waiting for one of its modules to
   reply, and so has killed it.  The length of the timeout is a
   configuration parameter - try adding

     ModuleTimeout 10

   to your config file.  The units are in seconds and the default
   value is 5.

   This problem will only occur on slow machines or high system load
   (many open windows).


----------------------------------------------------------------------

<a name="5.14"></a><a href="#toc_5.14">5.14</a>  I'm running Rational Rose and fvwm ignores its windows.

A: This problem might occur on other applications besides the one
   mentioned.

   The symptoms as reported by Raymond Toy are:

     I've been using fvwm for ages and it's always worked for me just
     fine.  However, I've started using Rational Rose for Solaris.  fvwm
     seems to get completely confused.

     o Fvwm doesn't draw any frames around the Rose window like it
       does for all other windows (except for those I explicit said
       not to).

     o The Rose window is always on top.  Nothing I do can bring
       another window above the Rose window.

     o Using fvwm's identify window module shows nothing.  No identify
       window pops up showing the window info.

     o Focus sometimes seems to be lost.  (I have focus follows
       mouse).  I have to move the mouse out of the window and back in
       to get focus. Sometimes I also have to click in the window to
       get focus.

     The annoying thing is that this all seems to work with CDE and
     dtwm. I don't want to have to switch to dtwm so any hints or
     pointers on where to look to get fvwm to understand this window
     would help me a lot.


   Heres what we found out:

   Rational Rose uses software from Mainsoft that lets MS Windows
   applications be recompiled to run on UNIX.

   There are 2 Mainsoft Knowledgebase pages that relate to UNIX
   window managers:

        <a href="http://www.mainsoft.com/kb_mainwin/kbmw0027.html">http://www.mainsoft.com/kb_mainwin/kbmw0027.html</a>
        <a href="http://dev.mainsoft.com/Default.aspx?tabid=58">http://dev.mainsoft.com/Default.aspx?tabid=58</a> [KBMW0034]

   These pages suggest that you export MWWM=allwm or MWWM=MWM before
   starting the application. The first page is missing, but can be
   found using <a href="http://web.archive.org.">http://web.archive.org.</a>

   Raymond reports:

     This works just fine!   Setting MWWM=allwm, Rose  comes
     up like a normal X app where  the WM draws the borders.
     With MWWM=MWM, it works ok too except that for the main
     window,  no borders are drawn  by the WM and Rose draws
     its own  borders (I  have  fvwm respecting   MWM decor
     hints).  (This   is     correct  as mentioned by    the
     Knowledgebase pages above.)   I don't  recall what Rose
     looks like with dtwm, but I suspect it's quite close to
     all MWWM=MWM.

   Next we had Klaus Zeitler report that the Rational Rose official
   startup script is explicitly setting ALLWM to nothing.  This makes
   it more difficult for an individual user to set this variable.
   If you can, you can just modify the script, otherwise, your other
   alternative is to copy the script somewhere where you can modify it
   and run it from there.

----------------------------------------------------------------------

<a name="5.15"></a><a href="#toc_5.15">5.15</a>  Although I use the WindowListSkip style for my modules they
      still show up in FvwmIconMan, FvwmWinList etc.

A: Make sure you have

     *FvwmIconMan: UseWinList true

   in your config file.  If that does not help, the modules you are
   using may not match the fvwm executable.  Recompile and reinstall
   everything and the problem should go away.

----------------------------------------------------------------------

<a name="5.16"></a><a href="#toc_5.16">5.16</a>  When I Maximize an application, sometimes I get gaps around
      the edges, and other times I don't.  What's going on?

A: The ICCCM specification allows applications to specify certain
   properties the window manager should honor, such as aspect
   ratio (PAspect) or increments to be resized in (PResizeInc).  Of
   course, sometimes these properties won't perfectly match the
   size of your desktop (or ewmh struts), if that should happen,
   you will get gaps.

   In general, the application will have a good reason for doing
   this (for example, a terminal window may not want to have only
   part of a column visible), but you can make fvwm ignore the
   hints with

     Style * ResizeHintOverride

======================================================================
<a name="6."></a>                          <a href="#toc_6.">6</a> - Miscellaneous
======================================================================

<a name="6.1"></a><a href="#toc_6.1">6.1</a>  What exactly is the difference between a DESK, a PAGE, and the
     SCREEN?

A: Our naming convention is sometimes a source of confusion, and when
   discussing problems and the like it's good to maintain a consistent
   meaning.  To illustrate how features of fvwm should be referred to
   - fvwm has multiple disjoint DESKTOPS, each of which is comprised
   of M by N PAGES, which are each the size of the physical SCREEN.
   The physical SCREEN acts as a viewport over one of the PAGES of the
   current DESK.  Here's a picture to clarify (also, take a look at
   the FvwmPager module):

             Desk 0                     Desk 1
     +----------+----------+    +----------+----------+
     |          |          |    |          |          |
     | Page 0 0 | Page 1 0 |    |          |          |
     |          |          |    |          |          |
     |          |          |    |          |          |
     +----------+----------+    +----------+----------+
     |+--------+|          |    |          |          |
     ||Page 0 1|| Page 1 1 |    |          |          |
     ||        ||          |    |          |          |
     |+--------+|          |    |          |          |
     +----------+----------+    +----------+----------+

   It shows two 2 x 2 DESKTOPS.  If the current DESK were number 0,
   and the current PAGE were 0 1, the SCREEN would show only the
   windows located there, plus any sticky ones.

   Desktops are numbered consecutively, beginning with 0.  The user is
   not responsible for creating new desktops, those details are
   handled inside fvwm.  To display the different desktops, the user
   can configure key bindings that determine which desktop is
   displayed.  For example, to have the combinations Meta-1 to Meta-4
   display desktop numbers 0 to 3, one would add this to her config:

     Key 1 A M GotoDesk 0
     Key 2 A M GotoDesk 1
     Key 3 A M GotoDesk 2
     Key 4 A M GotoDesk 3

   The same can be done for pages.  For example, if each desktop has
   a size of 2 by to pages you could bind Meta-F1 to Meta-F4 to
   flip pages:

     DeskTopSize 2x2
     Key F1 A M GotoPage 0 0
     Key F2 A M GotoPage 1 0
     Key F3 A M GotoPage 0 1
     Key F4 A M GotoPage 1 1

   It is also a good idea to create a pager that displays several
   desktops, side by side.  This command displays the first 4
   desktops:

     Module FvwmPager 0 3

   Or if you prefer to see only the current desktop in the pager:

     Module FvwmPager * *

----------------------------------------------------------------------

<a name="6.2"></a><a href="#toc_6.2">6.2</a>  I'd really like {OpenWindows, NeXT, Win95, Mac, etc} look and
     feel.  Are you going to support that?

A: This is not our primary mission, but we think fvwm does a pretty
   good job of producing these appearances.

   You may want to take a look at the
        <a href="http://fvwm-themes.sourceforge.net/">http://fvwm-themes.sourceforge.net/</a>
   package.

----------------------------------------------------------------------

<a name="6.3"></a><a href="#toc_6.3">6.3</a>  Where can I get more XPMs for icons?

A: If you want more color icons, grab the ones out of the ctwm
   distribution (also at ftp.x.org) which has a lot of nice ones.  You
   can also find more in other distributions at ftp.x.org, and at
   <a href="http://www.sct.gu.edu.au/~anthony/icons/">http://www.sct.gu.edu.au/~anthony/icons/</a> (which has a lot, I
   believe).

   Icons used to be distributed along with fvwm.  Now there is a basic
   set of icons available at the fvwm web site.  You might find some
   links at the fvwm web site to other sources of icons.

   You may want to take a look at the
        <a href="http://wm-icons.sourceforge.net/">http://wm-icons.sourceforge.net/</a>
   package.

----------------------------------------------------------------------

<a name="6.4"></a><a href="#toc_6.4">6.4</a>  Linux XF86 virtual screen size &amp; fvwm interaction...

A: Turn off the Linux Virtual Screen stuff in your XF86Config file if
   you don't like it.  The XFree86 virtual screen feature and hardware
   panning support in certain video cards is a pretty useless kludge
   when you're using a window manager that implements virtual
   desktops.

----------------------------------------------------------------------

<a name="6.5"></a><a href="#toc_6.5">6.5</a>  I know this question doesn't have to do with fvwm, but what
     happened to to rxvt and rclock which Rob Nation used to support?
     Where can I find them now?

A: The official home for rxvt is:

     <a href="http://www.rxvt.org/">http://www.rxvt.org/</a>

   and rclock can be found in that rxvt distribution as well.

----------------------------------------------------------------------

<a name="6.6"></a><a href="#toc_6.6">6.6</a>  How do I set the background with fvwm?

A: Setting the background image is not really part of the window
   manager.  If you are using one of the Linux distributions, most
   likely, some part of the distribution is setting the background for
   you.

   There is a program shipped with fvwm (fvwm-root, previously known
   as xpmroot) that you can use to set the background to an XPM or PNG
   image.  Other programs like &quot;xv&quot;, &quot;xli&quot;, &quot;xloadimage&quot;, &quot;display&quot;,
   &quot;feh&quot; and &quot;Esetroot&quot;, may be used too, they support some image
   formats that fvwm-root does not.

   If you just want a static image on your background, you might
   invoke one of these programs from your .xsession or .xinitrc file.
   You can also invoke one of these programs from the StartFunction in
   your config.

   The fvwm module FvwmBacker can be used to change the background
   depending on the desk you are currently on by calling an external
   program.  One big disadvantage of external programs is that
   changing the background on the fly can be pretty slow.  FvwmBacker
   can use the image defined in a colorset and cached by fvwm for fast
   background changing.  For example:

     Colorset 10 TiledPixmap foo.xpm
     Colorset 11 Pixmap bar.png
     FvwmBacker: Command (Desk *, Page * 0) Colorset 10
     FvwmBacker: Command (Desk *, Page * 1) Colorset 11

   However, fvwm can handle only xpm, xbm and png images.  Other
   formats must be converted before they can be used in fvwm.

   If you want to set a different background per screen (i.e., you're
   using Xinerama), then the program &quot;Nitrogen&quot; can be used to do
   that.  See:  <a href="http://projects.l3ib.org/nitrogen/">http://projects.l3ib.org/nitrogen/</a>

----------------------------------------------------------------------

<a name="6.7"></a><a href="#toc_6.7">6.7</a>  When I use Fvwm, my XYZ isn't the right color.  Whats wrong?

A: Under this heading we've had questions about FvwmForm being all
   white, icons not displaying and messages about being unable to
   allocate colors.

   Older hardware uses something called 8 bit color.  You can also
   mis-configure newer hardware so that it's only using 8 bit color.
   When you use 8 bit color, your display can only have 256 colors on
   it at once.

   This is explained in excruciating detail in the
        <a href="http://www.sunhelp.org/faq/FrameBuffer.html">http://www.sunhelp.org/faq/FrameBuffer.html</a>

   If your display can support more than 256 colors, that's the way to
   go.  Look up the documentation for your X server.  You may want to
   start with &quot;man X&quot;.

   If you are stuck with 8 bit color, fvwm can help.  In the 2.2.x
   releases, you can use the &quot;ColorLimit&quot; command to reduce the number
   of colors Fvwm uses in icons.  In the 2.3.x releases and later,
   ColorLimiting is automatic, but you still might want to use this
   command to further reduce color use.

   Other things you may want to do:

   - Always run Netscape with the &quot;-install&quot; argument.

   - If you use an image on your screen background, reduce the number
     of colors it uses.  For xv add the &quot;-nc nn&quot; argument.  For
     xli use the &quot;-colors nn&quot; argument.

   - Don't use color gradients.

   - Some applications are color hungry.  Beware of anything TK based,
     and FrameMaker in its default setting.

   If you still have problems after this, try the fvwm mailing list.

----------------------------------------------------------------------

<a name="6.8"></a><a href="#toc_6.8">6.8</a>  I just got a mouse with 57 buttons.  How do I make Fvwm use them?

A: Okay, we know you don't have 57 buttons, but we've seen reports
   of up to 7 so far.  Starting with Fvwm 2.4.0 Fvwm supports all
   five mouse buttons that X officially supports, and since
   2.5.11, up to 9 buttons are supported by default.

   2.5.11 and later:

     To use more than 9 buttons (up to 31), modify the file
     libs/defaults.h.  Replace

       #define NUMBER_OF_EXTENDED_MOUSE_BUTTONS      9

     with

       #define NUMBER_OF_EXTENDED_MOUSE_BUTTONS      15

   2.4.10 to 2.5.10:

     To use more than 5 buttons, modify the file libs/defaults.h.
     Replace

       #define NUMBER_OF_MOUSE_BUTTONS               5

     with

       #define NUMBER_OF_MOUSE_BUTTONS               7

   Then recompile and reinstall fvwm.  However, the buttons with
   numbers higher than 5 do not work as well as 1 to 5.  This is
   because X does not provide the necessary interface to handle more
   than 5 buttons in some functions.  This means that some
   functionality is not available with buttons 6 and higher.

   The maximum possible number you can use is 31.  Any higher value
   will probably not work and possibly even crash fvwm or its modules.

----------------------------------------------------------------------

<a name="6.9"></a><a href="#toc_6.9">6.9</a>  Why does fvwm change my X Cursor theme?

A: It doesn't.  There is a standard set of cursors that should
always be available to applications, such as crosshair, left_ptr,
arrow, pencil, and so on.  Your theme should provide each of these
cursors, but some don't.  When something (for example, an
application or fvwm) requests a cursor that your theme does not
provide, X falls back to the default.  If you are seeing fvwm
using cursors that do not match your theme, you should use
CursorStyle to change to a cursor that is available, or find a
more complete theme.  Note that fvwm does not control what cursors
your applications request.

======================================================================
<a name="7."></a>              <a href="#toc_7.">7</a> - Hints and Examples from the Developers
======================================================================

<a name="7.1"></a><a href="#toc_7.1">7.1</a>  An easy way to test new configurations.

   Did you know that you do not need to restart X or fvwm to see what
   most configuration commands do? There are several modules
   that allow you to issue fvwm commands at any time.  Among
   these are FvwmCommand, &quot;FvwmForm FvwmForm-Talk&quot; and FvwmConsole.
   Personally I use FvwmCommand and FvwmConsole.

   When you run FvwmConsole you get a shell like window where you can
   type configuration commands that are sent to fvwm.  Just add an
   entry to some menu that starts it:

     AddToMenu main_menu
      + &quot;FvwmConsole&quot; Module FvwmConsole

   Using FvwmCommand is a bit more tricky.  To use it you need to
   start a server in your config by adding this line:

     Module FvwmCommandS

   Make sure FvwmCommand is in your search path.  Now you can enter
   commands on the command line of your favorite shell:

     FvwmCommand &quot;MenuStyle * Font 6x9&quot;

   Note that you have to quote the command.  The advantage of
   FvwmCommand over FvwmConsole is that you can use your shell with
   all its features to run commands (command completion and history
   for example).  The disadvantage is that it is a bit slow since a
   new FvwmCommand has to be started for each command.

   Other related modules and commands are FvwmScript and PipeRead.

----------------------------------------------------------------------

<a name="7.2"></a><a href="#toc_7.2">7.2</a>  Using shell commands for configuration.

   Sometimes you might want to use the output of a shell command or
   script in your config.  For example you might need a menu that
   has all filenames in a certain directory as its entries.  You can
   use the PipeRead command and the FvwmCommand module.  I recommend
   using PipeRead since creating twenty menu items takes a
   considerable amount of time with FvwmCommand.

   Example from my config:

     # make the background menu
      DestroyFunc MakeBackgroundMenu
      AddToFunc MakeBackgroundMenu
      + I DestroyMenu BackgroundMenu
      + I AddToMenu BackgroundMenu Backgrounds Title
      + I PipeRead 'for i in `/bin/ls $HOME/.fvwm/backgrounds/*.bg.*`; \
            do echo -e AddToMenu BackgroundMenu `basename $i | sed -e \
            &quot;s/\.bg\..*$//&quot;` Function SetDefaultBackground $i; done'

     # set the default background
     DestroyFunc SetDefaultBackground
     AddToFunc SetDefaultBackground
      + I Exec echo -e $0 &gt; $HOME/.fvwm/background
      + I SetBackground

     # set a new background
     DestroyFunc SetBackground
     AddToFunc SetBackground
      + I Exec test -r $HOME/.fvwm/background &amp;&amp; xv -root -quit -viewonly \
            `cat $HOME/.fvwm/background|tr -d &quot;\n&quot;`

     # activate setting from last session and build the menu
     AddToFunc StartFunction
      + I SetBackground
      + I MakeBackgroundMenu


   The MakeBackgroundMenu function builds a menu that contains an item
   for every file that matches the pattern &quot;*.bg.*&quot; in the directory
   $HOME/.fvwm/backgrounds.  The suffix .bg.* is removed.  When I
   select an item the file is displayed in the background using
   xv. Furthermore the path and filename are stored in
   $HOME/.fvwm/background.  When I start my next fvwm session the
   filename is fetched from there so I get the background from my last
   session.

   I have an even more complex setup for color palettes.

----------------------------------------------------------------------

<a name="7.3"></a><a href="#toc_7.3">7.3</a>  How to start applications on a page or desk other than the
     current.

   Use the 'StartsOnDesk' or 'StartsOnPage' style in your config:

     Style Netscape* StartsOnPage 0 1

   or

     Style Netscape* StartsOnDesk 1

   Any window with a title that begins with 'Netscape' will be placed
   on page 0 1 (desk 1).  You will probably want to use these options
   too:

     Style * RecaptureHonorsStartsOnPage, CaptureHonorsStartsOnPage

   If you want to start applications on a different page in the
   background without switching to this page, use the 'SkipMapping'
   style:

     Style Netscape* StartsOnPage 0 1, SkipMapping

----------------------------------------------------------------------

<a name="7.4"></a><a href="#toc_7.4">7.4</a>  How to start applications on a page or desk other than the
     current without moving the viewport to the new page or desk.

   Use the SkipMapping style:

     Style Netscape* StartsOnPage 0 1, SkipMapping

----------------------------------------------------------------------

<a name="7.5"></a><a href="#toc_7.5">7.5</a>  A more efficient MWM menu style.

   Perhaps you have noticed that with the MWM menu style your sub
   menus are shown as soon as the pointer enters their menu items,
   even if you just want to scroll down the list.  You can prevent
   this with the 'PopupDelay' and 'PopupDelayed' options of the
   MenuStyle command:

     MenuStyle mwm
     MenuStyle PopupDelayed, PopupDelay 80

   The sub menu will be shown 80 milliseconds after the pointer enters
   the menu item.  You will hardly notice the delay.  Note that 80 ms
   is just long enough to move through the menu with auto repeat on my
   cursor keys.  You may have to experiment with this number to get it
   right.

----------------------------------------------------------------------

<a name="7.6"></a><a href="#toc_7.6">7.6</a>  Placing menus on the screen.

   Do you have to close windows or move the pointer all over the
   screen to find some part of the background where you can bring up
   your main menu (or any other root menu)?

   Then you should use a keyboard shortcut.  For example

     Key  space A M   Menu root c c main_menu

   in your config gives you the menu 'main_menu' in the center of the
   screen when you press Alt-space.  Or you might want a shortcut to
   the window menu:

     Key  space A SM  Menu root c c WindowMenu

   You can place menus anywhere you like, not just where the mouse
   pointer is.  Please read the section for the 'Menu' command in the
   man page.

----------------------------------------------------------------------

<a name="7.7"></a><a href="#toc_7.7">7.7</a>  Are you flipping pages by accident when moving the mouse close to
     the border of the screen?

   You can disable page flipping with the EdgeScroll command:

     EdgeScroll 0 0

   in your config turns it off.

----------------------------------------------------------------------

<a name="7.8"></a><a href="#toc_7.8">7.8</a>  Lining up your windows and icons.

   The SnapAttraction and SnapGrid commands really help to keep your
   desktop tidy.  With SnapAttraction windows (or icons or both) are
   'attracted' to each other.  When you drag a window (icon) and it
   comes close to another window (icon) it clings to it without a gap
   between the borders.  Put this command in your config:

     SnapAttraction 8 SameType

   This means windows cling to other windows if they get closer than
   8 pixels and icons cling to icons.  Or if you just want it for
   windows/icons use

     SnapAttraction 8 Windows

   or

     SnapAttraction 8 Icons

   Or if you want icons to cling to windows and vice versa:

     SnapAttraction 8 All


   The SnapGrid command is a big help too:

     SnapGrid 8

   in your config tells fvwm to use a grid of 8 pixels to place
   windows and icons.  Try it and see if you like it.

   Hint: It might be a good idea to use a divisor of your desktop
   width and height for SnapGrid.

----------------------------------------------------------------------

<a name="7.9"></a><a href="#toc_7.9">7.9</a>  Moving the mouse/focus/page with the keyboard.

   Try these key bindings for mouse movement:

     # shift-&lt;direction&gt; to move a few pixels
     Key   Left   A   S   CursorMove -1 0
     Key   Right  A   S   CursorMove +1 +0
     Key   Up     A   S   CursorMove +0 -1
     Key   Down   A   S   CursorMove +0 +1

     # shift-meta-&lt;direction&gt; to move 1/4 page
     Key   Left   A   SM  Scroll -25 +0
     Key   Right  A   SM  Scroll +25 +0
     Key   Up     A   SM  Scroll +0  -25
     Key   Down   A   SM  Scroll +0  +25

   or these to flip pages

     # shift-control-&lt;direction&gt; to move a full page
     Key   Left   A   SC  CursorMove -10 +0
     Key   Right  A   SC  CursorMove +10 +0
     Key   Up     A   SC  CursorMove +0  -10
     Key   Down   A   SC  CursorMove +0  +10

     # Alt-Fn to go to a specific page (like on the Linux console)
     Key F1 A M GotoPage 0 0
     Key F2 A M GotoPage 1 0
     Key F3 A M GotoPage 0 1
     Key F4 A M GotoPage 1 1

   or to change the focus to a window in a specific direction:

     # number keys on keypad to move the focus
     Key KP_1 A C Direction SouthWest (AcceptsFocus) Focus
     Key KP_2 A C Direction South (AcceptsFocus) Focus
     Key KP_3 A C Direction SouthEast (AcceptsFocus) Focus
     Key KP_4 A C Direction West (AcceptsFocus) Focus
     Key KP_6 A C Direction East (AcceptsFocus) Focus
     Key KP_7 A C Direction NorthWest (AcceptsFocus) Focus
     Key KP_8 A C Direction North (AcceptsFocus) Focus
     Key KP_9 A C Direction NorthEast (AcceptsFocus) Focus

----------------------------------------------------------------------

<a name="7.10"></a><a href="#toc_7.10">7.10</a>  The cat safe desktop ^_^

   If your cats keep stepping on your keyboard while you are brewing
   another cup of coffee, one of these hints may help:

     Use 'Style * MouseFocus' and move the mouse pointer over the
     background when you go away.

     If you can't do without your 'SloppyFocus' you can move the
     mouse pointer into a window that takes no keyboard input and
     give it the focus (e.g. FvwmButtons or a console message
     window).  A true fanatic creates a separate window with a picture
     of his cat for this ^_^

----------------------------------------------------------------------

<a name="7.11"></a><a href="#toc_7.11">7.11</a>  Lowering and moving windows.

   In some configurations moving a window with the middle mouse
   button lowers the window after moving it.  Lowering it before
   moving gives you a nice visual effect:

     Mouse  2 T A  Function MoveOrLower

     DestroyFunc MoveOrLower
     AddToFunc MoveOrLower
      + C   Lower
      + M   Lower
      + M   Move
      + D   Lower

----------------------------------------------------------------------

<a name="7.12"></a><a href="#toc_7.12">7.12</a>  Toggling windows on and off.

   It is often desirable to have a menu item or perhaps a button in
   FvwmButtons or FvwmWharf that launches an application when used
   the first time and closes it if used a second time.  Although it
   is not obvious how to do this, it is possible.  Let's assume you
   need a menu item that toggles an FvwmConsole window on and off.

   Then put the following lines in your config (for fvwm-2.5.11 or
   later):

     DestroyFync ToggleFvwmConsole
     AddToFunc ToggleFvwmConsole
     + I ToggleWindow FvwmConsole &quot;Module FvwmConsole&quot;

     # Application toggling function
     # First argument is the window name, second argument is the
     # command to start the application.
     DestroyFunc ToggleWindow
     AddToFunc ToggleWindow
     + I None ($$0, CirculateHit) $$1
     + I TestRc (Match) Break
     + I Next (currentpage, visible, !iconic, $$0, CirculateHit) Close
     + I TestRc (Match) Break
     + I Next ($$0, CirculateHit) Function MakeVisible

     # Helper function
     DestroyFunc MakeVisible
     AddToFunc MakeVisible
     + I MoveToDesk
     + I MoveToPage
     + I MoveToScreen
     + I Raise
     + I Iconify off
     + I WindowShade off

   To invoke the function, you can add it to a menu

     AddToMenu &lt;some menu&gt;
     + &quot;toggle FvwmConsole&quot; Function ToggleFvwmConsole

   Or if you prefer a button in the button bar:

     *FvwmButtons: (Action ToggleFvwmConsole)

   The lines with MoveToDesk, MoveToPage and Raise will bring the
   window to the top of the current page if it is not visible
   instead of closing it.  The generic function ToggleWindow can be
   reused to toggle all kinds of windows.

   If you want to toggle one specific window, e.g. an xterm, but
   still want to have other xterms that are not toggled, you must
   give the window an unique name:

     DestroyFunc RunXMessages
     AddToFunc RunXMessages
     + I Exec exec xterm -T XMessages -n XMessages \
         -e tail -f /var/adm/?* ~/.X.err

     DestroyFunc ToggleXMessages
     AddToFunc ToggleXMessages
     + I ToggleWindow XMessages RunXMessages

   Keep in mind that these functions simply check if a window with
   the specified name exists.  They will happily close manually
   opened windows or launch an application multiple times if the
   application is slow to start (e.g. like netscape).

   For fvwm-2.5.10 or earlier, these functions should work too:

     DestroyFunc ToggleFvwmConsole
     AddToFunc ToggleFvwmConsole
     + I None (FvwmConsole, CirculateHit) FvwmConsole
     + I Next (FvwmConsole, CirculateHit, CurrentPage, Visible) Close
     + I Next (FvwmConsole, CirculateHit) MoveToDesk
     + I Next (FvwmConsole, CirculateHit) MoveToPage
     + I Next (FvwmConsole, CirculateHit) Raise

     DestroyFunc ToggleXMessages
     AddToFunc ToggleXMessages
     + I None (XMessages, CirculateHit) Exec exec \
       xterm -T XMessages -n XMessages -e tail -f /var/adm/?* ~/.X.err
     + I Next (XMessages, CirculateHit) Close

----------------------------------------------------------------------

<a name="7.13"></a><a href="#toc_7.13">7.13</a>  Starting applications by clicking on an icon (also known as
      &quot;docking&quot; applications).

   Normally an icon represents a minimized application.  If you
   want to turn that around, and launch applications by clicking
   on icons we can't stop you.  Heres a way to do that using
   FvwmButtons:

     # FvwmButtons icon launcher:
     DestroyFunc Launcher
     AddToFunc Launcher
     + I DestroyModuleConfig $0Launch: *
     + I *$0Launch: Geometry 64x68
     + I *$0Launch: Columns 1
     + I *$0Launch: Rows    4
     + I *$0Launch: Frame   0
     + I *$0Launch: (1x3+0+0, Icon $1, Action (Mouse 1) `Exec $2`)
     + I *$0Launch: Pixmap none
     + I *$0Launch: (1x1+0+3, Font 9x15, Fore White, Back DarkBlue, \
                    Title $0, Action (Mouse 1) `Exec $2`)
     + I Style $0Launch HandleWidth 0, NoTitle
     + I Module FvwmButtons $3 $0Launch
     # Examples:
     Launcher RXVT xterm.xpm &quot;rxvt -bg black&quot; &quot;-g +0+0&quot;
     Launcher XV   xv.xpm    &quot;xv&quot;   &quot;-g +0+100&quot;

   Also, GNOME and KDE have desktop icon applications gmc and kfm,
   which enable this functionality.  These applications may be run
   under fvwm. Nautilus (version &gt;= 2) and kdesktop may be run under
   fvwm version 2.5.1 or better.

----------------------------------------------------------------------

<a name="7.14"></a><a href="#toc_7.14">7.14</a>  Positioning a window using arithmetic.

   This example shows how to center a window on the screen.  Note
   how is uses PipeRead and the shell construct $(()) in order to
   perform arithmetic.

     DestroyFunc CenterWindow
     AddToFunc   CenterWindow
     + I ThisWindow Piperead &quot;echo Move \
       +$(( $[vp.width]/2-$[w.width]/2 ))p \
       +$(( $[vp.height]/2-$[w.height]/2 ))p&quot;

   If you had a window named &quot;MyWindow&quot; you would center it using
   the command:

   Next (MyWindow) CenterWindow

   ThisWindow may be removed, it is only needed to avoid errors when
   CenterWindow is called without a window context.  (In which case
   see the Pick command.)

   With fvwm release 2.5.11, you can place windows in the center of
   the screen using &quot;Style X CenterPlacement&quot;.

   But with fvwm release 2.5.22 and greater CenterPlacement is
   deprecated over the use of PositionPlacement style which allows for
   not only centering windows, but positioning windows anywhere on the
   screen using the same arguments as the Move command.  But in terms of
   centering windows:

      Style MyWindow PositionPlacement Center

----------------------------------------------------------------------

<a name="7.15"></a><a href="#toc_7.15">7.15</a>  Hiding the mouse pointer.

   Some users don't like the mouse pointer getting in the way of
   what they are looking at.  You might want to search for and
   install the &quot;unclutter&quot; program.  Unclutter hides the mouse
   pointer after you haven't moved the mouse for a while.

   If you find unclutter causes the pointer to flash on and off
   or move around on its own, run unclutter with the -noevents
   argument.

----------------------------------------------------------------------

<a name="7.16"></a><a href="#toc_7.16">7.16</a>  Finding the mouse pointer.

   Sometimes its hard to see the mouse pointer.  Here is a way to
   find it:

     Key Super_L A A Exec xmessage -name &quot;SmallBlob&quot; -bg red \
       -fg white -nearmouse -timeout 1 'I am here!'
     Style SmallBlob UsePPosition, NoTitle, NoHandles, BorderWidth 10

----------------------------------------------------------------------

<a name="7.17"></a><a href="#toc_7.17">7.17</a>  Autohiding FvwmButtons or other windows.

   Some applications have a feature usually called &quot;autohiding&quot;
   which allows to withdraw a window to a location where it does
   not use precious desktop space.  It is possible to write some
   small functions in fvwm that can hide any window you like:

   fvwm-2.5.11 or later:

     # The autohiding functions
     DestroyFunc autohide
     AddToFunc autohide
     + I ThisWindow ($0) Deschedule $[w.id]
     + I ThisWindow ($0) KeepRc ThisWindow (shaded) WindowShade off
     + I TestRc (!Match) All ($0, !shaded) autohide_hide $1 $2

     DestroyFunc autohide_hide
     AddToFunc autohide_hide
     + I Schedule $0 $[w.id] WindowShade $1
     + I Schedule $0 $[w.id] Deschedule $[w.id]

     # Start FvwmAuto
     AddToFunc StartFunction
     + I Module FvwmAuto 1 -menter enter_handler

     # Add the windows you want to autohide
     DestroyFunc enter_handler
     AddToFunc enter_handler
     + I autohide FvwmButtons 500 S
     #            ^           ^   ^
     #            |           |   |___  Shade direction (optional)
     #            |           |_______  Hide delay (milliseconds)
     #            |___________________  Unique window name/resource

   Simply add any windows you like to the enter_handler function
   as in the example above.  The autohide function is called with
   two or three parameters.  The first one is the window's name or
   class, which must be unique.  The second is the delay in
   milliseconds before the window is hidden after the pointer
   leaves it, and the last - optional - one indicates the
   direction in which it is hidden (N, S, E, W, NW, NE, SW or SE).

   You can find a slightly more complicated version below.  The
   difference is that showing the window does not happen
   immediately, but can be delayed too.

   fvwm-2.5.11 or later:

     DestroyFunc autohide
     AddToFunc autohide
     + I ThisWindow ($0) Deschedule $[w.id]
     + I TestRc (!Match) Deschedule -$[w.id]
     + I ThisWindow ($0) KeepRc ThisWindow (shaded) \
         autohide_show $1 $3
     + I TestRc (!Match) All ($0, !shaded) autohide_hide $2 $3

     DestroyFunc autohide_show
     AddToFunc autohide_show
     + I Schedule $0 -$[w.id] WindowShade $1 off
     + I Schedule $0 -$[w.id] Deschedule $[w.id]
     + I Schedule $0 -$[w.id] Deschedule -$[w.id]

     DestroyFunc autohide_hide
     AddToFunc autohide_hide
     + I Schedule $0 $[w.id] WindowShade $1 on
     + I Schedule $0 $[w.id] Deschedule $[w.id]
     + I Schedule $0 $[w.id] Deschedule -$[w.id]

     AddToFunc StartFunction
     + I Module FvwmAuto 1 -menter enter_handler

     DestroyFunc enter_handler
     AddToFunc enter_handler
     + I autohide FvwmButtons 250 500 S
     #            ^           ^   ^   ^
     #            |           |   |   |__  Shade direction (optional)
     #            |           |   |______  Hide delay
     #            |           |__________  Show delay
     #            |______________________  Unique window name/resource

   These functions work too in 2.5.8 to 2.5.10, but you may have
   to remove the KeepRc command from the autohide function in both
   versions.

----------------------------------------------------------------------

<a name="7.18"></a><a href="#toc_7.18">7.18</a>  Using application screenshots as icon or mini icon
      thumbnails.

   With a bit of scripting magic, fvwm can take a screenshot of an
   application window when it's iconified, resize it, and use it as
   the application's icon.  However, there are some applications that
   can do it on their own, which is the recommended method.

   With xterm, you can use the +ai (active icon) option on the command
   line:

     $ xterm +ai

   There is a live-icon elisp package for XEmacs.  Put this in your
   XEmacs configuration file:

     (load-library &quot;live-icon&quot;)
     ; Control size, same as max icon size, uncomment if you want
     ; this feature.
     ;(setq live-icon-max-height 48)
     ;(setq live-icon-max-width 48)

   Make sure you are not using the style IconOverride for these
   applications.  It disables the use of active icons.  There may be
   other applications with similar features.


   Assuming you want application thumbnails as icons provided by fvwm,
   you need fvwm 2.5.8 or later, as this solution requires the
   WindowStyle command, and you should have the ImageMagick utilities
   available in your $PATH &lt;URL:<a href="http://www.imagemagick.org/&gt;.">http://www.imagemagick.org/&gt;.</a>

   The function below provides a Replacement for the Iconify command
   called Thumbnail, which you can use in your bindings and raises
   each window, takes a screenshot and attempts to set the screenshot
   as the window's Icon.  Taking a screenshot may take a couple of
   seconds.  The window is iconified immediately, but the new
   thumbnail is activated when the screenshot is ready.

   Note that a screenshot can only be made reliably from the visible
   parts of a window.  So if the window is halfway off screen, on a
   different desk, or buried beneath other windows, the thumbnail may
   be smaller than expected or be empty in the hidden parts.  There is
   no way to prevent this.

   The same solution should work for mini icons.  Just replace the
   word &quot;icon&quot; with &quot;miniicon&quot; everywhere.

     DestroyFunc Thumbnail
     AddToFunc Thumbnail
     + I Raise
     + I ThisWindow (!Shaded, Iconifiable, !Iconic) PipeRead \
         &quot;xwd -silent -id $[w.id] | convert -scale 64 -frame 1x1 \
         -mattecolor black -quality 0 xwd:- \
         png:$[FVWM_USERDIR]/icon.tmp.$[w.id].png \
         &amp;&amp; echo WindowStyle IconOverride, \
         Icon $[FVWM_USERDIR]/icon.tmp.$[w.id].png \
         || echo Nop&quot;
     + I Iconify

   You can use FvwmEvent to remove the Icons when each window is
   returned to its non Iconic state.

     DestroyFunc DeThumbnail
     AddToFunc DeThumbnail
     + I Exec rm -f $[FVWM_USERDIR]/icon.tmp.$[w.id].png
     + I DestroyWindowStyle

     *FvwmEvent: deiconify DeThumbnail

     AddToFunc StartFunction I Module FvwmEvent

   If you cannot use DestroyWindowStyle as you require it for some
   other purpose, you can save the window's current Icon, and restore
   it when required, this solution requires fvwm 2.5.9 or later.

   The Thumbnail function should look like this:

     DestroyFunc Thumbnail
     AddToFunc Thumbnail
     + I Raise
     + I SetEnv Icon-$[w.id] $[w.iconfile]
     + I ThisWindow (!Shaded, Iconifiable, !Iconic) PipeRead \
         &quot;xwd -silent -id $[w.id] | convert -scale 64 -frame 1x1 \
         -mattecolor black -quality 0 xwd:- \
         png:$[FVWM_USERDIR]/icon.tmp.$[w.id].png \
         &amp;&amp; echo WindowStyle IconOverride, \
         Icon $[FVWM_USERDIR]/icon.tmp.$[w.id].png \
         || echo Nop&quot;
     + I Iconify

   And then the Icon is restored with this function:

     DestroyFunc DeThumbnail
     AddToFunc DeThumbnail
     + I PipeRead &quot;echo WindowStyle Icon \\$\\[Icon-$[w.id]\\]&quot;
     + I UnsetEnv Icon-$[w.id]
     + I Exec rm -f $[FVWM_USERDIR]/icon.tmp.$[w.id].png

   These Icons can also survive a Restart by adding this check to your
   StartFunction:

     AddToFunc StartFunction I Test (Restart) All (Iconic) \
       Test (f $[FVWM_USERDIR]/icon.tmp.$[w.id].png) WindowStyle \
       IconOverride, Icon $[FVWM_USERDIR]/icon.tmp.$[w.id].png

   You can also check for any remaining icons left behind and remove
   them in your ExitFunction:

     DestroyFunc ExitFunction
     AddToFunc ExitFunction I Test (!ToRestart) \
       Exec rm -f $[FVWM_USERDIR]/icon.tmp.*

   The same solution should work for mini icons.  Just replace the
   word &quot;icon&quot; with &quot;miniicon&quot; everywhere.

----------------------------------------------------------------------
</pre>


<?php decoration_window_end(); ?>
