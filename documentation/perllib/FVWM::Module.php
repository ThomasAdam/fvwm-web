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
$title          = "FVWM - Perl library - FVWM::Module";
$heading        = "FVWM - Perl library - FVWM::Module";
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

<?php decoration_window_start("Manual page for FVWM::Module in unstable branch (2.5.8)"); ?>

<H1>FVWM::Module</H1>
Section: FVWM Perl library (3)<BR>Updated: 2003-10-26<BR>Source: <a href="ftp://ftp.fvwm.org/pub/fvwm/devel/sources/perllib/FVWM/Module.pm">FVWM/Module.pm</a><br>
<A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FVWM::Module - the base class representing FVWM module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<A NAME="ixAAC"></A>
<blockquote><pre>    use lib `fvwm-perllib dir`;
    use FVWM::Module;</pre></blockquote>
<P>

<blockquote><pre>    my $module = new FVWM::Module;</pre></blockquote>
<P>

<blockquote><pre>    $module-&gt;send(&quot;Beep&quot;);</pre></blockquote>
<P>

<blockquote><pre>    # auto-raise all windows
    sub autoRaise { $_[0]-&gt;send(&quot;Raise&quot;, $_[1]-&gt;_win_id) };
    $module-&gt;addHandler(M_FOCUS_CHANGE, \&amp;autoRaise);</pre></blockquote>
<P>

<blockquote><pre>    # terminate itself after 5 minutes
    my $scheduler = $module-&gt;track('Scheduler');
    $scheduler-&gt;schedule(5 * 60, sub { $module-&gt;terminate; });</pre></blockquote>
<P>

<blockquote><pre>    # print the current desk number ($pageTracker is auto updated)
    my $pageTracker = $module-&gt;track(&quot;PageInfo&quot;);
    $module-&gt;showMessage(&quot;Desk: &quot; . $pageTracker-&gt;data-&gt;{desk_n});</pre></blockquote>
<P>

<blockquote><pre>    $module-&gt;eventLoop;</pre></blockquote>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAD"></A>
An <FONT>FVWM</FONT> module is a separate program that communicates with the main <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I>
process, receives a module configuration and events and sends commands back.
This class <B><u>FVWM::Module</u></B> makes it easy to create <FONT>FVWM</FONT> modules in Perl.
<P>

If you are interested in all module protocol details that this class tries
to make invisible, visit the web page
<I><A HREF="http://fvwm.org/documentation/dev_modules.php">http://fvwm.org/documentation/dev_modules.php</A></I>.
You will need an information about packet arguments anyway to be able to
write complex modules. This is however not obligatory for simple modules
that only send commands back when something happens.
<P>

A typical <FONT>FVWM</FONT> module has an initialization part including setting event
handlers using <B>addHandler</B> methods and entering an event loop using
<B>eventLoop</B> method. Most of the work is done in the event handlers although
a module may define other execution ways, for example using <TT>$SIG{ALRM}</TT>.
<P>

An <FONT>FVWM</FONT> module receives 3 values from <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I>: <I>rcFile</I> - the file this
module was called from or ``none'' if the module is called as a command from
another module or from a binding/function (this value is not really useful),
<I>winId</I> - the window context of this module if it is called from window
decoration bindings or window menu (the value is integer, 0 if there is no
window context), and finally <I>context</I> that indicates the place this module
was called from, like menu or window title (see the fvwm documentation).
All these values may be accessed as properties of the module object,
like <TT>&quot;$module-&gt;{winId}&quot;</TT>.
<A NAME="lbAE">&nbsp;</A>
<H2>METHODS</H2>

<A NAME="ixAAE"></A>
The following methods are available:
<P>

<B>new</B>,
<B>version</B>,
<B>versionInfo</B>,
<B>argv</B>,
<B>send</B>,
<B>track</B>,
<B>eventLoop</B>,
<B>sendReady</B>,
<B>sendUnlock</B>,
<B>postponeSend</B>,
<B>terminate</B>,
<B>resetHandlers</B>,
<B>addHandler</B>,
<B>deleteHandler</B>,
<B>addDefaultErrorHandler</B>,
<B>debug</B>,
<B>showError</B>,
<B>showMessage</B>,
<B>showDebug</B>,
<B>isDummy</B>.
<P>

