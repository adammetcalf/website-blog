
<!-- Starts the session -->

<?php  include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>Admin: Dashboard</title>

<!---Head section--->
<?php include(ROOT_PATH . '/admin/includes/head_section.php') ?>
<!---// Header section--->

	</head>
	
<body>	
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>
	<div class="container dashboard">
		<h1>Welcome</h1>

		<div class="buttons">
			<a href="users.php">Manage Users</a>
			<a href="posts.php">Manage Posts</a>
		</div>
	</div>
</body>
</html>

