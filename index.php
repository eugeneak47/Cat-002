<?php
/**
 * Created by PhpStorm.
 * User: wekesa
 * Date: 24/10/2018
 * Time: 21:41
 */
if (isset($_POST['Password-btn']))
{
    if ((!empty($_POST['Email/Phone Number']))and(!empty($_POST['Password'])))
        {
          $FirstName = $_POST['First Name'];
          $SecondName = $_POST['Second Name'];
          $EmailPhoneNumber  = $_POST['Email/Phone Number'];
          $UserName = $_POST['User Name'];
          $Password = $_POST['Password'];
          $select = "SELECT `id`, `First Name`, `Second Name`, `Email/Phone Number`, `User Name`, `Password` FROM `login` WHERE Password='$Password' and (Email='Email/Password')";
          $query = mysqli_query($conn, $select);
          $rows = mysqli_num_rows($query);
          if ($rows >= 1){
              $_SESSION["Email"] ="$Email/Phone Number";
              header("location:login.php");

          } else {
              header("");
              $_SESSION["error"] = "Wrong Email/Phone Number<br/><span style='color: #0b2e13'><nobr>Forgot Password?
<a href=''></a></nobr>";
          }

        }else{
        header("location:login.php");
        $_SESSION["error"] = "Empty Email/Phone Number/Password";
    }
}
?>