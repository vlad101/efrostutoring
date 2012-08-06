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
						
<?php

		if (!$problem) { // if there are no problems:

			print ("<p>Thank You for contacting me. I will get back to you within one business day!</p>\n"); // Thank the user.

			}
?>
					</td>
				</tr>
			</table>
			<br />

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