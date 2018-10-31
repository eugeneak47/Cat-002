<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/urembo.css">
</head>
<body>
<h1>users</h1>
<a href="saveuser.php"></a>
<hr>
<table>
    <tr>
        <th>Names</th>
        <th>Emails</th>
        <th>Phone Numbers</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
    /**
     * Created by PhpStorm.
     * User: wekesa
     * Date: 17/10/2018
     * Time: 23:17
     */
    $connected = mysqli_connect("localhost", "root", "", "cat2");
    $fetch =  mysqli_query($connected, "select * from login");
    while ($row = mysqli_fetch_assoc($fetch)){
        extract($row);
        echo
        "<tr>
<td>$jina</td>
<td>$arafa</td>
<td>$simu </td>

<td><a href='delete.php?x = $id'><button class='btn btn-danger'>delete</button></a></td>
<td><a href='update.php?x=$id'><button class='btn btn-primary'>update</button></a></td>
</tr>";
    }



    ?>
</table>

</body>
</html>