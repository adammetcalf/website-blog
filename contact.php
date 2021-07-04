<!DOCTYPE HTML>

<html>
	<head>
		<title>Contact</title>
		
		<meta name="description" content="Adam Metcalf's personal website" />
		<meta name="keywords" content="Adam Metcalf" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="static/css/public_css.css" />
<!---Head section--->
<?php require_once('includes/head_section.php') ?>
<!---// Header section--->

	</head>

	<body>

		<div id="main">
		
			<!---Header--->
			<?php require_once('includes/header.php') ?>
			
			
			<!--START-MENUBAR-->
				<div id="menubar">
					<ul id="menu">
						<li >
									<a href="index.php">Home</a>
						</li>
						<li>
									<a href="blog.php">Blog</a>
						</li>
						<li class="selected">
									<a href="contact.php">Contact Me</a>
						</li>
					</ul>
				</div>
			  <!--END-MENUBAR-->
			</div>
			
			<!--END-HEADER-->
			
			<!--START-SITE-CONTENT-->
			<div id="site_content">
		
				<div id="content">
						<!-- insert the page content here -->
						<h1>Contact Me</h1>
						
						<p>
						Click on the icons to find me on Github and LinkedIn.
						</p>
						
						<div class='linkIcons'>
					
							<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
							<a href="https://github.com/adammetcalf"><i class="fab fa-github fa-fw" style='font-size:80px'></i></a>
						
							<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
							<a href="https://www.linkedin.com/in/adammetcalf/"><i class="fa fa-linkedin-square fa-fw" style='font-size:80px'></i></a>

						</div>
					</div>
				<!--END-CONTENT-->
			</div>
			<!-- END-SITE-CONTENT -->

			<!--START-FOOTER-->
			<div id="footer">
			<?php include_once 'includes/footer.php';?>
			</div>
			<!--END-FOOTER-->
		</div>
	
	</body>
</html>
