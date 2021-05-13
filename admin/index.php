<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <link href="http://unvab.com/snow-free-html/assets/images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2Market</title>
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .he500{
            min-height: 500px;
        }
        .card-header h3{
            font-weight: bold;
        }
        th,td {
            text-align: center;
        }
        .quenmk{
            color: blue;
        }
    </style>
</head>
<?php ob_start(); date_default_timezone_set('Asia/Ho_Chi_Minh');?>
<body>
    <!-- Cột trái -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php?ctrl=home"><i class="menu-icon fa fa-laptop"></i>Trang chủ </a>
                    </li>
                    <li class="menu-title">Danh mục</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="index.php?ctrl=sanpham">
                            <i class="menu-icon fa fa-cogs"></i>Sản phẩm</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="index.php?ctrl=danhmuc">
                            <i class="menu-icon fa fa-table"></i>Danh Mục</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="index.php?ctrl=khachhang">
                            <i class="menu-icon fa fa-user"></i>Khách hàng</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="index.php?ctrl=binhluan">
                            <i class="menu-icon fa fa-comments"></i>Bình Luận</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="index.php?ctrl=donhang">
                            <i class="menu-icon fa fa-comments"></i>Đơn Hàng</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="index.php?ctrl=hoadonchitiet">
                            <i class="menu-icon fa fa-comments"></i>Hóa Đơn Chi Tiết</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="index.php?ctrl=thongke">
                            <i class="menu-icon fa fa-th"></i>Thống Kê</a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php?ctrl=home"><img src="../user/images/logo.jpg" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown">
                                    <i class="fa fa-bell"></i>
                                    <span class="count bg-danger">0</span>
                                </button>
                        </div>
                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown">
                                        <i class="fa fa-envelope"></i>
                                    <span class="count bg-primary">0</span>
                                </button>
                        </div>
                    </div>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">
                            <img class="user-avatar rounded-circle" src="../user/images/admin.jpg" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>Thông tin của tôi</a>
                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Thông báo<span class="count">13</span></a>
                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
       <!-- Nội dung -->
        <div class="content pb-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-body he500">
                                    <?php 
                                    $ctrl = 'home';
                                    if(isset($_GET['ctrl'])){
                                        $ctrl = $_GET['ctrl'];
                                    include 'controller/'.$ctrl.'.php';
                                    }
                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HẾT -->
        <div class="clearfix"></div>
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-12">2020 &copy; Design by 2Market - Code by 2Market</div>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets/js/vendor/jquery-2.1.4.min.js" type="0640128dc1133d9fc5db022f-text/javascript"></script>
    <script src="assets/js/popper.min.js" type="0640128dc1133d9fc5db022f-text/javascript"></script>
    <script src="assets/js/plugins.js" type="0640128dc1133d9fc5db022f-text/javascript"></script>
    <script src="assets/js/main.js" type="0640128dc1133d9fc5db022f-text/javascript"></script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js " data-cf-settings="0640128dc1133d9fc5db022f-|49 " defer=" "></script>
</body>
<?php ob_end_flush(); ?>
</html>