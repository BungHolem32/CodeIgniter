{extends file='templates/cms/script.tpl'}
{block name='content-cms'}

    <h2 class="centerall">Menu Creation</h2>

    <form action="{current_url()}" method="post" >

        <label for="title" >title</label >
        <input type="text" name="title" />

        <label for="t" >Link</label >
        <input type="text" name="content" />

        <input type="submit"  name ='submit' value="create menu.."/>


    </form >


{/block}