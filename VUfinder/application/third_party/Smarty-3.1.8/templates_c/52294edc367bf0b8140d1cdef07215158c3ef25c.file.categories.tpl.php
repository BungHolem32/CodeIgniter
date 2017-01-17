<?php /* Smarty version Smarty-3.1.8, created on 2015-05-14 22:05:36
         compiled from "application\views\contents\cms\products_managment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303025535762cb38116-36574746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52294edc367bf0b8140d1cdef07215158c3ef25c' => 
    array (
      0 => 'application\\views\\contents\\cms\\products_managment.tpl',
      1 => 1431044050,
      2 => 'file',
    ),
    '9d6b3a56552c7c2260be769d23f2fd3656c14f7b' => 
    array (
      0 => 'application\\views\\templates\\cms\\script.tpl',
      1 => 1430938728,
      2 => 'file',
    ),
    '8de67abfa9907e8a7a9868e5de750ddef49b38a6' => 
    array (
      0 => 'application\\views\\templates\\cms\\nav-bar_cms.tpl',
      1 => 1431387606,
      2 => 'file',
    ),
    'aa781706cdffe628e5b745e9cc5cbf94a3d6e049' => 
    array (
      0 => 'application\\views\\templates\\cms\\css.tpl',
      1 => 1429538006,
      2 => 'file',
    ),
    '3c0ed763508cdc14b521393fabcc46700a08e9a9' => 
    array (
      0 => 'application\\views\\templates\\cms\\cms-layout.tpl',
      1 => 1424303648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303025535762cb38116-36574746',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5535762cc1f126_92548411',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5535762cc1f126_92548411')) {function content_5535762cc1f126_92548411($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        
<!--libraries  css-->
<link rel="stylesheet" href="<?php echo site_url();?>
public/css/cms/bootstrap.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" >

<!--own css -->
<link rel="stylesheet" href= "<?php echo site_url();?>
public/fonts/Digital-7.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/general_style.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/cms/cms_css.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/cms/cms_css_responsive.css"/>
<script> var CI_ROOT ='<?php echo site_url();?>
'; </script>

        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    </head>

    <body >

    <div class="container-fluid">
        <div class="container">



            

        <div class=" menu_cms col-md-12 text-center">
            <ul>
                <li><a class= "col-md-2" href="<?php echo site_url();?>
cms/dashboard/">Statistics</a></li>
                <li><a class= "col-md-2" href="<?php echo site_url();?>
cms/dashboard/categories">Products Managment</a></li>
                <li><a class= "col-md-2" href="<?php echo site_url();?>
cms/dashboard/category_managment"> Category Managment</a></li></li>
                <li><a class= "col-md-2" href="<?php echo site_url();?>
cms/dashboard/users">Users Managment</a></li>
                <li><a class= "col-md-2" href="<?php echo site_url();?>
cms/dashboard/orders_summery">Order Summery</a></li>
                <li><a class= "col-md-2" href="<?php echo site_url();?>
">Back To site</a></li>
            </ul>
        </div>
            <br/>
    <!--wrapper rectangle-->
    <div class="rectangle-bottom-left"></div>
    <div class="rectangle-bottom-right"></div>
    <div class="rectangle-top-left"></div>
    <div class="rectangle-top-right"></div>



            <div class="content-cms" >
    <?php if (($_smarty_tpl->tpl_vars['session']->value->flashdata('feedback')==true)) {?>
      <span class="feedback title_font"><?php echo $_smarty_tpl->tpl_vars['session']->value->flashdata('feedback');?>
</span>
    <?php }?>
                <h2>Product Managment</h2>


    <div class="cms-items">
    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_cms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
        <div class="category" ">
            <h4  ><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</h4>

            <ul class=" cms-products style=text-align:left">
                <a class='create-btn ' href="<?php echo site_url();?>
cms/dashboard/create_product/<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
/">Add Product</a>

                <?php if (is_array($_smarty_tpl->tpl_vars['cat']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['products'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products']->key => $_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->tpl_vars['products']->_loop = true;
?>
                        <?php if (is_array($_smarty_tpl->tpl_vars['products']->value)) {?>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <li >
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                                        <a class="edit-btn"   href="<?php echo site_url();?>
cms/dashboard/edit_form/<?php echo $_smarty_tpl->tpl_vars['item']->value['prd_id'];?>
/">Edit</a> |
                                        <a class='delete-btn' href="<?php echo site_url();?>
cms/dashboard/delete_form/<?php echo $_smarty_tpl->tpl_vars['item']->value['prd_id'];?>
/">Delete</a>
                                    <br/>
                                </li>
                            <?php } ?>
                        <?php }?>
                    <?php } ?>
                <?php }?>
            </ul>
        </div>

    <?php } ?>
        <div class="add-category"><a href="<?php echo site_url();?>
cms/dashboard/category_managment">Add New Category</a></div>

    </div>
</div >

        </div>


        </div>
    </div>
    <div class="overlay"></div>


    
    <div class="script">
<!-- libarary  script files-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>
public/js/lib/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>
public/js/lib/bootstrap.js"></script>
<script type="text/javascript">tinymce.init({ selector: "textarea" });</script>
<script src="<?php echo site_url();?>
public/js/jquery.placeholder.js"></script>
<!--own-js-->
    <script src="<?php echo site_url();?>
public/js/cms/cms-jquery.js"></script>
    <script src="<?php echo site_url();?>
public/js/lightbox.js"></script >
</div>
    </body>
</html>
<?php }} ?>
