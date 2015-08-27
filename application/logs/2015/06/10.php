<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-10 00:36:36 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant hpass - assumed 'hpass' ~ APPPATH/classes/Model/Register.php [ 37 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php:37
2015-06-10 00:36:36 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(37): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/robotk00/...', 37, Array)
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(53): Model_Register->reg('qq@qq.qq', '1', 1)
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php:37
2015-06-10 11:51:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'return' (T_RETURN) ~ APPPATH/classes/Model/Register.php [ 57 ] in file:line
2015-06-10 11:51:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 11:52:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Useful::sendmail() ~ APPPATH/classes/Model/Register.php [ 55 ] in file:line
2015-06-10 11:52:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 11:55:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Model/Useful.php [ 39 ] in file:line
2015-06-10 11:55:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 12:02:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/email/classes/Email.php [ 34 ] in file:line
2015-06-10 12:02:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line