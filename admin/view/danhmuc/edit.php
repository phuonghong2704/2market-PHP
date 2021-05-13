<div class="card mt-3">
    <div class="card-header info"><h3>SỬA DANH MỤC</h3></div>
    <div class="card-body">
        <form action="index.php?ctrl=danhmuc&action=update" method="post" enctype="multipart/form-data" onsubmit="return validateEditDanhMuc()">
            <div class="form-group">
                <label for="">Mã Danh Mục</label>
                <input type="text" name="MaDanhMuc" class="form-control" placeholder="Mã Danh Mục" value="<?php echo $id;?>" readonly>
            </div>
            <div class="form-group">
                <label for="">Tên Danh Mục</label>
                <input type="text" name="TenDanhMuc" id="TenDanhMuc" class="form-control" placeholder="Tên Danh Mục" value="<?php echo $danhmuc['TenDanhMuc'];?>">
            </div>
            <div class="form-group">
                <label for="">Thứ Tự</label>
                <input type="number" name="ThuTu" id="ThuTu" class="form-control" placeholder="Nhập Số Thứ Tự" value="<?php echo $danhmuc['ThuTu'];?>">
            </div>
            <div class="form-group">
                <label for="">Ẩn Hiện</label>
                <input type="number" name="AnHien" id="AnHien" class="form-control" placeholder="0 là Ẩn , 1 là hiện" value="<?php echo $danhmuc['AnHien'];?>">
            </div>
            <div class="form-group">
                <label for="">Hình Ảnh</label>
                <input type="file" name="image" id="HinhAnh" class="form-control" placeholder="Hình Ảnh" value="<?php echo $danhmuc['Hinh']; ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="index.php?ctrl=danhmuc&action=index" class="btn btn-danger">Danh sách</a>
            </div>
        </form>
        <script src="js/validate.js"></script>
    </div>
</div>