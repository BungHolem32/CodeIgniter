{extends file='templates/cms/script.tpl'}
{block name='content-cms'}

    <div class="error_val centered" > {validation_errors()} </div>

    <div class="create_form-style centered ">

        <h3>Create Product</h3>

        <form action="/cms/dashboard/create_product/{$id}"  method="post" accept-charset="utf-8" enctype="multipart/form-data">

            {if array_key_exists('2',$category)}
                <select name="categories_input" >
                    {foreach $category as $value}
                        <option  value="{$value.id}">{$value.name}</option>
                    {/foreach}
                </select>
            {else}
                <h3>{$category[0]['name']}</h3>
            {/if}

        <div class="product-basic-info">

            <h4>basic Info</h4>
            <label for="name"> Product Name </label>
            <input type="text" name="name"/>

            <label for="company"> Company </label>
            <input type="text" name="company"/>

            <label for="model"> Model </label>
            <input type="text" name="model"/>


            <label for="slogen"> Slogan </label>
            <input type="text"  name="slogan" value="{set_value('slogan')}"/>

        </div>


        <div class="description">
                    <h4>Product Highlights </h4>
                    <label for="description">description</label>
                    <textarea  name="description"  value="{set_value('description')}"> </textarea>
        </div>


        <div class="stock-info">

            <h4>Stock Info</h4>
            <label for="price">Price On Site </label>
            <input type="text" name="price" value="{set_value('price')}"/>


            <label for="quantity">Quantity To sell </label>
            <input type="text" name="quantity" value="{set_value('quantity')}"/>


            <label for="discount">Discount percent</label>
            <input type="text" name="discount" value="{set_value('discount')}"/>

            <label for="visibility">In Stock <br/></label>
            <input type="checkbox" name="visibility"  checked />

        </div>


        <div class="upload">
            <h4>image uploading</h4>

            <label for="desc">Description</label>
            <input type="text"  name='comment' value='{set_value('comment')}' placeholder='comment'/>

            <label for="file_upload">File</label>
            <input type="file" name="userfile" multiple />
        </div>


        <div class="product-info" >
            <h4>Product Information</h4>
            <div class="overview">
                <label for="overview">Overview</label>
                <textarea name="overview_create" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="keyfeatures">
                <label for="keyfeatures">Key Features</label>
                <textarea name="features_create" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="specs">
                <label for="specs">Specs</label>

                <textarea name="specs_create" id="" cols="30" rows="10"></textarea>

            </div>

        </div>


        <input type="submit" name="submit" value="create-now!"/>

        </form >
    </div>
</div>
{/block}