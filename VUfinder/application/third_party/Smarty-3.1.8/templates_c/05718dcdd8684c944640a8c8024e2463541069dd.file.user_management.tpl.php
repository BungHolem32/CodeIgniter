<?php /* Smarty version Smarty-3.1.8, created on 2017-01-17 15:21:34
         compiled from "application\views\contents\cms\user_management.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27960556330cba32797-66729488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05718dcdd8684c944640a8c8024e2463541069dd' => 
    array (
      0 => 'application\\views\\contents\\cms\\user_management.tpl',
      1 => 1484659014,
      2 => 'file',
    ),
    '9d6b3a56552c7c2260be769d23f2fd3656c14f7b' => 
    array (
      0 => 'application\\views\\templates\\cms\\script.tpl',
      1 => 1484650243,
      2 => 'file',
    ),
    '8de67abfa9907e8a7a9868e5de750ddef49b38a6' => 
    array (
      0 => 'application\\views\\templates\\cms\\nav-bar_cms.tpl',
      1 => 1484662839,
      2 => 'file',
    ),
    'aa781706cdffe628e5b745e9cc5cbf94a3d6e049' => 
    array (
      0 => 'application\\views\\templates\\cms\\css.tpl',
      1 => 1484650243,
      2 => 'file',
    ),
    '3c0ed763508cdc14b521393fabcc46700a08e9a9' => 
    array (
      0 => 'application\\views\\templates\\cms\\cms-layout.tpl',
      1 => 1484580840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27960556330cba32797-66729488',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_556330cbb2b131_77900805',
  'variables' => 
  array (
    'title' => 0,
    'uri_site5' => 0,
    'uri_site3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556330cbb2b131_77900805')) {function content_556330cbb2b131_77900805($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--libraries  css-->
    <link rel="stylesheet" href="/public/css/cms/bootstrap.css">
    <link rel="stylesheet" href="/public/css/lib/jquery-ui.css"/>
    <link rel="stylesheet" href="/public/css/lib/font-awesome.css">
    <!--own css -->
    <link rel="stylesheet" href="/public/css/lib/Digital-7.css"/>
    <link rel="stylesheet" href="/public/css/general_style.css"/>
    <link rel="stylesheet" href="/public/css/cms/cms_css.css"/>
    <link rel="stylesheet" href="/public/css/cms/cms_css_responsive.css"/>
    <link rel="stylesheet" media="only screen and (max-width:1280px)" href="/public/css/cms/tablet.css"/>
    <link rel="stylesheet" media="only screen and  (max-width:780px)" href="/public/css/cms/mobile.css"/>
    <script> var CI_ROOT = '<?php echo site_url();?>
'; </script>

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <script>var URL = "<?php if (!empty($_smarty_tpl->tpl_vars['uri_site5']->value)) {?><?php echo $_smarty_tpl->tpl_vars['uri_site5']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['uri_site3']->value;?>
<?php }?>"</script>
</head>

<body>


<div class="container-fluid">
    <div class="container">

        

        
    
    <div class=" menu_cms col-md-12 text-center">
        <ul>
            <li><a class="col-md-2" href="/cms/dashboard/">Statistics</a></li>
            <li><a class="col-md-2" href="/cms/dashboard/product_management">Products Management</a></li>
            <li><a class="col-md-2" href="/cms/dashboard/category_management"> Category Management</a></li>
            <li><a class="col-md-2" href="/cms/dashboard/user_management">Users Management</a></li>
            <li><a class="col-md-2" href="/cms/dashboard/orders_summery">Order Summery</a></li>
            <li><a class="col-md-2" href="/">Back To site</a></li>

            <li class="small-menu">Menu
                <ul>
                    <li><a class="col-md-2" href="/cms/dashboard/">Statistics</a></li>
                    <li><a class="col-md-2" href="/cms/dashboard/product_management">Products Management</a></li>
                    <li><a class="col-md-2" href="/cms/dashboard/category_management"> Category Management</a></li>
                    <li><a class="col-md-2" href="/cms/dashboard/user_management">Users Management</a></li>
                    <li><a class="col-md-2" href="/cms/dashboard/orders_summery">Order Summery</a></li>
                    <li><a class="col-md-2" href="/">Back To site</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <br/>
    <!--wrapper rectangle-->
    <div class="rectangle-bottom-left"></div>
    <div class="rectangle-bottom-right"></div>
    <div class="rectangle-top-left"></div>
    <div class="rectangle-top-right"></div>
    


        <div class="content-cms"
             url="<?php if (!empty($_smarty_tpl->tpl_vars['uri_site5']->value)) {?><?php echo $_smarty_tpl->tpl_vars['uri_site5']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['uri_site3']->value;?>
<?php }?>">
    <h1 class=" text-center">User Managment</h1>

   <div class="userList">
       <h2>Summery</h2>
        <table>
               <tr>
                   <th>Id</th>
                   <th>First Name</th>
                   <th>Last Name</th>
                   <th>gender</th>
                   <th>email</th>
                   <th>type</th>
               </tr>

               <?php  $_smarty_tpl->tpl_vars['users_tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['users_tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['users_tab']->key => $_smarty_tpl->tpl_vars['users_tab']->value) {
$_smarty_tpl->tpl_vars['users_tab']->_loop = true;
?>


                    <tr>
                     <td><?php echo $_smarty_tpl->tpl_vars['users_tab']->value['id'];?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['users_tab']->value['firstName'];?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['users_tab']->value['lastName'];?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['users_tab']->value['gender'];?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['users_tab']->value['email'];?>
</td>
                     <td><?php echo $_smarty_tpl->tpl_vars['users_tab']->value['type'];?>
</td>

                    </tr>

               <?php } ?>
        </table>
       <div class="flashdata"></div>
   </div>

    
    <div class="user_managment editUser title_font">
        <h2 class="text-center">Edit </h2>
        <form method="post" action="/cms/dashboard/user_management">
            <label for = "email">Select Name</label>
            <select class="Select_changeUser" name = "select-box" >
                <?php  $_smarty_tpl->tpl_vars['users'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['users']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['users']->key => $_smarty_tpl->tpl_vars['users']->value) {
$_smarty_tpl->tpl_vars['users']->_loop = true;
?>
                    <option value = "<?php echo $_smarty_tpl->tpl_vars['users']->value['id'];?>
" <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['users']->value['id'], null, 0);?> ><?php echo $_smarty_tpl->tpl_vars['users']->value['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['users']->value['lastName'];?>
</option>
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

        <form method="post" action="/cms/dashboard/user_management">
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
        <label for = "email">Choose User Email</label>
        <form action = "/cms/dashboard/user_management" method="post">
        <select class="Select_changeUser" name = "select-box" >
            <?php  $_smarty_tpl->tpl_vars['users'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['users']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['users']->key => $_smarty_tpl->tpl_vars['users']->value) {
$_smarty_tpl->tpl_vars['users']->_loop = true;
?>

                    <option value = "<?php echo $_smarty_tpl->tpl_vars['users']->value['id'];?>
" <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['users']->value['id'], null, 0);?> ><?php echo $_smarty_tpl->tpl_vars['users']->value['email'];?>
</option>
            <?php } ?>
        </select>
        </form>
        <a class="select"   href="/cms/dashboard/delete_form//<?php echo $_smarty_tpl->tpl_vars['uri_site3']->value;?>
/">delete</a>
        <?php if (isset($_POST['submit_edit'])||isset($_POST['submit_add'])) {?>

        <?php } else { ?>
            <div class="error_val" > <?php echo validation_errors();?>
 </div>
            <div class="flashdata"><?php if (!empty($_smarty_tpl->tpl_vars['flash_delete']->value)) {?><?php echo $_smarty_tpl->tpl_vars['flash_delete']->value;?>
<?php }?></div>
        <?php }?>

    </div>

</div>

    </div>
    

</div>
</div>
<div class="overlay"></div>



<div class="script">
    <!-- libarary  script files-->
    <script src="/public/js/lib/jquery.js"></script>
    <script src="/public/js/lib/jquery-ui.js"></script>
    <script src="/public/js/lib/bootstrap.js"></script>
    <script src="/public/js/lib/jquery.placeholder.js"></script>
    <script src="/public/js/lib/tinymce/tinymce.min.js"></script>
    <script>tinymce.init( { selector: "textarea" , width : 250, theme_advanced_resizing:false} );</script>
    <!--own-js-->
    <script src="/public/js/cms/cms-jquery-user.js"></script>
</div>
</body>
</html>
<?php }} ?>
