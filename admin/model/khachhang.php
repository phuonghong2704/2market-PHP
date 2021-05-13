<?php
session_start();
   include_once 'database.php';
   function getAllKhachHang()
        {
        $sql = "SELECT * FROM admin order by id";
        return query($sql);
        }
        function getKhachHangById($id){
            $sql = "SELECT * FROM admin where id='$id'";
            return queryOne($sql);
        }
    function addNewKhachHang($Email,$Username,$Name,$Password,$SDT,$img,$level){
        $sql ="INSERT INTO admin(username,name,email,password,SDT,Hinh,level) values('$Username','$Name','$Email','$Password','$SDT','$img','$level')";
        return query($sql);
    }
    function updateKhachHang($id,$Email,$Username,$Name,$Password,$SDT,$img,$level)
    {
        if($img=='')
        {
            $sql = "UPDATE admin set email='$Email' , username='$Username' , name='$Name', Password='$Password' , SDT='$SDT' ,level='$level' where id='$id'";
        }
        else
        {
            $sql = "UPDATE admin set email='$Email' , username='$Username' , name='$Name', Password='$Password' , SDT='$SDT' ,level='$level',Hinh='$img' where id='$id'";
        }
        execute($sql);
    }
    function deleteKhachHang($id)
        {
        $sql="delete from admin where id='$id'";
        return execute($sql);
        }   
        ?>