<?php /* Smarty version Smarty-3.1.8, created on 2015-05-16 19:03:16
         compiled from "application\views\contents\cms\category_management.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2004955525fe96b4757-05646075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b09f45a603ed6f842baaa2ef11db5bf10b302e0e' => 
    array (
      0 => 'application\\views\\contents\\cms\\category_management.tpl',
      1 => 1431791966,
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
      1 => 1431780101,
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
      1 => 1431794113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2004955525fe96b4757-05646075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55525fe97878d5_94090089',
  'variables' => 
  array (
    'title' => 0,
    'uri_site' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55525fe97878d5_94090089')) {function content_55525fe97878d5_94090089($_smarty_tpl) {?><!doctype html>
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
        <script>var URL =" <?php echo $_smarty_tpl->tpl_vars['uri_site']->value;?>
"</script>
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
cms/dashboard/user_managment">Users Managment</a></li>
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



            <div class="content-cms" url="<?php echo $_smarty_tpl->tpl_vars['uri_site']->value;?>
">
    <h1 class="title_font text-center">Catgory</h1>



    <div class="edit-category" ">
        <h2 class="title txt-center text-center ">Edit</h2>
        <form method="post" action="<?php echo site_url();?>
cms/dashboard/category_managment" >
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

                    <span>On</span>  <input type="checkbox" name="visibility-edit" class="visibility-edit_on"  value='1'  checked/>
                </div>

            <label for="comment">Change Comment</label>  <input type="text"   name="c-comment-edit"  placeholder="<?php echo $_smarty_tpl->tpl_vars['category_first']->value['comment'];?>
"/>
             <input type="submit" name="submit_edit" value="edit"/>
        </form>
        <?php if (isset($_POST['submit_create'])||isset($_POST['submit_delete'])) {?>

        <?php } else { ?>
            <div class="error_val_edit text-center" > <?php echo validation_errors();?>
 </div>
            <div class="flashdata"> <?php if (!empty($_smarty_tpl->tpl_vars['flash_edit']->value)) {?><?php echo $_smarty_tpl->tpl_vars['flash_edit']->value;?>
<?php }?> </div>
        <?php }?>
    </div>

    <div class="create-category">
        <h2 class="title txt-center text-center ">Create</h2>
        <form method="post" action="<?php echo site_url();?>
cms/dashboard/category_managment" >

            <label for="name">Category Name</label>  <input type="text" name="c_name" placeholder="enter category name"/>
            <label for="machine_name">Machine Name</label> <input type="text" name="c_machine" placeholder="enter name without spaces"/>
            <label  for="visibility">visibility  </label>
                <div class='visibility-tab'>
                    <span>On</span>  <input type="checkbox" name="visibility_create" value='1'/>
                </div>
            <label for="comment">Comment</label>  <input type="text"   name="c_comment" placeholder="max 60 characters"/>
            <input type="submit" name="submit_create" value="Add" />
        </form>

        <?php if (isset($_POST['submit_delete'])||isset($_POST['submit_edit'])) {?>

        <?php } else { ?>
                <div class="error_val" > <?php echo validation_errors();?>
 </div>
                <div class="flashdata"><?php if (!empty($_smarty_tpl->tpl_vars['flash_create']->value)) {?><?php echo $_smarty_tpl->tpl_vars['flash_create']->value;?>
<?php }?></div>
        <?php }?>

    </div>

    <div class="delete-category">
        <h2 class="title txt-center text-center ">Delete</h2>
        <form method="post" action="<?php echo site_url();?>
cms/dashboard/category_managment" >

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

            <a class="select"   href="<?php echo site_url();?>
cms/dashboard/delete_form///">delete</a>
            <input type="submit" name="submit_delete" value="delete" class="submit_delete"/>
        </form>

        <?php if (isset($_POST['submit_create'])||isset($_POST['submit_edit'])) {?>

        <?php } else { ?>
            <div class="error_val_delete text-center" ><?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 <?php } else { ?><?php echo validation_errors();?>
 <?php }?> </div>
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
