<?php
$username = $_POST['user'];
$passwork = $_POST['pass'];
if($username == "admin" && $passwork == "12345"){
    echo "<font color = red>Welcome to. ".$username."<font>";
}
else{
    echo "<font color = red>Username hoac passwork khong chinh xac, vui long dang nhap lai<font>";
}
?>