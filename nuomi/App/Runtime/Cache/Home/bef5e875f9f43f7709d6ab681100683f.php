<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/nuomi/Public/home/css/css.css">
<div class="valuation-content">
	<ul>
    <?php if(is_array($info)): foreach($info as $key=>$vol): ?><div class="photo">
     	<img src="/nuomi/Public/Uploads/user/<?php echo ($vol["image"]); ?>?id/<?php echo rand();?>"/>
        <span><?php echo ($vol["username"]); ?></span>
      </div>
      <?php if(is_array($vol['comt'])): foreach($vol['comt'] as $key=>$vos): ?><div class="time">
				<?php if($vos["stute"] == 1): ?>追评：<?php endif; ?>
				<?php echo date('Y-m-d H:i:s',$vos['comtime']);?> 说：
			<div class="publish-star">

				<div id="pub-star" class="pub-star">
					<!-- {} -->
					<?php if($vos['goodpoint'] == 1): ?><div style="width:14px" class="light-star"></div>
					 <?php elseif($vos['goodpoint'] == 2): ?>
					 	<div style="width:28px" class="light-star"></div> 
					 <?php elseif($vos['goodpoint'] == 3): ?>
					 	<div style="width:42px" class="light-star"></div>
					  <?php elseif($vos['goodpoint'] == 4): ?>
					  	<div style="width:56px" class="light-star"></div> 
					  <?php elseif($vos['goodpoint'] == 5): ?>
					  	<div style="width:70px" class="light-star"></div><?php endif; ?>
				</div>
			</div>
		    </div>
            <li>
            	<?php echo ($vos['content']); ?>
            </li><?php endforeach; endif; endforeach; endif; ?>

	</ul>
</div>
<!--分页-->

<div class="uipage" style="height:25px;margin-top:5px;text-align:right">
		<?php echo ($page); ?>
</div>
<script>
		$('.pagination').addClass('Yahoo');
		$('.pagination li').css('float','left');
</script>