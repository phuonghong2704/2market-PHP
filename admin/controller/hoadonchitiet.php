<?php
  include 'model/hoadonchitiet.php';
  include 'model/sanpham.php';
  include 'model/donhang.php';
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $action='index';
  if(isset($_GET['action']))
  {
      $action = $_GET['action'];
  }
  switch ($action) {
      case 'index':
          $hdct=getAllHoaDonChiTiet();
        include 'view/hoadonchitiet/index.php';
        break;
        case 'addnew':
          $donhang=getAllDonHang();
          $sanpham = getAllSanPham();
          include 'view/hoadonchitiet/addnew.php';
        break;
        case 'insert':
            $idDH= $_POST['idDH'];
            $idSP=$_POST['idSP'];
            $gia=$_POST['gia'];
            $soluong=$_POST['soluong'];
            addNewHoaDonChiTiet($idDH,$idSP,$gia,$soluong);
            header('location:index.php?ctrl=hoadonchitiet');
      break;
      case 'edit':
        $id = $_GET['id'];
        $donhang=getAllDonHang();
        $sanpham = getAllSanPham();
        $hdct = getHoaDonChiTietById($id);
        include 'view/hoadonchitiet/edit.php';
      break;
      case 'update':
      $id=$_POST['idHDCT'];
      $idDH= $_POST['idDH'];
      $idSP=$_POST['idSP'];
      $gia=$_POST['gia'];
      $soluong=$_POST['soluong'];
      updateHoaDonChiTiet($id,$idDH,$idSP,$gia,$soluong);
      header('location:index.php?ctrl=hoadonchitiet');
      break;
      case 'delete':
        $hdct=getAllHoaDonChiTiet();
        $id=$_GET['id'];
        deleteHoaDonChiTiet($id);
        header('location:index.php?ctrl=hoadonchitiet');
  break;
      }     
?>