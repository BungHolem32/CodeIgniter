{extends file='templates/cms/script.tpl'}
{block name='content-cms'}
    <h1 class=" text-center">Catgory</h1>

   <div class="category_list">
        <h2>Summery</h2>
        <table>
               <tr>
                   <th>ID</th>
                   <th>Name</th>
                   <th>Comment</th>
                   <th>Visibility</th>

               </tr>

        {foreach $categories as $categoriesTab}
            {foreach $categoriesTab as $categorie}
                <tr>
                    <td>{$categorie.id}</td>
                    <td>{$categorie.name}</td>
                    <td>{$categorie.comment}</td>
                    <td>{$categorie.visibility}</td>

                </tr>
            {/foreach}
        {/foreach}
        </table>
    <div class="flashdata"></div>
   </div>


    <div class="edit-category" ">
        <h2 class="title txt-center text-center ">Edit</h2>
        <form method="post" action="/cms/dashboard/category_management" >
                <label for="select-category ">Select Category</label>
                <select class='select-category edit' name="select-box" >
                    {foreach $categories as $category}
    {foreach $category as $cat}
        <option value="{$cat.id}">{$cat.name}</option>
    {/foreach}
{/foreach}
                </select>
            <label for="name">Change Name <br/> </label><input name="c-name-edit" type="text"  placeholder="{$category_first.name}"/>
            <label for="machine_name">Change Machine name</label> <input type="text" name="c-machine-edit"  placeholder="{$category_first.machine_name}"/>
            <label  for="visibility">Change visibilty </label>
               <div class='visibility-tab'>
                    <span>On</span>  <input type="checkbox" name="visibility_edit" class="visibility-edit_on"  value='1'  checked/>
                </div>

            <label for="comment">Change Comment</label>  <input type="text"   name="c-comment-edit"  placeholder="{$category_first.comment}"/>
             <input type="submit" name="submit_edit" value="edit"/>
        </form>

        {if isset($smarty.post.submit_create) or isset($smarty.post.submit_delete)}

{else}
    <div class="error_val_edit text-center"> {validation_errors()} </div>
    <div class="flashdata"> {if !empty($flash_edit)}{$flash_edit}{/if} </div>
{/if}
    </div>

    <div class="create-category">
        <h2 class="title txt-center text-center ">Create</h2>
        <form method="post" action="/cms/dashboard/category_management" >

            <label for="name">Category Name</label>  <input type="text" name="c_name" placeholder="enter category name"/>
            <label for="machine_name">Machine Name</label> <input type="text" name="c_machine" placeholder="enter name without spaces"/>
            <label  for="visibility">visibility  </label>

                <div class='visibility-tab'>
                    <span>On</span>  <input type="checkbox" name="visibility_create" value='1'/>
                </div>

            <label for="comment">Comment</label>  <input type="text"   name="c_comment" placeholder="max 60 characters"/>
            <input class="create_submit" type="submit" name="submit_create" value="Add" />
        </form>

        {if isset($smarty.post.submit_delete) or  isset($smarty.post.submit_edit)}

{else}
    <div class="error_val"> {validation_errors()} </div>
    <div class="flashdata">{if !empty($flash_create)}{$flash_create}{/if}</div>
{/if}

    </div>

    <div class="delete-category">
        <h2 class="title txt-center text-center ">Delete</h2>
        <form method="post" action="/cms/dashboard/category_management" >

            <label for="name">Category Name</label>
            <select class='select-category delete' name="select-box-del" >
                    {foreach $categories as $category}
    {foreach $category as $cat}
        <option value="{$cat.id}">{$cat.name}</option>
    {/foreach}
{/foreach}
            </select>

            <a class="select"   href="/cms/dashboard/delete_form//{$uri_site3}/">delete</a>
        </form>

        {if isset($smarty.post.submit_create) or isset($smarty.post.submit_edit)}

{else}
    <div class="error_val text-center">{if !empty($error)} {$error} {else}{validation_errors()} {/if} </div>
    <div class="flashdata">{if !empty($flash_delete)}{$flash_delete}{/if}</div>
{/if}
    </div>

{/block }