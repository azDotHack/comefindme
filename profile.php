<!DOCTYPE html>
<html>
	<head>
		<!-- code to grab info from server, store into variables to echo -->
		<?php ?>
	</head>
	<body>
		<div>
			<!-- php call for profile picture -->
			<?php ?>
			<label>Name:</label>
			<!-- php call for name -->
			<?php
				echo $firstname + " " + $lastname;
			?>
			<br>
			<form action="edit_password.php">
				<input type="submit" name="pwChange" value="Change password">
			</form>
			<br><br>
			
			<label>Email:</label>
			<!-- php call for email -->
			<?php 
				echo $email;
			?>
			<br>
			
			<label>Phone:</label>
			<?php 
				echo $phone;
			?>
			<br>
			<form action="edit_email.php">
				<input type="submit" name="contactChange" value="Change contact info">
			</form>
			<br><br>
			
			<label>Location:</label><br>
			<!-- php call for location -->
			<?php
				echo $state + ", " + $zip;
			?>
			<form action="edit_location.php">
				<input type="submit" name="locationChange" value="Change Location">
			</form>
			<br>
		</div>
		<div>
			<label>Your current jobs:</label>
			<!-- php call for jobs -->
			<?php ?>
			<form action="editjob.php">
				<input type="submit" name="jobEdit" value="Edit Jobs">
			</form>
		</div>
		<div>
			<label>Your current skills:</label>
			<!-- php call for skills -->
			<?php ?>
			<form action="editskill.php">
				<input type="submit" name="skillEdit" value="Edit Skills">
			</form>
		</div>
	</body>
</html>