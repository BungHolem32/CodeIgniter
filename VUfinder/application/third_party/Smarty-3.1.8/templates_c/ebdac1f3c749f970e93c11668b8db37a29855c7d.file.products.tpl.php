<?php /* Smarty version Smarty-3.1.8, created on 2015-02-14 21:02:26
         compiled from "application\views\templates\contents\products\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1049554df8dcc9b6904-92646898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebdac1f3c749f970e93c11668b8db37a29855c7d' => 
    array (
      0 => 'application\\views\\templates\\contents\\products\\product.tpl',
      1 => 1423944145,
      2 => 'file',
    ),
    'e99c00dbdcb7e5cf69cc35eaea03e94349c13e03' => 
    array (
      0 => 'application\\views\\templates\\scripts.tpl',
      1 => 1423929727,
      2 => 'file',
    ),
    'b533d1edca42649560846b9ebc978c0398de6ee9' => 
    array (
      0 => 'application\\views\\templates\\footer.tpl',
      1 => 1423913172,
      2 => 'file',
    ),
    'b668fb43682cf126ad7db6562e5e1f4b72af9970' => 
    array (
      0 => 'application\\views\\templates\\nav-bar.tpl',
      1 => 1423929727,
      2 => 'file',
    ),
    '1bf42d4cd0b48fb274a57681049c18fe1295050f' => 
    array (
      0 => 'application\\views\\templates\\css.tpl',
      1 => 1423929727,
      2 => 'file',
    ),
    '42b7de14b4c4a62a86a2e3813af6dfe11432342b' => 
    array (
      0 => 'application\\views\\templates\\main_layout.tpl',
      1 => 1423929681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1049554df8dcc9b6904-92646898',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_54df8dccabb919_24542634',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df8dccabb919_24542634')) {function content_54df8dccabb919_24542634($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    
<!--libararys  css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" >
<!--own css -->
<link rel="stylesheet" href= "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/fonts/Digital-7.css" />
<link rel="stylesheet" href= "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/css/general_style.css" />
<link rel="stylesheet" href= "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/css/style.css" />
<link rel="stylesheet" href= "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/css/responsive.css" />
<!--user the site url method  throw js-->
<title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <script> var CI_ROOT =' <?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
 '; </script>

</head>
    <body >
        <div class="container-fluid">
            <div class = "container row">
                <div class = "header centered">

                    
                </div>


                    <div class="content" >


    <h1 class="header_fonts centered">Our <?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
 Cams</h1>

    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>


        <div class="product-style">
            <ul>
                <p> <h4 class="font_digital centered" > <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
 </h4></p>

                <p><center><img  class='products-image' src='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/img/products/<?php echo $_smarty_tpl->tpl_vars['value']->value['cat_machine'];?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['image'];?>
' id ='<?php echo $_smarty_tpl->tpl_vars['value']->value['prd_id'];?>
' alt=""  onclick=""  width="250px" border="0"/> </center></p>

                <p class="centered"><?php echo $_smarty_tpl->tpl_vars['value']->value['slogan'];?>
</p>

                <p class="centered"><b>Price <?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
$</b></p>

                <center><a  href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['machine_name'];?>
">read More</a></center>

                <div class="products-btn centerall">

                    <button class='add_to_cart  ' data-btn='<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'  ?<?php ?>>Add to cart..</button>

                    <button onclick="window.location = '<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
cart/checkout'">checkout</button>

                </div>

            </ul>
        </div>
    <?php } ?>


    <button class="back-btn" onclick="window.location = '<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
products/'">Back </button>

</div >

            </div>
        </div>

        <ul class="menu">
<li class = "tab home">     <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">Home              </a> </li>
<li class = "tab about">    <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
about/">About       </a> </li>
<li class = "tab products"> <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
products/">Products </a> </li>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value['is_login'])&&$_smarty_tpl->tpl_vars['data']->value['is_login']==false) {?>

<li id="log" class = "tab login"> <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/login/">Login           </a> </li>
<li class = "tab register">       <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/register/">Registration </a> </li>

<?php } else { ?>

<li class="tab" ><h3 class = "tab title_font">  Welcome <a href=" <?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/edit/" ><?php echo $_smarty_tpl->tpl_vars['session']->value['firstName'];?>
</h3>
                             <?php if (($_smarty_tpl->tpl_vars['data']->value['is_admin'])==true) {?>
                                <a class=" tab title_font dashboard" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
cms/dashboard/">CMS Dashboard</a>
                             <?php }?>
</li>
<li class = "tab logout">         <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/logout/">logout   </a> </li>

<?php }?>

<li class = "tab contactUs">      <a class = 'title_font' href = "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
contactUs/">Contact Us </a> </li>
<li class=  "tab image">
   <?php if ($_smarty_tpl->tpl_vars['cart']->value>0) {?>
        <span> <?php echo $_smarty_tpl->tpl_vars['cart']->value;?>
 </span>
   <?php }?>
                                  <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
cart/checkout/"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/img/cart.png" alt="" /></a>
</li>
</ul>

        <div class="script">

        
        <!--wrapper rectangle-->
        <div class="rectangle-bottom-left"></div>
        <div class="rectangle-bottom-right"></div>
        <div class="rectangle-top-left"></div>
        <div class="rectangle-top-right"></div>
        <!-- libarary  script files-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/js/lib/bootstrap.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/js/lib/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">tinymce.init({ selector: "textarea" });</script>
        <!--own-js-->
        <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/js/jquery.js"></script >
        <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
public/js/cart.js"></script>

    </div>
    </body>
</html>
<?php }} ?>
