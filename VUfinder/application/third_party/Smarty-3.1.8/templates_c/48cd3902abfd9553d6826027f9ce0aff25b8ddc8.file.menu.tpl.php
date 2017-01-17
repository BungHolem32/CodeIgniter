<?php /* Smarty version Smarty-3.1.8, created on 2015-02-17 09:03:11
         compiled from "application\views\templates\boot\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:894754e2f401114dc6-57189795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48cd3902abfd9553d6826027f9ce0aff25b8ddc8' => 
    array (
      0 => 'application\\views\\templates\\boot\\menu.tpl',
      1 => 1424160100,
      2 => 'file',
    ),
    '702b44ce1022dcc41f079dd59ffc76fddafde343' => 
    array (
      0 => 'application\\views\\templates\\site\\scripts.tpl',
      1 => 1423953125,
      2 => 'file',
    ),
    '8cc1f024950b18759f818209a6652d83a07c0f78' => 
    array (
      0 => 'application\\views\\templates\\site\\footer.tpl',
      1 => 1423953619,
      2 => 'file',
    ),
    'e47eaaa38affc46aa73033471bfd07f4943b6f68' => 
    array (
      0 => 'application\\views\\templates\\site\\nav-bar.tpl',
      1 => 1424160189,
      2 => 'file',
    ),
    '3958dc81dcf630d792123fd19330a02992b297cb' => 
    array (
      0 => 'application\\views\\templates\\site\\css.tpl',
      1 => 1424158969,
      2 => 'file',
    ),
    'f63c2e03038075c7b29f1edc46515355d40ced4c' => 
    array (
      0 => 'application\\views\\templates\\site\\main_layout.tpl',
      1 => 1424159962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '894754e2f401114dc6-57189795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54e2f4011d6409_46130016',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e2f4011d6409_46130016')) {function content_54e2f4011d6409_46130016($_smarty_tpl) {?><!doctype html>
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
<title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <script> var CI_ROOT =' <?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
 '; </script>

</head>
    <body >
        <div class="container-fluid">
            <div class = "container row">
                <div class = "header centered">

                    
                </div>


                    <div class="content" ></div >

            </div>
        </div>

        <ul class="menu">
<li class = "tab home">     <a class = 'title_font' href = "<?php echo site_url();?>
">Home              </a> </li>
  <?php if ($_smarty_tpl->tpl_vars['menu']->value) {?>  <li>


</li> <?php }?>
<li class = "tab about">    <a class = 'title_font' href = "<?php echo site_url();?>
about/">About       </a> </li>
<li class = "tab products"> <a class = 'title_font' href = "<?php echo site_url();?>
products/">Products </a> </li>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value['is_login'])&&$_smarty_tpl->tpl_vars['data']->value['is_login']==false) {?>

<li id="log" class = "tab login"> <a class = 'title_font' href = "<?php echo site_url();?>
user/login/">Login           </a> </li>
<li class = "tab register">       <a class = 'title_font' href = "<?php echo site_url();?>
user/register/">Registration </a> </li>

<?php } else { ?>

<li class="tab" ><h3 class = "tab title_font">  Welcome <a href=" <?php echo site_url();?>
user/edit/" ><?php echo $_smarty_tpl->tpl_vars['session']->value['firstName'];?>
</h3>
                             
                             <?php if (($_smarty_tpl->tpl_vars['data']->value['is_admin'])==true) {?>
                                <a class=" tab title_font dashboard" href="<?php echo site_url();?>
cms/dashboard/">CMS Dashboard</a>
                             <?php }?>
</li>
    
<li class = "tab logout">   <a class = 'title_font' href = "<?php echo site_url();?>
user/logout/">logout   </a> </li>

<?php }?>

<li class = "tab contactUs"><a class = 'title_font' href = "<?php echo site_url();?>
contactUs/">Contact Us </a> </li>

<li class=  "tab image">
   
    <?php if ($_smarty_tpl->tpl_vars['cart']->value>0) {?>
        <span> <?php echo $_smarty_tpl->tpl_vars['cart']->value;?>
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
public/js/lib/bootstrap.min.js"></script>
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
