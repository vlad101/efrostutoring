<!DOCTYPE html>
<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
	
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
	<script src="js/jquery-1.7.1.js"></script>
	<script src="js-webshim/minified/extras/modernizrcustom.js"></script>
	<script src="js-webshim/minified/polyfiller.js"></script>
	<script>//load all defined$.webshims.polyfill();</script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!--page render at 100 percent of the width of all supported mobile browsers-->
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<!--the title-->
	<title>Contact Me</title>
	<!--the link to css file-->
	<link href="test.css" rel="stylesheet" />
	
</head>

<body>
	<div id="wrapper">
		<!-- the header -->
		<div id="header">
			<img src="pic.jpg" alt="Efros Tutoring Header"/>
		</div>
			
		<!--The content-->
		<div id="content">
			<hr /><center><h2>Tutor: Vladimir Efros     (917) 292-2320     Vlad@EfrosTutoring.com</h2></center><hr />
			<left><h1>CONTACT ME</h1></left>
					
			<br />
			<table>
				<tr>
					<td>
						<p>E-mail or fill out a contact us form if you have any questions. I will send a price quote as soon as 
						possible, call or text me for fastest response.<br /><br /><strong>Name: </strong>Vladimir Efros<br /><strong>Phone number: </strong>(917) 292-2320<br /><strong>E-mail address: </strong>Vlad@EfrosTutoring.com</p>
					</td>
				</tr>
			</table>
			<br />
			<hr /><left><h4>Individual Peer Tutoring Form</h4></left><hr /></br>
<?php

	if (isset ($_POST['submit'])) {  // Check for each form value when the form is submitted:

		$problem = FALSE; // no problems!


		if (empty ($_POST['name'])) {	// alert the user that they forgot to fill in "Name"

					$problem = TRUE;
					
					print ("<p>The Name you entered does not appear to be valid.</p>");
					 //print ("<p>You forgot to fill in your <b>&quot;Name&quot;</b>.</p>");
					}
					
		if (empty ($_POST['name'])) {	// alert the user that they forgot to fill in "Class"

					$problem = TRUE;
					
					print ("<p>The Class you entered does not appear to be valid.</p>");
					//print ("<p>You forgot to fill in your <b>&quot;Class/Subject&quot;</b>.</p>");
					}
					
		if (empty ($_POST['email']))  {	// alert the user that they forgot to fill in "Email Address"
					$problem = TRUE;
					
					print ("<p>The Email Address you entered does not appear to be valid.</p>");
					//print ("<p>You forgot to fill in your <b>&quot;E-mail Address&quot;</b>.</p>");
					}

		//if ( empty ($_POST['phone']))  {	// alert the user that they forgot to fill in "Email Address"

					//$problem = TRUE;

					//print ("<p>You forgot to fill in your <b>&quot;Phone&quot;</b>.</p>");

					//}	
					
					
		if (empty ($_POST['message']))  {	// alert the user that they forgot to fill in "Message"

					$problem = TRUE;
					
					print ("<p>The Message you entered does not appear to be valid.</p>");
					//print ("<p>You forgot to fill in your <b>&quot;Message&quot;</b>.</p>");
					}
					

		if (!$problem) { // if there are no problems:
		

			$mailMesage =  ("Name: {$_POST['name']}\nE-mail: {$_POST['email']}\nPhone: {$_POST['phone']}\nClass/Subject: {$_POST['class']}\nMessage:\n{$_POST['message']}"); // message of the email.

			$mailSubject = "{$_POST['subject']}"; // subject of the email.

			mail ('V_efros85@hotmail.com', $mailSubject , $mailMesage); // Send the email.
			header('Location: contact.php');
			exit();

			}

		// This is the ACTUAL FORM!
}

	print '

<table>
		<form name="contactForm" method="post" action="contactme.php">
		<tr><td align="center"><p><br /><br />Name:</p></td><td align="left"><p><br /><br /><input name="name" type="text" id="name" size="30" value="' . $_POST['name'] . '" /></p></td></tr>
		<tr><td align="center"><p>Subject:</p></td><td align="left"><p><input name="class" type="text" id="class" size="30" value="' . $_POST['class'] . '" /></p></td></tr>
		<tr><td align="center"><p>E-mail:</p></td><td align="left"><p><input name="email" type="text" id="email" size="30" value="' . $_POST['email'] . '" /></p>
		<tr><td align="center"><p>Phone:</p></td><td align="left"><p><input name="phone" type="text" id="phone" size="30" value="' . $_POST['phone'] . '" /></p>
		<tr><td align="center"><p>Message:</p></td><td><p><textarea name="message" cols="40" rows="15" value="' . $_POST['message'] . '"></textarea></p>
		<p><input type="submit" name="submit" value="send" /><br /><br /></p>
		</form>
</table><br />
		';
?>
		</div>	
		
		<!-- the sidebar -->
		<div id="sidebar">
					<p><a href="index.html">Home</a></p><hr />
					<p><a href="aboutme.html">About Me</a></p><hr />
					<p><a href="contactme.php">Contact Me</a></p><hr />
					<p><a href="faq.html">FAQ</a></p><hr />
					<p><a href="teachingmethods.html">Teaching Methods</a></p><hr />
					<p><a href="myvideos.html">My Videos</a></p><hr />
					<p><a href="chemtools.html">Chemistry Tools</a></p><hr />
					<p><a href="mathtools.html">Math Tools</a></p><hr />
					<p><a href="physicstools.html">Physics Tools</a></p><hr />
					<p><a href="sitemap.html">Site Map</a></p>
		</div>		
		
		<!--The footer-->
		<div id="footer">
			<p><a href="index.html">Home</a> |<span class="barcode">   </span>
			<a href="aboutme.html">About Me</a> |<span class="barcode">   </span>
			<a href="contactme.php">Contact Me</a> |<span class="barcode">  </span>
			<a href="faq.html">FAQ</a> |<span class="barcode">   </span>    
			<a href="teachingmethods.html">Teaching Methods</a> |<span class="barcode">   </span>
			<a href="myvideos.html">My videos</a> |<span class="barcode">   </span>
			<a href="chemtools.html">Chemistry Tools</a> |<span class="barcode">  </span>
			<a href="mathtools.html">Math Tools</a> |<span class="barcode">   </span>
			<a href="physicstools.html">Physics Tools</a> |<span class="barcode">   </span>
			<a href="sitemap.html">Site Map</a></p>
		</div>
	</div>
</body>

</html>