<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        {*--------------------------------------------------css-files---------------------------------------------------------*}
        {block name="css"}{/block}
        <title> {$title|capitalize:true|replace:'_':' '}</title>
    
    </head>
    <body>
    {*-------------------------------------------------overlay-------------------------------------------------------------*}
    <div class="se-pre-con"></div>
    <div class="black"></div>

    <div class='overlay'></div>
        <div class="close"></div>
        
        <div class="container-fluid">
        
            <div class="header centered">
                <footer>{block name="footer-body"}{/block}</footer>
            </div>
        
        
            <div class="container row">
        
                {*---------------------------------------------------footer -----------------------------------------------------------*}
        
                {*---------------------------------------------------content-----------------------------------------------------------*}
        
                <article class="content">{block name="content"} {/block}</article>
            </div>
        
        </div>
        <div class="scroll_to_top"><img src="/public/img/scroll_to_top.png" alt=""/></div>
        {*-----------------------------------------------------menu------------------------------------------------------------*}
        <ul class="menu">{block name="menu"}{/block}</ul>
        
        {*----------------------------------------------------script-----------------------------------------------------------*}
        <div class="script">{block name="script"}{/block}</div>

    </body>

</html>
