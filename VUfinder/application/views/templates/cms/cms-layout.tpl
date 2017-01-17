<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {*---------------------------------------------------css-files-------------------------------------------------------*}
    {block name="css-cms"}{/block}
    <title>{$title}</title>
    <script>var URL = "{if !empty($uri_site5)}{$uri_site5}{else}{$uri_site3}{/if}"</script>
</head>
{*-----------------------------------------------------body -----------------------------------------------------------*}
<body>


<div class="container-fluid">
    <div class="container">

        {*-----------------------------------------------------menu -----------------------------------------------------------*}

        {block name="menu-cms"}{/block}

        <div class="content-cms"
             url="{if !empty($uri_site5)}{$uri_site5}{else}{$uri_site3}{/if}">{block name="content-cms"}{/block}</div>

    </div>
    {*----------------------------------------------------content----------------------------------------------------------*}

</div>
</div>
<div class="overlay"></div>


{*----------------------------------------------------script-----------------------------------------------------------*}
<div class="script">{block name="script-cms"}{/block}</div>
</body>
</html>
