<!DOCTYPE html>
<html>
<head>
<title>Edit a Job</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
	<div>
		<form action="index.php">
			<input type="submit" name="home" value="Return to Home">
		</form>
			
			<?php //php call for profile picture ?><br> <label>Name:</label>
			<?php
			// php call for name
			echo $firstname + " " + $lastname;
			?>
			<br>
			
			<form action="editpassword.php">
				<input type="submit" name="pwChange" value="Change password">
			</form>
			<br><br>
			
			<label>Email:</label>
			<?php 
				//php call for email
				echo $email;
			?>
			<br> <label>Phone:</label>
			<?php
				// php call for phone number
				echo $phone;
			?>
			<br>
		<form action="editcontact.php">
			<input type="submit" name="contactChange" value="Change contact info">
		</form>
		<br>
		<br> <label>Location:</label><br>
			<?php
				//php call for state and zip
				echo $state + ", " + $zip;
			?>
			<form action="editlocation.php">
				<input type="submit" name="locationChange" value="Change Location">
			</form>
			<br>
		</div>
		<div>
			<form action="userlist.php">
				<input type="submit" name="manageList" value="Manage Skills and Jobs">
			</form>
		</div>
	</body>
</html>