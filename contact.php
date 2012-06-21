<?php
	//send contact form by email
	if (isset($_GET['action']) == "send") { //message formatting
		$message = "
		<html>
		<head>
			<title>Contact Form Email</title>
		</head>
			<body>
				<ul>
					<li>Name: ".$_POST['name']."</li>
					<li>Email: ".$_POST['email']."</li>
					<li>Phone: ".$_POST['phone']."</li>
					<li>Message: ".$_POST['message']."</li>
				</ul>
			</body>
		</html>";
		
	//end message formatting
	//set headers
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		if (mail("Tim.larkins@E5Xcellence.com", "Contact Form Email", $message, $headers)==1){
			$show = true;
			$modal = "<script>$('#confirmation').modal('show')</script>";
			//"Mail has been sent";
		} else {
			echo "Mail did not send";	
		}
	}


?>
<!DOCTYPE HTML>
<html lang="en">
<head>

<!-- Page designed and coded by James Johnson 2012 under contract for ERF Marketing -->


<meta charset="utf-8">
<title>E5xcellence - Contact Us</title>
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
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-button.js"></script>

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
        <div class="modal hide fade" id="confirmation">
    	<div class="modal-header">
        	<button class="close" data-dismiss="modal">x</button>
            <h3>Thank you</h3>
        </div>
        <div class="modal-body">
        	<p class="confirmation">
            	Thank you for contacting us we will reply shortly.
            </p>
        </div>
       	<div class="modal-footer">
        	<a href="#" class="contact-block-btn btn btn-primary" data-dismiss="modal" id="confirmation_close">Close</a>
        </div>
   		</div>
        <div class="span8 main-content">
        	<div class="span10 about-content">
            <div class="spacer5em span12 hidden-phone">&nbsp;</div>
            	<div class="span2">&nbsp;</div>
            	<div class="span5 contact-form">
                	<form id="contact_form" class="form-verical" method="post" action="contact.php?action=send"> 
                    <fieldset>
                        <legend class="about-header" id="contact_form_para">Contact Us <br />
                        <small class="small-text" id="contact_small">All fields are Required</small>
                        </legend>
                        <div class="control-group">
                            <label class="control-label" for="name">Name:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="name" id="name" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="email">Email:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="email" id="email" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="phone">Phone:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="phone" id="phone" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="message">Message:</label>
                            <div class="controls">
                                <textarea type="text" class="input-xlarge" name="message" id="message" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="form-actions" id="form_button_group">
                            <button type="submit" id="form_submit" class="contact-block-btn btn btn-primary btn-large">Submit</button>
                            <button type="reset" id="form_cancel" class="cancel-btn btn btn-large">Cancel</button>
                        </div>
                    </fieldset>
                    </form>
            	</div>
                <div class="span1">&nbsp;</div>
                <div class="span3 contact-block">
                	<h3 class="contact-block-h3">Tim Larkins</h3>
                    <p class="contact-block-phone">
                    <i class="icon-user icon-white"></i>(864)905-4402
                    </p>
                    <a class="contact-block-btn btn btn-large btn-primary" href="mailto:Tim.larkins@E5Xcellence.com"><i class="icon-envelope icon-white"></i>Email</a>
                </div>
       		</div>			
        </div>
  
	</div>
  
	</div>
    <script>
		$('#confirmation').on('hidden', function() {
			$('#contact_form').attr("action","contact.php");
			$('#contact_form').submit();
		})
	</script>
    <div class="row-fluid">
    	<footer class="span12 footer">
        	Copyright 2012 E5Xellence - <a class="footer-a" href="http://www.erfmarketing.com">ERF</a>
        </footer>
    </div>
</div>
   <?php
	if (show == true){
		echo $modal;
	}
	?>
</body>
</html>
<script>
$(document).ready(function() {
	sizer("left-menu", .60);
	sizer("main-content", .90);
	sizer("about-content", .90);
});
</script>