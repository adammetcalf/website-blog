<!DOCTYPE HTML>

<!-- Starts the session -->
<?php require_once('config.php') ?>


<html>
	<head>
		<title>Adam Metcalf Website: Home Page</title>

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
						<li class="selected">
									<a href="index.php">Home</a>
						</li>
						<li>
									<a href="blog.php">Blog</a>
						</li>
						<li>
									<a href="contact.php">Contact Me</a>
						</li>
					</ul>
				</div>
			  <!--END-MENUBAR-->
			</div>
			
			<div id="content_header"><marquee>Adam Metcalf is a PhD student at the University of Leeds</marquee></div>
			<!--END-HEADER-->
			
			
			<!--START-SITE-CONTENT-->
			<div id="site_content">
			
				<!--START-CONTENT-->
					<div id="content">
						
						<!-- A photo of Adam -->
						<img src='static/images/Adam.jpg' alt="Tough Mudder" class="leftphoto" />
						
						<h2>Introduction to Adam</h2>
						<p>
							I live in Leeds (UK) with my partner Becky and our dog Sunshine. I joined the British Army in 2008 where I trained as a mechanic in the Corps of Royal Electrical and Mechanical Engineers. 
							I spent most of my short 5 year career in Germany. I was deployed to Afghanistan in 2011, where I spent 6 and a half months supporting 3 Commando Brigade and 7th Armoured Brigade vehicle
							assets alongside foot patrols while living in a remote patrol base. I left the Army in 2013 and spent a brief few weeks working as a HGV mechanic for Rhondda Cynon Taf Council in South Wales.
							I quickly moved on from this and attended Leeds City College to complete an 'Access
							to Engineering' course, which allowed me to attend the University of Leeds to complete a Bachelor's Degree in Mechanical Engineering. This has ultimately led on a PhD in robotics, which is still ongoing.

							
							<br>
						</p>

						<h2> Computers! </h2>
						<p>
							My first experience of programming was during a 1st year undergraduate module named 'Computers in Engineering Analysis'. During this course I became proficient with LabVIEW
							(which is good for data aquisition and system control) and MATLAB (which is good for data analysis). I have used LabVIEW and MATLAB extensively through my PhD; LabVIEW for
							programming the control system for the robot I am working on and MATLAB for robotic modelling, data analysis and controller design. I spent a year interning at National Instruments
							(who created LabVIEW) while I was an undergraduate, where I supported customers who experienced a range of software and hardware problems. I attained the Certified LabVIEW developer certification
							while working at National Instruments which allowed me to get a part time job at Control Software Solutions during the last year of my Degree. While working at Control Software Solutions I created
							a Unit Testing library to aid the Test Driven Development we practised.
							
							<br>
							<br>
							In recent years I have been working on improving my skillset as a software developer, though as a mechanical engineer I have had less industrial experience than a computer science graduate is likely to have. 
							To that end I have been self training in C# and C++ alongside becoming comfortable with Git. In fact, even this website is purely an exercise in continuous personal development, a mindset which has 
							done very well for me over the years.
							<br>
						</p>

						<!-- A photo of Adam -->
						<img src='static/images/Adam2.jpg' alt="Tough Mudder" class="rightphoto" />
						
						<h2> Other Interests </h2>
						<p>
							
							I enjoy mountaineering and I have spent a lot of time in Scotland in the winter. I was also lucky enough to have spent 2 weeks in the French Alps one summer, which I greatly enjoyed.
							I used to do a lot of caving, but unfortunately I have taken a couple of scary falls and picked up some injuries, enough to scare me back above ground! I like to maintain a baseline
							of fitness by running regularly.
							
						</p>
						
					</div>
				<!--END-CONTENT-->
				
				
			</div>
			<!-- END-SITE-CONTENT -->
			
	
			
			<!--START-FOOTER-->
			<div id="footer">
			<?php include_once  ('includes/footer.php');?>
			</div>
			<!--END-FOOTER-->
		
		</div>
</body>

</html>
