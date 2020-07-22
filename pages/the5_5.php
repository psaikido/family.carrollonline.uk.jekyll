<?php 
include ('../inc/header.inc');
$page = basename($_SERVER['PHP_SELF'], '.php');

$dir = "the5";
$start_seq = 43;
$end_seq = 51;
include ("../inc/getpix_seq.php");

$nextpage = 'the5_6';
$groupnum = '(6th of 6 pages - Hughie)';
include ('../inc/footer.inc');
?>