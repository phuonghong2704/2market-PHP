<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Hàng</title>
    <style>
                @font-face {
  font-family: Lato-Semibold;
  src: url("../Font/Lato-Semibold.ttf");
}
@font-face {
  font-family: Lato-Bold;
  src: url("../Font/Lato-Bold.ttf");
}
@font-face {
  font-family: Lato-Regular;
  src: url("../Font/Lato-Regular.ttf");
}
@font-face {
  font-family: Lato-Light;
  src: url("../Font/Lato-Light.ttf");
}
@font-face {
  font-family: Lato-Medium;
  src: url("../Font/Lato-Medium.ttf");
}
        body{
            width: 100%;
            margin:0 auto;
        }
        .form5{
            width: 70%;
            height:39vw;
            border:1px solid black;
            margin: 0 auto;
            border-radius: 2px;
        }
        .first{
            margin-top: 4.3%;
        }
        .group{
            float:left;
            width: 29%;
            margin-left:3%;
            margin-bottom: 2%;
            font-family: Lato-Regular;
        }
        .group input{
            margin-top: 0.3vw;
            width: 100%;
            height: 2vw;
            padding-left: 2%;
            border-radius: 3px;
            border: 1px solid rgb(161, 161, 161);
        }
        .tp{
            width: 104%;
            height: 2.4vw;
            margin-top: 1.5%;
            padding-left: 1%;
            border-radius: 3px;
            border: 1px solid rgb(161, 161, 161);
        }
        .group-ct{
            clear:both;
            margin-left: 3%;
            width: 100%;
        }
        .group-ct label{
            font-family: Lato-Semibold;
        }
        .group-ct input{
            margin-top: 0.8%;
            width:91.9%;
            padding: 8px 1%;
            border-radius: 3px;
            border: 1px solid rgb(161, 161, 161);
        }
        .group-final{
            margin-left: 3%;
            margin-top: 4%;
        }
        
        .group-final1{
            margin-left: 35.2%;
            margin-top: -3.3%;
        }
        .group-final1 input{
            font-family: Lato-Regular;
            padding: 8.7px 1%;
            width: 43.7%;
            border-radius: 3px;
            border: 1px solid rgb(161, 161, 161);
        }
        .group-final input{
            font-family: Lato-Regular;
            padding: 8px 1%;
            width: 29%;
            border-radius: 3px;
            border: 1px solid rgb(161, 161, 161);
        }
        .checkbox{
            margin-left: 74%;
            margin-top:-2.5%;
        }
        .quaylai{
            margin-top: 10%;
            margin-left:30px;
        }
        .quaylai a{
            padding:10px 20px;
            background-color: white;
            border: 1px solid black;
            border-radius: 3px;
            text-decoration: none;
            color:black;
            font-family: Lato-Semibold;
        }
        .xong{
            margin-left:88.5%;
            margin-top: -3.3%;
            
        }
        .xong button{
            padding:10px 30px;
            color:white;
            background-color: #8bc34a;
            border: 1px solid black;
            border-radius: 3px;
            border: thin;
            font-family: Lato-Semibold;
        }
        .group label{
            font-family: Lato-Semibold;
        }

    </style>
</head>
<body>
<h1 style="text-align:center;padding:10px;">Thông Tin Đặt Hàng</h1>
    <form class="form5" action="index.php?ctrl=dathang&action=checkout" method="post" onsubmit="return validateDatHang()">
        <div class="first">
            <div class="group">
                <label>Họ* :</label></br>
                <input type="text" id="ho" name="ho" placeholder="Họ">
            </div>
            <div class="group">
                <label>Tên*</label></br>
            <input type="text" id="ten" name="ten" placeholder="Tên">
            </div>
            <div class="group">
                <label>Họ và Tên</label></br>
                <input type="text" id="hovaten" name="hovaten" placeholder="Họ Và Tên">
            </div>
            <div class="group">
                <label>Thành Phố*</label></br>
                <select class="tp" id="tp" name="tp">
                    <option value="HoChiMinh" >Hồ Chí Minh</option>
                    <option value="HaNoi">Hà Nội</option>
                    <option value="CanTho">Cần Thơ</option>
                    <option value="DaNang">Đà Nẵng</option>
                    <option value="TayNguyen">Tây Nguyên</option>
                    <option value="TayNinh">Tây Ninh</option>
                </select> 
            </div>
            <div class="group">
                <label>Quận/Huyện*</label></br>
                <input type="text" id="quanhuyen" name="quanhuyen"  placeholder="Quận/Huyện">
            </div>
            <div class="group">
                <label>Phường/Xã*</label></br>
                <input type="text" id="phuongxa" name="phuongxa" placeholder="Phường/Xã">
            </div>
            <div class="group-ct">
                <label>Địa chỉ chi tiết*</label></br>
                <input type="text" id="diachichitiet" name="dcct" placeholder="Bắt Buộc">  
            </div> 
            <div class="group-final">
                <input type="email" id="email" name="email" placeholder="Email">
                </div>
                <div class="group-final1">
                    <input type="text" id="sdt" name="sdt" placeholder="Số Điện Thoại">
                </div>
            <div class="quaylai">
                <a href="index.php?ctrl=cart">Quay lại</a>
            </div>
            <div class="xong">
                <button type="submit">Xong</button>
            </div>
        </div>
    </div>
    </form>
    <script src="user/js/validate.js"></script>
</body>
</html>

