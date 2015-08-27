
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h3>Восстановление пароля</h3>
		<? if(isset($error)) {?>
		<p>Пароль восстановить не удалось.</p>
		<?}?>
		<? if(isset($ok)) {?>
		<p>Пароль был отправлен на Ваш Email.</p>
		<?}?>
	</div>
	<div class="col-md-4"></div>