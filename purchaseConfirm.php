<?php

      $serverName = "localhost";
      $userName = "root";
      $password = "";
      $dbase = "purchaseFormDB";

      # Connect to db
      $conn = new mysqli($serverName, $userName, $password);
      if ($conn->connect_error) {
        die("Connection Failed" . $conn->connect_error);
      } else {
        echo "Connection to db success";
      }

      $firstName = $_POST["firstName"];
      $lastName = $_POST["lastName"];
      $phoneNumber = $_POST["phoneNumber"];
      $email = $_POST["email"];
      $streetAddress = $_POST["streetAddress"];
      $city = $_POST["city"];
      $state = $_POST["state"];
      $zipCode = $_POST["zipCode"];
      $itemPuchase = $_POST["item"];

      #Insert Item into DB
      $sql="INSERT INTO purchaseItem(firstName,lastName,phoneNumber,email,streetAddress,cityName,state,zipCode,itemName)
      VALUES('$firstName','$lastName','$phoneNumber','$email','$streetAddress','$city','$state','$zipCode','$itemPuchase')
      ";

      if($conn->query($sql)===TRUE)
      {
        echo "New Record created";
      }
      else
      {
        echo "Error : ".$sql."<br>". $conn->error;
      }

      ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Succesful</title>
</head>

<body>
    <h1>Purchasing success</h1>
    <?php



    echo "Name :  $firstName  $lastName  <br>";
    echo "Phone Number :  $phoneNumber <br>";
    echo "Email :  $email <br>";

    echo "Street Address :  $streetAddress <br>";
    echo "City :  $city <br>";
    echo "State :  $state <br>";
    echo "State :  $zipCode <br>";


    // header("Refresh:5; url = index.html");
    ?>

</body>

</html> -->