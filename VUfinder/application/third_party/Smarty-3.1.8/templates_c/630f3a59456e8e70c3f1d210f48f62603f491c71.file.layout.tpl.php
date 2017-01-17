<?php /* Smarty version Smarty-3.1.8, created on 2015-02-14 00:27:24
         compiled from "application\views\main_layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:437654de885c369373-75750244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '630f3a59456e8e70c3f1d210f48f62603f491c71' => 
    array (
      0 => 'application\\views\\main_layout.tpl',
      1 => 1423870010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '437654de885c369373-75750244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54de885c3b0087_47906056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54de885c3b0087_47906056')) {function content_54de885c3b0087_47906056($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        
    </head>
    <body >
        <div class="container-fluid">
            <div class = "container row">

                <div class = "header centered">
                    
                </div>

                <!--body - content-->
                <?php if ('block') {?>

                <div class="content" > </div >
                <?php } else { ?>

                <div class="content ">There is No Content</div>
                <?php }?>
                <!--body - content close-->

            </div>

        </div>

            <!--footer menu-->
            <ul class="menu"></ul>
            <!--footer menu close-->


        <div class="script"></div>

    </body>

</html>
<?php }} ?>
