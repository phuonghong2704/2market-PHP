<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet" >
<form action="" method="post" class="col-5 m-auto bg-secondary p-2 text-white">
    <div class="form-group">
      <h4 class="border-bottom pb-2">QUÊN MẬT KHẨU</h4>
      <label for="email">Nhập email</label>
      <input class="form-control" name="email" type="email">
    </div>
    <div class="form-group">
      <button type="submit" name="btn1" class="btn btn-primary">Gửi yêu cầu</button>
    </div>
</form>

<?php
$thongbao="";
if (isset($_POST['btn1'])){
    $email = trim( strip_tags( $_POST['email'] ) ); //tiếp nhận email
    if (filter_var($email, FILTER_VALIDATE_EMAIL )==false) { //kiểm tra định dạng
        $thongbao .= "Email không đúng <br>";
    }

    //kiểm tra email có phải là thành viên không
    require_once '../model/connect.php';
    $sql = "SELECT count(*) FROM admin WHERE email ='{$email}'";
    $kq = $conn->query($db);
    if ($kq==0) $thongbao .= "Email này không phải là thành viên <br>";
    
    //Tạo 1 chuỗi ngẫu nhiên để làm pass mới vá cập nhật vào bảng users
    //Gửi mail đến user
    
}
?>

<?php if ($thongbao!="") { ?> 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel= "stylesheet" >
 <div class="col-8 m-auto">
    <div class="alert alert-danger mt-5 text-center "> 
         <?=$thongbao?> 
         <button class="btn btn-primary" onclick="history.back()">Trở lại</button> 
         <a href="index.php" class="btn btn-info">Trang chủ</a>
     </div>
 </div>
<?php exit(); } ?>

