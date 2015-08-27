
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form id="open_form_auth" method="post">
			<label>
				<span>Логин:</span>
				<input type="text" name="login" required />
			</label>
			<label>
				<span>Пароль:</span>
				<input type="password" name="password" required />
			</label>
			<div class="button_wrap">
				<button class="button btn_green" name="btnsubmit">Войти</button>
				<a href="http://kohana.robotko.com.ua/auth/hochuvspomnit">Забыл пароль?</a>
			</div>
			<div class="error_view">
				<? if(isset($error)) {?>
					<p>Логин или пароль введены <strong>не верно</strong></p>
				<?} ?>
			</div>
		</form>					
		</div>
	<div class="col-md-4"></div>