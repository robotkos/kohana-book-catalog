<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-15 00:01:20 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 5 for Model_Useful::sendemail(), called in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php on line 58 and defined ~ APPPATH/classes/Model/Useful.php [ 31 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Useful.php:31
2015-06-15 00:01:20 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Useful.php(31): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/robotk00/...', 31, Array)
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(58): Model_Useful->sendemail('robotkos@gmail....', 'kohana_test@rob...', '\xD0\xA0\xD0\xB5\xD0\xB3\xD0\xB8\xD1\x81\xD1\x82\xD1\x80\xD0...', '\xD0\x92\xD0\xB0\xD1\x88 \xD0\xBB\xD0\xBE\xD0\xB3\xD0\xB8...')
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(51): Model_Register->reg('robotkos@gmail....', '2', 1)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Useful.php:31
2015-06-15 00:09:08 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:1362
2015-06-15 00:09:08 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->update(NULL)
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(111): Kohana_ORM->save()
#3 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(110): Model_Register->obnovlenieparolia(NULL)
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_checkcode()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:1362
2015-06-15 00:25:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'subject' (T_STRING) ~ APPPATH/classes/Model/Register.php [ 86 ] in file:line
2015-06-15 00:25:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-15 00:27:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'array' (T_ARRAY) ~ APPPATH/messages/reg.php [ 3 ] in file:line
2015-06-15 00:27:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-15 00:28:15 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:1362
2015-06-15 00:28:15 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->update(NULL)
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(112): Kohana_ORM->save()
#3 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(110): Model_Register->obnovlenieparolia(NULL)
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_checkcode()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:1362
2015-06-15 00:38:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$useful' (T_VARIABLE) ~ APPPATH/classes/Model/Register.php [ 91 ] in file:line
2015-06-15 00:38:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line