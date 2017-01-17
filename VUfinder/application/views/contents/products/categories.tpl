{extends file='templates/site/scripts.tpl'}
{*==========================================================Categories page ============================================*}
{block name="content"}

<h1 class="header_fonts centered">Our Products Type</h1>
    <div class="categories-wrapper">
    {foreach $cat as $value}
        <div class="categories">

            <ul>

                <center> <a href='/products/{$value.machine_name}' class="category">

                        <li> <h4 class="font_digital centered"> {$value.name} </h4></li>

                    <li><center><img  src='/public/img/categories/{$value.image}' alt=""   width="150px" /></center></li>
                    <li class="centered">{$value.comment}</li>
                    </a></center>
            </ul>
        </div>


{/foreach}
    </div>
{/block}
{*==========================================================Categories page ============================================*}
