<?php /* Smarty version Smarty-3.1.8, created on 2015-10-12 21:44:45
         compiled from "application\views\contents\cart\checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2227154e64c7737d298-04232531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81d6d6a36ab7daf7130e6a2e825011872d09cf00' => 
    array (
      0 => 'application\\views\\contents\\cart\\checkout.tpl',
      1 => 1444671423,
      2 => 'file',
    ),
    '702b44ce1022dcc41f079dd59ffc76fddafde343' => 
    array (
      0 => 'application\\views\\templates\\site\\scripts.tpl',
      1 => 1444671440,
      2 => 'file',
    ),
    '8cc1f024950b18759f818209a6652d83a07c0f78' => 
    array (
      0 => 'application\\views\\templates\\site\\footer.tpl',
      1 => 1444671442,
      2 => 'file',
    ),
    'e47eaaa38affc46aa73033471bfd07f4943b6f68' => 
    array (
      0 => 'application\\views\\templates\\site\\nav-bar.tpl',
      1 => 1444671444,
      2 => 'file',
    ),
    '3958dc81dcf630d792123fd19330a02992b297cb' => 
    array (
      0 => 'application\\views\\templates\\site\\css.tpl',
      1 => 1444671441,
      2 => 'file',
    ),
    'f63c2e03038075c7b29f1edc46515355d40ced4c' => 
    array (
      0 => 'application\\views\\templates\\site\\main_layout.tpl',
      1 => 1444671441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2227154e64c7737d298-04232531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54e64c775ecb56_61160813',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e64c775ecb56_61160813')) {function content_54e64c775ecb56_61160813($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\xampp\\htdocs\\Vufinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\Vufinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.replace.php';
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

    <?php if (($_smarty_tpl->tpl_vars['cart']->value->total_items()>0)) {?>

        <div   class="checkout-tpl">
            <h2>CHECKOUT</h2>
            <form action="<?php echo site_url();?>
cart/update_Cart/"  method="post" id="checkout-form">

            <table cellpadding="2"  style="width:100%" border="0" >

                <tr>
                    <th>QTY</th>
                    <th>Item Description</th>
                    <th style="text-align:right">Item Price</th>
                    <th style="text-align:right">Sub-Total</th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->contents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['items']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['items']->iteration++;
?>

                    

                    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['items']->iteration;?>
[rowid]" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['rowid'];?>
"/>

                    <tr>
                        <td class="button-checkout">

                            <img  src = '<?php echo site_url();?>
public/img/minus.png' data-role="down" class="update-cart-btn" onclick="removeLocalStorage(<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['items']->value['qty'];?>
,<?php echo $_smarty_tpl->tpl_vars['cart']->value->total_items();?>
)"  />
                            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['items']->iteration;?>
[qty]"  value="<?php echo $_smarty_tpl->tpl_vars['items']->value['qty'];?>
" min="0"   />
                            <img  src = '<?php echo site_url();?>
public/img/plus.png' data-role="up" class="update-cart-btn"  />

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>


                                    <?php if (($_smarty_tpl->tpl_vars['cart']->value->has_options($_smarty_tpl->tpl_vars['items']->value['rowid']))==true) {?>
                                <p>
                                    <?php  $_smarty_tpl->tpl_vars['option_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option_value']->_loop = false;
 $_smarty_tpl->tpl_vars['option_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->product_options($_smarty_tpl->tpl_vars['items']->value['rowid']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option_value']->key => $_smarty_tpl->tpl_vars['option_value']->value) {
$_smarty_tpl->tpl_vars['option_value']->_loop = true;
 $_smarty_tpl->tpl_vars['option_name']->value = $_smarty_tpl->tpl_vars['option_value']->key;
?>
                                        <strong><?php echo $_smarty_tpl->tpl_vars['option_name']->value;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['option_value']->value;?>
<br />
                                    <?php } ?>
                                </p>
                                   <?php }?>
                        </td>

                        <td style="text-align:right"> <?php echo $_smarty_tpl->tpl_vars['cart']->value->format_number($_smarty_tpl->tpl_vars['items']->value['price']);?>
</td>
                        <td style="text-align:right">$<?php echo $_smarty_tpl->tpl_vars['cart']->value->format_number($_smarty_tpl->tpl_vars['items']->value['subtotal']);?>
</td>
                    </tr>

                <?php } ?>

                <tr>
                    <td colspan="2"> </td>
                    <td class="right"><strong>Total</strong></td>
                    <td class="right">$<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cart']->value->total();?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['cart']->value->format_number($_tmp1);?>
</td>
                </tr>

            </table>

        <input class='order' type="button" value="CheckOut"  onclick = " window.location = '<?php echo site_url();?>
cart/payment_N_shipping/'" />
        </form>
    </div>

        <div class="article">Thanks For Your Order , We Will Contact you As soon as Possible</div>

    <?php } else { ?>

        <?php echo redirect();?>
/products

    <?php }?>


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
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
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
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
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
        <script src="<?php echo site_url();?>
public/js/lib/prefixfree.min.js"></script>


        <!--own-js-->
        <script src="<?php echo site_url();?>
public/js/jquery-user.js"></script >
        <script src="<?php echo site_url();?>
public/js/cart.js"></script>


    </div>

    </body>

</html>
<?php }} ?>
