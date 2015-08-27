<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-09 04:43:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'FALSE' (T_STRING) ~ APPPATH/classes/Model/Register.php [ 36 ] in file:line
2015-06-09 04:43:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-09 14:17:42 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Model/Register.php [ 12 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php:12
2015-06-09 14:17:42 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(12): Kohana_Core::error_handler(2, 'Creating defaul...', '/home/robotk00/...', 12, Array)
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(53): Model_Register->reg('ftf@ll.ru', 'jil', 1)
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php:12
2015-06-09 14:26:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-06-09 14:26:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-09 15:20:11 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Myuser' does not have a method 'username_unique' ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2015-06-09 15:20:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/home/robotk00/...', 377, Array)
#1 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#3 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#4 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#5 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(19): Kohana_ORM->save()
#6 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(53): Model_Register->reg('i@i.ii', 'i', 1)
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#10 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2015-06-09 15:47:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The code property does not exist in the Model_Regcode class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 15:47:38 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('code', '')
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(12): Kohana_ORM->__set('code', '')
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(53): Model_Register->reg('rr@rr.rr', '', 1)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 15:51:12 --- EMERGENCY: Kohana_Exception [ 0 ]: The code property does not exist in the Model_Regcode class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 15:51:12 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('code', '')
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(12): Kohana_ORM->__set('code', '')
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(53): Model_Register->reg('dd@rr.rr', '', 1)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 15:53:01 --- EMERGENCY: Kohana_Exception [ 0 ]: The code property does not exist in the Model_Regcode class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 15:53:01 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('code', '')
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(12): Kohana_ORM->__set('code', '')
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(53): Model_Register->reg('ww@rr.ru', '', 1)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 15:56:53 --- EMERGENCY: Kohana_Exception [ 0 ]: The code property does not exist in the Model_Regcode class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 15:56:53 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('code', '')
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(12): Kohana_ORM->__set('code', '')
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(53): Model_Register->reg('i@i.ii', '', 1)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 16:00:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The code property does not exist in the Model_Regcode class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 16:00:02 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('code', '')
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(12): Kohana_ORM->__set('code', '')
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(53): Model_Register->reg('dd@rr.rr', '', 1)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 16:00:11 --- EMERGENCY: Kohana_Exception [ 0 ]: The code property does not exist in the Model_Regcode class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 16:00:11 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('code', 'dd')
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(12): Kohana_ORM->__set('code', 'dd')
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(53): Model_Register->reg('i@i.ii', 'dd', 1)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 23:44:48 --- EMERGENCY: Kohana_Exception [ 0 ]: The code property does not exist in the Model_Regcode class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 23:44:48 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('code', 'l')
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(12): Kohana_ORM->__set('code', 'l')
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(53): Model_Register->reg('dd@rr.rr', 'l', 1)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 23:50:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The code property does not exist in the Model_Regcode class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 23:50:33 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('code', 'g')
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(12): Kohana_ORM->__set('code', 'g')
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(53): Model_Register->reg('dd@rr.rr', 'g', 1)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 23:51:03 --- EMERGENCY: Kohana_Exception [ 0 ]: The code property does not exist in the Model_Regcode class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702
2015-06-09 23:51:03 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('code', 'j')
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(12): Kohana_ORM->__set('code', 'j')
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(53): Model_Register->reg('dd@rr.rr', 'j', 1)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/robotk00/robotko.com.ua/kohana/modules/orm/classes/Kohana/ORM.php:702