<form action="index.php?act=delete" method="post">
    <div class="card mt-3">
        <div class="card-header"><h3>QUẢN LÝ KHÁCH HÀNG</h3></div>
        <div class="card-body">
            <table class="table table-striped table">
                <thead>
                    <tr class="bg-info">
                        <th scope="col"></th>
                        <th scope="col">ID Khách Hàng</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                        <th scope="col">Name</th>
                        <th scope="col">Password</th>
                        <th scope="col">Level</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                  foreach ($khachhang as $khachhangs) {
                    echo '
                    <tr>
                      <td scope="row"><input type="checkbox" id="chonX" name="chonX[]" value="'.$khachhangs['id'].'"></td>
                      <td>'.$khachhangs['id'].'</td>
                      <td>'.$khachhangs['email'].'</td>
                      <td>'.$khachhangs['username'].'</td>
                      <td>'.$khachhangs['name'].'</td>
                      <td>'.$khachhangs['password'].'</td>
                      <td>'.$khachhangs['level'].'</td>
                      <td>
                        <a href="index.php?ctrl=khachhang&action=delete&id='.$khachhangs['id'].'" onclick= "myConfirmD(event)" class="btn btn-danger"><i class="menu-icon fa fa-trash-o"></i></a>
                        <a href="index.php?ctrl=khachhang&action=edit&id='.$khachhangs['id'].'" class="btn btn-info"><i class="menu-icon fa fa-pencil"></i></a>
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
            <a href="index.php?ctrl=khachhang&action=addnew" class="btn btn-info">Thêm mới</a>
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