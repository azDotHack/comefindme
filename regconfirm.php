<!DOCTYPE html>
<html>
<head>
<title>Come Find Me!</title>
<meta charset="UTF-8">
<meta name="author" content="arizonaDotHack">
<meta name="keywords"
	content="come, find, me, search, jobs, individuals">
<meta name="description"
	content="This is a website for individuals to find others for basic jobs such as babysitting, lawnmowing, and more!">
<link rel="stylesheet" href="style.css">
<script>
			window.onload = function() {
				setTimeout('window.location.href = "index.php"', 5000);		
			};
		</script>
</head>
<body>
		<?php
		// function to generate random auth code of 8 alphanumeric characters
		function generateAuth() {
			$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890;";
			$i = 0;
			$code = "";
			while ( $i < 8 ) {
				$index = rand ( 0, strlen ( $chars ) - 1 );
				$code += substr ( $chars, $index, $index + 1 );
				++ $i;
			}
			
			return $code;
		}
		
		// get all of the variables needed to create a profile
		$first_name = $_POST ['signup_firstname'];
		$last_name = $_POST ['signup_lastname'];
		$profile_picture = $_POST ['signup_pic'];
		$email = $_POST ['email0'];
		$password = $_POST ['password0'];
		$phone_number = $_POST ['phone'];
		$state = $_POST ['state'];
		$zip_code = $_POST ['zip'];
		$auth_code = generateAuth ();
		// THIS VARIABLE WILL DEFAULT TO 0 WHEN THE SITE IS ON A REAL WEB SERVER
		$activated = 1;
		
		// add the new account to the profile list
		// connnect to the databse
		require_once ("db_creds.php");
		$dbc = mysqli_connect ( HOST, USER, PASSWORD, DB ) or die ( "<h1>Error connecting to the database :(</h1>" );
		
		// create a query that will insert a new row into the profile_list table
		$query = "INSERT INTO profile_list (id, first_name, last_name, profile_picture, email, password, phone, state, zip_code, ver_code, activated) " . "VALUES ('0', '$first_name', '$last_name', '$profile_picture', '$email', SHA('$password'), '$phone_number', '$state', '$zip_code', '$auth_code', '$activated')";
		
		// execute query
		$result = mysqli_query ( $dbc, $query ) or die ( "<h1>We encountered a backend problem and couldn't get you on the list... :(</h1>" );
		
		if ($result) {
			echo "<h1>Account successfully created!</h1>";
		}
		?>
		<h2 id="clock">You will be redirected to the home page very soon!</h2>
</body>
</html>