<?php


// $img = $_POST['img'] ?? '';
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';






//ket noi csdl
$ketnoi = mysqli_connect("localhost", "root", "", "csdl1");
//truy van du lieu

$sql = "INSERT INTO `users` ( `username`, `email`, `password`) VALUES ( '$username', '$email', '$password'); ";
//thuc hien truy van

$ketqua = mysqli_query($ketnoi, $sql);








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
         <input id="name" name="name" class="input-text js-input" type="text" required>
         <label class="label" for="name">Name</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input name="email" class="input-text js-input" type="email" required>
         <label class="label" for="email">E-mail</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input name="password" class="input-text js-input" type="text" required>
         <label class="label" for="password">password</label>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
   </form>
</section>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>