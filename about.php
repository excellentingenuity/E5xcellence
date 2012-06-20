<?php



?>
<!DOCTYPE HTML>
<html lang="en">
<head>

<!-- Page designed and coded by James Johnson 2012 under contract for ERF Marketing -->


<meta charset="utf-8">
<title>E5xcellence - About Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">

<link rel="stylesheet" media="all" href="css/bootstrap.min.css">
<link rel="stylesheet" media="all" href="css/bootstrap-responsive.min.css">
<link rel="stylesheet" media="all" href="css/base.css">
<link rel="stylesheet" media="all and (max-width: 760px)" href="css/mobile.css">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<!--javascript includes -->
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/sizer.js"></script>

</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2 left-menu">
        	<ul class="nav nav-list side-menu-ul">
            	<li class="side-menu-li">
        			<a class="side-menu" href="index.php">
                    <img class="nav-img" src="img/home.png" /><br />
                    <i class="icon-home icon-white"></i>Home</a>
            	</li>
                <li class="side-menu-li">
                	<a class="side-menu" href="solutions.php">
                    <img class="nav-img" src="img/solutions.png" />
                    Solutions</a>
                </li>
                <li class="side-menu-li">
                	<a class="side-menu" href="services.php">
                    <img class="nav-img" src="img/services.png" />
                    Services</a>
                </li>                 
                <li class="side-menu-li hidden">
                	<a class="side-menu" href="industries.php">Industries</a>
                </li>
                <li class="side-menu-li visible-phone">
                	<a class="side-menu" href="about.php">About Us</a>
                </li>                
                <li class="side-menu-li visible-phone">
                	<a class="side-menu" href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="header">
        	<div class="span10 header-nav">
            	<a href="about.php" class="pull-right header-nav-a btn hidden-phone">About Us</a>
                <a href="contact.php" class="pull-right header-nav-a btn hidden-phone">Contact Us</a>
            </div>
        </div>
        <div class="span10 main-content">
        	<div class="span10 about-content">
            <div class="spacer5em span12 hidden-phone">&nbsp;</div>
        		<div class="span12">
                
        		<p class="about-content-p"><img class="thumbnail about-image pull-left" src="http://placehold.it/150x250" />
        		Tim Larkins has more than two decades of professional experience in service-related industries, including healthcare, business associations and education. He has won the prestigious Summit Award for Service Excellence Program Director of the Year and led his team to an unprecedented sweep of five national awards at the HealthCare Service Excellence Conference.
                
        		</p>
        		<p class="about-content-p">
        		Trophies aside, Tim believes that the true reward of his work lies in changing hearts and minds. He is a passionate champion of Service Excellence, and his goal with every engagement is inspiring others to share in that vision.
        		</p>
        		<p class="about-content-p">
        		Tim knows firsthand that can be a tough sell. As a financial executive at Laurens County Health Care System, he lobbied for a Service Excellence Initiative where two previous attempts had failed within 6 months. The board was divided, staff was cynical and physicians were openly hostile.
        		</p>
        		<p class="about-content-p">
        		Determined to change the culture, Tim and his team endured. The outcome of that effort is still vivid in his mind:
        		<blockquote class="about-content-quote"><em>
        		Two and a half years later at a medical staff meeting, one of our strongest opponents took the floor and commended us for going against him and many of his colleagues. He spoke of the cultural change that had occurred within the walls of the system and within him personally. After he finished, the entire medical staff stood and applauded the results of the program.
        		</em></blockquote>
        		</p>
        		<p class="about-content-p">
        		Applause, trophies, changing the world - the life of a Service Excellence consultant can be pretty heady. Fortunately Tim has two children at home to keep him humble and a wife of 20 years to keep him grounded.
        		</p>
                </div>
        	</div>			
        </div>
  
	</div>
    <div class="row-fluid">
    	<footer class="span12 footer">
        	Copyright 2012 E5Xellence - <a class="footer-a" href="http://www.erfmarketing.com">ERF</a>
        </footer>
    </div>
</div>
</body>
</html>
<script>
$(document).ready(function() {
	sizer("left-menu", .90);
	sizer("main-content", .90);
	sizer("about-content", .90);
});
</script>