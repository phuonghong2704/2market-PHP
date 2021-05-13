<?php
   include_once 'database.php';
   function getAllBinhLuan()
        {
        $sql = "SELECT * FROM Comment order by idComment";
        return query($sql);
        }
   function addNewBinhLuan($MaSP,$NgayGui,$NoiDung,$HoTen,$AnHien)
         {
         $sql ="INSERT INTO Comment(idSP,ThoiDiemGui,NoiDung,HoTen,AnHien) values('$MaSP','$NgayGui','$NoiDung','$HoTen','$AnHien')";
         return query($sql);
         }
         function getBinhLuanById($id)
         {
          $sql = "SELECT * FROM Comment where idComment='$id'";
          return queryOne($sql);
          }
          function updateBinhLuan($id,$MaSP,$NgayGui,$NoiDung,$HoTen,$AnHien)
          {
               $sql = "UPDATE Comment set idSP='$MaSP', ThoiDiemGui='$NgayGui', NoiDung='$NoiDung', HoTen='$HoTen', AnHien='$AnHien' where idComment='$id'";		
               return execute($sql);
           }
           function deleteBinhLuan($id)
        {
        $sql="delete from comment where idComment='$id'";
        return execute($sql);
        }   
        ?>