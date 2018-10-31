<?php
/**
 * Created by PhpStorm.
 * User: wekesa
 * Date: 17/10/2018
 * Time: 22:29
 */
if (isset($_GET['sub'])){
    $connected = mysqli_connect("localhost","root","","cat2");
    if (!$connected){
        echo "Failed to connect to the Database";
    }else{
        $name= $_GET['FirstName'];
        $name2= $_GET['SecondName'];
        $email= $_GET['Email-PhoneNumber'];
        $username= $_GET['UserName'];
        $password= $_GET['Password'];
        $insert= "INSERT INTO `login`(`id`, `FirstName`, `SecondName`, `EmailPhoneNumber`, `UserName`, `Password`) VALUES (null,'$name','$name2','$email','$username','$password')";
        $querry=mysqli_query($connected,$insert);
        if($querry){
            echo "Success!";
            header("location:login2.php");
        }
        else{
            echo "Not Success!";
        }

    }
}
