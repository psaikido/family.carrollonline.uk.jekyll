<?php 
include ('../inc/header.inc');
$page = basename($_SERVER['PHP_SELF'], '.php');

$dir = "the5";
$start_seq = 1;
$end_seq = 19;
include ("../inc/getpix_seq.php");

$nextpage = 'the5_2';
$groupnum = '(2nd of 6 pages - Damian)';
include ('../inc/footer.inc');
?>