<h1>Successful login: Welcome back!</h1>
<div>
	<h3>New Job Matches</h3>
	
	<?php //get top 10 job.php matches for this user ?>
	<!-- ADD CODE TO LOAD MORE JOBS -->
</div>
<div>
	<h3>New Employee Matches</h3>
	
	<?php //get top 10 skill.php matches for this user ?>
	<!-- ADD CODE TO LOAD MORE SKILLS -->
</div>
<div>
	<h3>My Profile</h3>
	
	<?php //display name, profile pic, job.php and skill.php with contact requests ?>
	
	<!-- get direct to either edit profile or add a job -->
	<form action="profile.php" method="post">
		<div>
			<input type="submit" value="Edit My Profile" name=editprofile>
		</div>
	</form>
	<form action="userlist.php" method="post">
		<div>
			<input type="submit" value="Manage My Skills and Jobs"
				name=managelist>
		</div>
	</form>
	<form action="index.php" method="post">
		<div>
			<input type="submit" value="Log Out" name="logout">
		</div>
	</form>
</div>