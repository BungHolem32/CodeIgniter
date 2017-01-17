{*================================================nav-bar template====================================================*}
{extends file='templates/site/css.tpl'}
{block name="menu" }


    {*------------------------------------------------About,Product,Search Tab---------------------------------------------*}
        <li class="tab about"><a class='title_font' href="/about">About</a></li>
        <li class="tab products">
            <a class='title_font' href="/products">Products</a>
            <span class="tab products search"><a class='title_font' href="/search">Search</a></span>
        </li>
        {*--------------------------------------------------login Tab----------------------------------------------------------*}
        {if isset($data.is_login) && $data.is_login==false}
            <li id="log" class="tab login"><a class='title_font' href="/user/login">Login</a></li>
            <li class="tab register"><a class='title_font' href="/user/register">Registration</a></li>
        {else}
            {*------------------------------------------------Cms Tab--------------------------------------------------------------*}
            <li class="tab cms">
                <div class="tab title_font cms"> Welcome <a href=" /user/edit_form">{$session.firstName}</a>
                    {if ($data.is_admin)==true}
                        <a class=" tab title_font dashboard" href="/cms/dashboard">Dashboard</a>
                    {/if}
                </div>
            </li>
            <li class="tab logout"><a class='title_font' href="/user/logout">logout</a></li>
            {*--------------------------------------------------contact us tab-----------------------------------------------------*}
        {/if}
        <li class="tab contactUs"><a class='title_font' href="/contactUs">Contact Us</a></li>
        {*--------------------------------------------------img tab------------------------------------------------------------*}
        <li class="tab image">

            {if $cart->total_items()>0}
                <span> {{$cart->total_items()}} </span>
            {/if}
            <a href="/cart/checkout/"><img src="/public/img/cart.png" alt=""/></a>
        </li>


    {*------------------------------------------------tablet Menu---------------------------------------------*}
    <div class="tablet_nav_bar">
        <ul>
            <li>
                <a href="/about">
                    <div class="tablet_navbar about_tablet">About</div>
                </a>
            </li>
            <li>
                <a href="/products">
                    <div class="tablet_navbar product_tablet">Products</div>
                </a>
                <a href="/search">
                    <div class="tablet_navbar search_tablet">Search</div>
                </a>
            </li>

            {if isset($data.is_login) && $data.is_login == false}
                <li>
                    <a href="/user/login">
                        <div class="tablet_navbar login_tablet">Login</div>
                    </a>
                </li>
                <li>
                    <a href="/user/register">
                        <div class="tablet_navbar register_tablet">Registration</div>
                    </a>
                </li>
            {else}
                <li>
                    <div class="tablet_navbar dashboard_tablet">
                        {if ($data.is_admin)==true}
                            <span>Admin</span>
                            <a href="/cms/dashboard">Dashboard</a>
                        {else}
                            <span>{$session.firstName}</span>
                            <a href="/user/edit_form">Edit</a>
                        {/if}
                    </div>
                </li>
                <li>
                    <a href="/user/logout">
                        <div class="tablet_navbar">Logout</div>
                    </a>
                </li>
            {/if}

        </ul>
    </div>
    <div class="button">
        <img src="/public/img/menu.png" alt=""/>
        <h5><a href="/contactUs/">viewFinder &copy;</a></h5>
    </div>

    <div class="icon_mobile">
        <ul>
            <li>
                <a href="/">
                    <div class="mobile_navbar home_mobile"><img src="/public/img/mobile/home.png" alt=""/></div>
                </a>
            </li>
            <li>
                <a href="/about">
                    <div class="mobile_navbar about_mobile"><img src="/public/img/mobile/about.png" alt=""/></div>
                </a>
            </li>
            <li>
                <a href="/products">
                    <div class="mobile_navbar product_mobile"><img src="/public/img/mobile/product.png" alt=""/></div>
                </a>
            </li>

            {if isset($data.is_login) && $data.is_login == false}
                <li>
                    <a href="/user/login">
                        <div class="mobile_navbar login_mobile"><img src="/public/img/mobile/login.png" alt=""/></div>
                    </a>
                </li>
                <li>
                    <a href="/user/register">
                        <div class="mobile_navbar register_mobile"><img src="/public/img/mobile/register.png" alt=""/></div>
                    </a>
                </li>
            {else}
                <li>
                    <div class="mobile_navbar dashboard_mobile">
                        {if ($data.is_admin)==true}
                            <a href="/cms/dashboard"><img src="/public/img/mobile/cms.png" alt=""/></a>
                        {else}
                            <span>{$session.firstName}</span>
                            <a href="/user/edit_form"><img src="/" alt=""/></a>
                        {/if}
                    </div>
                </li>
                <li>
                    <a href="/user/logout">
                        <div class="mobile_navbar"><img src="/public/img/mobile/logout.png" alt=""/></div>
                    </a>
                </li>
            {/if}
                <li>
                    <a href="/contactUs">
                        <div class="mobile_navbar"><img src="/public/img/mobile/contact.png" alt=""/></div>
                    </a>
                </li>
            <li>

                {if $cart->total_items()>0}
                    <span> {{$cart->total_items()}} </span>

                <a href="/cart/checkout"><img src="/public/img/mobile/cart.png" alt=""/></a>
                    {/if}
            </li>

        </ul>
    </div>
    <div class="copyright">this site was built by Ilan Vachtel as final project</div>
{/block}
{*=================================================nav-bar template====================================================*}
