<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once ("../include/commonInclude.php"); ?> 
</head>
<body>

<?php include_once ("../include/header.php"); ?>


<div class="container">
  <div class="container text-center">
    <h1>My Portfolio</h1>      

    <div id="slider" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#slider" data-slide-to="0" class="active"></li>
      <li data-target="#slider" data-slide-to="1"></li>
      <li data-target="#slider" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active" >
      	<center>
        	<img src="../img/img1.jpg" alt="Logo 1"   >
        </center>
      </div>

      <div class="item">
        <center>
        	<img src="../img/img2.jpg" alt="Logo 2" >
    	</center>
      </div>
    
      <div class="item">
        <center>
        	<img src="../img/img3.jpg"  alt="Logo 3">
    	</center>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#slider" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#slider" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Some of my Work</h3><br>
  
</div><br>



<?php include_once ("../include/footer.php"); ?>

</body>
</html>
