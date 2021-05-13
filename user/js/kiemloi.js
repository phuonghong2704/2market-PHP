function validateFormSignIn() {
    var username = document.getElementById("username").value.trim();
    var password = document.getElementById("password").value;
    if(username ==""){
        alert("Bạn chưa nhập tài khoản!");
        return false;
    }
    else if(password ==""){
        alert("Bạn chưa nhập mật khẩu!");
        return false;
    }
}
