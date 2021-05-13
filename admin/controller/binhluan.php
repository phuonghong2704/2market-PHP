<?php
  include 'model/binhluan.php';
  include 'model/sanpham.php';
  include 'model/khachhang.php';
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $action='index';
  if(isset($_GET['action']))
  {
      $action = $_GET['action'];
  }
  switch ($action) {
      case 'index':
          $binhluan=getAllBinhLuan();
        include 'view/binhluan/index.php';
        break;
        case 'addnew':
          $khachhang=getAllKhachHang();
          $sanpham = getAllSanPham();
          include 'view/binhluan/addnew.php';
        break;
        case 'insert':
            $MaSP= $_POST['MaSP'];
            $NgayGui= date('Y/m/d');;
            $NoiDung=$_POST['NoiDung'];
            $HoTen=$_POST['HoTen'];
            $AnHien=$_POST['AnHien'];
            addNewBinhLuan($MaSP,$NgayGui,$NoiDung,$HoTen,$AnHien);
            header('location:index.php?ctrl=binhluan');
      break;
      case 'edit':
        $id = $_GET['id'];
        $khachhang=getAllKhachHang();
        $sanpham = getAllSanPham();
        $binhluan= getBinhLuanById($id);
        include 'view/binhluan/edit.php';
      break;
      case 'update':
      $id=$_POST['MaBL'];
      $MaSP= $_POST['MaSP'];
      $NgayGui= date('Y/m/d');
      $NoiDung=$_POST['NoiDung'];
      $HoTen=$_POST['HoTen'];
      $AnHien=$_POST['AnHien'];
      updateBinhLuan($id,$MaSP,$NgayGui,$NoiDung,$HoTen,$AnHien);
      header('location:index.php?ctrl=binhluan');
      break;
      case 'delete':
        $binhluan=getAllBinhLuan();
        $id=$_GET['id'];
        deleteBinhLuan($id);
        header('location:index.php?ctrl=binhluan');
  break;
      }     
?>