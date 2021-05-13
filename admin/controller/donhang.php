<?php
  include 'model/donhang.php';
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $action='index';
  if(isset($_GET['action']))
  {
      $action = $_GET['action'];
  }
  switch ($action) {
      case 'index':
          $donhang=getAllDonHang();
        include 'view/donhang/index.php';
        break;
        case 'addnew':
          include 'view/donhang/addnew.php';
        break;
        case 'insert':
            $hoten= $_POST['hoten'];
            $diachi=$_POST['diachi'];
            $email=$_POST['email'];
            $sdt=$_POST['sdt'];
            $thoidiemtaodon= date('Y/m/d');
            addNewDonHang($hoten,$diachi,$email,$sdt,$thoidiemtaodon);
            header('location:index.php?ctrl=donhang');
      break;
      case 'edit':
        $id = $_GET['id'];
        $donhang = getDonHangById($id);
        include 'view/donhang/edit.php';
      break;
      case 'update':
      $id=$_POST['idDH'];
      $hoten= $_POST['hoten'];
      $diachi=$_POST['diachi'];
      $email=$_POST['email'];
      $sdt=$_POST['sdt'];
      $thoidiemtaodon= date('Y/m/d');
      updateDonHang($id,$hoten,$diachi,$email,$sdt,$thoidiemtaodon);
      header('location:index.php?ctrl=donhang');
      break;
      case 'delete':
        $donhang=getAllDonHang();
        $id=$_GET['id'];
        deleteDonHang($id);
        header('location:index.php?ctrl=donhang');
  break;
      }     
?>