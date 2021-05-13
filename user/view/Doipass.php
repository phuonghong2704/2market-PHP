<?php  session_start();
       if (isset($_SESSION['user'])==false) {
          header("location:signin.php");
          exit();
       }
       $u = $_SESSION['user'];
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
            margin-top: 4%;
            margin-bottom: 4%;
            margin-left: 3%;
            padding-left: 6%;
            border-radius: 0.3vw;
            font-family: Lato-Bold;
            border: 0.8px solid rgb(161, 161, 161);
            
        }
        .qv{
            margin-top: 10%;
            margin-left:10%;
            width: 12vh;
            height: 4.5vh;
            color: white;
            border-radius: 0.5vh;
            border: thin;
        }
        button{
            margin-top: 10%;
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
           padding-left: 70%; 
           color: #747473;
        }
        .qmk{
            margin-top: -4%;
        }
        .qmk a{
            font-size: 0.99em;
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
    <form action="xulydoipass.php" method="post" id="frmlogin" onsubmit="return validateFormDoiPass()">
        <div class="logo">
            <a href="../../index.php"><img src="../images/1.png" width="25%" height="20%"></a>
        </div>
        <br>
        <div class="tex">
            <input name="username" id="username" type="text" disabled value="<?=$u;?>" placeholder="Tên Người Dùng">
        </div>
        
        <div class="tex">
            <input name="pass_old" id="pass_old" type="password" placeholder="Mật khẩu cũ">
        </div>
        <div class="tex">
            <input name="pass_new1" id="pass_new" type="password" placeholder="Mật khẩu mới">
        </div>
        <div class="tex">
            <input name="pass_new2" id="re_pass_new" type="password" placeholder="Nhập lại mật khẩu">
        </div>
      
        <button  name="btn" type="submit" value="Cập nhật">Cập nhập</button>
    </form>
    <script src="../js/validate.js"></script>
</body>
</html>
