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
				<div class="lib-container">
					<div class="top-section">
						<label>Search: </label>
						<input type="text" name="searchtxt" placeholder="Books e.g">
						<button class="search-filter">Search Filter</button>
						<button class="search-btn">Search</button>
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
							include 'includes/dbh-inc.php';
							$sql = "SELECT books_tb.bookid, books_tb.title, books_tb.isbn, books_tb.author, category.category_name, publisher.publisher_name, books_tb.date_published FROM books_tb, category, publisher WHERE books_tb.bookid = category.categoryid AND books_tb.bookid = publisher.publisher_id ORDER BY books_tb.bookid;";
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
									$row = mysqli_fetch_assoc($resultCheck);
									for ($i=0; $i < mysqli_num_rows	($resultCheck) ; $i++)
									{ 
										echo "<tr><td>". $row['title'] ."</td><td>". $row['isbn'] ."</td><td>". $row['author']."</td><td>".$row['category_name']. "</td><td>".$row['publisher_name']."</td><td>".$row['date_published']."</td></tr>"; 
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