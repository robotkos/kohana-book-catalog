<? if(isset($errors)){?>
<?foreach($errors as $item){?>
<p style="color:red"><?=$item?></p>
<?}?>
<?}?>
	<div class="col-md-4"></div>
	<div class="col-md-4">
	<h3><tt>СОЗДАТЬ</tt> КАТЕГОРИЮ</h3>
	    <form method="post" action="">
	    		<select name="parentId" class="">
		            <?foreach($categories as $item) {?>
		            <option value="<?=$item['id']?>"><?=str_repeat('&nbsp;', 4*$item['level']).htmlspecialchars($item['name'])?></option>
		            <?}?>
	       	  	</select>
	        
	        <input type="text" name="categoryName" placeholder="Имя категории">
	        <input type="text" name="url" placeholder="URL категории">
	        <input type="text" name="categoryimage" placeholder="Путь к иконке">
	        <input class="button btn_green" type="submit" value="Создать" name="btnsubmit">
	    </form>
		
		<div class="addmaterial">
			    <h3><tt>СОЗДАТЬ</tt> МАТЕРИАЛ</h3>
				<form action="" method="post">
				<select name="categoryId">
		            <?foreach($categories as $item) {?>
		            <option value="<?=$item['id']?>"><?=str_repeat('&nbsp;', 4*$item['level']).htmlspecialchars($item['name'])?></option>
		            <?}?>
		        </select>
		    <input type="text" name="name" placeholder="Имя материала">
		    <input type="text" name="material_image" placeholder="Изображение материала">
			<textarea name="content" id="editor"></textarea>
			<input class="button btn_green" type="submit" value="Сохранить" name="materialsavebtn">
			</form>
		</div>
	</div>
	<div class="col-md-4"></div>

<script type="text/javascript">
	window.onload = function()
	{
		CKEDITOR.replace( 'editor' );
	};
</script>