<!DOCTYPE html>
<html>
<head>
	<?php //php call to get skills and jobs for user
		include("job.php");
		include("skill.php");
	?>
	<title>Come Find Me!</title>
<meta charset="UTF-8">
<meta name="author" content="arizonaDotHack">
<meta name="keywords"
	content="come, find, me, search, jobs, individuals">
<meta name="description"
	content="This is a website for individuals to find others for basic jobs such as babysitting, lawnmowing, and more!">
<link rel="stylesheet" href="style.css">
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
			<?php 
				/*$joblist = [];
				foreach ($j as $j1)
				{
					//grab data from SQL server
					$newjob = new job();
					$joblist[] = $newjob;
				}
				
				for ($i = 0; $i < 10; $i++)
				{
					echo $joblist[$i]->get_title();
					echo $joblist[$i]->get_category();
					echo $joblist[$i]->get_description();
					echo $joblist[$i]->get_online();
				}*/
			?>
		</div>
	<div>
		<form action="index.php">
			<input type="submit" name="home" value="Return to Home">
		</form>
	</div>
</body>
</html>