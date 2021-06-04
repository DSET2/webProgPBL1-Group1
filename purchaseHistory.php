<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Purchase History</title>
</head>

<body>
  <h1>Your Purchase History</h1>
</body>

</html>

<?php
echo "<br><br>";

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


$sql = "SELECT itemName FROM purchaseitem";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "Item Name: " . $row["itemName"] . "<br>";
  }
} else {
  echo "0 results";
  header("Refresh:5; url = purchaseForm.html");
}

echo "<br><br><br><br>";
echo "<a href='deleteItems.php'>Delete All Items</a>";





?>