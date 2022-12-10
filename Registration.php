<?php


// // $img = $_POST['img'] ?? '';
// $username = $_POST['username'] ?? '';
// $email = $_POST['email'] ?? '';
// $password = $_POST['password'] ?? '';




// if (isset($_POST['submit'])) {
//    echo "dw3iuewi";
//    //ket noi csdl
//    $ketnoi = mysqli_connect("localhost", "root", "", "csdl1");
//    //truy van du lieu

//    $sql = "INSERT INTO `users` ( `username`, `email`, `password`) VALUES ( '$username', '$email', '$password'); ";
//    //thuc hien truy van

//    $ketqua = mysqli_query($ketnoi, $sql);


//    // Kết nối cơ sở dữ liệu
//    $conn = mysqli_connect('localhost', 'root', '', 'csdl1') or die('Lỗi kết nối');
//    mysqli_set_charset($conn, "utf8");
//    // Kiểm tra username hoặc email có bị trùng hay không
//    $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";

//    // Thực thi câu truy vấn
//    $result = mysqli_query($ketnoi, $sql);

//    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
//    if (mysqli_num_rows($result) > 0) {
//       echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';

//       // Dừng chương trình
//       die();
//    } else {
//       $sql = "INSERT INTO users (username, password, email) VALUES ('$username','$password','$email')";
//       echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="register.php";</script>';
//    }
// }


header('Content-Type: text/html; charset=utf-8');
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'csdl1') or die('Lỗi kết nối');
mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if (isset($_POST['submit'])) {
   $username = trim($_POST['username']);
   $password = trim($_POST['password']);
   $email = trim($_POST['email']);



   if (empty($username)) {
      array_push($errors, "Username is required");
   }
   if (empty($email)) {
      array_push($errors, "Email is required");
   }

   if (empty($password)) {
      array_push($errors, "Two password do not match");
   }

   // Kiểm tra username hoặc email có bị trùng hay không
   $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";

   // Thực thi câu truy vấn
   $result = mysqli_query($conn, $sql);

   // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
   if (mysqli_num_rows($result) > 0) {
      echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="Registration.php";</script>';

      // Dừng chương trình
      die();
   } else {
      $sql = "INSERT INTO users (username, password, email VALUES ('$username','$password','$email')";
      echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="Registration.php";</script>';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <h2>FROM DANG KY</h2>
        <table>





            <tr>
                <td>User name:</td>
                <td><input type="text" name="username"></td>

            </tr>

            <tr>
                <td>Email :</td>
                <td><input type="email" name="email"></td>

            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="Registration"></td>
            </tr>


        </table>
    </form>


</body>

</html>