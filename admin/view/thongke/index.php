
<form action="index.php?act=delete" method="post">
    <div class="card mt-3">
        <div class="card-header"><h3>QUẢN LÝ LOẠI HÀNG</h3></div>
        <div class="card-body">
            <table class="table table-striped table">
                <thead>
                        <tr class="bg-info">
                        <th scope="col">Loại Hàng</th>
                        <th scope="col">Số Lượng</th>
                        
                        </tr>
                </thead>
                <tbody>
                <?php
              foreach ($items as $item) {
                echo '
                <tr>
                <td>'.$item['TenDoiTuong'].'</td>
                <td>'.$item['soluong'].'</td>
                
              </tr>
                
                ';
              }
                 ?> 
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="index.php?ctrl=thongke&action=chart" class="btn btn-success">Xem biểu đồ</a>
        </div>
    </div>
</form>