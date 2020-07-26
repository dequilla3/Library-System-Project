


		<?php
			
			if (isset($_GET['error']) == 'nouser') {
				echo  	'<div class="error-messg">
							<label> No user!</label>
					 	 </div>';
			}
		?>

		<div class="login-form">
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
	