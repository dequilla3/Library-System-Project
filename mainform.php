<?php
	require 'header.php';
?>

	<main>

		<header>
			<?php
				session_start();

				if (!isset($_SESSION['uid'])) {
					header("Location: ../Library%20System%20Project/");
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

		<body>
			<aside class="nav-sidebar" id="sidebar">
				<ul>
					<li><span>admin</span></li>
					<li><a href="">Dashboard</a></li>
					<li><a href="">Borrow</a></li>
					<li><a href="">Return</a></li>
					<li><a href="">Inventory</a></li>
					<li><a href="">Settings</a></li>
					<li class="logout"><a href="includes/logout-inc.php">Logout</a></li>
				</ul>	
			</aside>
			<section>
				<div class="container">
					<a href="#">
						<div class="library-main">
							<p>Library</p>
						</div>
					</a>
					<a href="#">
						<div class="borrowers-main">
							<p>borrowers list</p>
						</div>
					</a>
					<a href="#">
						<div class="report-main">
							<p>Reports</p>
						</div>
					</a>
					<a href="#">
						<div class="updates-main">
							<p>Updates</p>
						</div>
					</a>
				</div>
			</section>
		</body>
		<script src="js/script.js"></script>
	</main>


<?php
	require 'footer.php';
?>