<?php 
include ('../inc/header.inc');
$page = basename($_SERVER['PHP_SELF'], '.php');

$dir = "the5";
$start_seq = 20;
$end_seq = 28;
include ("../inc/getpix_seq.php");

$nextpage = 'the5_3';
$groupnum = '(3rd of 6 pages - Matt)';
include ('../inc/footer.inc');
?>