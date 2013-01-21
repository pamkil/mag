<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Продукты
 */
class Controller_Admin_Products extends Controller_Admin {

    public function before() {
        parent::before();

        $this->template->scripts[] = 'media/js/jquery.MultiFile.pack.js';
        $this->template->scripts[] = 'media/js/upload.js';

        // Вывод в шаблон
        $this->template->submenu = Widget::load_admin('menuproducts');
    }

    public function action_index() {

        $products = ORM::factory('Product')->find_all();

        $content = View::factory('admin/products/v_products_index', array(
            'products' => $products,
        ));

        // Вывод в шаблон
        $this->template->page_title = 'Товары';
        $this->template->block_center = array($content);
    }


    public function action_add() {
        //Получение категорий
        $categories = ORM::factory('Category')->find_all()->as_array();

        $cats = array();
        foreach ($categories as $cat){
            $cats[$cat->id] = $cat->title;
        }

        if (isset($_POST['submit']))
        {
            // Работа с товаром
            $data = Arr::extract($_POST, array('title', 'description', 'cost', 'status', 'cat'));
            $products = ORM::factory('Product');
            $products->values($data);


            try {
                $products->save();
                $products->add('categories', $data['cat']);

                // Работа с изображениями
                if (!empty($_FILES['images']['name'][0]))
                {
                    foreach ($_FILES['images']['tmp_name'] as $image)
                    {
                        $filename = $this->_upload_img($image);

                        // Запись в БД
                        $im_db = ORM::factory('Image');
                        $im_db->product_id = $products->pk();
                        $im_db->name = $filename;
                        $im_db->save();

                        $p_db = ORM::factory('Product', $products->pk());
                        if ($p_db->image_id == 0){
                            $p_db->image_id = $im_db->pk();
                            $p_db->save();
                        }
                    }
                }

                $this->redirect('admin/products/edit/' . $products->pk());
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }


        }

        $content = View::factory('admin/products/v_products_add')
                ->bind('errors', $errors)
                ->bind('cats', $cats)
                ->bind('data', $data);

        // Вывод в шаблон
        $this->template->page_title = 'Товары :: Добавить';
        $this->template->block_center = array($content);
    }

    public function action_edit() {
        $id = (int) $this->request->param('id');
        $products = ORM::factory('Product', $id);

        if(!$products->loaded()) {
            $this->redirect('admin/products');
        }

        //Получение категорий
        $categories = ORM::factory('Category')->find_all()->as_array();

        $cats = array();
        foreach ($categories as $cat){
            $cats[$cat->id] = $cat->title;
        }

        $data = $products->as_array();
        $data['cat'] = $products->categories->find_all()->as_array();
        $data['images'] = $products->images->find_all()->as_array();


        // Редактирование
        if (isset($_POST['submit'])) {

            // Работа с товаром
            $data = Arr::extract($_POST, array('title', 'description', 'cost', 'status', 'cat'));
            $products->values($data);

            try {
                $products->save();
                $products->remove('categories');
                $products->add('categories', $data['cat']);

                // Работа с изображениями
                if (!empty($_FILES['images']['name'][0]))
                {
                    foreach ($_FILES['images']['tmp_name'] as $i => $image)
                    {
                        $filename = $this->_upload_img($image);

                        // Запись в БД
                        $im_db = ORM::factory('Image');
                        $im_db->product_id = $products->pk();
                        $im_db->name = $filename;
                        $im_db->save();

                        $p_db = ORM::factory('Product', $products->pk());
                        if ($p_db->image_id == 0){
                            $p_db->image_id = $im_db->pk();
                            $p_db->save();
                        }
                    }
                }

                $this->redirect('admin/products/edit/' . $products->pk());
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }
        }

        $content = View::factory('admin/products/v_products_edit')
                ->bind('id', $id)
                ->bind('errors', $errors)
                ->bind('cats', $cats)
                ->bind('data', $data);

        // Вывод в шаблон
        $this->template->page_title = 'Товары :: Редактировать';
        $this->template->block_center = array($content);
    }


     public function action_delete() {
        $id = (int) $this->request->param('id');
        $products = ORM::factory('Product', $id);

        if(!$products->loaded()) {
            $this->redirect('admin/products');
        }

        $products->delete();
        $this->redirect('admin/products');
    }

    // Удалить изображение
    public function action_delimg() {
        $id = (int) $this->request->param('id');
        $images = ORM::factory('Image', $id);
        $product_id = $images->product_id;
        
        if(!$images->loaded()) {
            $this->redirect('admin/products');
        }

        $p_db = ORM::factory('Product', $product_id);
        if ($p_db->image_id == $id){
            $p_db->image_id = 0;
            $p_db->save();
        }

        $images->delete();
        $this->redirect('admin/products/edit/' . $product_id);
    }

    // Сделать главное изображение
    public function action_mainimg() {
        $id = (int) $this->request->param('id');
        $images = ORM::factory('Image', $id);
        $product_id = $images->product_id;

        $product = ORM::factory('Product', $product_id);
        $product->image_id = $id;
        $product->save();
        
        $this->redirect('admin/products/edit/' . $product_id. '#img');
    }


    public function _upload_img($file, $ext = NULL, $directory = NULL){

        if($directory == NULL)
        {
            $directory = 'media/uploads';
        }

        if($ext== NULL)
        {
            $ext= 'jpg';
        }

        // Генерируем случайное название
        $symbols = '0123456789abcdefghijklmnopqrstuvwxyz';
        $filename = substr(str_shuffle($symbols), 0, 16);

        // Изменение размера и загрузка изображения
        $im = Image::factory($file);

        if($im->width > 150)
        {
            $im->resize(150);
        }
        $im->save("$directory/small_$filename.$ext");

        $im = Image::factory($file);
        $im->save("$directory/$filename.$ext");

        return "$filename.$ext";
    }
    
}