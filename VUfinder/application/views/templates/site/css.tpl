{*--------------------------------------------------css links and inside files-----------------------------------------*}
{extends file='templates/site/main_layout.tpl'}
{block name="css"}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--libararys  css-->
    <link rel="stylesheet" href="/public/css/lib/bootstrap.css">
    <link rel="stylesheet" href="/public/css/lib/jquery-ui.css"/>
    <link rel="stylesheet" href="/public/css/lib/font-awesome.css">
    <!--own css -->
    <link rel="stylesheet" href="/public/css/lib/Digital-7.css"/>
    <link rel="stylesheet" href="/public/css/general_style.css"/>
    <link rel="stylesheet" href="/public/css/style.css"/>
    <link rel="stylesheet" href="/public/css/responsive.css"  />
    <link rel="stylesheet" href="/public/css/print.css" media="print"/>
    <link rel="stylesheet" media="(min-width: 781px) and (max-width:1280px)" href="/public/css/tablet_site.css">
    <link rel="stylesheet" media="(max-width: 780px)" href="/public/css/mobile_site.css">
    <!--user the site url method  throw js-->
    <script> var CI_ROOT = '/'; </script>
{/block}
{*--------------------------------------------------css links and inside files-----------------------------------------*}