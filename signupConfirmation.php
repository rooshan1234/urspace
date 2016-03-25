<?php
include_once("config.php");
// Open database connection
$conn = mysqli_connect(DB_HOST_NAME, DB_USER, DB_PASS, DB_NAME);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$email = trim($_POST['eMail']);
$firstName = trim($_POST['fName']);
$lastName = trim($_POST['lName']);
$dateOfBirth = $_POST['bDay'] . "00:00:00";
$password = trim($_POST['pWord1']);

// server side input validations
if(!isset($email) || !isset($firstName) || !isset($lastName) || !isset($dateOfBirth) || !isset($password)){
	header('Location: signup.php');
}

$sql = "INSERT INTO Users (email, firstName, lastName, dateOfBirth, password)
VALUES ('$email','$firstName','$lastName','$dateOfBirth','$password');";

$success = false;
$redirect = 'signup.php';
//attempt to create new record
if (mysqli_query($conn, $sql)) {
  $redirect = 'login.php';
  $success = true;
}
mysqli_close($conn);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<META HTTP-EQUIV="Refresh" Content="3; URL=<?php echo $redirect; ?>">
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <link rel="stylesheet" type="text/css" href="mystyle.css"></link>
    <title>Sign Up</title>
  </head>
  <body class="infoPage">
    <?php 
	if ($success) { 
      echo "Sign-up successful. Welcome to URspace!";
      echo "<br/>";
      echo "Redirecting...";
     } else {
      echo "User email already exists.";
      echo "<br/>";
      echo "Redirecting...";
    } 
 ?>
  </body>
</html>
