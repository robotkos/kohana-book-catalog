<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-03 02:33:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Main.php [ 44 ] in file:line
2015-06-03 02:33:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 03:32:08 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant user - assumed 'user' ~ APPPATH/config/database.php [ 23 ] in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 03:32:08 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/config/database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/robotk00/...', 23, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Core.php(829): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/home/robotk00/...')
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#9 /home/robotk00/robotko.com.ua/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#10 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Main.php(27): Kohana_Auth->login('admin', 'admin')
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#17 {main} in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 03:34:21 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant robotk00_user - assumed 'robotk00_user' ~ APPPATH/config/database.php [ 23 ] in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 03:34:21 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/config/database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/robotk00/...', 23, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Core.php(829): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/home/robotk00/...')
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#9 /home/robotk00/robotko.com.ua/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#10 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Main.php(27): Kohana_Auth->login('admin', 'admin')
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#17 {main} in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 03:35:30 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant robotk00_user - assumed 'robotk00_user' ~ APPPATH/config/database.php [ 23 ] in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 03:35:30 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/config/database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/robotk00/...', 23, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Core.php(829): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/home/robotk00/...')
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#9 /home/robotk00/robotko.com.ua/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#10 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Main.php(27): Kohana_Auth->login('admin', 'admin')
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#17 {main} in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 03:42:35 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant robotk00_kohana - assumed 'robotk00_kohana' ~ APPPATH/config/database.php [ 23 ] in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 03:42:35 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/config/database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/robotk00/...', 23, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Core.php(829): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/home/robotk00/...')
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#9 /home/robotk00/robotko.com.ua/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#10 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Main.php(27): Kohana_Auth->login('admin', 'admin')
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#17 {main} in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 03:43:51 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant robotk00_kohana - assumed 'robotk00_kohana' ~ APPPATH/config/database.php [ 23 ] in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 03:43:51 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/config/database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/robotk00/...', 23, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Core.php(829): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/home/robotk00/...')
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#9 /home/robotk00/robotko.com.ua/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#10 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Main.php(27): Kohana_Auth->login('admin', 'admin')
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#17 {main} in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 03:44:03 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant robotk00_kohana - assumed 'robotk00_kohana' ~ APPPATH/config/database.php [ 23 ] in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 03:44:03 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/config/database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/robotk00/...', 23, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Core.php(829): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/home/robotk00/...')
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#9 /home/robotk00/robotko.com.ua/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#10 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Main.php(27): Kohana_Auth->login('admin', 'admin')
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#17 {main} in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 03:54:44 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant robotk00_kohana - assumed 'robotk00_kohana' ~ APPPATH/config/database.php [ 23 ] in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 03:54:44 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/config/database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/robotk00/...', 23, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Core.php(829): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/home/robotk00/...')
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#9 /home/robotk00/robotko.com.ua/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#10 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Main.php(27): Kohana_Auth->login('admin', 'admin')
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#17 {main} in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 03:56:13 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant robotk00_kohana - assumed 'robotk00_kohana' ~ APPPATH/config/database.php [ 23 ] in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 03:56:13 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/config/database.php(23): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/robotk00/...', 23, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Core.php(829): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Core::load('/home/robotk00/...')
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('database')
#4 /home/robotk00/robotko.com.ua/kohana/modules/database/classes/Kohana/Database.php(65): Kohana_Config->load('database')
#5 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(320): Kohana_Database::instance(NULL)
#6 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#9 /home/robotk00/robotko.com.ua/kohana/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#10 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Main.php(27): Kohana_Auth->login('admin', 'admin')
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#14 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#17 {main} in /home/robotk00/robotko.com.ua/kohana/application/config/database.php:23
2015-06-03 07:21:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Auth.php [ 35 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php:35
2015-06-03 07:21:34 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 35, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php:35
2015-06-03 07:24:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: massege ~ APPPATH/views/home.php [ 2 ] in /home/robotk00/robotko.com.ua/kohana/application/views/home.php:2
2015-06-03 07:24:31 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/views/home.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 2, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/robotk00/robotko.com.ua/kohana/application/views/basic.php(32): Kohana_View->__toString()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /home/robotk00/robotko.com.ua/kohana/application/views/home.php:2
2015-06-03 07:24:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: massege ~ APPPATH/views/home.php [ 2 ] in /home/robotk00/robotko.com.ua/kohana/application/views/home.php:2
2015-06-03 07:24:31 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/views/home.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 2, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/robotk00/robotko.com.ua/kohana/application/views/basic.php(32): Kohana_View->__toString()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /home/robotk00/robotko.com.ua/kohana/application/views/home.php:2
2015-06-03 07:38:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 25 ] in file:line
2015-06-03 07:38:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:40:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 25 ] in file:line
2015-06-03 07:40:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:44:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:44:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:44:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:44:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:44:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:44:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:44:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:44:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:44:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:44:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:44:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:44:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:44:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 25 ] in file:line
2015-06-03 07:44:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:45:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:45:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:45:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:45:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:46:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:46:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:51:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:51:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:51:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:51:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:51:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:51:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:51:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:51:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:52:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 25 ] in file:line
2015-06-03 07:52:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:52:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:52:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:52:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:52:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:53:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:53:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:53:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:53:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:55:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Auth.php [ 14 ] in file:line
2015-06-03 07:55:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 07:55:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: url ~ APPPATH/classes/Controller/Auth.php [ 14 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php:14
2015-06-03 07:55:53 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 14, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php:14
2015-06-03 08:40:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$auth' (T_VARIABLE) ~ APPPATH/classes/Mycontroller.php [ 10 ] in file:line
2015-06-03 08:40:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 08:43:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$auth' (T_VARIABLE) ~ APPPATH/classes/Mycontroller.php [ 10 ] in file:line
2015-06-03 08:43:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 08:44:37 --- EMERGENCY: ErrorException [ 1 ]: Class name must be a valid object or a string ~ APPPATH/classes/Mycontroller.php [ 7 ] in file:line
2015-06-03 08:44:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-03 08:46:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: REQUEST_URL ~ APPPATH/classes/Mycontroller.php [ 8 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Mycontroller.php:8
2015-06-03 08:46:48 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Mycontroller.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/home/robotk00/...', 8, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(69): Mycontroller->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Mycontroller.php:8