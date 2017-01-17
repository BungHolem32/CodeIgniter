<?php /* Smarty version Smarty-3.1.8, created on 2017-01-17 15:21:29
         compiled from "application\views\contents\cms\category_management.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29834555780f9947034-01031988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2be0682fe15bbc0d32c3c14ed7ca6eed82c62103' => 
    array (
      0 => 'application\\views\\contents\\cms\\category_management.tpl',
      1 => 1484658801,
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
  'nocache_hash' => '29834555780f9947034-01031988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_555780f9a2c0a9_58830981',
  'variables' => 
  array (
    'title' => 0,
    'uri_site5' => 0,
    'uri_site3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555780f9a2c0a9_58830981')) {function content_555780f9a2c0a9_58830981($_smarty_tpl) {?><!doctype html>
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
    <h1 class=" text-center">Catgory</h1>

   <div class="category_list">
        <h2>Summery</h2>
        <table>
               <tr>
                   <th>ID</th>
                   <th>Name</th>
                   <th>Comment</th>
                   <th>Visibility</th>

               </tr>

        <?php  $_smarty_tpl->tpl_vars['categoriesTab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoriesTab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoriesTab']->key => $_smarty_tpl->tpl_vars['categoriesTab']->value) {
$_smarty_tpl->tpl_vars['categoriesTab']->_loop = true;
?>
            <?php  $_smarty_tpl->tpl_vars['categorie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categorie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoriesTab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->key => $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['categorie']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['categorie']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['categorie']->value['comment'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['categorie']->value['visibility'];?>
</td>

                </tr>
            <?php } ?>
        <?php } ?>
        </table>
    <div class="flashdata"></div>
   </div>


    <div class="edit-category" ">
        <h2 class="title txt-center text-center ">Edit</h2>
        <form method="post" action="/cms/dashboard/category_management" >
                <label for="select-category ">Select Category</label>
                <select class='select-category edit' name="select-box" >
                    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
    <?php } ?>
<?php } ?>
                </select>
            <label for="name">Change Name <br/> </label><input name="c-name-edit" type="text"  placeholder="<?php echo $_smarty_tpl->tpl_vars['category_first']->value['name'];?>
"/>
            <label for="machine_name">Change Machine name</label> <input type="text" name="c-machine-edit"  placeholder="<?php echo $_smarty_tpl->tpl_vars['category_first']->value['machine_name'];?>
"/>
            <label  for="visibility">Change visibilty </label>
               <div class='visibility-tab'>
                    <span>On</span>  <input type="checkbox" name="visibility_edit" class="visibility-edit_on"  value='1'  checked/>
                </div>

            <label for="comment">Change Comment</label>  <input type="text"   name="c-comment-edit"  placeholder="<?php echo $_smarty_tpl->tpl_vars['category_first']->value['comment'];?>
"/>
             <input type="submit" name="submit_edit" value="edit"/>
        </form>

        <?php if (isset($_POST['submit_create'])||isset($_POST['submit_delete'])) {?>

<?php } else { ?>
    <div class="error_val_edit text-center"> <?php echo validation_errors();?>
 </div>
    <div class="flashdata"> <?php if (!empty($_smarty_tpl->tpl_vars['flash_edit']->value)) {?><?php echo $_smarty_tpl->tpl_vars['flash_edit']->value;?>
<?php }?> </div>
<?php }?>
    </div>

    <div class="create-category">
        <h2 class="title txt-center text-center ">Create</h2>
        <form method="post" action="/cms/dashboard/category_management" >

            <label for="name">Category Name</label>  <input type="text" name="c_name" placeholder="enter category name"/>
            <label for="machine_name">Machine Name</label> <input type="text" name="c_machine" placeholder="enter name without spaces"/>
            <label  for="visibility">visibility  </label>

                <div class='visibility-tab'>
                    <span>On</span>  <input type="checkbox" name="visibility_create" value='1'/>
                </div>

            <label for="comment">Comment</label>  <input type="text"   name="c_comment" placeholder="max 60 characters"/>
            <input class="create_submit" type="submit" name="submit_create" value="Add" />
        </form>

        <?php if (isset($_POST['submit_delete'])||isset($_POST['submit_edit'])) {?>

<?php } else { ?>
    <div class="error_val"> <?php echo validation_errors();?>
 </div>
    <div class="flashdata"><?php if (!empty($_smarty_tpl->tpl_vars['flash_create']->value)) {?><?php echo $_smarty_tpl->tpl_vars['flash_create']->value;?>
<?php }?></div>
<?php }?>

    </div>

    <div class="delete-category">
        <h2 class="title txt-center text-center ">Delete</h2>
        <form method="post" action="/cms/dashboard/category_management" >

            <label for="name">Category Name</label>
            <select class='select-category delete' name="select-box-del" >
                    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
    <?php } ?>
<?php } ?>
            </select>

            <a class="select"   href="/cms/dashboard/delete_form//<?php echo $_smarty_tpl->tpl_vars['uri_site3']->value;?>
/">delete</a>
        </form>

        <?php if (isset($_POST['submit_create'])||isset($_POST['submit_edit'])) {?>

<?php } else { ?>
    <div class="error_val text-center"><?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 <?php } else { ?><?php echo validation_errors();?>
 <?php }?> </div>
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
