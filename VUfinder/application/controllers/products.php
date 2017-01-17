<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('model_products');
    }


    public function index($category = null, $product = null)
    {
        if (is_null($category)) {

            $this->smarty_properties['title'] = 'Our Categories';
            $cat = $this->model_products->get_categories();


            if ($cat) {

                $this->smarty_properties['cat'] = $cat;
                $this->my_smarty->display(APPPATH . 'views/contents/products/categories.tpl', $this->smarty_properties);
            }
        } elseif (!is_null($category) && is_null($product)) {

            $this->security->xss_clean($category);

            $this->smarty_properties['title'] = $category;

            $product = $this->model_products->get_products($category);


            if ($product) {

                $this->smarty_properties['products'] = $product['products'];
                $this->smarty_properties['cat_name'] = $product['products'][0]['cat_machine'];
                $this->my_smarty->display(APPPATH . 'views/contents/products/product.tpl', $this->smarty_properties);
            } else {

                $this->smarty_properties['title'] = 'No product found';
                $this->my_smarty->display(APPPATH . 'views/contents/no_product.tpl', $this->smarty_properties);

            }

        } elseif (!is_null($category) && !is_null($product)) {

            $this->security->xss_clean($product);

            $this->smarty_properties['title'] = $product;

            $item = $this->model_products->get_items($product);
            $spec = $this->model_products->get_specs($item['id']);

            if ($item) {

                $this->smarty_properties['items'] = $item;
                $this->smarty_properties['spec'] = $spec;
                $this->my_smarty->display(APPPATH . 'views/contents/products/items.tpl', $this->smarty_properties);
            }
        }
    }
}