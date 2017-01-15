<!DOCTYPE html>
<html>
	<head>
		<title>Edit Profile</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h2>Edit Contact Information</h2>
		<form action="regconfirm.php">
			<label>Email:</label>
			<input type="email" name="newemail"><br>
			
			<label>Phone:</label>
			<input type="tel" name="newphone"><br>
			
			<p><strong>Notice: You must reconfirm your contact information</strong></p>
			<input type="submit" name="contactchange" value="Confirm changes">
		</form>
	</body>
</html>