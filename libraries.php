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
							<form action="includes/Control/SearchControl.php" method="POST">
								<input autocomplete="off" type="search" name="search-input" class="search-text" placeholder="Search...">	<button type="button" name="search-filter" class="search-filter" value="Search">Search Filter</button>
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
								include 'includes/Model/dbh-inc.php';
								$sql = "SELECT books_tb.bookid, books_tb.title, books_tb.isbn, books_tb.author, category.category_name, publisher.publisher_name, books_tb.date_published FROM books_tb, category, publisher WHERE publisher.publisher_id = books_tb.publihser and category.categoryid = books_tb.category;";
								$stmt = mysqli_stmt_init($conn);

								if (!mysqli_stmt_prepare($stmt, $sql))
									{
										header("Location: ../Library%20System%20Project/libraries.php?error=sqlerror");
										exit();
									}
								else
									{
										mysqli_stmt_execute($stmt);
										$resultCheck = mysqli_stmt_get_result($stmt);
										if (mysqli_num_rows($resultCheck) > 0)
										 {
											while ( $row = $resultCheck-> fetch_assoc()) 
											{

												echo "<tr><td>". $row['title'] ."</td><td>". $row['isbn'] ."</td><td>". $row['author']."</td><td>".$row['category_name']. "</td><td>".$row['publisher_name']."</td><td>".$row['date_published']."</td></tr>"; 
											}
										 }		
									}
							?>
			  
						  </tbody>
						</table>
					</div>
			</section>
		</body>
		<script src="js/script.js"></script>
	</main>


<?php
	require 'footer.php';
?>