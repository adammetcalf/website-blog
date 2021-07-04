<!DOCTYPE HTML>

<!-- Starts the session -->
<?php require_once('config.php') ?>

<!-- public functions perform database operations for retreiving blog data -->
<?php require_once('includes/public_functions.php') ?>

<?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>

<html>
	<head>

		<title> <?php echo $post['title'] ?> | Adam's Blog</title>

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
						<li>
									<a href="contact.php">Contact Me</a>
						</li>
					</ul>
				</div>
			  <!--END-MENUBAR-->
		</div>
			
			<!--END-HEADER-->
				
			<!--START-SITE-CONTENT-->
			<div id="site_content">

				<!--START-CONTENT-->
				<div id="content">


						<div class="blogcontent" >

							<!-- Page wrapper -->
							<div class="blogpost-wrapper">
								<!-- full post div -->
								<div class="blogfull-post-div">
								<?php if ($post['published'] == false): ?>
									<h2 class="blogpost-title">Sorry... This post has not been published</h2>
								<?php else: ?>
									<h2 class="blogpost-title"><?php echo $post['title']; ?></h2>
									<div class="blogpost-body-div">
										<?php echo html_entity_decode($post['body']); ?>
									</div>
								<?php endif ?>
								</div>
								<!-- // full post div -->
								

							</div>
							<!-- // Page wrapper -->

							<!-- post sidebar -->
							<div class="blogpost-sidebar">
								<div class="blogcard">
									<div class="blogcard-header">
										<h2>Topics</h2>
									</div>
									<div class="blogcard-content">
										<?php foreach ($topics as $topic): ?>
											<a 
												href="<?php echo BASE_URL . 'filteredPosts.php?topic=' . $topic['id'] ?>">
												<?php echo $topic['name']; ?>
											</a> 
										<?php endforeach ?>
									</div>
								</div>
							</div>
							<!-- // post sidebar -->

						</div>
					</div>

					<!-- // content -->


				<!-- // content -->
				</div>
				

			<!-- // container -->
			</div>
				
				
			
		
		
			<!--START-FOOTER-->
			<div id="footer">
			<?php include_once 'includes/footer.php';?>
			</div>
			<!--END-FOOTER-->
		
		</div>
	</body>
</html>