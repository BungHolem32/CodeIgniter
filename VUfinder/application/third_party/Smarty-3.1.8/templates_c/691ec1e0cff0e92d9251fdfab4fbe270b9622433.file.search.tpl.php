<?php /* Smarty version Smarty-3.1.8, created on 2016-01-29 18:06:18
         compiled from "application/views/contents/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20948344185576c5678fe822-50942064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '691ec1e0cff0e92d9251fdfab4fbe270b9622433' => 
    array (
      0 => 'application/views/contents/search.tpl',
      1 => 1454016509,
      2 => 'file',
    ),
    '329e5fd343089af5638f148053d0298a426ff4ad' => 
    array (
      0 => 'application/views/templates/site/scripts.tpl',
      1 => 1454017007,
      2 => 'file',
    ),
    'b74faec9a2caceb6f7b69542e6674c84f88db8c8' => 
    array (
      0 => 'application/views/templates/site/footer.tpl',
      1 => 1454017006,
      2 => 'file',
    ),
    '84f12c68d7dbd5e3613d6b61f1b786ec9149c146' => 
    array (
      0 => 'application/views/templates/site/nav-bar.tpl',
      1 => 1454017007,
      2 => 'file',
    ),
    'ea25d02feba01fbeb5bc36725f5de55f3d7655cb' => 
    array (
      0 => 'application/views/templates/site/css.tpl',
      1 => 1454017005,
      2 => 'file',
    ),
    'fa2668f2215ea7b58ebf66d5fa7187ac9fb49abc' => 
    array (
      0 => 'application/views/templates/site/main_layout.tpl',
      1 => 1454017006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20948344185576c5678fe822-50942064',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5576c567a85f50_78885577',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5576c567a85f50_78885577')) {function content_5576c567a85f50_78885577($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/home2/amazings/public_html/VUfinder/application/third_party/Smarty-3.1.8/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_replace')) include '/home2/amazings/public_html/VUfinder/application/third_party/Smarty-3.1.8/libs/plugins/modifier.replace.php';
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--libararys  css-->
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/lib/bootstrap.css">
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/lib/jquery-ui.css"/>
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/lib/font-awesome.css">
    <!--own css -->
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/lib/Digital-7.css"/>
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/general_style.css"/>
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/style.css"/>
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/responsive.css"  />
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/print.css" media="print"/>
    <link rel="stylesheet" media="(min-width: 781px) and (max-width:1280px)" href="<?php echo site_url();?>
public/css/tablet_site.css">
    <link rel="stylesheet" media="(max-width: 780px)" href="<?php echo site_url();?>
public/css/mobile_site.css">
    <!--user the site url method  throw js-->
    <script> var CI_ROOT = '<?php echo site_url();?>
'; </script>

        <title> <?php echo smarty_modifier_replace(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['title']->value,true),'_',' ');?>
</title>
    
    </head>
    <body>
    
    <div class="se-pre-con"></div>
    <div class="black"></div>

    <div class='overlay'></div>
        <div class="close"></div>
        
        <div class="container-fluid">
        
            <div class="header centered">
                <footer>

    <a href="<?php echo site_url();?>
">
        <div class="logo">
            <img src="<?php echo site_url();?>
public/img/logo02.png"  width="50%"  alt=""/>
            <div class="eye_camera"></div>
            <div class="search">
                <a href="<?php echo site_url();?>
search/">
                    <div class="mobile_navbar search_mobile"><img src="<?php echo site_url();?>
public/img/mobile/search.png" alt=""/></div>
                </a>
            </div>
        </div>
</footer>
            </div>
        
        
            <div class="container row">
        
                
        
                
        
                <article class="content">

    <div class="search-tpl">
        <label class="centerall" for="search-btn">Search By Keyword
            <input type="text"  class='search-btn'/>
        </label>

        <div class="search_view">Results: <span class="box"></div>
        <div class= 'products'></div>
    </div>

</article>
            </div>
        
        </div>
        <div class="scroll_to_top"><img src="<?php echo site_url();?>
public/img/scroll_to_top.png" alt=""/></div>
        
        <ul class="menu">

    
        <li class="tab about"><a class='title_font' href="<?php echo site_url();?>
about/">About</a></li>
        <li class="tab products">
            <a class='title_font' href="<?php echo site_url();?>
products/">Products</a>
            <span class="tab products search"><a class='title_font' href="<?php echo site_url();?>
search/">Search</a></span>
        </li>
        
        <?php if (isset($_smarty_tpl->tpl_vars['data']->value['is_login'])&&$_smarty_tpl->tpl_vars['data']->value['is_login']==false) {?>
            <li id="log" class="tab login"><a class='title_font' href="<?php echo site_url();?>
user/login/">Login</a></li>
            <li class="tab register"><a class='title_font' href="<?php echo site_url();?>
user/register/">Registration</a></li>
        <?php } else { ?>
            
            <li class="tab cms">
                <div class="tab title_font cms"> Welcome <a href=" <?php echo site_url();?>
user/edit_form/"><?php echo $_smarty_tpl->tpl_vars['session']->value['firstName'];?>
</a>
                    <?php if (($_smarty_tpl->tpl_vars['data']->value['is_admin'])==true) {?>
                        <a class=" tab title_font dashboard" href="<?php echo site_url();?>
cms/dashboard/">Dashboard</a>
                    <?php }?>
                </div>
            </li>
            <li class="tab logout"><a class='title_font' href="<?php echo site_url();?>
user/logout/">logout</a></li>
            
        <?php }?>
        <li class="tab contactUs"><a class='title_font' href="<?php echo site_url();?>
contactUs/">Contact Us</a></li>
        
        <li class="tab image">

            <?php if ($_smarty_tpl->tpl_vars['cart']->value->total_items()>0) {?>
                <span> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_items();?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
 </span>
            <?php }?>
            <a href="<?php echo site_url();?>
cart/checkout/"><img src="<?php echo site_url();?>
public/img/cart.png" alt=""/></a>
        </li>


    
    <div class="tablet_nav_bar">
        <ul>
            <li>
                <a href="<?php echo site_url();?>
about/">
                    <div class="tablet_navbar about_tablet">About</div>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url();?>
products/">
                    <div class="tablet_navbar product_tablet">Products</div>
                </a>
                <a href="<?php echo site_url();?>
search/">
                    <div class="tablet_navbar search_tablet">Search</div>
                </a>
            </li>

            <?php if (isset($_smarty_tpl->tpl_vars['data']->value['is_login'])&&$_smarty_tpl->tpl_vars['data']->value['is_login']==false) {?>
                <li>
                    <a href="<?php echo site_url();?>
user/login/">
                        <div class="tablet_navbar login_tablet">Login</div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url();?>
user/register/">
                        <div class="tablet_navbar register_tablet">Registration</div>
                    </a>
                </li>
            <?php } else { ?>
                <li>
                    <div class="tablet_navbar dashboard_tablet">
                        <?php if (($_smarty_tpl->tpl_vars['data']->value['is_admin'])==true) {?>
                            <span>Admin</span>
                            <a href="<?php echo site_url();?>
cms/dashboard/">Dashboard</a>
                        <?php } else { ?>
                            <span><?php echo $_smarty_tpl->tpl_vars['session']->value['firstName'];?>
</span>
                            <a href="<?php echo site_url();?>
user/edit_form/">Edit</a>
                        <?php }?>
                    </div>
                </li>
                <li>
                    <a href="<?php echo site_url();?>
user/logout/">
                        <div class="tablet_navbar">Logout</div>
                    </a>
                </li>
            <?php }?>

        </ul>
    </div>
    <div class="button">
        <img src="<?php echo site_url();?>
public/img/menu.png" alt=""/>
        <h5><a href="<?php echo site_url();?>
contactUs/">viewFinder &copy;</a></h5>
    </div>

    <div class="icon_mobile">
        <ul>
            <li>
                <a href="<?php echo site_url();?>
">
                    <div class="mobile_navbar home_mobile"><img src="<?php echo site_url();?>
public/img/mobile/home.png" alt=""/></div>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url();?>
about/">
                    <div class="mobile_navbar about_mobile"><img src="<?php echo site_url();?>
public/img/mobile/about.png" alt=""/></div>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url();?>
products/">
                    <div class="mobile_navbar product_mobile"><img src="<?php echo site_url();?>
public/img/mobile/product.png" alt=""/></div>
                </a>
            </li>

            <?php if (isset($_smarty_tpl->tpl_vars['data']->value['is_login'])&&$_smarty_tpl->tpl_vars['data']->value['is_login']==false) {?>
                <li>
                    <a href="<?php echo site_url();?>
user/login/">
                        <div class="mobile_navbar login_mobile"><img src="<?php echo site_url();?>
public/img/mobile/login.png" alt=""/></div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url();?>
user/register/">
                        <div class="mobile_navbar register_mobile"><img src="<?php echo site_url();?>
public/img/mobile/register.png" alt=""/></div>
                    </a>
                </li>
            <?php } else { ?>
                <li>
                    <div class="mobile_navbar dashboard_mobile">
                        <?php if (($_smarty_tpl->tpl_vars['data']->value['is_admin'])==true) {?>
                            <a href="<?php echo site_url();?>
cms/dashboard/"><img src="<?php echo site_url();?>
public/img/mobile/cms.png" alt=""/></a>
                        <?php } else { ?>
                            <span><?php echo $_smarty_tpl->tpl_vars['session']->value['firstName'];?>
</span>
                            <a href="<?php echo site_url();?>
user/edit_form/"><img src="<?php echo site_url();?>
" alt=""/></a>
                        <?php }?>
                    </div>
                </li>
                <li>
                    <a href="<?php echo site_url();?>
user/logout/">
                        <div class="mobile_navbar"><img src="<?php echo site_url();?>
public/img/mobile/logout.png" alt=""/></div>
                    </a>
                </li>
            <?php }?>
                <li>
                    <a href="<?php echo site_url();?>
contactUs/">
                        <div class="mobile_navbar"><img src="<?php echo site_url();?>
public/img/mobile/contact.png" alt=""/></div>
                    </a>
                </li>
            <li>

                <?php if ($_smarty_tpl->tpl_vars['cart']->value->total_items()>0) {?>
                    <span> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_items();?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
 </span>

                <a href="<?php echo site_url();?>
cart/checkout/"><img src="<?php echo site_url();?>
public/img/mobile/cart.png" alt=""/></a>
                    <?php }?>
            </li>

        </ul>
    </div>
    <div class="copyright">this site was built by Ilan Vachtel as final project</div>
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
        


        <!--own-js-->
        <script src="<?php echo site_url();?>
public/js/jquery-user.js"></script >
        <script src="<?php echo site_url();?>
public/js/cart.js"></script>


    </div>

    </body>

</html>
<?php }} ?>
