<div class="card mt-3">
    <div class="card-header info"><h3>THÊM HÓA ĐƠN CHI TIẾT</h3></div>
    <div class="card-body">
        <form action="?ctrl=hoadonchitiet&action=insert" method="post" enctype="multipart/form-data" onsubmit="return validateEditHoaHonChiTiet()">
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
                <input type="text" name="gia" id="gia" class="form-control" placeholder="Giá">
            </div>
            <div class="form-group">
                <label for="">Số Lượng</label>
                <input type="text" name="soluong" id="soluong" class="form-control" placeholder="Số Lượng">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="index.php?ctrl=hoadonchitiet&action=index" class="btn btn-danger">Danh sách</a>
            </div>
        </form>
    </div>
    <script src="js/validate.js"></script>
</div>