<div class="card mt-3">
    <div class="card-header info"><h3>THÊM KHÁCH HÀNG</h3></div>
    <div class="card-body">
        <form action="?ctrl=khachhang&action=insert" method="post" enctype="multipart/form-data" onsubmit="return validateAddKhachHang()"> 
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="Email" id="Email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="Username" id="Username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="Name" id="Name" class="form-control" placeholder="Tên">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="Password" id="Password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="">Số Điện Thoại</label>
                <input type="number" name="SDT" id="SDT" class="form-control" placeholder="Số Điện Thoại">
            </div>
            <div class="form-group">
                <label for="">Hình</label>
                <input type="file" name="image" id="Hinh" class="form-control" placeholder="Hình">
            </div>
            <div class="form-group">
                <label for="">Level</label>
                <input type="text" name="level" id="Level" class="form-control" placeholder="Level">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="index.php?ctrl=khachhang&action=index" class="btn btn-danger">Danh sách</a>
            </div>
        </form>
    </div>
    <script src="js/validate.js"></script>
</div>