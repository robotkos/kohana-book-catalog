<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-02 15:07:22 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Model_Register::reg(), called in /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php on line 73 and defined ~ APPPATH/classes/Model/Register.php [ 6 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php:6
2015-08-02 15:07:22 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(6): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/robotk00/...', 6, Array)
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(73): Model_Register->reg('dd@rr.rr', 1)
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php:6
2015-08-02 15:12:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: regcodevalue ~ APPPATH/classes/Model/Register.php [ 12 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php:12
2015-08-02 15:12:33 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 12, Array)
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(73): Model_Register->reg('dd@rr.rr', 1)
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php:12
2015-08-02 15:13:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: regcodevalue ~ APPPATH/classes/Model/Register.php [ 51 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php:51
2015-08-02 15:13:00 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/robotk00/...', 51, Array)
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(73): Model_Register->reg('dd@rr.rr', 1)
#2 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php:51
2015-08-02 15:14:51 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Model_Regcode::disactive_code(), called in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php on line 51 and defined ~ APPPATH/classes/Model/Regcode.php [ 36 ] in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Regcode.php:36
2015-08-02 15:14:51 --- DEBUG: #0 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Regcode.php(36): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/robotk00/...', 36, Array)
#1 /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Register.php(51): Model_Regcode->disactive_code('36')
#2 /home/robotk00/robotko.com.ua/kohana/application/classes/Controller/Auth.php(73): Model_Register->reg('tppp@mai.ru', 1)
#3 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Controller.php(84): Controller_Auth->action_reg()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/robotk00/robotko.com.ua/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/robotk00/robotko.com.ua/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/robotk00/robotko.com.ua/kohana/application/classes/Model/Regcode.php:36