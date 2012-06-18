<?php



?>
<!DOCTYPE HTML>
<html lang="en">
<head>

<!-- Page designed and coded by James Johnson 2012 under contract for ERF Marketing -->


<meta charset="utf-8">
<title>E5xcellence</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">

<link rel="stylesheet" media="all" href="css/bootstrap.min.css">
<link rel="stylesheet" media="all" href="css/bootstrap-responsive.min.css">
<link rel="stylesheet" media="all" href="css/base.css">
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
        	<ul class=" nav nav-list side-menu-ul">
            	<li class="side-menu-li">
        			<a class="side-menu" href="index.php"><i class="icon-home icon-white"></i>Home</a>
            	</li>
            </ul>
        </div>
        <div class="header">
        	<div class="span10 header-nav">
            	<a href="about.html" class="pull-right header-nav-a btn">About Us</a>
                <a href="contact.php" class="pull-right header-nav-a btn">Contact Us</a>
            </div>
        </div>
        <div class="span10 main-content">			
        	<div class="span6 top-hover">
            	<a href="#" class="pull-right top-hover-a">Empower</a>
            </div>
            <div class="span6">&nbsp;</div>
            <div class="span12 spacer5em"></div>
			<div class="row">	            
                <div class="span3 side-hover">
                    <a href="#" class="side-hover-a pull-right">Enrich</a>
                </div>
                <div class="span7">&nbsp;</div>
                <div class="span2 side-hover">
                	<a href="#" class="side-hover-a pull-left">Educate</a>
                </div>
            </div>
            <div class="span12 spacer15em"></div>
            <div class="span12 spacer15em"></div>
            <div class="row">	            
                <div class="span3 side-hover">
                    <a href="#" class="side-hover-a pull-right">Energize</a>
                </div>
                <div class="span7">&nbsp;</div>
                <div class="span2 side-hover">
                	<a href="#" class="side-hover-a pull-left">Engage</a>
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
});
</script>