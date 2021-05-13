<form action="index.php?act=delete" method="post">
    <div class="card mt-3">
        <div class="card-header"><h3>QUẢN LÝ DANH MỤC</h3></div>
        <div class="card-body">
            <table class="table table-striped table">
                <thead>
                    <tr class="bg-info">
                        <th scope="col"></th>
                        <th scope="col">ID Danh Mục</th>
                        <th scope="col">Tên Danh Mục</th>
                        <th scope="col">Thứ Tự</th>
                        <th scope="col">Ẩn Hiện</th>
                        <th scope="col" style="width: 150px;">Hình Ảnh</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                  foreach ($danhmuc as $danhmucs) {
                    echo '
                    <tr>
                      <td scope="row"><input type="checkbox" id="chonX" name="chonX[]" value="'.$danhmucs['idDanhMuc'].'"></td>
                      <td>'.$danhmucs['idDanhMuc'].'</td>
                      <td>'.$danhmucs['TenDanhMuc'].'</td>
                      <td>'.$danhmucs['ThuTu'].'</td>
                      <td>'.$danhmucs['AnHien'].'</td>
                      <td style="line-height: 120px;"><img style="width: 100%;" src="../user/images/'.$danhmucs['Hinh'].'"></td>
                      <td>
                        <a href="index.php?ctrl=danhmuc&action=delete&id='.$danhmucs['idDanhMuc'].'" onclick= "myConfirmD(event)" class="btn btn-danger"><i class="menu-icon fa fa-trash-o"></i></a>
                        <a href="index.php?ctrl=danhmuc&action=edit&id='.$danhmucs['idDanhMuc'].'" class="btn btn-info"><i class="menu-icon fa fa-pencil"></i></a>
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
            <a href="#" class="btn btn-info">Xoá danh mục đã chọn</a>
            <a href="index.php?ctrl=danhmuc&action=addnew" class="btn btn-info">Thêm mới</a>
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