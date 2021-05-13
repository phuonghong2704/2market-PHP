<div class="card mt-3">
    <div class="card-header info"><h3>SỬA ĐƠN HÀNG</h3></div>
    <div class="card-body">
        <form action="index.php?ctrl=donhang&action=update" method="post" enctype="multipart/form-data" onsubmit="return validateEditDonHang()">
            <div class="form-group">
                <label for="">Mã Đơn Hàng</label>
                <input type="text" name="idDH" id="idDH" class="form-control" placeholder="Mã Đơn Hàng" value="<?php echo $id;?>" readonly>
            </div>
            <div class="form-group">
                <label for="">Họ Và Tên</label>
                <input type="text" name="hoten" id="hoten" class="form-control" placeholder="Họ Và Tên" value="<?php echo $donhang['name'];?>">
            </div>
            <div class="form-group">
                <label for="">Địa Chỉ</label>
                <input type="text" name="diachi" id="diachi" class="form-control" placeholder="Địa Chỉ" value="<?php echo $donhang['diachi'];?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $donhang['email'];?>">
            </div>
            <div class="form-group">
                <label for="">SDT</label>
                <input type="text" name="sdt" id="sdt" class="form-control" placeholder="Số Điện Thoại" value="<?php echo $donhang['sodienthoai'];?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="index.php?ctrl=donhang&action=index" class="btn btn-danger">Danh sách</a>
            </div>
        </form>
        <script src="js/validate.js"></script>
    </div>
</div>