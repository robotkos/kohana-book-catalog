<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" />

	<title>Заголовок</title>
	<meta content="" name="description" />
	<link rel="shortcut icon" href="favicon.png" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="/css/bootstrap/bootstrap-grid-3.3.2.min.css" />
	<link rel="stylesheet" href="/libs/MyFonts/stylesheet.css" />
	<link rel="stylesheet" href="/css/style.css" />
	<link rel="stylesheet" href="/css/media.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-12"></div>
				<div class="col-md-4 col-lg-12">
					<div class="logo">
						<a href="http://kohana.robotko.com.ua/"><h2>КНИЖНЫЙ КАТАЛОГ</h2></a>
					</div>				
				</div>
				<div class="col-md-4 col-lg-12"></div>
			</div>
		</div>
		<!-- Кнопка входа/выхода -->
<?
$request = Request::factory('auth/form');
$response = $request->execute();
echo $response;
?>
<!-- Кнопка входа/выхода -->
	</header>
	<div class="col-md-2 col-sm-12">
		<div class="cat_material_main">
			<ul>
			<?if(isset($categorys)) {?>
						<?foreach($categorys as $item){?>
							<li>
							
					 		
								<a href="/category/showcat/<?=$item['url']?>"><span class="link_mask_h link_mask"><b></b></span>
								<img src="<?=$item['icon_url']?>"/>
								<h4><?=$item['name']?></h4></a>
							</li>
						<?}?>
					<?}else{?>
						<p>Категория не создана</p>
			<?}?>
			</ul>
		</div>
	</div>
	<div class="col-md-10">
		<div class="cat_material">
			<ul>
		<?if(isset($contentpost)) {?>
							<h3>Последние добавленые книги</h3>
							<?foreach($contentpost as $item){?>
							<li>
							<a href="/materials/showcontent/<?=$item['id']?>">
								<span class="link_mask_h link_mask"><b></b></span>
							</a>
							<img src="<?=$item['material_image']?>"/>
							<h4><?=$item['name']?></h4>
							</li>
						<?}?>
		<?}else{?>

						<?php echo $content ?>
			<?}?>
			</ul>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Designed by R.S.</h3>
				</div>
			</div>
		</div>
	</footer>
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	
	<script src="/libs/jquery/jquery-1.11.2.min.js"></script>

	<script src="/libs/jquery/common.js"></script>
	<script src="libs/modernizr/modernizr.js"></script>
	<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>

	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
	
</body>
</html>