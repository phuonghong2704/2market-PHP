<?php
    include '../model/connect.php';
if(isset($_POST['user'])){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $testpass=$_POST['password'];
    $repassword = md5($_POST['re-password']);
    $level = 0; //user
    $check_email = "SELECT * FROM admin WHERE email = '$email'";
    $cout_mail = $conn->prepare($check_email);
    $cout_mail->execute();
    $user = $cout_mail->fetch(PDO::FETCH_ASSOC);
    if(strlen($testpass)<6){
        echo '<script type="text/javascript">
        alert("Mật khẩu phải lớn hơn 6 kí tự!");
        </script>';
    }else if($password!=$repassword){
        echo '<script type="text/javascript">
        alert("Mật khẩu không trùng khớp!");
        </script>';
    }else if ($username =="" || $name =="" || $email =="" || $password=="" || $repassword=="") {
        echo '<script type="text/javascript">
        alert("Vui lòng nhập đầy đủ thông tin!");
        </script>';
    }else 
    {
    action("INSERT INTO admin (id,username,name,email,password,level) VALUES ('','$username', '$name', '$email', '$password', '$level')");
    echo '<script type="text/javascript">
    alert("Bạn đã tạo tài khoản thành công!");
    </script>';
    header("location:signin.php");
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        @font-face {
        font-family: Lato-Semibold;
        src: url("../Font/Lato-Semibold.ttf");
        }
        @font-face {
        font-family: Lato-Bold;
        src: url("../Font/Lato-Bold.ttf");
        }
        @font-face {
        font-family: Lato-Regular;
        src: url("../Font/Lato-Regular.ttf");
        }
        @font-face {
        font-family: Lato-Light;
        src: url("../Font/Lato-Light.ttf");
        }
        form{
            width: 30%;
            height: 43vw;
            background-color: white;
            border: 1px solid rgb(161, 161, 161);
            border-radius: 4px;
            margin:0 auto;
        }
        .logo{
            text-align: center;
            margin-top: 5%; 
        }
        .group{
            margin-left: 8%;
        }
        input{
            width: 85%;
            height: 2vw;
            margin-top: 3%;
            margin-bottom: 1%;
            padding-left: 4%;
            border-radius: 3px;
            font-family: Lato-Regular;
            border: 1px solid rgb(161, 161, 161);
        }
        button{
            background-color: #8bc34a;
            margin-left:34%;
            margin-top: 3%;   
            width: 10vw;
            height: 2.5vw;
            color: white;
            border-radius: 4px;
            border: thin;
        }
        button :hover{
            background-color: #8bc34a;
        }
        h4{
            text-align: center;
            color: #747473;
            font-family: Lato-Regular;
        }
        h3{
            text-align: center;
            color: black;
            font-size: 1vw;
            font-family: Lato-Regular;
        }
        .final h4{
            float: left;
            margin-top: 5%;
            margin-left: 18%;
            font-family: Lato-Regular;
        }
        .final a{
            float: right;
            margin-right: 23%;
            margin-top: 2%;
            padding:2.6%;
            border: 1px solid #8bc34a;
            border-radius: 4px;
            text-decoration: none;
            color:  #8bc34a;
            font-family: Lato-Semibold;
        }
        .img-signin{
            width: 100%;
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;
            margin-bottom: 2.5%;
        }
        .font1{
            width: 10%;
            margin-left: 1.1%;
        }
        .font1 img{
            width: 100%;
        }
        .font2{
            width: 10%;
            margin-right: 3.2%;
            margin-left: 3.2%;
        }
        .font2 img{
            width: 100%;
        }
        .font3{
            width: 10%;
        }
        .font3 img{
            width: 100%;
        }
        .note{
            font-size:0.8vw;
            color: red;
            font-family: Lato-Semibold;
            margin-left: 5%
        }
    </style>
</head>
<body>
    <form action="" method="POST" onsubmit="return validateFormDangKy()">
        <div class="logo">
            <a href="../../index.php"><img src="../images/logodangky.png"></a>
        </div>
        <div class="group">
            <input type="text" id="username" name="username" placeholder="Tên Người Dùng">

        </div>
        <div class="group">
            <input type="text" id="name" min="5" name="name" placeholder="Họ Và Tên">
        </div>
        <div class="group">
            <input type="email" id="email" name="email" placeholder="Địa Chỉ Email">
        </div>
        <div class="group">
            <input type="password" id="password" name="password" placeholder="Mật Khẩu">
        </div>
        <div class="group">
            <input type="password" id="re-password" name="re-password" placeholder="Nhập lại mật khẩu">
        </div>
        <button type="submit" name="user" value="user">Tạo Tài Khoản</button>
        <h4>hoặc</h4>
        <h3>Đăng ký với</h3>
        <div class="img-signin">
            <div class="font1">
                <img src="../images/font1.JPG">
            </div>
            <div class="font2">
                <img src="../images/font2.JPG">
            </div>
            <div class="font3">
                <img src="../images/font3.JPG">
            </div>
        </div>
        <div class="final">
            <h4>Bạn đã có tài khoản ?</h4>
            <a href="signin.php">Đăng nhập</a>
        </div>
    </form>
    <script src="../js/kiemloi.js"></script>
</body>
</html>