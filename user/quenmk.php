<?php session_start()?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
    <style>
        /* *{
            margin: 0;
            padding: 0;
        } */
        body{
            
        }
        #container{
            width: 100%;
            overflow: hidden;
            position: relative;
            min-height: 100vh;
            height: auto;
        }
        .blank-index{
            background-image: url('img/login-bg.jpg');
            background-size: cover;
            background-position: center center;
        }
        .cls-container{
            padding: 50px 15px 15px;
            padding-top: 10vh;
            position: relative;
        }
        .boxleft{
            flex-basis: 30%;
        }
        .boxleft a{

        }
        .boxleft a img{
            width:100%;
        }
        .boxright{
            background-size: cover;
            background-color: white;
            flex-basis: 70%;
        }
        form{
            background-color: #F5FFFA;
            padding:5%;
        }
        .col-md-8{
            display: flex;
            justify-content: center;
            align-items: center;
}
        }
    </style>
</head>

<body>
    <div  id="container" class="blank-index">
        <div class="cls-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-8" style="margin:auto;">
                        <div class="boxleft"><a href="view/signin.php"><img src="images/lOGO 2m.png" alt="" width="100%" style="padding: 20px;"></a></div>
                        <div class="boxright">
                            <form action="" method="POST">
                                <div class="form-group">
                                <label>Nhập Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Vui lòng nhập Email"> 
                                </div>
                                <button type="submit" name="send" class="btn btn-success">Gửi yêu cầu</button>
                            </form>
    <?php
    require 'model/guiemail.php';
    $thongbao="";
    $email="";
    if (isset($_POST['send'])){                                                                                         
        $email=$_POST['email'];
        changePassword($email,$pass_new1);
    }
    ?>
<!-- ////////gui yeu cau//////////////// -->
<?php
    require_once "PHPMailer-master/src/PHPMailer.php";
    require_once "PHPMailer-master/src/Exception.php";
    require_once "PHPMailer-master/src/OAuth.php";    
    require_once "PHPMailer-master/src/SMTP.php";
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);  
    try {        
        $mail->SMTPDebug = 0;   //chế độ full debug, khi mọi thứ ok thì chỉnh lại 0
        $mail->isSMTP();       // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Server gửi thư
        $mail->SMTPAuth = true;
        $mail->Username = 'huynhduc14022001@gmail.com';  // ví dụ: abc@gmail.com
        $mail->Password = 'Huynhduc14022001@';
        $mail->SMTPSecure = 'ssl'; //TLS hoặc `ssl` 
        $mail->Port = 465;    // 587 hoặc 465
        $mail -> CharSet = "UTF-8"; 
        $mail->smtpConnect([ "ssl" => [
                "verify_peer"=>false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
                ]
                ]
        );        
        //Khai báo người gửi và người nhận mail        
        $mail->setFrom('huynhduc14022001@gmail.com', 'Ban quản trị website');
        $mail->addAddress("{$email}", 'Quý khách'); 
        $mail->isHTML(true);  // nội dung của email có mã HTML
        $mail->Subject = 'Cấp lại mật khẩu mới';
        $mail->Body = "Đây là mật khẩu mới của bạn <b> {$pass_new1} </b>";
        $mail->send();
        $thongbao .= "Đã gửi mail thành công";
    } catch (Exception $e) {
            $thongbao .= "Lỗi khi gửi thư: " . $mail->ErrorInfo;
    }
?>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>