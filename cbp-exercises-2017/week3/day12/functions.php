<?php
function get_current_year()
{
    return date('Y');
}
?>

<?php 
function print_current_date() {
    echo date('Y M d , H:i:s');
}
?>

<?php function render_page($page_title) {
    include 'header.php';
    include $page_title;
    include 'footer.php';
}
?>

 <?php define('MY_OS', 'MacOS Sierra');
?>

<?php 

function toFahrenheit($celsius) {
    return (9/5) * $celsius + 32;
} ?>

<?php function isOdd ($number) {
return $number%2 == 0 ? ' is even':' is odd';
} ?>

<?php function isTall($height) {
    if($height>=180) {
        return "is tall";
    }
    else if($height>=160) {
        return "is average";
    }
    else {
        return "is small";
    }
}
?>

<?php function browser($os) {
    switch($os) {
        case "Windows":
        return "Edge, Internet Explorer, Chrome or Firefox";
        break;
        case "Linux":
        return "I have no clue, probably Opera and chrome";
        break;
        case "MacOS":
        return "Safari, Chrome and Firefox";
        break;
        default: "You probably don't even know what OS is";
    }
}