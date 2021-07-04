<!DOCTYPE HTML>

<!-- Starts the session -->
<?php require_once('config.php') ?>

<!-- public functions perform database operations for retreiving blog data -->
<?php require_once('includes/public_functions.php') ?>


<?php 
	// Get posts under a particular topic
	if (isset($_GET['topic'])) {
		$topic_id = $_GET['topic'];
		$posts = getPublishedPostsByTopic($topic_id);
	}
?>

<html>
	<head>
		<title>Filtered Posts</title>

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

					
				<!--  This is the blog stuff start->
				<!-- Page content -->
				<div class="blogcontent">
					<h2 class="blogcontent-title">
						Articles on <u><?php echo getTopicNameById($topic_id); ?></u>
					</h2>
					<hr>
					<?php foreach ($posts as $post): ?>
						<div class="blogpost" style="margin-left: 0px;">
							<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="blogpost_image" alt="">
							<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
								<div class="blogpost_info">
									<h3><?php echo $post['title'] ?></h3>
									<div class="info">
										<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
										<span class="read_more">Read more...</span>
									</div>
								</div>
							</a>
						</div>
					<?php endforeach ?>


				</div>
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