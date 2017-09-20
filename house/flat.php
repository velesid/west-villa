<?
/***
Template Name: Flat AJAX
 **/
$flatType = $_GET['flattype'];
$flatNum = (int)$_GET['flatnum'];
$floorNull = (int)$_GET['floor'];
$number = (int)$_GET['number'];
//var_dump($number);
include get_template_directory() . '/house/flat-content.php';
