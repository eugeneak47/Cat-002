<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="Reg.php" method="GET">
    <fieldset>
        <legend class="btn-danger">
            SIGN UP
        </legend>
        First Name:</br><input type="text" name="FirstName" placeholder="First Name" class="bnt-success" required>
        <p>
            Second Name:</br><input type="text" name="SecondName" placeholder="Second Name" class="btn-success" required>
        </p>
        Email/Phone Number:</br><input type="text" name="Email-PhoneNumber" placeholder="Email/Phone Number" class="btn-success" required>
        <p>
            User Name:</br><input type="text" name="UserName" placeholder="user name" class="btn-succsess" required>
        </p>
        Password:</br><input type="password" name="Password" placeholder="enter Password" class="btn-success" required>
        </br><input type="submit" name="sub" value="Sign Up">
        <p>Already Have an Account? <a href="login2.php">Login</a></p>
    </fieldset>
</form>

</body>
</html>