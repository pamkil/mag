<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-20 00:00:13 --- EMERGENCY: ErrorException [ 1 ]: Can only throw objects ~ SYSPATH/classes/Kohana/HTTP.php [ 40 ] in :
2013-01-20 00:00:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 00:55:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function go_back() ~ APPPATH/classes/Controller/Index/Cart.php [ 108 ] in :
2013-01-20 00:55:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 00:56:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function go_back() ~ APPPATH/classes/Controller/Index/Cart.php [ 108 ] in :
2013-01-20 00:56:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 00:56:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH/classes/Controller/Base.php [ 50 ] in :
2013-01-20 00:56:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 00:59:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Validation::url() ~ APPPATH/classes/Controller/Base.php [ 50 ] in :
2013-01-20 00:59:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 01:02:20 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Request::$referrer ~ APPPATH/classes/Controller/Base.php [ 50 ] in :
2013-01-20 01:02:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 01:07:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH/classes/Controller/Base.php [ 57 ] in :
2013-01-20 01:07:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 01:09:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Base.php [ 58 ] in :
2013-01-20 01:09:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 01:12:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Base.php [ 58 ] in :
2013-01-20 01:12:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 01:12:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Base.php [ 58 ] in :
2013-01-20 01:12:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 01:13:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Base.php [ 58 ] in :
2013-01-20 01:13:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 01:14:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Base.php [ 58 ] in :
2013-01-20 01:14:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 01:14:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/Controller/Base.php [ 58 ] in :
2013-01-20 01:14:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 01:17:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/Controller/Base.php [ 58 ] in :
2013-01-20 01:17:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 01:21:57 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function redirect() on a non-object ~ APPPATH/classes/Controller/Base.php [ 58 ] in :
2013-01-20 01:21:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 01:28:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::redirect() ~ APPPATH/classes/Controller/Base.php [ 51 ] in :
2013-01-20 01:28:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 02:31:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 7 ] in :
2013-01-20 02:31:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 02:36:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Ajax_AjaxCart::$session ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 15 ] in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Ajax/Ajaxcart.php:15
2013-01-20 02:36:37 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Ajax/Ajaxcart.php(15): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/j/jolie74...', 15, Array)
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(84): Controller_Ajax_AjaxCart->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_AjaxCart))
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Ajax/Ajaxcart.php:15
2013-01-20 02:38:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-20 02:38:03 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php(13): Kohana_Controller_Template->before()
#4 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Ajax/Ajaxcart.php(9): Controller_Base->before()
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Ajax_AjaxCart->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_AjaxCart))
#8 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-20 02:39:23 --- EMERGENCY: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-20 02:39:23 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('')
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('', NULL)
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('')
#3 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php(13): Kohana_Controller_Template->before()
#4 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Ajax/Ajaxcart.php(9): Controller_Base->before()
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Ajax_AjaxCart->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_AjaxCart))
#8 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-20 02:40:12 --- EMERGENCY: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-20 02:40:12 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('')
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('', NULL)
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('')
#3 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php(13): Kohana_Controller_Template->before()
#4 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Ajax/Ajaxcart.php(9): Controller_Base->before()
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Ajax_AjaxCart->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_AjaxCart))
#8 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/View.php:137
2013-01-20 02:41:08 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Base.php [ 25 ] in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php:25
2013-01-20 02:41:08 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php(25): Kohana_Core::error_handler(2048, 'Creating defaul...', '/home/j/jolie74...', 25, Array)
#1 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Ajax/Ajaxcart.php(10): Controller_Base->before()
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Ajax_AjaxCart->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_AjaxCart))
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Base.php:25
2013-01-20 02:43:14 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Session.php:125
2013-01-20 02:43:14 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(Array, NULL)
#2 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Ajax/Ajaxcart.php(12): Kohana_Session::instance()
#3 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Ajax_AjaxCart->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_AjaxCart))
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Session.php:125
2013-01-20 02:55:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: his ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 97 ] in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Ajax/Ajaxcart.php:97
2013-01-20 02:55:12 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Ajax/Ajaxcart.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/j/jolie74...', 97, Array)
#1 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(84): Controller_Ajax_AjaxCart->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_AjaxCart))
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Ajax/Ajaxcart.php:97
2013-01-20 04:00:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 80 ] in :
2013-01-20 04:00:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 04:01:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 80 ] in :
2013-01-20 04:01:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 04:02:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 80 ] in :
2013-01-20 04:02:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 04:03:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 80 ] in :
2013-01-20 04:03:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 04:04:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 80 ] in :
2013-01-20 04:04:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 04:23:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 80 ] in :
2013-01-20 04:23:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 04:50:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/Controller/Index.php [ 24 ] in :
2013-01-20 04:50:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 04:53:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 8 ] in :
2013-01-20 04:53:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 04:54:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 8 ] in :
2013-01-20 04:54:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 04:54:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 8 ] in :
2013-01-20 04:54:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 04:54:50 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Request::$is_ajax ~ APPPATH/classes/Controller/Index.php [ 14 ] in :
2013-01-20 04:54:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 04:56:10 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Request::is_ajax() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Index.php [ 14 ] in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php:14
2013-01-20 04:56:10 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php(14): Kohana_Core::error_handler(2048, 'Non-static meth...', '/home/j/jolie74...', 14, Array)
#1 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Ajax/Ajaxcart.php(12): Controller_Index->before()
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Ajax_AjaxCart->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_AjaxCart))
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php:14
2013-01-20 04:56:26 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'is_ajax' ~ APPPATH/classes/Controller/Index.php [ 14 ] in :
2013-01-20 04:56:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 04:58:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Request::$is_ajax ~ APPPATH/classes/Controller/Index.php [ 14 ] in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php:14
2013-01-20 04:58:50 --- DEBUG: #0 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/j/jolie74...', 14, Array)
#1 /home/j/jolie74ru/dev/public_html/application/classes/Controller/Ajax/Ajaxcart.php(12): Controller_Index->before()
#2 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Controller.php(69): Controller_Ajax_AjaxCart->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_AjaxCart))
#5 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/j/jolie74ru/dev/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/j/jolie74ru/dev/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home/j/jolie74ru/dev/public_html/application/classes/Controller/Index.php:14
2013-01-20 04:59:37 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Request::$is_ajax ~ APPPATH/classes/Controller/Index.php [ 44 ] in :
2013-01-20 04:59:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:02:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::initials() ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 14 ] in :
2013-01-20 05:02:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:05:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:05:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:05:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:05:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:05:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:05:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:05:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:05:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:05:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:05:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:05:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:05:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:05:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:05:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:05:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:05:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:05:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:05:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:05:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:05:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:28 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:30 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:06:30 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:06:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:07:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:07:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:11:59 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:11:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:12:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:12:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:12:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:12:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:12:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:12:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:12:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::as_array() ~ APPPATH/classes/Controller/Index.php [ 48 ] in :
2013-01-20 05:12:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:17:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 17 ] in :
2013-01-20 05:17:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:17:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 17 ] in :
2013-01-20 05:17:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:17:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 17 ] in :
2013-01-20 05:17:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:17:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 17 ] in :
2013-01-20 05:17:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:17:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 17 ] in :
2013-01-20 05:17:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:17:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 17 ] in :
2013-01-20 05:17:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:17:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 17 ] in :
2013-01-20 05:17:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:17:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 17 ] in :
2013-01-20 05:17:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:17:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax/Ajaxcart.php [ 17 ] in :
2013-01-20 05:17:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:34:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/Controller/Index/Cart.php [ 18 ] in :
2013-01-20 05:34:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-20 05:35:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/Controller/Index/Cart.php [ 20 ] in :
2013-01-20 05:35:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :