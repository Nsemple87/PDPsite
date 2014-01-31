<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<?php echo $css?>
<title>Team That Loves People</title>
</head>
<body>
<?php echo $header ?>
<div class= "fullpage" id="midway">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
<hr>

<div class = "about">
	<div class = "aboutButtons"><p>PDP</p></div>
	<div class = "aboutButtons"><p>Aalto University</p></div>
	<div class = "aboutButtons"><p>Design Factory</p></div>

</div>


<?php echo $footer ?>
</body>
</html>