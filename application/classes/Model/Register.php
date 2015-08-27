<?php defined('SYSPATH') or die('No direct script access.');

class Model_Register 
{

	public function reg($email, $role)
	{

		//$regcode = new Model_Regcode();
		$myuser = new Model_Myuser();

		/*$regcode->code = $regcodevalue;	

		try
		{
			$regcode->check();
		}
		catch(ORM_Validation_Exception $e)
		{
			$this->errors = $e->errors('validation');
			return FALSE;
		}
*/
		//Создание пользователя
		$myuser->username = $email;
		$myuser->email = $email;

		//Генерируем пароль
		$useful = new Model_Useful();
		$genpass = $useful->generatePassword(8);

		//Хеширование пароля
		$auth = Auth::instance();
		$myuser->password = $auth->hash_password($genpass);

		try
		{
			$myuser->save();

				//Узнаем ID пользователя
			$usertemp = ORM::factory('Myuser', array('username'=>$email));
			$adduserid = $usertemp->id;
			
				//Сохранение роли
			$addrole = new Model_Addrole();
			$addrole->user_id = $adduserid;
			$addrole->role_id = $role;
			$addrole->save();

			//Дизактивация секретного кода
			//$regcode->disactive_code($adduserid);

			//Отправка электронной почты
			$from = 'kohana_test@robotko.com.ua';
			$subject = 'Регистрация ОС';
			$message = "Ваш логин: $email Ваш пароль: $genpass";

			$useful->sendemail($email, $from, $subject, $message);

			return TRUE;

		}
		catch(ORM_Validation_Exception $e)
		{
			$this->errors = $e->errors('validation');
			return FALSE;
		}
	}
	//Восстановление забытого пароля
	public function hochuNoviyParol($email)
     {
            $usertemp = ORM::factory('Myuser', array('username'=>$email));
            if(!$usertemp->loaded())
            {
                return FALSE;
            }

            $useful = new Model_Useful();
            $genpass = $useful->generatePassword(18);

            $usertemp->rempass = $genpass;
            $usertemp->save();
            //Отправка эл. почты
            $from = 'kohana_test@robotko.com.ua';
            //$subject = 'Восстановление пароля';
            $subject = Kohana::message('reg', 'subject');

            $data = array('genpass' => $genpass);
            //$message = "Перейдите по ссылке <a href='http://kohana/auth/checkcode/$genpass'>http://kohana/auth/checkcode/$genpass</a>";
            $message = View::factory('email/emailviews', $data);
            $useful->sendemail($email, $from, $subject, $message, TRUE);
            return TRUE;
        }

    public function obnovlenieparolia($code)
     {
     		// получаем с базы строку которая содержит $code

            $usertemp = ORM::factory('Myuser', array('rempass'=>$code));
			var_dump($code);
            if(!$usertemp->loaded())
            {
               return FALSE;
            }

            $useful = new Model_Useful();
            $genpass = $useful->generatePassword(8);

             //Хеширование пароля
             $auth = Auth::instance();
             $usertemp->password = $auth->hash_password($genpass);

             //Очистка кода восстановления
             $usertemp->rempass = NULL;

             $usertemp->save();

             //Отправка эл. почты
            $email = $usertemp->username;

            $from = 'kohana_test@robotko.com.ua';
            $subject = 'Авторизационные данные обновлены';
            $message = "Ваш логин: $email Ваш пароль: $genpass";
            $useful->sendemail($email, $from, $subject, $message, FALSE);

            return TRUE;

        }

}