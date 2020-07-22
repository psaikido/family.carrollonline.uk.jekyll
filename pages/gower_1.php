<?php 
include ('../inc/header.inc');
$page = basename($_SERVER['PHP_SELF'], '.php');
echo '<a href="../files/abispoems.htm">Two of Abi\'s poems</a><p>';
include ('../inc/getpix.php');
$nextpage = 'gower_2';
$groupnum = '(2 of 2)';
include ('../inc/footer.inc');
?>