<?php /* Smarty version Smarty-3.1.8, created on 2015-02-13 21:11:28
         compiled from "application\views\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176754de4ca0ba2650-64243601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b1fb65e675421b1e1ad9cea05f7ab607d00f5e' => 
    array (
      0 => 'application\\views\\home.tpl',
      1 => 1423858288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176754de4ca0ba2650-64243601',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54de4ca0bd4a16_85126041',
  'variables' => 
  array (
    'ilan' => 0,
    'num' => 0,
    'num2' => 0,
    'sum' => 0,
    'names' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54de4ca0bd4a16_85126041')) {function content_54de4ca0bd4a16_85126041($_smarty_tpl) {?>Whats up


<?php $_smarty_tpl->tpl_vars['ilan'] = new Smarty_variable('beautiful', null, 0);?>

<?php echo $_smarty_tpl->tpl_vars['ilan']->value;?>


<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(5, null, 0);?>
<?php $_smarty_tpl->tpl_vars['num2'] = new Smarty_variable(24, null, 0);?>

<?php echo $_smarty_tpl->tpl_vars['num']->value+$_smarty_tpl->tpl_vars['num2']->value;?>


<?php $_smarty_tpl->tpl_vars['sum'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value*$_smarty_tpl->tpl_vars['num2']->value, null, 0);?>

<?php echo $_smarty_tpl->tpl_vars['sum']->value;?>


<?php $_smarty_tpl->tpl_vars['names'] = new Smarty_variable(array('ilan','haim','shlomi',4,6), null, 0);?>

<?php echo $_smarty_tpl->tpl_vars['names']->value[3]+$_smarty_tpl->tpl_vars['names']->value[4];?>
<?php }} ?>
