<html>

<head>
  <title>Login Details</title>
</head>

<body >
  <?php
  if (isset($_POST['username']) && $_POST['username'] == "Haikal"||"Ikmal"||"Ridhwan") {
    header("Refresh:3; url = purchaseForm.php");
    echo $_POST["username"];
  } else {
    header("Refresh:2; url = index.html");
    echo "WRONG USERNAME";
  }
  ?>
  <br><br>

  <?php
  if (isset($_POST['password']) && $_POST['password'] == "1234") {
    header("Refresh:3; url = purchaseForm.php");
    echo $_POST["password"];
  } else {
    header("Refresh:2; url = index.html");
    echo "WRONG PASSWORD";
  }
  ?>
  <br><br>
</body>

</html>