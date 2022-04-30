<?php
// handle_calculation.php
// kbyron@bmcc.cuny.edu
// 2-8-2019
?>
<html>
<head>
  <title>CALC RESULT</title>
  <h1><font face="Arial"> CIS362 INFO CENTER - CALC RESULT</h1>
</head>
<body>
<?php 
echo '<h5><font face="Arial"> <a href="index.php">HOME</a>  |
  <a href="news.php">NEWS</a> | <a href="weather.php">WEATHER</a></h5>';
?>
<?php
$num1 = $_REQUEST["number1"];
$num2 = $_REQUEST['number2'];
$operation = $_REQUEST['operation'];
//
// code starts from here
//
if ($operation == 'add') $result = $num1+$num2;
if ($operation == 'divide') $result = $num1/$num2;
if ($operation == 'multiply') $result = $num1*$num2;
if ($operation == 'subtract') $result = $num1-$num2;
// Print the requested information:
echo "<br><br><br>";
echo "<h3>The result is $result. </h3>";
?>
</body>
</html>
