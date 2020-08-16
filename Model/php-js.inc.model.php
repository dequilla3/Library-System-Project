<?php
    include "../includes/dbh-inc.php";

$sql = "SELECT books_tb.bookid, books_tb.title, books_tb.isbn, books_tb.author, category.category_name, publisher.publisher_name, books_tb.date_published FROM books_tb, category, publisher WHERE publisher.publisher_id = books_tb.publisher and category.categoryid = books_tb.category;";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql))
	{
		header("libraries.php?error=sqlerror");
	}
	else
	{
		mysqli_stmt_execute($stmt);
		$resultCheck = mysqli_stmt_get_result($stmt);

		if (mysqli_num_rows($resultCheck) > 0)
		{
		  while ( $row = $resultCheck-> fetch_assoc()) 
			{
				$data[] =$row['title'];
				$data[] =$row['category_name'];
				$data[] =$row['isbn'];
				$data[] =$row['author'];
				$data[] =$row['publisher_name'];
			}
		}

	}
echo json_encode($data);