<?php
   include_once 'database.php';
   function getAllHoaDonChiTiet()
        {
        $sql = "SELECT * FROM hoadonchitiet order by idHDCT";
        return query($sql);
        }
   function addNewHoaDonChiTiet($idDH,$idSP,$gia,$soluong)
         {
         $sql ="INSERT INTO hoadonchitiet(idDH,idSP,Gia,SoLuong) values('$idDH','$idSP','$gia','$soluong')";
         return query($sql);
         }
         function getHoaDonChiTietById($id)
         {
          $sql = "SELECT * FROM hoadonchitiet where idHDCT='$id'";
          return queryOne($sql);
          }
          function updateHoaDonChiTiet($id,$idDH,$idSP,$gia,$soluong)
          {
               $sql = "UPDATE hoadonchitiet set idDH='$idDH', idSP='$idSP',Gia='$gia', SoLuong='$soluong' where idHDCT='$id'";		
               return execute($sql);
           }
           function deleteHoaDonChiTiet($id)
          {
          $sql="delete from hoadonchitiet where idHDCT='$id'";
          return execute($sql);
          }   
        ?>