<?php /* Smarty version Smarty-3.1.8, created on 2015-02-13 23:26:10
         compiled from "application\views\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1383054de5dfccf9e01-89366410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b1fb65e675421b1e1ad9cea05f7ab607d00f5e' => 
    array (
      0 => 'application\\views\\home.tpl',
      1 => 1423866349,
      2 => 'file',
    ),
    'b106e4765d6060287293dfc1108e04cedd52e5fc' => 
    array (
      0 => 'application\\views\\main_layout.tpl',
      1 => 1423866369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1383054de5dfccf9e01-89366410',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54de5dfcd43e01_11889349',
  'variables' => 
  array (
    'title' => 0,
    'site_url' => 0,
    'Year' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54de5dfcd43e01_11889349')) {function content_54de5dfcd43e01_11889349($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\VUfinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.truncate.php';
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <!--libararys  css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" >
        <!--own css -->
        <link rel="stylesheet" href= "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/fonts/Digital-7.css" />
        <link rel="stylesheet" href= "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/css/general_style.css" />
        <link rel="stylesheet" href= "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/css/style.css" />
        <link rel="stylesheet" href= "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/css/responsive.css" />
        <!--user the site url method  throw js-->
        <script> var CI_ROOT = '<<?php ?>?=site_url(); ?<?php ?>>'; </script>
    </head>
    <body >

    <div class="overlay">
        <div class="container-fluid">

            <div class = "container row">

                <!--header (footer rights-->
                <div class = "header centered">

                    <span>viewFinder &copy;  <?php echo $_smarty_tpl->tpl_vars['Year']->value;?>
 </span>

                </div>
                <!--head Template close-->

                <!--body - content-->
                <?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
                <div class="content" >
Whats up


    <?php $_smarty_tpl->tpl_vars['ilan'] = new Smarty_variable('beautiful', null, 0);?>

    <?php echo smarty_modifier_truncate(mb_strtoupper($_smarty_tpl->tpl_vars['ilan']->value, 'UTF-8'),7,'',true);?>


    <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(5, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['num2'] = new Smarty_variable(24, null, 0);?>

    <?php echo $_smarty_tpl->tpl_vars['num']->value+$_smarty_tpl->tpl_vars['num2']->value;?>


    <?php $_smarty_tpl->tpl_vars['sum'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value*$_smarty_tpl->tpl_vars['num2']->value, null, 0);?>

    <?php echo $_smarty_tpl->tpl_vars['sum']->value;?>


    <?php $_smarty_tpl->tpl_vars['names'] = new Smarty_variable(array('ilan','haim','shlomi',4,6), null, 0);?>



    <?php echo '{';?>

 </div >
                <?php } else { ?>
                <div class="content ">There is No Content</div>
                <?php }?>
                <<?php ?>?php endif ?<?php ?>>
                <!--body - content close-->

            </div>

            <!--footer menu-->
            <ul class="menu">

                <li class = "tab home">     <a class = 'title_font' href = "<<?php ?>?= site_url();           ?<?php ?>>">Home       </a> </li>
                <li class = "tab about">    <a class = 'title_font' href = "<<?php ?>?= site_url('about');    ?<?php ?>>/">About      </a> </li>
                <li class = "tab products"> <a class = 'title_font' href = "<<?php ?>?= site_url('products'); ?<?php ?>>/">Products   </a> </li>

                <!-- enter if !is_login -->
                <<?php ?>?php if(isset($is_login) && ($is_login)==false) : ?<?php ?>>

                <li id="log" class = "tab login">      <a class = 'title_font' href = "<<?php ?>?= site_url('user/login'); ?<?php ?>>/">Login        </a> </li>
                <li class = "tab register">   <a class = 'title_font' href = "<<?php ?>?= site_url('user/register');	   ?<?php ?>>/">Registration </a> </li>

                <!--enter if is login-->
                <<?php ?>?php else: ?<?php ?>>

                <li class="tab" ><h3 class = "tab title_font">  Welcome
                        <a href=" <<?php ?>?= site_url('user/edit'); ?<?php ?>>/" ><<?php ?>?= $this->session->userdata('firstName'); ?<?php ?>>  </h3> </a >
                    <<?php ?>?php if(($is_admin)==true): ?<?php ?>>
                    <a class=" tab title_font dashboard" href="<<?php ?>?= site_url() . 'cms/dashboard/'; ?<?php ?>>">CMS Dashboard</a>

                    <<?php ?>?php endif; ?<?php ?>>
                </li>

                <li class = "tab logout">     <a class = 'title_font' href = "<<?php ?>?= site_url('user/logout');    ?<?php ?>>/">logout      </a> </li>

                <<?php ?>?php endif ?<?php ?>>

                <li class = "tab contactUs">      <a class = 'title_font' href = "<<?php ?>?= site_url('contactUs'); ?<?php ?>>/">Contact Us       </a> </li>

                <li class=  "tab image">

                    <<?php ?>?php if  ($this->cart->total_items()>0): ?<?php ?>>

                    <span> <<?php ?>?= $this->cart->total_items(); ?<?php ?>> </span>

                    <<?php ?>?php endif ?<?php ?>>   <a href="<<?php ?>?= site_url('cart/checkout/'); ?<?php ?>>"><img src="<<?php ?>?=site_url('public/img/cart.png'); ?<?php ?>>" alt="" /></a>
                </li>
            </ul>
            <!--footer menu close-->
        </div>
    </div>











    <!--wrapper rectangle-->
    <div class="rectangle-bottom-left"></div>
    <div class="rectangle-bottom-right"></div>
    <div class="rectangle-top-left"></div>
    <div class="rectangle-top-right"></div>
    <!-- libarary  script files-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/js/lib/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">tinymce.init({ selector: "textarea" });</script>
    <!--own-js-->
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/js/jquery.js"></script >
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/js/cart.js"></script>
    </body>

</html>
<?php }} ?>
