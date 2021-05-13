<?php session_start() ?>
<?php
include './connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 Market</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
    <header>
        <!--Header-->
        <div class="header">
        <div class="boxcenter">
            <!--Header-Logo-->
            <img src="images/lOGO 2m.png" alt="" class="logo">
            <!--Header Form tìm kiếm-->
            <form action="" method="post" class="search">
            <input type="text" name="txtSearch" id="txtSearch" placeholder="Tìm kiếm theo sản phẩm">
            <button class="submitSearch">Search</button>
            </form>
          

            <!--Button header-->
            <div class="buttonHeader">
            <?php 
                if(isset($_SESSION['user'])){
                    echo 'chúc mừng bạn đã đăng nhập tài khoản : '.$_SESSION['user'].' thành công';
                    echo'<div class="logIn"><a href="logout.php">đăng xuất</a></div>';
                }elseif (isset($_SESSION['admin'])) {
                    echo'<div class="logIn"><a href="../admin/index.php">quản trị trang</a></div>';
                    echo'<div class="logIn"><a href="logout.php">đăng xuất</a></div>';
                }
                else{
                    echo '
                    <div class="logIn"><a href="signin.php">Đăng nhập</a></div>
                    <div class="signUp"><a href="dangky.php">Đăng ký</a></div>';
                }

            
            ?>
            
            <!-- <button class="logIn"><a href="signin.php">Đăng nhập</a></button>
            <button class="signUp"><a href="dangky.php">Đăng ký</a></button> -->
            <a class="favourite"><i class="fas fa-heart"></i></a>

          <div class="cart"><a href="../user/cart.php"><i class="fas fa-shopping-cart"></i></a></div>  
            </div>
        </div>
        <!--End Boxcenter-->

        <!--End-->
        </div>
        <nav class="sub-header clearfix">
            <ul class="main-menu" >
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Danh mục</a>
            <ul class="sub-menu">
                <li><a href="#">Quần</a>
                    <ul class="sub-menu">
                        <li><a href="#">Nam</a></li>
                        <li><a href="#">Nữ</a></li>
                        <li><a href="#">Trẻ em</a></li>
                    </ul>
                </li>
                <li><a href="#">Áo</a>
                    <ul class="sub-menu">
                        <li><a href="#">Nam</a></li>
                        <li><a href="#">Nữ</a></li>
                        <li><a href="#">Trẻ em</a></li>
                    </ul>
                </li>
                <li><a href="#">Váy</a>
                    <ul class="sub-menu">
                        <li><a href="#">Nam</a></li>
                        <li><a href="#">Nữ</a></li>
                        <li><a href="#">Trẻ em</a></li>
                    </ul>
                </li>
                <li><a href="#">Phụ kiện</a>
                    <ul class="sub-menu">
                        <li><a href="#">Nam</a></li>
                        <li><a href="#">Nữ</a></li>
                        <li><a href="#">Trẻ em</a></li>
                    </ul>
                </li>
            </ul>
            </li>
            <li><a href="#">Tin tức</a></li>
            <li><a href="#">Đăng tin sản phẩm</a></li>
            </ul>
        </nav>
    
            <div class="banner clearfix">
                <div class="txtbanner">
                    <span class="textbanner">Chúng tôi hướng đến một chợ giao dịch quần áo cũ an toàn với độ tin cậy cao</span>
                    <button><a href="#">Bán ngay</a></button>
                </div>
            </div>
    </header>
