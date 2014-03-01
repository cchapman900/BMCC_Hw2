<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>BMCC Web Programming - HW2</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>



<?php
	
	$empty;
	$width;
	$height;
	$area;
	$perimeter;
	
	if (empty($_GET) or $_GET["height"]==0 or $_GET["width"]==0){
		$empty = true;
	}
	else {
		$empty = false;
		$width = $_GET["width"];
		$height = $_GET["height"];
		$area = $height * $width;
		$perimeter = $height * 2 + $width * 2;
	}
	
?>

<div class="container">
<h1 style="text-align:center">Rectangle Area and Perimeter Calculator</h1>

<div class="content">
<div class="form">
<form action="index.php" method="get">
<table width="400" border="0">
  <tr>
    <td align="right"><label for="width">width: </label></td>
    <td><input name="width" type="text" size="10" maxlength="3" value="<?php echo $width?>"></td>
    <td align="right"><label for="height">height: </label></td>
    <td><input name="height" type="text" size="10" maxlength="3" value="<?php echo $height?>"></td>
  </tr>
  <tr>
  	<td style="margin:0; text-align:center" colspan="4">
    <input type="submit" value="Calculate">
    </td>
  </tr>
  <tr>
  <td style="text-align:center" colspan="4">
  <br/>
  </td>
  </tr>
  <tr>
    <td colspan="4" align="center">Area: <?php echo $area?></td>
  </tr>
  <tr>
    <td colspan="4" align="center">Perimeter: <?php echo $perimeter?></td>
  </tr>
</table>
</form>

<p></p>

</div> <!-- end div "form" -->

<div class="canvas">
<?php 
if (!$empty) { 
	include "rectangle_canvas.php";
}
?>
</div> <!-- end div "canvas"-->

</div> <!-- end div "content"-->
</div> <!-- end div "container" -->



</body>
</html>
