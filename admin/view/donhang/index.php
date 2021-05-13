<form action="index.php?action=donhang" method="post">
    <div class="card mt-3">
        <div class="card-header"><h3>QUẢN LÝ ĐƠN HÀNG</h3></div>
        <div class="card-body">
            <table class="table table-striped table">
                <thead>
                    <tr class="bg-info">
                        <th scope="col"></th>
                        <th scope="col">ID Đơn Hàng</th>
                        <!-- <th scope="col">Tên</th>
                        <th scope="col">Họ</th> -->
                        <th scope="col">Họ Và Tên</th>
                        <th scope="col">Địa Chỉ</th>
                        <th scope="col">Email</th>
                        <th scope="col">SDT</th>
                        <th scope="col">Thời Điểm Tạo Đơn</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                  foreach ($donhang as $donhangs) {
                    echo '
                    <tr>
                      <td scope="row"><input type="checkbox" id="chonX" name="chonX[]" value="'.$donhangs['idDH'].'"></td>
                      <td>'.$donhangs['idDH'].'</td>
                      <td>'.$donhangs['name'].'</td>
                      <td>'.$donhangs['diachi'].'</td>
                      <td>'.$donhangs['email'].'</td>
                      <td>'.$donhangs['sodienthoai'].'</td>
                      <td>'.$donhangs['thoidiemtaodon'].'</td>
                      <td>
                        <a href="index.php?ctrl=donhang&action=delete&id='.$donhangs['idDH'].'" onclick= "myConfirmD(event)" class="btn btn-danger"><i class="menu-icon fa fa-trash-o"></i></a>
                        <a href="index.php?ctrl=donhang&action=edit&id='.$donhangs['idDH'].'" class="btn btn-info"><i class="menu-icon fa fa-pencil"></i></a>
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
            <a href="index.php?ctrl=donhang&action=addnew" class="btn btn-info">Thêm mới</a>
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