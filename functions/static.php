<?php
/*
Blocks of static HTML etc so we don't have to edit things multiple times, store header, navbar etc.
*/
$css = '<!-- CSS --><link type="text/css" rel="stylesheet" href="css/resetstylesheet.css"/>
	   <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/><!-- CSS -->';

$navBar = '<!-- Navigation bar -->
		<nav>
			<table>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><a href="index.php"><img src="images/logo.gif" width="190" height="105"></a></td>
                    <td><a href="project.php">the Project</a></td>
                    <td><a href="people.php">the People</a></td>
                    <td><a href="prototype.php">the Prototype</a></td>
                    <td><a href="press.php">the Press</a></td>
                </tr>
            </table>
        </nav>';
?>