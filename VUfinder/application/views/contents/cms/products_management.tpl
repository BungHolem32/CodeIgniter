{extends file='templates/cms/script.tpl'}
{block name='content-cms'}
    {if ($session->flashdata('feedback')==true)}
      <span class="feedback title_font">{$session->flashdata('feedback')}</span>
    {/if}
                <h2>Product Managment</h2>

{*
    <input type="button" value="Add New product" onclick="window.location = '/cms/dashboard/create_product/'"/>
*}


    <div class="cms-items">

    


    <div class="products_list">
    <h2>Summery</h2>

            <table>
                <tr>
                    <th>category</th>
                    <th>Name</th>
                    <th>Slogan</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Visiblity</th>
                    <th>Date</th>
                </tr>
                {foreach $category_cms as $cat}
                {foreach $cat['products'] as $key=>$products}
                <tr>

                    <td>{$cat['name']|replace:'interchangeable-lens':''|replace:'Digital':'d'|regex_replace:'/Single/i':'s'|regex_replace:'/lens/i':'l'|replace:'reflex':'r'}</td>
                    <td>{$products['name']}</td>
                    <td>{$products['slogan']}</td>
                    <td>{$products['price']}</td>
                    <td>{$products['quantity']}</td>
                    <td>{$products['visibility']}</td>
                    <td>{$products['date_created']}</td>

                </tr>
                    {/foreach}
                {/foreach}
            </table>
        <div class="flashdata"></div>
    </div>

{foreach $category_cms as $cat}

    <div class="category" ">
            <h4  >{$cat.name|replace:'interchangeable-lens':''|replace:'Digital':'d'|regex_replace:'/Single/i':'s'|regex_replace:'/lens/i':'l'|replace:'reflex':'r'}</h4>

            <ul class="inner_product_menu style=text-align:left">
            <a class='create-btn ' href="/cms/dashboard/create_product/{$cat.id}/">Add Product</a>

                {if is_array($cat)}
                    {foreach $cat as $products}
                        {if is_array($products)}

                            {foreach $products as $item}
                                <li >

                                    <div class="item_name">{$item.name}</div>
                                        <a class="edit-btn"   href="/cms/dashboard/edit_product/{$item.id}/">Edit</a> |
                                        <a class='delete-btn' href="/cms/dashboard/delete_form/{$item.id}/{$uri_site3}/">Delete</a>
                                    <br/>
                                </li>

                            {/foreach}
                        {/if}
                    {/foreach}
                {/if}
            </ul>
        </div>

    {/foreach}
    </div>
{/block}