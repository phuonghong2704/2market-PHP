<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link
        href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,400;0,500;0,600;0,700;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/623a25d945.js" crossorigin="anonymous"></script>
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

    .cart2{
        float: left;
        margin-left: 77%;


    }

    .list-cart {
        margin-top: 20%;
    }

    .table {
        width: 70%;
        margin: auto;
        margin-top: 5%;
    }

    .tab {
    float: right;
    margin-right: 16%;
    border: 0.5px solid rgb(236, 236, 236);
    background-color: whitesmoke;
    border-radius: 4px;
    width: 20%;
    margin-top: 1%;
    text-align: center;
    margin-bottom: 5%;
}

    .tab p {
        padding: 3% 0%;
        font-family: Lato-Regular;
        font-size: 1.2vw;
        letter-spacing: 0.5px;
        margin-bottom: 0;
    }

    .bton {
    background-color: #8bc34a;
    padding: 2% 5%;
    border: 1px solid white;
    border-radius: 5px;
    margin-bottom: 3%;
    }

    .bton:hover {
        color: rgb(23, 31, 27);
        background-color: rgb(70, 155, 115);

    }
    .bton a{
    color: white;
    text-decoration: none;
    }

    th img {
        width: 15vh;
        height: 16vh;
    }

    th i {
        width: 10vh;
        height: 8vh;
        padding-left: 20%;
    }

    th p {
        margin-top: -22%;
    }
        .form2{
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
            margin-top: 195px;
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
            margin-top: -2.3%;
            
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
        .alert-danger{
            text-align:center;
        }
        div.quantity input{
            width:50%;
            text-align:center;
            padding-left:10%;
            margin-left:10%;
            margin-right:10%;
        }
        td.product-quantity div.quantity{
        float: none;
        margin: 0;
        width:40%;
        }
    </style>
</head>

<body>
<h3 style="text-align:center;margin-top:10px;">Giỏ hàng của bạn</h3>
    <table class="table">
    <form class="form2" method="post">
        <thead>
            <tr>
                <th>Ảnh</th>
                <th>Tên SP</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
            </tr>
        </thead>
 
        <?php 
        $tongtien =0;
            if(isset($_SESSION['user']) || isset($_SESSION['admin'])){
                
    if(isset($_SESSION['carts']) && $_SESSION['carts']!=null)
    {   
        foreach ($_SESSION['carts'] as $key => $pro)
        {   
            $thanhtien = ($pro['Gia']*$pro['quantity']);
            echo '<tr>
            <td><img src="user/images/'.$pro['image_link'].'" width="50px"></td>
            <td>'.$pro['TenSP'].'</td>
            <td>'.number_format($pro['Gia']).'VNĐ'.'</td>
            <td class="product-quantity">
                <div class="quantity">
                <a class="minus" href="index.php?ctrl=cart&action=discount&key='.$key.'" name="discount"">-</a> 
                    <input type="number" size="4" class="input-text qty text" id="soluong" value="'.$pro['quantity'].'" min="0" step="1" disabled>
                <a class="plus" href="index.php?ctrl=cart&action=add&key='.$key.'" name="add"">+</a>   
                </div>
            </td>
            <td>'.number_format($thanhtien).  'VNĐ'.'</td>
            <td class="product-delete" onclick="myConfirmD(event)"><a href="index.php?ctrl=cart&action=delete&id='.$key.'">Xóa</a></td>
            </tr>
            ';
            $tongtien +=$thanhtien;
        }
        echo'</thead>
        <script>
        function myConfirmD(e) {
            if (confirm("Bạn Có Chắc Muốn Xóa Chứ?"));
            else {
                e.preventDefault();
            }
        }
        </script>
    </table>

    <div class="tab">
        <p>Tổng tiền :';  echo number_format($tongtien); echo'VNĐ</p>
        <button class="bton"><a href="index.php?ctrl=dathang">Đặt Hàng</a></button>
    </div>
        </form>';

    }else{
        echo '<div class="alert alert-info" style="text-align:center;">Giỏ Hàng Trống!</div>';
    } 
}
    else{
        echo '<p class="alert alert-danger">Vui lòng đăng nhập để có thể thêm sản phẩm vào giỏ hàng</p>';
    }  
?>

</body>
</html>