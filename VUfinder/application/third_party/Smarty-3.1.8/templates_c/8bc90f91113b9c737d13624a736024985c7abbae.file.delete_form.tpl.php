<?php /* Smarty version Smarty-3.1.8, created on 2015-06-02 15:09:11
         compiled from "application\views\contents\cms\delete_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3213954e0fe9911d3c7-42255758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bc90f91113b9c737d13624a736024985c7abbae' => 
    array (
      0 => 'application\\views\\contents\\cms\\delete_form.tpl',
      1 => 1433073587,
      2 => 'file',
    ),
    '9d6b3a56552c7c2260be769d23f2fd3656c14f7b' => 
    array (
      0 => 'application\\views\\templates\\cms\\script.tpl',
      1 => 1433238358,
      2 => 'file',
    ),
    '8de67abfa9907e8a7a9868e5de750ddef49b38a6' => 
    array (
      0 => 'application\\views\\templates\\cms\\nav-bar_cms.tpl',
      1 => 1433205439,
      2 => 'file',
    ),
    'aa781706cdffe628e5b745e9cc5cbf94a3d6e049' => 
    array (
      0 => 'application\\views\\templates\\cms\\css.tpl',
      1 => 1433247316,
      2 => 'file',
    ),
    '3c0ed763508cdc14b521393fabcc46700a08e9a9' => 
    array (
      0 => 'application\\views\\templates\\cms\\cms-layout.tpl',
      1 => 1433087238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3213954e0fe9911d3c7-42255758',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54e0fe991d6128_65243880',
  'variables' => 
  array (
    'title' => 0,
    'uri_site5' => 0,
    'uri_site3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e0fe991d6128_65243880')) {function content_54e0fe991d6128_65243880($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'C:\\xampp\\htdocs\\VUfinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.regex_replace.php';
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
    <div class="delete-form-style">

        <form action="<?php echo site_url('cms/dashboard/delete_form');?>
/<?php echo $_smarty_tpl->tpl_vars['del']->value;?>
/<?php if (!empty($_smarty_tpl->tpl_vars['uri_site5']->value)) {?><?php echo $_smarty_tpl->tpl_vars['uri_site5']->value;?>
/<?php } elseif (!empty($_smarty_tpl->tpl_vars['uri_site3']->value)&&$_smarty_tpl->tpl_vars['uri_site3']->value!='delete_form') {?><?php echo $_smarty_tpl->tpl_vars['uri_site3']->value;?>
/<?php } elseif (($_smarty_tpl->tpl_vars['uri_site3']->value=='delete_form')) {?><?php }?>"
              method="post">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>

                
                <h3 class="text-center"><?php if (!empty($_smarty_tpl->tpl_vars['has_products']->value)) {?>you prohibited from delete The  <?php } else { ?> Are you sure you want to delete the<?php }?>

                    
                    <?php if ($_smarty_tpl->tpl_vars['key']->value=='categories') {?>

                        <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['key']->value,'/(ies)$/','y');?>


                        
                    <?php } else { ?>

                        <?php echo smarty_modifier_regex_replace(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['key']->value,'/(s)$/',''),'/(_)/',' ');?>


                    <?php }?>
                </h3>
                <ul>


                
                <?php if (!empty($_smarty_tpl->tpl_vars['item']->value[0]['firstName'])) {?>
                    <li class="centered title_font"><h3><?php echo $_smarty_tpl->tpl_vars['item']->value[0]['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value[0]['lastName'];?>
 ? </h3></li>
                
                <?php } elseif (!empty($_smarty_tpl->tpl_vars['item']->value[0]['slogan'])) {?>
                    <li class="centered title_font">
                        <h3><?php echo $_smarty_tpl->tpl_vars['item']->value[0]['machine_name'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['has_products']->value)) {?><?php } else { ?> ? <?php }?> </h3></li>
                    <div class="flash"><?php if (!empty($_smarty_tpl->tpl_vars['prod']->value)) {?><?php echo $_smarty_tpl->tpl_vars['prod']->value;?>
<?php }?></div>
                
                <?php } elseif (!empty($_smarty_tpl->tpl_vars['item']->value[0]['data_jason'])) {?>
                    <li class="centered title_font"><h3>Number <?php echo $_smarty_tpl->tpl_vars['item']->value[0]['id'];?>
  from <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 ? </h3></li>
                    <table>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>SubTotal</th>

                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['json']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value->price;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value->qty;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value->subtotal;?>
</td>

                            </tr>
                        <?php } ?>
                    </table>
                
                <?php } elseif (!empty($_smarty_tpl->tpl_vars['item']->value[0]['pid'])) {?>

                    <h3><?php echo $_smarty_tpl->tpl_vars['item']->value[0]['id'];?>
 from product <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h3>
                    <li>
                        <img src="<?php echo site_url();?>
public/img/products/<?php echo $_smarty_tpl->tpl_vars['item']->value[0]['image'];?>
" alt=""  width="400"/>
                    </li>


                
                <?php } else { ?>

                <?php  $_smarty_tpl->tpl_vars['prod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->key => $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->_loop = true;
?>
                    <li class="centered title_font"><h3><?php echo $_smarty_tpl->tpl_vars['prod']->value['name'];?>
?</h3></li>

                    <?php } ?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['prod']->value['images'][0]['image'])) {?>


                        <li>
                            <img src="<?php echo site_url();?>
public/img/products/<?php echo $_smarty_tpl->tpl_vars['prod']->value['images'][0]['image'];?>
" alt="" width="400"/>
                        </li>

                    <?php } else { ?>

                        <li><img src="<?php echo site_url();?>
public/img/products/default.png" alt=""
                                 width="400"/>
                        </li>

                    <?php }?>

                        </ul >


                <?php }?>
            <?php } ?>
            <div class="buttons">
                <?php if (!empty($_smarty_tpl->tpl_vars['has_products']->value)) {?>
                    <div class="product_found"> You Must Delete all products from the category before delete it</div>
                    <input type="button" onclick="window.location='<?php echo site_url('cms/dashboard/');?>
'" value="back"/>
                <?php } else { ?>
                    <input type="submit" name='del' value="delete"/>
                    <input type="button" onclick="javascript:history.back()" value="back"/>
                <?php }?>
                <div class="flash"><?php if (!empty($_smarty_tpl->tpl_vars['flash']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['flash']->value;?>
 <?php } else { ?> <?php }?></div>
            </div>
        </form>

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
