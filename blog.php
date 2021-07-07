<!DOCTYPE HTML>

<!-- Starts the session -->
<?php require_once('config.php') ?>

<!-- public functions perform database operations for retreiving blog data -->
<?php require_once('includes/public_functions.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>

<html>
	<head>
		<title>Adam's Blog</title>
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
						<li class="selected">
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
			<h2 class="blogcontent-title">Recent Articles</h2>
			<hr>
			
				<?php foreach ($posts as $post): ?>
					<div class="blogpost" style="margin-left: 0px;">
						<?php if($post['topic']['name'] == 'Coding'): ?>
							<img src="static/images/Adam.jpg" class="blogpost_image" alt="">
						<?php elseif($post['topic']['name'] == 'Engineering') : ?>
							<img src="static/images/banner.jpg" class="blogpost_image" alt="">
						<?php else : ?>
							<img src="static/images/Adam2.jpg" class="blogpost_image" alt="">
						<?php endif ?>
	
						<!--img src="<?php //echo BASE_URL . '/static/images/' . $post['image']; ?>" class="blogpost_image" alt=""-->

						
						<!-- Added this if statement... -->
						<?php if (isset($post['topic']['name'])): ?>
							<a 
								href="<?php echo BASE_URL . 'filteredPosts.php?topic=' . $post['topic']['id'] ?>"
								class="btn category">
								<?php echo $post['topic']['name'] ?>
							</a>
						<?php endif ?>

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
		<!--  This is the blog stuff end -->
		

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