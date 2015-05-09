<?php
	$contacted = false;	

	$name 		= trim(strip_tags($_POST['CONTACT']));
	
	
	$industry 		= trim(strip_tags($_POST['industry']));
	$subject 		= trim(strip_tags($_POST['TITLE']));
	$company 		= trim(strip_tags($_POST['company']));
	$testimonial 	= trim(strip_tags($_POST['testimonial']));
	
	if(!empty($name) && !empty($industry) && !empty($subject) && !empty($company) && !empty($testimonial))
	{
		$text = '<strong>Name: </strong>' . $name . '<br />';
		$text .= '<strong>Title: </strong>' . $subject . '<br /><br />';
		$text .= '<strong>Industry : </strong>' . $industry . '<br />';
		$text .= '<strong>Company: </strong><br /><i>' . $company . '</i><br />';
		$text .= '<strong>Testimonial: </strong><br /><i>' . $testimonial . '</i><br />';
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		mail('info@efs.net.au', 'Testimonial Form - EFS', $text, $headers);
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
<script type="text/javascript" src="js/script.js"></script>

<!-- Validation -->
<script type="text/javascript" src="moduls/validation/jquery.validate.js"></script>
<script type="text/javascript" src="moduls/validation/validation.js"></script>
<link rel="stylesheet" href="moduls/validation/validation.css" type="text/css" />

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
                    <li class="current"><a href="testimonials.php">Testimonials</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
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
                	<h3>Submit a Testimonial</h3>

		   	<h3>
				<?php if($contacted): ?>
				 - Thank you for submitting form!
				<?php endif; ?>
			</h3>

				<?php if(!$contacted): ?>
					<form id="testimonial_form" action="" method="POST">
						<div class="formRow">
							<label>Name <span>*</span></label>
							<input name="CONTACT" type="text" placeholder="Enter Your Full Name" />
						</div>
						<div class="formRow">
							<label>Title <span>*</span></label>
							<input name="TITLE" type="text" placeholder="Enter Your Title" />
						</div>
						<div class="formRow">
							<label>Industry <span>*</span></label>
							<input name="industry" type="text" placeholder="Enter Your Industry" />
						</div>
						<div class="formRow">
							<label>Company <span>*</span></label>
							<input name="company" type="text" placeholder="Enter Your Company Name"  />
						</div>
						<div class="formRow">
							<label>Your Testimonial <span>*</span></label>
							<textarea name="testimonial" cols="" rows="4" placeholder="Enter Text"></textarea>
						</div>
						<small><span>*</span> indicates required field</small>
						<div class="formRow">
							<input name="submit" type="submit" value="Submit" class="right" />
						</div>
					</form>
			<?php endif; ?>
                </div><!--EOF Sidebar-->
            
                
                <div class="content">
					<div class="article">
						<h1>Testimonials</h1>
						<div class="testimonials">
							<div>
								<div>EFS have enabled us to achieve delivery standards to our largest client which previous transport providers told us was impossible. Further to their invaluable expertise, they were able to save us 15% on this area of our business. <span class="author">Ashley Hawley (Health Food – W/salers &amp; Mfrs)</span></div>
							</div>
							<div>
								<div>Since the first contact with Effective Freight Solutions (EFS) we have had nothing but professional service. Since moving all my freight to EFS my time chasing up freight has decreased substantially as their customer service department is always ready to help with my inquires in a timely manner and resolve any issues on the same day. I can highly recommend Effective Freight Solutions because of their professionalism, rates, customer service and  their complete understanding of the client’s needs. <span class="author">Ben Vlass (Bicycle &amp; Accessories - W/salers &amp; Mfrs)</span></div>
							</div>
							<div>
								<div>Since using EFS we’ve saved 12% on freight costs. I’ve gained an extra 5-10 hours per week and KPI’s are hitting 99%. <span class="author">Rebecca Jones (Cosmetics –W/salers &amp; Mfrs)</span></div>
							</div>
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
