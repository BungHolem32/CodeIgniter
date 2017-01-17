<?php /* Smarty version Smarty-3.1.8, created on 2015-06-02 17:10:40
         compiled from "application\views\contents\cms\edit_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:605554e12fccbe75b3-12185471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8328e8c2e871b0ce32391677c210b015ce3b138' => 
    array (
      0 => 'application\\views\\contents\\cms\\edit_form.tpl',
      1 => 1433196424,
      2 => 'file',
    ),
    '9d6b3a56552c7c2260be769d23f2fd3656c14f7b' => 
    array (
      0 => 'application\\views\\templates\\cms\\script.tpl',
      1 => 1433238358,
      2 => 'file',
    ),
    '8de67abfa9907e8a7a9868e5de750ddef49b38a6' => 
    array (
      0 => 'application\\views\\templates\\cms\\nav-bar_cms.tpl',
      1 => 1433205439,
      2 => 'file',
    ),
    'aa781706cdffe628e5b745e9cc5cbf94a3d6e049' => 
    array (
      0 => 'application\\views\\templates\\cms\\css.tpl',
      1 => 1433247316,
      2 => 'file',
    ),
    '3c0ed763508cdc14b521393fabcc46700a08e9a9' => 
    array (
      0 => 'application\\views\\templates\\cms\\cms-layout.tpl',
      1 => 1433087238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '605554e12fccbe75b3-12185471',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54e12fcccc8107_77840089',
  'variables' => 
  array (
    'title' => 0,
    'uri_site5' => 0,
    'uri_site3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e12fcccc8107_77840089')) {function content_54e12fcccc8107_77840089($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--libraries  css-->
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/cms/bootstrap.css">
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
public/css/cms/cms_css.css"/>
    <link rel="stylesheet" href="<?php echo site_url();?>
public/css/cms/cms_css_responsive.css"/>
    <link rel="stylesheet" media="only screen and (max-width:1280px)" href="<?php echo site_url();?>
public/css/cms/tablet.css"/>
    <link rel="stylesheet" media="only screen and  (max-width:780px)" href="<?php echo site_url();?>
public/css/cms/mobile.css"/>
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
            <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/">Statistics</a></li>
            <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/product_management">Products Management</a></li>
            <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/category_management"> Category Management</a></li>
            <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/user_management">Users Management</a></li>
            <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/orders_summery">Order Summery</a></li>
            <li><a class="col-md-2" href="<?php echo site_url();?>
">Back To site</a></li>

            <li class="small-menu">Menu
                <ul>
                    <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/">Statistics</a></li>
                    <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/product_management">Products Management</a></li>
                    <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/category_management"> Category Management</a></li>
                    <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/user_management">Users Management</a></li>
                    <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/orders_summery">Order Summery</a></li>
                    <li><a class="col-md-2" href="<?php echo site_url();?>
">Back To site</a></li>
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

    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>



    <div class="edit_form-style centered ">

        <h3>Product Edit form</h3>

            <form action="<?php echo current_url();?>
" method="post" enctype="multipart/form-data" >

            <!------------------------------------------------------------->
            <select  name="categories_input" class="select-box_product">

                   <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['category_id'];?>
" selected ><?php echo $_smarty_tpl->tpl_vars['item']->value['category_name'];?>
</option>

                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>

                    <?php if ($_smarty_tpl->tpl_vars['category']->value['id']!=$_smarty_tpl->tpl_vars['item']->value['category_id']) {?>
                         <option  value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" name="category_id"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
                    <?php }?>

                <?php } ?>
            </select>

            
            <div class="product-basic-info">

                <h4>basic info</h4>
                <label for="name">product name</label>
                <input type="text" name="name" placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" required="required"/>

                <label for="company">company</label>
                <input type="text" name="company" placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['company'];?>
"/>

                <label for="model">model</label>
                <input type="text" name="model" placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['model'];?>
"/>

                <label for="slogen"> slogan</label>
                <input type="text"  name="slogan" placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['slogan'];?>
" required="required"/>

            </div>

            <!--wysiwyg-->
            
            <div class="description">
                    <h4>product highlights </h4>
                <div>
                    <label for="description">description</label>
                    <textarea  name="description"   class="text_area_edit_form" required="required"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</textarea>
                </div>
                <div class="error_val" > <?php echo validation_errors();?>
 </div>
                <div class="flash_update"><?php if (!empty($_smarty_tpl->tpl_vars['flash_update']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['flash_update']->value;?>
 <?php }?></div>

            </div>

                <spacer></spacer>

            
            <div class="stock-info">

                <h4>stock info</h4>
                <label for="price">price on site </label>
                <input type="text" name="price" placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
" required="required"/>

                <label for="quantity">quantity to sell </label>
                <input type="text" name="quantity" placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
" required="required"/>

                <label for="discount">discount percent</label>
                <input type="text" name="discount" placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['discount'];?>
" required="required"/>

                <label for="visibility">in stock <br/></label>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['visibility']==0) {?>
                    <input type="checkbox" name="visibility" />
                <?php } else { ?>
                     <input type="checkbox" name="visibility"  checked />
                <?php }?>

            </div>

                <spacer></spacer>

            
            <div class="upload">
                <h4>image uploading</h4>


                <label for="file_upload">file</label>
                <input type="file" name="userfile" />

                <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['images'])) {?>

                    <?php if (array_key_exists(1,$_smarty_tpl->tpl_vars['item']->value['images'])) {?>

                        <label for="desc">description</label>
                        <input type="text"  name='comment' value='<?php echo $_smarty_tpl->tpl_vars['item']->value['images'][0]['comment'];?>
' placeholder='comment'/>
                        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>


                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->index++;
 $_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->index === 0;
?>

                            <?php if ($_smarty_tpl->tpl_vars['value']->value['active']>0) {?><input type="hidden" count="<?php echo $_smarty_tpl->tpl_vars['count']->value++;?>
"/><?php }?>

                                
                                <?php if ($_smarty_tpl->tpl_vars['value']->first) {?>
                                <img  src ="<?php echo site_url();?>
public/img/products/<?php echo $_smarty_tpl->tpl_vars['value']->value['image'];?>
" alt=""  <?php $_smarty_tpl->tpl_vars['unchecked_main'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value['id'], null, 0);?>">
                                    <div class="icons">
                                        <a class="x_icon main_del fa fa-times fa-lg" href="<?php echo site_url();?>
cms/dashboard/delete_form/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
/edit_product/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
/"></a>
                                        <a class="change_active main fa fa-exchange" data-checked_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"  data-product="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></a>
                                    </div>

                                
                                <?php } else { ?>

                                   <img class="minified_pic" src ="<?php echo site_url();?>
public/img/products/<?php echo $_smarty_tpl->tpl_vars['value']->value['image'];?>
" alt="" <?php $_smarty_tpl->tpl_vars['unchecked_minified'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value['id'], null, 0);?> />
                                 <div class="icons">
                                     <a class="x_icon fa fa-times fa-lg" href="<?php echo site_url();?>
cms/dashboard/delete_form/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
/edit_product/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
/"></a>
                                     <a class="change_active  fa fa-exchange" data-checked_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"  data-product="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></a>
                                 </div>

                                <?php }?>


                            <?php } ?>

                        <?php if ($_smarty_tpl->tpl_vars['count']->value<=0) {?> <div class="error_val" >You Must Activate At list one Image</div><?php }?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['pic']->value)) {?> <div class="flashdata"><?php echo $_smarty_tpl->tpl_vars['pic']->value;?>
</div> <?php }?>
                    <?php } elseif (array_key_exists(0,$_smarty_tpl->tpl_vars['item']->value['images'])) {?>

                        <label for="desc">description</label>
                        <input type="text"  name='comment' placeholder='<?php echo $_smarty_tpl->tpl_vars['item']->value['images'][0]['comment'];?>
' />
                        <img src = "<?php echo site_url();?>
public/img/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['images'][0]['image'];?>
" alt="product_img"  alt='<?php echo $_smarty_tpl->tpl_vars['item']->value['images'][0]['comment'];?>
'  />

                       <?php if ($_smarty_tpl->tpl_vars['item']->value['images'][0]['active']==0) {?>
                        <a class="change_active main_one fa fa-exchange" data-checked_id="<?php echo $_smarty_tpl->tpl_vars['item']->value['images'][0]['id'];?>
" data-product="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Activate</a>
                       <?php }?>

                    <?php } else { ?>

                        <label for="desc">description</label>
                        <input type="text"  name='comment' value='<?php echo $_smarty_tpl->tpl_vars['item']->value['images']['comment'];?>
' placeholder='comment'/>
                        <img  src = "<?php echo site_url();?>
public/img/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['images']['image'];?>
" alt="product_img"  />

                    <?php }?>
                <?php }?>

            </div>

                <spacer></spacer>

            
            <?php  $_smarty_tpl->tpl_vars['product_val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_val']->_loop = false;
 $_smarty_tpl->tpl_vars['product_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_val']->key => $_smarty_tpl->tpl_vars['product_val']->value) {
$_smarty_tpl->tpl_vars['product_val']->_loop = true;
 $_smarty_tpl->tpl_vars['product_key']->value = $_smarty_tpl->tpl_vars['product_val']->key;
?>
                <div class="product-info" >
                    <h4>product information</h4>
                    <div class="overview">
                        <label for="overview">overview</label>
                        <textarea name="overview_edit"   cols="30" rows="10"><?php if (!empty($_smarty_tpl->tpl_vars['product_val']->value['info'])) {?><?php echo $_smarty_tpl->tpl_vars['product_val']->value['info']["overview"];?>
<?php }?></textarea>
                    </div>
                    <div class="keyfeatures">
                        <label for="keyfeatures">key features</label>
                        <textarea name="features_edit"   cols="30" rows="10"><?php if (!empty($_smarty_tpl->tpl_vars['product_val']->value['info'])) {?><?php echo $_smarty_tpl->tpl_vars['product_val']->value['info']["key_features"];?>
<?php }?></textarea>
                    </div>
                    <div class="specs">
                        <label for="specs">specs</label>

                        <textarea name="specs_edit"   cols="30" rows="10" ><?php if (!empty($_smarty_tpl->tpl_vars['product_val']->value['info'])) {?><?php echo $_smarty_tpl->tpl_vars['product_val']->value['info']["specs"];?>
<?php }?></textarea>

                    </div>
                </div>
            <?php } ?>

            <spacer></spacer>

            <input type="submit" name="submit" value = 'edit'/>

        </form >
    <?php } ?>

    <div class="bigimage"><img src=""   width="70%" alt=""/></div>
</div>




</div>

    </div>
    

</div>
</div>
<div class="overlay"></div>



<div class="script">
    <!-- libarary  script files-->
    <script src="<?php echo site_url();?>
public/js/lib/jquery.js"></script>
    <script src="<?php echo site_url();?>
public/js/lib/jquery-ui.js"></script>
    <script src="<?php echo site_url();?>
public/js/lib/bootstrap.js"></script>
    <script src="<?php echo site_url();?>
public/js/lib/jquery.placeholder.js"></script>
    <script src="<?php echo site_url();?>
public/js/lib/tinymce/tinymce.min.js"></script>
    <script>tinymce.init( { selector: "textarea" , width : 250, theme_advanced_resizing:false} );</script>
    <!--own-js-->
    <script src="<?php echo site_url();?>
public/js/cms/cms-jquery-user.js"></script>
</div>
</body>
</html>
<?php }} ?>
