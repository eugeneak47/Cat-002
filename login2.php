<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="Bootstrap/css/combination.css">
</head>
<body >
<style>
    body
    {
        background-color: #0b2e13;
    }
</style>
<form class="bg-danger" action="loginprocess.php" method="get">
    <fieldset>
        <legend class= "btn-danger">
            LOGIN
        </legend>
        <p>
            User Name:</br><input type="text" name="UserName" placeholder="username"  required>
        </p>
        <p>
            Password:</br><input type="password" name="Password" placeholder="password"  required>
        </p>


            </br><input type="submit" name="sub" value="Login">
        <p>Don't Have an Account? <a href="login.php">Sign Up</a></p>
    </fieldset>
</form>

</body>
</html>