<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
</header>
<div class="boxcenter">
    <div class="productbox3 clearfix">
        <div class="boxlarger-product">
<?php 
$products = !empty($_SESSION['love']) ? $_SESSION['love'] : [];
if(isset($_SESSION['user']) || isset($_SESSION['admin'])){
    if(isset($_SESSION['love']) && $_SESSION['love']!=null){
        foreach ($products as $item) {
            $category = selectDb("SELECT * FROM danhmuc WHERE idDanhMuc=".$item['idDanhMuc'])[0];
            echo '
            <div class="box-product3 mr3">
            <div class="img-product">
                <img src="user/images/'.$item['image'].'" alt="#">
            </div>
            <div class="txt-product">
                <span class="catalog-product">'.$category['TenDanhMuc'].'</span> <br>
                <span class="name-product">'.$item['name'].'</span> <br>
                <span class="price-product">VNĐ '.$item['price'].'</span> <br>
                <span class="next-product"><a href="index.php?ctrl=home&action=more&id='.$item['id'].'"><i class="fas fa-chevron-right"></i></a></span>
                <span class="love-product"><a href="index.php?ctrl=love&action=unset&id='.$item['id'].'"><i class="fas fa-heart"></i></a></span>
            </div>
            </div>
            ';
        }
    }else{
        echo '<div class="alert alert-info" style="text-align:center;">Chưa có sản phẩm yêu thích!</div>';
    } 
}else{
    echo '<p class="alert alert-danger">Vui lòng đăng nhập để có thể thêm sản phẩm bạn yêu thích!</p>';
} 
 ?>

        </div>
    </div>
</div>