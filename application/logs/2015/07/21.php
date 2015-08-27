<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-21 16:08:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/basic.php [ 51 ] in /home/robotk00/robotko.com.ua/kohana/application/views/basic.php:51
2015-07-21 16:08:40 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/views/basic.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 51, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/robotk00/robotko.com.ua/kohana/application/views/basic.php(51): Kohana_View->__toString()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /home/robotk00/robotko.com.ua/kohana/application/views/basic.php:51
2015-07-21 16:18:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/basic.php [ 34 ] in /home/robotk00/robotko.com.ua/kohana/application/views/basic.php:34
2015-07-21 16:18:00 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/views/basic.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 34, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/robotk00/robotko.com.ua/kohana/application/views/basic.php(34): Kohana_View->__toString()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /home/robotk00/robotko.com.ua/kohana/application/views/basic.php:34