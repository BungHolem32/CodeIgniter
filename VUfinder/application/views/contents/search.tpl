{extends file='templates/site/scripts.tpl'}
{*===================================================Search page ======================================================-*}
{block name="content"}

    <div class="search-tpl">
        <label class="centerall" for="search-btn">Search By Keyword
            <input type="text"  class='search-btn'/>
        </label>

        <div class="search_view">Results: <span class="box"></div>
        <div class= 'products'></div>
    </div>

{/block}