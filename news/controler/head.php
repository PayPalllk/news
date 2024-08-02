<?php if(isset($_POST)){
    $list = $_POST['list'];
  }else{
    $list = 1;
  }if($list < 1){
    $list = 1;
  }
  $limet = ($list - 1) * 4;
  // echo $limet;
  require_once '../model/connect.php';
  $res_info = $bd->query("SELECT * FROM `news` ORDER BY `date` DESC");
  $result = $bd->query("SELECT * FROM `news` ORDER BY `date` DESC LIMIT 4 OFFSET $limet");
  // $result = $bd->query("SELECT * FROM `news` ORDER BY `date` DESC");
  $num_row = ceil($res_info->num_rows/4);
  if($list > $num_row){
    header('location: ../viev/index.php');
  }
?>