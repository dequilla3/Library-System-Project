<!DOCTYPE html>
<html>
<head>
	<title>Library System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" type="image/png" href="img/blogger.png">
</head>
<body>
		<header>
			<?php
			session_start();
				if (!isset($_SESSION['uid'])) 
				{
					header("Location: ../Library%20System%20Project/index.php");
				}else{
				}
			?>

			<nav class="nav-main">
				<div class="btn-toggle-nav" onclick="toggleNav()"></div>
				<div class="notification"></div>

					<div class="title-main">
						<a href="#">
							<label>Library<label class="label-design">System</label></label>
						</a>
					</div>
			</nav>

		</header>
</body>
</html>