<?php /* Smarty version Smarty-3.1.8, created on 2017-01-17 15:10:10
         compiled from "application\views\contents\user\edit_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1658754e354978fbe01-55211418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52246a0eed94ec4111c28e7987b54b165f1a451e' => 
    array (
      0 => 'application\\views\\contents\\user\\edit_form.tpl',
      1 => 1484656991,
      2 => 'file',
    ),
    '702b44ce1022dcc41f079dd59ffc76fddafde343' => 
    array (
      0 => 'application\\views\\templates\\site\\scripts.tpl',
      1 => 1484649955,
      2 => 'file',
    ),
    '8cc1f024950b18759f818209a6652d83a07c0f78' => 
    array (
      0 => 'application\\views\\templates\\site\\footer.tpl',
      1 => 1484657060,
      2 => 'file',
    ),
    'e47eaaa38affc46aa73033471bfd07f4943b6f68' => 
    array (
      0 => 'application\\views\\templates\\site\\nav-bar.tpl',
      1 => 1484653200,
      2 => 'file',
    ),
    '3958dc81dcf630d792123fd19330a02992b297cb' => 
    array (
      0 => 'application\\views\\templates\\site\\css.tpl',
      1 => 1484649919,
      2 => 'file',
    ),
    'f63c2e03038075c7b29f1edc46515355d40ced4c' => 
    array (
      0 => 'application\\views\\templates\\site\\main_layout.tpl',
      1 => 1484650110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1658754e354978fbe01-55211418',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54e35497a01661_07077041',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e35497a01661_07077041')) {function content_54e35497a01661_07077041($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'E:\\Projects\\Private\\ServerSide\\CodeIgniter\\VUfinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_replace')) include 'E:\\Projects\\Private\\ServerSide\\CodeIgniter\\VUfinder\\application\\third_party\\Smarty-3.1.8\\libs\\plugins\\modifier.replace.php';
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--libararys  css-->
    <link rel="stylesheet" href="/public/css/lib/bootstrap.css">
    <link rel="stylesheet" href="/public/css/lib/jquery-ui.css"/>
    <link rel="stylesheet" href="/public/css/lib/font-awesome.css">
    <!--own css -->
    <link rel="stylesheet" href="/public/css/lib/Digital-7.css"/>
    <link rel="stylesheet" href="/public/css/general_style.css"/>
    <link rel="stylesheet" href="/public/css/style.css"/>
    <link rel="stylesheet" href="/public/css/responsive.css"  />
    <link rel="stylesheet" href="/public/css/print.css" media="print"/>
    <link rel="stylesheet" media="(min-width: 781px) and (max-width:1280px)" href="/public/css/tablet_site.css">
    <link rel="stylesheet" media="(max-width: 780px)" href="/public/css/mobile_site.css">
    <!--user the site url method  throw js-->
    <script> var CI_ROOT = '/'; </script>

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

    <a href="/">
        <div class="logo">
            <img src="/public/img/logo02.png"  width="50%"  alt=""/>
            <div class="eye_camera"></div>
            <div class="search">
                <a href="/search">
                    <div class="mobile_navbar search_mobile"><img src="/public/img/mobile/search.png" alt=""/></div>
                </a>
            </div>
        </div>
</footer>
            </div>
        
        
            <div class="container row">
        
                
        
                
        
                <article class="content">


<div class=" edit-tpl ">
    <h3 class="centered">account information</h3>

    <!--error reporting-->
    <div class="error_val" ><?php if (!empty($_smarty_tpl->tpl_vars['validate']->value)) {?><?php echo $_smarty_tpl->tpl_vars['validate']->value;?>
<?php }?></div>

    <!-- change first name field-->
    <form action="/user/edit_form" method="post" >
        <div class="form-wrapper">
            <p class="form_hide">Hide</p>

            <li>First Name <br/> <?php echo $_smarty_tpl->tpl_vars['user']->value['first'];?>
</li>
            <input class="input" type='text'  name="firstName" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['first'];?>
" />

            <p class="change">Change</p>
            <label class='centered' for="password_validation">Password</label>
            <input type="password" name="password-first" value=""/?<?php ?>>
            <input type="submit" class="submit_name" name="submit-first_name"  value="confirm"/>
        </div>
    </form>

    <!--change last name field-->
    <form action="/user/edit_form" method="post" >
        <div class="form-wrapper">
            <p class="form_hide">Hide</p>
            <li>Last Name <br/> <?php echo $_smarty_tpl->tpl_vars['user']->value['last'];?>
  </li>
            <input class="input" type='text'  name="lastName" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['last'];?>
" />

            <p class="change">Change</p>
            <label class='centered' for="password_validation">Password</label>
            <input type="password" name="password-last" value="" /?<?php ?>>
            <input type="submit" class="submit_last" name="submit-last_name" value="confirm"/>
        </div>
    </form>


    <!--change email field -->
    <form action="/user/edit_form" method="post" >
        <div class="form-wrapper">
            <p class="form_hide">Hide</p>
            <li>Email Address <br/><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</li>
            <input class="input" type='text' name="email"  value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
"/>

            <p class="change">Change</p>
            <label class='center' for="password_validation">Password</label>
            <input type="password" name="password-email" value=""/?<?php ?>>
            <input type="submit" class="submit_email" name="submit-email" value="confirm"/>
        </div>
    </form>


    <!--change gender  field-->
     <form action="/user/edit_form" method="post" >
         <div class="form-wrapper">
            <p class="form_hide">Hide</p>
            <li>gender <br />  <?php echo $_smarty_tpl->tpl_vars['user']->value['gender'];?>
 </li>


            <div class="input radio_gender">
                <label for="male" class="gender" >Male
                    <input class="edit gender" type='radio' value="male" name="gender" />
                </label >
                <label for="female" class="gender" >Female
                    <input class="edit gender" type='radio' value="female" name="gender" />
                </label >
            </div>

            <p class="change">Change</p>
            <label class='centered' for="password_validation">Password</label>
            <input type="password" name="password-gender" value="" /?<?php ?>>
            <input type="submit" class="submit_gender" name="submit-gender" value="confirm"/>
        </div>
     </form>

    <!--password change field-->
    <form action="/user/edit_form" method="post" >
        <div class="form-wrapper">
            <p class="form_hide">Hide</p>
            <li>current Password <br/></li>

            <input class="input" type='password' name="password-password" value="" />

            <p class="change">Change</p>
            <label class='center' for="password_validation">NEW Password</label>
            <input type="password" name="password"  value=""/?<?php ?>>
            <input type="submit" class="submit_email" name="submit-password" value="confirm"/>
        </div>
    </form>


</div>

</article>
            </div>
        
        </div>
        <div class="scroll_to_top"><img src="/public/img/scroll_to_top.png" alt=""/></div>
        
        <ul class="menu">


    
        <li class="tab about"><a class='title_font' href="/about">About</a></li>
        <li class="tab products">
            <a class='title_font' href="/products">Products</a>
            <span class="tab products search"><a class='title_font' href="/search">Search</a></span>
        </li>
        
        <?php if (isset($_smarty_tpl->tpl_vars['data']->value['is_login'])&&$_smarty_tpl->tpl_vars['data']->value['is_login']==false) {?>
            <li id="log" class="tab login"><a class='title_font' href="/user/login">Login</a></li>
            <li class="tab register"><a class='title_font' href="/user/register">Registration</a></li>
        <?php } else { ?>
            
            <li class="tab cms">
                <div class="tab title_font cms"> Welcome <a href=" /user/edit_form"><?php echo $_smarty_tpl->tpl_vars['session']->value['firstName'];?>
</a>
                    <?php if (($_smarty_tpl->tpl_vars['data']->value['is_admin'])==true) {?>
                        <a class=" tab title_font dashboard" href="/cms/dashboard">Dashboard</a>
                    <?php }?>
                </div>
            </li>
            <li class="tab logout"><a class='title_font' href="/user/logout">logout</a></li>
            
        <?php }?>
        <li class="tab contactUs"><a class='title_font' href="/contactUs">Contact Us</a></li>
        
        <li class="tab image">

            <?php if ($_smarty_tpl->tpl_vars['cart']->value->total_items()>0) {?>
                <span> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_items();?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
 </span>
            <?php }?>
            <a href="/cart/checkout/"><img src="/public/img/cart.png" alt=""/></a>
        </li>


    
    <div class="tablet_nav_bar">
        <ul>
            <li>
                <a href="/about">
                    <div class="tablet_navbar about_tablet">About</div>
                </a>
            </li>
            <li>
                <a href="/products">
                    <div class="tablet_navbar product_tablet">Products</div>
                </a>
                <a href="/search">
                    <div class="tablet_navbar search_tablet">Search</div>
                </a>
            </li>

            <?php if (isset($_smarty_tpl->tpl_vars['data']->value['is_login'])&&$_smarty_tpl->tpl_vars['data']->value['is_login']==false) {?>
                <li>
                    <a href="/user/login">
                        <div class="tablet_navbar login_tablet">Login</div>
                    </a>
                </li>
                <li>
                    <a href="/user/register">
                        <div class="tablet_navbar register_tablet">Registration</div>
                    </a>
                </li>
            <?php } else { ?>
                <li>
                    <div class="tablet_navbar dashboard_tablet">
                        <?php if (($_smarty_tpl->tpl_vars['data']->value['is_admin'])==true) {?>
                            <span>Admin</span>
                            <a href="/cms/dashboard">Dashboard</a>
                        <?php } else { ?>
                            <span><?php echo $_smarty_tpl->tpl_vars['session']->value['firstName'];?>
</span>
                            <a href="/user/edit_form">Edit</a>
                        <?php }?>
                    </div>
                </li>
                <li>
                    <a href="/user/logout">
                        <div class="tablet_navbar">Logout</div>
                    </a>
                </li>
            <?php }?>

        </ul>
    </div>
    <div class="button">
        <img src="/public/img/menu.png" alt=""/>
        <h5><a href="/contactUs/">viewFinder &copy;</a></h5>
    </div>

    <div class="icon_mobile">
        <ul>
            <li>
                <a href="/">
                    <div class="mobile_navbar home_mobile"><img src="/public/img/mobile/home.png" alt=""/></div>
                </a>
            </li>
            <li>
                <a href="/about">
                    <div class="mobile_navbar about_mobile"><img src="/public/img/mobile/about.png" alt=""/></div>
                </a>
            </li>
            <li>
                <a href="/products">
                    <div class="mobile_navbar product_mobile"><img src="/public/img/mobile/product.png" alt=""/></div>
                </a>
            </li>

            <?php if (isset($_smarty_tpl->tpl_vars['data']->value['is_login'])&&$_smarty_tpl->tpl_vars['data']->value['is_login']==false) {?>
                <li>
                    <a href="/user/login">
                        <div class="mobile_navbar login_mobile"><img src="/public/img/mobile/login.png" alt=""/></div>
                    </a>
                </li>
                <li>
                    <a href="/user/register">
                        <div class="mobile_navbar register_mobile"><img src="/public/img/mobile/register.png" alt=""/></div>
                    </a>
                </li>
            <?php } else { ?>
                <li>
                    <div class="mobile_navbar dashboard_mobile">
                        <?php if (($_smarty_tpl->tpl_vars['data']->value['is_admin'])==true) {?>
                            <a href="/cms/dashboard"><img src="/public/img/mobile/cms.png" alt=""/></a>
                        <?php } else { ?>
                            <span><?php echo $_smarty_tpl->tpl_vars['session']->value['firstName'];?>
</span>
                            <a href="/user/edit_form"><img src="/" alt=""/></a>
                        <?php }?>
                    </div>
                </li>
                <li>
                    <a href="/user/logout">
                        <div class="mobile_navbar"><img src="/public/img/mobile/logout.png" alt=""/></div>
                    </a>
                </li>
            <?php }?>
                <li>
                    <a href="/contactUs">
                        <div class="mobile_navbar"><img src="/public/img/mobile/contact.png" alt=""/></div>
                    </a>
                </li>
            <li>

                <?php if ($_smarty_tpl->tpl_vars['cart']->value->total_items()>0) {?>
                    <span> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_items();?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
 </span>

                <a href="/cart/checkout"><img src="/public/img/mobile/cart.png" alt=""/></a>
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

        <script src="/public/js/lib/jquery.js"></script>
        <script src="/public/js/lib/jquery-css-transform.js" ></script>
        <script src="/public/js/lib/jquery-animate-css-rotate-scale.js" ></script>
        <script src="/public/js/lib/jquery-ui.js"></script>
        <script src="/public/js/lib/bootstrap.js"></script>
        


        <!--own-js-->
        <script src="/public/js/jquery-user.js"></script >
        <script src="/public/js/cart.js"></script>


    </div>

    </body>

</html>
<?php }} ?>
