<style>
li.page-item{
  margin-right:-3%;
}
</style>
<form action="index.php?ctrl=sanpham&action=delete" method="post">
    <div class="card mt-3">
        <div class="card-header"><h3>QUẢN LÝ SẢN PHẨM</h3></div>
        <div class="card-body">
            <table class="table table-striped table">
                <thead>
                        <tr class="bg-info">
                            <th scope="col"></th>
                            <th scope="col">ID Sản phẩm</th>
                            <th scope="col">ID Danh mục</th>
                            <th scope="col">Tên Sản Phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col" style="width: 150px;">Hình ảnh</th>
                            <th scope="col">Thời điểm đăng</th>
                            <th scope="col"></th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                  foreach ($sanpham as $sanphams) {
                    echo '
                    <tr>
                    <td style="line-height: 120px;" scope="row"><input type="checkbox" id="chonX" name="chonX[]" value="'.$sanphams['idSP'].'"></td>
                    <td style="line-height: 120px;">'.$sanphams['idSP'].'</td>  
                    <td style="line-height: 120px;">'.$sanphams['idDanhMuc'].'</td>
                      <td style="line-height: 120px;">'.$sanphams['TenSP'].'</td>
                      <td style="line-height: 120px;">'.$sanphams['Gia'].'</td>
                      <td style="line-height: 120px;">'.$sanphams['SoLuong'].'</td>
                      <td style="line-height: 120px;"><img style="width: 100%;" src="../user/images/'.$sanphams['image_link'].'"></td>
                      <td style="line-height: 120px;">'.$sanphams['ThoiDiemDang'].'</td>
                      <td style="line-height: 120px;">
                        <a href="index.php?ctrl=sanpham&action=delete&id='.$sanphams['idSP'].'" onclick= "myConfirmD(event)" class="btn btn-danger"><i class="menu-icon fa fa-trash-o"></i></a>
                        <a href="index.php?ctrl=sanpham&action=edit&id='.$sanphams['idSP'].'" class="btn btn-info"><i class="menu-icon fa fa-pencil"></i></a>
                      </td>
                    </tr>
                    ';
                  }
                 ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="#" class="btn btn-info" onclick='selectAll()'>Chọn tất cả</a>
            <a href="#" class="btn btn-info" onclick='UnSelectAll()'>Bỏ chọn</a>
            <button type="button" class="btn btn-info">Xoá danh mục đã chọn</button>
            <a href="index.php?ctrl=sanpham&action=addnew" class="btn btn-info">Thêm mới</a>
             <!-- Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-end" style="float: right; margin-top: -37px;">
              <?php 
              for($i=1; $i<=$sotrang; $i++){
                echo '<li class="page-item"><a class="page-link" href="index.php?ctrl=sanpham&trang='.$i.'">'.$i.'</a></li>';
              }
                ?>
                </ul>
          </nav> 	
        </div>
    </div>
</form>
<script>
    function UnSelectAll(){
      var items=document.getElementsByName('chonX[]');
      for(var i=0; i<items.length; i++){
        if(items[i].type=='checkbox')
          items[i].checked=false; 
      }
    }		
    function selectAll(){
      var items=document.getElementsByName('chonX[]');
      for(var i=0; i<items.length; i++){
        if(items[i].type=='checkbox')
          items[i].checked=true;
      }
    }
</script>
<script>
              function myConfirmD(e){
                if(confirm("Bạn Có Chắc Là Sẽ Xóa Chứ?"));
                  else {
                    e.preventDefault();
                  }
              }
            </script>