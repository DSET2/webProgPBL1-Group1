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
  
  $name=$P_OST_["name"];
  $password=$_POST["pass"];
  $email=$_POST["email"];
}
  ?>

 
 

Username is: <?php echo $_POST["name"]; ?> <br> <br>
Password is: <?php echo $_POST["pass"]; ?><br><br>
Email is: <?php echo $_POST["email"]; ?><br><br>

 <?php
$servername="localhost";
$username="root";
$password="";

$dbase="purchaseFormDB";

$conn=new mysqli($servername, $username, $password, $dbase);

if ($conn->connect_error) {
	die("Connection failed:" .$conn->connect_error);
} else
echo "Connect Success    ";



$sql="INSERT INTO registration (username,password, email)
VALUES 
('$name','$password','$email')";
  if($conn->query($sql)===TRUE)
      {
        echo "New Record created";
      }
      else
      {
        echo "Error : ".$sql."<br>". $conn->error;
      }
?>

<?php
header("Refresh:3; url = index.html");?>
</body>
</html>