<!-- Registration Page -->
<!DOCTYPE html>
<html>
<head>
<title>Come Find Me!</title>
<meta charset="UTF-8">
<meta name="author" content="arizonaDotHack">
<meta name="robots" content="noindex, nofollow">
<link rel="stylesheet" href="style.css">
<script>
		//JSON object
		var stateData;
		
		//return true if a field is empty
		function isEmpty(elem) {
			return elem.value == "";
		}

		//return true if the value of two given input fields is equal
		function areEqual(id1, id2) {
			var elem1 = document.getElementById(id1),
				elem2 = document.getElementById(id2);

			document.getElementById("agree").checked

			if (elem1.value != elem2.value) {
				alert("E-mails must match each other and passwords must match each other!");
				return false;
			}

			return true;
		}

		//return true if input follows the specified regular expression
		function followsRegex(regex, id) {
			var elem = document.getElementById(id);
			if (!regex.test(elem.value)) {
				alert("Please enter a 10 digit phone number with no spaces or other delimiters! Also remember to enter a valid, 5-digit ZIP code!");
				return false;
			}

			return true;
		}
		
		//use JSON file to validate if state input is a valid state
		function validateState() {
			var elem = document.getElementById("state");
			if (elem.value.length == 2) {
				//if the state input is two characters, we know the user put in an acronym, so we search for that
				for (var state in stateData)
					if (elem.value == state) {
						elem.value = stateData[state];
						return true;
					}
			} else {
				//if the state input is NOT two characters, they are using the full name of a state
				for (var state in stateData)
					if (elem.value.toLowerCase() == stateData[state].toLowerCase()) {
						elem.value = stateData[state];
						return true;
					}
			}

			alert("You did not enter a valid state (use an acronym (AZ) or the full name of a state)!");
			return false;		
		}

		//returns true if user checked the "agree" checkbox
		function madePromise() {
			if (!document.getElementById("agree").checked) {
				alert("We can't let you in unless you promise to be good!");
				return false;
			}
			
			return true;
		}

		
		//return true if all fields are inputed correctly, but false if not
		function verifyFields() {
			/*
				Make sure of the following:
					- all text fields are not empty
					- both email fields have the same value
					- both password fields have the same value
					- the phone number is just a stream of 10 numbers with no spaces or delimiters
					- zip code is a valid zip code
					- the checkbox is checked
			*/

			//start by checking if empty by looping through the class register_fields that each input is a part of
			var inputs = document.getElementsByClassName("register_fields");
			for (var i = 0; i < inputs.length; ++i) {
				elem = inputs[i];
				if (isEmpty(elem)) {
					alert("Make sure you have all of the fields filled out!");
					return false;
				}
			}

			return areEqual("email0", "email1") &&
				areEqual("password0", "password1") &&
				followsRegex(/^\d{10}$/, "phone") &&
				followsRegex(/(^\d{5}$)|(^\d{5}-\d{4}$)/, "zip") &&
				validateState() &&
				madePromise()
			;
		}

		//use an XMLHTTPREQUEST to load the data from state_data.json
		function loadJSON(callback) {   
		    var xobj = new XMLHttpRequest();
		        xobj.overrideMimeType("application/json");
		    xobj.open('GET', 'state_data.json', true);
		    xobj.onreadystatechange = function () {
		          if (xobj.readyState == 4 && xobj.status == "200") {
		            // Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
		            callback(xobj.responseText);
		          }
		    };
		    xobj.send(null);  
		 }
		
		window.onload = function() {
			//preload the JSON file
			loadJSON(
				function(response) {
					// Parse JSON string into object
    				stateData = JSON.parse(response);
 				}
 			);
			
			//when the form is submited, verify the inputs
			document.getElementById("regconfirm_form").onsubmit = verifyFields;
		};
	</script>
</head>
<body>
	<h2>Let ComeFindME get to know you</h2>
	<fieldset>
		<form id="regconfirm_form" action="regconfirm.php" method="post">
			<?php
			// DATA RECEIVED FROM THE FIRST PAGE (IE FIRST NAME, LAST NAME, AND PROFILE PICTURE
			$first_name = $_POST ['signup_firstname'];
			$last_name = $_POST ['signup_lastname'];
			$profile_pic = $_POST ['signup_pic'];
			
			echo "<input type='hidden' name='signup_firstname' value='$first_name'>";
			echo "<input type='hidden' name='signup_lastname' value='$last_name'>";
			echo "<input type='hidden' name='signup_pic' value='$profile_pic'>";
			?>
			
			<!-- Input the rest of the data:
				email
				password
				state
				zip code
				first set of skills (category + description)
			 -->
			<label>Email Address:</label> <input class="register_fields"
				type="email" name="email0" id="email0"><br> <label>Confirm Email
				Address:</label> <input class="register_fields" type="email"
				name="email1" id="email1"><br> <label>Password:</label> <input
				class="register_fields" type="password" name="password0"
				id="password0"><br> <label>Confirm Password:</label> <input
				class="register_fields" type="password" name="password1"
				id="password1"><br> <label>Phone Number (just type the 10 numbers
				(including area code); no spaces or dashes):</label> <input
				class="register_fields" type="text" name="phone" id="phone"><br> <label>State:</label>
			<input class="register_fields" type="text" name="state" id="state"><br>
			<label>ZIP Code:</label> <input class="register_fields" type="text"
				name="zip" id="zip" maxlength="5"><br> <label>I promise not to use
				this site for malicious purposes.<br>
			</label> <input type="checkbox" name="agree" value="yes" id="agree">Yes,
			I agree<br> <input type="submit" value="Submit">
		</form>
	</fieldset>
</body>
</html>