<!DOCTYPE html>
<html>
<head>
	<title>Come Find Me!</title>
	<meta charset="UTF-8">
	<meta name="author" content="arizonaDotHack">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" href="style.css">
	<script></script>
</head>
<body>
<?php
	//if some is logged in (there is a current session going on)
	if (isset($_SESSION['username'])) {
		//request the index_signed_in page
		require_once("index_signed_in.php");
	} else {
		//request the index_signed_out page
		require_once("index_signed_out.php");
	}
?>
</body>
</html>