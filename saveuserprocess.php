<?php
/**
 * Created by PhpStorm.
 * User: wekesa
 * Date: 17/10/2018
 * Time: 22:29
 */
if (isset($_GET['btnsave'])){
    $connected = mysqli_connect("localhost","root","","cat2");
    if (!$connected){
        echo "Failed to connect to the Database";
    }else{
        $name = $_GET['name'];
        $email = $_GET['mail'];
        $phone = $_GET['number'];
        $insert = "INSERT INTO `students`(`id`, `jina`, `arafa`, `simu`) VALUES (null,'$name','$email','$phone')";
        $query = mysqli_query($connected,$insert);
        if ($query){
            echo "Saved Successfully";
            header("location:saveuser.php");
        }else{
            echo "Faied to save";

        }
    }
}
?>