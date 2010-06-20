<?php if(isset($getDetails) && !empty($getDetails)):?>
<?php foreach($getDetails as $d):?>
<div class="mainContent">
    <h1 class="borBot">Individualna putovanja</h1>
    <h3><?php echo $d['title'];?></h3>
    <p><?php echo $d['content'];?></p>
</div>
<?php endforeach;?>
<?php endif;?>