The following methods are called from other methods above, but may be useful
in other situations as well:
<P>

<B>internalDie</B>,
<B>name</B>,
<B>mask</B>,
<B>xmask</B>,
<B>isInMask</B>,
<B>syncMask</B>,
<B>syncXMask</B>,
<B>isInSyncMask</B>,
<B>disconnect</B>,
<B>getHandlerCategory</B>,
<B>readPacket</B>,
<B>invokeHandler</B>,
<B>processPacket</B>,
<B>emulateEvent</B>.
<P>

These methods deal with a received packet (event):
<P>

<B>isEventExtended</B>
<P>

These methods deal with configuration directories:
<P>

<B>userDataDir</B>,
<B>siteDataDir</B>,
<B>searchDirs</B>
<DL COMPACT>
<DT><B>new</B> <I>param-hash</I><DD>
<A NAME="ixAAF"></A>
Creates a module object. Only one module instance may be created in the
program, since this object gets exclusive rights on communication with <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I>.


<P>


The following parameters may be given in the constractor:


<P>


<blockquote><pre>    Name          - used in module configuration and debugging
    Mask          - events a module is interested to receive
    XMask         - the same for extended events
    SyncMask      - events to lock on
    SyncXMask     - the same for extended events
    EnableAlias   - whether a module accepts an alias in command line
    EnableOptions - options that a module accepts in command line
    Debug         - 0 means no debug, 1 - user debug, 2,3,4 - perllib</pre></blockquote>


<P>


Example:


<P>


<blockquote><pre>    my $module = new FVWM::Module(
        Name =&gt; &quot;FvwmPerlBasedWindowRearranger&quot;,
        Mask =&gt; M_CONFIGURE_WINDOW | M_END_WINDOWLIST,
        EnableOptions =&gt; { &quot;animate&quot; =&gt; \$a, &quot;cascade&quot; =&gt; \$c },
        Debug =&gt; 2,
    );</pre></blockquote>


<P>


Event types needed for the 4 mask parameters are defined in <B><a href="<?php echo conv_link_target('./FVWM::Constants.php');?>">FVWM::Constants</a></B>.


<P>


Set <I>Debug</I> to 2 to nicely dump all communication with fvwm (sent commands
and received events). Setting it to 3 makes it even more verbose.


<P>


Some options cause an automatically parsing of the module command line args.
See Getopt::Long for the format of the hash ref accepted by
<I>EnableOptions</I> parameter. If boolean <I>EnableAlias</I> parameter is given,
then the alias argument may be specified anywhere on the command line, for
example before or after long/short options or even in between, as long as
there are no conflicts with some non-mandatory option arguments. In which
case ``--'' may be used to indicate the end of the options. All non-parsed
command line arguments are available to the program using <B>argv</B> method.
<DT><B>version</B><DD>
<A NAME="ixAAG"></A>
Returns <FONT>FVWM</FONT> version string <I>x.y.z</I>.
<DT><B>versionInfo</B><DD>
<A NAME="ixAAH"></A>
Returns <FONT>FVWM</FONT> version info string, like `` (from cvs)'' or `` (snap-YYYYMMDD)''.
This string is usually empty for the final version.
<DT><B>argv</B><DD>
<A NAME="ixAAI"></A>
Returns remaining module arguments (array ref) passed in the command line.
Arguments that are used for <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I>-to-module communication are not included.
Arguments that are automatically parsed using <I>EnableAlias</I> and/or
<I>EnableOptions</I> specified in the constructor are not included.
<DT><B>send</B> <I>command</I> [<I>window-id</I>] [<I>continue-flag</I>]<DD>
<A NAME="ixAAJ"></A>
Sends <I>command</I> back for execution. If the <I>window-id</I> is specified this
command will be executed in this window context. <I>continue-flag</I> of 0
signals that this is the last sent command from the module, the default
for this flag is 1.
<DT><B>track</B> [<I>mode-hash</I>] [<I>name</I>] [<I>param-hash</I>]<DD>
<A NAME="ixAAK"></A>
Creates a module tracker object (see FVWM::Tracker) specified
by a <I>name</I>.


