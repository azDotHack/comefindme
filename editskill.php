<!DOCTYPE html>
<html>
<head>
	<?php
		//submit query to change skill info in database
	?>
</head>
<body>
	<form action="userlist.php">
		<label>Skill:</label>
		<input type="text" name="skill">
		<br>
		
		<label>Category:</label>
		<?php //call skillfields list?>
		<br>
		
		<label>Description:</label><br>
		<textarea name="skilldescription"></textarea><br>
		<input type="submit" name="confirm" value="Confirm Skill">
	</form>
</body>
</html>