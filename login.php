<?php
session_start();

$_SESSION['email'] = $_POST['email'] ?? '';
$_SESSION['password'] = $_POST['password'] ?? '';



if (!empty($_SESSION['email'])) {
    $e = $_SESSION['email'];
}
if (!empty($_SESSION['password'])) {
    $p = $_SESSION['password'];
}
//ket noi csdl
$db = mysqli_connect("localhost", "root", "", "csdl1");
//truy van du lieu
$sql = "select * from users where email='$e' and password='$p' ";
//thuc hien truy van

$rs = mysqli_query($db, $sql);
mysqli_fetch_all($rs);

if (mysqli_num_rows($rs) > 0) {
    echo "Đăng nhập thành công";
    echo  "<a href=\"logout.php\">logout</a>";
} else {
    echo "Đăng nhập thất bại";
    require_once 'login.html';
}
