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
$title          = "FVWM - Man page - FvwmTabs";
$heading        = "FVWM - Man page - FvwmTabs";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_unstable_FvwmTabs";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmTabs in unstable branch (2.5.32)"); ?>

<div class="article" lang="en"><div class="titlepage"><div><div><h1 class="title"><a name="id2562462"></a>FvwmTabs</h1></div><div><div class="author"><h3 class="author"></h3></div></div></div><a href="#toc">This page contents</a> - <a href="<?php echo conv_link_target('./');?>">Return to main index</a><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="name"></a>1. Name</h2></div></div></div><p><span class="emphasis"><em>FvwmTabs</em></span> is a generic tabbing module for the fvwm window manager.</p></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="synopsis"></a>2. Synopsis</h2></div></div></div><p><span class="emphasis"><em>FvwmTabs</em></span> is spawned by fvwm, so no command line invocation is possible.</p></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="description"></a>3. Description</h2></div></div></div><p>The <span class="emphasis"><em>FvwmTabs</em></span> module is capable of swallowing any fvwm window &amp; treating it as a tab in a <span class="emphasis"><em>tab-manager</em></span> window. A tab-manager is sometimes called a <span class="emphasis"><em>tabber</em></span>. Each tab-manager can store any number of windows, each in its own <span class="emphasis"><em>tab</em></span>. The number of tab-managers is limited only by system resources. Tab-managers can even be nested/swallowed within other tab-managers. (ie. a tab-manager can be added as an individual tab to another tab-manager.)</p><p>Here is a screenshot of an FvwmTabs tab-manager with an rxvt window selected. Note the buttons at the top which allow switching between applications.</p><img src="../../../doc/unstable/modules/images/FvwmTabs/screenshot.png"></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="invocation"></a>4. Invocation</h2></div></div></div><p><span class="emphasis"><em>FvwmTabs</em></span> can be invoked by inserting the line:</p><pre class="programlisting">
<a href="<?php echo conv_link_target('fvwm.php');?>#Module">Module</a> FvwmTabs
</pre><p>in your .fvwmrc file. This can be placed on a line by itself, if <span class="emphasis"><em>FvwmTabs</em></span> is to be spawned during fvwm's initialization, or can be bound to a menu, mouse button or keystroke to invoke it later.</p></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="dependencies"></a>5. Installing Dependencies</h2></div></div></div><p><span class="emphasis"><em>FvwmTabs</em></span> requires 2 CPAN modules (that are NOT distributed with fvwm) to be installed on your system. They are <span class="emphasis"><em>Tk</em></span> and <span class="emphasis"><em>X11::Protocol</em></span>.</p><p>They are available at: <a class="ulink" href="" target="_top">http://search.cpan.org/CPAN/authors/id/N/NI/NI-S/Tk-804.027.tar.gz</a> and <a class="ulink" href="" target="_top">http://search.cpan.org/~smccam/X11-Protocol-0.56/</a>.</p><p>To install either package:</p><pre class="programlisting">
tar zxvf $name.tar.gz ; cd $name ; perl Makefile.PL ; make install
</pre><p><span class="emphasis"><em>FvwmTabs</em></span> will tell you if you do not have these packages installed when you (try to) start it.</p></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="options"></a>6. Configuration Options</h2></div></div></div><p><span class="emphasis"><em>FvwmTabs</em></span> reads the same config file as fvwm when it starts up.</p><p>The following options are recognised by <span class="emphasis"><em>FvwmTabs</em></span>:</p><div class="variablelist"><dl><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_activeFG"></a><font class="fvwmopt">activeFG</font> <span class="emphasis"><em>color</em></span></span></dt><dd>The text color of the button for the visible tab. The default color is yellow.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_activeBG"></a><font class="fvwmopt">activeBG</font> <span class="emphasis"><em>color</em></span></span></dt><dd>The backgound color of the button for the visible tab. The default color is MidnightBlue.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_inactiveFG"></a><font class="fvwmopt">inactiveFG</font> <span class="emphasis"><em>color</em></span></span></dt><dd>The text color of the buttons for the invisible tabs. The default color is antiquewhite.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_inactiveBG"></a><font class="fvwmopt">inactiveBG</font> <span class="emphasis"><em>color</em></span></span></dt><dd>The backgound color of the buttons for the invisible tabs. The default color is royalblue.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_activeRelief"></a><font class="fvwmopt">activeRelief</font> <span class="emphasis"><em>style</em></span></span></dt><dd>The relief style to use for active buttons. <span class="emphasis"><em>style</em></span> can be either <span class="emphasis"><em>raised</em></span>, <span class="emphasis"><em>flat</em></span> or <span class="emphasis"><em>sunken</em></span>. The default style is <span class="emphasis"><em>sunken</em></span>.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_inactiveRelief"></a><font class="fvwmopt">inactiveRelief</font> <span class="emphasis"><em>style</em></span></span></dt><dd>The relief style to use for inactive buttons. <span class="emphasis"><em>style</em></span> can be either <span class="emphasis"><em>raised</em></span>, <span class="emphasis"><em>flat</em></span> or <span class="emphasis"><em>sunken</em></span>. The default style is <span class="emphasis"><em>flat</em></span>.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_buttonYPadding"></a><font class="fvwmopt">buttonYPadding</font> <span class="emphasis"><em>pixels</em></span></span></dt><dd>How much padding to use around top and bottom of tab buttons. The default value is <span class="emphasis"><em>3</em></span> pixels.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_pollRate"></a><font class="fvwmopt">pollRate</font> <span class="emphasis"><em>ms</em></span></span></dt><dd> Specifies how often to check for X events. <span class="emphasis"><em>ms</em></span> is time in milliseconds. The default value, <span class="emphasis"><em>250</em></span>, should be fine for most users. If you are on a very slow machine you may wish to increase this.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_buttonFont"></a><font class="fvwmopt">buttonFont</font> <span class="emphasis"><em>font</em></span></span></dt><dd> The font to use on the tab buttons. The default font is <span class="emphasis"><em>Helvetica -12 bold</em></span>.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_titleFont"></a><font class="fvwmopt">titleFont</font> <span class="emphasis"><em>font</em></span></span></dt><dd> The font to use on the titlebar. The default font is <span class="emphasis"><em>Helvetica -12</em></span>.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_menuFont"></a><font class="fvwmopt">menuFont</font> <span class="emphasis"><em>font</em></span></span></dt><dd> The font to use on the menus. The default font is <span class="emphasis"><em>Helvetica -12</em></span>.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_fontSelector"></a><font class="fvwmopt">fontSelector</font> <span class="emphasis"><em>fontProgram</em></span></span></dt><dd> The external font chooser program to launch when dynamically changing fonts. The default <span class="emphasis"><em>fontProgram</em></span> is <span class="emphasis"><em>gfontsel --print -f "%f"</em></span>. Anti-gnome users might try <span class="emphasis"><em>xfontsel -print -pattern "%f"</em></span>. If set to <span class="emphasis"><em>none</em></span>, no font menu options will appear.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_autoSwallowClass"></a><font class="fvwmopt">autoSwallowClass</font> <span class="emphasis"><em>className</em></span> [<span class="emphasis"><em>tabManagerId</em></span>], ...</span></dt><dd></dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_autoSwallowResource"></a><font class="fvwmopt">autoSwallowResource</font> <span class="emphasis"><em>resourceName</em></span> [<span class="emphasis"><em>tabManagerId</em></span>], ...</span></dt><dd></dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_autoSwallowName"></a><font class="fvwmopt">autoSwallowName</font> <span class="emphasis"><em>name</em></span> [<span class="emphasis"><em>tabManagerId</em></span>], ...</span></dt><dd> Specify windows to swallow automatically. These are comma-separated lists that specify the class/resource/name of a window and an optional tab-manager id into which the window should be swallowed. By default, the tab-manager id increments from zero - ie. 0 is the first tab-manager created, 1 the second, etc, but it may be overriden by specifying an argument to the <span class="emphasis"><em>NewTabber</em></span> function. (No whitespace is allowed in tabber ids.) You can alternatively specify 'any' or 'lastFocus' which will put the window in the tab-manager with the least number of tabs or the last focused tab-manager, respectively. If no tab-manager number is specified, an implicit default value of 'any' is used. Note that <span class="emphasis"><em>className</em></span>/<span class="emphasis"><em>resourceName</em></span>/<span class="emphasis"><em>name</em></span> can be a (Perl) regular expression.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_balloonBG"></a><font class="fvwmopt">balloonBG</font> <span class="emphasis"><em>color</em></span></span></dt><dd> The backgound color of the balloon popups that appear over the tab buttons. The default color is <span class="emphasis"><em>#C0C080</em></span>.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_balloonFont"></a><font class="fvwmopt">balloonFont</font> <span class="emphasis"><em>font</em></span></span></dt><dd> The font to use on the balloon popups. The default font is <span class="emphasis"><em>Helvetica -12</em></span>.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_balloonWait"></a><font class="fvwmopt">balloonWait</font> <span class="emphasis"><em>ms</em></span></span></dt><dd> How long the mouse cursor must pause (in milliseconds) over a tab button before the balloon pops up. The default value is <span class="emphasis"><em>250</em></span>. </dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_balloonMsg"></a><font class="fvwmopt">balloonMsg</font> <span class="emphasis"><em>msg</em></span></span></dt><dd> Message to display in balloon popups. The default value is <span class="emphasis"><em>%tabNo:\n%iconText\n%title</em></span>.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_autoResize"></a><font class="fvwmopt">autoResize</font> <span class="emphasis"><em>bool</em></span></span></dt><dd> <span class="emphasis"><em>bool</em></span> can be either <span class="emphasis"><em>true</em></span> or <span class="emphasis"><em>false</em></span>. If true, windows in the tab-manager automatically resize to the dimensions of the largest window in the tab-manager. The default value is <span class="emphasis"><em>false</em></span>. If the user performs an explicit resize of a tab-manager window, all windows in the tab-manager are resized to the new window size.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_stateFile"></a><font class="fvwmopt">stateFile</font> <span class="emphasis"><em>file</em></span></span></dt><dd><span class="emphasis"><em>FvwmTabs</em></span> has the ability to preserve its state (ie. remember the windows it has swallowed as tabs) b/w fvwm restarts. <span class="emphasis"><em>file</em></span> specifies the name of a temporary file to record the state in, so it can be reconstructed when <span class="emphasis"><em>FvwmTabs</em></span> restarts. The default file is <code class="envar">$FVWM_USERDIR</code>/.fvwmtabs.state.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_fixedSizeTabs"></a><font class="fvwmopt">fixedSizeTabs</font> <span class="emphasis"><em>bool</em></span></span></dt><dd> <span class="emphasis"><em>bool</em></span> can be either <span class="emphasis"><em>true</em></span> or <span class="emphasis"><em>false</em></span>. If true, the tab-manager will ensure each tab-button has the same dimensions. If false, the selected tab is expanded so that it is fully visible. The default value is <span class="emphasis"><em>false</em></span>.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_showTitlebar"></a><font class="fvwmopt">showTitlebar</font> <span class="emphasis"><em>bool</em></span></span></dt><dd> Show internal titlebar. If set to <span class="emphasis"><em>true</em></span> a titlebar appears below the row of tab-buttons and displays the title associated with the current window. This titlebar is capable of displaying long or multi-line titles. The default value is <span class="emphasis"><em>true</em></span>.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_useTMTitlebar"></a><font class="fvwmopt">useTMTitlebar</font> <span class="emphasis"><em>bool</em></span></span></dt><dd> Add the title associated with the selected tab to the tab-manager titlebar. (ie. the titlebar at the top of the window, distinct from the titlebar below the tab-buttons.) Default value is <span class="emphasis"><em>true</em></span>.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_dragDropIcon"></a><font class="fvwmopt">dragDropIcon</font> <span class="emphasis"><em>imageFile</em></span></span></dt><dd> Specify the icon to display when performing a drag-&amp;-drop operation to reorder the tab-buttons. FvwmTabs will search the ImagePath for this image unless an absolute filename (ie. filename begins with '/') is specified. The default value is <span class="emphasis"><em>none</em></span>. If <span class="emphasis"><em>none</em></span> (or an invalid file) is specified a * is used.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_bBuggyFocus"></a><font class="fvwmopt">bBuggyFocus</font> <span class="emphasis"><em>bool</em></span></span></dt><dd> FvwmTabs tries to work around a limitation in Perl/Tk (there is no way to access the timestamp associated with WM_TAKE_FOCUS events). On some systems this doesn't work and sometimes tab-managers have trouble acquiring the focus. If this happens to you, try setting this option to <span class="emphasis"><em>true</em></span>. This can lead to focussing race-conditions (tab-managers temporarily "steal" focus in some situations) but this is less annoying than not being able to focus at all.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_enableSwallowDND"></a><font class="fvwmopt">enableSwallowDND</font> <span class="emphasis"><em>bool</em></span></span></dt><dd><p> Swallow windows that (are moved to) overlap a tabber.</p><p>Note: drag-&amp;-drop can be enabled for individual tabbers via the menu.
The default value is <span class="emphasis"><em>true</em></span>.</p></dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_swallowDNDTolerance"></a><font class="fvwmopt">swallowDNDTolerance</font> <span class="emphasis"><em>tol</em></span></span></dt><dd>Determines how much a window must overlap a tabber for it to be swallowed when drag-&amp;-drop is enabled. If the value has a %-sign appended to it, windows must overlap by the specified percentage of the current size of the tabber. If no %-sign is present, the value is treated in units of pixels. The default value is <span class="emphasis"><em>10</em></span> (pixels).</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_useIconsOnTabs"></a><font class="fvwmopt">useIconsOnTabs</font> <span class="emphasis"><em>bool</em></span></span></dt><dd> Show the mini icon associated with each window on its tab button. Note: mini icons for apps that use EWMH icons look a bit distorted.  This is because of the poor image resizing algorithm used in Tk. This sinactiveBG hould be rectified in the near future. The default value is <span class="emphasis"><em>true</em></span>.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_killIcon"></a><font class="fvwmopt">killIcon</font> <span class="emphasis"><em>image</em></span></span></dt><dd>Image to use on kill toolbar button. Default is <span class="emphasis"><em>none</em></span>.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_addIcon"></a><font class="fvwmopt">addIcon</font> <span class="emphasis"><em>image</em></span></span></dt><dd>Image to use on add toolbar button. Default is <span class="emphasis"><em>none</em></span>.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_swallowIcon"></a><font class="fvwmopt">swallowIcon</font> <span class="emphasis"><em>image</em></span></span></dt><dd> Image to use on add toolbar button when tabber will swallow next window to popup. Default is <span class="emphasis"><em>none</em></span>. By using a separate icon to <span class="emphasis"><em>addIcon</em></span>, this option provides visual feedback on when a tabber will unconditionally swallow the next window to popup.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_releaseIcon"></a><font class="fvwmopt">releaseIcon</font> <span class="emphasis"><em>image</em></span></span></dt><dd> Image to use on release toolbar button. Default is <span class="emphasis"><em>none</em></span>.</dd><dt><span class="term">*FvwmTabs: <a name="FvwmTabs_menuIcon"></a><font class="fvwmopt">menuIcon</font> <span class="emphasis"><em>image</em></span></span></dt><dd> Image to use on menu toolbar button. Default is <span class="emphasis"><em>none</em></span>.</dd></dl></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="additionalConfiguration"></a>6.1. Additional Configuration</h3></div></div></div><p>Images you may wish to use with the FvwmTabs module:
<img src="../../../doc/unstable/modules/images/FvwmTabs/logoFvwmTabs.png">
<img src="../../../doc/unstable/modules/images/FvwmTabs/green.png">
<img src="../../../doc/unstable/modules/images/FvwmTabs/yellow.png">
<img src="../../../doc/unstable/modules/images/FvwmTabs/red.png">
</p><p>If you use a decent shell like zsh, you might like to add these functions to your ~/.zshrc file so that tabs/titles have more meaningful names when executing commands:</p><pre class="programlisting">
setTitleAndIcon () {  print -nP '%{\e]2;'$1'\a\e]1;'$2'\a%}' }
preexec () { setTitleAndIcon $1 ${1%% *} }
precmd () { setTitleAndIcon %n@%m %m }
</pre><p>There are likely similar functions for other sh/csh shells.</p></div></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="functions"></a>7. Functions for Bindings</h2></div></div></div><p>A number of fvwm functions are available once the FvwmTabs module is started.</p><div class="variablelist"><dl><dt><span class="term"><a name="FvwmTabs_NewTabber"></a><font class="fvwmopt">NewTabber</font></span></dt><dd><p> Create a new tabber. Optional argument is tabber name. No whitespace is allowed in the tabber name. Can also prefix --geometry argument. Example:</p><pre class="programlisting">
NewTabber --geometry=+200+400 scottie
</pre></dd><dt><span class="term"><a name="FvwmTabs_Tabize"></a><font class="fvwmopt">Tabize</font></span></dt><dd> Add a window (as a tab) to a tabber.</dd><dt><span class="term"><a name="FvwmTabs_NextTab"></a><font class="fvwmopt">NextTab</font></span></dt><dd> Show/select the next tab.</dd><dt><span class="term"><a name="FvwmTabs_PrevTab"></a><font class="fvwmopt">PrevTab</font></span></dt><dd> Show/select the previous tab.</dd><dt><span class="term"><a name="FvwmTabs_LastTab"></a><font class="fvwmopt">LastTab</font></span></dt><dd> Show/select the last selected tab (if there was one).</dd><dt><span class="term"><a name="FvwmTabs_ReleaseTab"></a><font class="fvwmopt">ReleaseTab</font></span></dt><dd> Release a tabbed window back to fvwm.</dd><dt><span class="term"><a name="FvwmTabs_ReleaseIconifyTab"></a><font class="fvwmopt">ReleaseIconifyTab</font></span></dt><dd> Release a tabbed window back to fvwm &amp; iconify it.</dd><dt><span class="term"><a name="FvwmTabs_ReleaseAllTabs"></a><font class="fvwmopt">ReleaseAllTabs</font></span></dt><dd> Release all windows in a tab-manager back to fvwm.</dd><dt><span class="term"><a name="FvwmTabs_ReleaseIconifyAllTabs"></a><font class="fvwmopt">ReleaseIconifyAllTabs</font></span></dt><dd> Release all windows in a tab-manager back to fvwm &amp; iconify them.</dd><dt><span class="term"><a name="FvwmTabs_CloseTabber"></a><font class="fvwmopt">CloseTabber</font></span></dt><dd> Destroy a tab-manager. All windows in the tab-manager are released back to fvwm.</dd><dt><span class="term"><a name="FvwmTabs_AddTab"></a><font class="fvwmopt">AddTab</font></span></dt><dd> Pick a new window to add to a tab-manager. Selecting this option &amp; clicking on a window will add the selected window to the tab-manager.</dd><dt><span class="term"><a name="FvwmTabs_MultiAddTab"></a><font class="fvwmopt">MultiAddTab</font></span></dt><dd> Pick &amp; add new windows to a tab-manager until ESC is pressed.</dd><dt><span class="term"><a name="FvwmTabs_ShowTab"></a><font class="fvwmopt">ShowTab</font> <span class="emphasis"><em>tabNo</em></span></span></dt><dd> Show/select tab <span class="emphasis"><em>tabNo</em></span> in the tab-manager. <span class="emphasis"><em>tabNo</em></span> is zero-based. ie. 0 is the first tab, 1 is the second, etc.</dd><dt><span class="term"><a name="FvwmTabs_AddToTabber"></a><font class="fvwmopt">AddToTabber</font></span></dt><dd> Add a window (as a tab) to a tab-manager.</dd><dt><span class="term"><a name="FvwmTabs_SwapLeft"></a><font class="fvwmopt">SwapLeft</font></span></dt><dd> Swap the selected window with the window on its immediate left.</dd><dt><span class="term"><a name="FvwmTabs_SwapRight"></a><font class="fvwmopt">SwapRight</font></span></dt><dd> Swap the selected window with the window on its immediate right.</dd><dt><span class="term"><a name="FvwmTabs_SelectTabber"></a><font class="fvwmopt">SelectTabber</font></span></dt><dd> Select a tab-manager for a new window to be added to.</dd><dt><span class="term"><a name="FvwmTabs_EnableDND"></a><font class="fvwmopt">EnableDND</font></span></dt><dd> Swallow windows that (are moved to) overlap a tabber.</dd></dl></div></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="keyBindings"></a>8. Key Bindings</h2></div></div></div><p>By default, <span class="emphasis"><em>FvwmTabs</em></span> reads a default user configuration file <code class="filename">FvwmTabs-DefaultSetup</code> which defines several useful key-bindings for <span class="emphasis"><em>FvwmTabs</em></span>. You can tell <span class="emphasis"><em>FvwmTabs</em></span> NOT to read this file with:</p><pre class="programlisting">
<a href="<?php echo conv_link_target('fvwm.php');?>#SetEnv">SetEnv</a> FvwmTabs_NoDefaultSetup
</pre><p>This environment variable must be set <span class="emphasis"><em>before</em></span> starting the module.
</p>Then, pressing Ctrl-Alt-a (when the focus is in a tab-manager) will allow you to click on a window to add to the tab-manager.

