<!-- Registration Page -->
<!DOCTYPE html>
<html>
<head>
	<title>Come Find Me!</title>
	<meta charset="UTF-8">
	<meta name="author" content="arizonaDotHack">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" href="style.css">
	<script></script>
</head>
<body>
	<h2>Let ComeFindME get to know you</h2>
	<fieldset>
		<form action="regconfirm.php" method="post">
			Email Address:
			<input type="email" name="email0" id="email0"><br>
			Confirm Email Address:
			<input type="email" name="email1" id="email1"><br>
			Password:
			<input type="password" name="password0" id="password0"><br>
			Confirm Password:
			<input type="password" name="password1" id="password1"><br>
			Phone Number:
			<input type="tel" name="phone" id="phone"><br>
			State:
			<input type="text" name="state" id="state"><br>
			ZIP Code:
			<input type="text"zip" id="zip"><br>
			Description of your qualities:<br>
			<textarea></textarea><br>
			List of Skills:<br>
			<textarea></textarea><br>
			I promise not to use this site for malicious purposes.<br>
			<input type="checkbox" name="agree" value="yes">Yes, I agree<br>
			<input type="submit" value="Submit">
		</form>
	</fieldset>
</body>
</html>