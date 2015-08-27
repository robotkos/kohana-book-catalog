<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-14 00:38:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: url ~ APPPATH/classes/Controller/Main.php [ 13 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Main.php:13
2015-07-14 00:38:07 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Main.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 13, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Main.php:13