<p>All of the key bindings can be changed using the standard fvwm <a href="<?php echo conv_link_target('fvwm.php');?>#Key">Key</a> command and making use of the aforementioned fvwm functions. ie.</p><pre class="programlisting">
<a href="<?php echo conv_link_target('fvwm.php');?>#Key">Key</a> (FvwmTabs*) A A CM <a href="<?php echo conv_link_target('fvwm.php');?>#Function">Function</a> AddTab
</pre><p>Then, pressing Ctrl-Alt-a (when the focus is in a tab-manager) will allow you to click on a window to add to the tab-manager.</p><p>The default key bindings (set in the <code class="filename">FvwmTabs-DefaultSetup</code> file) are:</p><div class="variablelist"><dl><dt><span class="term"><span><strong class="keycap">Ctrl</strong></span>-<span><strong class="keycap">Alt</strong></span>-<span><strong class="keycap">a</strong></span></span></dt><dd>AddTab</dd><dt><span class="term">Ctrl-Alt-c</span></dt><dd>CloseTabber</dd><dt><span class="term">Ctrl-Alt-i</span></dt><dd>ReleaseIconifyTab</dd><dt><span class="term">Ctrl-Alt-Shift-I</span></dt><dd>ReleaseIconifyAllTabs</dd><dt><span class="term">Ctrl-Alt-l</span></dt><dd>LastTab</dd><dt><span class="term">Ctrl-Alt-m</span></dt><dd>MultiAddTab</dd><dt><span class="term">Ctrl-Alt-n &amp; Ctrl-Alt-Tab</span></dt><dd>NextTab</dd><dt><span class="term">Ctrl-Alt-p</span></dt><dd>PrevTab</dd><dt><span class="term">Ctrl-Alt-r</span></dt><dd>ReleaseTab</dd><dt><span class="term">Ctrl-Alt-Shift-R</span></dt><dd>ReleaseAllTabs</dd><dt><span class="term">Ctrl-Alt-t</span></dt><dd>NewTabber</dd><dt><span class="term">Ctrl-Alt-<span class="emphasis"><em>&lt;num&gt;</em></span></span></dt><dd>ShowTab <span class="emphasis"><em>&lt;num&gt;</em></span></dd><dt><span class="term">Ctrl-Alt-Left</span></dt><dd>SwapLeft</dd><dt><span class="term">Ctrl-Alt-Right</span></dt><dd>SwapRight</dd></dl></div></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="mouseBindings"></a>9. Mouse Bindings</h2></div></div></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="tabMouseBindings"></a>9.1. Mouse Bindings on Tab Buttons</h3></div></div></div><div class="informaltable"><table border="1"><colgroup><col><col></colgroup><thead><tr><th>Mouse Button</th><th>Action</th></tr></thead><tbody><tr><td align="center">1</td><td>display the window associated with the tab.</td></tr><tr><td align="center">2</td><td>release the window associated with the tab back to the window manager as a standalone window.</td></tr><tr><td align="center">Ctrl + 2</td><td>tab-buttons can be reordered with a drag-&amp;-drop operation initiated by holding down the Ctrl key and dragging with Mouse-2. A dragged tab is inserted before the tab-button onto which it is dropped.</td></tr><tr><td align="center">3</td><td>release the window associated with the tab back to the window manager as a standalone window.</td></tr></tbody></table></div></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="toolbarMouseBindings"></a>9.2. Mouse Bindings on Toolbar Icons</h3></div></div></div><p>There are 4 toolbar icons named (L-to-R): menu, release, add and kill.</p><div class="informaltable"><table border="1"><colgroup><col><col><col></colgroup><thead><tr><th>Icon</th><th>Mouse Button</th><th>Action</th></tr></thead><tbody><tr><td>menu</td><td align="center">1</td><td>Display main menu. See <a href="<?php echo conv_link_target('FvwmTabs.php');?>#FvwmTabs_menu">menu</a>.</td></tr><tr><td>release</td><td align="center">1</td><td>release the selected window from the tabber.</td></tr><tr><td>release</td><td align="center">2</td><td>release all windows from the tabber, and iconify them.</td></tr><tr><td>release</td><td align="center">3</td><td>will release all windows from the tabber.</td></tr><tr><td>add</td><td align="center">1</td><td>add the next window you click on to the tabber.</td></tr><tr><td>add</td><td align="center">2</td><td>add the next window to popup to the tabber.</td></tr><tr><td>add</td><td align="center">3</td><td>add every window you click on (until you press Esc) to the tabber.</td></tr><tr><td>kill</td><td align="center">1</td><td><a href="<?php echo conv_link_target('fvwm.php');?>#Close">Close</a> the selected window.</td></tr><tr><td>kill</td><td align="center">2</td><td>causes FvwmTabs to try to kill the selected window itself.</td></tr><tr><td>kill</td><td align="center">3</td><td><a href="<?php echo conv_link_target('fvwm.php');?>#Destroy">Destroy</a> the selected window.</td></tr></tbody></table></div></div></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="menu"></a>10. Menu Options</h2></div></div></div><p>Mouse-1 on the "menu" button will bring up a menu of options:</p><p><img src="../../../doc/unstable/modules/images/FvwmTabs/menu.png"></p><div class="informaltable"><table border="1"><colgroup><col><col></colgroup><thead><tr><th>Menu option</th><th>Description</th></tr></thead><tbody><tr><td>Release All</td><td>release all tabbed programs back to the window manager as standalone windows.</td></tr><tr><td>Release All (Iconify)</td><td>release all tabbed programs back to the window manager as iconised standalone windows.</td></tr><tr><td>Add</td><td>add the next mouse-clicked window to the tab-manager.</td></tr><tr><td>Add Next</td><td>add the next window that is created to the tab-manager.</td></tr><tr><td>Multi Add</td><td>keep adding mouse-clicked windows to a tab-manager until the escape key is pressed. Useful for adding multiple windows to a tab-manager at once.</td></tr><tr><td>Font</td><td>shows a sub-menu enabling you to dynamically configure the button/title/menu fonts, using the external program identified by the <span class="emphasis"><em>fontSelector</em></span> option.</td></tr><tr><td>Options</td><td>shows a sub-menu with the following items:
<div class="variablelist"><dl><dt><span class="term">Show Internal Titlebar</span></dt><dd>toggle the display of the titlebar below the tab-buttons.</dd><dt><span class="term">Use Main Titlebar</span></dt><dd>set the titlebar of the FvwmTabs window to the title of the selected tab.</dd><dt><span class="term">Auto Resize</span></dt><dd>Automatically resize all windows to the dimensions of the largest window in the tab-manager..</dd><dt><span class="term">Swallow Overlapping (D&amp;D)</span></dt><dd>toggle the swallowing of overlapping windows.</dd></dl></div>
</td></tr><tr><td>Window Tabizer Dialog</td><td>popup a dialog box for specifying windows to swallow. Windows can be specified explicitly (by name) or by using a (Perl) regular expression matcher. (Note: / character is automatically escaped.)</td></tr><tr><td><span class="emphasis"><em>window</em></span></td><td>The menu options between the seperators will display the window/tab associated with the text. (The menu text is actually the title associated with the window. The text on each tab-button is the icon name.)</td></tr><tr><td>About</td><td>pops up a dialog with version/developer information.</td></tr><tr><td>Close</td><td>close the FvwmTabs window, invoking Release All in the process.</td></tr></tbody></table></div></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="tutorial"></a>11. Tutorial</h2></div></div></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="creating"></a>11.1. Creating a tabber</h3></div></div></div><p>If the FvwmTabs module is correctly installed/configured, press Ctrl-Alt-t and a little window that looks something like this should appear:</p><img src="../../../doc/unstable/modules/images/FvwmTabs/fvwmTabsEmpty.png"><p>A new tabber is created every time Ctrl-Alt-t is pressed.</p></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="adding"></a>11.2. Adding windows to a tabber</h3></div></div></div><p>There are a number of ways to add windows to a tabber:</p><div class="itemizedlist"><ul type="disc"><li>To add a <span class="bold"><strong>single</strong></span> window to a tabber, click the <span class="emphasis"><em>add</em></span> (orange) icon (or press <span class="keysym">Ctrl-Alt-a</span> when the tabber is focussed). The mouse cursor will change to a crosshair. The next window selected (clicked on) will be swallowed by the tabber.
To cancel an add-window operation, press <span class="keysym">Esc</span>.</li><li>To add <span class="bold"><strong>multiple</strong></span> windows to a tabber, click the <span class="emphasis"><em>add</em></span> (orange) icon with the right mouse button (or press <span class="keysym">Ctrl-Alt-m</span> when the tabber is focussed). All windows that are selected (clicked on) until <span class="keysym">Esc</span> is pressed, will be swallowed by the tabber.</li><li>Invoke the <a class="ulink" href="http://members.optusnet.com.au/~scottsmedley/fvwmtabs/tab.zsh" target="_top">tab.zsh</a> script from a shell to swallow the next window that pops up. For example:
<p>
<span><strong class="command">
tab.zsh xterm -bg blue -fg white
tab.zsh gnome-calculator
</strong></span>
</p>

