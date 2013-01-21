<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Пользователи
 */
class Controller_Admin_Users extends Controller_Admin {

    public function before() {
        parent::before();

        // Вывод в шаблон
        $this->template->page_title = 'Пользователи';
        $this->template->submenu = Widget::load_admin('menuusers');
    }

    public function action_index() {
        $count = ORM::factory('User')->count_all();

        $pagination = Pagination::factory(array(
            'total_items' => $count,
        ));

        $users = ORM::factory('User')
            ->limit($pagination->items_per_page)
            ->offset($pagination->offset)
            ->find_all();

        $content = View::factory('admin/users/v_users_index', array(
            'users' => $users,
            'pagination' => $pagination,
        ));

        // Вывод в шаблон
        $this->template->block_center = array($content);
    }

    public function action_delete() {
        $id = (int) $this->request->param('id');
        $users = ORM::factory('User', $id);

        if(!$users->loaded()){
            $this->redirect('admin/users');
        }

        $users->delete();
        $this->redirect('admin/users');
    }

    public function action_edit() {
        if (isset($_POST['submit'])) {
                $users = ORM::factory('User');
                $id = (int) $this->request->param('id');

                try {
                    $users->where('id', '=', $id)
                            ->find()
                            ->update_user($_POST, array(
                                'username',
                                'first_name',
                                'email',
                            ));

                    $this->redirect('admin/users');
                }
                catch (ORM_Validation_Exception $e) {
                    $errors = $e->errors('auth');
                }
            }


            $content = View::factory('admin/users/v_users_edit')
                            ->bind('user', $this->user)
                            ->bind('errors', $errors);

            // Выводим в шаблон
            $this->template->page_title .= ':: Редактировать';
            $this->template->block_center = array($content);
        }
}