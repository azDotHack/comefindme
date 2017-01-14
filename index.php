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
<script>
		//clear out an element
		function deleteChildren(id) {
			var elem = document.getElementById(id);
			while (elem.firstChild)
				elem.removeChild(elem.firstChild);
		}

		//checks if a certain input field is empty
		function isEmptyField(id) {
			var input = document.getElementById(id);
			if (input.value == "")
				return true;
			return false;
		}

		//check to make sure submitted image is valid
		function verifyPicture() {
			//save the value of the image feild as well as the file extension in two variables
			var file = document.getElementById("signup_pic").value,
				extension = file.substring(file.length - 3);

			//check to see if the file extension is a valid one
			if (extension == "peg" || extension == "jpg" || extension == "png" || extension == "gif")
				return true;

			//this will run if the extension is invalid
			alert("Error! Make sure your image file is a valid one!");
			return false;
		}

		//function that takes two input fields as input and returns true if they are both filled out but false otherwise
		function verifyTextInput(id1, id2) {
			var isValid = true;
			//check to see if the two specified fields are empty
			if (isEmptyField(id1) || isEmptyField(id2))
				isValid = false;

			//send an error alert if the form is invalid
			if (!isValid)
				alert("Error! Make sure all fields in the sign up section are filled out!");

			return isValid;
		}
		
		window.onload = function() {
			document.getElementById("signin_form").onsubmit = function() {
				return verifyTextInput("signin_username", "signin_pwd");
			};

			document.getElementById("signup_form").onsubmit = function() {
				return verifyTextInput("signup_firstname", "signup_lastname") && verifyPicture();
			};
		};
	</script>
</head>
<body>
	<?php
	// if some is logged in (there is a current session going on)
	if (isset ( $_SESSION ['username'] )) {
		// request the index_signed_in page
		require_once ("index_signed_in.php");
	} else {
		// request the index_signed_out page
		require_once ("index_signed_out.php");
	}
	?>
</body>
</html>