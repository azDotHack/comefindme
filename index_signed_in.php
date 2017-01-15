<h2>Hooray for SpongeBOOOOOOOOB!!!</h2>
<div>
	<h3>New Job Matches</h3>
	
	<!-- get top 10 job.php matches for this user -->
	<?php ?>
	<!-- ADD CODE TO LOAD MORE JOBS -->
</div>
<div>
	<h3>New Employee Matches</h3>
	
	<!-- get top 10 skill.php matches for this user -->
	<?php ?>
	<!-- ADD CODE TO LOAD MORE SKILLS -->
</div>
<div>
	<h3>My Profile</h3>
	
	<!-- display name, profile pic, job.php and skill.php with contact requests -->
	<?php ?>
	
	<!-- get direct to either edit profile or add a job -->
	<form action="profile.php">
		<input type="submit" value="Edit My Profile" name=editprofile>
	</form>
	<form action="userlist.php">
		<input type="submit" value="Manage My Skills and Jobs" name=managelist>
	</form>
</div>