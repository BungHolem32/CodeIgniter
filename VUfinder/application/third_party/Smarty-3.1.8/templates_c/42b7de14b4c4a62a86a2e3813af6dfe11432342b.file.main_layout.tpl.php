<?php /* Smarty version Smarty-3.1.8, created on 2015-02-14 12:32:32
         compiled from "application\views\templates\main_layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232854df31e50cc064-93340078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42b7de14b4c4a62a86a2e3813af6dfe11432342b' => 
    array (
      0 => 'application\\views\\templates\\main_layout.tpl',
      1 => 1423913551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232854df31e50cc064-93340078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54df31e510c8c9_27112319',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df31e510c8c9_27112319')) {function content_54df31e510c8c9_27112319($_smarty_tpl) {?>
<!doctype html>
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
