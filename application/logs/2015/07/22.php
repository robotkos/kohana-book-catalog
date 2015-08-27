<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-22 00:40:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The material_image property does not exist in the Model_Tree class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:603
2015-07-22 00:40:09 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('material_image')
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Material.php(57): Kohana_ORM->__get('material_image')
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Materials.php(37): Model_Material->showMaterialById('27')
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Materials->action_showcontent()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Materials))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:603
2015-07-22 00:42:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH/views/contentview.php [ 10 ] in /home/robotk00/robotko.com.ua/kohana/application/views/contentview.php:10
2015-07-22 00:42:19 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/views/contentview.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 10, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/robotk00/robotko.com.ua/kohana/application/views/basic.php(34): Kohana_View->__toString()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(62): include('/home/robotk00/...')
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/robotk00/...', Array)
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Materials))
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /home/robotk00/robotko.com.ua/kohana/application/views/contentview.php:10