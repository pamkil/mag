<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/Kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/Kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('Asia/Yekaterinburg');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Optionally, you can enable a compatibility auto-loader for use with
 * older modules that have not been updated for PSR-0.
 *
 * It is recommended to not enable this unless absolutely necessary.
 */
//spl_autoload_register(array('Kohana', 'auto_load_lowercase'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */ // 'base_url'   => '/kohana/',
Kohana::init(array(
	'base_url'   => '/',
	'index_file' => false,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

Cookie::$salt = 'magazinjolie74chelyab';

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	 'auth'       => MODPATH.'auth',       // Basic authentication
	 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	 'database'   => MODPATH.'database',   // Database access
	 'image'      => MODPATH.'image',      // Image manipulation
	// 'minion'     => MODPATH.'minion',     // CLI Tasks
	 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	'pagination'	=> MODPATH.'pagination',
		'orm-mptt'	=> MODPATH.'orm-mptt',
		'email' 	=> MODPATH.'email',
	));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
//if ( ! Route::cache()) {

Route::set('widgets_index', 'widgets/index(/<controller>(/<param>))', array('param' => '.+'))
    ->defaults(array(
        'action'     => 'index',
        'directory' => 'Widgets/Index',
    )
);

Route::set('widgets_admin', 'widgets/admin(/<controller>(/<param>))', array('param' => '.+'))
    ->defaults(array(
        'action'     => 'index',
        'directory' => 'Widgets/Admin',
    )
);

Route::set('widgets', 'widgets(/<controller>(/<param>))', array('param' => '.+'))
    ->defaults(array(
        'action'     => 'index',
        'directory' => 'Widgets',
    )
);



Route::set('auth', '<action>', array('action' => 'login|logout|register'))
    ->defaults(array(
        'directory'  => 'Index',
        'controller' => 'Auth',
    )
);

Route::set('catalog', 'catalog(/<action>(/c<cat>)(/<id>))')
    ->defaults(array(
        'directory'  => 'Index',
        'action' => 'index',
        'controller' => 'Catalog',
    )
);

Route::set('product', 'product(/<id>)')
    ->defaults(array(
        'directory'  => 'Index',
        'action' => 'product',
        'controller' => 'Catalog',
    )
);

Route::set('products', 'products(/c<cat>(/<id>))')
    ->defaults(array(
        'directory'  => 'Index',
        'action' => 'products',
        'controller' => 'Catalog',
    )
);

//Route::set('vendor_char', 'vendor(/abc_<char>)', array('char' => '.+'))
//    ->defaults(array(
//        'directory'  => 'index',
//        'action' => 'vendor',
//        'controller' => 'catalog',
//    )
//);

Route::set('vendor', 'vendor(/<id>)')
    ->defaults(array(
        'directory'  => 'Index',
        'action' => 'vendor',
        'controller' => 'Catalog',
    )
);

//Route::set('contacts', 'page/contacts')
//	->defaults(array(
//            'directory'  => 'index',
//            'action' => 'contacts',
//			'controller' => 'page',
//	));
//Route::set('page', 'page(/<page_alias>)')
//	->defaults(array(
//            'directory'  => 'index',
//            'action' => 'index',
//			'controller' => 'page',
//	));

Route::set('search', 'search')->defaults(array(
        'directory'  => 'Index',
        'controller' => 'Search',
    )
);

Route::set('admin', 'admin(/<controller>(/<action>(/page<page>)(/<id>)))')->defaults(array(
        'directory'  => 'Admin',
        'controller' => 'Main',
        'action'     => 'index',
    )
);

Route::set('ajax', 'ajax(/<controller>(/<action>(/page<page>)(/<id>)))')->defaults(array(
        'directory'  => 'Ajax',
        'controller' => 'Ajaxcart',
        'action'     => 'index',
    )
);

Route::set('default', '(<controller>(/<action>(/page<page>)(/<id>)))')->defaults(array(
        'directory'  => 'Index',
        'controller' => 'Main',
        'action'     => 'index',
    )
);
//Route::cache(TRUE);
//}
