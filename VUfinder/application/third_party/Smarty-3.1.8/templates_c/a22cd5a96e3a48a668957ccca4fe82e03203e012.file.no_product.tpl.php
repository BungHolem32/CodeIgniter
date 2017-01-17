<?php /* Smarty version Smarty-3.1.8, created on 2015-05-31 14:36:51
         compiled from "application\views\contents\no_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2610556318871c5a68-03918863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a22cd5a96e3a48a668957ccca4fe82e03203e012' => 
    array (
      0 => 'application\\views\\contents\\no_product.tpl',
      1 => 1432557902,
      2 => 'file',
    ),
    '702b44ce1022dcc41f079dd59ffc76fddafde343' => 
    array (
      0 => 'application\\views\\templates\\site\\scripts.tpl',
      1 => 1433056098,
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
      1 => 1433057580,
      2 => 'file',
    ),
    'f63c2e03038075c7b29f1edc46515355d40ced4c' => 
    array (
      0 => 'application\\views\\templates\\site\\main_layout.tpl',
      1 => 1432729351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2610556318871c5a68-03918863',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55631887250723_38511277',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55631887250723_38511277')) {function content_55631887250723_38511277($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\VUfinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\VUfinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.replace.php';
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        
        
<!--libararys  css-->
<link rel="stylesheet" href="<?php echo site_url();?>
public/css/lib/bootstrap.css">
<link rel="stylesheet" href="<?php echo site_url();?>
public/css/lib/jquery-ui.css" />
<link rel="stylesheet" href="<?php echo site_url();?>
public/css/lib/font-awesome.css" >
<!--own css -->
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/lib/Digital-7.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/general_style.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/style.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/responsive.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/print.css" media="print" />

<!--user the site url method  throw js-->
    
    <script> var CI_ROOT ='<?php echo site_url();?>
'; </script>

        <title> <?php echo smarty_modifier_replace(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['title']->value,true),'_',' ');?>
</title>
    
    </head>
    <body>
    
    
    
        <div class='overlay'></div>
        <div class="close"></div>
        
        <div class="container-fluid">
        
            <div class="header centered">
                <footer>
    <a href="<?php echo site_url();?>
"> <div class="logo"><img src="<?php echo site_url();?>
/public/img/logo2.png"  width="32%" height="32%" alt=""/></div>
    <span>viewFinder &copy;  <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 </span></a>

</footer>
            </div>
        
        
            <div class="container row">
        
                
        
                
        
                <article class="content">
    <div class="no_product">

        <img src="<?php echo site_url();?>
public/img/no_product.png" alt="" width="50%"/>





    </div>



</article>
            </div>
        
        </div>
        <div class="scroll_to_top"><img src="<?php echo site_url();?>
public/img/scroll_to_top.png" alt=""/></div>
        
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


        <script src="<?php echo site_url();?>
public/js/lib/jquery.js"></script>
        <script src="<?php echo site_url();?>
public/js/lib/jquery-css-transform.js" ></script>
        <script src="<?php echo site_url();?>
public/js/lib/jquery-animate-css-rotate-scale.js" ></script>
        <script src="<?php echo site_url();?>
public/js/lib/jquery-ui.js"></script>
        <script src="<?php echo site_url();?>
public/js/lib/bootstrap.js"></script>
        <script src="<?php echo site_url();?>
public/js/lib/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">tinymce.init({ selector: "textarea" });</script>
        <!--own-js-->
        <script src="<?php echo site_url();?>
public/js/jquery-user.js"></script >
        <script src="<?php echo site_url();?>
public/js/cart.js"></script>
        <script src="<?php echo site_url();?>
public/js/lightbox.js"></script >


    </div>
    
    </body>

</html>
<?php }} ?>
