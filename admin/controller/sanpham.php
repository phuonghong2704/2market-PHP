<?php
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'global.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
$action='index';
if(isset($_GET['action']))
{
    $action = $_GET['action'];
}
switch ($action) {
    case 'index':
        if(isset($_GET['trang'])){
			$trang = $_GET['trang'];
		}else{
			$trang = 1;
		}
		global $sotin1trang;
		$from = ($trang-1) * $sotin1trang;
		$x = getAllSanPham();
		$tongsotin = count($x);
		$sotrang = ceil($tongsotin/$sotin1trang);
		$sanpham =  get8SanPham($from, $sotin1trang);
        include 'view/sanpham/index.php';
        break;
    case 'delete':
        case 'delete':	
        if(isset($_GET['id'])){
        $id = $_GET['id'];
        deleteSanPham($id);
        }else{
        $checkbox = $_POST['chonX'];
        for ($i=0; $i < count($checkbox) ; $i++) { 
        $id= $checkbox[$i];
        deleteSanPham($id);	
        }
        }
        header('location:index.php?ctrl=sanpham');
        break;
    case 'addnew':
        $danhmuc = getAllDanhMuc();
        include 'view/sanpham/addnew.php';
        break;
    case 'edit':
        $id=$_GET['id'];
        $danhmuc = getAllDanhMuc();
        $sanpham = getSanPhamByID($id);
        include 'view/sanpham/edit.php';
        break;
    case 'insert':
        $MaSP=$_POST['MaSP'];
        $TenSP=$_POST['TenSP'];
        $MoTa = $_POST['MoTa'];
        $Gia=$_POST['Gia'];
        $SoLuong=$_POST['soluong'];
        $ThoiDiemDang= date('Y/m/d');
        $LoaiDM=$_POST['LoaiDanhMuc'];
        $img = $_FILES['image']['name'];
		$path='../user/images/'.$img;
		if(move_uploaded_file($_FILES['image']['tmp_name'] ,$path)){
        addNewSanPham($TenSP,$Gia,$SoLuong,$ThoiDiemDang,$LoaiDM,$img,$MoTa);
        }
        header('location:index.php?ctrl=sanpham');
		break;
        case 'update':
        $id = $_POST['MaSP'];
        $TenSP=$_POST['TenSP'];
        $Gia=$_POST['Gia'];
        $SoLuong=$_POST['soluong'];
        $MoTa = $_POST['MoTa'];
        $ThoiDiemCapNhat= date('Y/m/d');
        $LoaiDM=$_POST['LoaiDanhMuc'];
        $img='';
        if(!empty($_FILES))
        {
        $img = $_FILES['image']['name'];
        $path='../user/images/'.$img;
        move_uploaded_file($_FILES['image']['tmp_name'] ,$path);
        }
        updateSanPham($id,$TenSP,$Gia,$SoLuong,$ThoiDiemCapNhat,$LoaiDM,$img,$MoTa);
        header('location:index.php?ctrl=sanpham');
        break;
    default:
}
?>