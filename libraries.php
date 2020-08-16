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
			<section>
					<div class="container">
						<label class="title-library">Library</label>
						<div class="top-section">
							<form action="Control/SearchControl.php" method="POST">

								<div class="autocomplete">
									<input autocomplete="off" type="search" name="search-input" class="search-text" placeholder="Search..." id="myInput">
								</div>
								<input type="submit" class="search-submit" value="Search" name="submit">
								
								
							</form>	
							<button class="add-btn">Add books</button>	
						</div>

						<table class="content-table">
						  <thead>
						    <tr>
						      <th>Title</th>
						      <th>ISBN</th>
						      <th>Author</th>
						      <th>Category</th>
						      <th>Publisher</th>
						      <th>Date Published</th>
						    </tr>
						  </thead>
						  <tbody>

							<?php
								include "includes/libraries-table-data.inc.php";
							?>
			  
						  </tbody>
						</table>
					</div>
			</section>
		</body>
		
	</main>


<?php
	require 'footer.php';
?>