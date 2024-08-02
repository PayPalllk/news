<div class="conteiner">
<?php 
  while($res = $result->fetch_assoc()){
?>
<form action='about.php' method='post' class="box">
    <input type="hidden" name='title' value='<?=$res['title']?>'>
    <input type="hidden" name='list' value='<?=$list?>'>
  <div class="info-box">
    <div class="data"><?=date("d.m.Y",strtotime($res['date']))?></div>
    <h3><?=$res['title']?></h3>
    <?=$res['announce']?>
  </div>
  <button class="about" type='submit'>ПОДРОБНЕЕ →</button>
  </form>
<?php 

}
?>
</div>
<div class="line">
  <?php 
  if($list > 1){
    $n = $list - 1;
    if($list > 2){?>
    <form action='../viev/index.php' method='post'>
    <input type="hidden" name="list" value='1'>
    <button <?php if($n == $list){?>class='check'<?php }?> type='submit'>1</button>
  </form>
  <p>...</p>
  <?php
  if($list == $num_row){?>
    <form action='../viev/index.php' method='post'>
    <input type="hidden" name="list" value='<?=$list-2?>'>
    <button type='submit'><?=$list-2?></button>
  </form>
  <?php
  }
  }
  }else{
    $n = 1;
  }
  for($i = 1; $n <= $num_row && $i <= 3; $i++ && $n++){
  ?>
  <form action='../viev/index.php' method='post'>
    <input type="hidden" name="list" value='<?=$n?>'>
    <button <?php if($n == $list){?>class='check'<?php }?> type='submit'><?=$n?></button>
  </form>
  <?php }
  if($list < $num_row){?>
  <form action='../viev/index.php' method="post">
    <input type="hidden" name="list" value='<?=$list+1?>'>
    <button type='submit' class="button_last">→</button>
  </form>
  <?php } ?>
</div>