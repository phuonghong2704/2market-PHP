<?php
   include_once 'home.php';
   include_once 'connect.php';
   include_once 'database.php';
   date_default_timezone_set('Asia/Ho_Chi_Minh');
   function addToCart($id)
   {
   //lay thong tin san pham can them vao gio hang
   $product=getProductByIdInCart($id);
   $bool=false;
   $i=0;
   if(!isset($_SESSION['carts']))
   {
       $_SESSION['carts']=array( '0'=> array("id"=>$id,"TenSP"=> $product['TenSP'], "Gia"=> $product['Gia'], "image_link"=> $product['image_link'],"quantity"=>1));
   }
   else 
   {
     foreach ($_SESSION['carts'] as $item)
     {
       if($item['id']==$id)
       {
        array_splice($_SESSION['carts'],$i,1,array(array("id"=>$id,"TenSP"=> $product['TenSP'], "Gia"=> $product['Gia'],"image_link"=> $product['image_link'],"quantity"=>$item['quantity']+1)));
         $bool=true;
       }
       $i++;
     }
     if($bool==false)
     {
       array_push($_SESSION['carts'],array("id"=>$id,"TenSP"=> $product['TenSP'], "Gia"=> $product['Gia'],"image_link"=> $product['image_link'],"quantity"=>1));
     }
   }
}
?>