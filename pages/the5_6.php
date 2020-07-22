<?php 
include ('../inc/header.inc');
$page = basename($_SERVER['PHP_SELF'], '.php');

$dir = "the5";
$start_seq = 52;
$end_seq = 62;
include ("../inc/getpix_seq.php");
include ('../inc/footer.inc');
?>