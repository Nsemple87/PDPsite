<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
<title>Team That Loves People</title>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

</head>
<body>

<?php echo $header;?>

<!-- Carousel -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    
    <div class="item active">
      <img src="images/slider/1.jpg">
      <div class="container">
        <div class="carousel-caption">
          <h1>Children's Hospital Project</h1>
          <p>The healthcare experience improved...</p>
        </div>
      </div>
    </div>

    <div class="item">
      <img src="images/slider/2.jpg">
      <div class="container">
        <div class="carousel-caption">
          <h1>Working Together</h1> 
          <p>Brainstorming to make a difference...</p>
        </div>
      </div>
    </div>

    <div class="item">
      <img src="images/slider/5.jpg">
      <div class="container">
        <div class="carousel-caption">
          <h1>Comfy?</h1>
          <p>Re-build with the Patient's relaxation in mind... </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>
<!-- /.carousel -->

  <div class="jumbotron">
  <div class="container">
    <div class="row">
     <div class="col-md-6 col-md-offset-3">
    <img src="images/logo3.jpg" class="img-responsive text-center">
    </div></div>
</div>
</div>

<div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <a href="http://www.aalto.fi/en/"><img class="img-responsive img-circle" src="images/aalto.jpg"></a>
              <h3 class="text-center"><a href="http://www.aalto.fi/en/"id = "text">Aalto University</a></h3>
              <p>Located in one of the world design capitals, Helsinki, Finland, Aalto University is where arts and science meets business and technology. 
    Encouraging cross-disciplinary projects and learning in practice, Aalto University supports students to excel in their studies as well as
     their future careers. Ultimately, Aalto University strives to help students reach the common goal of building a better world.</p>
              
            </div>
 
            <div class="col-md-4">
              <a href="http://pdp.fi/"><img class="img-responsive img-circle" src="images/pdp.jpg"></a>
              <h3 class="text-center"><a href="http://pdp.fi/"id = "text">Project Development Project (PDP)</a></h3>
              <p>PDP is a project course at Aalto University. Collaborating with students from all over the world, a 
    multidisciplinary team takes part in a project sponsored by one or more domestic and foreign companies. Lasting the entire
     academic year, students are encouraged to understand the quality of their design, engineering, and marketing skills as well as cope
      with the challenges that may arise from interdisciplinary teamwork while preparing them to carry out product development tasks developed by each organization.</p>
            </div>
            <div class="col-md-4">
              <a href="http://www.aaltodesignfactory.fi/"><img class="img-responsive img-circle" src="images/df.jpg"></a>
              <h3 class="text-center"><a href="http://www.aaltodesignfactory.fi"id = "text">Design Factory</a></h3>
              <p>Spanning a total of 3000 square meters, Design Factory is where creativity, design and a great deal of collaboration come to life. 
    Bringing together teachers, students, researchers and a variety of businesses, it is not surprising that the Design Factory is a home to innovation.
     Fully equipped with easy access to all materials, work spaces and equipment, Aalto University’s Design Factory fits perfectly with the university’s
      goal to promote learning in practice.</p>
            </div>
          </div>
        </div>

<?php echo $footer;?>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="scripts/bootstrap.js"></script>
</body>
</html>