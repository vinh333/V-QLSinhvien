<?php


$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

//ket noi csdl
$db = mysqli_connect("localhost", "root", "", "csdl1");
//truy van du lieu
$sql = "select * from users where email='$email' and password='$password' ";
//thuc hien truy van

$rs = mysqli_query($db, $sql);
mysqli_fetch_all($rs);
if (mysqli_num_rows($rs) > 0) {
    echo "dang nhap thanh cong";
} else {
    echo "that bai";
    require_once 'login.html';
}
