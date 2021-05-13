<div class="card mt-3">
    <div class="card-header info"><h3>SỬA KHÁCH HÀNG</h3></div>
    <div class="card-body">
        <form action="index.php?ctrl=khachhang&action=update" method="post" enctype="multipart/form-data" onsubmit="return validateEditKhachHang()">
        <div class="form-group">
                <label for="">Mã Khách Hàng</label>
                <input type="text" readonly name="MaKhachHang" class="form-control" placeholder="Mã sản phẩm tự phát sinh" value="<?php echo $id  ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="Email" id="Email" class="form-control" placeholder="Email" value="<?php echo $khachhang['email'];?>">
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="Username" id="Username" class="form-control" placeholder="Username" value="<?php echo $khachhang['username'];?>">
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="Name" id="Name" class="form-control" placeholder="Tên" value="<?php echo $khachhang['name'];?>">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="Password" id="Password" class="form-control" placeholder="Password" value="<?php echo $khachhang['password'];?>">
            </div>
            <div class="form-group">
                <label for="">Số Điện Thoại</label>
                <input type="number" name="SDT" id="SDT" class="form-control" placeholder="Số Điện Thoại" value="<?php echo $khachhang['SDT'];?>">
            </div>
            <div class="form-group">
                <label for="">Hình</label>
                <input type="file" name="image" id="Hinh" class="form-control" placeholder="Hình">
            </div>
            <div class="form-group">
                <label for="">Level</label>
                <input type="text" name="level" id="Level" class="form-control" placeholder="Level" value="<?php echo $khachhang['level'];?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="index.php?ctrl=khachhang&action=index" class="btn btn-danger">Danh sách</a>
            </div>
        </form>
    </div>
    <script src="js/validate.js"></script>
</div>