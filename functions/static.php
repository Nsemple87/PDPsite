<?php
/*
Blocks of static HTML etc so we don't have to edit things multiple times, store header, navbar etc - items which are on every page
*/
$header = '
<div id="wrap"><!-- Wrap all page content here -->

<!-- NAVBAR -->
<div class="navbar-wrapper">
<div class="container">
<nav class="navbar-wrapper navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand navbar-left" href="#">TEAM THAT <3 PEOPLE</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->          
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li class="disabled"><a href="#"><span class="glyphicon glyphicon-heart-empty"></span> Project</a></li>
              <li class="dropdown">  
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> People<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="disabled"><a href="#">Meet the Team</a></li>
                  <li class="disabled"><a href="#">Contact Us</a></li>
                </ul>
              </li>
              <li class="disabled"><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Press</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>
        </nav>
    </div><!-- /container -->
    </div><!-- /navbar wrapper -->';

//Footer Logic/code taken from: http://ryanfait.com/resources/footer-stick-to-bottom-of-page/
$footer = '
</div><!--/container-->
</div><!--/wrap-->
<div id="footer">
  <div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8"><p class="text-muted" align="center">Copyright &copy; 2014. Team That Loves People. All rights reserved.</p>
    </div>
    <div class="col-md-2"><a href="booyah.php"><span class="glyphicon glyphicon glyphicon-heart"></span></a></div>

    
  </div>
</div>';

?>