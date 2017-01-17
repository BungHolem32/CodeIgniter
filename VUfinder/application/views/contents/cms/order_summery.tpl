{extends file='templates/cms/script.tpl'}
{block name='content-cms'}

<div class="orders-form-style centerall">
    <div class="flash">{if !empty($flash)}{$flash}{/if}</div>
    <h3 class="centerall">Order details</h3>
    <table class="tableCategories">
        <tr class="header-titles-order table-row">
            <th class="headerTab">Product</th>
            <th class="headerTab">Quantity</th>
            <th class="headerTab">Price</th>
            <th class="headerTab">Summery</th>
        </tr>
        {if !empty($orders) }
            {foreach $orders as $order}
                {*<i class="x_icon fa fa-times fa-lg" onclick="window.location='/cms/dashboard/delete_form/{$order.oid}/{$uri_site3}/{$order.firstName}/'""></i>*}
                {if ($order.data_jason)}
                    <tr class="UserNameWrapper table-row">
                        <td class="userName" colspan="4">User: {$order.firstName}</td>
                    </tr>
                    <tr class="userDateWrapper table-row" colspan="4">
                        <td class="user_order_date userDate" data-id="{$order.oid}" colspan="4">Date: {$order.date}</td>
                    </tr>
                    {foreach $order.data_jason as $data}
                        <tr class="userOrder table-row">
                            <td class="productName">
                                <span class="desc_order_mobile">product </span> {$data.name}
                            </td>
                            <td class="productQuantity">
                                <span class="desc_order_mobile">Quantity </span>{$data.qty}
                            </td>
                            <td class="productPrice">
                                <span class="desc_order_mobile">Price </span> {$data.price}
                            </td>
                            <td class="productSummery">
                                <span class="desc_order_mobile">Summery </span>{$data.subtotal}
                            </td>
                        </tr>
                    {/foreach}
                {/if}
            {/foreach}
        {else}
            <tr class="table-row">
                <td>no content</td>
            </tr>
        {/if}
    </table>

    {/block}
