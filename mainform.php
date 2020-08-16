<?php
	require 'header.php';
?>


	<main>
		
		<body>
			<aside class="nav-sidebar" id="sidebar">
				<ul>
					<li><span>admin</span></li>
					<li><a href="mainform.php">Dashboard</a></li>
					<li><a href="">Borrow</a></li>
					<li><a href="">Return</a></li>
					<li><a href="">Inventory</a></li>
					<li><a href="">Settings</a></li>
					<li class="logout"><a href="includes/logout-inc.php">Logout</a></li>
				</ul>	
			</aside>
			<section class="main-section">

				<div class="container">
					<a href="libraries.php">
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
		
	</main>


<?php
	require 'footer.php';
?>