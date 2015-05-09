<?php
	$contacted = false;	

	$name 		= trim(strip_tags($_POST['CONTACT']));
	
	
	$email 		= trim(strip_tags($_POST['EMAIL']));
	$subject 	= trim(strip_tags($_POST['TITLE']));
	$message 	= trim(strip_tags($_POST['NOTES']));
	$number 	= trim(strip_tags($_POST['NUMBER']));
	
	if(!empty($name) && !empty($email) && !empty($number) && !empty($message))
	{
		$text = '<strong>Name: </strong>' . $name . '<br />';
		$text .= '<strong>Email: </strong>' . $email . '<br />';
		if (!empty($subject))
		{
			$text .= '<strong>Subject: </strong>' . $subject . '<br /><br />';
		}
		$text .= '<strong>Phone Number: </strong><br /><i>' . $number . '</i><br />';
		$text .= '<strong>Message: </strong><br /><i>' . $message . '</i><br />';
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		mail('info@efs.net.au', 'Contact Request - EFS', $text, $headers);
		$contacted = true;

	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EFS</title>
<link href="css/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/modernizr.custom.89416.js"></script>
<script type="text/javascript" src="js/selectivizr-min.js"></script>

<!-- Validation -->
<script type="text/javascript" src="moduls/validation/jquery.validate.js"></script>
<script type="text/javascript" src="moduls/validation/validation.js"></script>
<link rel="stylesheet" href="moduls/validation/validation.css" type="text/css" />

<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
	<div id="wrap">
		
		<!--Header-->
		<div class="header">
			<div class="container clearfix">
            	<div class="right clearfix">
                	<h3>Toll free: 1300 131 674</h3>
                    <ul>
						<li><a href="http://clients.efs.net.au/EFSWebsite/CustomerLogin.aspx">Login</a></li>												
						<!--<li><a href="#">Register</a></li>-->
                   </ul>
                </div>
				<a href="index.html" class="logo"><img src="images/logo.jpg" width="197" height="93" alt="EFS" /></a>                
			</div>
            <div class="container menu clearfix">
            	<ul id="nav">
                	<li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="testimonials.php">Testimonials</a></li>
                    <li class="current"><a href="contact_us.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="container topImage"><img src="images/aboutImg.jpg" width="986" height="155" alt="" /></div>
		</div><!--EOF Header-->
		
		<!--Main Content-->
		<div class="main">
        	<div class="container clearfix">
            	<div class="shadows"></div>
                
                <!--Sidebar-->
							
		
                <div class="sidebar right">
                	<h3>Contact Form</h3>

			<h3>
				<?php if($contacted): ?>
				 - Thank you for contacting us!
				<?php endif; ?>
			</h3>
				<?php if(!$contacted): ?>
					<form id="contact_form" action="" method="POST">
						<div class="formRow">
							<label>Your Name <span>*</span></label>
							<input name="CONTACT" type="text" placeholder="Enter Your Name"  />
						</div>
						<div class="formRow">
							<label>Your Email <span>*</span></label>
							<input name="EMAIL" type="text" placeholder="Enter Your Email" />
						</div>
						<div class="formRow">
							<label>Your Phone Number <span>*</span></label>
							<input name="NUMBER" type="text" placeholder="Enter Your Phone Number" />
						</div>
						<div class="formRow">
							<label>Subject</label>
							<input name="TITLE" type="text" placeholder="Enter Subject" />
						</div>
						<div class="formRow">
							<label>Message <span>*</span></label>
							<textarea name="NOTES" cols="" rows="4" placeholder="Enter Text"></textarea>
						</div>
						<small><span>*</span> indicates required field</small>
						<div class="formRow">
							<input name="submit" type="submit" value="Submit" />
						</div>
					</form>
			 <?php endif; ?>
                </div><!--EOF Sidebar-->
               
                <div class="content">
					<div class="article">
						<h1>Contact Us</h1>
						<!--<p>Lorem ipsum dolor sit amet, ectetur adipiscing elit. Etiam pulvinar enim in dolor aliquet vel euismod. odio vehicula. Sed quis lacus purus. Quisque arcu dui, hendrerit et congue non, porttitor quis augue. Morbi ornare ipsum est.</p>-->
						<h3>Address:</h3>
						<div class="contact">
							<div class="clearfix">
								<div class="left">319a Burwood Road,<br />Hawthorn Vic 3122</div>
								<div class="left">PO Box 347<br />Hawthorn Vic 3122</div>
							</div>
							<ul>
								<li>
									<h3>Phone:</h3>
									03 9818 8888
								</li>
								<li>
									<h3>Fax:</h3>
									03 9818 8055
								</li>
								<li>
									<h3>Toll Free:</h3>
									1300 131 674
								</li>
								<li>
									<h3>Web:</h3>
									<a href="http://www.efs.net.au/">www.efs.net.au</a>
								</li>
								<li>
									<h3>Email:</h3>
									<a href="mailto:info@efs.net.au">info@efs.net.au</a>
								</li>
							</ul>						
						</div>											
					</div>
                </div>
                
            </div>
		</div><!--EOF Main Content-->
		
		<!--Footer-->
		<div class="footer">
			<div class="container clearfix">
				<div class="copyright">&copy; 2012 Effective Freight Solutions Pty Ltd</div>
				<!--<ul>
					<li><a href="#">Privacy Policy</a>|</li>
					<li><a href="#">Terms and Conditions</a></li>
				</ul>-->
			</div>
		</div><!--EOF Footer-->
		
	</div>
</body>
</html>
