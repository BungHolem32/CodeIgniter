<?php /* Smarty version Smarty-3.1.8, created on 2015-05-16 14:38:00
         compiled from "application\views\contents\cms\user_managment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29371554fd6d379e353-15491821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd948db1cd975f8dac9cf6d2f19e678a48c9ebec' => 
    array (
      0 => 'application\\views\\contents\\cms\\user_managment.tpl',
      1 => 1431474578,
      2 => 'file',
    ),
    '9d6b3a56552c7c2260be769d23f2fd3656c14f7b' => 
    array (
      0 => 'application\\views\\templates\\cms\\script.tpl',
      1 => 1430938728,
      2 => 'file',
    ),
    '8de67abfa9907e8a7a9868e5de750ddef49b38a6' => 
    array (
      0 => 'application\\views\\templates\\cms\\nav-bar_cms.tpl',
      1 => 1431779495,
      2 => 'file',
    ),
    'aa781706cdffe628e5b745e9cc5cbf94a3d6e049' => 
    array (
      0 => 'application\\views\\templates\\cms\\css.tpl',
      1 => 1429538006,
      2 => 'file',
    ),
    '3c0ed763508cdc14b521393fabcc46700a08e9a9' => 
    array (
      0 => 'application\\views\\templates\\cms\\cms-layout.tpl',
      1 => 1424303648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29371554fd6d379e353-15491821',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_554fd6d3818b52_91957594',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554fd6d3818b52_91957594')) {function content_554fd6d3818b52_91957594($_smarty_tpl) {?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        
<!--libraries  css-->
<link rel="stylesheet" href="<?php echo site_url();?>
public/css/cms/bootstrap.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" >

<!--own css -->
<link rel="stylesheet" href= "<?php echo site_url();?>
public/fonts/Digital-7.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/general_style.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/cms/cms_css.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/cms/cms_css_responsive.css"/>
<script> var CI_ROOT ='<?php echo site_url();?>
'; </script>

        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    </head>

    <body >

    <div class="container-fluid">
        <div class="container">



            

        <div class=" menu_cms col-md-12 text-center">
            <ul>
                <li><a class= "col-md-2" href="<?php echo site_url();?>
cms/dashboard/">Statistics</a></li>
                <li><a class= "col-md-2" href="<?php echo site_url();?>
cms/dashboard/product_managment">Products Managment</a></li>
                <li><a class= "col-md-2" href="<?php echo site_url();?>
cms/dashboard/category_managment"> Category Managment</a></li></li>
                <li><a class= "col-md-2" href="<?php echo site_url();?>
cms/dashboard/users">Users Managment</a></li>
                <li><a class= "col-md-2" href="<?php echo site_url();?>
cms/dashboard/orders_summery">Order Summery</a></li>
                <li><a class= "col-md-2" href="<?php echo site_url();?>
">Back To site</a></li>
            </ul>
        </div>
            <br/>
    <!--wrapper rectangle-->
    <div class="rectangle-bottom-left"></div>
    <div class="rectangle-bottom-right"></div>
    <div class="rectangle-top-left"></div>
    <div class="rectangle-top-right"></div>



            <div class="content-cms" >
    <h1 class=" text-center">User Managment</h1>

    
    <div class="user_managment editUser title_font">
        <h2 class="text-center">Edit </h2>
        <form method="post" action="<?php echo site_url();?>
cms/dashboard/users">
            <label for = "email">Select Name</label>
            <select class="Select_changeUser" name = "select-box" >
                <?php  $_smarty_tpl->tpl_vars['users'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['users']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['users']->key => $_smarty_tpl->tpl_vars['users']->value) {
$_smarty_tpl->tpl_vars['users']->_loop = true;
?>
                    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>

                        <option value = "<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['lastName'];?>
</option>
                    <?php } ?>
                <?php } ?>
            </select>

            <label for="">Change First Name</label>
            <input type="text" name="firstName_edit" placeholder="<?php echo $_smarty_tpl->tpl_vars['first_user']->value['firstName'];?>
" />
            <label for="">Change last Name</label>
            <input type="text" name="lastName_edit" placeholder="<?php echo $_smarty_tpl->tpl_vars['first_user']->value['lastName'];?>
"/>

            <div class="gender">
                <label for="">Change gender</label>
                <?php if ($_smarty_tpl->tpl_vars['first_user']->value['gender']=='Male') {?>
                    <span>Male</span><input type="radio" name="gender_edit" class='gender_male' value="male" selected/>
                    <span>Female</span><input type="radio" name="gender_edit" class='gender_female' value="female"/>
                <?php } else { ?>
                    <span>Male</span><input type="radio" name="gender_edit" class='gender_male' value="male" />
                    <span>Female</span><input type="radio" name="gender_edit" class='gender_female' value="female"  selected/>
                <?php }?>
            </div>

            <div class="role">
                <label for="Role">Change Role</label>
                <span>Administrator</span><input type="radio" name="role_edit" class='role_admin' value="admin"/>
                <span>Authenticated</span><input type="radio" name="role_edit" class='role_autenticate' value="autenticate"/>
                <span>Guest</span><input type="radio" name="role_edit" value="guest" class="role_guest"/>
            </div>

            <label for="">Change Email</label>
            <input name="email_edit" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['first_user']->value['email'];?>
"/>
            <label for="">Change Password</label>
            <input name="password_edit" type="text"/>
            <input name="submit_edit" type="submit" value="Edit"/>
        </form>

            <?php if (isset($_POST['submit_del'])||isset($_POST['submit_add'])) {?>

            <?php } else { ?>
                <div class="error_val" > <?php echo validation_errors();?>
 </div>
                <div class="flashdata"><?php if (!empty($_smarty_tpl->tpl_vars['flash_edit']->value)) {?><?php echo $_smarty_tpl->tpl_vars['flash_edit']->value;?>
<?php }?></div>
            <?php }?>

    </div>

    
    <div class="user_managment addUser title_font">
        <h2 class="text-center">Add </h2>

        <form method="post" action="<?php echo site_url();?>
cms/dashboard/users">
            <label for="">first Name</label>
            <input type="text" name="firstName_add" />
            <label for="">last Name</label>
            <input type="text" name="lastName_add"/>

            <div class="gender">
                <label for="">gender</label>
                <span>Male</span><input type="radio" name="gender_add" value="male"/>
                <span>Female</span><input type="radio" name="gender_add" value="female"/>
            </div>

            <div class="role">
                <label for="">Role</label>
                <span>Administrator</span><input type="radio" name="role_add" value="admin"/>
                <span>Authenticated</span><input type="radio" name="role_add" value="authenticated"/>
                <span>guest</span><input type="radio" name="role_add" value="guest"/>
            </div>

            <label for="">Email</label>
            <input name="email_add" type="text"/>
            <label for="">Password</label>
            <input name="password_add" type="text"/>
            <input name="submit_add" type="submit" value="ADD"/>

        </form>
        <?php if (isset($_POST['submit_edit'])||isset($_POST['submit_del'])) {?>

        <?php } else { ?>
            <div class="error_val" > <?php echo validation_errors();?>
 </div>
            <div class="flashdata"><?php if (!empty($_smarty_tpl->tpl_vars['flash_create']->value)) {?><?php echo $_smarty_tpl->tpl_vars['flash_create']->value;?>
<?php }?></div>
        <?php }?>

    </div>

    
    <div class="user_managment delUser title_font">

        <h2 class="text-center">Delete</h2>
        <label for = "email">Choose Email</label>

        <form action = "<?php echo site_url();?>
cms/dashboard/users" method="post">
        <select class="Select_changeUser" name = "select-box" >
            <?php  $_smarty_tpl->tpl_vars['users'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['users']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['users']->key => $_smarty_tpl->tpl_vars['users']->value) {
$_smarty_tpl->tpl_vars['users']->_loop = true;
?>
                <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                    <option value = "<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</option>
                <?php } ?>
            <?php } ?>
        </select>
        <input type = "submit" name="submit_del" value="DEL" />
        </form>

        <?php if (isset($_POST['submit_edit'])||isset($_POST['submit_add'])) {?>

        <?php } else { ?>
            <div class="error_val" > <?php echo validation_errors();?>
 </div>
            <div class="flashdata"><?php if (!empty($_smarty_tpl->tpl_vars['flash_delete']->value)) {?><?php echo $_smarty_tpl->tpl_vars['flash_delete']->value;?>
<?php }?></div>
        <?php }?>


    </div>




</div >

        </div>


        </div>
    </div>
    <div class="overlay"></div>


    
    <div class="script">
<!-- libarary  script files-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>
public/js/lib/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>
public/js/lib/bootstrap.js"></script>
<script type="text/javascript">tinymce.init({ selector: "textarea" });</script>
<script src="<?php echo site_url();?>
public/js/jquery.placeholder.js"></script>
<!--own-js-->
    <script src="<?php echo site_url();?>
public/js/cms/cms-jquery.js"></script>
    <script src="<?php echo site_url();?>
public/js/lightbox.js"></script >
</div>
    </body>
</html>
<?php }} ?>