<P>


<I>mode-hash</I> may include parameters:


<P>


<blockquote><pre>    NoStart - true value means the created tracker is not auto-started
    NoReuse - true value means not to reuse any existing named tracker</pre></blockquote>


<P>


<I>param-hash</I> is specific to the tracker named <I>name</I>. Every tracker class
(a subclass of <B><a href="<?php echo conv_link_target('./FVWM::Tracker.php');?>">FVWM::Tracker</a></B>) has its own manual page, contact it for
the tracker details and usage.
<DT><B>eventLoop</B><DD>
<A NAME="ixAAL"></A>
The main event loop. A module should define some event handlers using
<B>addHandler</B> before entering the event loop. When the event happens all
event handlers registered on this event are called, then a module returns
to the event loop awaiting for new events forever.


<P>


This method may be finished when one of the following happens. 1) Explicit
<B>terminate</B> is called in one of the event handlers. 2) Signal handler
(system signals are independent from this event loop) decides to <I>die</I>.
This is usually catched and a proper shutdown is done. 3) An event handler
<I>die</I>d, in this case the module aborts, this is done on purpose to
encourage programmers to fix bugs. 4) Communication with <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I> closed, for
example <B>KillModule</B> called or the main <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I> process exited.


<P>


In all these cases (except for the third one) <I></I><FONT><I>ON_EXIT</I></FONT><I></I> event handlers are
called if defined and then <B>disconnect</B> is called. So no communication is
available after this method is finished. If you need a communication before
the module exits, define an <I></I><FONT><I>ON_EXIT</I></FONT><I></I> event handler.
<DT><B>sendReady</B><DD>
<A NAME="ixAAM"></A>
This is automatically called (if needed) when a module enters <B>eventLoop</B>,
but sometimes you may want to tell <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I> that the module is fully ready
earlier. This only makes sence if the module was run using
<B>ModuleSynchronous</B> command, in this case <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I> gets locked until the module
sends the ``ready'' notification.
<DT><B>sendUnlock</B><DD>
<A NAME="ixAAN"></A>
When an event was configured to be sent to a module synchronously using
<I>SyncMask</I> and <I>SyncXMask</I>, <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I> gets locked until the module sends
the ``unlock'' notification. This is automatically sent (if needed) when a
handler is finished, but sometimes a handler should release <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I> earlier.
<DT><B>postponeSend</B> <I>command</I> [<I>window-id</I>] [<I>continue-flag</I>]<DD>
<A NAME="ixAAO"></A>
The same like <B>send</B>, but the actual command sending is postponed
until before the module enters the reading-from-fvwm phase in <B>eventLoop</B>.
<DT><B>terminate</B> [<I>continue</I>]<DD>
<A NAME="ixAAP"></A>
This method is used for 2 purposed, usually in event handlers. To terminate
the entire event loop and to terminate only an execution of the current
handler if <I>continue</I> is set.
<DT><B>resetHandlers</B><DD>
<A NAME="ixAAQ"></A>
This deletes all event handlers without exception.
<DT><B>addHandler</B> <I>mask code</I><DD>
<A NAME="ixAAR"></A>
Defines a handler (that is a <I>code</I> subroutine) for the given <I>mask</I> event
(or several events). Usually the event type is one of the <FONT>FVWM</FONT> <I>M_*</I> or
<I>MX_*</I> constants (see <B><a href="<?php echo conv_link_target('./FVWM::Constants.php');?>">FVWM::Constants</a></B>), but it may also be <I></I><FONT><I>ON_EXIT</I></FONT><I></I>,
this special event is called just before the event loop is terminated.


<P>


