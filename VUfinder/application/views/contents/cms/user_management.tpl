{extends file='templates/cms/script.tpl'}
{block name="content-cms"}
    <h1 class=" text-center">User Managment</h1>

   <div class="userList">
       <h2>Summery</h2>
        <table>
               <tr>
                   <th>Id</th>
                   <th>First Name</th>
                   <th>Last Name</th>
                   <th>gender</th>
                   <th>email</th>
                   <th>type</th>
               </tr>

               {foreach $users_list as $users_tab}


                    <tr>
                     <td>{$users_tab.id}</td>
                     <td>{$users_tab.firstName}</td>
                     <td>{$users_tab.lastName}</td>
                     <td>{$users_tab.gender}</td>
                     <td>{$users_tab.email}</td>
                     <td>{$users_tab.type}</td>

                    </tr>

               {/foreach}
        </table>
       <div class="flashdata"></div>
   </div>

    {*================================================EDIT-USER====================================================== *}
    <div class="user_managment editUser title_font">
        <h2 class="text-center">Edit </h2>
        <form method="post" action="/cms/dashboard/user_management">
            <label for = "email">Select Name</label>
            <select class="Select_changeUser" name = "select-box" >
                {foreach $users_list as $users}
                    <option value = "{$users.id}" {assign var='id' value=$users.id} >{$users.firstName} {$users.lastName}</option>
                {/foreach}
            </select>

            <label for="">Change First Name</label>
            <input type="text" name="firstName_edit" placeholder="{$first_user.firstName}" />
            <label for="">Change last Name</label>
            <input type="text" name="lastName_edit" placeholder="{$first_user.lastName}"/>

            <div class="gender">
                <label for="">Change gender</label>
                {if $first_user.gender=='Male'}
                    <span>Male</span><input type="radio" name="gender_edit" class='gender_male' value="male" selected/>
                    <span>Female</span><input type="radio" name="gender_edit" class='gender_female' value="female"/>
                {else}
                    <span>Male</span><input type="radio" name="gender_edit" class='gender_male' value="male" />
                    <span>Female</span><input type="radio" name="gender_edit" class='gender_female' value="female"  selected/>
                {/if}
            </div>

            <div class="role">
                <label for="Role">Change Role</label>
                <span>Administrator</span><input type="radio" name="role_edit" class='role_admin' value="admin"/>
                <span>Authenticated</span><input type="radio" name="role_edit" class='role_autenticate' value="autenticate"/>
                <span>Guest</span><input type="radio" name="role_edit" value="guest" class="role_guest"/>
            </div>

            <label for="">Change Email</label>
            <input name="email_edit" type="text" placeholder="{$first_user.email}"/>
            <label for="">Change Password</label>
            <input name="password_edit" type="text"/>
            <input name="submit_edit" type="submit" value="Edit"/>
        </form>

            {if isset($smarty.post.submit_del) or  isset($smarty.post.submit_add)}

            {else}
                <div class="error_val" > {validation_errors()} </div>
                <div class="flashdata">{if !empty($flash_edit)}{$flash_edit}{/if}</div>
            {/if}

    </div>

    {*========================================================CREATE-USER=============================================*}
    <div class="user_managment addUser title_font">
        <h2 class="text-center">Add </h2>

        <form method="post" action="/cms/dashboard/user_management">
            <label for="">first Name</label>
            <input type="text" name="firstName_add" />
            <label for="">last Name</label>
            <input type="text" name="lastName_add"/>

            <div class="gender">
                <label for="">gender</label>
                <span>Male</span><input type="radio" name="gender_add" value="male"/>
                <span>Female</span><input type="radio" name="gender_add" value="female"/>
            </div>

            <div class="role">
                <label for="">Role</label>
                <span>Administrator</span><input type="radio" name="role_add" value="admin"/>
                <span>Authenticated</span><input type="radio" name="role_add" value="authenticated"/>
                <span>guest</span><input type="radio" name="role_add" value="guest"/>
            </div>

            <label for="">Email</label>
            <input name="email_add" type="text"/>
            <label for="">Password</label>
            <input name="password_add" type="text"/>
            <input name="submit_add" type="submit" value="ADD"/>

        </form>
        {if isset($smarty.post.submit_edit) or  isset($smarty.post.submit_del)}

        {else}
            <div class="error_val" > {validation_errors()} </div>
            <div class="flashdata">{if !empty($flash_create)}{$flash_create}{/if}</div>
        {/if}

    </div>

    {*=======================================================DELETE USER==============================================*}
    <div class="user_managment delUser title_font">

        <h2 class="text-center">Delete</h2>
        <label for = "email">Choose User Email</label>
        <form action = "/cms/dashboard/user_management" method="post">
        <select class="Select_changeUser" name = "select-box" >
            {foreach $users_list as $users}

                    <option value = "{$users.id}" {assign var='id' value=$users.id} >{$users.email}</option>
            {/foreach}
        </select>
        </form>
        <a class="select"   href="/cms/dashboard/delete_form//{$uri_site3}/">delete</a>
        {if isset($smarty.post.submit_edit) or  isset($smarty.post.submit_add)}

        {else}
            <div class="error_val" > {validation_errors()} </div>
            <div class="flashdata">{if !empty($flash_delete)}{$flash_delete}{/if}</div>
        {/if}

    </div>

{/block}


