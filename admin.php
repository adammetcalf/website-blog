<!DOCTYPE HTML>

<!-- Starts the session -->
<?php require_once('config.php') ?>

<?php  include('includes/registration_login.php'); ?>

<html>
	<head>
		<title>Admin</title>

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
		
			
			<!--START-SITE-CONTENT-->
			<div id="site_content">
			
				<!--START-CONTENT-->
					<div id="content">
						
						<?php if (isset($_SESSION['user']['username'])) { ?>
							<div class="logged_in_info">
								<span>welcome <?php echo $_SESSION['user']['username'] ?></span>
								|
								<span><a href="logout.php">logout</a></span>
							</div>
						<?php }else{ ?>
						
						<div class="login_div">
							<form action="<?php echo BASE_URL . 'admin.php'; ?>" method="post" >
								<h2>Login</h2>
								<div style="width: 60%; margin: 0px auto;">
									<?php include(ROOT_PATH . '/includes/errors.php') ?>
								</div>
								<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
								<input type="password" name="password"  placeholder="Password"> 
								<button class="btn" type="submit" name="login_btn">Sign in</button>
							</form>
						</div>

						<?php } ?>
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
