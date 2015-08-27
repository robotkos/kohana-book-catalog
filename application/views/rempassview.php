
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form id="open_form_reg" method="post">
			<div class="regtext">
				<h3>Восстановление забытого пароля</h3>
			</div>
			<label>
				<input type="text" name="email" id="email" placeholder="Email"/><span class="trueimg" style="display:none"><img src="/img/true.png"></span><span class="falseimg" style="display:none"><img src="/img/false.png"></span>
			</label>
			<div class="button_wrap">
				<button class="button btn_red" name="btnsubmit">Отправить</button>
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

		<script type="text/javascript">
			function runajax()
			{
				var email = $("#email").val();
				
				$.ajax({
				  type: "POST",
				  data: "email=" + email,
				  url: "/ajax/emailunique",
				  dataType: "json",
				  success: function(data)
				  {
					if(!data.result)
					{	
						$(".trueimg").css('display','inline');
						$(".falseimg").css('display','none');

					}
					else
					{
						$(".falseimg").css('display','inline');
						$(".trueimg").css('display','none');
					}
				  }
				})
			}
			//ajax запускается когда форма потеряла фокус
			$(document).ready(function(){
				$("#email").blur(runajax); 
			});
		</script>