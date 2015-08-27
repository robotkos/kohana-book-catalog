<div class="col-md-12">

	<h3>Содержимое категории <strong><?=$category['name']?></strong></h3>
	<div class="cat_material">
		<ul>
		<?if(count($materials)) {?>
			<?foreach($materials as $item){?>
				<li>
					<a href="/materials/showcontent/<?=$item['id']?>">
						<span class="link_mask_h link_mask"><b></b></span>
					</a>
					<img src="<?=$item['material_image']?>"/>
					<h4><?=$item['name']?></h4>
				</li>
			<?}?>
		<?}else{?>
				<p>В выбранной категории нет материалов</p>
		<?}?>
		
		</ul>
	</div>
</div>