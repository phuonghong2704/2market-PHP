<?php
   include_once 'home.php';
   include_once 'database.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
function addToOrder($name_ten,$name_ho,$name,$TP, $Quan, $Phuong, $diachi,$email,$sodienthoai,$thoidiemtaodon)
{
  $query="insert into don(name_ten,name_ho,name,TP,Quan,phuong,diachi,email,sodienthoai,thoidiemtaodon)
  values('$name_ten','$name_ho','$name','$TP','$Quan','$Phuong','$diachi','$email','$sodienthoai','$thoidiemtaodon')";
  $lastId = executeReturnID($query);
  return $lastId;//tra ve ma don hang moi vua them
}
function addToOrderDetail($mahd)
{
  foreach ($_SESSION['carts'] as $item) 
  {
    $masp=$item['id'];
    $gia=$item['Gia'];
    $soluong=$item['quantity'];
    $query="insert into hoadonchitiet(idDH,idSP,Gia,SoLuong)
    values('$mahd','$masp','$gia','$soluong')";
    $STH = execute($query);
  }
}
?>
