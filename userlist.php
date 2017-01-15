<!DOCTYPE html>
<html>
	<head>
		<?php //php call to get skills and jobs for user ?>
	</head>
	<body>
		<div>
			<label>Your Skill List:</label>
			<form action="editskill.php">
				<input type="submit" name="newskill" value="Add new Skill">
			</form>
			<?php //loop to display all skill.php for this user ?>
		</div>
		<div>
			<label>Your Job Requests:</label>
			<form action="editjob.php">
				<input type="submit" name="newjob" value="Create new Job Listing">
			</form>
			<?php //loop to display all job.php for this user ?>
		</div>
		<div>
			<form action="index.php">
				<input type="submit" name="home" value="Return to Home">
			</form>
		</div>
	</body>
</html>