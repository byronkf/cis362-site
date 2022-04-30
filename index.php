<?php
// index.php
// kbyron@bmcc.cuny.edu
// modified 2-10-2020
// other colors ... yellow:ee4  purple:ff00ff 
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HOME</title>
  <h1>CIS362 INFO CENTER - HOME</h1>
  <style>
    a{color:#aa00aaOB}
    body{background:#ee4} 
    h1{color:red; text-align:center; font-family:Verdana}
    h5{text-align:center}
    p{color:green}
  </style>
</head>
<body>
<?php 
echo '<h5><font face="Arial"> <a href="index.php">HOME</a>  |
  <a href="news.php">NEWS</a> | <a href="weather.php">WEATHER</a></h5>';
?>
<!-- Define a form, when button is clicked, handle_calculation.php will be executed -->
<form action="handle_calculation.php" method="get">
  <p>Enter two numbers and select an operation:</p>
  <p><label>Number 1: <input type="text" name="number1" size="20" maxlength="40"></label></p>
  <p><label>Number 2: <input type="text" name="number2" size="40" maxlength="60"></label></p>
  <p><label>Operation:
  <select name="operation">
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
  </select></label></p>
  <p><input type="submit" value= "EXECUTE" name="submit"></p>
</form>
</body>
</html>
