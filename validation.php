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
$s = "select * from registration where username = '$name' && password = '$pass' ";


$result = mysqli_query($conn, $s);

//count number of row of this email apper in db
$num = mysqli_num_rows($result);
//cheack if the email already exist in db or not
if ($num == 1) {
  //create session variable
  $_SESSION['username'] = $name;
  header('location:homepage.php');
} else {
  echo "Username or Password Incorrect";
  header("Refresh:3; url = index.html");
}


// if (isset($_POST['username']) && $_POST['username'] == "Haikal"||"Ikmal"||"Ridhwan") {
//   header("Refresh:3; url = purchaseForm.html");
//   echo $_POST["username"];
// } else {
//   header("Refresh:2; url = index.html");
//   echo "WRONG USERNAME";
// }


?>
<br><br>

<?php
// if (isset($_POST['password']) && $_POST['password'] == "1234") {
//   header("Refresh:3; url = purchaseForm.html");
//   echo $_POST["password"];
// } else {
//   header("Refresh:2; url = index.html");
//   echo "WRONG PASSWORD";
// }
?>