{extends file='templates/site/scripts.tpl'}
{*--------------------------------------------------Categories page ---------------------------------------------------*}
{block name="content"}

    <div class="items">
        <h1 class=" header_fonts centered">{$items.name}</h1>

        <div>
            <p  class="items"><img  id='{$items.id}' class="centerall" src="/public/img/products/{$items.image}" alt=""  width="400px;"/></p >



            <p class="description">{$items.description}</p>

            <p class="centered"><b>Price {$items.price}$</b></p>


            <p class="products-btn centerall"> <button class="add_to_cart k{$items.id} disable-class"  data-btn='{$items.id}' >Add to cart..</button> <button onclick="window.location = '{site_url()}cart/checkout/'">checkout</button>    </p>

        </div>


    <div class="overview">
            <div class="tab_f">OverView</div>
            <div class="tab_s">Key Features</div>
            <div class="tab_t">Tech Specs</div>
        <div class="content1">
            {if !empty($spec['overview'])}{$spec['overview']} {/if}
        </div>
        <div class="content2">
            {if !empty($spec['key_features'])}{$spec['key_features']} {/if}

        </div>
        <div class="content3">
            {if !empty($spec['specs'])}{$spec['specs']} {/if}
        </div>
                </div>
    </div>
{/block}