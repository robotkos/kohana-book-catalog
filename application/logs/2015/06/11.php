<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-11 00:06:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_myuser' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-06-11 00:06:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 00:13:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_myuser' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-06-11 00:13:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 00:17:10 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:1362
2015-06-11 00:17:10 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->update(NULL)
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(82): Kohana_ORM->save()
#3 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(90): Model_Register->hochuNoviyParol('robotkos@gmail....')
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hochuvspomnit()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:1362
2015-06-11 14:58:03 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:1362
2015-06-11 14:58:03 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->update(NULL)
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(82): Kohana_ORM->save()
#3 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(90): Model_Register->hochuNoviyParol('robotkos@gmail....')
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_hochuvspomnit()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:1362
2015-06-11 15:17:36 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 5 for Model_Useful::sendemail(), called in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php on line 58 and defined ~ APPPATH/classes/Model/Useful.php [ 31 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Useful.php:31
2015-06-11 15:17:36 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Useful.php(31): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/robotk00/...', 31, Array)
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(58): Model_Useful->sendemail('dsdd@rr.rr', 'kohana_test@rob...', '\xD0\xA0\xD0\xB5\xD0\xB3\xD0\xB8\xD1\x81\xD1\x82\xD1\x80\xD0...', '\xD0\x92\xD0\xB0\xD1\x88 \xD0\xBB\xD0\xBE\xD0\xB3\xD0\xB8...')
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(51): Model_Register->reg('dsdd@rr.rr', '2', 1)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Useful.php:31
2015-06-11 15:53:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Auth.php [ 59 ] in file:line
2015-06-11 15:53:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 15:54:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function errors() on a non-object ~ APPPATH/classes/Controller/Auth.php [ 58 ] in file:line
2015-06-11 15:54:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 16:09:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/messages/validation.php [ 7 ] in file:line
2015-06-11 16:09:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 16:11:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/messages/validation.php [ 7 ] in file:line
2015-06-11 16:11:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 16:11:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/messages/validation.php [ 7 ] in file:line
2015-06-11 16:11:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 16:12:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/messages/validation.php [ 7 ] in file:line
2015-06-11 16:12:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line