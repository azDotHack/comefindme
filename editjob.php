<!DOCTYPE html>
<html>
<head>
	<?php
		//submit query to change job info in database
	?>
</head>
<body>
	<form action="userlist.php">
		<label>Job Title:</label>
		<input type="text" name="title">
		<br>
		
		<label>Category:</label>
		<?php //call skillfields list?>
		<br>
		
		<label>Description:</label><br>
		<textarea name="jobdescription"></textarea><br>
		<input type="submit" name="confirm" value="Confirm Job">
	</form>
</body>
</html>