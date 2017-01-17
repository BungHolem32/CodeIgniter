<?php /* Smarty version Smarty-3.1.8, created on 2015-02-14 00:26:51
         compiled from "application\views\templates\main_layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163354de83b52f8c97-65463381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69edd536ad22a96e4e860274a997e06eee10299c' => 
    array (
      0 => 'application\\views\\templates\\main_layout.tpl',
      1 => 1423870010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163354de83b52f8c97-65463381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54de83b5356943_72511591',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54de83b5356943_72511591')) {function content_54de83b5356943_72511591($_smarty_tpl) {?><!doctype html>
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
