<?php
	//grab data to display job data, detect if new job
	echo $title;
	echo $category;
	echo $description;
	echo $online
?>

<form action="editjob.php">
	<input type="submit" name="editjob" value="Update Job">
</form>
<form action="userlist.php">
	<input type="submit" name="delete" value="Delete Job">
</form>