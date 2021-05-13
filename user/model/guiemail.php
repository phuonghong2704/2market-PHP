<?php
 include ('model/database.php');
  

    function checkEmail($email)
    {
        $DBH=getConnection();
        $query="SELECT * FROM admin where email='$email'";
        $STH=$DBH->query($query);
        $rows_affected=$STH->rowCount();//tra ve so dong
        if($rows_affected==0)
        {
            return query($query);
        }
        return query($query);
    }
        //Thay đổi pass
        function changePassword($email,&$pass_new1){
            $DBH=getConnection();
            $pass_new1=random_int(100000,99999999);
            $pass_new1=substr($pass_new1,0,8);
            $pass_new2=md5($pass_new1);
            $query="UPDATE admin SET password='{$pass_new2}' WHERE email='$email'";
            $STH=$DBH->query($query);
        }
    // function getdangki($username,$lastname,$email,$password,$password1)
    // {
    //     $sql="INSERT into khach_hang (ma_kh,username,ho_ten,email,password,xn_matkhau) values(null'$username','$lastname','$email','$password','$password1')";
    //     execute($sql);
    // }
    ?>