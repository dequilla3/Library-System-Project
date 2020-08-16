<?php
include 'dbh-inc.php';
if (isset($_POST['login-submit'])) {
	

	$username = $_POST['username-login'];
	$password = $_POST['password-login'];

	$sql = "SELECT * FROM users WHERE username=?;";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql))
	{
		header("Location: ../login-form.php?error=sqlerror");
		exit();
	}
	else
	{
		mysqli_stmt_bind_param($stmt, 's', $username);
		mysqli_stmt_execute($stmt);
		$resultCheck = mysqli_stmt_get_result($stmt);
		$row = mysqli_fetch_assoc($resultCheck);
				if($row['username'] == $username && $row['password'] == $password)
				{
					session_start();
					$_SESSION['uid'] = $row['uid'];
					$_SESSION['username'] = $row['username'];
					header("Location: ../mainform.php");
					exit();
				}
				else
				{
					header("Location: ../index.php?error=nouser");
				}
			
	}
}
else{
	header("Location: ../");
}