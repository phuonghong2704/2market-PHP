<?php
  session_start();
?>

<?php 
     include '../model/connect.php';
    if(isset($_SESSION['user']) || isset($_SESSION['admin'])) {
        header("Location:../../index.php?ctrl=home&action=homepage-user");
    }
    if (isset($_POST['ok'])) {
        $email = $_POST['username'];
        $password = md5($_POST['password']);
        $check = "SELECT * FROM admin WHERE username = '$email' AND password = '$password' AND level = :level";
        $count = $conn->prepare($check);
        $count->execute(array(
            ':level' => 0
        ));
        $check_admin = "SELECT * FROM admin WHERE username = '$email' AND password = '$password' AND level = :level";
        $cout_admin = $conn->prepare($check_admin);
        $cout_admin->execute(array(
            ':level' => 1
        ));
        if($cout_admin->rowCount() > 0) {
            $_SESSION['admin'] = $email;
            echo '<script type="text/javascript">
            window.location="../../index.php?ctrl=home&action=homepage-user";
                </script>';
        }elseif($count->rowCount() > 0) {
            $_SESSION['user'] = $email;
            echo '<script type="text/javascript">
            window.location="../../index.php?ctrl=home&action=homepage-user";
            </script>';
        }else{
           echo '<script type="text/javascript">
           alert("Tài khoản hoặc mật khẩu của bạn chưa đúng!");
       </script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
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
            width: 26%;
            height: 68vh;
            background-color: rgb(255, 255, 255) ;
            border-radius: 4px;
            margin:0 auto;
            border: 0.1px solid rgb(211, 211, 211);
        }
        .logo{
            text-align: center;
            margin-top: 9%; 
        }
        .tex {
            margin-left: 6%;
        }
        input{
            width: 81%;
            height: 2vw;
            margin-top: 3%;
            margin-bottom: 4%;
            margin-left: 3%;
            padding-left: 6%;
            border-radius: 0.3vw;
            font-family: Lato-Bold;
            border: 0.8px solid rgb(161, 161, 161);
            
        }
        button{
            margin-top: -5%;
            background-color: #8bc34a;
            margin-left:38.9%;
            width: 12vh;
            height: 4.5vh;
            color: white;
            border-radius: 0.5vh;
            border: thin;
        
        }
        button a{
         text-decoration: none;
         font-size: 0.9em;
         color: white;

        }
        button:hover{
            color: rgb(23, 31, 27);
            background-color: #8bc34a;
             
        }
        h4{
            text-align: center;
            color: #747473;
            margin-left: 2%;
            margin-top: 5%;
            font-size: 0.9em;
        }
        .qmk a h5{
           padding-left: 66%; 
           color: #747473;
        }
        .qmk{
            margin-top: -5%;
        }
        .qmk a{
            font-size: 0.9em;
            text-decoration: none;
            
        }

        h3{
            text-align: center;
            color: rgb(36, 34, 34);
            font-size: 0.85em;
            margin-left: 3.5%;
        }
        .bott h4{
            float: left;
            margin-left: 22%;
            font-size: 0.8em;
            
        }
        .bott{
            margin-top: 1%;
        }
        .bott a{
            float: left;
           margin-left: 57%;
            margin-top: -11%;
            padding:2%;
            font-size: 0.9em;
            width: 15%;
            border: 1px solid #8bc34a;
            border-radius: 0.25vw;
            text-decoration: none;
            color:  #8bc34a;
        }
        .bott a:hover{
            color: white;
            background-color: #8bc34a;
             
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
    </style>
</head>
<body>
    <form action="" method="POST" onsubmit="return validateFormSignIn()">
        <div class="logo">
            <a href="../../index.php"><img src="../images/1.png" width="25%" height="20%"></a>
        </div>
        <br>
        <div class="tex">
            <input type="text" id="username" name="username" placeholder="Tên Người Dùng">
        </div>
        
        <div class="tex">
            <input type="password" id="password" name="password" placeholder="Mật Khẩu">
        </div>
        <div class="qmk"><a href="../quenmk.php"><h5>Quên Mật Khẩu?</h5></a></div>
        <button type="submit" name="ok" value="ok">Đăng nhập</button>
        <h4>or</h4>
        <h3>Đăng nhập với</h3>
        <div class="img-signin">
            <div class="font1">
                <img src="../images/1.1.jpg">
            </div>
            <div class="font2">
                <img src="../images/1.2.JPG">
            </div>
            <div class="font3">
                <img src="../images/1.3.jpg">
            </div>
        </div>
        <div class="bott">
            <h4>Bạn chưa có mật khẩu?</h4>
            <a href="dangki.php">Đăng Ký</a>
        </div>
       
    </form>
<script src="../js/kiemloi.js"></script>
</body>
</html>