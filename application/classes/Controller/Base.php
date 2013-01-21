<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Общий базовый класс
 */
class Controller_Base extends Controller_Template {

    protected $user;
    protected $auth;
    protected $cache;
    protected $session;

    public function before() {
        parent::before();

        I18n::lang('ru');
        $settings = Kohana::$config->load('settings');
        Session::$default = 'cookie';
        
        $this->cache = Cache::instance();
        $this->auth = Auth::instance();
        $this->user = $this->auth->get_user();
        $this->session = Session::instance();

        // Вывод в шаблон
        $this->template->site_name = $settings['site_name'];
        $this->template->site_description = $settings['site_description'];
        $this->template->description = $settings['description'];
        $this->template->content_description =$settings['content_description'] ;
        $this->template->page_title = null;
        $this->template->title = null;

        // Подключаем стили и скрипты
        $this->template->styles = array();
        $this->template->scripts = array();

        // Подключаем блоки
        $this->template->block_left = null;
        $this->template->block_center = null;
        $this->template->block_right = null;
    }
	public function go_home()
    {
        $url = Route::url('default', NULL, TRUE);
        $this->go($url);
    }
    
    public function go_back()
    {
        if (Valid::url(Request::initial()->referrer()))
			HTTP::redirect(Request::initial()->referrer());
    }
    
    private function go($url)
    {
        HTTP::redirect($url);
    }
}
