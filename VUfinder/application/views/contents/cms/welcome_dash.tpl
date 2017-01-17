{extends file='templates/cms/script.tpl'}
{block name='content-cms'}

    <div class="summery">
    <h1 class="text-center">Welcome To Your CMS</h1 class=text-center>


    {*summery table *}

    <table>
        <caption>Summery Elements</caption>

        <tr>
            <th>Name</th>
            <th>Number</th>
            <th>Enter</th>

        </tr>


        {foreach $summery as $key=>$value}

            {foreach $value as $k=> $v}
                {*iterate only these elements *}
                {if preg_match('/(categories)|(products)|(users)|(orders)/',$v) && $v!='view_finder_products_specs'}
                    {*elements name*}
                    <td>{$v|replace:'view_finder_':''}</a></td>
                    {*element number*}
                    <td>{$value['sum']}</td>
                    {*element link depend on the value*}
                    {*category*}
                    {if preg_match('/categories/',$v)}

                        {$v = 'category'}
                        <td><a href="/cms/dashboard/{$v}_management">Edit</a></td>
                        {*order*}
                    {elseif preg_match('/orders/',$v)}
                        <td>
                            <a href="/cms/dashboard/{$v|regex_replace:'/(view_finder_)/':''}_summery">Edit</a>
                        </td>
                        {*products or order*}
                    {else}
                        <td>
                            <a href="/cms/dashboard/{$v|regex_replace:"/(view_finder_)|(s)$/":''}_management">Edit
                        </td>
                    {/if}

                {else}
                {/if}
                 </tr>

            {/foreach}
        {/foreach}
    </table>


    <div class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam blanditiis
        corporis cumque dolore
        ipsam molestiae, molestias natus nisi non nostrum odio officiis pariatur quas, qui recusandae sint tenetur
        veritatis!

        Aliquid amet, fugit molestiae mollitia, nulla numquam obcaecati provident quam rem saepe sapiente sequi
        temporibus, ut! Ad aperiam assumenda atque doloremque ea explicabo fugit harum minima numquam placeat,
        repudiandae sed!

        A aliquid asperiores aut deleniti dolorem ducimus, earum eos esse et facilis hic labore laboriosam magnam
        modi natus nemo nihil numquam perferendis perspiciatis provident quisquam quos sed totam ullam voluptas.

        >Ea labore, laudantium? Accusamus dolor inventore maiores perferendis sit? Alias aliquam est eum eveniet
        explicabo, fugiat incidunt iusto nam nemo nesciunt nostrum pariatur placeat possimus rem sapiente sunt ut
        voluptatum?

        Alias aspernatur autem consectetur consequatur culpa deleniti dolor dolore dolorum eaque error fugit id
        illum incidunt ipsa iste iure necessitatibus perspiciatis, possimus provident quam quis quos repellendus
        rerum? Magnam, placeat.
    </div>


{/block}