The xterm and calculator window will automatically be swallowed into the tabber that last had the focus.
</li><li>Invoke the fvwm SwallowNew function. Syntax is:
<pre class="programlisting">
<a href="<?php echo conv_link_target('fvwm.php');?>#Function">Function</a> SwallowNew tabberId <span class="emphasis"><em>fvwmCommand</em></span>
</pre>
For example:
<pre class="programlisting">
<a href="<?php echo conv_link_target('fvwm.php');?>#Function">Function</a> SwallowNew any <a href="<?php echo conv_link_target('fvwm.php');?>#Function">Function</a> StartupBrowser
<a href="<?php echo conv_link_target('fvwm.php');?>#Function">Function</a> SwallowNew lastFocus <a href="<?php echo conv_link_target('fvwm.php');?>#Exec">Exec</a> exec rxvt
<a href="<?php echo conv_link_target('fvwm.php');?>#Function">Function</a> SwallowNew 2 <a href="<?php echo conv_link_target('fvwm.php');?>#Exec">Exec</a> exec gvim header.hh
</pre>
The fvwm command is executed when the tabber is ready to swallow the next window that is created.
</li></ul></div></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="releasing"></a>11.3. Releasing windows from a tabber</h3></div></div></div><p>There are a number of ways to release windows from a tabber.</p><p>To release a <span class="bold"><strong>single</strong></span> window from a tabber: </p><div class="itemizedlist"><ul type="disc"><li>Click the release (middle green) icon with the left mouse button.</li><li>Press <span class="keysym">Ctrl-Alt-r</span> when the tabber is focussed.</li><li>Click the tab button for the window with the middle mouse button.</li><li>To release and iconify a window, click the tab button for the window with the right mouse button.</li></ul></div>
The first two release the selected window. The last two release the window the tab button is associated with.

