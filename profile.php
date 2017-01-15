<?php
	session_start();
?>

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
			//read from mysql
			require_once("db_creds.php");
			$dbc = mysqli_connect(HOST, USER, PASSWORD, DB);
			$query_select = "SELECT * FROM profile_list WHERE email='" . $_SESSION["email"] . "' AND first_name='" . $_SESSION['first_name'] . "'";
			$result = mysqli_query($dbc, $query_select);
			
			$firstname = "";
			$lastname = "";
			$email = "";
			$phone = "";
			$state = "";
			$zip = "";
			
			while ($row = mysqli_fetch_array($result)) {
				$firstname = $row['first_name'];
				$lastname = $row['last_name'];
				$email = $row['email'];
				$phone = $row['phone'];
				$state = $row['state'];
				$zip = $row['zip_code'];
			}
			
			
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