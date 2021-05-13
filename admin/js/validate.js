function validateEditSanpham() {
    var tenSP = document.getElementById("TenSP").value.trim();
    var Gia = document.getElementById("Gia").value;
    var Hinh = document.getElementById("Hinh").value;
    var SoLuong = document.getElementById("SoLuong").value;
    var LoaiDanhMuc = document.getElementById("LoaiDanhMuc").value;
    var Mota = document.getElementById("MoTa").value;
    if(tenSP==""){
        alert("Tên sản phẩm không được để trống.");
        return false;
    }else if(Gia =="" || Gia<1000){
        alert("Giá sản phẩm phải lớn hơn 1000.");
        return false;
    }else if(SoLuong=="" || SoLuong < 0){
        alert("Số lượng không hợp lệ.");
        return false;
    }else if(LoaiDanhMuc=="" || LoaiDanhMuc<0){
        alert("Loại danh mục không hop lệ.");
        return false;
    }else if(Mota=="" || Mota.length < 100){
        alert("Mô tả sản phẩm phải lớn hơn 100 kí tự");
        return false;
    }else{
        return true;
    }
}
function validateAddSanpham(){
    var tenSP = document.getElementById("TenSP").value.trim();
    var Gia = document.getElementById("Gia").value;
    var Hinh = document.getElementById("Hinh").value;
    var SoLuong = document.getElementById("SoLuong").value;
    var LoaiDanhMuc = document.getElementById("LoaiDanhMuc").value;
    var Mota = document.getElementById("MoTa").value;
    if(tenSP==""){
        alert("Tên sản phẩm không được để trống.");
        return false;
    }else if(Gia =="" || Gia<1000){
        alert("Giá sản phẩm phải lớn hơn 1000.");
        return false;
    }else if(Hinh==""){
        alert("Hình không được để trống.");
        return false;
    }else if(SoLuong=="" || SoLuong < 0){
        alert("Số lượng không hợp lệ.");
        return false;
    }else if(LoaiDanhMuc=="" || LoaiDanhMuc<0){
        alert("Loại danh mục không hop lệ.");
        return false;
    }else if(Mota=="" || Mota.length < 100){
        alert("Mô tả sản phẩm phải lớn hơn 100 kí tự");
        return false;
    }else{
        return true;
    }
}
function validateEditDanhMuc() {
    var tenDanhMuc = document.getElementById("TenDanhMuc").value;
    var anHien = document.getElementById("AnHien").value;
    if(tenDanhMuc =="" || tenDanhMuc.length<5){
        alert("Tên danh mục không hợp lệ!");
        return false;
    }else if(anHien!="1" && anHien!="0"){
        alert("Ẩn hiện không hợp lệ! 0 để Ẩn, 1 để Hiện.");
        return false;
    }else{
        return true;
    }
}
function validateAdDanhMuc(){
    var tenDanhMuc = document.getElementById("TenDanhMuc").value;
    var thuTu = document.getElementById("ThuTu").value;
    var anHien = document.getElementById("AnHien").value;
    var hinhAnh = document.getElementById("HinhAnh").value;
    if(tenDanhMuc =="" || tenDanhMuc.length<5){
        alert("Tên danh mục không hợp lệ!");
        return false;
    }else if(anHien!="1" && anHien!="0"){
        alert("Ẩn hiện không hợp lệ! 0 để Ẩn, 1 để Hiện.");
        return false;
    }else if(hinhAnh==""){
        alert("Không được để trống hình ảnh.");
        return false;
    }else{
        return true;
    }
}
function validateAddKhachHang(){
    var email = document.getElementById("Email").value;
    var username = document.getElementById("Username").value;
    var name = document.getElementById("Name").value;
    var pass = document.getElementById("Password").value;
    var sdt = document.getElementById("SDT").value;
    var hinh = document.getElementById("Hinh").value;
    var level = document.getElementById("Level").value;
    if(email==""){
        alert("Vui lòng nhập email!");
        return false;
    }else if(username=="" || username.length<5){
        alert("Username phải lớn hơn 5 kí tự");
        return false;
    }else if(name=="" || name.length<5){
        alert("Tên quá ngắn. Vui lòng nhập lại!");
        return false;
    }else if(pass="" || pass <6){
        alert("Mật khẩu phải lớn hơn 6 kí tự");
        return false;
    }else if(sdt.length<10 || sdt.length>11){
        alert("Số điện thoại không hợp lệ!");
        return false;
    }else if(hinh=""){
        alert("Hình không được để trống!");
        return false;
    }else if(level!="0" && level !="1"){
        alert("Level không hợp lệ. 0 là user, 1 là admin");
        return false;
    }else{
        return true;
    }
}
function validateEditKhachHang() {
    var email = document.getElementById("Email").value;
    var username = document.getElementById("Username").value;
    var name = document.getElementById("Name").value;
    var pass = document.getElementById("Password").value;
    var sdt = document.getElementById("SDT").value;
    var hinh = document.getElementById("Hinh").value;
    var level = document.getElementById("Level").value;
    if(email==""){
        alert("Vui lòng nhập email!");
        return false;
    }else if(username=="" || username.length<5){
        alert("Username phải lớn hơn 5 kí tự");
        return false;
    }else if(name=="" || name.length<5){
        alert("Tên quá ngắn. Vui lòng nhập lại!");
        return false;
    }else if(pass="" || pass <6){
        alert("Mật khẩu phải lớn hơn 6 kí tự");
        return false;
    }else if(sdt.length<10 || sdt.length>11){
        alert("Số điện thoại không hợp lệ!");
        return false;
    }else if(level!="0" && level !="1"){
        alert("Level không hợp lệ. 0 là user, 1 là admin");
        return false;
    }else{
        return true;
    }
}
function validateEditDonHang(){
    var hoten = document.getElementById("hoten").value;
    var diachi = document.getElementById("diachi").value;
    var email = document.getElementById("email").value;
    var sdt = document.getElementById("sdt").value;
    if(hoten.length < 5){
        alert("Họ tên phải lớn hơn 5 kí tự");
        return false;
    }else if(diachi.length < 20){
        alert("Địa chỉ phải lớn hơn 20 kí tự");
        return false;
    }else if(email=null){
        alert("Email không được để trống.");
        return false;
    }else if(sdt.length<10 || sdt.length>11){
        alert("Số điện thoại không hợp lệ");
        return false;
    }else{
        return true;
    }
}
function validateEditHoaDonChiTiet(){
     var gia =document.getElementById("gia").value;
     var soluong = document.getElementById("soluong").value;
     if(gia =""||gia < 1000){
         alert("Giá không hợp lệ.");
         return false;
     }else if(soluong="" || soluong<1){
        alert("Số lượng phải lớn hơn không.");
        return false;
     }else{
         return true;
     }
}