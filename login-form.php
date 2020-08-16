<!DOCTYPE html>
<html>
<head>
	<title>Library System</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" type="image/png" href="img/blogger.png">
</head>
<body>

		<div class="login-form">
			<?php
			
			if (isset($_GET['error']) == 'nouser') {
				echo  	'<div class="error-messg">
							<label> No user!</label>
					 	 </div>';
			}
		?>
			<div class="title-line">
				<label>Library<label class="label-design">System</label></label>
			</div>

			<form action="includes/login-inc.php" method="POST">
				<div class="form-group">
					<label>Username</label>
					<input autocomplete="off" type="text" name="username-login" placeholder="Username" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password-login" placeholder="Password" required>
				</div>

				<div class="form-group">
					<button type="submit" name="login-submit">Log-in</button>
				</div>	
			</form>

		</div>

</body>
</html>