The <I>mask</I> may include several events in the same category (the event types
are or-ed). In this case the handler will be called for every matching event.
Currently there are 3 categories: regular events (M_*), extended events (MX_*)
and special events (<FONT>ON_EXIT</FONT>). These 3 categories of events can't be mixed,
primary because of technical reasons.


<P>


The handler subroutine is called with these parameters:


<P>


<blockquote><pre>    ($self, $event)</pre></blockquote>


<P>


where <TT>$self</TT> is a module object, <TT>$event</TT> is <B><a href="<?php echo conv_link_target('./FVWM::Event.php');?>">FVWM::Event</a></B> object.


<P>


If the <I>mask</I> includes more than one event type, use <TT>&quot;$event-&gt;type&quot;</TT>
to dispatch event types if needed.


<P>


The handler may call <TT>&quot;$self-&gt;terminate&quot;</TT> to terminate the event loop
completely or <TT>&quot;$self-&gt;terminate(&quot;continue&quot;)&quot;</TT> to terminate the current
event handler only. The second form is useful when the handler subroutine
calls other subroutines that need to terminate the primary one.


<P>


If several event handlers are added for the same event type, they are
executed in the added order. To forbid the further propagation of the
same event, an event handler may call <TT>&quot;$event-&gt;propagationAllowed(0)&quot;</TT>.


<P>


The return value from <B>addHandler</B> is an identifier the only purpose of
which is to be passed to <B>deleteHandler</B> in case the newly defined handler
should be deleted at some point.
<DT><B>deleteHandler</B> <I>id</I><DD>
<A NAME="ixAAS"></A>
Removes the handler specified by <I>id</I>. The return value is 1 if the handler
is found and deleted, 0 otherwise.
<DT><B>addDefaultErrorHandler</B><DD>
<A NAME="ixAAT"></A>
This adds the default handler for <I>M_ERROR</I> event. This class simply prints
an error message to the standard error stream, but subclasses may define
another default handler by overwriting this method.
<DT><B>debug</B> <I>msg</I> [<I>level</I>]<DD>
<A NAME="ixAAU"></A>
Prints <I>msg</I> to the standard error stream if <I>level</I> is greater or equal to
the module debug level defined using <I>Debug</I> in the constructor. The default
<I>level</I> for this method is 1 that makes it possible to add user debugging
output without specifying a level. The default module level is 0, so no
debugging output of positive levels is shown.


<P>


This module uses <B>debug</B> internally (with <I>level</I> 2) to dump all
incoming and outgoing communication data in <B>send</B> and <B>processPacket</B>.
Apparently this output is only seen if <I>Debug</I> is set to 2 or greater.
<DT><B>showError</B> <I>msg</I><DD>
<A NAME="ixAAV"></A>
Writes <I>msg</I> to the error stream (stderr). It is supposed that the argument
has no traling end of line. May be used to signal non fatal error.


<P>


Subclasses may overwrite this method and, for example, show all error
messages in separate windows or in the common error window.
<DT><B>showMessage</B> <I>msg</I><DD>
<A NAME="ixAAW"></A>
Writes <I>msg</I> to the message stream (stderr). It is supposed that the argument
has no traling end of line. May be used to show a named output.


<P>


Subclasses may overwrite this method and, for example, show all
messages in separate windows or in the common message window.
<DT><B>showDebug</B> <I>msg</I><DD>
<A NAME="ixAAX"></A>
Unconditionally writes <I>msg</I> to the debug stream (stderr). It is supposed
that the argument has no traling end of line. Used in <B>debug</B> to actually
show the message when the level is matched.


<P>


Subclasses may overwrite this method and, for example, show all debugging
messages in separate windows or in the common debug window.
<DT><B>isDummy</B><DD>
<A NAME="ixAAY"></A>
Usually a module should be executed by <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I> only. But to help creating
<FONT>GUI</FONT> applications, the dummy mode is supported when the module is started
from the command line. No events are received in this case, but with some
effort they may be emulated:


<P>


