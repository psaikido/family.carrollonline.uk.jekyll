<?php 
include ('../inc/header.inc');
$editing = $_POST['fldEdit'];
if ($editing == 'yes editing') {
  $searchterm = $_POST['fldSearchTerm'];
  include ("../inc/getpix_search.php");
}
else {
  echo 'not editing';
}
include ('../inc/footer.inc'); 
?>
