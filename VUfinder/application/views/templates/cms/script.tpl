{extends file='templates/cms/nav-bar_cms.tpl'}
{block name='script-cms'}
    <!-- libarary  script files-->
    <script src="/public/js/lib/jquery.js"></script>
    <script src="/public/js/lib/jquery-ui.js"></script>
    <script src="/public/js/lib/bootstrap.js"></script>
    <script src="/public/js/lib/jquery.placeholder.js"></script>
    <script src="/public/js/lib/tinymce/tinymce.min.js"></script>
    <script>tinymce.init( { selector: "textarea" , width : 250, theme_advanced_resizing:false} );</script>
    <!--own-js-->
    <script src="/public/js/cms/cms-jquery-user.js"></script>
{/block}