<div class="card mt-3">
    <div class="card-header info"><h3>THÊM ĐƠN HÀNG</h3></div>
    <div class="card-body">
        <form action="?ctrl=donhang&action=insert" method="post" enctype="multipart/form-data" onsubmit="return validateEditDonHang()">
            <div class="form-group">
                <label for="">Họ Và Tên</label>
                <input type="text" name="hoten" id="hoten" class="form-control" placeholder="Họ Và Tên">
            </div>
            <div class="form-group">
                <label for="">Địa Chỉ</label>
                <input type="text" name="diachi" id="diachi" class="form-control" placeholder="Địa Chỉ">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="">SDT</label>
                <input type="text" name="sdt" id="sdt" class="form-control" placeholder="Số Điện Thoại">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="index.php?ctrl=donhang&action=index" class="btn btn-danger">Danh sách</a>
            </div>
        </form>
    </div>
    <script src="js/validate.js"></script>
</div>