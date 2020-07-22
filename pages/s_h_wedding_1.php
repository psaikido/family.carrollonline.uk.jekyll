<?php include ('../inc/header.inc'); ?>

<style type="text/css">
body {
 background:#fff url('../images/confetti.gif') fixed;
 color:#000; 
}
#gallery a, #topbar a, #bottombar a {
 background-color:#fff;
 color:#000;
}
</style>

<a href="s_h_wedding/blessings.htm">Blessings</a><p>

<?php 
$page = basename($_SERVER['PHP_SELF'], '.php');
include ('../inc/getpix.php');
$nextpage = 's_h_wedding_2';
$groupnum = '(2nd of 2)';
include ('../inc/footer.inc');
?>