<?php
   include_once 'database.php';
   function getAllDanhMuc()
        {
        $sql = "SELECT * FROM danhmuc order by idDanhMuc";
        return query($sql);
        }
    function addNewDanhMuc($TenDanhMuc,$ThuTu,$AnHien,$img){
        $sql ="INSERT INTO danhmuc(TenDanhMuc,ThuTu,AnHien,Hinh) values('$TenDanhMuc','$ThuTu','$AnHien','$img')";
        return query($sql);
    }
    function updateDanhMuc($id,$TenDanhMuc,$img,$ThuTu,$AnHien){
        if($img=='')
        {
            $sql = "UPDATE danhmuc set TenDanhMuc='$TenDanhMuc',ThuTu='$ThuTu', AnHien='$AnHien' where idDanhMuc='$id'";		
        }
        else
        {
            $sql = "UPDATE danhmuc set TenDanhMuc='$TenDanhMuc',ThuTu='$ThuTu', AnHien='$AnHien',Hinh='$img' where idDanhMuc='$id'";		
        }
        return execute($sql);
    }
    function getDanhMucById($id){
        $sql = "SELECT * FROM danhmuc where idDanhMuc='$id'";
        return queryOne($sql);
    }
    function deleteDanhMuc($id)
        {
        $sql="delete from danhmuc where idDanhMuc='$id'";
        return execute($sql);
        }   
        ?>