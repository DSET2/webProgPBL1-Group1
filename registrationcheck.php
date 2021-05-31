<html>
<h1><u> Details</u></h1>

</html>

<?php

session_start();

$name = $_POST["name"];
$pass = $_POST["pass"];
$email = $_POST["email"];

$servername = "localhost";
$username = "root";
$password = "";
$dbase = "purchasingDB";
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn, 'purchasingDB');

//query the email from db
$s = "select * from registration where username = '$name' ";

$result = mysqli_query($conn, $s);

//count number of row of this email apper in db
$num = mysqli_num_rows($result);
//cheack if the email already exist in db or not
if ($num == 1) {
  echo "Email already exists";
} else {

  if ($_POST["pass"] != $_POST["cpassword"]) {
    echo ("Oops! Password did not match! Try again. ");
    return;
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid email format! Try again.");
    return;
  }
  //if not insert the data into db
  $regist = "insert into registration(username, password, email) values ('$name','$pass','$email')";
  //run the query
  mysqli_query($conn, $regist);
  echo "Registration success" . '<br>';
  header("Refresh:3; url = index.html");
}

echo "$name" . "<br>";
echo "$pass" . "<br>";
echo "$email" . "<br>";
?>