<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-07 00:30:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH/classes/Model/Material.php [ 55 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Material.php:55
2015-07-07 00:30:41 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Material.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 55, Array)
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Materials.php(37): Model_Material->showMaterialById('16')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Materials->action_showcontent()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Materials))
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Material.php:55