<?php

$u = $_POST['username'];
$p = $_POST['password'];

$db = mysqli_connect("localhost", "root", "", "webnc");

$sql = "select * from users where username = '$u' and password = '$p'";
$rs = mysqli_query($db,$sql);

if(mysqli_num_rows($rs) > 0)
{
    echo"<h1> Dang nhap thanh cong </h1>";
    header('location:index.php');
}
else{
    
    header('location:login.php');
    echo "<h2> Dang nhap khong thanh cong </h2>";
}

?>