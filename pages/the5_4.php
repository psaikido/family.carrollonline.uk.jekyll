<?php 
include ('../inc/header.inc');
$page = basename($_SERVER['PHP_SELF'], '.php');

$dir = "the5";
$start_seq = 34;
$end_seq = 42;
include ("../inc/getpix_seq.php");

$nextpage = 'the5_5';
$groupnum = '(5th of 6 pages - Jem)';
include ('../inc/footer.inc');
?>