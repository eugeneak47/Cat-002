<?php
/**
 * Created by PhpStorm.
 * User: wekesa
 * Date: 21/10/2018
 * Time: 22:52
 */
$connected = mysqli_connect("localhost", "root", "", "cat2");
if (isset($_GET['x'])){
    $id = $_GET['x'];
    mysqli_query($connected,"delete from login where id=$id");
    header("location:showusers.php");
}
?>