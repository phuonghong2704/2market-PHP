<div class="card mt-3">
    <div class="card-header info"><h3>SỬA HÓA ĐƠN CHI TIẾT</h3></div>
    <div class="card-body">
        <form action="index.php?ctrl=hoadonchitiet&action=update" method="post" enctype="multipart/form-data" onsubmit="return validateEditHoaDonChiTiet()">
            <div class="form-group">
                <label for="">Mã Hóa Đơn Chi Tiết</label>
                <input type="text" name="idHDCT" id="idHDCT" class="form-control" placeholder="Mã Hóa Đơn Chi Tiết" value="<?php echo $id;?>" readonly>
            </div>
            <div class="form-group">
                <label for="">Mã Đơn Hàng</label>
                <select name="idDH" id="idDH">     
                 <?php
                    foreach($donhang as $donhangs){
                      echo '<option value="'.$donhangs['idDH'].'">'.$donhangs['idDH'].'</option>';
                    }
                 ?> 
               </select>
            </div>
            <div class="form-group">
                <label for="">Mã Sản Phẩm</label>
                <select name="idSP" id="idSP">     
                 <?php
                    foreach($sanpham as $sanphams){
                      echo '<option value="'.$sanphams['idSP'].'">'.$sanphams['idSP'].'</option>';
                    }
                 ?> 
               </select>
            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" name="gia" id="gia" class="form-control" placeholder="Giá" value="<?php echo $hdct['Gia'];?>">
            </div>
            <div class="form-group">
                <label for="">Số Lượng</label>
                <input type="text" name="soluong" id="soluong" class="form-control" placeholder="Số Lượng" value="<?php echo $hdct['SoLuong'];?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="index.php?ctrl=donhang&action=index" class="btn btn-danger">Danh sách</a>
            </div>
        </form>
        <script src="js/validate.js"></script>
    </div>
</div>