<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-01 15:58:08 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Test.php [ 9 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Test.php:9
2015-06-01 15:58:08 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Test.php(9): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/robotk00/...', 9, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Test.php:9
2015-06-01 23:35:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Views' not found ~ APPPATH/classes/Controller/Main.php [ 9 ] in file:line
2015-06-01 23:35:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line