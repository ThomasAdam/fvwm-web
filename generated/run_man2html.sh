#!/bin/sh

#  Modification History

#  Changed on 04-Jul-2001 by Mikhael Goikhman (migo):
#  - s/MULTICOL//; s/all_man2html.ksh/run_man2html.sh/; s/man-pages/index/
#  - Added support for Linux man2html with a lot of hacks to make it better.

#  Changed on 04/30/99 by Dan Espen (dane):
#  - Do all the man pages using "find" and generate the man page index.

#  Created on 11/06/98 by DanEspen (dje):
#  - Use man2html to convert fvwm2 man pages to html.

# Arg1 is the source tree location
#      if missing, use ../../fvwm
# Arg2 is where the html should be put...
#      if missing, use the manpages directory.

sourcedir=$1
if [ "$1" = "" ] ; then
  sourcedir="../../fvwm"
fi
outdir=$2
if [ "$2" = "" ] ; then
  outdir=./manpages
fi


# Not really needed...
index='index'

# Start the index page:
page="Index"
file="index"

# If this was ksh, this would be the "header" function.
echo "<html>
<head>
<title>FVWM Manpage - $page</title>
</head>
  <body BACKGROUND=\"../../black-stone1.jpg\"
    bgcolor=\"#000000\" text=\"#ffffff\"
    link=\"#FFFF88\" vlink=\"#EEDDDD\" alink=\"#ff0000\">
<center>
<h1><font color=\"pink\">FVWM Manpage - $page</font></h1>
</center>
<pre>
" > $outdir/$file.html

echo '</pre>
<!-- Generic header logic turned on "pre" had to turn it off -->
<hr>
These pages were last generated on '`date`' by '`whoami`,'
from the man pages in directory '"$sourcedir"'.
'>>$outdir/$index.html

# Init the current section to 0.
curr_section="0"

# There is some logic in here for man pages in other than section 1,
# right now we don't need it.  Also it doesn't work because this isn't ksh...
for i in `find $sourcedir -name '*.[1]' | sort` ; do
  file=`basename $i | cut -d. -f1`
  page=$file
  section=1

  # If this was ksh, this would be the "header" function.
  echo "<html>
<head>
<title>FVWM Manpage - $page</title>
</head>
  <body BACKGROUND=\"../../black-stone1.jpg\"
    bgcolor=\"#000000\" text=\"#ffffff\"
    link=\"#FFFF88\" vlink=\"#EEDDDD\" alink=\"#ff0000\">
<center>
<h1><font color=\"pink\">FVWM Manpage - $file</font></h1>
</center>
<pre>
" > $outdir/$file.html

  # Embed the text with some adjustment:
  # Italics are shown in yellow.  References, (if there were any)
  # would be shown in cyan.  Unfortunately bold stuff in man pages
  # is lost.  Maybe in the man command, maybe in man2html.
  # Output looks pretty good anyway (to my eyes).
  echo "Processing $page."
  if [ "`man2html none 2>/dev/null | grep -i 'Content-type: text/html'`" ]; then
    # use man2html cgi found on some linux systems

    # add html style affecting global document view
    echo '</pre>
	<style><!--
	# All these may be commented out
	#H1, H2 { margin-left: -0; }
	#BLACKQUOTE { margin-left: +48; }
	#P { margin-left: +24; }
	B { color: #FFFFD0; }
	I { color: #D0FFFF; }
	--></style>
    ' >> $outdir/$file.html

    # fix ignored .in, mixed .B \fIfoo\fP, strip http headers and more
    cat $i \
    | perl -pe '
	s/^(.in \+.*)/%blockquote%/i; s/^(.in -.*)/%\/blockquote%/i;
	s/^.B (.+\\fP.+)$/"\\fB" . ($a = $1, $a =~ s=\\fP=\\fP\\fB=g, $a) . "\\fP"/e;
    ' \
    | man2html \
    | awk '{ if (html) print; if ($0 == "") html = 1; }' \
    | perl -pe '
	s=http://localhost/cgi-bin/man/man2html=./=;
	s/<A HREF="mailto:StartMenu@/<a name="local-fix:/;
	s=%(/?blockquote)%=<$1>=;
    ' \
    | perl -e '$_ = join("", <>); s/(<pre>)\s+(<blockquote>)\n*/$1$2/sig; \
      s=\n*(</pre>)\s+(</blockquote>)=$2$1=sig; print' \
    >> $outdir/$file.html
  else
    nroff -man $i | man2html -bare \
     -belem 'font color="cyan"'\
     -uelem 'font color="yellow"'\
    nroff -man $i | man2html \
    | sed -e 's/color="yellow"</color="yellow"></'\
    >> $outdir/$file.html
  fi


# If this was ksh, this would be the "footer" function.
  echo "</pre>
<hr>
<!-- This file automatically generated by run_man2html.sh
on `date` -->
</body>
</html>
" >> $outdir/$file.html

  # Section header, right now, one section...
  if [ "$curr_section" != "$section" ] ; then
    if [ "$curr_section" != "0" ] ; then
      echo '</menu></MULTICOL>'>>$outdir/$index.html
    fi
    echo '<hr><font color="cyan">Start of man pages in section '$section'.
</font>
<ul>'>>$outdir/$index.html
    curr_section=$section
  fi

  echo '<li><a href="'$file'.html">'$page'('$section')</a>'>>$outdir/$index.html
done

# Finish the index page:
page="Index"
file="index"
# This puts out a <pre> only because the footer puts out </pre>
echo '</ul><pre>'>>$outdir/$index.html

# If this was ksh, this would be the "footer" function.
  echo "</pre>
<hr>
<!-- This file automatically generated by run_man2html.sh
on `date` -->
</body>
</html>
" >> $outdir/$file.html
