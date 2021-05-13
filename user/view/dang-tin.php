<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.dang-tin{
    max-width: 500px;
    margin: 0 auto;
}
.dang-tin h1{
    margin: 20px 0;
    text-align: center;
}
.input-text{
    padding: 5px 10px;
    border-radius: 5px;
    border: 1px solid #ddd;
    display: block;
    width: 100%;
}

.productbox3{
    border: 1px solid lightgray;
    width:50%;
    border-radius:5px;
    margin: 3% auto;
}
.alert-danger{
    text-align: center;
}
.btn-success{
    margin-bottom:5%;
}
</style>
</header>
<?php
if(isset($_SESSION['user']) || isset($_SESSION['admin'])) {
    echo '
    <div class="boxcenter">
    <div class="productbox3 clearfix">
        <div class="dang-tin">
            <h1>Đăng tin rao</h3>
            <form action="index.php?ctrl=home&action=inserttin" onsubmit="return validateDangTin()" method="POST" enctype="multipart/form-data">
                <label for="">Tên sản phẩm*: </label>
                <input type="text" name="product-name" id="tenSanPham" class="input-text">
                <br>
                <label for="">Nội dung mô tả*: </label>
                <input type="text" name="product_content" id="noiDung" class="input-text">
                <br>
                <label for="">Hình ảnh sản phẩm</label>
                <input type="file" name="image" id="image" class="input-text">
                <br>
                <label for="">Danh mục sản phẩm:</label>
                <select name="product_cata" id="danhMuc"  class="input-text">';
                        foreach( $allCata as $cata){
                            echo '<option value="'. $cata['idDanhMuc'].'">'. $cata['TenDanhMuc'].'</option>';
                        }
                echo '</select>
                <br>
                <label for="">Số lượng*: </label>
                <input type="number" name="quantity" id="soLuong" class="input-text">
                <br>
                <label for="">Giá*: </label>
                <input type="number" name="price" id="Gia" class="input-text">
                <br>
                <button type="submit" name="dangtin" class="btn btn-success">Đăng tin</button>
            </form>
            <script src="user/js/validate.js"></script>
        </div>
    </div>
</div>
    ';
}else{
    echo '<p class="alert alert-danger">Vui lòng đăng nhập để có thể đăng tin sản phẩm</p>';
}
?>