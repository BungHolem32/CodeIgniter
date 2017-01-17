{extends file='templates/site/scripts.tpl'}
{*--------------------------------------------------home page ---------------------------------------------------*}
{block name="content"}
    <div class="homePage">

        {*carusel images*}
        <img class="img-random carusel" src="/public/img/carusel/carusel (1).jpg"/>
        <img class="img-random2 carusel " src="/public/img/carusel/carusel (2).jpg"/>

        {*overlay div for the effect*}
        <div class="ovtest">
            <div class="over-test"></div>
        </div>

        {*audio effect on load*}
        <audio autoplay>
            <source src="/public/mp3/flash-audio.mp3" type="audio/mpeg">
        </audio>

        {*content div*}
        <div class="article">
            <div>
                Hello All, Wellcome To my Site , Our site Offers you New Way for buying Cameras , if you want to buy
                something
                You Can Press The Product Tab
                At the bottom Of this page , and Choose your category
            </div>
            {*My Own Carusel Script Dynamic *}
            <div class="home-tpl">
                <div class="title"></div>
            </div>
        </div>
    </div>
    {*reload jquery for all stuff to run*}
    <script src="/public/js/lib/jquery.js"></script>
    {*==============================MY OWN CARUSEL============================*}
    <script>
        $().ready(function () {

            setTimeout(welcomeS,1000);
        })

        /*create flash effect , the first time you enter the site */
        function flash() {
            setTimeout(function () {
                $('.ovtest').addClass('img-start');
            }, 100);
            $('.ovtest').hide();
        }

        /*run flasheffect on load*/
        flash();

        {*get all the images from directory to one array*}
        var images = [];
        {foreach $images as $key=>$value }
        images[{$key}] = "{strtolower($value|replace:'./':'')}";
        {/foreach}
        var x = 0;

        /*function carusel*/
        function carusel() {
            var image_list = images[x];
            if (x >= images.length - 1) x = 0;

            if ($('.img-random').hasClass('current')) {
                $('.img-random2').addClass('current').hide().attr('src', image_list).fadeIn(3000, function () {
                    $('.img-random').fadeOut(2000).removeClass('current');
                });
            }
            else {
                $('.img-random').addClass('current').hide().attr('src', image_list).fadeIn(3000, function () {
                    $('.img-random2').fadeOut(2000).removeClass('current');
                });
            }
            ;

            x++;
            setTimeout(carusel, 10000);
        }
        ;

        carusel();

    </script>
{/block}
{*--------------------------------------------------home page ---------------------------------------------------*}