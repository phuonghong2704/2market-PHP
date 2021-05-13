function validateDangTin() {
    var tenSanPham = document.getElementById("tenSanPham").value;
    var noiDung = document.getElementById("noiDung").value;
    var image = document.getElementById("image").value;
    var danhMuc = document.getElementById("danhMuc").value;
    var soLuong = document.getElementById("soLuong").value;
    var gia = document.getElementById("Gia").value;
    if(tenSanPham ="" || tenSanPham.length <3){
        alert("Tên sản phẩm phải trên 5 kí tự.");
        return false;
    }else if(noiDung = "" || noiDung.length <10){
        alert("Nội dung phải trên 10 kí tự.");
        return false;
    }else if(image=" "){
        alert("Hình ảnh không được để trống.");
        return false;
    }else if(danhMuc <"0"){
        alert("Danh mục không hợp lệ.");
        return false;
    }else if(soLuong ="" || soLuong< "0"){
        alert("Số lượng phải lớn hơn 0");
        return false;
    }else if(gia="" || gia <5000){
        alert("Giá phải lớn hơn 5000 VNĐ");
        return false;
    }else{
        return true;
    }
}
function validateComment() {
    var noiDung = document.getElementById("noidung").value;
    if(noiDung ="" || noiDung.length <5){
        alert("Bình luận phải lớn hơn 5 kí tự");
        return false;
    }else{
        return true;
    }
}
function validateFormDoiPass(){
    var pass_old = document.getElementById("pass_old").value;
    var pass_new = document.getElementById("pass_new").value;
    var re_pass_new = document.getElementById("re_pass_new").value;
    if(pass_old.length < "1"){
        alert("Mật khẩu cũ không được để trống");
        return false;
    }else if(pass_new ="" || pass_new.length < 6){
        alert("Mật khẩu mới phải lớn hơn 6 kí tự");
        return false;
    }else if(re_pass_new.length<"1"){
        alert("Mật khẩu nhập lại không được để trống.");
        return false;
    }else {
        return true;
    }
}
function validateDatHang(){
    var ho = document.getElementById("ho").value;
    var ten = document.getElementById("ten").value;
    var hovaten = document.getElementById("hovaten").value;
    var quanhuyen = document.getElementById("quanhuyen").value;
    var phuongxa = document.getElementById("phuongxa").value;
    var diachichitiet = document.getElementById("diachichitiet").value;
    var sdt = document.getElementById("sdt").value;
    var email = document.getElementById("email").value;
    if(ho.length<1){
        alert("Vui lòng nhập họ của bạn");
        return false;
    }else if(ten.length<3){
        alert("Tên phải lớn hơn 3 kí tự");
        return false;
    }else if(hovaten.length<10){
        alert("Họ và tên phải lớn hơn 10 kí tự");
        return false;
    }else if(quanhuyen.length<5){
        alert("Quận (huyện) phải lớn hơn 5 kí tự");
        return false;
    }else if(phuongxa.length<5){
        alert("Phường (xã) phải lớn hơn 5 kí tự");
        return false;
    }else if(diachichitiet.length<20){
        alert("Địa chỉ chi tiết phải lớn hơn 20 kí tự");
        return false;
    }else if(email.length<1){
        alert("Email không được để trống");
        return false;
    }else if(sdt.length<10 || sdt.length>11){
        alert("Số điện thoại không hợp lệ");
        return false;
    }else{
        alert("Bạn có muốn đặt hàng chứ");
        return true;
    }
}