<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order confirmation</title>
</head>
<body>
    <h1>Place your order here</h1>
    <hr>
    <form method="POST" action="confirm.php">
        <table>
        
        <tr>
       <td><label for="firstName">Full Name :</label></td> 
        <td>
        <input type="text" name="firstName" placeholder="First Name">
        </td>
        <td>
        <input type="text" name="lastName" placeholder="Last Name">
        </td>
        </tr>

        <tr>
        <td><label for="phoneNumber">Phone Number :</label></td>
        <td><input type="tel" name="phoneNUmber" placeholder="+60134567890"></td>
        </tr>

        <tr>
        <td><label for="email">Email :</label></td>
        <td><input type="email" name="email" placeholder="johnDoe@mail.com"></td>
        </tr>

        <tr>
        <td><label for="delivery">Delivery Address :</label></td>
        <td><input type="text" name="streetAddress"></td>
        </tr>

        <tr>
        <td>&nbsp;</td>
        <td><input type="text" name= "city" placeholder="City"></td>
        <td><input type="text" name= "state" placeholder="State/Provice"></td>
        </tr>

        <tr>
        <td>&nbsp;</td>
        <td><input type="text" name="zipCode" placeholder="Postal/Zip Code"></td>
        </tr>
 

        <tr>
        <td>&nbsp;</td>
        <td><button type="submit">Submit</button></td>
        <td><button type="reset">Reset</button></td>
        </tr>
        </table>

    </form>
</body>
</html>