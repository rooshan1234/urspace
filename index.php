<?php
	include_once("config.php");

	//start session
	session_start();

	//If the user is already logged in, take them to the wall page.
	if(isset($_SESSION['login_user']))
{
	header('Location: wall.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">

<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css"></link>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> <!-- This is the link for bootstrap !-->
</head>

<script type = "text/javascript"  src = "scripts/java1.js" ></script>
<title>Home Page</title>



</head>

<body class="homePage">
<div class="container-fluid"> <!-- This is the container div for the page; it is flued so it spands the viewport !-->

	<div class="row"> <!-- Header row !-->
		<div class="col-xs-12 col-md-8 col-md-offset-2">
			<div class="header2">
				<h1>
					<a href="<?=SIDEBAR_VIEW_POSTS?>" class="homeLink">
						<img src="blank.jpg" class="placeHolder" alt="img"></img> <?php echo WEBSITE_NAME; ?>
					</a>
				</h1>
			</div>
		</div>
	</div>

	<div class="row"> <!-- Content row !-->
		<div class="section">

			<!-- Row for login !-->
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="signup">
					<form action="login.php" method="post" enctype="multipart/form-data" id="indexForm">
						<fieldset class="frontSection">
							<legend>Login</legend>
							Username <input type="text" name="uName" id ="uName"></input>
							<span class="errorMsg" id="uNameerror" ></span> <br></br>
							Password <input type="password" name="pWord" id="pWord"></input>
							<span class="errorMsg" id="pWorderror"></span><br></br>
							<input type="submit" value="Submit"/>
						</fieldset>
					</form>
				</div>
			</div>
			<br />
			<!-- Row for signing up !-->
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="loginSection">
					<form action="signup.html" method="get">
						<fieldset class="frontSection">
							<legend>Signup</legend>
							<p>Register now. Its free!</p>
							<input type="submit" value="Sign-Up"/>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="row"> <!-- Row for the footer !-->
		<div class="col-xs-12 col-md-8 col-md-offset-2">
			<div class="footer">
				<p class="p2">2015 Department of Computer Science CS 215</p>
			</div>
		</div>
	</div>
</div>

<script type = "text/javascript"  src = "scripts/index1.js" >
    </script>
</body>
</html>
