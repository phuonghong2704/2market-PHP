<?php
include_once 'user/model/cart.php';
$action='index';
if(!isset($_SESSION['carts'])){
    $_SESSION['carts']=array();
}
if(isset($_GET['action'])){
    $action=$_GET['action'];
}
switch($action){
    case 'index':
        include ('user/view/cart.php');
    break;
    case 'addtocart':
        //lay product theo id cate
       $id=$_GET['id'];
       addToCart($id);
       header("location:index.php?ctrl=cart");
    break;
    case 'delete':
        $id=$_GET['id'];
        unset($_SESSION['carts'][$id]);
        header("location:index.php?ctrl=cart");
    break;
    case 'add':
        $key = $_GET['key'];
        $_SESSION['carts'][$key]['quantity'] = $_SESSION['carts'][$key]['quantity'] +1;
        header("location:index.php?ctrl=cart");
    break;
    case 'discount':
        $key = $_GET['key'];
        $_SESSION['carts'][$key]['quantity'] = $_SESSION['carts'][$key]['quantity'] -1;
        header("location:index.php?ctrl=cart");
    break;
}
?>

