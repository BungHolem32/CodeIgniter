<?php /* Smarty version Smarty-3.1.8, created on 2016-02-16 02:58:17
         compiled from "application/views/contents/cms/create_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112655401456c2e4a927ccb0-68045035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e8ec6c4b81503b8cce970bb3dae0d042b370825' => 
    array (
      0 => 'application/views/contents/cms/create_product.tpl',
      1 => 1454016984,
      2 => 'file',
    ),
    '5d3149dd005d1002aad1b58cc0acba9d49480b7f' => 
    array (
      0 => 'application/views/templates/cms/script.tpl',
      1 => 1454017002,
      2 => 'file',
    ),
    'd586d6457d23c0beee64f4f1443695e7d68ff071' => 
    array (
      0 => 'application/views/templates/cms/nav-bar_cms.tpl',
      1 => 1454017004,
      2 => 'file',
    ),
    'edbab868a81d719c6a3cc76f7aea3574e9f64d87' => 
    array (
      0 => 'application/views/templates/cms/css.tpl',
      1 => 1454017001,
      2 => 'file',
    ),
    '8d196fe9c96148dea250a695153c6697c1c98693' => 
    array (
      0 => 'application/views/templates/cms/cms-layout.tpl',
      1 => 1454017001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112655401456c2e4a927ccb0-68045035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'uri_site5' => 0,
    'uri_site3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56c2e4a93e0110_86201709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c2e4a93e0110_86201709')) {function content_56c2e4a93e0110_86201709($_smarty_tpl) {?><!doctype html>
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
