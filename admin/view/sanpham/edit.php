<div class="card mt-3">
    <div class="card-header info"><h3>SỬA SẢN PHẨM</h3></div>
    <div class="card-body">
        <form action="index.php?ctrl=sanpham&action=update" method="post" enctype="multipart/form-data" onsubmit="return validateEditSanpham()">
        <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" readonly name="MaSP" class="form-control" placeholder="Mã sản phẩm tự phát sinh" value="<?php echo $id?>">
            </div>
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="TenSP" id="TenSP" class="form-control" placeholder="Tên sản phẩm" value="<?php echo $sanpham['TenSP'];?>">
            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input type="number" name="Gia" id="Gia" class="form-control" placeholder="Giá" value="<?php echo $sanpham['Gia']?>">
            </div>
            <div class="form-group">
                <label for="">Hình</label>
                <input type="file" name="image" id="Hinh" class="form-control" placeholder="Hình" value="<?php echo $sanpham['image_link']; ?>">
            </div>
            <div class="form-group">
                <label for="">Số Lượng</label>
                <input type="number" name="soluong" id="SoLuong" class="form-control" placeholder="Số Lượng" value="<?php echo $sanpham['SoLuong']?>">
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea type="text" name="MoTa" id="MoTa" class="form-control" placeholder="Mô tả sản phẩm" value="<?php echo $sanpham['NoiDung'];?>"><?php echo $sanpham['NoiDung'];?></textarea>
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
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="index.php?ctrl=sanpham&action=index" class="btn btn-danger">Danh sách</a>
            </div>
        </form>
        <script src="js/validate.js"></script>
    </div>
</div>