<?php defined('SYSPATH') or die('No direct script access.');

class Model_Regcode extends ORM {

	public function rules()
	{
		return array(
			'code' => array(
			array('not_empty'),
			array(array($this, 'bad_code')),
			), 
		);
	}

	public function bad_code($code)
	{
		$regcodetemp = ORM::factory('Regcode', array('code'=>$code));

		if($regcodetemp->loaded())
		{
			if($regcodetemp->user_id == NULL)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	//Дизактивация секретного кода
	public function disactive_code($code, $user_id)
	{
		$regcodetemp = ORM::factory('Regcode', array('code'=>$code));
		$regcodetemp->user_id = $user_id;
		$regcodetemp->save();
	}

} // End Welcome
