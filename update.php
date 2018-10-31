<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
</head>
<body>
<h1>update users</h1>
<a href="showusers.php"><botton>Cancel</botton></a>
    <hr>
    <form action="updateprocess.php" method="post">
        <?php
/**
 * Created by PhpStorm.
 * User: wekesa
 * Date: 23/10/2018
 * Time: 21:21
 */
$connected = mysqli_connect("localhost","root","","cat2");
//extract($_GET);
$id = $_GET['x'];
$fetch = mysqli_query($connected,"select * from login where id=$id");
$row = mysqli_fetch_assoc($fetch);
extract($row);
?>
        <input type="text" name="name" value="<?php echo $jina; ?>">
        <input type="email" name="email" value="<?php echo $arafa;?>">
        <input type="number" name="number" value="<?php echo $simu; ?>">
        <input type="number" name="id" value="<?php echo $id; ?>" hidden>
        <input type="submit" name="btn_save" value="update">
    </form>

</body>
</html>