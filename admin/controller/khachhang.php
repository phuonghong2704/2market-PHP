<?php
  include 'model/khachhang.php';
  $action='index';
  if(isset($_GET['action']))
  {
      $action = $_GET['action'];
  }
  switch ($action) {
      case 'index':
          $khachhang=getAllKhachHang();
        include 'view/khachhang/index.php';
        break;
          case 'addnew':
          include 'view/khachhang/addnew.php';
          break;
          case 'insert':
            $Email=$_POST['Email'];
            $Username=$_POST['Username'];
            $Name=$_POST['Name'];
            $Password=$_POST['Password'];
            $SDT=$_POST['SDT'];
            $level=$_POST['level'];
            $img = $_FILES['image']['name'];
            $path='../user/images/'.$img;
            if(move_uploaded_file($_FILES['image']['tmp_name'] ,$path)){
              addNewKhachHang($Email,$Username,$Name,$Password,$SDT,$img,$level);
             }
             header('location:index.php?ctrl=khachhang');
      break;
            case 'edit':
              $id = $_GET['id'];
              $khachhang= getKhachHangById($id);
              include 'view/khachhang/edit.php';
      break;
            case 'update':
            $id=$_POST['MaKhachHang'];
            $Email=$_POST['Email'];
            $Username=$_POST['Username'];
            $Name=$_POST['Name'];
            $Password=$_POST['Password'];
            $SDT=$_POST['SDT'];
            $level=$_POST['level'];
            $img='';
            if(!empty($_FILES))
            {
            $img = $_FILES['image']['name'];
            $path='../user/images/'.$img;
            move_uploaded_file($_FILES['image']['tmp_name'] ,$path);
            }
            updateKhachHang($id,$Email,$Username,$Name,$Password,$SDT,$img,$level);
            header('location:index.php?ctrl=khachhang');
      break;
          case 'delete':
            $id=$_GET['id'];
            deleteKhachHang($id);
            header('location:index.php?ctrl=khachhang');
      break;
      default:
          # code...
          break;
  }
?>