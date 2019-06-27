<?php
$_SESSION["PROJECT_MODE"]='DEBUG'; // DEBUG / PROD
$_SESSION["PROJECT_VERSION_NUMBER"]='1.0';
if($_SESSION["PROJECT_MODE"]=='DEBUG'){
$_SESSION["PROJECT_URL"]="http://".$_SERVER["HTTP_HOST"]."/ca/web/apps/".$_SESSION["PROJECT_VERSION_NUMBER"]."/"; 
} else {
$_SESSION["PROJECT_URL"]="http://apps.mylocalhook.com/";
}
?>