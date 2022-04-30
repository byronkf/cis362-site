<?php
// news.php
// kbyron@bmcc.cuny.edu
// 2-8-2019
?>
<html>
<head>
  <title>NEWS</title>
  <h1><font face="Arial"> CIS362 INFO CENTER - NEWS</h1>
</head>
<body>
<?php
echo '<h5><font face="Arial"> <a href="index.php">HOME</a>  |
  <a href="news.php">NEWS</a> | <a href="weather.php">WEATHER</a></h5>';
echo '<br><br><br>';
$array = array("up", "down", "sharply up", "sharply down");
echo '<h3>The DOW is '.$array[rand(0,3)].'.</h3>';
if (rand(0,1) < 1)
  echo "Image:<br><img src='rams_pic.jpg' alt='No image available.' style='width:256px;' >";
else
  echo "Image:<br><img src='bengals_pic.png' alt='No image available.' style='width:256px;' >";
echo '</body>';
echo '</html>';
?>
