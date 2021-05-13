</header>
    <div class="boxcenter">
    <?php 
    if(isset($_GET['id'])){
        $product = selectDb("SELECT * FROM sanpham WHERE idSP=".$_GET['id'])[0];
        $category = selectDb("SELECT * FROM danhmuc WHERE idDanhMuc=".$product['idDanhMuc'])[0];
    }
            foreach ($getProductById as $p) {
            echo '
    <div class="boxchitiet">
        <div class="imgchitiet">
            <img src="user/images/'.$p['image_link'].'" alt="">
        </div>
        <div class="txtchitiet">
            <span class="tensanpham">'.$p['TenSP'].'</span> <br>
            <span class="ngaydang">'.$p['ThoiDiemDang'].'</span> 
            <span class="diachi"> | Hồ Chí Minh</span> <br>
            <span class="danhmuc"><b>Danh mục:</b>'.$category['TenDanhMuc'].'</span> <br>
            <span class="soluong"><b>Số lượng:</b>'.$p['SoLuong'].'</span> <br>
            <span class="trangthai"><b>Trạng thái:</b> Còn hàng</span> <br>
            <span class="danhmuc"><b>Mô tả</b>:</b>'.$p['NoiDung'].'</span> <br>
            <span class="gia"><b>Giá:</b> '.$p['Gia'].' VNĐ</span> <br>
            <button class="yeuthich"><a href="index.php?ctrl=love&action=addtolove&id='.$p['idSP'].'"><i class="fas fa-heart"></i></a></button>
            <button class="themvaogiohang"><a href="index.php?ctrl=cart&action=addtocart&id='.$p['idSP'].'">Thêm vào giỏ hàng</a></button>
        </div>
    </div>
    ';
    }
    ?>
</div>
<div class="boxcenter comment">
    <h2>Bình luận</h2>
    <div class="leave-comment">
        <p>Để lại bình luận của bạn ở đây</p>
        <?php
            $idSP = $_GET['id'];
            if(isset($_SESSION['user']) || isset($_SESSION['admin'])) {
                echo '
                <div class="searchCmt">
                <form action="index.php?ctrl=home&action=addCmt&idSP='.$idSP.'" method="post" onsubmit="return validateComment()">
                <input type="text" name="noidung" id="noidung" placeholder="Bình luận của ban">
                <button type="submit" name="submit">Gửi</button>
                </form>
                <script src="user/js/validate.js"></script>
                </div>
                ';
            }else{
                echo '<span class="dangnhapbinhluan">Hãy <a href="user/view/signin.php">Đăng nhập</a> để bình luận</span>';
            }
        ?>

    </div>
    <?php
    foreach ($comment as $cmt) {
        echo '
        <div class="showcmt clearfix">
        <span class="cmtten">'.$cmt['HoTen'].' |</span>
        <span class="cmtngay">'.$cmt['ThoiDiemGui'].'</span>
        <br>
        <span class="cmtnoidung">'.$cmt['NoiDung'].'</span>
        </div>
        ';
    }
    ?>
</div>
<script>

function (data){
  $('#myModal').modal();
}

</script>
</html>



