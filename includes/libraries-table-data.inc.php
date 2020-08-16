<?php

include 'includes/dbh-inc.php';
$sql = null;
$searchtext = isset($_GET['searchtext']);

if (isset($_GET['searchtext'])) 
{
$searchtext = $_GET['searchtext'];

	$sql = "SELECT books_tb.bookid, books_tb.title, books_tb.isbn, books_tb.author, category.category_name, publisher.publisher_name, books_tb.date_published FROM books_tb 
		INNER JOIN publisher on books_tb.publisher=publisher.publisher_id 
		INNER JOIN category on books_tb.category=category.categoryid 
		where 
		publisher.publisher_name like '%$searchtext%' or
		category.category_name like '%$searchtext%' or
		books_tb.title like '%$searchtext%' or
		books_tb.isbn like '%$searchtext%' or 
		books_tb.author like '%$searchtext%'
		";
}
else
{
$sql = "SELECT books_tb.bookid, books_tb.title, books_tb.isbn, books_tb.author, category.category_name, publisher.publisher_name, books_tb.date_published FROM books_tb, category, publisher WHERE publisher.publisher_id = books_tb.publisher and category.categoryid = books_tb.category";
}
  
								
				$stmt = mysqli_stmt_init($conn);

								if (!mysqli_stmt_prepare($stmt, $sql))
									{
										header("Location: ../Library%20System%20Project/libraries.php?error=sqlerror?searchtext=0");
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