<p>To release all windows from a tabber:</p><div class="itemizedlist"><ul type="disc"><li>Click the release (left green) icon with the middle mouse button.</li><li>To release and iconify all windows, click the release (left green) icon with the right mouse button.</li></ul></div></div></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="bugs"></a>12. Known Bugs</h2></div></div></div><p>Tab-managers don't take focus when iconified.</p><p>FvwmTabs doesn't obey <a href="<?php echo conv_link_target('fvwm.php');?>#Style_ClickToFocus">ClickToFocus</a> mode.</p><p>FvwmTabs has a problem swallowing shaded windows.</p><p>Using <a href="<?php echo conv_link_target('fvwm.php');?>#Maximize">Maximize</a> to resize tab-manager windows prevents dynamic resizing from working.</p><p>Please send bug reports, feature requests and queries about FvwmTabs to the fvwm mailing list: <code class="email">&lt;<a class="email" href="mailto:fvwm@fvwm.org">fvwm@fvwm.org</a>&gt;</code>. Be sure to include the word "FvwmTabs" somewhere in the subject line.</p></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="licence"></a>13. Licence</h2></div></div></div><p>FvwmTabs is GPL software.</p></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="author"></a>14. Author</h2></div></div></div><p>Scott Smedley <code class="email">&lt;<a class="email" href="mailto:ss@aao.gov.au">ss@aao.gov.au</a>&gt;</code></p></div></div>
<hr /><a name="toc"></a><div class="toc"><p><b>Table of Contents</b></p><dl><dt><span class="section"><a href="#name">1. Name</a></span></dt><dt><span class="section"><a href="#synopsis">2. Synopsis</a></span></dt><dt><span class="section"><a href="#description">3. Description</a></span></dt><dt><span class="section"><a href="#invocation">4. Invocation</a></span></dt><dt><span class="section"><a href="#dependencies">5. Installing Dependencies</a></span></dt><dt><span class="section"><a href="#options">6. Configuration Options</a></span></dt><dd><dl><dt><span class="section"><a href="#additionalConfiguration">6.1. Additional Configuration</a></span></dt></dl></dd><dt><span class="section"><a href="#functions">7. Functions for Bindings</a></span></dt><dt><span class="section"><a href="#keyBindings">8. Key Bindings</a></span></dt><dt><span class="section"><a href="#mouseBindings">9. Mouse Bindings</a></span></dt><dd><dl><dt><span class="section"><a href="#tabMouseBindings">9.1. Mouse Bindings on Tab Buttons</a></span></dt><dt><span class="section"><a href="#toolbarMouseBindings">9.2. Mouse Bindings on Toolbar Icons</a></span></dt></dl></dd><dt><span class="section"><a href="#menu">10. Menu Options</a></span></dt><dt><span class="section"><a href="#tutorial">11. Tutorial</a></span></dt><dd><dl><dt><span class="section"><a href="#creating">11.1. Creating a tabber</a></span></dt><dt><span class="section"><a href="#adding">11.2. Adding windows to a tabber</a></span></dt><dt><span class="section"><a href="#releasing">11.3. Releasing windows from a tabber</a></span></dt></dl></dd><dt><span class="section"><a href="#bugs">12. Known Bugs</a></span></dt><dt><span class="section"><a href="#licence">13. Licence</a></span></dt><dt><span class="section"><a href="#author">14. Author</a></span></dt></dl></div><hr />
<P>fvwm 2.5.32 (from cvs)</P>



<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 09-Aug-2010 -->
