<html>
<head>
<title>Carroll Family Archive</title>
<style type="text/css">@import url(../css/main.css);</style>

</head>

<body>

<?php 
$a0 = array(fncCalc("01", "02"), "Damian Carroll", "2 January 1956", "../pages/the5/thms/thm_damianasababyboy.jpg");
$a1 = array(fncCalc("02", "22"), "Rosa-Louise Carroll Sullivan", "22 February 1996", "../pages/album/thms/thm_rosie_swings.jpg");
$a2 = array(fncCalc("03", "04"), "Margaret Mary Carroll", "4 March 1932", "../pages/colmandmargaret/thms/thm_margaret_glam.jpg");
$a3 = array(fncCalc("03", "19"), "Colmcille Joseph Carroll", "19 March 1926", "../pages/colmandmargaret/thms/thm_colm_baby.jpg");
$a4 = array(fncCalc("03", "31"), "Linda Kasmaty", "31 March", "../pages/timgallery/thms/thm_lindachalk.jpg");
$a5 = array(fncCalc("04", "26"), "Hugh Michael Carroll", "26 April 1964", "../pages/hughiespics/thms/thm_h_naranjodebulnes89.jpg");
$a6 = array(fncCalc("06", "08"), "Timothy Francis Carroll", "8 June 1959", "../pages/the5/thms/thm_tim_slide.jpg");
$a7 = array(fncCalc("07", "18"), "Matthew Carroll", "18 July 1957", "../pages/teeth/thms/thm_matt.jpg");
$a8 = array(fncCalc("07", "22"), "Eden Carroll", "22 July 1995", "../pages/album/thms/thm_eden_shed_00.jpg");
$a9 = array(fncCalc("07", "30"), "Alex Che Lawes-Carroll", "30 July 2002", "../pages/jem_sally/thms/thm_alex1.jpg");
$a10 = array(fncCalc("08", "2"), "Christopher John Carroll", "2 August 1991", "../pages/gower/thms/thm_chris_toy.jpg");
$a11 = array(fncCalc("08", "2"), "Isabel Alice O'Carroll", "2 August 2006", "../pages/jem_sally/thms/thm_isabel_colm_alex.jpg");
$a12 = array(fncCalc("08", "14"), "Josh Sullivan", "14 August 1992", "../pages/album/thms/thm_josh.jpg");
$a13 = array(fncCalc("08", "21"), "Jeremy Patrick Carroll", "21 August 1962", "../pages/the5/thms/thm_jem_64.jpg");
$a14 = array(fncCalc("08", "24"), "Abigail Carroll", "24 August 1988", "../pages/gower/thms/thm_abiclimbing.jpg");
$a15 = array(fncCalc("10", "26"), "Sally Lawes O'Carroll", "26 October 1966", "../images/sal.jpg");
$a16 = array(fncCalc("12", "09"), "Madeleine Carroll", "9 December", "../pages/gower/thms/thm_maddy1.jpg");
$a17 = array(fncCalc("12", "10"), "Benjamin Carroll", "10 December 1986", "../pages/gower/thms/thm_wheely6.jpg");

$arrayAll = array($a0,$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13,$a14,$a15,$a16,$a17);
sort($arrayAll);

function fncCalc($month, $day){															
	//work out how many days it is to the next birthday

  //is this a leap year?
  $thisYear = date('Y');

  if ($thisYear % 4 == 0 || $thisYear % 100 == 0) {
    $daysThisYear = 365;
  }
  else {
    $daysThisYear = 364;
  } 

  $birthday = mktime(0,0,0,$month,$day,$thisYear);
  $today = mktime(0,0,0,date(m),date(d),$thisYear);  
  $dif = $birthday - $today;
  if ($dif < 0) $dif += ($daysThisYear * 60 * 60 * 24);
  return floor($dif / 60 / 60 / 24);
}

echo '<center>';
echo '<a href="../index.php" title="home">home</a><p />'."\n";

for ($i = 0; $i < count($arrayAll); $i++) {
  echo '<div class="birthday">';
    echo '<img src="'.$arrayAll[$i][3].'" /><br />';
    echo $arrayAll[$i][1].'<br />';
    echo $arrayAll[$i][2].'<br />';
    echo $arrayAll[$i][0].' days to birthday';
  echo '</div>'."\n";
}

echo '</center>';

?>

</body>
</html>
