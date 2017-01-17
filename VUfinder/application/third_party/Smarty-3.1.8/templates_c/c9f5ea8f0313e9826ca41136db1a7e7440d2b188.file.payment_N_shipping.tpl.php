<?php /* Smarty version Smarty-3.1.8, created on 2015-06-08 17:23:38
         compiled from "application\views\contents\cart\payment_N_shipping.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6483555a7ce2ee8c27-95482678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9f5ea8f0313e9826ca41136db1a7e7440d2b188' => 
    array (
      0 => 'application\\views\\contents\\cart\\payment_N_shipping.tpl',
      1 => 1432159097,
      2 => 'file',
    ),
    '702b44ce1022dcc41f079dd59ffc76fddafde343' => 
    array (
      0 => 'application\\views\\templates\\site\\scripts.tpl',
      1 => 1433196698,
      2 => 'file',
    ),
    '8cc1f024950b18759f818209a6652d83a07c0f78' => 
    array (
      0 => 'application\\views\\templates\\site\\footer.tpl',
      1 => 1433417767,
      2 => 'file',
    ),
    'e47eaaa38affc46aa73033471bfd07f4943b6f68' => 
    array (
      0 => 'application\\views\\templates\\site\\nav-bar.tpl',
      1 => 1433776663,
      2 => 'file',
    ),
    '3958dc81dcf630d792123fd19330a02992b297cb' => 
    array (
      0 => 'application\\views\\templates\\site\\css.tpl',
      1 => 1433328489,
      2 => 'file',
    ),
    'f63c2e03038075c7b29f1edc46515355d40ced4c' => 
    array (
      0 => 'application\\views\\templates\\site\\main_layout.tpl',
      1 => 1433087199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6483555a7ce2ee8c27-95482678',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_555a7ce3066789_21656405',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555a7ce3066789_21656405')) {function content_555a7ce3066789_21656405($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\VUfinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\VUfinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.replace.php';
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
    


    <div class='overlay'></div>
        <div class="close"></div>
        
        <div class="container-fluid">
        
            <div class="header centered">
                <footer>

    <a href="<?php echo site_url();?>
">
        <div class="logo">
            <img src="<?php echo site_url();?>
/public/img/logo2.png"  width="32%" height="32%" alt=""/>
            <div class="eye_camera"></div>
            <div class="search">
                <a href="<?php echo site_url();?>
search/">
                    <div class="mobile_navbar search_mobile"><img src="<?php echo site_url();?>
public/img/mobile/search.png" alt=""/></div>
                </a>
            </div>
        </div>
    <span>viewFinder &copy;  <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 </span></a>

</footer>
            </div>
        
        
            <div class="container row">
        
                
        
                
        
                <article class="content">

    <div class="payment_n_shipping">

        <div class="form">

            <h2>Shipping Info</h2>
            <div class="person_address">
                <form  action="<?php echo current_url();?>
" method="post">

                    <label for="full_name">Full Name</label>
                    <input type="text" name="fullname" class="" placeholder="first & last "/>

                    <label for="address">street</label>
                    <input type="text" name="street" class="" placeholder="street & number"/>

                    <label for="city">City</label>
                    <input type="text" name="city" class="" placeholder="city"/>

                    <label for="zip">Zip Code</label>
                    <input type="text" name="zip_code" class="" placeholder="zipcode only digits"/>

                    <div class="payment_method">
                        <label for="pay-method">Payment method</label><br/>
                        <span>Isracard</span><input type="checkbox" name="payment" value="isracard"/>
                        <span>Visa</span><input type="checkbox"     name="payment" value="visa"/>
                        <span>American Express</span><input type="checkbox" name="payment" value="american_express"/>
                    </div>

                    <div class="card_number">
                        <label for="pay-method">Card Number</label><br/>
                        <input type="text" name="card_number"/>
                    </div>

                    <div class="error_val" ><?php if ($_smarty_tpl->tpl_vars['validate']->value) {?><?php echo $_smarty_tpl->tpl_vars['validate']->value;?>
<?php }?> </div>
                    <div class="flashdata"><?php if (!empty($_smarty_tpl->tpl_vars['flash_create']->value)) {?><?php echo $_smarty_tpl->tpl_vars['flash_create']->value;?>
<?php }?></div>


            </div>
            <input type="submit" name="submit_information" value="submit information"/>
            </form>
        </div>

    </div>






</article>
            </div>
        
        </div>
        <div class="scroll_to_top"><img src="<?php echo site_url();?>
public/img/scroll_to_top.png" alt=""/></div>
        
        <ul class="menu">

    
        <li class="tab about"><a class='title_font' href="<?php echo site_url();?>
about/">About</a></li>
        <li class="tab products"><a class='title_font' href="<?php echo site_url();?>
products/"> Products </a>
        <span class="tab products search"> <a class='title_font' href="<?php echo site_url();?>
search/"> Search </a>
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
