<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<head>
<?php echo $ie_html5;?>
<meta charset="UTF-8">
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
<<<<<<< HEAD
<hr>

<div class = "about">
	<div class = "aboutButtons"><p>PDP</p></div>
	<div class = "aboutButtons"><p>Aalto University</p></div>
	<div class = "aboutButtons"><p>Design Factory</p></div>

</div>


<?php echo $footer ?>
=======
<?php echo $footer;?>
>>>>>>> a6f1806763b4078fecd53a20e7f23d4c53c06b97
</body>
</html>