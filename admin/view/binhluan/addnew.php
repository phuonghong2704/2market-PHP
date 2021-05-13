<div class="card mt-3">
    <div class="card-header info"><h3>THÊM BÌNH LUẬN</h3></div>
    <div class="card-body">
        <form action="?ctrl=binhluan&action=insert" method="post">
            <div class="form-group">
                <label for="">Tên Sản Phẩm</label>
                <select name="MaSP">     
                 <?php
                    foreach($sanpham as $sanphams){
                      echo '<option value="'. $sanphams['idSP'].'">'. $sanphams['TenSP'].'</option>';
                    }
                 ?> 
               </select>
            </div>
            <div class="form-group">
                <label for="">Nội Dung</label>
                <input type="textarea" name="NoiDung" class="form-control" placeholder="Nội Dung">
            </div>
            <div class="form-group">
                <label for="">Họ Tên</label>
                <input type="text" name="HoTen" class="form-control" placeholder="Họ Tên">
            </div>
            <div class="form-group">
                <label for="">Ẩn Hiện</label>
                <input type="number" name="AnHien" class="form-control" placeholder="0 là Ẩn , 1 là hiện">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="index.php?ctrl=binhluan&action=index" class="btn btn-danger">Danh sách</a>
            </div>
        </form>
    </div>
</div>