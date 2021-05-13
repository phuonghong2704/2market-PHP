<div class="card mt-3">
    <div class="card-header info"><h3>THÊM SẢN PHẨM</h3></div>
    <div class="card-body">
        <form action="index.php?ctrl=sanpham&action=insert" method="post" enctype="multipart/form-data" onsubmit="return validateAddSanpham()">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" id="TenSP" name="TenSP" class="form-control" placeholder="Tên sản phẩm">
            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" name="Gia" id="Gia" class="form-control" placeholder="Giá">
            </div>
            <div class="form-group">
                <label for="">Hình</label>
                <input type="file" name="image" id="Hinh" class="form-control" placeholder="Hình">
            </div>
            <div class="form-group">
                <label for="">Số Lượng</label>
                <input type="number" name="soluong" id="SoLuong" class="form-control" placeholder="Số Lượng">
            </div>
            <div class="form-group">
                <label for="">Nội dung</label>
                <textarea type="text" name="MoTa" id="MoTa" class="form-control" placeholder="Mô tả"></textarea>
            </div>
            <div class="form-group">
                <label for="">Loại Danh Mục</label>
                <select name="LoaiDanhMuc" id="LoaiDanhMuc">     
                 <?php
                    foreach($danhmuc as $danhmucs){
                      echo '<option value="'.$danhmucs['idDanhMuc'].'">'.$danhmucs['TenDanhMuc'].'</option>';
                    }
                 ?> 
               </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="index.php?ctrl=sanpham&action=index" class="btn btn-danger">Danh sách</a>
            </div>
        </form>
    </div>
    <script src="js/validate.js"></script>
</div>