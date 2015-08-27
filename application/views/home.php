<?
$request = Request::factory('auth/form');
$response = $request->execute();
echo $response;
?>
		<div class="col-md-12">
			<div class="cat_material_main">
				<ul>
					<?if(isset($posts)) {?>
								<?foreach($posts as $item){?>
										<li>
											<a href="/materials/showcontent/<?=$item['id']?>">
												<span class="link_mask_h link_mask"><b></b></span>
											</a>
											<img src="<?=$item['material_image']?>"/>
											<h4><?=$item['name']?></h4>
										</li>
								<?}?>
							<?}else{?>
								<p>Категория не создана</p>
					<?}?>
				</ul>
			</div>
		</div>


