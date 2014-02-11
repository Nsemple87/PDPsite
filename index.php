<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<head>
<?php echo $ie_html5;?>
<meta charset="UTF-8">
<style>
	html{ 
		background: url(images/bg.jpg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover; }
	</style>
<?php echo $css;?>
<title>Team That Loves People</title>
</head>
<body>

<?php echo $header;?>

 <div class= "fullpage" id="midway">
	<script src="scripts/jquery.min.js"></script>
		<script>
			$(function(){
			$('.fadein img:gt(0)').hide();
			setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
			});
		</script>
		<div class="fadein" id="slider">
			<img src="images/slider/01.jpg">
			<img src="images/slider/02.jpg">
			<img src="images/slider/03.jpg">
			<img src="images/slider/04.jpg">
			<img src="images/slider/05.jpg">
		</div>
</div>

<div class= "about">
</div>

<hr>

<div class = "about">
	<div class = "aboutButtons"><a href="http://www.aalto.fi/en/"id = "text">Aalto University</a></div>
	<div class = "aboutButtons"><a href= "https://www.facebook.com/aaltopdp" id = "text">Project Development Project (PDP)</a></div>
	<div class = "aboutButtons"><a href="http://www.aaltodesignfactory.fi/"id = "text">Design Factory</a></div>

</div>

<hr>

<div class ="aboutdesc">
	<div class= "description">
	<p>Located in one of the world design capitals, Helsinki, Finland, Aalto University is where arts and science meets business and technology. 
		Encouraging cross-disciplinary projects and learning in practice, Aalto University supports students to excel in their studies as well as
		 their future careers. Ultimately, Aalto University strives to help students reach the common goal of building a better world.</p>
	</div>

	<div class= "description">
	<p>PDP is a project course at Aalto University. Collaborating with students from all over the world, a 
		multidisciplinary team takes part in a project sponsored by one or more domestic and foreign companies. Lasting the entire
		 academic year, students are encouraged to understand the quality of their design, engineering, and marketing skills as well as cope
		  with the challenges that may arise from interdisciplinary	teamwork while preparing them to carry out product development tasks developed by each organization.</p>
	</div>
	
	<div class= "description">
	<p>Spanning a total of 3000 square meters, Design Factory is where creativity, design and a great deal of collaboration come to life. 
		Bringing together teachers, students, researchers and a variety of businesses, it is not surprising that the Design Factory is a home to innovation.
		 Fully equipped with easy access to all materials, work spaces and equipment, Aalto University’s Design Factory fits perfectly with the university’s
		  goal to promote learning in practice. </p>
	</div>
</div>

<div class= "about">
</div>


<?php echo $footer;?>

</body>
</html>