<div class="card mt-3">
    <div class="card-header info"><h3>SỬA BÌNH LUẬN</h3></div>
    <div class="card-body">
        <form action="index.php?ctrl=binhluan&action=update" method="post" enctype="multipart/form-data">
            <label for="">Mã Bình Luận</label>
                <input type="text" readonly name="MaBL" class="form-control" placeholder="Mã sản phẩm tự phát sinh" value="<?php echo $id ?>">
            </div>
            <div class="form-group">
                <label for="">Tên Sản Phẩm</label>
                <select name="MaSP">     
                 <?php
                    foreach($sanpham as $sanphams)
                    {
                      echo '<option value="'.$sanphams['idSP'].'">'.$sanphams['TenSP'].'</option>';
                    }
                 ?> 
               </select>
            </div>
            <div class="form-group">
                <label for="">Nội Dung</label>
                <input type="text" name="NoiDung" class="form-control" placeholder="Nội Dung" value="<?php echo $binhluan['NoiDung']?>">
            </div>
            <div class="form-group">
                <label for="">Họ Tên</label>
                <input type="text" name="HoTen" class="form-control" placeholder="Họ Tên" value="<?php echo $binhluan['HoTen']?>">
            </div>
            <div class="form-group">
                <label for="">Ẩn Hiện</label>
                <input type="text" name="AnHien" class="form-control" placeholder="0 là ẩn , 1 là hiện" value="<?php echo $binhluan['AnHien']?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="index.php?ctrl=binhluan&action=index" class="btn btn-danger">Danh sách</a>
            </div>
        </form>
    </div>
</div>