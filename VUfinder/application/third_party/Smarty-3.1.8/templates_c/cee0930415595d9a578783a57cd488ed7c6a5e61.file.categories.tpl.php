<?php /* Smarty version Smarty-3.1.8, created on 2015-02-14 19:32:14
         compiled from "application\views\templates\contents\products\products_managment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2621954df926467acf1-06839277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cee0930415595d9a578783a57cd488ed7c6a5e61' => 
    array (
      0 => 'application\\views\\templates\\contents\\products\\products_managment.tpl',
      1 => 1423938730,
      2 => 'file',
    ),
    'e99c00dbdcb7e5cf69cc35eaea03e94349c13e03' => 
    array (
      0 => 'application\\views\\templates\\scripts.tpl',
      1 => 1423929727,
      2 => 'file',
    ),
    'b533d1edca42649560846b9ebc978c0398de6ee9' => 
    array (
      0 => 'application\\views\\templates\\footer.tpl',
      1 => 1423913172,
      2 => 'file',
    ),
    'b668fb43682cf126ad7db6562e5e1f4b72af9970' => 
    array (
      0 => 'application\\views\\templates\\nav-bar.tpl',
      1 => 1423929727,
      2 => 'file',
    ),
    '1bf42d4cd0b48fb274a57681049c18fe1295050f' => 
    array (
      0 => 'application\\views\\templates\\css.tpl',
      1 => 1423929727,
      2 => 'file',
    ),
    '42b7de14b4c4a62a86a2e3813af6dfe11432342b' => 
    array (
      0 => 'application\\views\\templates\\main_layout.tpl',
      1 => 1423929681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2621954df926467acf1-06839277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54df92647779f5_72701928',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df92647779f5_72701928')) {function content_54df92647779f5_72701928($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    
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


                    <div class="content" >

<h1 class="header_fonts centered">Our Products Type</h1>

<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>

    <div class="categories">
        <ul>

            <center> <a href='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['value']->value['machine_name'];?>
/' class="category">
                <li> <h4 class="font_digital centered"> <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
 </h4></li>

                <li><center><img  src='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/img/categories/<?php echo $_smarty_tpl->tpl_vars['value']->value['image'];?>
' alt=""   width="150px"/></center></li>
                <li class="centered"><?php echo $_smarty_tpl->tpl_vars['value']->value['comment'];?>
</li>
                </a></center>
        </ul>
    </div>

<?php } ?>

</div >

            </div>
        </div>

        <ul class="menu">
<li class = "tab home">     <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">Home              </a> </li>
<li class = "tab about">    <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
about/">About       </a> </li>
<li class = "tab products"> <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
products/">Products </a> </li>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value['is_login'])&&$_smarty_tpl->tpl_vars['data']->value['is_login']==false) {?>

<li id="log" class = "tab login"> <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/login/">Login           </a> </li>
<li class = "tab register">       <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/register/">Registration </a> </li>

<?php } else { ?>

<li class="tab" ><h3 class = "tab title_font">  Welcome <a href=" <?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/edit/" ><?php echo $_smarty_tpl->tpl_vars['session']->value['firstName'];?>
</h3>
                             <?php if (($_smarty_tpl->tpl_vars['data']->value['is_admin'])==true) {?>
                                <a class=" tab title_font dashboard" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
cms/dashboard/">CMS Dashboard</a>
                             <?php }?>
</li>
<li class = "tab logout">         <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/logout/">logout   </a> </li>

<?php }?>

<li class = "tab contactUs">      <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
contactUs/">Contact Us </a> </li>
<li class=  "tab image">
   <?php if ($_smarty_tpl->tpl_vars['cart']->value>0) {?>
        <span> <?php echo $_smarty_tpl->tpl_vars['cart']->value;?>
 </span>
   <?php }?>
                                  <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
cart/checkout/"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
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
