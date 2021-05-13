

<?php  session_start();
       if (isset($_SESSION['admin'])==false) {
          header("location:signin.php");
          exit();
       }
       $u = $_SESSION['admin'];
?>
<?php //tiếp nhận dữ liệu từ form
    $pass_old = md5($_POST['pass_old']);
    $pass_new1 = md5($_POST['pass_new1']);
    $pass_new2 = md5($_POST['pass_new2']);
?>
<?php
    $pass_old = trim(strip_tags($pass_old));
    $pass_new1 = trim(strip_tags($pass_new1));
    $pass_new2 = trim(strip_tags($pass_new2));
    $thongbao="";    
    if (strlen($pass_new1)<6) { //kiểm tra độ dài pass
        $thongbao .="Mật khẩu mới quá ngắn<br>";
    }
    if ($pass_new1!=$pass_new2) {//kiểm tra 2 pass phải giống nhau
        $thongbao .="Hai mật khẩu mới không giống nhau<br>";
    }
    require_once '../model/connect.php';
    $sql="select count(*) from admin where username='{$u}' AND password='{$pass_old}'";
    $kq = $conn->query($sql); //kiểm tra pass old có đúng không
    $row = $kq->fetch();
    if ($row[0]!=1) { //pass old không chính xác
        $thongbao .="Mật khẩu cũ không đúng<br>";
    }
 ?>
<?php if ($thongbao=="" ){
    require_once '../model/connect.php';
    try {
    $sql = "UPDATE admin SET password = '{$pass_new1}' WHERE username='{$u}'";
    $kq = $conn->exec($sql);
    if ($kq==1) $thongbao= "Đã cập nhật thành công<br>";
    else $thongbao= "Chưa cập nhật được<br>";
    }
    catch (Exception $ex) { $thongbao ="Lỗi : " . $ex->getMessage() ;  }
} ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel= "stylesheet" >
<div class="col-8 m-auto">
    <div class="alert alert-danger mt-5 text-center "> 
        <?=$thongbao?> 
        <button class="btn btn-success" onclick="history.back()">Trở lại</button> 
        <a href="index.php" class="btn btn-info">Trang chủ</a>
    </div>
</div>
