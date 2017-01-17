<?php /* Smarty version Smarty-3.1.8, created on 2017-01-17 19:00:11
         compiled from "application\views\contents\cms\order_summery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2037754e2349ef17212-81259644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b2e890969b2cd76054a56153bf943bf2a76de14' => 
    array (
      0 => 'application\\views\\contents\\cms\\order_summery.tpl',
      1 => 1484676009,
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
  'nocache_hash' => '2037754e2349ef17212-81259644',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54e2349f085097_43810041',
  'variables' => 
  array (
    'title' => 0,
    'uri_site5' => 0,
    'uri_site3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e2349f085097_43810041')) {function content_54e2349f085097_43810041($_smarty_tpl) {?><!doctype html>
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

<div class="orders-form-style centerall">
    <div class="flash"><?php if (!empty($_smarty_tpl->tpl_vars['flash']->value)) {?><?php echo $_smarty_tpl->tpl_vars['flash']->value;?>
<?php }?></div>
    <h3 class="centerall">Order details</h3>
    <table class="tableCategories">
        <tr class="header-titles-order table-row">
            <th class="headerTab">Product</th>
            <th class="headerTab">Quantity</th>
            <th class="headerTab">Price</th>
            <th class="headerTab">Summery</th>
        </tr>
        <?php if (!empty($_smarty_tpl->tpl_vars['orders']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
                
                <?php if (($_smarty_tpl->tpl_vars['order']->value['data_jason'])) {?>
                    <tr class="UserNameWrapper table-row">
                        <td class="userName" colspan="4">User: <?php echo $_smarty_tpl->tpl_vars['order']->value['firstName'];?>
</td>
                    </tr>
                    <tr class="userDateWrapper table-row" colspan="4">
                        <td class="user_order_date userDate" data-id="<?php echo $_smarty_tpl->tpl_vars['order']->value['oid'];?>
" colspan="4">Date: <?php echo $_smarty_tpl->tpl_vars['order']->value['date'];?>
</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['data_jason']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
                        <tr class="userOrder table-row">
                            <td class="productName">
                                <span class="desc_order_mobile">product </span> <?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>

                            </td>
                            <td class="productQuantity">
                                <span class="desc_order_mobile">Quantity </span><?php echo $_smarty_tpl->tpl_vars['data']->value['qty'];?>

                            </td>
                            <td class="productPrice">
                                <span class="desc_order_mobile">Price </span> <?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>

                            </td>
                            <td class="productSummery">
                                <span class="desc_order_mobile">Summery </span><?php echo $_smarty_tpl->tpl_vars['data']->value['subtotal'];?>

                            </td>
                        </tr>
                    <?php } ?>
                <?php }?>
            <?php } ?>
        <?php } else { ?>
            <tr class="table-row">
                <td>no content</td>
            </tr>
        <?php }?>
    </table>

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
