<html>

    <head>
          <title>Login Details</title>
    </head>

   <body style="background-color:#455A64;color:#ffffff">
         <?php
              if(isset($_POST['username']) && $_POST['username'] == "Haikal")
              {
                echo $_POST["username"];
              }
              else
              {
                echo "WRONG USERNAME";
              }
         ?>
         <br><br>

         <?php
              if(isset($_POST['password']) && $_POST['password'] == "1234")
              {
                echo $_POST["password"];
              }
              else
              {
                echo "WRONG PASSWORD";
              }
         ?>
         <br><br>
   </body>

</html>
