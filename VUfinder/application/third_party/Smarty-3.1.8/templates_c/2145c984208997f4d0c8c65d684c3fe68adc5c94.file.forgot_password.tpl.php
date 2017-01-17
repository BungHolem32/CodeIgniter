<?php /* Smarty version Smarty-3.1.8, created on 2015-05-18 20:21:56
         compiled from "application\views\contents\user\forgot_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1498454dfdeb3ec3ba8-09952517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2145c984208997f4d0c8c65d684c3fe68adc5c94' => 
    array (
      0 => 'application\\views\\contents\\user\\forgot_password.tpl',
      1 => 1431973314,
      2 => 'file',
    ),
    '702b44ce1022dcc41f079dd59ffc76fddafde343' => 
    array (
      0 => 'application\\views\\templates\\site\\scripts.tpl',
      1 => 1429537594,
      2 => 'file',
    ),
    '8cc1f024950b18759f818209a6652d83a07c0f78' => 
    array (
      0 => 'application\\views\\templates\\site\\footer.tpl',
      1 => 1428742426,
      2 => 'file',
    ),
    'e47eaaa38affc46aa73033471bfd07f4943b6f68' => 
    array (
      0 => 'application\\views\\templates\\site\\nav-bar.tpl',
      1 => 1431345664,
      2 => 'file',
    ),
    '3958dc81dcf630d792123fd19330a02992b297cb' => 
    array (
      0 => 'application\\views\\templates\\site\\css.tpl',
      1 => 1431345304,
      2 => 'file',
    ),
    'f63c2e03038075c7b29f1edc46515355d40ced4c' => 
    array (
      0 => 'application\\views\\templates\\site\\main_layout.tpl',
      1 => 1428739450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1498454dfdeb3ec3ba8-09952517',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54dfdeb406df30_61102996',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dfdeb406df30_61102996')) {function content_54dfdeb406df30_61102996($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\VUfinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\VUfinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.replace.php';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    
<!--libararys  css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" >
<!--own css -->
<link rel="stylesheet" href= "<?php echo site_url();?>
public/fonts/Digital-7.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/general_style.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/style.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/responsive.css" />
<!--user the site url method  throw js-->
    <script> var CI_ROOT ='<?php echo site_url();?>
'; </script>

    <title> <?php echo smarty_modifier_replace(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['title']->value,true),'_',' ');?>
</title>

</head>
    <body >

    <div class='overlay'></div>
    <div class="close"></div>

    <div class="container-fluid">

        <div class = "header centered">
            <footer>
    <a href="<?php echo site_url();?>
"> <div class="logo"><img src="<?php echo site_url();?>
/public/img/logo2.png"  width="32%" height="32%" alt=""/></div>
    <span>viewFinder &copy;  <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 </span></a>

</footer>
        </div>


            <div class = "container row">






                    <article class="content" >



<div class="forgot_password_tab centered" ><br />
    <div class="error_val" ><?php echo $_smarty_tpl->tpl_vars['validation_error']->value;?>
</div>

    <form action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/forgot_password" method="post">

    <!--title forgot password-->
    <h3>recover Password</h3>



    <label for="email" >Email <br /></label >
     <input type="text" name="email_forgot_password"/><br /><br />
     <input type="text" name="what"/><br /><br />


     <input class='submit-tab font_digital' type="submit" name="sumbit" value="submit"/>
    </form>

    <!--error reporting-->
</div>

</article>
            </div>

        </div>


        <ul class="menu">

    

    <li class = "tab about">    <a class = 'title_font' href = "<?php echo site_url();?>
about/">About</a> </li>
    <li class = "tab products"> <a class = 'title_font' href = "<?php echo site_url();?>
products/"> Products </a>
        <span class = "tab products search"> <a class = 'title_font' href = "<?php echo site_url();?>
search/"> Search </a>
    </li>

    <?php if (isset($_smarty_tpl->tpl_vars['data']->value['is_login'])&&$_smarty_tpl->tpl_vars['data']->value['is_login']==false) {?>

    <li id="log" class = "tab login"> <a class = 'title_font' href = "<?php echo site_url();?>
user/login/">Login</a></li>
    <li class ="tab register"> <a class = 'title_font' href = "<?php echo site_url();?>
user/register/">Registration</a> </li>
    <?php } else { ?>

    <li class="tab cms" ><div class ="tab title_font"> Welcome <a href=" <?php echo site_url();?>
user/edit_form/" ><?php echo $_smarty_tpl->tpl_vars['session']->value['firstName'];?>
</div>

                                 <?php if (($_smarty_tpl->tpl_vars['data']->value['is_admin'])==true) {?>
                                    <a class=" tab title_font dashboard" href="<?php echo site_url();?>
cms/dashboard/">CMS Dashboard</a>
                                 <?php }?>
    </li>

    <li class = "tab logout">   <a class = 'title_font' href = "<?php echo site_url();?>
user/logout/">logout</a> </li>

    <?php }?>

    <li class = "tab contactUs"><a class = 'title_font' href = "<?php echo site_url();?>
contactUs/">Contact Us</a> </li>

    <li class=  "tab image">

        <?php if ($_smarty_tpl->tpl_vars['cart']->value->total_items()>0) {?>

            <span> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_items();?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
 </span>

        <?php }?>
           <a href="<?php echo site_url();?>
cart/checkout/"><img src="<?php echo site_url();?>
public/img/cart.png" alt="" /></a>
    </li>
</ul>


        <div class="script">

        
        <!--wrapper rectangle-->
        <div class="rectangle-bottom-left"></div>
        <div class="rectangle-bottom-right"></div>
        <div class="rectangle-top-left"></div>
        <div class="rectangle-top-right"></div>
        <!-- libarary  script files-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/js/lib/bootstrap.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/js/lib/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">tinymce.init({ selector: "textarea" });</script>
        <!--own-js-->
        <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/js/jquery.js"></script >
        <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/js/cart.js"></script>
        <script src="<?php echo site_url();?>
public/js/lightbox.js"></script >


    </div>

    </body>

</html>
<?php }} ?>
