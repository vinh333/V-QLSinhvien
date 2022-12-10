<?php
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
      //ket noi
      $ketnoi = mysqli_connect("localhost", "root", "", "csdl1");
      //    //truy van du lieu

      $sql = "INSERT INTO `users` ( `username`, `email`, `password`) VALUES ( '$username', '$email', '$password'); ";
      //    //thuc hien truy van

      $ketqua = mysqli_query($ketnoi, $sql);  
      echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="login.html";</script>';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="Registration.css">
   <title>Document</title>
   <!--important link source from "https://bootsnipp.com/snippets/A36DP"-->
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link rel="stylesheet" href="Registration.css">
</head>

<body>

   <!------ Include the above in your HEAD tag ---------->

   <section class="get-in-touch">
      <h1 class="title">Get in touch</h1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" class="contact-form row">
         <div class="form-field col-lg-6">
            <input name="username" class="input-text js-input" type="text" required>
            <label class="label" for="name">Name</label>
         </div>
         <div class="form-field col-lg-6 ">
            <input name="email" class="input-text js-input" type="email" required>
            <label class="label" for="email">E-mail</label>
         </div>
         <div class="form-field col-lg-6 ">
            <input name="password" class="input-text js-input" type="text" required>
            <label class="label" for="password">PASSWORD 123 </label>
         </div>
         <div class="form-field col-lg-12">
            <input class="submit-btn" name="submit" value="Submit" type="submit">
         </div>
      </form>
   </section>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>