<!DOCTYPE html>
<html>
	<head>
		<title>Come Find Me!</title>
		<meta charset="UTF-8">
		<meta name="author" content="arizonaDotHack">
		<meta name="keywords" content="come, find, me, search, jobs, individuals">
		<meta name="description" content="This is a website for individuals to find others for basic jobs such as babysitting, lawnmowing, and more!">
		<link rel="stylesheet" href="style.css">
		<script>
			function deleteChildren(id) {
				var elem = document.getElementById(id);
				while (elem.firstChild)
					elem.removeChild(elem.firstChild);
			}
			
// 			window.onload = function() {
// 				//first get the string outputted by the clock
// 				var clock = document.getElementById("clock"),
// 				//content of the element
// 					msg = clock.firstChild.data;

// 				//set the last index in msg as the start time (in seconds)
// 				var i = msg.substring(msg.length - 2, msg.length - 1);
// 				//function to perform on the inverval in the while loop
// 				var updateClock = function() {
// 					deleteChildren("clock");
// 					clock.appendChild(document.createTextNode(msg.substring(0, msg.length - 1) + i));
// 				};

// 				//start the time and loop each second until i runs to 0
// 				while (i > 0) {
// 					--i;
// 					setTimeout(updateClock, 1000);
// 				}

// 				//go back to the home page
// 				window.location.href = "index.php";				
// 			};
		</script>
	</head>
	<body>
		<?php
			//function to generate random auth code of 8 alphanumeric characters
			function generateAuth() {
				$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890;";
				$i = 0;
				$code = "";
				while ($i < 8) {
					$index = rand(0, strlen($chars) - 1);
					$code += substr($chars, $index, $index + 1);
					++$i;
				}
				
				return $code;
			}
		
			//get all of the variables needed to create a profile
			$first_name = $_POST['signup_firstname'];
			$last_name = $_POST['signup_lastname'];
			$profile_picture = $_POST['signup_pic'];
			$email = $_POST['email0'];
			$password = $_POST['password0'];
			$phone_number = $_POST['phone'];
			$state = $_POST['state'];
			$zip_code = $_POST['zip'];
			$auth_code = generateAuth();
			//THIS VARIABLE WILL DEFAULT TO 0 WHEN THE SITE IS ON A REAL WEB SERVER
			$activated = 1;
			
			//add the new account to the profile list
			//connnect to the databse
			require_once("db_creds.php");
			$dbc = mysqli_connect(HOST, USER, PASSWORD, DB) or die("<h1>Error connecting to the database :(</h1>");
			
			//create a query that will insert a new row into the profile_list table
			$query = "INSERT INTO profile_list (id, first_name, last_name, profile_picture, email, password, phone, state, zip_code, ver_code, activated) "
					. "VALUES ('0', '$first_name', '$last_name', '$profile_picture', '$email', SHA('$password'), '$phone', '$state', '$zip_code', '$ver_code', '$activated')";
					
			//execute query
			$result = mysqli_query($dbc, $query) or die("<h1>We encountered a backend problem and couldn't get you on the list... :(</h1>");
			
			if ($result) {
				echo "<h1>Account successfully created!</h1>";
			}
		?>
		<h2 id="clock">You will be redirected to the home page in 3</h2>
	</body>
</html>