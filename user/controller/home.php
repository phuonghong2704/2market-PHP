<?php 
include "user/model/home.php";
include "global.php";
date_default_timezone_set('Asia/Ho_Chi_Minh');
$action='index';
if(isset($_GET['action']))
{
    $action = $_GET['action'];
}
switch ($action) {
    case 'index':
        $a = 3;
        $x = 0;
        $allCata = getAllCatalog();
        if(isset($_GET['see'])){
            $a = 9;
            $popularProduct = getPopularProduct($x, $a);
        }else if(isset($_GET['hide'])){
            $a = 3;
            $popularProduct = getPopularProduct($x, $a);
        }
        else{
            $a = 3;
            $allCata = getAllCatalog();
            $popularProduct = getPopularProduct($x, $a);
        }
        $mainProduct1 = mainProduct1();
        $extraProduct1 = extraProduct1();
        $mainProduct2 = mainProduct2();
        $extraProduct2 = extraProduct2();
        $extraProduct3 = extraProduct3();
        include "user/view/home.php";
        break;
    case 'more':
        $id = $_GET['id'];
        $getProductById = getProductById($id);
        $extraProduct1 = extraProduct1();
        $comment = getCmtById($id);
        include "user/view/chitietSP.php";
    break;
    case 'homepage-user':
        $allCata = getAllCatalog();
        $mainProduct1 = mainProduct1();
        $extraProduct1 = extraProduct1();
        $mainProduct2 = mainProduct2();
        $extraProduct2 = extraProduct2();
        $extraProduct3 = extraProduct3();
        include "user/view/homepage-user.php";
    break;
    case 'sanpham-danhmuc':
            if(isset($_GET['trang'])){
                $trang = $_GET['trang'];
            }else{
                $trang = 1;
            }
            $id = $_GET['id'];
            global $sotin1trang;
            $from = ($trang-1) * $sotin1trang;
            $x = getAllProductByIdDanhMuc($id);
            $tongsotin = count($x);
            $sotrang = ceil($tongsotin/$sotin1trang);
            $products = get8ProductByIdDanhMuc($from, $sotin1trang, $id);
        include "user/view/sanpham-danhmuc.php";
    break;
    case 'showall':
        if(isset($_GET['trang'])){
            $trang = $_GET['trang'];
        }else{
            $trang = 1;
        }
        global $sotin1trang;
        $from = ($trang-1) * $sotin1trang;
        $x = getAllProduct();
        $tongsotin = count($x);
        $sotrang = ceil($tongsotin/$sotin1trang);
        $products = get8Product($from, $sotin1trang);
        include "user/view/showall.php";
    break;
    case 'addCmt':
        $idSP = $_GET['idSP'];
        $noidung=$_POST['noidung'];
        $ThoiDiemDang= date('Y/m/d');
        $hoTen = $_SESSION['user'];
        if(isset($_SESSION['admin'])){
            $hoTen = $_SESSION['admin'];
        }
        addCmt($idSP, $hoTen, $noidung, $ThoiDiemDang);
        echo'
        <script>
        alert("Bình luận đã được đăng");
        </script>
        ';
        header("location:index.php?ctrl=home&action=more&id=$idSP");
    break;
    case 'dangtin':
        $allCata = getAllCatalog();
        include 'user/view/dang-tin.php';
    break;
    case 'inserttin':
        $ten = $_POST['product-name'];
        $noidung = $_POST['product_content'];
        $img = $_FILES['image']['name'];
        $idDanhMuc = $_POST['product_cata'];
        $soluong = $_POST['quantity'];
        $gia = $_POST['price'];
        $ThoiDiemDang = date('Y/m/d');
		$path='user/images/'.$img;
		if(move_uploaded_file($_FILES['image']['tmp_name'] ,$path)){
            addProduct($ten, $noidung, $img, $idDanhMuc, $soluong, $gia, $ThoiDiemDang);
        }
        header("location:index.php");
        echo'
        <script>
        alert("Sản phẩm đã được đăng");
        </script>
        ';
    default:
        # code...
        break;  
}
?>