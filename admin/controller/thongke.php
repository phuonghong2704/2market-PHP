<?php
  include_once 'model/danhmuc.php';
  include_once 'model/thongke.php';
  $action='index';
  if(isset($_GET['action']))
  {
    $action=$_GET['action'];
  }
  switch($action)
{
        case 'index':
        $items=getTotaBydDanhMuc();
        include 'view/thongke/index.php';
      break;
        case 'chart':
        $items=getTotaBydDanhMuc();
        include 'view/thongke/chart.php';
      break;
}
?>