{extends file='templates/cms/script.tpl'}
{block name='content-cms'}

    {foreach $products as $item}



    <div class="edit_form-style centered ">

        <h3>Product Edit form</h3>

            <form action="{current_url()}" method="post" enctype="multipart/form-data" >

            <!------------------------------------------------------------->
            <select  name="categories_input" class="select-box_product">

                   <option value="{$item.category_id}" selected >{$item.category_name}</option>

                {foreach $categories as $category}

                    {if $category.id != $item.category_id}
                         <option  value="{$category.id}" name="category_id">{$category.name}</option>
                    {/if}

                {/foreach}
            </select>

            {*PRODUCT BASIC INFO*}
            <div class="product-basic-info">

                <h4>basic info</h4>
                <label for="name">product name</label>
                <input type="text" name="name" placeholder="{$item.name}" required="required"/>

                <label for="company">company</label>
                <input type="text" name="company" placeholder="{$item.company}"/>

                <label for="model">model</label>
                <input type="text" name="model" placeholder="{$item.model}"/>

                <label for="slogen"> slogan</label>
                <input type="text"  name="slogan" placeholder="{$item.slogan}" required="required"/>

            </div>

            <!--wysiwyg-->
            {*DESCRIPTION*}
            <div class="description">
                    <h4>product highlights </h4>
                <div>
                    <label for="description">description</label>
                    <textarea  name="description"   class="text_area_edit_form" required="required">{$item.description}</textarea>
                </div>
                <div class="error_val" > {validation_errors()} </div>
                <div class="flash_update">{if !empty($flash_update)} {$flash_update} {/if}</div>

            </div>

                <spacer></spacer>

            {*STOCK INFO*}
            <div class="stock-info">

                <h4>stock info</h4>
                <label for="price">price on site </label>
                <input type="text" name="price" placeholder="{$item.price}" required="required"/>

                <label for="quantity">quantity to sell </label>
                <input type="text" name="quantity" placeholder="{$item.quantity}" required="required"/>

                <label for="discount">discount percent</label>
                <input type="text" name="discount" placeholder="{$item.discount}" required="required"/>

                <label for="visibility">in stock <br/></label>
                {if $item['visibility'] == 0}
                    <input type="checkbox" name="visibility" />
                {else}
                     <input type="checkbox" name="visibility"  checked />
                {/if}

            </div>

                <spacer></spacer>

            {*IMAGE UPLOAD*}
            <div class="upload">
                <h4>image uploading</h4>


                <label for="file_upload">file</label>
                <input type="file" name="userfile" />

                {if !empty($item.images)}

                    {if array_key_exists(1,$item.images)}

                        <label for="desc">description</label>
                        <input type="text"  name='comment' value='{$item.images[0]['comment']}' placeholder='comment'/>
                        {assign 'count' 0}


                        {foreach $item.images as $key=>$value}

                            {if $value['active'] > 0}<input type="hidden" count="{$count++}"/>{/if}

                                {*first pic will print here*}
                                {if $value@first}
                                <img  src ="/public/img/products/{$value.image}" alt=""  {assign 'unchecked_main' $value.id  }">
                                    <div class="icons">
                                        <a class="x_icon main_del fa fa-times fa-lg" href="{site_name()}cms/dashboard/delete_form/{$value.id}/edit_product/{$item.name}/"></a>
                                        <a class="change_active main fa fa-exchange" data-checked_id="{$value.id}"  data-product="{$item.id}"></a>
                                    </div>

                                {*all other will showed minified*}
                                {else}

                                   <img class="minified_pic" src ="/public/img/products/{$value.image}" alt="" {assign 'unchecked_minified' $value.id} />
                                 <div class="icons">
                                     <a class="x_icon fa fa-times fa-lg" href="{site_name()}cms/dashboard/delete_form/{$value.id}/edit_product/{$item.name}/"></a>
                                     <a class="change_active  fa fa-exchange" data-checked_id="{$value.id}"  data-product="{$item.id}"></a>
                                 </div>

                                {/if}


                            {/foreach}

                        {if $count<=0} <div class="error_val" >You Must Activate At list one Image</div>{/if}

                        {if !empty($pic)} <div class="flashdata">{$pic}</div> {/if}
                    {elseif array_key_exists(0,$item.images)}

                        <label for="desc">description</label>
                        <input type="text"  name='comment' placeholder='{$item.images[0]['comment']}' />
                        <img src = "/public/img/products/{$item.images[0]['image']}" alt="product_img"  alt='{$item.images[0]['comment']}'  />

                       {if $item.images[0]['active']==0}
                        <a class="change_active main_one fa fa-exchange" data-checked_id="{$item.images[0]['id']}" data-product="{$item.id}">Activate</a>
                       {/if}

                    {else}

                        <label for="desc">description</label>
                        <input type="text"  name='comment' value='{$item.images['comment']}' placeholder='comment'/>
                        <img  src = "/public/img/products/{$item.images['image']}" alt="product_img"  />

                    {/if}
                {/if}

            </div>

                <spacer></spacer>

            {*PRODUCT SPECS*}
            {foreach $products as $product_key=>$product_val}
                <div class="product-info" >
                    <h4>product information</h4>
                    <div class="overview">
                        <label for="overview">overview</label>
                        <textarea name="overview_edit"   cols="30" rows="10">{if !empty($product_val['info'])}{$product_val['info']["overview"]}{/if}</textarea>
                    </div>
                    <div class="keyfeatures">
                        <label for="keyfeatures">key features</label>
                        <textarea name="features_edit"   cols="30" rows="10">{if !empty($product_val['info'])}{$product_val['info']["key_features"]}{/if}</textarea>
                    </div>
                    <div class="specs">
                        <label for="specs">specs</label>

                        <textarea name="specs_edit"   cols="30" rows="10" >{if !empty($product_val['info'])}{$product_val['info']["specs"]}{/if}</textarea>

                    </div>
                </div>
            {/foreach}

            <spacer></spacer>

            <input type="submit" name="submit" value = 'edit'/>

        </form >
    {/foreach}

    <div class="bigimage"><img src=""   width="70%" alt=""/></div>
</div>




{/block}

