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