<?
$request = Request::factory('auth/form');
$response = $request->execute();
echo $response;
?>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form id="open_form_auth" action="" method="post">
			<h3>Личный кабинет</h3>
			<p>Имя пользователя и Email: <?=$username?></p>
			<label>
				<span>Старый пароль:</span>
				<input type="password" name="oldpass" id="oldpass" required /><span class="oldpassok" style="display:none"><img src="/img/true.png"></span><span class="oldpasserror" style="display:none"><img src="/img/false.png"></span>
			</label>
			<label>
				<span>Новый пароль:</span>
				<input type="password" name="newpass1" id="newpass1" required />
			</label>
			<label>
				<span>Повторите новый пароль:</span>
				<input type="password" name="newpass2" id="newpass2" required /><span class="newpassmatchesok" style="display:none"><img src="/img/true.png"></span><span class="newpassmatcheserror" style="display:none"><img src="/img/false.png"></span>
			</label>
			<div class="button_wrap">
				<button class="button btn_green" name="btnsubmit">Сохранить новый пароль</button>
			</div>
			<div class="error_view">
				<!-- Вывод сообщения об успешной смене пароля -->
				<?if(isset($newpassok)){?>
					<p style="text-align:center; color:green;">
						Новый пароль успешно сохранен
					</p>
				<?}?>
				<!-- Вывод ошибок валидации при сохранении нового пароля -->
				<? if(isset($errors)){?>
				<?foreach($errors as $item){?>
				<p style="color:red"><?=$item?></p>
				<?}?>
				<?}?>
				<!-- / Вывод ошибок валидации при сохранении нового пароля -->
			</div>
		</form>					
		</div>
	<div class="col-md-4"></div>


	<script type="text/javascript">
	function checkOldPass()
	{
		var oldpass = $("#oldpass").val();

		$.ajax({
		  type: "POST",
		  data: "oldpass=" + oldpass,
		  url: "/ajax/checkOldPass",
		  dataType: "json",
		  success: function(data)
		  {
			if(data.result)
			{
				$(".oldpassok").css('display','inline');
				$(".oldpasserror").css('display','none');
			}
			else
			{
				$(".oldpasserror").css('display','inline');
				$(".oldpassok").css('display','none');
			}
		  }
		})
	}

	function showPass()
	{
		var checked = $("#showpassbtn").attr('checked');

		if(checked == "checked")
		{
			document.getElementById('oldpass').type = 'text';
			document.getElementById('newpass1').type = 'text';
			document.getElementById('newpass2').type = 'text';
		}
		else
		{
			document.getElementById('oldpass').type = 'password';
			document.getElementById('newpass1').type = 'password';
			document.getElementById('newpass2').type = 'password';
		}
	}

	function matchesPass()
	{
		if($("#newpass1").val() == $("#newpass2").val())
		{
			$(".newpassmatchesok").css('display','inline');
			$(".newpassmatcheserror").css('display','none');
		}
		else
		{
			$(".newpassmatcheserror").css('display','inline');
			$(".newpassmatchesok").css('display','none');
		}
	}

	$(document).ready(function(){
		$("#oldpass").blur(checkOldPass);
		$("#showpassbtn").click(showPass);
		$("#newpass2").keyup(matchesPass);
	});
</script>
