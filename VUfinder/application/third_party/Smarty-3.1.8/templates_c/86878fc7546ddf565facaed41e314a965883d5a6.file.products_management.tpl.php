<?php /* Smarty version Smarty-3.1.8, created on 2016-02-16 01:07:32
         compiled from "application/views/contents/cms/products_management.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1696063785557dbaf9065251-40988898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86878fc7546ddf565facaed41e314a965883d5a6' => 
    array (
      0 => 'application/views/contents/cms/products_management.tpl',
      1 => 1454016987,
      2 => 'file',
    ),
    '5d3149dd005d1002aad1b58cc0acba9d49480b7f' => 
    array (
      0 => 'application/views/templates/cms/script.tpl',
      1 => 1454017002,
      2 => 'file',
    ),
    'd586d6457d23c0beee64f4f1443695e7d68ff071' => 
    array (
      0 => 'application/views/templates/cms/nav-bar_cms.tpl',
      1 => 1454017004,
      2 => 'file',
    ),
    'edbab868a81d719c6a3cc76f7aea3574e9f64d87' => 
    array (
      0 => 'application/views/templates/cms/css.tpl',
      1 => 1454017001,
      2 => 'file',
    ),
    '8d196fe9c96148dea250a695153c6697c1c98693' => 
    array (
      0 => 'application/views/templates/cms/cms-layout.tpl',
      1 => 1454017001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1696063785557dbaf9065251-40988898',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_557dbaf917d732_50660546',
  'variables' => 
  array (
    'title' => 0,
    'uri_site5' => 0,
    'uri_site3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557dbaf917d732_50660546')) {function content_557dbaf917d732_50660546($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home2/amazings/public_html/VUfinder/application/third_party/Smarty-3.1.8/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/home2/amazings/public_html/VUfinder/application/third_party/Smarty-3.1.8/libs/plugins/modifier.regex_replace.php';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--libraries  css-->
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/cms/bootstrap.css">
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/lib/jquery-ui.css"/>
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/lib/font-awesome.css">
    <!--own css -->
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/lib/Digital-7.css"/>
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/general_style.css"/>
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/cms/cms_css.css"/>
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/cms/cms_css_responsive.css"/>
    <link rel="stylesheet" media="only screen and (max-width:1280px)" href="<?php echo site_url();?>
public/css/cms/tablet.css"/>
    <link rel="stylesheet" media="only screen and  (max-width:780px)" href="<?php echo site_url();?>
public/css/cms/mobile.css"/>
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
            <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/">Statistics</a></li>
            <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/product_management">Products Management</a></li>
            <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/category_management"> Category Management</a></li>
            <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/user_management">Users Management</a></li>
            <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/orders_summery">Order Summery</a></li>
            <li><a class="col-md-2" href="<?php echo site_url();?>
">Back To site</a></li>

            <li class="small-menu">Menu
                <ul>
                    <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/">Statistics</a></li>
                    <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/product_management">Products Management</a></li>
                    <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/category_management"> Category Management</a></li>
                    <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/user_management">Users Management</a></li>
                    <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/orders_summery">Order Summery</a></li>
                    <li><a class="col-md-2" href="<?php echo site_url();?>
">Back To site</a></li>
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

                                    <div class="item_name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div>
                                        <a class="edit-btn"   href="<?php echo site_url();?>
cms/dashboard/edit_product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">Edit</a> |
                                        <a class='delete-btn' href="<?php echo site_url();?>
cms/dashboard/delete_form/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
    <script src="<?php echo site_url();?>
public/js/lib/jquery.js"></script>
    <script src="<?php echo site_url();?>
public/js/lib/jquery-ui.js"></script>
    <script src="<?php echo site_url();?>
public/js/lib/bootstrap.js"></script>
    <script src="<?php echo site_url();?>
public/js/lib/jquery.placeholder.js"></script>
    <script src="<?php echo site_url();?>
public/js/lib/tinymce/tinymce.min.js"></script>
    <script>tinymce.init( { selector: "textarea" , width : 250, theme_advanced_resizing:false} );</script>
    <!--own-js-->
    <script src="<?php echo site_url();?>
public/js/cms/cms-jquery-user.js"></script>
</div>
</body>
</html>
<?php }} ?>