<blockquote><pre>    $module-&gt;emulateEvent(M_NEW_DESK, [ 2 ]) if $module-&gt;isDummy;</pre></blockquote>
<DT><B>internalDie</B> <I>msg</I><DD>
<A NAME="ixAAZ"></A>
This may be used to end the module with the corresponding <I>msg</I>.
For a clean module exit use <B>showError</B> and <B>terminate</B> instead.
<DT><B>name</B> [<I>name</I>]<DD>
<A NAME="ixABA"></A>
Sets or returns the module name. Called automatically from the constructor.
<DT><B>mask</B> [<I>mask</I>] [<I>explicit-flag</I>] =item <B>xmask</B> [<I>mask</I>] [<I>explicit-flag</I>]<DD>
<A NAME="ixABB"></A>
Sets or returns the module mask. Called automatically from the constructor.


<P>


Regular and extended event types should never be mixed, this is why there
are 2 variants of this method, the first is for regular and the second is
for extended event types. Without a parameter, the module mask is returned,
the integer parameter indicates a mask to set and the old mask is returned.


<P>


The module only receives the packets matching these 2 module masks (regular
and extended).


<P>


This class is smart to update the minimal module masks automatically if you
never set them explicitly (either in constructor or using these methods).
The <I>explicit-flag</I> parameter should not be usually used, it defaults to 1.
If you set it to 0 then the module is informed to continue to automatically
update masks on the following <B>addHandlers</B> calls even after the current
mask setting.
<DT><B>isInMask</B> <I>type</I><DD>
<A NAME="ixABC"></A>
Returns true if the module mask matches the given <I>type</I>.
Good for both regular and extended event types as long as they are queried
separately.
<DT><B>syncMask</B> [<I>mask</I>] =item <B>syncXMask</B> [<I>mask</I>]<DD>
<A NAME="ixABD"></A>
The same as <B>mask</B> and <B>xmask</B>, but sets/returns the synchronization
mask of the module.


<P>


The module is synchronized with <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I> on all packets matching these 2
module synchronization masks (regular and extended).
<DT><B>isInSyncMask</B> <I>type</I><DD>
<A NAME="ixABE"></A>
Returns true if the module synchronization mask matches the given <I>type</I>.
Good for both regular and extended event types as long as they are queried
separately.
<DT><B>disconnect</B><DD>
<A NAME="ixABF"></A>
This method invokes <I></I><FONT><I>ON_EXIT</I></FONT><I></I> handlers if any and closes communication.
It is called automatically from <B>eventLoop</B> before finishing.
It is safe to call this method more than once.


<P>


This method may be called from signal handlers before <I>exit</I>ing for the
proper shutdown.
<DT><B>getHandlerCategory</B> <I>type</I><DD>
<A NAME="ixABG"></A>
Returns one of 3 string ids depending on the event handler <I>type</I> that has
the same meaning as the corresponding packet type (``regular'' or ``extended'')
with an addition of ``special'' category for <I></I><FONT><I>ON_EXIT</I></FONT><I></I> handlers.
<DT><B>readPacket</B><DD>
<A NAME="ixABH"></A>
This is a blocking method that waits until there is a packet on the
communication end from <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I>. Then it returns a list of 2 values,
packet type and packet data (unpacked array of arguments).
<DT><B>invokeHandler</B> <I>event</I><DD>
<A NAME="ixABI"></A>
Dispatches the apropos event handlers with the event data.
This method is called automatically, so you usually should not worry about it.
<DT><B>processPacket</B> [<I>type data</I>]<DD>
<A NAME="ixABJ"></A>
This method constructs the event object from the packet data and calls
<B>invokeHandler</B> with it. Prints debug info if requested. Finally calls
<B>sendUnlock</B> if needed.


<P>


You should not really worry about this method, it is called automatically
from the event loop.
<DT><B>emulateEvent</B> <I>type data</I><DD>
<A NAME="ixABK"></A>
This method emulates the event as returned by <B>readPacket</B>. The given event
is processed immeadeatelly if in the event loop, or just before the real
<B>readPacket</B> otherwise.


