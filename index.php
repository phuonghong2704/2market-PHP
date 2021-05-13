<?php session_start(); ob_start(); ?>
<?php
include 'user/model/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 Market</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user/css/slick.css">
    <link rel="stylesheet" href="user/css/slick-theme.css">

    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="user/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="user/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="user/assets/css/style.css">
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
     <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="user/css/user.css">
</head>
<body>
    <header>
        <!--Header-->
        <div class="header">
        <div class="boxcenter">
            <!--Header-Logo-->
            <a href="index.php"><img src="user/images/lOGO 2m.png"  alt="" class="logo"></a>
            <!--Header Form tìm kiếm-->
            <form action="controller/sanpham.php?action=search" method="post" class="search">
            <input type="search"  autocomplete="off" name="txtSearch" id="txtSearch" onkeyup="tim(this.value);" placeholder="Tìm kiếm theo sản phẩm">
            <button class="submitSearch">Search</button>
            <div  class="srch">
                <ul id="srch">
                </ul>
            </div>
            </form>
            <!--Button header-->
             
              <!--Button header-->
              <?php 
                             if(isset($_SESSION['user'])){
                            echo '
                            <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">
                                      <i class="fas fa-user-circle"></i>
                                      </a>
                                      <div class="user-menu dropdown-menu">
                            ';
                            echo'<a class="nav-link" href=""><i class="fa fa-user"></i>'.$_SESSION['user'].'</a>';
                            echo ' <a class="nav-link" href="user/view/doipass.php"><i class="fa fa-bell-o"></i>Đổi mật khẩu</a>';
                            echo ' <a class="nav-link" href="user/view/logout.php"><i class="fa fa-bell-o"></i>Đăng xuất</a>';
                            echo '  </div>
                            </div>
                            <div class="buttonHeader">';
                            }elseif (isset($_SESSION['admin'])) {
                                echo '
                            <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">
                                      <i class="fas fa-user-circle"></i>
                                      </a>
                                      <div class="user-menu dropdown-menu">
                            ';
                            echo ' <a class="nav-link" href="admin/index.php"><i class="fa fa-bell-o"></i>Quản Trị</a>';
                            echo ' <a class="nav-link" href="user/view/doipass2.php"><i class="fa fa-bell-o"></i>Đổi mật khẩu</a>';
                            echo ' <a class="nav-link" href="admin/logout.php"><i class="fa fa-bell-o"></i>Đăng xuất</a>';
                            echo '  </div>
                            </div>
                            <div class="buttonHeader">';
                        }
                        else{
                            
                            echo '<div class="buttonHeader"><div class="logIn"><a href="user/view/signin.php">Đăng Nhập</a></div>
                                   <div class="signUp"><a href="user/view/dangki.php">Đăng Ký</a></div>';
                        }
                    ?>
          
        <!--Button header-->
             <a href="index.php?ctrl=love" class="favourite"><i class="fas fa-heart"></i></a>
              <div class="cart"><a href="index.php?ctrl=cart"><i class="fas fa-shopping-cart"></i></a></div>
       
            </div>
            
        </div>
        </div>
        <!--End Boxcenter-->

        <!--End-->
        </div>
        <nav class="sub-header clearfix">
            <ul class="main-menu" >
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="#">Danh mục</a>
            <ul class="sub-menu">
                <?php
                $catalog = query1("SELECT * FROM danhmuc ORDER BY idDanhMuc");
                foreach ($catalog as $catalogs) {
                    echo '
                    <li><a href="index.php?ctrl=home&action=sanpham-danhmuc&id='.$catalogs['idDanhMuc'].'">'.$catalogs['TenDanhMuc'].'</a></li>
                    ';
                }
                ?>
            </ul>
            </li>
            <li><a href="user/view/tintuc.php">Tin tức</a></li>
            <li><a href="index.php?ctrl=home&action=dangtin">Đăng tin sản phẩm</a></li>
            </ul>
        </nav>
    </header>    
<!--End header-->
<div>
    <?php 
    if(!isset($_GET['ctrl'])){
        $ctrl= 'home';
    }else{
        $ctrl = $_GET['ctrl'];
    }
    include 'user/controller/'.$ctrl.'.php';
    ?>
</div>
<!--Footer-->
    <footer class="clearfix">
        <div class="footer">
            <div class="txtfooter">
                <h2>FPT Poly</h2>
                <span>Dự Án 1</span> <br>
                <span>Thầy Nguyễn Văn Long</span> <br>
                <span>2Market</span> <br>
            </div>
            <div class="txtfooter">
                <h2>Thành viên</h2>
                <span>Phương Hồng</span> <br>
                <span>Thủy Tiên</span> <br>
                <span>Huỳnh Đức</span> <br>
                <span>Gia Bảo</span> <br>
                <span>Bảo Bảo</span> <br>
            </div>
            <div class="txtfooter">
                <h2>WD 15304_3</h2>
                <span>Nhóm 6</span> <br>
                <span>2 Market</span> <br>
                <span>Chợ đồ cũ</span> <br>
            </div>
        </div>
        <div class="nhom6">
            <hr>
            <span class="txtfooter2">@2020 FPT Polytechnic-Dự án 1-Nhóm 6- WD15304-3   </span>
        </div>
    </footer>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="user/js/custom.js"></script>
<script type="text/javascript" src="user/js/slick.min.js"></script>
<script>
    function tim(x){
        var srch = document.getElementById('srch');
        $.ajax({
            Type:'GET',
            url:'ajax.php',
            data:'content='+x,
            success : function(data)  // Hàm thực thi khi nhận dữ liệu được từ server
                { 
                    srch.innerHTML = data;
                    // alert(data)
                }
              });
              return false;
    }
</script>
</body>
<?php ob_end_flush(); ?>
</html>