<?php /* Smarty version Smarty-3.1.8, created on 2015-06-08 20:21:44
         compiled from "application\views\contents\cart\order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2346054e66881a18573-71954533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '981149a50489ea134efbc081fafd4c02ed11326b' => 
    array (
      0 => 'application\\views\\contents\\cart\\order.tpl',
      1 => 1433787700,
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
  'nocache_hash' => '2346054e66881a18573-71954533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54e66881bd0816_61701421',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e66881bd0816_61701421')) {function content_54e66881bd0816_61701421($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\VUfinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.capitalize.php';
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
    <div class="order_summery">

        <div class="order_complete"><?php if (empty($_smarty_tpl->tpl_vars['order_completed']->value)) {?>
            <div class="shipping_n_payment">
                <!-- title section -->
                <div class="shipping_n_payment_info">
                    <h2>shipping_n_payment</h2>

                    <div class="headers">
                        <div class="payment_info"><h4>Full Name</h4> <br/> <?php echo $_smarty_tpl->tpl_vars['address_n_payment']->value['fullname'];?>
 </div>
                        <div class="payment_info"><h4>Street</h4>    <br/> <?php echo $_smarty_tpl->tpl_vars['address_n_payment']->value['street'];?>
</div>
                        <div class="payment_info"><h4>City</h4>      <br/> <?php echo $_smarty_tpl->tpl_vars['address_n_payment']->value['city'];?>
</div>
                        <div class="payment_info"><h4>Zip Code</h4>  <br/> <?php echo $_smarty_tpl->tpl_vars['address_n_payment']->value['zip_code'];?>
</div>
                        <div class="payment_info"><h4>Payment</h4>   <br/> <?php echo $_smarty_tpl->tpl_vars['address_n_payment']->value['payment'];?>
</div>
                        <div class="payment_info"><h4>Card number</h4> <br/> <?php echo $_smarty_tpl->tpl_vars['address_n_payment']->value['card_number'];?>
</div>
                    </div>
                </div>
            </div>


            <!-- order information section -->
            <div class="form-order-information">

                <!-- title section -->
                <h2>ORDER SUMMERY</h2>

                <table>
                    <div class="oi">
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                            <div class="order_info"><h4>Product</h4>  <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</div>
                            <div class="order_info"><h4>Price</h4>    <?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
$</div>
                            <div class="order_info"><h4>Quantity</h4> <?php echo $_smarty_tpl->tpl_vars['value']->value['qty'];?>
</div>
                            <div class="order_info"><h4>Subtotal</h4> <?php echo $_smarty_tpl->tpl_vars['value']->value['subtotal'];?>
$</div>
                            <div class="order_info"><h4>Total</h4> <?php echo $_smarty_tpl->tpl_vars['totalSum']->value;?>
$</div>
                        <?php } ?>
                    </div>
                </table>

                <!-- print section -->
                <a href="javascript:window.print()">Print the Order</a>

                <form action="<?php echo current_url();?>
" method="post">
                    <input type="submit" name="submit" value="sumbit order"/>
                </form>

            </div>
        </div>
        <?php } else { ?>

        <h2>we thank you  <?php echo $_smarty_tpl->tpl_vars['user_info']->value['fullname'];?>
 for buying with out company ViewFinder &copy; <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 <br/>
            your order info was sent to your mail. <br/>
            your order been Placed , We contact you as soon as possible </h2>

        <?php }?>
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
