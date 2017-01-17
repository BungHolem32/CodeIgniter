<?php /* Smarty version Smarty-3.1.8, created on 2017-01-17 15:21:17
         compiled from "application\views\contents\cms\products_management.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2356755631beb710674-99153640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01f0647096381f1beb13541dc0c584494c585e84' => 
    array (
      0 => 'application\\views\\contents\\cms\\products_management.tpl',
      1 => 1484662876,
      2 => 'file',
    ),
    '9d6b3a56552c7c2260be769d23f2fd3656c14f7b' => 
    array (
      0 => 'application\\views\\templates\\cms\\script.tpl',
      1 => 1484650243,
      2 => 'file',
    ),
    '8de67abfa9907e8a7a9868e5de750ddef49b38a6' => 
    array (
      0 => 'application\\views\\templates\\cms\\nav-bar_cms.tpl',
      1 => 1484662839,
      2 => 'file',
    ),
    'aa781706cdffe628e5b745e9cc5cbf94a3d6e049' => 
    array (
      0 => 'application\\views\\templates\\cms\\css.tpl',
      1 => 1484650243,
      2 => 'file',
    ),
    '3c0ed763508cdc14b521393fabcc46700a08e9a9' => 
    array (
      0 => 'application\\views\\templates\\cms\\cms-layout.tpl',
      1 => 1484580840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2356755631beb710674-99153640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55631beb7cb345_19690198',
  'variables' => 
  array (
    'title' => 0,
    'uri_site5' => 0,
    'uri_site3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55631beb7cb345_19690198')) {function content_55631beb7cb345_19690198($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\Projects\\Private\\ServerSide\\CodeIgniter\\VUfinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_regex_replace')) include 'E:\\Projects\\Private\\ServerSide\\CodeIgniter\\VUfinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.regex_replace.php';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--libraries  css-->
    <link rel="stylesheet" href="/public/css/cms/bootstrap.css">
    <link rel="stylesheet" href="/public/css/lib/jquery-ui.css"/>
    <link rel="stylesheet" href="/public/css/lib/font-awesome.css">
    <!--own css -->
    <link rel="stylesheet" href="/public/css/lib/Digital-7.css"/>
    <link rel="stylesheet" href="/public/css/general_style.css"/>
    <link rel="stylesheet" href="/public/css/cms/cms_css.css"/>
    <link rel="stylesheet" href="/public/css/cms/cms_css_responsive.css"/>
    <link rel="stylesheet" media="only screen and (max-width:1280px)" href="/public/css/cms/tablet.css"/>
    <link rel="stylesheet" media="only screen and  (max-width:780px)" href="/public/css/cms/mobile.css"/>
    <script> var CI_ROOT = '<?php echo site_url();?>
'; </script>

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <script>var URL = "<?php if (!empty($_smarty_tpl->tpl_vars['uri_site5']->value)) {?><?php echo $_smarty_tpl->tpl_vars['uri_site5']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['uri_site3']->value;?>
<?php }?>"</script>
</head>

<body>


<div class="container-fluid">
    <div class="container">

        

        
    
    <div class=" menu_cms col-md-12 text-center">
        <ul>
            <li><a class="col-md-2" href="/cms/dashboard/">Statistics</a></li>
            <li><a class="col-md-2" href="/cms/dashboard/product_management">Products Management</a></li>
            <li><a class="col-md-2" href="/cms/dashboard/category_management"> Category Management</a></li>
            <li><a class="col-md-2" href="/cms/dashboard/user_management">Users Management</a></li>
            <li><a class="col-md-2" href="/cms/dashboard/orders_summery">Order Summery</a></li>
            <li><a class="col-md-2" href="/">Back To site</a></li>

            <li class="small-menu">Menu
                <ul>
                    <li><a class="col-md-2" href="/cms/dashboard/">Statistics</a></li>
                    <li><a class="col-md-2" href="/cms/dashboard/product_management">Products Management</a></li>
                    <li><a class="col-md-2" href="/cms/dashboard/category_management"> Category Management</a></li>
                    <li><a class="col-md-2" href="/cms/dashboard/user_management">Users Management</a></li>
                    <li><a class="col-md-2" href="/cms/dashboard/orders_summery">Order Summery</a></li>
                    <li><a class="col-md-2" href="/">Back To site</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <br/>
    <!--wrapper rectangle-->
    <div class="rectangle-bottom-left"></div>
    <div class="rectangle-bottom-right"></div>
    <div class="rectangle-top-left"></div>
    <div class="rectangle-top-right"></div>
    


        <div class="content-cms"
             url="<?php if (!empty($_smarty_tpl->tpl_vars['uri_site5']->value)) {?><?php echo $_smarty_tpl->tpl_vars['uri_site5']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['uri_site3']->value;?>
<?php }?>">
    <?php if (($_smarty_tpl->tpl_vars['session']->value->flashdata('feedback')==true)) {?>
      <span class="feedback title_font"><?php echo $_smarty_tpl->tpl_vars['session']->value->flashdata('feedback');?>
</span>
    <?php }?>
                <h2>Product Managment</h2>




    <div class="cms-items">

    


    <div class="products_list">
    <h2>Summery</h2>

            <table>
                <tr>
                    <th>category</th>
                    <th>Name</th>
                    <th>Slogan</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Visiblity</th>
                    <th>Date</th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_cms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                <?php  $_smarty_tpl->tpl_vars['products'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products']->key => $_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->tpl_vars['products']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['products']->key;
?>
                <tr>

                    <td><?php echo smarty_modifier_replace(smarty_modifier_regex_replace(smarty_modifier_regex_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['cat']->value['name'],'interchangeable-lens',''),'Digital','d'),'/Single/i','s'),'/lens/i','l'),'reflex','r');?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['products']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['products']->value['slogan'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['products']->value['price'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['products']->value['quantity'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['products']->value['visibility'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['products']->value['date_created'];?>
</td>

                </tr>
                    <?php } ?>
                <?php } ?>
            </table>
        <div class="flashdata"></div>
    </div>

<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_cms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>

    <div class="category" ">
            <h4  ><?php echo smarty_modifier_replace(smarty_modifier_regex_replace(smarty_modifier_regex_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['cat']->value['name'],'interchangeable-lens',''),'Digital','d'),'/Single/i','s'),'/lens/i','l'),'reflex','r');?>
</h4>

            <ul class="inner_product_menu style=text-align:left">
            <a class='create-btn ' href="/cms/dashboard/create_product/<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
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

                                    <div class="item_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div>
                                        <a class="edit-btn"   href="/cms/dashboard/edit_product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">Edit</a> |
                                        <a class='delete-btn' href="/cms/dashboard/delete_form/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['uri_site3']->value;?>
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
    </div>
</div>

    </div>
    

</div>
</div>
<div class="overlay"></div>



<div class="script">
    <!-- libarary  script files-->
    <script src="/public/js/lib/jquery.js"></script>
    <script src="/public/js/lib/jquery-ui.js"></script>
    <script src="/public/js/lib/bootstrap.js"></script>
    <script src="/public/js/lib/jquery.placeholder.js"></script>
    <script src="/public/js/lib/tinymce/tinymce.min.js"></script>
    <script>tinymce.init( { selector: "textarea" , width : 250, theme_advanced_resizing:false} );</script>
    <!--own-js-->
    <script src="/public/js/cms/cms-jquery-user.js"></script>
</div>
</body>
</html>
<?php }} ?>
