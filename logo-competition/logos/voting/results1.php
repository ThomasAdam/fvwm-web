<?php
//--------------------------------------------------------------------
//-  File          : @FILENAME@
//-  Project       : FVWM Home page
//-  Programmer    : Logo Competitor
//--------------------------------------------------------------------
$rel_path = "../../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
if(!isset($navigation_check)) include_once($rel_path."/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Logo Competition - Stage 1 Result Page";
$heading        = "FVWM - Logo Competition - Stage 1 Result Page";
$link_name      = "Logo Competition Stage 1 Result Page";
$short_name     = "Stage 1 Results";
$link_picture   = "pictures/icons/logo_competition";
$parent_site    = "logo_competition";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "logo_competition_results1";

//--------------------------------------------------------------------
// check if we should stop here
//--------------------------------------------------------------------
if(isset($navigation_check)) return;

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($theme_file));
	exit();
}
?>

<script language="JavaScript">
function change_bg_color(color, fg) {
    document.bgColor = color;
    document.body.style.backgroundColor = color;
    document.fgColor = fg;
    document.body.style.color = fg;
}
</script>

<?php 
include_once(sec_filename("voting_functions.inc"));
include_once(sec_filename("result_functions.inc"));
?>

<h1>Fvwm logo voting result page - After first stage</h1>

<?php
//--------------------------------------------------------------------
//- insert logos 
//--------------------------------------------------------------------
$logo_list = "logo_list.inc";

// read logo list
$logo_array = array();

include_once(sec_filename($logo_list));

$num_of_logos = 0;
$placement = 0;
$prevcount = -1;

$vote_array = get_vote_array("daten/stimmen.dat");
$result = get_result($vote_array, $logo_array);

echo "<h4>Status after ".count($vote_array)." voters</h4>";

echo "(Placement in parenthesis) "; 
echo "{Number of votes in braces} "; 
echo '[Percentage in brackets] ';

arsort($result);

echo "<hr>\n";

foreach( $result as $number => $logos ) {

    $num_of_logos++;

    if( $prevcount != $result[$number] ) {
        $placement = $num_of_logos;
    }

    $prevcount = $result[$number];

    echo "(".$placement.") ";
 
    // if( strlen($_GET["show_count"]) > 0 ) {
        echo '{'.$result[$number].'} ';
    // } 

    if(isset($_GET["show_num"])) {
        echo ':'.$number.': ';
    } 

    // if ( strlen($_GET["show_percent"]) > 0 ) {
        echo '['.(ceil($result[$number]/count($vote_array)*1000)/10).'%] ';
    // }

    foreach( $logo_array[$number] as $logo ) {
        $logo_preview = preg_replace('/...$/', "png", $logo);
        echo '<a href="../'.dirname($logo).'?theme='.$theme.'" target="newwindow">';
        echo '<img src="previews/'.$logo_preview.'" border="0" align="middle" vspace="3" hspace="3">';
        echo '</a>';
        // echo $logo_preview;
    }

    //     if( strlen($_GET["show_voters"]) > 0 ) {
    //         $voters = get_voters_for_logo($number, $vote_array);
    //         echo "<br>";
    //         foreach( $voters as $voter ) {
    //             echo $voter.", ";
    //         }
    //     }
    echo "<hr>\n";
}
?>
