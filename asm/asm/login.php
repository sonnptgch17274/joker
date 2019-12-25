<?php
session_start();
require("./database.php");
$result = mysqli_query("select * from tblaccount where Username='$username' AND Password='$password'");
$result = mysqli_num_rows($result);
if($result){
    $loged = $username
    session_register($loged);
    echo("ban da dang nhap thanh cong");
}
else
{
echo("Xin loi de nghi ban kiem tra lai user va pass");
}
?>