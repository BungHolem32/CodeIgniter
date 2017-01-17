<?php /* Smarty version Smarty-3.1.8, created on 2015-02-14 00:31:47
         compiled from "application\views\scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239054de88d948a633-47184149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e65e02d9a38d336587dfc0e0604d35ac9b7f53c5' => 
    array (
      0 => 'application\\views\\scripts.tpl',
      1 => 1423869490,
      2 => 'file',
    ),
    'c4c8c470afcc88b5708c9fd02676bffc389b9550' => 
    array (
      0 => 'application\\views\\footer.tpl',
      1 => 1423869490,
      2 => 'file',
    ),
    '2fccc75f47b33b6f7a6133253501404c4b7bd811' => 
    array (
      0 => 'application\\views\\nav-bar.tpl',
      1 => 1423870306,
      2 => 'file',
    ),
    'e15529b2db0dd715894095622e464edd1de06850' => 
    array (
      0 => 'application\\views\\css.tpl',
      1 => 1423869215,
      2 => 'file',
    ),
    '630f3a59456e8e70c3f1d210f48f62603f491c71' => 
    array (
      0 => 'application\\views\\main_layout.tpl',
      1 => 1423870266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239054de88d948a633-47184149',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54de88d952cb60_56650538',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54de88d952cb60_56650538')) {function content_54de88d952cb60_56650538($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
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

<title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    </head>
    <body >
        <div class="container-fluid">
            <div class = "container row">

                <div class = "header centered">
                    
<span>viewFinder &copy;  <?php echo $_smarty_tpl->tpl_vars['Year']->value;?>
 </span>

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
            <ul class="menu">
<li class = "tab home">     <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">Home              </a> </li>
<li class = "tab about">    <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
about/">About       </a> </li>
<li class = "tab products"> <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
products/">Products </a> </li>

<li id="log" class = "tab login"> <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/login/">Login           </a> </li>
<li class = "tab register">       <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/register/">Registration </a> </li>

<li class="tab" ><h3 class = "tab title_font">  Welcome
        <a href=" <?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/edit/" >  </h3> </a >

    <a class=" tab title_font dashboard" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
cms/dashboard/">CMS Dashboard</a>

</li>

<li class = "tab logout">     <a class = 'title_font' href = "<<?php ?>?= site_url('user/logout');    ?<?php ?>>/">logout      </a> </li>


<li class = "tab contactUs">      <a class = 'title_font' href = "<<?php ?>?= site_url('contactUs'); ?<?php ?>>/">Contact Us       </a> </li>

<li class=  "tab image">


     <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
cart/checkout/"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/img/cart.png" alt="" /></a>
</li>
</ul>
            <!--footer menu close-->


        <div class="script">

        
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

    </div>

    </body>

</html>
<?php }} ?>
