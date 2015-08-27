<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-30 00:10:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 24 ] in file:line
2015-06-30 00:10:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 00:12:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 24 ] in file:line
2015-06-30 00:12:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 00:23:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 24 ] in file:line
2015-06-30 00:23:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 00:31:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 24 ] in file:line
2015-06-30 00:31:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 00:32:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 24 ] in file:line
2015-06-30 00:32:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 00:34:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 24 ] in file:line
2015-06-30 00:34:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 14:18:33 --- EMERGENCY: Kohana_Exception [ 0 ]: HTML Purifier is required, please run `composer update` ~ MODPATH/purifier/classes/Purifier/Security.php [ 28 ] in /home/robotk00/robotko.com.ua/kohana/modules/purifier/classes/Purifier/Security.php:37
2015-06-30 14:18:33 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/purifier/classes/Purifier/Security.php(37): Purifier_Security::load()
#1 /home/robotk00/robotko.com.ua/kohana/modules/purifier/classes/Purifier/Security.php(80): Purifier_Security::factory()
#2 /home/robotk00/robotko.com.ua/kohana/modules/purifier/classes/Purifier/Security.php(123): Purifier_Security::htmlpurifier()
#3 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Material.php(17): Purifier_Security::xss_clean('<p><strong>rgfr...')
#4 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Admin/Main.php(39): Model_Material->addMaterial('7', '<p><strong>rgfr...')
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /home/robotk00/robotko.com.ua/kohana/modules/purifier/classes/Purifier/Security.php:37
2015-06-30 14:20:17 --- EMERGENCY: Kohana_Exception [ 0 ]: HTML Purifier is required, please run `composer update` ~ MODPATH/purifier/classes/Purifier/Security.php [ 28 ] in /home/robotk00/robotko.com.ua/kohana/modules/purifier/classes/Purifier/Security.php:37
2015-06-30 14:20:17 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/purifier/classes/Purifier/Security.php(37): Purifier_Security::load()
#1 /home/robotk00/robotko.com.ua/kohana/modules/purifier/classes/Purifier/Security.php(80): Purifier_Security::factory()
#2 /home/robotk00/robotko.com.ua/kohana/modules/purifier/classes/Purifier/Security.php(123): Purifier_Security::htmlpurifier()
#3 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Material.php(17): Purifier_Security::xss_clean('<p><strong>rgfr...')
#4 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Admin/Main.php(39): Model_Material->addMaterial('7', '<p><strong>rgfr...')
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Admin_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /home/robotk00/robotko.com.ua/kohana/modules/purifier/classes/Purifier/Security.php:37
2015-06-30 17:22:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: category_info ~ APPPATH/classes/Controller/Materials.php [ 23 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Materials.php:23
2015-06-30 17:22:11 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Materials.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 23, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Materials->action_category()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Materials))
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Materials.php:23
2015-06-30 17:23:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Tag' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-06-30 17:23:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 17:26:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Tag' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-06-30 17:26:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 17:27:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Tag' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-06-30 17:27:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 17:27:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Tag' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-06-30 17:27:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 17:31:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Tag' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-06-30 17:31:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 17:31:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Tag' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-06-30 17:31:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 17:35:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: category_info ~ APPPATH/classes/Controller/Materials.php [ 23 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Materials.php:23
2015-06-30 17:35:24 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Materials.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 23, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Materials->action_category()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Materials))
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Materials.php:23