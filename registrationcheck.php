<html>
<h1><u> Details</u></h1>
<body>
<?php

$username = $_POST["name"];
$pass = $_POST["pass"];
$passConfirm = $_POST["cpassword"];
$email = $_POST["email"];


$user = new FormModel();

$user->set_email($username);
$user->set_username($username);
$user->set_password($pass);

//store in session
$_SESSION['user'] = $user;

if ($pass!= $passConfirm)
 {
     echo("Oops! Password did not match! Try again. ");
	 return;
 }
 $userEmail =($email);
if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
 echo ("Invalid email format! Try again.");
  return;
}
 
 ?>

Username is: <?php echo $user->get_username() ?> <br> <br>
Password is: <?php echo $user->get_password()?><br><br>
Email is: <?php echo $user->get_email() ?>
<?php
header("Refresh:3; url = index.html");
?>
</body>
</html>
