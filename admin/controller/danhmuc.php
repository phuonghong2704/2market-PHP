<?php
  include 'model/danhmuc.php';
  $action='index';
  if(isset($_GET['action']))
  {
      $action = $_GET['action'];
  }
  switch ($action) {
      case 'index':
          $danhmuc=getAllDanhMuc();
        include 'view/danhmuc/index.php';
        break;
          case 'addnew':
          include 'view/danhmuc/addnew.php';
          break;
          case 'insert':
            $TenDanhMuc=$_POST['TenDanhMuc'];
            $ThuTu = $_POST['ThuTu'];
            $AnHien=$_POST['AnHien'];
            $img = $_FILES['image']['name'];
            $path='../user/images/'.$img;
            if(move_uploaded_file($_FILES['image']['tmp_name'] ,$path))
            {
            addNewDanhMuc($TenDanhMuc,$ThuTu,$AnHien,$img);
            }
            header('location:index.php?ctrl=danhmuc');
      break;
            case 'edit':
              $id = $_GET['id'];
              $danhmuc= getDanhMucById($id);
              include 'view/danhmuc/edit.php';
      break;
            case 'update':
            $id=$_POST['MaDanhMuc'];
            $TenDanhMuc=$_POST['TenDanhMuc'];
            $ThuTu = $_POST['ThuTu'];
            $AnHien=$_POST['AnHien'];
            $img='';
            if(!empty($_FILES))
            {
            $img = $_FILES['image']['name'];
            $path='../user/images/'.$img;
            move_uploaded_file($_FILES['image']['tmp_name'] ,$path);
            }
            updateDanhMuc($id,$TenDanhMuc,$img,$ThuTu,$AnHien);
            header('location:index.php?ctrl=danhmuc');
      break;
          case 'delete':
            $danhmuc=getAllDanhMuc();
            $id=$_GET['id'];
            deleteDanhMuc($id);
            header('location:index.php?ctrl=danhmuc');
      break;
      default:
          # code...
          break;
  }
?>