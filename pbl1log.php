<html>
<h1><u> Details</u></h1>
<body>
<?php
if ($_POST["pass"]!= $_POST["cpassword"])
 {
     echo("Oops! Password did not match! Try again. ");
	 return;
 }
 $email =($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 echo ("Invalid email format! Try again.");
  return;
}
 
 ?>

Username is: <?php echo $_POST["name"]; ?> <br> <br>
Password is: <?php echo $_POST["pass"]; ?><br><br>
Email is: <?php echo $_POST["email"]; ?>
</body>
</html>
