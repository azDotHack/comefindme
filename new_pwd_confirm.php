<?php
	//begin a session
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
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
<?php
	$new_password = $_POST["newpass0"];

	require_once("db_creds.php");
	$dbc = mysqli_connect(HOST, USER, PASSWORD, DB);
	
	/*
	 * UPDATE table_name
		SET column1=value1,column2=value2,...
		WHERE some_column=some_value;
	 */
	
	$query_select = "UPDATE profile_list SET passoword='' WHERE email='" . $_SESSION['email'] . "' and first_name='" . $_SESSION['first_name'] . "'";
	$result = mysqli_query($dbc, $query_select);
?>
</body>
</html>