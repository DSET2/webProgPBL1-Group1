<?php

session_start();


?>

<html>
<header>
  <title>Homepage</title>
</header>

<body>
  <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
  <?php header("Refresh:3; url = purchaseForm.html"); ?>
</body>

</html>