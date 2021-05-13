
<div class="banner clearfix">
<div class="txtbanner">
    <span class="textbanner">Chúng tôi hướng đến một chợ giao dịch quần áo cũ an toàn với độ tin cậy cao</span>
    <button><a href="index.php?ctrl=home&action=dangtin">Bán ngay</a></button>
</div>
</div>
</header>
<!--End header-->
<?php 
?>
<!--Danh mục-->
<div class="catalog">
<button type="button" class="precatalog"><i class="fas fa-chevron-left"></i></button>
<div class="boxlarger">
<?php
foreach ($allCata as $cata) {
    echo '
    <a class="box" href="index.php?ctrl=home&action=sanpham-danhmuc&id='.$cata['idDanhMuc'].'">
    <div >
    <img src="user/images/'.$cata['Hinh'].'" alt="" class="imgcata"> <br>
    <span class="namecata">'.$cata['TenDanhMuc'].'</span>
    </div>
    </a>
    ';
}
?>
</div>
<button type="button" class="nextcatalog"><i class="fas fa-chevron-right"></i></button>
</div>
<!--End danh mục-->

<!--Popular-->
<div class="boxcenter">
<div class="popular">
<span class="tieude-popular">Nổi bật nhất</span> <br>
<div class="boxlarger-popular">
<?php
    foreach ($popularProduct as $pp) {
        $category = selectDb("SELECT * FROM danhmuc WHERE idDanhMuc=".$pp['idDanhMuc'])[0];
        echo '
        <div class="box-popular ">
        <div class="img-popular">
            <img src="user/images/'.$pp['image_link'].'" alt="#">
        </div>
        <div class="txt-popular">
            <span class="catalog-popular">'.$category['TenDanhMuc'].'</span> <br>
            <span class="name-popular">'.$pp['TenSP'].'</span> <br>
            <span class="price-popular">VNĐ '.$pp['Gia'].'</span> <br>
            <span class="next-popular"><a href="index.php?ctrl=home&action=more&id='.$pp['idSP'].'"><i class="fas fa-chevron-right"></i></a></span>
        </div>
    </div>        
        ';
    }
?>
</div>
<?php 
if(!isset($_GET['see'])){
    echo '<p class="popular-more"><a href="index.php?ctrl=home&see=1">Xem thêm></a></p>';
}else{
    echo '<p class="popular-more"><a href="index.php?ctrl=home&hide=1">< Ẩn đi</a></p>';
}
 ?>
</div>
</div>

<!--End popular-->
<!--Why become buyer ....?-->
<div class="boxcenter">
<div class="become-buyer">
<div class="img-become-buyer">   
<img src="user/images/buyer.png" alt="">
</div>
<div class="txt-become-buyer">
<span class="tieude-become-buyer">Tại sao bạn nên mua</span> <br>
<span class="noidung-become-buyer">Trong cuộc sống bận rộn,việc sử dụng thời gian một cách hợp lý là cần thiết. Nếu muốn mua một sản phẩm nào đó bạn phải mất công, mất thời gian tìm sản phẩm, đến nơi bán hàng...Thay vì lãng phí thời gian như vậy bạn chỉ cần nhấn chuột vào trang web mua hàng trực tuyến, chọn sản phẩm mình muốn mua rồi bấm nút đặt hàng hoặc mua hàng. Nhân viên giao hàng sẽ đưa tới địa chỉ bạn mong muốn. Vì vậy khi mua hàng online giúp bạn tiết kiệm thời gian tối đa và bớt đi các rắc rối của cuộc sống.
 .</span> <br>
<button class="buton-become"><a href="index.php?ctrl=home&action=showall">Mua ngay</a></button>
</div>
</div>
</div>
<!--Why become seller..?-->
<div class="boxcenter">
<div class="become-seller">
<div class="img-become-seller">   
<img src="user/images/seller.png" alt="">
</div>
<div class="txt-become-seller">
<span class="tieude-become-seller">Tại sao bạn nên bán</span> <br>
<span class="noidung-become-seller">Ngày nay Internet phổ biến ở hầu hết mọi nơi vì vậy khách hàng chỉ cần kết nối Internet là có thể truy cập vào website bán hàng của chúng ta mọi lúc mọi nơi,mọi thời điểm mà họ muốn. thay vì phải đi trực tiếp đến cửa hàng, và phải xem giờ giấc thì khách hàng chỉ cần lên trang web bán hàng bất cứ lúc nào là có thể mua hàng được rồi. điều này góp phần làm tăng tối đa cơ hội bán hàng, tăng doanh số,  và đem lại sự thuận tiện cho khách hàng mua sắm, làm tăng mức độ hài lòng của họ.  Vì thế, có một website bán hàng sẽ giúp đẩy mạnh hoạt động bán hàng mọi lúc, mọi nơi..</span> <br>
<button class="buton-become"><a href="index.php?ctrl=home&action=dangtin">Bán ngay</a></button>
</div>
</div>
</div>
<!--End Why become .....-->''   '

