<?php
include "user/model/home.php";
$id = !empty($_GET['id']) ? (Int)$_GET['id'] : 0;
$action = !empty($_GET['action']) ? $_GET['action'] : 'index';
$product = getProductByIdInLove($id);
switch ($action) {
    case 'index':
        include "user/view/sanphamyeuthich.php";
        break;
    case 'addtolove':
        $item = [
            'id' => $product -> idSP,
            'idDanhMuc' => $product -> idDanhMuc,
            'name' => $product -> TenSP,
            'image' => $product -> image_link,
            'price' => $product -> Gia,
        ];
        $_SESSION['love'][$id] = $item;		
        include_once "user/view/sanphamyeuthich.php";
    break;
    case 'unset':
    $id = $_GET['id'];
    unset($_SESSION['love'][$id]);
    include ("user/view/sanphamyeuthich.php");
    break;
    default:
        # code...
        break;
}
?>