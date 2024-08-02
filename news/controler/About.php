<?php $res = $bd->query("SELECT * FROM `news` WHERE `title` = '$title'")->fetch_assoc();
$list = $_POST['list'];
if(!isset($list)){
  $list = 1;
}
?>
<div class='row'>
<p><a href="../viev/index.php">Главная </a>/ </p><p class='dop'><?=$res['title']?></p>
</div>
<h1><?=$res['title']?></h1>
<div class="data"><?=date("d.m.Y",strtotime($res['date']))?></div>
<div class='content'>
<div class='left'>
<h2><?=$res['announce']?></h2>
<span><?=$res['content'];?></span>
<form action="../viev/index.php" method="post">
  <input type="hidden" name="list" value='<?=$list?>'>
  <button type='submit'>← НАЗАД К НОВОСТЯМ</button>
</form>
</div>
<div>
<img src="../images/<?=$res['image']?>">
</div>
</div>
<!-- <button onclick="document.location.href='../viev/index.php'">← НАЗАД К НОВОСТЯМ</button> -->