<!--Show product-->
<div class="boxcenter">
<div class="productbox1 clearfix">
<?php 
    foreach ($mainProduct1 as $main1) {
        $category = selectDb("SELECT * FROM danhmuc WHERE idDanhMuc=".$main1['idDanhMuc'])[0];
    echo '
    <div class="main-product mr3">
<div class="box-main-product ">
    <div class="img-main-product">
        <img src="user/images/'.$main1['image_link'].'" alt="#">
    </div>
<div class="txt-main-product">
        <span class="catalog-main-product">'.$category['TenDanhMuc'].'</span> <br>
        <span class="name-main-product">'.$main1['TenSP'].'</span> <br>
        <span class="price-main-product">VNĐ '.$main1['Gia'].'</span> <br>
        <span class="next-main-product"><a href="index.php?ctrl=home&action=more&id='.$main1['idSP'].'"><i class="fas fa-chevron-right"></i></a></span>
    </div>
</div>
</div>
';}
?>

<div class="extra-product">
<div class="boxlarger-product">
    <?php
    foreach($extraProduct1 as $extra1) {
        $category = selectDb("SELECT * FROM danhmuc WHERE idDanhMuc=".$main1['idDanhMuc'])[0];
        echo '
        <div class="box-product">
        <div class="img-product">
            <img src="user/images/'.$extra1['image_link'].'" alt="#">
        </div>
        <div class="txt-product">
            <span class="catalog-product">'.$category['TenDanhMuc'].'</span> <br>
            <span class="name-product">'.$extra1['TenSP'].'</span> <br>
            <span class="price-product">VNĐ '.$extra1['Gia'].'</span> <br>
            <span class="next-product"><a href="index.php?ctrl=home&action=more&id='.$extra1['idSP'].'"><i class="fas fa-chevron-right"></i></a></span>
        </div>
    </div>
        ';
    }
    ?>
</div>
</div>
</div>
</div>

<!--Product 2-->
<div class="boxcenter">
<div class="productbox2 clearfix">
<div class="main-product ml3">
    <?php
    foreach ($mainProduct2 as $main2) {
        $category = selectDb("SELECT * FROM danhmuc WHERE idDanhMuc=".$main1['idDanhMuc'])[0];
        echo '
        <div class="box-main-product ">
    <div class="img-main-product">
        <img src="user/images/'.$main2['image_link'].'" alt="#">
    </div>
    <div class="txt-main-product">
        <span class="catalog-main-product">'.$category['TenDanhMuc'].'</span> <br>
        <span class="name-main-product">'.$main2['TenSP'].'</span> <br>
        <span class="price-main-product">'.$main2['Gia'].'</span> <br>
        <span class="next-main-product"><a href="index.php?ctrl=home&action=more&id='.$main2['idSP'].'"><i class="fas fa-chevron-right"></i></a></span>
    </div>
</div>
        ';
    }
    ?>

</div>
<div class="extra-product">
<div class="boxlarger-product">
    <?php
    foreach ($extraProduct2 as $extra2) {
        $category = selectDb("SELECT * FROM danhmuc WHERE idDanhMuc=".$main1['idDanhMuc'])[0];
        echo '
        <div class="box-product">
        <div class="img-product">
            <img src="user/images/'.$extra2['image_link'].'" alt="#">
        </div>
        <div class="txt-product">
            <span class="catalog-product">'.$category['TenDanhMuc'].'</span> <br>
            <span class="name-product">'.$extra2['TenSP'].'</span> <br>
            <span class="price-product">VNĐ '.$extra2['Gia'].'</span> <br>
            <span class="next-product"><a href="index.php?ctrl=home&action=more&id='.$extra2['idSP'].'"><i class="fas fa-chevron-right"></i></a></span>
        </div>
    </div>
        ';
    }
    ?>
</div>
</div>
</div>
</div>

<!--Product 3-->
<div class="boxcenter">
<div class="productbox3 clearfix">
<div class="boxlarger-product">
    <?php
    foreach ($extraProduct3 as $extra3) {
        $category = selectDb("SELECT * FROM danhmuc WHERE idDanhMuc=".$main1['idDanhMuc'])[0];
        echo '
        <div class="box-product3">
        <div class="img-product">
            <img src="user/images/'.$extra3['image_link'].'" alt="#">
        </div>
        <div class="txt-product">
            <span class="catalog-product">'.$category['TenDanhMuc'].'</span> <br>
            <span class="name-product">'.$extra3['TenSP'].'</span> <br>
            <span class="price-product">VNĐ '.$extra3['Gia'].'</span> <br>
            <span class="next-product"><a href="index.php?ctrl=home&action=more&id='.$extra3['idSP'].'"><i class="fas fa-chevron-right"></i></a></span>
        </div>
    </div>
        ';
    }
    ?>

</div>
</div>
</div>
</div>

<!--End show product-->
