<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-29 10:38:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Mycontrollerlogin.php [ 11 ] in file:line
2015-06-29 10:38:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 10:50:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/views/accountview.php [ 6 ] in /home/robotk00/robotko.com.ua/kohana/application/views/accountview.php:6
2015-06-29 10:50:03 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/views/accountview.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 6, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/robotk00/robotko.com.ua/kohana/application/views/basic.php(34): Kohana_View->__toString()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /home/robotk00/robotko.com.ua/kohana/application/views/accountview.php:6
2015-06-29 10:51:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/views/accountview.php [ 6 ] in /home/robotk00/robotko.com.ua/kohana/application/views/accountview.php:6
2015-06-29 10:51:24 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/views/accountview.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 6, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/robotk00/robotko.com.ua/kohana/application/views/basic.php(34): Kohana_View->__toString()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /home/robotk00/robotko.com.ua/kohana/application/views/accountview.php:6
2015-06-29 10:51:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/views/accountview.php [ 6 ] in /home/robotk00/robotko.com.ua/kohana/application/views/accountview.php:6
2015-06-29 10:51:48 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/views/accountview.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 6, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/robotk00/robotko.com.ua/kohana/application/views/basic.php(34): Kohana_View->__toString()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Account))
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /home/robotk00/robotko.com.ua/kohana/application/views/accountview.php:6
2015-06-29 11:24:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 11:24:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 11:24:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 11:24:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 11:24:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 11:24:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 11:25:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 11:25:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 11:25:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 11:25:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 11:25:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 11:25:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 11:26:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 11:26:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 11:27:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 11:27:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 13:31:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 13:31:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 13:32:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 13:32:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 13:47:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 13:47:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 13:49:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 27 ] in file:line
2015-06-29 13:49:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 13:51:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 13:51:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 13:53:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 13:53:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 13:54:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 13:54:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 13:54:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 13:54:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 13:54:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 13:54:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 13:54:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 13:54:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 13:55:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 13:55:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 13:55:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 13:55:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 13:56:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 13:56:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 13:56:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 13:56:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 13:56:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2015-06-29 13:56:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line