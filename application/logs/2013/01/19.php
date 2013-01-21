<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-19 11:03:13 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /home/j/jolie74ru/dev/public_html/application/bootstrap.php:125
2013-01-19 11:03:13 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/bootstrap.php(125): Kohana_Core::modules(Array)
#1 /home/j/jolie74ru/dev/public_html/index.php(102): require('/home/j/jolie74...')
#2 {main} in /home/j/jolie74ru/dev/public_html/application/bootstrap.php:125
2013-01-19 11:03:13 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /home/j/jolie74ru/dev/public_html/application/bootstrap.php:125
2013-01-19 11:03:13 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/bootstrap.php(125): Kohana_Core::modules(Array)
#1 /home/j/jolie74ru/dev/public_html/index.php(102): require('/home/j/jolie74...')
#2 {main} in /home/j/jolie74ru/dev/public_html/application/bootstrap.php:125
2013-01-19 11:19:34 --- EMERGENCY: Cache_Exception [ 0 ]: Failed to load Kohana Cache group: file ~ MODPATH/cache/classes/Kohana/Cache.php [ 127 ] in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php:19
2013-01-19 11:19:34 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php(19): Kohana_Cache::instance('file')
#1 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php(10): Controller_Base->before()
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php:19
2013-01-19 11:20:02 --- EMERGENCY: Cache_Exception [ 0 ]: Failed to load Kohana Cache group: file ~ MODPATH/cache/classes/Kohana/Cache.php [ 127 ] in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php:19
2013-01-19 11:20:02 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php(19): Kohana_Cache::instance('file')
#1 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php(10): Controller_Base->before()
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php:19
2013-01-19 11:22:27 --- EMERGENCY: Cache_Exception [ 0 ]: Failed to load Kohana Cache group: file ~ MODPATH/cache/classes/Kohana/Cache.php [ 127 ] in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php:19
2013-01-19 11:22:27 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php(19): Kohana_Cache::instance()
#1 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php(10): Controller_Base->before()
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php:19
2013-01-19 11:22:28 --- EMERGENCY: Cache_Exception [ 0 ]: Failed to load Kohana Cache group: file ~ MODPATH/cache/classes/Kohana/Cache.php [ 127 ] in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php:19
2013-01-19 11:22:28 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php(19): Kohana_Cache::instance()
#1 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php(10): Controller_Base->before()
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php:19
2013-01-19 11:27:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view index/main/v_main_index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 11:27:03 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('index/main/v_ma...')
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('index/main/v_ma...', NULL)
#2 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index/Main.php(9): Kohana_View::factory('index/main/v_ma...')
#3 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(84): Controller_Index_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 11:28:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view Index/v_base could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 11:28:09 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('Index/v_base')
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('Index/v_base', NULL)
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('Index/v_base')
#3 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php(13): Kohana_Controller_Template->before()
#4 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php(10): Controller_Base->before()
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#8 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 11:28:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view index/main/v_main_index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 11:28:48 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('index/main/v_ma...')
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('index/main/v_ma...', NULL)
#2 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index/Main.php(9): Kohana_View::factory('index/main/v_ma...')
#3 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(84): Controller_Index_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 11:35:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view widgets/index/v_w_topmenu could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 11:35:35 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('widgets/index/v...')
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('widgets/index/v...', NULL)
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('widgets/index/v...')
#3 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Widgets.php(10): Kohana_Controller_Template->before()
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Widgets->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Index_WTopmenu))
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/j/jolie74ru/dev/public_html/application/classes/Widget.php(106): Kohana_Request->execute()
#10 /home/j/jolie74ru/dev/public_html/application/classes/Widget.php(49): Widget->render()
#11 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php(13): Widget::load_index('wtopmenu')
#12 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#15 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#18 {main} in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 11:35:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view widgets/index/v_w_vendors could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 11:35:35 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('widgets/index/v...')
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('widgets/index/v...', NULL)
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('widgets/index/v...')
#3 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Widgets.php(10): Kohana_Controller_Template->before()
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Widgets->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Index_WVendors))
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/j/jolie74ru/dev/public_html/application/classes/Widget.php(106): Kohana_Request->execute()
#10 /home/j/jolie74ru/dev/public_html/application/classes/Widget.php(49): Widget->render()
#11 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php(14): Widget::load_index('wvendors')
#12 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#15 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#18 {main} in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 11:35:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view widgets/index/v_w_alphabar could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 11:35:35 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('widgets/index/v...')
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('widgets/index/v...', NULL)
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('widgets/index/v...')
#3 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Widgets.php(10): Kohana_Controller_Template->before()
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Widgets->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Index_WAlphabar))
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/j/jolie74ru/dev/public_html/application/classes/Widget.php(106): Kohana_Request->execute()
#10 /home/j/jolie74ru/dev/public_html/application/classes/Widget.php(49): Widget->render()
#11 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php(15): Widget::load_index('walphabar')
#12 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#15 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#18 {main} in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 11:35:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view widgets/index/v_w_topproducts could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 11:35:35 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('widgets/index/v...')
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('widgets/index/v...', NULL)
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('widgets/index/v...')
#3 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Widgets.php(10): Kohana_Controller_Template->before()
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Widgets->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Index_WTopproducts))
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/j/jolie74ru/dev/public_html/application/classes/Widget.php(106): Kohana_Request->execute()
#10 /home/j/jolie74ru/dev/public_html/application/classes/Widget.php(49): Widget->render()
#11 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index/Main.php(11): Widget::load_index('wtopproducts')
#12 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(84): Controller_Index_Main->action_index()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#15 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#18 {main} in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 11:36:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-19 11:36:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 11:39:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-19 11:39:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 11:39:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-19 11:39:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 11:43:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-19 11:43:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 11:44:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-19 11:44:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 11:47:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-19 11:47:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 12:16:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-19 12:16:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 12:20:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-19 12:20:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 12:23:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-19 12:23:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 12:23:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth_ORM' not found ~ MODPATH/auth/classes/Kohana/Auth.php [ 37 ] in :
2013-01-19 12:23:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 12:29:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-19 12:29:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 12:30:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-19 12:30:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 12:32:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-19 12:32:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 12:32:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysql' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in :
2013-01-19 12:32:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 12:34:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Category::fulltree() ~ APPPATH/classes/Controller/Widgets/Index/Wtopmenu.php [ 12 ] in :
2013-01-19 12:34:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 12:35:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'ORM_MPTT' not found ~ APPPATH/classes/Model/Category.php [ 3 ] in :
2013-01-19 12:35:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 12:38:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/widgets/index/v_w_topmenu.php [ 11 ] in :
2013-01-19 12:38:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 12:39:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_vendor' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-19 12:39:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 12:43:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_vendor' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-19 12:43:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 12:49:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/widgets/admin/w_menuadmin.php [ 1 ] in :
2013-01-19 12:49:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 12:55:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-01-19 12:55:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 13:01:10 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'admin1' for key 'uniq_username' [ INSERT INTO `hay_users` (`username`, `first_name`, `password`, `email`) VALUES ('admin1', 'Ефимов', 'aade4084ef0a71ea0b9114cc58e8a368166395001964fd62154f6cfc21dbbf72', 'admin1@admin.com') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/j/jolie74ru/dev/public_html/modules/database/classes/Kohana/Database/Query.php:251
2013-01-19 13:01:10 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ha...', false, Array)
#1 /home/j/jolie74ru/dev/public_html/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/j/jolie74ru/dev/public_html/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#3 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index/Auth.php(55): Model_Auth_User->create_user(Array, Array)
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(84): Controller_Index_Auth->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home/j/jolie74ru/dev/public_html/modules/database/classes/Kohana/Database/Query.php:251
2013-01-19 13:25:39 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Widget::load(), called in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php on line 19 and defined ~ APPPATH/classes/Widget.php [ 34 ] in /home/j/jolie74ru/dev/public_html/application/classes/Widget.php:34
2013-01-19 13:25:39 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/classes/Widget.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/j/jolie74...', 34, Array)
#1 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php(19): Widget::load('cart')
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/j/jolie74ru/dev/public_html/application/classes/Widget.php:34
2013-01-19 13:33:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: cart ~ APPPATH/classes/Controller/Index.php [ 27 ] in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php:27
2013-01-19 13:33:11 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/j/jolie74...', 27, Array)
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php:27
2013-01-19 13:37:21 --- EMERGENCY: View_Exception [ 0 ]: The requested view widgets/v_w_cart could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 13:37:21 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('widgets/v_w_car...')
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('widgets/v_w_car...', NULL)
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('widgets/v_w_car...')
#3 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Widgets.php(10): Kohana_Controller_Template->before()
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Widgets->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Index_WCart))
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/j/jolie74ru/dev/public_html/application/classes/Widget.php(106): Kohana_Request->execute()
#10 /home/j/jolie74ru/dev/public_html/application/classes/Widget.php(49): Widget->render()
#11 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php(16): Widget::load_index('wcart')
#12 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#13 [internal function]: Kohana_Controller->execute()
#14 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#15 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#18 {main} in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-19 13:37:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: vendor ~ APPPATH/views/index/catalog/v_catalog_view.php [ 6 ] in /home/j/jolie74ru/dev/public_html/application/views/index/catalog/v_catalog_view.php:6
2013-01-19 13:37:53 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/views/index/catalog/v_catalog_view.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/j/jolie74...', 6, Array)
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(61): include('/home/j/jolie74...')
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/j/jolie74...', Array)
#3 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/j/jolie74ru/dev/public_html/application/views/index/v_base.php(77): Kohana_View->__toString()
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(61): include('/home/j/jolie74...')
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/j/jolie74...', Array)
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#11 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/j/jolie74ru/dev/public_html/application/views/index/catalog/v_catalog_view.php:6
2013-01-19 13:38:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: vendor ~ APPPATH/views/index/catalog/v_catalog_view.php [ 6 ] in /home/j/jolie74ru/dev/public_html/application/views/index/catalog/v_catalog_view.php:6
2013-01-19 13:38:41 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/views/index/catalog/v_catalog_view.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/j/jolie74...', 6, Array)
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(61): include('/home/j/jolie74...')
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/j/jolie74...', Array)
#3 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/j/jolie74ru/dev/public_html/application/views/index/v_base.php(77): Kohana_View->__toString()
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(61): include('/home/j/jolie74...')
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/j/jolie74...', Array)
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#11 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/j/jolie74ru/dev/public_html/application/views/index/catalog/v_catalog_view.php:6
2013-01-19 13:43:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: vendor ~ APPPATH/views/index/catalog/v_catalog_view.php [ 6 ] in /home/j/jolie74ru/dev/public_html/application/views/index/catalog/v_catalog_view.php:6
2013-01-19 13:43:37 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/views/index/catalog/v_catalog_view.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/j/jolie74...', 6, Array)
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(61): include('/home/j/jolie74...')
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/j/jolie74...', Array)
#3 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/j/jolie74ru/dev/public_html/application/views/index/v_base.php(77): Kohana_View->__toString()
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(61): include('/home/j/jolie74...')
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/j/jolie74...', Array)
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Catalog))
#11 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/j/jolie74ru/dev/public_html/application/views/index/catalog/v_catalog_view.php:6
2013-01-19 23:07:02 --- EMERGENCY: ErrorException [ 2 ]: Header may not contain more than a single header, new line detected ~ SYSPATH/classes/Kohana/HTTP/Header.php [ 943 ] in :
2013-01-19 23:07:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'Header may not ...', '/home/j/jolie74...', 943, Array)
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/HTTP/Header.php(943): header('Location: GET c...', true)
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/HTTP/Header.php(910): Kohana_HTTP_Header->_send_headers_to_php(Array, true)
#3 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Response.php(358): Kohana_HTTP_Header->send_headers(Object(Response), true, NULL)
#4 /home/j/jolie74ru/dev/public_html/index.php(119): Kohana_Response->send_headers(true)
#5 {main} in :
2013-01-19 23:38:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function uri() on a non-object ~ APPPATH/classes/Controller/Index/Cart.php [ 83 ] in :
2013-01-19 23:38:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-19 23:41:41 --- EMERGENCY: ErrorException [ 1 ]: Can only throw objects ~ SYSPATH/classes/Kohana/HTTP.php [ 40 ] in :
2013-01-19 23:41:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :