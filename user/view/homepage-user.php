</header>
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