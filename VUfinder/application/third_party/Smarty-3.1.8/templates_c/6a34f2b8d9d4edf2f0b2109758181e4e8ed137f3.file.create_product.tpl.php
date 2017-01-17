<?php /* Smarty version Smarty-3.1.8, created on 2015-06-01 18:29:34
         compiled from "application\views\contents\cms\create_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1958654e0b0bcbb00f7-27221336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a34f2b8d9d4edf2f0b2109758181e4e8ed137f3' => 
    array (
      0 => 'application\\views\\contents\\cms\\create_product.tpl',
      1 => 1433174296,
      2 => 'file',
    ),
    '9d6b3a56552c7c2260be769d23f2fd3656c14f7b' => 
    array (
      0 => 'application\\views\\templates\\cms\\script.tpl',
      1 => 1433091816,
      2 => 'file',
    ),
    '8de67abfa9907e8a7a9868e5de750ddef49b38a6' => 
    array (
      0 => 'application\\views\\templates\\cms\\nav-bar_cms.tpl',
      1 => 1432563844,
      2 => 'file',
    ),
    'aa781706cdffe628e5b745e9cc5cbf94a3d6e049' => 
    array (
      0 => 'application\\views\\templates\\cms\\css.tpl',
      1 => 1433094552,
      2 => 'file',
    ),
    '3c0ed763508cdc14b521393fabcc46700a08e9a9' => 
    array (
      0 => 'application\\views\\templates\\cms\\cms-layout.tpl',
      1 => 1433087238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1958654e0b0bcbb00f7-27221336',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54e0b0bcc00322_28292962',
  'variables' => 
  array (
    'title' => 0,
    'uri_site5' => 0,
    'uri_site3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e0b0bcc00322_28292962')) {function content_54e0b0bcc00322_28292962($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    

<meta name="viewport" content="width=device-width, initial-scale=1">
<!--libraries  css-->
<link rel="stylesheet" href="<?php echo site_url();?>
public/css/cms/bootstrap.css">
<link rel="stylesheet" href="<?php echo site_url();?>
public/css/lib/jquery-ui.css" />
<link rel="stylesheet" href="<?php echo site_url();?>
public/css/lib/font-awesome.css" >

<!--own css -->
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/lib/Digital-7.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/general_style.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/cms/cms_css.css" />
<link rel="stylesheet" href= "<?php echo site_url();?>
public/css/cms/cms_css_responsive.css"/>
<link rel="stylesheet" media="only screen and (max-width:1280px)" href= "<?php echo site_url();?>
public/css/cms/tablet.css" />
<link rel="stylesheet" media="only screen and  (max-width:720px)" href= "<?php echo site_url();?>
public/css/cms/mobile.css"/>


<script> var CI_ROOT ='<?php echo site_url();?>
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
            </li>
            <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/user_management">Users Management</a></li>
            <li><a class="col-md-2" href="<?php echo site_url();?>
cms/dashboard/orders_summery">Order Summery</a></li>
            <li><a class="col-md-2" href="<?php echo site_url();?>
">Back To site</a></li>
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

    <div class="error_val centered" > <?php echo validation_errors();?>
 </div>

    <div class="create_form-style centered ">

        <h3>Create Product</h3>

        <form action="<?php echo site_url();?>
cms/dashboard/create_product/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  method="post" accept-charset="utf-8" enctype="multipart/form-data">

            <?php if (array_key_exists('2',$_smarty_tpl->tpl_vars['category']->value)) {?>
                <select name="categories_input" >
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                        <option  value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                    <?php } ?>
                </select>
            <?php } else { ?>
                <h3><?php echo $_smarty_tpl->tpl_vars['category']->value[0]['name'];?>
</h3>
            <?php }?>

        <div class="product-basic-info">

            <h4>basic Info</h4>
            <label for="name"> Product Name </label>
            <input type="text" name="name"/>

            <label for="company"> Company </label>
            <input type="text" name="company"/>

            <label for="model"> Model </label>
            <input type="text" name="model"/>


            <label for="slogen"> Slogan </label>
            <input type="text"  name="slogan" value="<?php echo set_value('slogan');?>
"/>

        </div>


        <div class="description">
                    <h4>Product Highlights </h4>
                    <label for="description">description</label>
                    <textarea  name="description"  value="<?php echo set_value('description');?>
"> </textarea>
        </div>


        <div class="stock-info">

            <h4>Stock Info</h4>
            <label for="price">Price On Site </label>
            <input type="text" name="price" value="<?php echo set_value('price');?>
"/>


            <label for="quantity">Quantity To sell </label>
            <input type="text" name="quantity" value="<?php echo set_value('quantity');?>
"/>


            <label for="discount">Discount percent</label>
            <input type="text" name="discount" value="<?php echo set_value('discount');?>
"/>

            <label for="visibility">In Stock <br/></label>
            <input type="checkbox" name="visibility"  checked />

        </div>


        <div class="upload">
            <h4>image uploading</h4>

            <label for="desc">Description</label>
            <input type="text"  name='comment' value='<?php echo set_value('comment');?>
' placeholder='comment'/>

            <label for="file_upload">File</label>
            <input type="file" name="userfile" multiple />
        </div>


        <div class="product-info" >
            <h4>Product Information</h4>
            <div class="overview">
                <label for="overview">Overview</label>
                <textarea name="overview_create" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="keyfeatures">
                <label for="keyfeatures">Key Features</label>
                <textarea name="features_create" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="specs">
                <label for="specs">Specs</label>

                <textarea name="specs_create" id="" cols="30" rows="10"></textarea>

            </div>

        </div>


        <input type="submit" name="submit" value="create-now!"/>

        </form >
    </div>
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
public/js/lib/ckeditor/ckeditor.js"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
        CKEDITOR.replace( 'editor3' );
        CKEDITOR.replace( 'editor4' );
    </script>



    <script src="<?php echo site_url();?>
public/js/lib/bootstrap.js"></script>
    <script src="<?php echo site_url();?>
public/js/lib/jquery.placeholder.js"></script>
    <!--own-js-->
    <script src="<?php echo site_url();?>
public/js/jquery-user.js"></script>
    <script src="<?php echo site_url();?>
public/js/cms/cms-jquery-user.js"></script>
    <script src="<?php echo site_url();?>
public/js/lightbox.js"></script>
</div>
</body>
</html>
<?php }} ?>
