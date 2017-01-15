<?php
// grab data to display skill data, detect if new skill
echo $skill;
echo $category;
echo $description;
echo $maxdistance;
?>

<form action="editskill.php">
	<input type="submit" name="editskill" value="Update Skill">
</form>
<form action="userlist.php">
	<input type="submit" name="delete" value="Delete Skill">
</form>