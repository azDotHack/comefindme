<?php
	/*class job
	{
		private $title,
				$category,
				$description,
				$online;
		function __construct($newtitle, $newcategory, $newdescription, $newonline)
		{
			$this->title = $newtitle;
			$this->category = $newcategory;
			$this->description = $newdescription;
			$this->online = $newonline;
		}
		
		function get_title()
		{
			return $this->title;
		}
		
		function get_category()
		{
			return $this->category;
		}
		
		function get_description()
		{
			return $this->description;
		}
		
		function get_online()
		{
			return $this->online;
		}
	}*/
?>

<form action="editjob.php">
	<input type="submit" name="editjob" value="Update Job">
</form>
<form action="userlist.php">
	<input type="submit" name="delete" value="Delete Job">
</form>