<?php 
include "database.php";
function getAllCatalog(){
    $sql = "SELECT * FROM danhmuc ORDER BY idDanhMuc";
    $result = query($sql);
    return $result;
}
function getPopularProduct($x, $a){
    $sql ="SELECT * FROM sanpham ORDER BY SoLuotXem DESC LIMIT $x, $a";
    $result = query($sql);
    return $result;
}
function extraProduct1(){
    $sql = "SELECT * FROM sanpham ORDER BY idSP LIMIT 0,4";
    $result = query($sql);
    return $result;
}
function extraProduct2(){
    $sql = "SELECT * FROM sanpham ORDER BY idSP LIMIT 4,4";
    $result = query($sql);
    return $result;
}
function extraProduct3(){
    $sql = "SELECT * FROM sanpham ORDER BY idSP LIMIT 8,4";
    $result = query($sql);
    return $result;
}
function getProductById($id){
    $sql = "SELECT * FROM sanpham WHERE '$id'=idSP";
    return query($sql);
}
function mainProduct1(){
    $sql = "SELECT * FROM sanpham WHERE idSP=31";
    return query($sql);
}
function mainProduct2(){
    $sql = "SELECT * FROM sanpham WHERE idSP=30";
    return query($sql);
}
function getAllProductByIdDanhMuc($id){
	$sql ="SELECT idSP FROM sanpham WHERE idDanhMuc = $id ORDER BY idSP";
	$x = query($sql);
	$a = $x ->fetchAll();
	return $a;
}
function get8ProductByIdDanhMuc($from, $sotin1trang, $id){
	$sql = "SELECT * FROM sanpham WHERE idDanhMuc =$id LIMIT $from, $sotin1trang";
	return query($sql);
}
function getAllProduct(){
	$sql ="SELECT idSP FROM sanpham ORDER BY idSP";
	$x = query($sql);
	$a = $x ->fetchAll();
	return $a;
}
function get8Product($from, $sotin1trang){
	$sql = "SELECT * FROM sanpham LIMIT $from, $sotin1trang";
	return query($sql);
}
function getproduct(){
	$sql ="SELECT * FROM sanpham";
	return query($sql);
} 
function addCmt($idSP, $hoTen, $noidung, $ThoiDiemDang){
    $sql="INSERT INTO comment(idSP, ThoiDiemGui, NoiDung, HoTen, AnHien) values('$idSP', '$ThoiDiemDang', '$noidung','$hoTen', 1)";
    return execute($sql);
}
function getCmtById($id){
    $sql="SELECT * FROM comment WHERE idSP = $id";
    return query($sql);
}
function addProduct($ten, $noidung, $img, $idDanhMuc, $soluong, $gia, $ThoiDiemDang){
    $sql ="INSERT INTO sanpham(idDanhMuc, TenSP, ThoiDiemDang, SoLuong, Gia, image_link, NoiDung) values('$idDanhMuc', '$ten', '$ThoiDiemDang',$soluong,$gia, '$img','$noidung' )" ;
    return execute($sql);
}
function getProductByIdInLove($id){
    $sql = "SELECT * FROM sanpham WHERE $id=idSP";
    return queryObj($sql);
}
function getProductByIdInCart($id)
{
    $sql="SELECT * FROM sanpham WHERE idSP='$id'";
    return queryOne($sql);
}
?>