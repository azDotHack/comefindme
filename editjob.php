<!DOCTYPE html>
<html>
<head>
<title>Edit a Job</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="userlist.php">
		<label>Job Title:</label> <input type="text" name="title"> <br> <label>Category:</label>
		<?php //call skillfields list?>
		<br> <label>Description:</label><br>
		<textarea name="jobdescription"></textarea>
		<br> <input type="submit" name="confirm" value="Confirm Job">
	</form>
</body>
</html>