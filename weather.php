<?php
// weather.php
// kbyron@bmcc.cuny.edu
// 2-8-2019
//
?>
<html>
<head>
  <title>WEATHER</title>
  <h1><font face="Arial"> CIS362 INFO CENTER - WEATHER</h1>
</head>
<body>
<?php
echo '<h5><font face="Arial"> <a href="index.php">HOME</a>  |
  <a href="news.php">NEWS</a> | <a href="weather.php">WEATHER</a></h5>';
echo '<br><br><br>';
$array = array("sunny", "rainy", "cold", "windy");
echo '<h3>The weather is '.$array[rand(0,3)].'.</h3>';
if (rand(0,2) < 1)
  echo "Image:<br><img src='rangers_pic.png' alt='No image available.' style='width:256px;' >";
else
  if (rand(0,1) < 1)
    echo "Image:<br><img src='islanders_pic.png' alt='No image available.' style='width:256px;' >";
  else
    echo "Image:<br><img src='bruins_pic.png' alt='No image available.' style='width:256px;' >";
echo '</body>';
echo '</html>';
?>
