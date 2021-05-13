<?php
   include_once 'database.php';
function getAllSanPham()
{
    $sql = "SELECT * FROM sanpham order by idSP";
    $x = query($sql);
	$a = $x ->fetchAll();
	return $a;
}
function getSanPhamByID($id)
{
    $sql="SELECT * from sanpham where idSP='$id'";
    return queryOne($sql);
}
function addNewSanPham($TenSP,$Gia,$SoLuong,$ThoiDiemDang,$LoaiDM,$img,$MoTa)
{
    $sql="INSERT INTO sanpham(TenSP,Gia,SoLuong,ThoiDiemDang,idDanhMuc,image_link, NoiDung) values('$TenSP',$Gia,$SoLuong,'$ThoiDiemDang',$LoaiDM,'$img', '$MoTa')";
    return query($sql);
}
function updateSanPham($id,$TenSP,$Gia,$SoLuong,$ThoiDiemCapNhat,$LoaiDM,$img,$MoTa)
{
    if($img=='')
        {
            $sql="update sanpham set TenSP='$TenSP',Gia=$Gia,SoLuong=$SoLuong,ThoiDiemCapNhat='$ThoiDiemCapNhat',idDanhMuc=$LoaiDM, NoiDung='$MoTa' where idSP=$id";
        }
        else
        {
            $sql="update sanpham set TenSP='$TenSP',Gia=$Gia,SoLuong=$SoLuong,ThoiDiemDang='$ThoiDiemDang',idDanhMuc=$LoaiDM,image_link='$img', NoiDung='$MoTa' where idSP=$id";
        }
        return execute($sql);
}
function deleteSanPham($id)
{
    $sql="delete from sanpham where idSP='$id'";
    return execute($sql);
}  
function get8SanPham($from, $sotin1trang){
	$sql = "SELECT * FROM sanpham LIMIT $from, $sotin1trang";
	return query($sql);
}
?>