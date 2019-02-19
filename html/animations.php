<!DOCTYPE html>
<html lang="en">
<head>
  <title>Animation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once ("../include/commonInclude.php"); ?> 
</head>
<body>

<?php include_once ("../include/header.php"); ?>


<div class="container">

<!--Animation through Canvas-->
<canvas id="canvas" width="400" height="400"></canvas>


<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
ctx.strokeStyle = 'rgba(51, 0, 0, 0.8)';

// Create gradient
var grd = ctx.createLinearGradient(0, 0, 400, 400);
grd.addColorStop(0, "red");
grd.addColorStop(1, "white");

// Fill with gradient
ctx.fillStyle = grd;
ctx.fillRect(0, 0, 400, 400);
setInterval(drawClock,50);
var i=0;

function drawClock() {
 
if(i>150)
{
	// clear circle
	ctx.clearRect(0, 0, 400, 400);
  	ctx.save();
  	ctx.fillStyle = grd;
	ctx.fillRect(0, 0, 400, 400);
  	i=0;
}  
// create circle
ctx.beginPath();
ctx.arc(200, 200, i, 0, 2 * Math.PI);
ctx.stroke(); 
 i=i+10;
}
</script>

<!-- Animation through CSS-->


<div class='animationDiv'></div>
</body>
</html>
