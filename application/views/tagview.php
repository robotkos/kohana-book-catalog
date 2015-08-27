<div class="col-md-4"></div>
<div class="col-md-4">
	<h3>Содержимое категории <?=$tag['name']?></h3>
	<ul style="padding: 30px;">
	<?if(count($materials)) {?>
		<?foreach($materials as $item){?>
			<li>
				<p><a href="/materials/showcontent/<?=$item['id']?>"><?=$item['name']?></a></p>
				<p><?=$item['content']?></p>
			</li>
		<?}?>
	<?}else{?>
			<p>В выбранной категории нет материалов</p>
	<?}?>
	</ul>
</div>
<div class="col-md-4"></div>