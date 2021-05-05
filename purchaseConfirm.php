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

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phoneNumber= $_POST["phoneNumber"];
    $email = $_POST["email"];
    $streetAddress = $_POST["streetAddress"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zipCode = $_POST["zipCode"];

    echo "Name :  $firstName  $lastName  <br>";
    echo "Phone Number :  $phoneNumber <br>";
    echo "Email :  $email <br>";
    echo "Street Address :  $streetAddress <br>";
    echo "City :  $city <br>";
    echo "State :  $state <br>";
    echo "State :  $zipCode <br>";


    header("Refresh:5; url = index.html");
    ?>

</body>

</html>