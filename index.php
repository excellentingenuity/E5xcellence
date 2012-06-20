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
<link rel="stylesheet" media="all and (max-width: 760px)" href="css/mobile.css">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<!--javascript includes -->
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/sizer.js"></script>
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-button.js"></script>
<script src="js/tooltip.js"></script>

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
        <div class="span10 main-content hidden-phone">			
        	<div class="span6 top-hover">
            	<a href="#" class="pull-right top-hover-a" id="empower" rel="popover" data-content="<img class='pop-img thumbnail pull-right' src='img/empower.jpg' /> Creating employee competence and satisfaction by sharing limited authority with them.  It allows them to make decisions and take initiative in order to improve service and deliver bottom line results." data-original-title="Empower">Empower</a>
            </div>
            <div class="span6">&nbsp;</div>
            <div class="span12 spacer5em"></div>
			<div class="row">	            
                <div class="span3 side-hover">
                    <a href="#" class="side-hover-a pull-right" id="enrich" rel="popover" data-content="<img class='pop-img thumbnail pull-right' src='img/enrich.jpg' /> Vertically restructuring an employees position in order to provide them with greater responsibilities.  The goal is to increase the employee's satisfaction by giving greater authority, autonomy, and control over the way the job is accomplished." data-original-title="Enrich">Enrich</a>
                </div>
                <div class="span7">&nbsp;</div>
                <div class="span2 side-hover">
                	<a href="#" class="side-hover-a pull-left" id="educate" rel="popover" data-content="<img class='pop-img thumbnail pull-right' src='img/educate.jpg' /> Imparting instruction or information for a certain level of knowledge or skill that improves the employee's performance." data-original-title="Educate">Educate</a>
                </div>
            </div>
            <div class="span12 spacer15em"></div>
            <div class="span12 spacer15em"></div>
            <div class="row">	            
                <div class="span3 side-hover">
                    <a href="#" class="side-hover-a pull-right" id="energize" rel="popover" data-content="<img class='pop-img thumbnail pull-right' src='img/energize.jpg' /> Creating a circuit and/or an environment that is self-activating and self-perpetuating." data-original-title="Energize">Energize</a>
                </div>
                <div class="span7">&nbsp;</div>
                <div class="span2 side-hover">
                	<a href="#" class="side-hover-a pull-left" id="engage" rel="popover" data-content="<img class='pop-img thumbnail pull-right' src='img/engage.jpg' /> Driving business results by aligning the goals and efforts of the employee with the goals of the company." data-original-title="Engage">Engage</a>
                </div>
            </div>   
        </div>
        <div class="span4 phone-content visible-phone">			
        	<ul class="ul-phone-hovers">
            	<li class="li-phone-hover">
            	<a href="#" class="top-hover-a" id="empower-phone" rel="popover" data-content="Creating employee competence and satisfaction by sharing limited authority with them.  It allows them to make decisions and take initiative in order to improve service and deliver bottom line results." data-original-title="Empower">Empower</a>
                </li>
           		<li class="li-phone-hover">
                 <a href="#" class="side-hover-a" id="enrich-phone" rel="popover" data-content="Vertically restructuring an employees position in order to provide them with greater responsibilities.  The goal is to increase the employee's satisfaction by giving greater authority, autonomy, and control over the way the job is accomplished." data-original-title="Enrich">Enrich</a>
				</li>
                <li class="li-phone-hover">
                <a href="#" class="side-hover-a" id="educate-phone" rel="popover" data-content="Imparting instruction or information for a certain level of knowledge or skill that improves the employee's performance." data-original-title="Educate">Educate</a>
               </li>
               <li class="li-phone-hover">
                 <a href="#" class="side-hover-a" id="energize-phone" rel="popover" data-content="Creating a circuit and/or an environment that is self-activating and self-perpetuating." data-original-title="Energize">Energize</a>
               </li>
               <li class="li-phone-hover">
               	<a href="#" class="side-hover-a" id="engage-phone" rel="popover" data-content="Driving business results by aligning the goals and efforts of the employee with the goals of the company." data-original-title="Engage">Engage</a>
 			   </li>
            </ul>
        </div>
  				<script>
				$(function ()
				{
					$("#empower").popover({placement:'bottom'});
					$("#energize").popover({placement:'right'});
					$("#enrich").popover({placement:'right'});
					$("#engage").popover({placement:'left'});
					$("#educate").popover({placement:'left'});
					$("#empower-phone").popover({placement:'right'});
					$("#energize-phone").popover({placement:'right'});
					$("#enrich-phone").popover({placement:'right'});
					$("#engage-phone").popover({placement:'right'});
					$("#educate-phone").popover({placement:'right'});
				});
			</script>
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
<script>
$(window).resize(function(e) {
  	sizer("left-menu", .90);
	sizer("main-content", .90);  
});
</script>