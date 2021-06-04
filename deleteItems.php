<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbase = "purchasingDB";

# Connect to db
$conn = new mysqli($serverName, $userName, $password, $dbase);
if ($conn->connect_error) {
  die("Connection Failed" . $conn->connect_error);
} else {
  // echo "Connection to db success <br>";
}

$sql = "DELETE FROM purchaseitem  ";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Refresh:5; url = purchaseForm.html");
} else {
  echo "Error deleting record: " . $conn->error;
}
