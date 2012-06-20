<?php



?>
<!DOCTYPE HTML>
<html lang="en">
<head>

<!-- Page designed and coded by James Johnson 2012 under contract for ERF Marketing -->


<meta charset="utf-8">
<title>E5xcellence - Solution</title>
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
            	
        		<img class="pull-right thumbnail image-p" src="img/solutions.png" />
                
        		<p class="about-content-p">
        		You want employees who work for more than just a paycheck. Your employees want a job that offers autonomy, mastery, and purpose.
        		</p>
        		<p class="about-content-p">
        		When all those desires come together in a single workplace, the result is service excellence that sets you apart from the competition and keeps your customers coming back over and over again.
        		</p>
        		<p class="about-content-p">
        		You don’t get that kind of excellence from a book, video, or online course. You can’t impart it with a speech, seminar, or simulation. To create a lasting culture change, there’s simply no such thing as an off-the-rack solution.
        		</p>
        		<p class="about-content-p">
        		At E(5)Xcellence, we start with proven, time-tested principles, then customize implementation to the realities of your organization. Seminars, focus groups, exercises, observation – we adapt our tactics to suit your individual strategic needs.
        		</p>
        		<p class="about-content-p">
        		Changing a culture takes time and commitment throughout every level of an organization. That’s why we take the time to listen and engage, from the most senior executives to the newest front-line hires. Everyone gets a hearing, so everyone feels a part of the process.
        		</p>
                <p class="about-content-p">
        		As for deliverables, we leave you with more than a warm feeling and a pat on the back. You’ll have baseline data, achievable goals, and proven systems to help you get there. We’ll even show you how to measure results so that you can continue to check up on your people – and on us.
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
	sizer("left-menu", .90);
	sizer("main-content", .90);
	sizer("about-content", .90);
});
</script>