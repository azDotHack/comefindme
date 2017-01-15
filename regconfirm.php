<!DOCTYPE html>
<html>
	<head>
		<title>Come Find Me!</title>
		<meta charset="UTF-8">
		<meta name="author" content="arizonaDotHack">
		<meta name="keywords" content="come, find, me, search, jobs, individuals">
		<meta name="description" content="This is a website for individuals to find others for basic jobs such as babysitting, lawnmowing, and more!">
		<link rel="stylesheet" href="style.css">
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
			$last_name = $_POST['signup_firstname'];
			$email = $_POST['signup_firstname'];
			$password = $_POST['signup_firstname'];
			$phone_number = $_POST['signup_firstname'];
			$state = $_POST['signup_firstname'];
			$zip_code = $_POST['signup_firstname'];
			$auth_code = generateAuth();
			$activated = 0;
		?>
	</body>
</html>