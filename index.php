<?php
require_once 'core/init.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $css?>
<title>Team That Loves People</title>
</head>

<body>

<div class= "fullpage" id="header">
<?php echo $navBar ?>
</div>

<div class= "fullpage" id="midway">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script>
			$(function(){
			$('.fadein img:gt(0)').hide();
			setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
			});
		</script>

		<div class="fadein" id="slider">
			<!--<img src="images/slider/01.jpg">
			<img src="images/slider/02.jpg">
			<img src="images/slider/03.jpg">
			<img src="images/slider/04.jpg">
			<img src="images/slider/05.jpg">-->

			<img src="images/confusedsmiley.jpg">
			<img src="images/TTLP1.jpg">
			<img src="images/lightbulb.jpg">
			<img src="images/TTLP2.jpg">
			<img src="images/confused1.jpg">
		</div>

</div>

<div class= "fullpage" id="midway1">

</div>

<!--<div class="about">
	
</div>	-->

<div id="footer">
	<div class = "aboutButtons">
		<p>PDP</p>
	</div>
	
	<div class = "aboutButtons">
		<p>Aalto University</p>
		<p>
		</p>
	</div>
	
	<div class = "aboutButtons">
		<p>Design Factory</p>
		<p>
		</p>
	</div>
</div>

<div id="footer1">

<?php echo $footer1 ?>
	
</div>

</body>

</html>