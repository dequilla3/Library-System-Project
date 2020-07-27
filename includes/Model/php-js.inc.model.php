<?php
    include 'dbh-inc.php';

$sql = "SELECT * FROM books_tb";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql))
	{

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
				
			}
		}

	}
echo json_encode($data);