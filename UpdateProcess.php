<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 10/23/18
 * Time: 10:49 AM
 */
$connect = mysqli_connect("localhost","root","","Studentss");
if (isset($_POST['Id'])){
    extract($_POST);
    mysqli_query($connect,"UPDATE Details SET jina='$name', arafa='$email', simu='$number' WHERE Id=$Id");
    header("location:showusers.php");
}
?>