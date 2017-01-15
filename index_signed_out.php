<!-- Sign in field -->
<h3>Sign In</h3>
<form id="signin_form" action="#" method="post">
	<!-- Username and password fields go here -->
	<div>
		<label>Email: </label> <input type="text" name="signin_username" id="signin_username"> <br>
		<label>Password: </label> <input type="password" name="signin_pwd" id="signin_pwd"> <br>
		<input type="submit" value="Sign In" id="signin_submit">
	</div>
</form>

<!-- Handle a user trying to sign in -->
<?php 
	//only show up if a username and password have been submitted
	if (isset($_POST['signin_username']) && isset($_POST['signin_pwd'])) {
		$username = $_POST['signin_username'];
		$password = $_POST['signin_pwd'];
	
		//connect to database
		require_once("db_creds.php");
		$dbc = mysqli_connect(HOST, USER, PASSWORD, DB) or die("<h1>Error connecting to the database :(</h1>");
		
		//look for a match in email and password
		$query = "SELECT * FROM profile_list WHERE email='$username' and password=SHA('$password')";
		$result = mysqli_query($dbc, $query) or die("<h1>We encountered a backend problem and couldn't get you on the list... :(</h1>");
	
		//if there is no match, no entry
		if (!$row = mysqli_fetch_assoc($result)) {
			echo "<h3>Sorry! Your username and/or password is incorrect!</h3>";
		} else {
			//otherwise, grant access to the account
			$_SESSION['email'] = $row['email'];
			$_SESSION['id'] = $row['id'];
		}
	
		mysqli_close($dbc);
	}
?>

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