<P>


The parameters are the same as in <B>processPacket</B> and the same as in
FVWM::Event constructor.
<DT><B>eventLoopPrepared</B><DD>
<A NAME="ixABL"></A>
Called from <B>eventLoop</B> every time before reading the packet for new data.
Subclasses should pass this method the same arguments that <B>eventLoop</B>
received for a possible future use.
<DT><B>eventLoopFinished</B><DD>
<A NAME="ixABM"></A>
Called from <B>eventLoop</B> just before the return.
Subclasses should pass this method the same arguments that <B>eventLoop</B>
received for a possible future use.
<DT><B>isEventExtended</B> <I>type</I><DD>
<A NAME="ixABN"></A>
For technical reasons there are 2 categories of <FONT>FVWM</FONT> events, regular and
extended. This is done to enable more events. With introdution of the
extended event types (with the highest bit set) it is now possible to have
31+31=62 different event types rather than 32. This is a good point, the bad
point is that only event types of the same category may be masked (or-ed)
together. This method returns 1 or 0 depending on whether the event <I>type</I>
is extended or not.
<DT><B>userDataDir</B><DD>
<A NAME="ixABO"></A>
Returns the user data directory, usually ~/.fvwm or set by <TT>$FVWM_USERDIR</TT>.
<DT><B>siteDataDir</B><DD>
<A NAME="ixABP"></A>
Returns the system-wide data directory, the one configured when <FONT>FVWM</FONT> is
installed. It is also returned by `fvwm-config --fvwm-datadir`.
<DT><B>searchDirs</B><DD>
<A NAME="ixABQ"></A>
It is a good practice for a module to search for the given configuration
in one of 2 data directories, the user one and the system-wide. This method
returns a list of both directories in that order.
</DL>
<A NAME="lbAF">&nbsp;</A>
<H2>BUGS</H2>

<A NAME="ixABR"></A>
Awaiting for your reporting.
<A NAME="lbAG">&nbsp;</A>
<H2>CAVEATS</H2>

<A NAME="ixABS"></A>
In keeping with the <FONT>UNIX</FONT> philosophy, <B><u>FVWM::Module</u></B> does not keep you from
doing stupid things, as that would also keep you from doing clever things.
What this means is that there are several areas with which you can hang your
module or even royally confuse your running <I><a href="<?php echo conv_link_target('./../manpages/unstable/fvwm.php');?>">fvwm</a></I> process. This is due to
flexibility, not bugs.
<A NAME="lbAH">&nbsp;</A>
<H2>AUTHOR</H2>

<A NAME="ixABT"></A>
Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt;.
<A NAME="lbAI">&nbsp;</A>
<H2>THANKS TO</H2>

<A NAME="ixABU"></A>
Randy J. Ray &lt;<A HREF="mailto:randy@byz.org">randy@byz.org</A>&gt;.
<A NAME="lbAJ">&nbsp;</A>
<H2>SEE ALSO</H2>

<A NAME="ixABV"></A>
For more information, see fvwm, <a href="<?php echo conv_link_target('./FVWM::Module::Gtk.php');?>">FVWM::Module::Gtk</a> and <a href="<?php echo conv_link_target('./FVWM::Module::Tk.php');?>">FVWM::Module::Tk</a>,
<a href="<?php echo conv_link_target('./FVWM::Tracker.php');?>">FVWM::Tracker</a>.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">METHODS</A><DD>
<DT><A HREF="#lbAF">BUGS</A><DD>
<DT><A HREF="#lbAG">CAVEATS</A><DD>
<DT><A HREF="#lbAH">AUTHOR</A><DD>
<DT><A HREF="#lbAI">THANKS TO</A><DD>
<DT><A HREF="#lbAJ">SEE ALSO</A><DD>
</DL>
<HR>
This document was created by
man2html,
using the manual pages.<BR>
Time: 00:48:49 GMT, November 01, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by perllib2php on 01-Nov-2003 -->
