<? if(isset($errors)){?>
<?foreach($errors as $item){?>
<p style="color:red"><?=$item?></p>
<?}?>
<?}?>
	<div class="col-md-4">
		<div class="imgview">
			<img src="<?=$material_image?>"/>
		</div>
	</div>
	<div class="col-md-4">
		<div class="singlepost">
			<p><b>Информация по выбранному материалу.</b></p>
			<ul>
				<li>Содержимое книги: <?=$content?></li>
				<li>Категория: <?=$category?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-4"></div>