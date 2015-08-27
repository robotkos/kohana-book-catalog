<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-17 00:26:00 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant level - assumed 'level' ~ APPPATH/classes/Model/Tree.php [ 57 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Tree.php:57
2015-07-17 00:26:00 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Tree.php(57): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/robotk00/...', 57, Array)
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Main.php(15): Model_Tree->getCategoryUrl()
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Tree.php:57
2015-07-17 00:26:19 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::where(), called in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Tree.php on line 57 and defined ~ MODPATH/database/classes/Kohana/Database/Query/Builder/Where.php [ 30 ] in /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database/Query/Builder/Where.php:30
2015-07-17 00:26:19 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database/Query/Builder/Where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/robotk00/...', 30, Array)
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Tree.php(57): Kohana_Database_Query_Builder_Where->where(true)
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Main.php(15): Model_Tree->getCategoryUrl()
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database/Query/Builder/Where.php:30