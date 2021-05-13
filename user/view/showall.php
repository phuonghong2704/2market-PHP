</header>
<div class="boxcenter">
    <div class="productbox3 clearfix">
        <div class="boxlarger-product">
        <?php 
                foreach ($products as $p) {
                    $category = selectDb("SELECT * FROM danhmuc WHERE idDanhMuc=".$p['idDanhMuc'])[0];
                    echo '
                    <div class="box-product3">
                    <div class="img-product">
                        <img src="user/images/'.$p['image_link'].'" alt="#">
                    </div>
                    <div class="txt-product">
                        <span class="catalog-product">'.$category['TenDanhMuc'].'</span> <br>
                        <span class="name-product">'.$p['TenSP'].'</span> <br>
                        <span class="price-product">VNĐ '.$p['Gia'].'</span> <br>
                        <span class="next-product"><a href="index.php?ctrl=home&action=more&id='.$p['idSP'].'"><i class="fas fa-chevron-right"></i></a></span>
                    </div>
                </div>
                    ';
                }
                ?>
        </div>
    </div>
    <div class="phantrang clearfix">
    <?php 
   for($i=1; $i<=$sotrang; $i++){
   	echo '<li class="page-item "><a href="index.php?ctrl=home&action=showall&trang='.$i.'">'.$i.'</a></li>';
   }
    ?>
    </div>