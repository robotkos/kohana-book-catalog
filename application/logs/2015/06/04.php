<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-04 13:29:42 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '123454321' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('123454321', '123454321', '12345') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-06-04 13:29:42 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(15): Kohana_ORM->save()
#4 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(53): Model_Register->reg('123454321', 'r')
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database/Query.php:251
2015-06-04 23:14:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2015-06-04 23:14:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-04 23:14:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2015-06-04 23:14:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-04 23:18:59 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2015-06-04 23:18:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-04 23:35:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2015-06-04 23:35:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line