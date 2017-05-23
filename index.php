<!DOCTYPE html>

<?php

    // Start the session
    session_start();

    // Defines username and password. Retrieve however you like,
    $username = "user";
    $password = "password";

    // Error message
    $error = "";

    // Checks to see if the user is already logged in. If so, refirect to correct page.
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        $error = "success";
        header('Location: success.php');
    } 
        
    // Checks to see if the username and password have been entered.
    // If so and are equal to the username and password defined above, log them in.
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            $_SESSION['loggedIn'] = true;
            header('Location: success.php');
        } else {
            $_SESSION['loggedIn'] = false;
            $error = "Invalid username and password!";
        }
    }
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="shortcut icon" href="https://agudeveloper.github.io/daigoureport.github.io/images/report-icon.gif" />
		<title>DaigouReport Homepage</title>
		
		<!--new css-->
		<link href="styles/main.css" rel="stylesheet" type="text/css"> 
	</head>
	
	<body class="bg-fixed bg-image">
		<!-- Main Tab Container -->
		<div class="login">
			<button onclick="document.getElementById('userlogin').style.display='block'" style="width:auto; float: right;">Login</button> 
		</div>
		<h1 class="title">Daigou Report</h1>
		<div class="search">
			<form>
				<input type="text" name="search" placeholder="Products, Brand name, WeChat ID, Weibo ID, etc…">
			</form>
		</div>
	</body>
	
	<div class="note wrapper clearfix">
		<div class="item-box clearfix left-half" style="bottom: 10%;" ><!--
			--><img src="https://agudeveloper.github.io/daigoureport.github.io/images/email.png" alt="gmail" style="width:50px; height:50px"><!--
			--><div class="item-data"><!--
				--><h3><a style="color: black" href="mailto:daigoureport@gmail.com">DaigouReport AT gmail DOT com</a></h3><!--
				--><p>Email Address</p><!--
			--></div><!--
		--></div><div class="item-box clearfix right-half" style="bottom: 10%;" ><!--
			--><img src="https://agudeveloper.github.io/daigoureport.github.io/images/phone.png" alt="linkedIn" style="width:50px; height:50px"><!--
			--><div class="item-data"><!--
				--><h3>xxx-xxx-xxxx</h3><!--
				--><p>Customer Service Number</p><!--
			--></div><!--
		--></div>
	</div>
	
	<div class="note wrapper clearfix">
		<footer>
			<p>Last Updated May 21st, 2017</p>
		</footer>
	</div>
	
	<div id="userlogin" class="modal">
		<form class="modal-content animate" action="/action_page.php">
			<div class="container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" id="username" required>

				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" id="password" required>

				<button type="submit">Login</button>
				<input type="checkbox" checked="checked"> Remember me
			</div>

			<div class="container" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('userlogin').style.display='none'" class="cancelbtn"style="text-align:left">Cancel</button>
				<span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		</form>
	</div>

	<script>
	// Get the modal
	var modal = document.getElementById('id01');
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	if (event.target == modal) {
	modal.style.display = "none";
	}
	}
	</script>
</html>
