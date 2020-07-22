<?php 
include ('../inc/header.inc');
$page = basename($_SERVER['PHP_SELF'], '.php');

$dir = "the5";
$start_seq = 29;
$end_seq = 33;
include ("../inc/getpix_seq.php");

$nextpage = 'the5_4';
$groupnum = '(4th of 6 pages - Tim)';
include ('../inc/footer.inc');
?>