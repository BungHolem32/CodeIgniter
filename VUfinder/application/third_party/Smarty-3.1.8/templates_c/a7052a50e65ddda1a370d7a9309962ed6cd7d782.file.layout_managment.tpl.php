<?php /* Smarty version Smarty-3.1.8, created on 2015-04-20 23:59:56
         compiled from "application\views\contents\cms\layout_managment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2097954e25ea10522f9-56553996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7052a50e65ddda1a370d7a9309962ed6cd7d782' => 
    array (
      0 => 'application\\views\\contents\\cms\\layout_managment.tpl',
      1 => 1424121504,
      2 => 'file',
    ),
    '9d6b3a56552c7c2260be769d23f2fd3656c14f7b' => 
    array (
      0 => 'application\\views\\templates\\cms\\script.tpl',
      1 => 1429537704,
      2 => 'file',
    ),
    '8de67abfa9907e8a7a9868e5de750ddef49b38a6' => 
    array (
      0 => 'application\\views\\templates\\cms\\nav-bar_cms.tpl',
      1 => 1429567187,
      2 => 'file',
    ),
    'aa781706cdffe628e5b745e9cc5cbf94a3d6e049' => 
    array (
      0 => 'application\\views\\templates\\cms\\css.tpl',
      1 => 1429538004,
      2 => 'file',
    ),
    '3c0ed763508cdc14b521393fabcc46700a08e9a9' => 
    array (
      0 => 'application\\views\\templates\\cms\\cms-layout.tpl',
      1 => 1424303647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2097954e25ea10522f9-56553996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54e25ea10f5ff7_61716190',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e25ea10f5ff7_61716190')) {function content_54e25ea10f5ff7_61716190($_smarty_tpl) {?><!doctype html>
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
                <li><a class= "col-md-3 " href="<?php echo site_url();?>
cms/dashboard/categories">Products Managment</a></li>
                <li><a class= "col-md-3" href="<?php echo site_url();?>
cms/dashboard/layout_managment">Layout Managment</a></li>
                <li><a class= "col-md-3" href="<?php echo site_url();?>
cms/dashboard/orders_summery">Order Summery</a></li>
                <li><a class= "col-md-3" href="<?php echo site_url();?>
cms/dashboard/">Statistics</a></li>

                <li><a class= "col-md-3" href="<?php echo site_url();?>
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

    <h2 class="centerall">Menu Creation</h2>

    <form action="<?php echo current_url();?>
" method="post" >

        <label for="title" >title</label >
        <input type="text" name="title" />

        <label for="t" >Link</label >
        <input type="text" name="content" />

        <input type="submit"  name ='submit' value="create menu.."/>


    </form >


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
<!--own-js-->
    <script src="<?php echo site_url();?>
public/js/cms/cms-jquery.js"></script>
    <script src="<?php echo site_url();?>
public/js/lightbox.js"></script >
</div>
    </body>
</html>
<?php }} ?>