<!--End header-->

    <!--Danh mục-->
    <div class="catalog">
        <span class="precatalog"><a href="#"><i class="fas fa-chevron-left"></i></a></span>
        <div class="boxlarger">
            <div class="box">
                <img src="images/f75092f1adbf4ab9464ca1ce1ff585f4.jpg.png" alt="" class="imgcata"> <br>
                <span class="namecata">Áo nữ</span>
            </div>
            <div class="box">
                <img src="images/7lb18w003-sb150.jpg.png" alt="" class="imgcata"> <br>
                <span class="namecata">Quần trẻ em</span>
            </div>
            <div class="box">
                <img src="images/v63l17t019-alp32__1__1024x1024.jpg.png" alt="" class="imgcata"> <br>
                <span class="namecata">Váy nữ</span>
            </div>
            <div class="box">
                <img src="images/phụ-kiện.png" alt="" class="imgcata"> <br>
                <span class="namecata">Phụ kiện</span>
            </div>
        </div>
        <span class="nextcatalog"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
    </div>
    <!--End danh mục-->

    <!--Popular-->
    <div class="boxcenter">
        <div class="popular">
            <span class="tieude-popular">Nổi bật nhất</span> <br>
            <div class="boxlarger-popular">
                <div class="box-popular mr5">
                    <div class="img-popular">
                        <img src="images/phụ-kiện.png" alt="#">
                    </div>
                    <div class="txt-popular">
                        <span class="catalog-popular">Phụ kiện</span> <br>
                        <span class="name-popular">Vòng tay ngọc ngà</span> <br>
                        <span class="price-popular">VNĐ 405.000</span> <br>
                        <span class="next-popular"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                    </div>
                </div>
                <div class="box-popular mr5">
                    <div class="img-popular">
                        <img src="images/7lb18w003-sb150.jpg.png" alt="#">
                    </div>
                    <div class="txt-popular">
                        <span class="catalog-popular">Phụ kiện</span> <br>
                        <span class="name-popular">Vòng tay ngọc ngà</span> <br>
                        <span class="price-popular">VNĐ 405.000</span> <br>
                        <span class="next-popular"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                    </div>
                </div>
                <div class="box-popular">
                    <div class="img-popular">
                        <img src="images/phụ-kiện.png" alt="#">
                    </div>
                    <div class="txt-popular">
                        <span class="catalog-popular">Phụ kiện</span> <br>
                        <span class="name-popular">Vòng tay ngọc ngà</span> <br>
                        <span class="price-popular">VNĐ 405.000</span> <br>
                        <span class="next-popular"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                    </div>
                </div>
            </div>
            <p class="popular-more"><a href="#">Xem thêm ></a></p>
        </div>
    </div>

    <!--End popular-->
    <!--Why become buyer ....?-->
    <div class="boxcenter">
        <div class="become-buyer">
            <div class="img-become-buyer">   
            <img src="images/buyer.png" alt="">
            </div>
            <div class="txt-become-buyer">
                <span class="tieude-become-buyer">Tại sao bạn nên mua</span> <br>
                <span class="noidung-become-buyer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore animi quasi vel, modi odit consectetur eius veniam ratione quam! Cupiditate, doloremque sint. Quia quibusdam maiores nisi pariatur autem. Beatae, rem.Fugit esse vero dolorem ab. Facilis quo doloribus aliquam sed autem libero reiciendis! Quae maiores voluptates magni sapiente, delectus ducimus consequuntur, quod doloremque quos culpa accusantium laudantium iure perferendis voluptatem.</span> <br>
            <button class="buton-become"><a href="#">Mua ngay</a></button>
            </div>
        </div>
    </div>
    <!--Why become seller..?-->
    <div class="boxcenter">
        <div class="become-seller">
            <div class="img-become-seller">   
            <img src="images/seller.png" alt="">
            </div>
            <div class="txt-become-seller">
                <span class="tieude-become-seller">Tại sao bạn nên bán</span> <br>
                <span class="noidung-become-seller">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore animi quasi vel, modi odit consectetur eius veniam ratione quam! Cupiditate, doloremque sint. Quia quibusdam maiores nisi pariatur autem. Beatae, rem.Fugit esse vero dolorem ab. Facilis quo doloribus aliquam sed autem libero reiciendis! Quae maiores voluptates magni sapiente, delectus ducimus consequuntur, quod doloremque quos culpa accusantium laudantium iure perferendis voluptatem.</span> <br>
            <button class="buton-become"><a href="#">Bán ngay</a></button>
            </div>
        </div>
    </div>
    <!--End Why become .....-->

    <!--Show product-->
    <div class="boxcenter">
        <div class="productbox1 clearfix">
            <div class="main-product mr3">
                <div class="box-main-product ">
                    <div class="img-main-product">
                        <img src="images/phụ-kiện.png" alt="#">
                    </div>
                    <div class="txt-main-product">
                        <span class="catalog-main-product">Phụ kiện</span> <br>
                        <span class="name-main-product">Vòng tay ngọc ngà</span> <br>
                        <span class="price-main-product">VNĐ 405.000</span> <br>
                        <span class="next-main-product"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                    </div>
                </div>
            </div>
            <div class="extra-product">
                <div class="boxlarger-product">
                    <div class="box-product mr3">
                        <div class="img-product">
                            <img src="images/phụ-kiện.png" alt="#">
                        </div>
                        <div class="txt-product">
                            <span class="catalog-product">Phụ kiện</span> <br>
                            <span class="name-product">Vòng tay ngọc ngà</span> <br>
                            <span class="price-product">VNĐ 405.000</span> <br>
                            <span class="next-product"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                        </div>
                    </div>
                    <div class="box-product ">
                        <div class="img-product">
                            <img src="images/phụ-kiện.png" alt="#">
                        </div>
                        <div class="txt-product">
                            <span class="catalog-product">Phụ kiện</span> <br>
                            <span class="name-product">Vòng tay ngọc ngà</span> <br>
                            <span class="price-product">VNĐ 405.000</span> <br>
                            <span class="next-product"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                        </div>
                    </div>
                    <div class="box-product mr3">
                        <div class="img-product">
                            <img src="images/phụ-kiện.png" alt="#">
                        </div>
                        <div class="txt-product">
                            <span class="catalog-product">Phụ kiện</span> <br>
                            <span class="name-product">Vòng tay ngọc ngà</span> <br>
                            <span class="price-product">VNĐ 405.000</span> <br>
                            <span class="next-product"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                        </div>
                    </div>
                    <div class="box-product ">
                        <div class="img-product">
                            <img src="images/phụ-kiện.png" alt="#">
                        </div>
                        <div class="txt-product">
                            <span class="catalog-product">Phụ kiện</span> <br>
                            <span class="name-product">Vòng tay ngọc ngà</span> <br>
                            <span class="price-product">VNĐ 405.000</span> <br>
                            <span class="next-product"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Product 2-->
    <div class="boxcenter">
        <div class="productbox2 clearfix">
            <div class="main-product ml3">
                <div class="box-main-product ">
                    <div class="img-main-product">
                        <img src="images/phụ-kiện.png" alt="#">
                    </div>
                    <div class="txt-main-product">
                        <span class="catalog-main-product">Phụ kiện</span> <br>
                        <span class="name-main-product">Vòng tay ngọc ngà</span> <br>
                        <span class="price-main-product">VNĐ 405.000</span> <br>
                        <span class="next-main-product"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                    </div>
                </div>
            </div>
            <div class="extra-product">
                <div class="boxlarger-product">
                    <div class="box-product mr3">
                        <div class="img-product">
                            <img src="images/phụ-kiện.png" alt="#">
                        </div>
                        <div class="txt-product">
                            <span class="catalog-product">Phụ kiện</span> <br>
                            <span class="name-product">Vòng tay ngọc ngà</span> <br>
                            <span class="price-product">VNĐ 405.000</span> <br>
                            <span class="next-product"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                        </div>
                    </div>
                    <div class="box-product ">
                        <div class="img-product">
                            <img src="images/phụ-kiện.png" alt="#">
                        </div>
                        <div class="txt-product">
                            <span class="catalog-product">Phụ kiện</span> <br>
                            <span class="name-product">Vòng tay ngọc ngà</span> <br>
                            <span class="price-product">VNĐ 405.000</span> <br>
                            <span class="next-product"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                        </div>
                    </div>
                    <div class="box-product mr3">
                        <div class="img-product">
                            <img src="images/phụ-kiện.png" alt="#">
                        </div>
                        <div class="txt-product">
                            <span class="catalog-product">Phụ kiện</span> <br>
                            <span class="name-product">Vòng tay ngọc ngà</span> <br>
                            <span class="price-product">VNĐ 405.000</span> <br>
                            <span class="next-product"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                        </div>
                    </div>
                    <div class="box-product ">
                        <div class="img-product">
                            <img src="images/phụ-kiện.png" alt="#">
                        </div>
                        <div class="txt-product">
                            <span class="catalog-product">Phụ kiện</span> <br>
                            <span class="name-product">Vòng tay ngọc ngà</span> <br>
                            <span class="price-product">VNĐ 405.000</span> <br>
                            <span class="next-product"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Product 3-->
    <div class="boxcenter">
            <div class="productbox3 clearfix">
                <div class="boxlarger-product">
                    <div class="box-product3 mr3">
                        <div class="img-product">
                            <img src="images/phụ-kiện.png" alt="#">
                        </div>
                        <div class="txt-product">
                            <span class="catalog-product">Phụ kiện</span> <br>
                            <span class="name-product">Vòng tay ngọc ngà</span> <br>
                            <span class="price-product">VNĐ 405.000</span> <br>
                            <span class="next-product"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                        </div>
                    </div>
                    <div class="box-product3 mr3 ">
                        <div class="img-product">
                            <img src="images/phụ-kiện.png" alt="#">
                        </div>
                        <div class="txt-product">
                            <span class="catalog-product">Phụ kiện</span> <br>
                            <span class="name-product">Vòng tay ngọc ngà</span> <br>
                            <span class="price-product">VNĐ 405.000</span> <br>
                            <span class="next-product"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                        </div>
                    </div>
                    <div class="box-product3 mr3">
                        <div class="img-product">
                            <img src="images/phụ-kiện.png" alt="#">
                        </div>
                        <div class="txt-product">
                            <span class="catalog-product">Phụ kiện</span> <br>
                            <span class="name-product">Vòng tay ngọc ngà</span> <br>
                            <span class="price-product">VNĐ 405.000</span> <br>
                            <span class="next-product"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                        </div>
                    </div>
                    <div class="box-product3 ">
                        <div class="img-product">
                            <img src="images/phụ-kiện.png" alt="#">
                        </div>
                        <div class="txt-product">
                            <span class="catalog-product">Phụ kiện</span> <br>
                            <span class="name-product">Vòng tay ngọc ngà</span> <br>
                            <span class="price-product">VNĐ 405.000</span> <br>
                            <span class="next-product"><a href="#"><i class="fas fa-chevron-right"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End show product-->
<!--Footer-->
    <footer class="clearfix">
        <div class="footer">
            <div class="txtfooter">
                <h2>How We Help</h2>
                <span>Retailers Interiors Designers</span> <br>
                <span>Product Designers</span> <br>
                <span>Artisans</span> <br>
            </div>
            <div class="txtfooter">
                <h2>Get to Know Us</h2>
                <span>About</span> <br>
                <span>Policies</span> <br>
                <span>Careers</span> <br>
                <span>Press</span> <br>
            </div>
            <div class="txtfooter">
                <h2>Join the Community</h2>
                <span>Upcoming Events</span> <br>
                <span>Become a Buyer</span> <br>
                <span>Become a Seller</span> <br>
            </div>
            <div class="txtfooter">
                <h2>Follow Us</h2>
                <span>Facebook</span> <br>
                <span>Pinterest</span> <br>
                <span>Twitter</span> <br>
                <span>Instagram</span> <br>
            </div>
        </div>
        <div class="nhom6">
            <hr>
            <span class="txtfooter2">@2020 FPT Polytechnic-Dự án 1-Nhóm 6- WD15304-3   </span>
        </div>
    </footer>
<!--End -->
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>