<?php /* Smarty version Smarty-3.1.8, created on 2017-01-17 15:20:40
         compiled from "application\views\contents\cms\welcome_dash.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24097553574a5aa6f18-67267726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22d52ea97283bd36aae2da24d2236246ef969ec9' => 
    array (
      0 => 'application\\views\\contents\\cms\\welcome_dash.tpl',
      1 => 1484659014,
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
  'nocache_hash' => '24097553574a5aa6f18-67267726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_553574a5b5bd18_58291502',
  'variables' => 
  array (
    'title' => 0,
    'uri_site5' => 0,
    'uri_site3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553574a5b5bd18_58291502')) {function content_553574a5b5bd18_58291502($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\Projects\\Private\\ServerSide\\CodeIgniter\\VUfinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.replace.php';
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

    <div class="summery">
    <h1 class="text-center">Welcome To Your CMS</h1 class=text-center>


    

    <table>
        <caption>Summery Elements</caption>

        <tr>
            <th>Name</th>
            <th>Number</th>
            <th>Enter</th>

        </tr>


        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['summery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>

            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                
                <?php if (preg_match('/(categories)|(products)|(users)|(orders)/',$_smarty_tpl->tpl_vars['v']->value)&&$_smarty_tpl->tpl_vars['v']->value!='view_finder_products_specs') {?>
                    
                    <td><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['v']->value,'view_finder_','');?>
</a></td>
                    
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['sum'];?>
</td>
                    
                    
                    <?php if (preg_match('/categories/',$_smarty_tpl->tpl_vars['v']->value)) {?>

                        <?php $_smarty_tpl->tpl_vars['v'] = new Smarty_variable('category', null, 0);?>
                        <td><a href="/cms/dashboard/<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
_management">Edit</a></td>
                        
                    <?php } elseif (preg_match('/orders/',$_smarty_tpl->tpl_vars['v']->value)) {?>
                        <td>
                            <a href="/cms/dashboard/<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['v']->value,'/(view_finder_)/','');?>
_summery">Edit</a>
                        </td>
                        
                    <?php } else { ?>
                        <td>
                            <a href="/cms/dashboard/<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['v']->value,"/(view_finder_)|(s)"."$"."/",'');?>
_management">Edit
                        </td>
                    <?php }?>

                <?php } else { ?>
                <?php }?>
                 </tr>

            <?php } ?>
        <?php } ?>
    </table>


    <div class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam blanditiis
        corporis cumque dolore
        ipsam molestiae, molestias natus nisi non nostrum odio officiis pariatur quas, qui recusandae sint tenetur
        veritatis!

        Aliquid amet, fugit molestiae mollitia, nulla numquam obcaecati provident quam rem saepe sapiente sequi
        temporibus, ut! Ad aperiam assumenda atque doloremque ea explicabo fugit harum minima numquam placeat,
        repudiandae sed!

        A aliquid asperiores aut deleniti dolorem ducimus, earum eos esse et facilis hic labore laboriosam magnam
        modi natus nemo nihil numquam perferendis perspiciatis provident quisquam quos sed totam ullam voluptas.

        >Ea labore, laudantium? Accusamus dolor inventore maiores perferendis sit? Alias aliquam est eum eveniet
        explicabo, fugiat incidunt iusto nam nemo nesciunt nostrum pariatur placeat possimus rem sapiente sunt ut
        voluptatum?

        Alias aspernatur autem consectetur consequatur culpa deleniti dolor dolore dolorum eaque error fugit id
        illum incidunt ipsa iste iure necessitatibus perspiciatis, possimus provident quam quis quos repellendus
        rerum? Magnam, placeat.
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
