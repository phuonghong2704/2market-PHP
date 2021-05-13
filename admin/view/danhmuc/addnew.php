<div class="card mt-3">
    <div class="card-header info"><h3>THÊM DANH MỤC</h3></div>
    <div class="card-body">
        <form action="?ctrl=danhmuc&action=insert" method="post" enctype="multipart/form-data" onsubmit="return validateAdDanhMuc()">
            <div class="form-group">
                <label for="">Tên Danh Mục</label>
                <input type="text" name="TenDanhMuc" id="TenDanhMuc" class="form-control" placeholder="Tên Danh Mục">
            </div>
            <div class="form-group">
                <label for="">Thứ Tự</label>
                <input type="number" name="ThuTu" id="ThuTu" class="form-control" placeholder="Nhập Số Thứ Tự">
            </div>
            <div class="form-group">
                <label for="">Ẩn Hiện</label>
                <input type="number" name="AnHien" id="AnHien" class="form-control" placeholder="0 là Ẩn , 1 là hiện">
            </div>
            <div class="form-group">
                <label for="">Hình Ảnh</label>
                <input type="file" name="image" id="HinhAnh" class="form-control" placeholder="Hình Ảnh">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="index.php?ctrl=danhmuc&action=index" class="btn btn-danger">Danh sách</a>
            </div>
        </form>
    </div>
    <script src="js/validate.js"></script>
</div>