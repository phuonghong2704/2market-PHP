<?php
     include_once('database.php');
     function getTotaBydDanhMuc()
     {
         $sql="SELECT danhmuc.TenDanhMuc AS TenDoiTuong, COUNT(sanpham.idSP) AS soluong
         FROM danhmuc,sanpham
         WHERE danhmuc.idDanhMuc=sanpham.idDanhMuc
         GROUP BY danhmuc.TenDanhMuc";
         return query($sql);
     }
?>