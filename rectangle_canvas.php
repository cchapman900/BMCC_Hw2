<?php

($height > $width) ? $maxVal = $height : $maxVal = $width;
$scale = (600 / $maxVal) * .5;
$scaledWidth = $width * $scale;
$scaledHeight = $height * $scale;

$gridIncrement = $scaledWidth / $width;
$gridSteps;
if ($maxVal < 20) {
	$gridSteps = 1;
} else {
	$gridSteps = $maxVal/20;
}

?>

<h3 style="text-align:center">Scale: <?php echo $gridSteps?> units</h3>
<canvas id="canvas" width="<?php echo $width*$scale ?>" height="<?php echo $height*$scale?>" style="border:3px solid">
</canvas>



<script>

var c=document.getElementById("canvas");
var ctx=c.getContext("2d");

	for (var i = 0; i < <?php echo $scaledHeight ?>; i = i+<?php echo $gridIncrement * $gridSteps?>) {
		
	ctx.moveTo(0, i);
	ctx.lineTo(<?php echo $scaledWidth?>, i);
	}
	
	for (var i = 0; i < <?php echo $scaledWidth ?>; i = i+<?php echo $gridIncrement * $gridSteps?>) {
		
	ctx.moveTo(i, 0);
	ctx.lineTo(i, <?php echo $scaledHeight?>);
	}
	
	ctx.stroke();




</script>