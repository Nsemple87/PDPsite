<?php
/*
Blocks of static HTML etc so we don't have to edit things multiple times, store header, navbar etc - items which are on every page
*/

$ie_html5 = '<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->';

$css = '<!-- CSS -->
		<style>
			* { margin: 0; padding: 0; }
			
			html { 
				background: url(images/bg.jpg) no-repeat center center fixed; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover; }

			html, body {
				height: 100%; }
		</style>
		<link type="text/css" rel="stylesheet" href="css/resetstylesheet.css"/>
	    <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/><!-- CSS -->';

$header = '<!-- Navigation bar -->
			<div class="wrapper">
				<div id="navbar">  
					<nav>
						<table>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><a class="logo" href="index.php"><img src="images/icons/logo.gif" width="190" height="105"></a></td>
		                        <td><a class="menu" href="project.php">the Project</a></td>
				                <td><a class="menu" href="people.php">the People</a></td>
				                <td><a class="menu" href="prototype.php">the Prototype</a></td>
				                <td><a class="menu" href="press.php">the Press</a></td>
				            </tr>
				        </table>
				    </nav>
				</div>';

$footer = '<div class="push"></div>
    	 </div>
    	 <div id="footer" class="footer">
         <div class = "aboutButtons"><p>PDP</p></div>
			<div class = "aboutButtons"><p>Aalto University</p></div>
			<div class = "aboutButtons"><p>Design Factory</p></div>
			<a href="https://www.facebook.com"><img src="images/icons/fb.png"; height="45px"; width = "45x"/></a>
			<a href="mailto:adress@server.com?subject=Hello Team That Loves People"><img src="images/icons/email.png" ; height="45px"; width = "45px""/></a>
         </div>';
?>