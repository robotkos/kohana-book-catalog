<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-04 14:52:38 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:1362
2015-08-04 14:52:38 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->update(NULL)
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(115): Kohana_ORM->save()
#3 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(133): Model_Register->obnovlenieparolia(NULL)
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_checkcode()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:1362