<?php
include ('user/model/home.php');
include ('user/model/connect.php');
$content = $_GET['content'];
$product = getproduct();
$sp = '';
if($content ==""){
    $sp="";
}else{
    foreach($product as $p){
        if(strlen(strpos($p['TenSP'],$content))>0){
            $sp .= '<li><a href="index.php?ctrl=home&action=more&id='.$p["idSP"].'">'.$p["TenSP"].'</a></li>';
        }
    }
}
echo $sp;  