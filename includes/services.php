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
                    <li class="current"><a href="services.php">Services</a></li>
                    <li><a href="testimonials.php">Testimonials</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="container topImage"><img src="images/servicesImg.jpg" width="986" height="155" alt="" /></div>
		</div><!--EOF Header-->
		
		<!--Main Content-->
		<div class="main">
        	<div class="container clearfix">
            	<div class="shadows"></div>
                
							
                <!--Sidebar-->
                <div class="sidebar right">
                	<h3>Submit Enquiry</h3>
                	
                	<h3>
						<?php if($contacted): ?>
						 - Thank you for contacting us!
						<?php endif; ?>
					</h3>
                	
                	<?php if(!$contacted): ?>
						<form id="service_form" action="" method="POST">
							<div class="formRow">
								<label>Your Name <span>*</span></label>
								<input name="CONTACT" type="text" placeholder="Enter Your Name" />
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
								<textarea name="NOTES" cols="" rows="4" placeholder="Enter Text" ></textarea>
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
						<h1>Services</h1>
						<ul class="services">
							<li><span>CLIENT SUPPORT</span>
								<ul>
                                	<li>
										<span>Customer Service</span>
										<div>
											<p>We pride ourselves on our prompt, accurate and courteous response whether your request be a Pickup, ETA inquiry, quote or information any freight matter. While state of the art technology is imperative we understand that access to courteous and knowledgeable freight professionals is an essential part of what we aim to achieve for our customers. With extensive backgrounds in freight and logistics our customer staff provide a valuable asset for any business looking to obtain a market advantage in today’s competitive environment.</p>
										</div>
									</li>
									<li>
										<span>IT</span>
										<div>
											<p>These days Information Technology has demonstrated that it can assist the development of business acumen, and operational tenacity. While Information technology functions in the background; nevertheless, it is also the backbone of the organization and if not correctly implemented can hamper the efficiency of the organisation. We welcome the opportunity to bring together our clients’ needs in line with the most suitable logistics freight management systems.</p>
										</div>
									</li>									
									<li>
										<span>Online Services</span>
										<div>
											<p>Our clients have the facility to log on directly to the EFS database systems and place pickups, enquiries, quotes print consignment notes and track &amp; trace. This can be quite useful as full record history is stored and readily available.</p>
										</div>
									</li>									
									<li>
										<span>KPI Reporting</span>
										<div>
											<p>In today’s competitive markets it’s essential that companies are aware of all aspects of their product delivery performance to grow and maintain their market share. Ongoing carrier appraisals identify actual versus projected expectations on delivery times, cost and efficiencies. In particular the ‘Delivered In Full On Time Report’ (DIFOT) is a great indicator of freight delivery performance. This report coupled with professional graphs enable a quick concise visual recognition of past, current and projected outcomes.</p>
										</div>
									</li>
								</ul>
							</li>
							<li><span>TRANSPORT &amp; LOGISTICS SERVICES</span>
								<ul>
									<li>
										<span>Freight</span>
										<div>
											<dl>
                                            	<dt>Road:</dt>
                                                <dd>Express &amp; General road freight for parcels &amp; pallets Australia wide</dd>
                                                <dt>Air:</dt>
                                                <dd>Same day, Overnight &amp; Economy airfreight for parcels &amp; pallets Australia wide. International export &amp; import airfreight express &amp; consolidated</dd>
                                                <dt>Rail:</dt>
                                                <dd>Rail freight options Australia wide. LCL &amp; FCL</dd>
                                                <dt>Sea:</dt>
                                                <dd>Export &amp; import sea cargo. FCL &amp; LCL, Customs clearance, wharf cartage</dd>
                                            </dl>
										</div>
									</li>
									<li>
										<span>Consultancy</span>
										<div>
											<p>Freight audit, freight performance management, freight appraisal, freight dispatch technology, delivery process management</p>
										</div>
									</li>
									<li>
										<span>Warehousing</span>
										<div>
											<p>Fully integrated 3pl warehousing solutions encompassing extensive inventory management capabilities. Sales and transfer orders processed and tracked through to fulfilment.</p>
										</div>
									</li>
									<li>
										<span>Specialized</span>
										<div>
											<p>Product rollouts, point of sale display setups, sensitive product distribution &amp; placement, database management</p>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
				
				<h3>Managing freight across Australia and around the world</h3>
                
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

