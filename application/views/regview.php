
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form id="open_form_reg" method="post">
			<div class="regtext">
				<h3>Регистрация нового пользователя</h3>
			</div>
			<label>
				<input id="foo" type="text" name="email" placeholder="Email"/>
			</label>
			<!-- Регистрационный код
			<label>
				<input id="foo" type="text" name="regcodevalue" placeholder="Секретный код"/>
			</label>
			 -->
			<div class="button_wrap">
				<button class="button btn_red" name="btnsubmit">зарегистрироваться</button>
			</div>
			<div class="error_view">
				<? if(isset($regok)) {?>
					<p>Регистрация прошла успешно</p>
				<?} ?>
				<? if(isset($errors)) {?>
					<?foreach($errors as $item) {?>
							<p><?=$item?></p>
					<?} ?>
				<?}?>
			</div>
		</form>					
	</div>
	<div class="col-md-4"></div>