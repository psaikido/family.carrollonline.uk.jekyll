<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<title></title>
<style type="text/css">@import url(../css/main.css);</style>

</head>

<body>
<?php 
include ('../inc/cn_read.inc.php');

$user = $_POST['fldUser'];

$query = 'select p.* from pix as p, descriptions as d where ';
$query .= 'd.user like "%'.$user.'%" and p.picid = d.picid';

$result = mysql_query($query);
$num_results = mysql_num_rows($result);

echo mysql_error();

include ('../inc/readpix.php');
?>

</body>
</html>
