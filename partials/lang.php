<?php
include( "lang/en.php" );
include( "lang/zn.php" );
include( "lang/de.php" );
include( "lang/nl.php" );
include( "lang/fr.php" );

$languages = ["en", "zn" , "de", "nl", "fr" ];

session_start();
if (isset($_GET['lang']) && $_GET['lang']!='') {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
}elseif (isset($_SESSION['lang'])){
    $lang = $_SESSION['lang'];
}else{
    $lang = 'en';
}
?>
