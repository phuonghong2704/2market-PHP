<?php
   include_once 'database.php';
   function getAllDonHang()
        {
        $sql = "SELECT * FROM don order by idDH";
        return query($sql);
        }
   function addNewDonHang($hoten,$diachi,$email,$sdt,$thoidiemtaodon)
         {
         $sql ="INSERT INTO don(name,diachi,email,sodienthoai,thoidiemtaodon) values('$hoten','$diachi','$email','$sdt','$thoidiemtaodon')";
         return query($sql);
         }
         function getDonHangById($id)
         {
          $sql = "SELECT * FROM don where idDH='$id'";
          return queryOne($sql);
          }
          function updateDonHang($id,$hoten,$diachi,$email,$sdt,$thoidiemtaodon)
          {
               $sql = "UPDATE don set name='$hoten', diachi='$diachi',email='$email', sodienthoai='$sdt', thoidiemtaodon='$thoidiemtaodon' where idDH='$id'";		
               return execute($sql);
           }
           function deleteDonHang($id)
          {
          $sql="delete from don where idDH='$id'";
          return execute($sql);
          }   
        ?>