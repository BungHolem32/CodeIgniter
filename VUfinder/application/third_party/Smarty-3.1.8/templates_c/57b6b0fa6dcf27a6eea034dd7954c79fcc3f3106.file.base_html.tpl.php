<?php /* Smarty version Smarty-3.1.8, created on 2015-02-14 12:24:26
         compiled from "application\views\templates\main_layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1619354df2be7746aa3-98450273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57b6b0fa6dcf27a6eea034dd7954c79fcc3f3106' => 
    array (
      0 => 'application\\views\\templates\\main_layout.tpl',
      1 => 1423913065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1619354df2be7746aa3-98450273',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54df2be77bfff5_13378822',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df2be77bfff5_13378822')) {function content_54df2be77bfff5_13378822($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    
</head>
    <body >
        <div class="container-fluid">
            <div class = "container row">
                <div class = "header centered">

                    
                </div>

                <?php if (!empty('content')) {?>
                    <div class="content" ></div >
                <?php } else { ?>
                    <div class="content ">There is No Content</div>
                <?php }?>
            </div>
        </div>

        <ul class="menu"></ul>

        <div class="script"></div>
    </body>
</html>
<?php }} ?>
