<?php
include_once 'user/model/dathang.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
$action='index';
if(isset($_GET['action'])){
    $action=$_GET['action'];
}
switch($action){
    case 'index':
        include ('user/view/dathang.php');
    break;
    case 'checkout':
        //luu thong tin don hang
        $name_ten=$_POST['ten'];
        $name_ho=$_POST['ho'];
        $name=$_POST['hovaten'];
        $TP=$_POST['tp'];
        $Quan=$_POST['quanhuyen'];
        $Phuong=$_POST['phuongxa'];
        $diachi=$_POST['dcct'];
        $email=$_POST['email'];
        $sodienthoai=$_POST['sdt'];
        $thoidiemtaodon=date('Y/m/d');
        $mahd=addToOrder($name_ten,$name_ho,$name,$TP, $Quan, $Phuong, $diachi,$email,$sodienthoai,$thoidiemtaodon);
        //luu chi tiet don hang
        addToOrderDetail($mahd);
        unset($_SESSION['carts']);//xoa gio hang
       echo '<script type="text/javascript">
             window.location="index.php";
    </script>';
    break;

}

?>
