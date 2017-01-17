{extends file='templates/site/scripts.tpl'}
{*--------------------------------------------------Categories page ---------------------------------------------------*}
{block name="content"}

    <h1 class="header_fonts centered">Our {$cat_name|replace:'_':' '} Cams</h1>



    {foreach $products as $product}
        <div class="product-style">
        <ul>


            <p> <h4 class="font_digital centered" > {$product.name}</h4></p>

            <p><center><img  class='products-image' src='/public/img/products/{$product.image}'   id = '{$product.prd_id}' alt=""  onclick=""  width="250px" border="0"/></center></p>

            <p class="centered">{$product.slogan}</p>

            <p class="centered"><b>Price {$product.price}$</b></p>

            <center><a  href="/products{$product.cat_machine}/{$product.machine_name}">read More</a></center>

            <div class="products-btn centerall">

                <button class='add_to_cart k{$product.id} disable-class Play' data-btn={$product.id}  ?>Add to cart..

                    <span><img src="/public/img/V.png " alt="" width="15%"/></span>

                </button>


                <button onclick="window.location = '/cart/checkout/'">checkout</button>

                <button onclick="window.location = '/products/'">back </button>

            </div>

        </ul>
    </div>
        

{/foreach}

    <div class="popup">Where do you wanna go?<br/>
            <a href="/cart/checkout">checkout</a>
            <a href="/products">continue shop</a></div>


    <script src="/public/js/lib/jquery.js"></script>
    <script>
        $(document).ready(function() {
    var audioElement = document.createElement('audio');
    audioElement.setAttribute('src', '/public/mp3/flash-audio.mp3');
//    audioElement.setAttribute('autoplay', 'autoplay');
    //audioElement.load()

    $.get();

    audioElement.addEventListener("load", function() {
    audioElement.play();
    }, true);

    $('.Play').click(function() {
    audioElement.play();
    });

    $('.Pause').click(function() {
    audioElement.pause();
    });
    });
    </script>



{/block}                