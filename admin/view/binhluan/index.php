<form action="index.php?act=delete" method="post">
    <div class="card mt-3">
        <div class="card-header"><h3>QUẢN LÝ BÌNH LUẬN</h3></div>
        <div class="card-body">
            <table class="table table-striped table">
                <thead>
                    <tr class="bg-info">
                        <th scope="col"></th>
                        <th scope="col">ID Bình Luận</th>
                        <th scope="col">ID Sản Phẩm</th>
                        <th scope="col">ThoiDiemGui</th>
                        <th scope="col">Nội Dung</th>
                        <th scope="col">Họ Tên</th>
                        <th scope="col">Ẩn Hiện</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                  foreach ($binhluan as $binhluans) {
                    echo '
                    <tr>
                      <td scope="row"><input type="checkbox" id="chonX" name="chonX[]" value="'.$binhluans['idComment'].'"></td>
                      <td>'.$binhluans['idComment'].'</td>
                      <td>'.$binhluans['idSP'].'</td>
                      <td>'.$binhluans['ThoiDiemGui'].'</td>
                      <td>'.$binhluans['NoiDung'].'</td>
                      <td>'.$binhluans['HoTen'].'</td>
                      <td>'.$binhluans['AnHien'].'</td>
                      <td>
                        <a href="index.php?ctrl=binhluan&action=delete&id='.$binhluans['idComment'].'" onclick= "myConfirmD(event)" class="btn btn-danger"><i class="menu-icon fa fa-trash-o"></i></a>
                        <a href="index.php?ctrl=binhluan&action=edit&id='.$binhluans['idComment'].'" class="btn btn-info"><i class="menu-icon fa fa-pencil"></i></a>
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
            <a href="index.php?ctrl=binhluan&action=addnew" class="btn btn-info">Thêm mới</a>
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