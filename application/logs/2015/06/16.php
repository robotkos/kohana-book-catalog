<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-16 00:00:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/Controller/Admin/Main.php [ 12 ] in file:line
2015-06-16 00:00:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-16 00:02:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'NSTree' (T_STRING) ~ APPPATH/classes/Model/Category.php [ 10 ] in file:line
2015-06-16 00:02:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-16 00:04:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'NSTree' not found ~ APPPATH/classes/Model/Category.php [ 10 ] in file:line
2015-06-16 00:04:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-16 00:04:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'NSTree' not found ~ APPPATH/classes/Model/Category.php [ 10 ] in file:line
2015-06-16 00:04:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-16 00:06:12 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'robotk00_kohana.tree' doesn't exist [ SELECT *
				FROM `tree`
				ORDER BY left_key ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-06-16 00:06:12 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *\n\t\t\t\tFR...', false, Array)
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/NSTree.php(100): Kohana_Database_Query->execute()
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Category.php(15): NSTree->getTree()
#3 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Admin/Main.php(11): Model_Category->getTree()
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-06-16 00:35:49 --- EMERGENCY: ReflectionException [ 0 ]: Function check_id() does not exist ~ SYSPATH/classes/Kohana/Validation.php [ 396 ] in /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Validation.php:396
2015-06-16 00:35:49 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Validation.php(396): ReflectionFunction->__construct('check_id')
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Category.php(31): Kohana_Validation->check()
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Admin/Main.php(19): Model_Category->catInsert('1', Array)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Validation.php:396
2015-06-16 00:38:50 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("*")' in 'field list' [ SELECT `COUNT("*")` AS `total_count` FROM `tree` WHERE `id` = 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-06-16 00:38:50 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Valid.php(14): Kohana_Database_Query->execute()
#2 [internal function]: Valid::check_id('1', 'tree')
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Category.php(31): Kohana_Validation->check()
#5 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Admin/Main.php(19): Model_Category->catInsert('1', Array)
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin_Main->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#9 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-06-16 00:44:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Admin/Main.php [ 23 ] in file:line
2015-06-16 00:44:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-16 14:35:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/messages/catErrors.php [ 9 ] in file:line
2015-06-16 14:35:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-16 15:44:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Material' not found ~ APPPATH/classes/Controller/Materials.php [ 12 ] in file:line
2015-06-16 15:44:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-16 15:44:59 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function var_damp() ~ APPPATH/classes/Model/Category.php [ 65 ] in file:line
2015-06-16 15:44:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line