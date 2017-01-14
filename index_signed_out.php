<!-- Sign in field -->
<h3>Sign In</h3>
<form id="signin_form" action="#" method="post">
	<!-- Username and password fields go here -->
	<div>
		<label>Username: </label> <input type="text" name="signin_username" id="signin_username"> <br>
		<label>Password: </label> <input type="password" name="signin_pwd" id="signin_pwd"> <br>
		<input type="submit" value="Sign In" id="signin_submit">
	</div>
</form>
<!-- Sign up field -->
<h3>Register</h3>
<form id="signup_form" action="register.php" method="post">
	<!-- Initial sign up components (first name, last name, and profile picture) are submitted here -->
	<div>
		<label>First Name: </label> <input type="text" name="signup_firstname" id="signup_firstname"> <br>
		<label>Last Name: </label> <input type="text" name="signup_lastname" id="signup_lastname"> <br>
		<label>Profile picture: </label> <input type="file" name="signup_pic" id="signup_pic"> <br>
		<input type="submit" value="Continue" id="signup_submit">
	</div>
</form>