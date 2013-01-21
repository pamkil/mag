<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-21 08:57:55 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: style ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index/Catalog.php:13
2013-01-21 08:57:55 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index/Catalog.php(13): Kohana_View->__get('style')
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Index_Catalog->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index/Catalog.php:13
2013-01-21 09:19:02 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Widget::load(), called in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index/Account.php on line 13 and defined ~ APPPATH/classes/Widget.php [ 34 ] in /home/j/jolie74ru/dev/public_html/application/classes/Widget.php:34
2013-01-21 09:19:02 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/classes/Widget.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/j/jolie74...', 34, Array)
#1 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index/Account.php(13): Widget::load('menuaccount')
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Index_Account->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Account))
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/j/jolie74ru/dev/public_html/application/classes/Widget.php:34