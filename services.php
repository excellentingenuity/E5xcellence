<?php



?>
<!DOCTYPE HTML>
<html lang="en">
<head>

<!-- Page designed and coded by James Johnson 2012 under contract for ERF Marketing -->


<meta charset="utf-8">
<title>E5xcellence - Services</title>
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
		<div class="top-logo span4">
             <a class="side-menu" href="index.php">
            <img class="nav-img" src="img/white-logo2.png" />
            </a>
        
		<div class="span6 left-menu">
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
        </div>
        <div class="header">
        	<div class="span8 header-nav">
            	<a href="about.php" class="pull-right header-nav-a btn hidden-phone">About Us</a>
                <a href="contact.php" class="pull-right header-nav-a btn hidden-phone">Contact Us</a>
            </div>
        </div>
        <div class="span8 main-content">
        	<div class="span10 about-content">
            <div class="spacer1em span12 hidden-phone">&nbsp;</div>
            <h1 class="span12 page-header-h1">Services</h1>
        		<img class="pull-left thumbnail image-p" src="img/services.png" />
        		<p class="about-content-p">
        		Medical Homes. ACOs. Electronic Health Records and Meaningful Use.
        		</p>
        		<p class="about-content-p">
        		With all the rapid changes in healthcare these days, it can be tempting for providers to chase the “new new thing".
        		</p>
        		<p class="about-content-p">
        		But government incentives and technological advances will never solve the most basic business problem of shrinking revenues and growing expenses. For that, you need happier customers and more committed employees – a change from within, not without.
        		</p>
        		<p class="about-content-p">
        		At E(5)xcellence, we understand that culture change isn’t easy in the healthcare industry. That’s why we’ve developed a proven, five-step process that turns skeptics into true believers who deliver excellent service every time.
        		</p>
        		<p class="about-content-p">
        		If you want <em>your</em> practice to be:<br />
                <ul class="services-ul">
                	<li>A great place to work</li>
                    <li>A great place to connect with purpose</li>
                    <li>A great place to receive care</li>
                </ul><br />
                … then we should talk. Call us today for a free consultation.
        		</p>
                <p class="about-content-p">
        		We’d love to show you why <em>service to the Nth degree</em> is the most vital healthcare reform of all.
        		</p>
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
	sizer("left-menu", .60);
	sizer("main-content", .90);
	sizer("about-content", .90);
});
</script>