{extends file='templates/cms/script.tpl'}
{block name='content-cms'}
    <div class="delete-form-style">

        <form action="/cms/dashboard/delete_form/{$del}/{if !empty($uri_site5)}{$uri_site5}/{elseif !empty($uri_site3) && $uri_site3!='delete_form' }{$uri_site3}/{elseif ($uri_site3 =='delete_form')}{/if}"
              method="post">
            {foreach $products as $key=>$item}

                {*ARE YOU SURE YOU WANT TO DELETE ITEM SENTENCE*}
                <h3 class="text-center">{if !empty($has_products)}you prohibited from delete The  {else} Are you sure you want to delete the{/if}

                    {*if the value is categories // remove the ies and ad y*}
                    {if $key=='categories'}

                        {$key|regex_replace:'/(ies)$/':'y'}

                        {*other values remove the s from the value*}
                    {else}

                        {$key|regex_replace:'/(s)$/':''|regex_replace:'/(_)/':' '}

                    {/if}
                </h3>
                <ul>


                {* DELETE USER*}
                {if !empty($item[0].firstName)}
                    <li class="centered title_font"><h3>{$item[0].firstName} {$item[0].lastName} ? </h3></li>
                {* DELETE CATEGORY*}
                {elseif !empty($item[0].slogan)}
                    <li class="centered title_font">
                        <h3>{$item[0].machine_name}{if !empty($has_products)}{else} ? {/if} </h3></li>
                    <div class="flash">{if !empty($prod)}{$prod}{/if}</div>
                {* DELETE ORDER *}
                {elseif !empty($item[0].data_jason)}
                    <li class="centered title_font"><h3>Number {$item[0].id}  from {$name} ? </h3></li>
                    <table>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>SubTotal</th>

                        </tr>
                        {foreach $json as $key=>$value}
                            <tr>
                                <td>{$value->name}</td>
                                <td>{$value->price}</td>
                                <td>{$value->qty}</td>
                                <td>{$value->subtotal}</td>

                            </tr>
                        {/foreach}
                    </table>
                {*DELETE PRODUCT IMAGE*}
                {elseif !empty($item[0]['pid'])}

                    <h3>{$item[0]['id']} from product {$name}</h3>
                    <li>
                        <img src="/public/img/products/{$item[0]['image']}" alt=""  width="400"/>
                    </li>


                {* DELETE PRODUCT*}
                {else}

                {foreach $item as $prod}
                    <li class="centered title_font"><h3>{$prod['name']}?</h3></li>

                    {/foreach}

                    {if !empty($prod['images'][0]['image'])}


                        <li>
                            <img src="/public/img/products/{$prod['images'][0]['image']}" alt="" width="400"/>
                        </li>

                    {else}

                        <li><img src="/public/img/products/default.png" alt=""
                                 width="400"/>
                        </li>

                    {/if}

                        </ul >


                {/if}
            {/foreach}
            <div class="buttons">
                {if !empty($has_products)}
                    <div class="product_found"> You Must Delete all products from the category before delete it</div>
                    <input type="button" onclick="window.location='{site_name('cms/dashboard/')}'" value="back"/>
                {else}
                    <input type="submit" name='del' value="delete"/>
                    <input type="button" onclick="javascript:history.back()" value="back"/>
                {/if}
                <div class="flash">{if !empty($flash)} {$flash} {else} {/if}</div>
            </div>
        </form>

    </div>
{/block}