
<?php
require_once 'core/init.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $css?>
<title>the PEOPLE</title>
</head>
<body>
<?php echo $navBar ?>
<div class= "fullpage" id="midway">
</div>
<div class= "fullpage" id="midway1">
</div>
<div class="fullpage" id="footer">
</div>

<?php echo $footer ?>
</body>
</html>
<?php
/* Test code to use picture sin an array - we can make this a seperate class to dynamicly 
generate a block of text and pics for each yeam member later on

//a list of support file types to allow
$filetypes = array('.jpg','.gif','.png','.bmp'); 

//picDir                    
$path = opendir('images/profile_pics');
$profilePics = array();

//add every picture from dir to array
$i= 0;

while ($entry = readdir($path)) {
	$ext = substr($entry,strpos($entry,'.'),strlen($entry)-1);
    if(in_array($ext,$filetypes)) {
    	$profilePics[$i] = $entry;
        $i++;
    }
}

//Loop that prints sample gallery of profile pics (we need to change this but at least we can keep the images in an array for dynamic use)  
for($i=0; $i < sizeof($profilePics)-1 ; $i++) {
//add thumbnail of top view to gallery and link to full size image
	echo "<a href=\"images/profile_pics/$profilePics[$i]\" rel=\"shadowbox[test1]\" title=\"profilePics[$i]\" >
         <img src=\"images/profile_pics/$profilePics[$i]\" width=\"250px\" height=\"150px\" /></a>";               
} 
closedir($path);*/
?>