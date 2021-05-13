<form action="index.php?action=donhang" method="post">
    <div class="card mt-3">
        <div class="card-header"><h3>QUẢN LÝ HÓA ĐƠN CHI TIẾT</h3></div>
        <div class="card-body">
            <table class="table table-striped table">
                <thead>
                    <tr class="bg-info">
                        <th scope="col"></th>
                        <th scope="col">ID HDCT</th>
                        <th scope="col">ID Đơn Hàng</th>
                        <th scope="col">ID Đơn Hàng</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số Lượng</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                  foreach ($hdct as $hdcts) {
                    echo '
                    <tr>
                      <td scope="row"><input type="checkbox" id="chonX" name="chonX[]" value="'.$hdcts['idHDCT'].'"></td>
                      <td>'.$hdcts['idHDCT'].'</td>
                      <td>'.$hdcts['idDH'].'</td>
                      <td>'.$hdcts['idSP'].'</td>
                      <td>'.$hdcts['Gia'].'</td>
                      <td>'.$hdcts['SoLuong'].'</td>
                      <td>
                        <a href="index.php?ctrl=hoadonchitiet&action=delete&id='.$hdcts['idHDCT'].'" onclick= "myConfirmD(event)" class="btn btn-danger"><i class="menu-icon fa fa-trash-o"></i></a>
                        <a href="index.php?ctrl=hoadonchitiet&action=edit&id='.$hdcts['idHDCT'].'" class="btn btn-info"><i class="menu-icon fa fa-pencil"></i></a>
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
            <a href="index.php?ctrl=hoadonchitiet&action=addnew" class="btn btn-info">Thêm mới</a>
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