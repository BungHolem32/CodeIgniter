//onLoad
$(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
});



/*ON LOAD CHECK THE SIZE OF THE WINDOW + CHECK IF THE PAGE IS THE HOME PAGE IF IT IS ADD OVERFLOW HIDDEN*/
$(document).ready(function() {
    resize_window();
    overflow();
    scrollToTop();
    view_finder();
});


function only_numbers(ev){
    console.log(ev.charCode);

    if(ev.charCode<'48' || ev.charCode<'58' ){
        alert('you must enter only digits');
        return false;
    }else{
        return event;
    }
}


/*(GLOBAL FUNCTION SCROLL TO TOP)*/
function scrollToTop() {
    $('.container').scroll(function() {
        var x = $('.container').scrollTop();

        if (x == '0') {
            $('.scroll_to_top').fadeOut();
        } else {
            $('.scroll_to_top').fadeIn();
        }
        $('.scroll_to_top').on('click', function() {
            $('.container').scrollTop(0);
        })
    });
}

/*CHANGE THE PROPORTION OF THE VIEW DEPENDING THE VIEW YOU LOOK FROM */
function resize_window() {
    //trigger the windowHeight;
    var windowHeight = $(window).height();
    var windowWidth = $(window).width();

    //check if the height is :
    if (windowHeight < "955") {
        //remove & addClasses
        $('.categories-wrapper').
        removeClass('category-wrapper_large').
        addClass('category-wrapper_medium');
    }
    //remove & addClasses
    else if (windowHeight >= "955" && windowHeight < '999') {
        $('.categories-wrapper').
        removeClass('category-wrapper_medium').
        addClass('category-wrapper_large');

        $('.about').css('margin', '6.5em auto');
    } else if (windowHeight >= '1000') {
        $('.categories-wrapper').
        removeClass('category-wrapper_large').
        addClass('category-wrapper_x_large');
        $('.article_about').
        addClass('x-large_about');


    }
    $('.container-fluid .container.row').
    css('min-height', windowHeight * 0.86);

    if (windowHeight <= "930") {
        $('.container-fluid .container.row').
        addClass('container_small');
    }
    //
    //if (windowWidth > 1737) {
    //    $('ul.menu li.tab.cms').
    //        addClass('cms-tab-width-big').
    //    //    removeClass('cms-tab-width-medium').
    //    //    removeClass('cms-tab-width-small');
    //    //
    //    //$('ul.menu').removeClass('small-screen');
    //
    //}
    //else if (windowWidth > 1143 && windowWidth <= 1737) {
    //    console.log(windowWidth);
    //    $('ul.menu li.tab.cms').
    //        addClass('cms-tab-width-medium').
    //    //    removeClass('cms-tab-width-big').
    //    //    removeClass('cms-tab-width-small');
    //    //
    //    //$('ul.menu').removeClass('small-screen');
    //}
    //else if (windowWidth < 1143) {
    //    $('ul.menu li.tab.cms').
    //        addClass('cms-tab-width-small').
    //        removeClass('cms-tab-width-big').
    //        removeClass('cms-tab-width-medium');
    //
    //    $('ul.menu').addClass('small-screen');
    //
    //}


};

/*RUN FUNCTION RESIZE WINDOW ON WINDOW RESIZE CHANGES TAKE PLACE ON THE FLY */
$(window).resize(resize_window);

/*LAYOUT VIEWFINDER -> '[ ]' <- this symbol*/

/*take action when mouse enter the img*/
function view_finder() {
    var window_size = $(document).width();
    var blrtrl = $('div.rectangle-bottom-left, div.rectangle-bottom-right, div.rectangle-top-right, div.rectangle-top-left'),
        btl = $('div.rectangle-bottom-left,div.rectangle-top-left'),
        btr = $('div.rectangle-bottom-right,div.rectangle-top-right'),
        tltr = $('div.rectangle-top-left, div.rectangle-top-right'),
        blr = $('div.rectangle-bottom-left, div.rectangle-bottom-right');

    $('.container').
    on('mouseenter', function() {
        if (window_size > 1280) {
            blrtrl.css('border-color', 'red');
            btl.css('left', '8.5%');
            btr.css('right', '10%');
            tltr.css('top', '9%');
            blr.css('top', '68.0%');

        } else if (window_size > 780 && window_size < 1280) {
            blrtrl.css('border-color', 'red');
            btl.css('left', '11%');
            btr.css('right', '11% ');
            tltr.css('top', '10%');
            blr.css('top', '70.0%');
        } else if (window_size < 780) {
            blrtrl.css('border-color', 'red');
            btl.css('left', '11%');
            btr.css('right', '11% ');
            tltr.css('top', '10%');
            blr.css('top', '70.0%');
        }
    }).on('mouseleave', function() {
        if (window_size > 1280) {
            blrtrl.css('border-color', 'black');
            btl.css('left', '4%');
            btr.css('right', '4%');
            tltr.css('top', '6.9%');
            blr.css('top', '74%');
        } else if (window_size > 780 && window_size < 1280) {
            blrtrl.css('border-color', 'black');
            btl.css('left', '6.3%');
            btr.css('right', '7.4%');
            tltr.css('top', '6.9%');
            blr.css('top', '76.8%');
        } else if (window_size < 780) {
            blrtrl.css('border-color', 'black');
            btl.css('left', '7%');
            btr.css('right', '7%');
            tltr.css('top', '5%');
            blr.css('top', '75.9%%');
        }
    });
}


/*OVERLAY FOR  CHECKBOX*/
$('.carusel,.close,.overlay').on('click', function() {
    $('.overlay').toggleClass('active');
    $('.close').toggleClass('activeExit');
    $('.article').toggleClass('activeExit');

});


/*==========(HOME PAGE)=============*/

/*add overflow to home page  */
function overflow() {
    if ($('article').children('div').hasClass('homePage')) {
        $('div.container').css('overflow', 'hidden');
    }
}

/*search tab bellow the products tab page*/
//menu search (title) on hover
$('ul.menu> li.tab.products>a, .product_tablet').on('mouseover', function() {
    var search = $(this).next();
    var prod = $(this);

    $(search).addClass('show');

    setTimeout(function() {
        $(prod).next().fadeOut("slow", function() {
            $(prod).next().removeClass('show');
        })
    }, 2000)

});

/*==========(EDIT PAGE)============*/

/*hide all the input fields on the start on*/
$('div.form-wrapper p.change').nextAll().hide();
$('p.form_hide,.form-wrapper label,div.form-wrapper input[type="submit"], input.input').hide();

/*edit profile page on click change to reveal input box*/
$('.change').on('click', function() {
    $(this).hide();
    $(this).prevAll().children().fadeIn(1500);
    $(this).nextAll().fadeIn(1500);
    $(this).prevAll().fadeIn(1500);
});

/*hide profile on click*/
$('.form_hide').css('courser', 'pointer').on('click', function() {
    $(this).hide();
    $(this).next().next().hide();
    $(this).next().next().next().fadeIn(3000);
    $(this).next().next().next().nextAll().fadeOut(1000);

});


/*==========(SEARCH PAGE)==========*/

/*SEARCH & VIEW RESULTS GET IN AJAX*/

/*step = 1 | hide result view*/
$('.search_view,.' +
    'search_tablet').hide();

/*step = 2 | get products from server on keyup with ajax*/
$('div.search-tpl>label>input[type="text"]').on('keyup', function() {

    var value = $(this).val();
    if (value) {

        $('div.search_view,div.products').show();
    } else {

        $('div.search_view,div.products').hide();
    }

    div_new = value;
    $('.box').text(div_new);

    $.ajax({
        url: CI_ROOT + 'search/items_search',
        type: 'GET',
        dataType: 'json',
        data: {
            'key': value
        },
        success: function(data) {
            /*after getting the information of the results , send it to outer function to build html output*/
            tpl_products(data);
        }
    })
});


/*step = 3 | building html div with all the info from the search*/
function tpl_products(data) {

    var products = document.createElement('div');
    products.className = 'search_result';

    $(data).each(function(key, value) {

        var content = "<div id='product_id-" + value.id + "'><center><p>Product name :" + value.name + "</p>" +
            "<p>Company :  " + value.company + "</p>" +
            "<p>Model: " + value.model + "</p>" +
            "<p><center><img  class='products-image' src='" + CI_ROOT + "public/img/products/" + value.image + "'" + value.id + "'  alt='' width='250px' border='0'/></center></p>" +
            "<p class='centered'>" + value.slogan + "</p>" +
            "<p class='centered'><b>Price  " + value.price + "$</b></p>" +
            "<center><a  href='" + CI_ROOT + "products/" + value.cat_machine + "/" + value.machine_name + "'>read More</a>" +
            "</center></div>";

        //add content to the little div;
        $(products).append(content);
    });
    //add products to content
    $('.content>div.search-tpl>div.products').html(products);
}


/*======(CHECK OUT PAGE)==========*/

/*ON CLICK IN ORDER BUTTON REMOVE THE ITEM FROM LOCAL-STORAGE*/
$('.order').on('click', function() {
    //order reset
    localStorage.removeItem('products');
});


/*======(ITEMS PAGE)==============*/


/*step = 1 | hide key-features && tech specs*/
$('.content2,.content3').hide();

/*step = 2 | change css to the unhidden overview*/
$('.tab_f').css('background', 'orange');

/*step = 4 | run function with the parameters*/
slideIt_products_info('f', 's', 't', 1, 2, 3);
slideIt_products_info('s', 'f', 't', 2, 1, 3);
slideIt_products_info('t', 's', 'f', 3, 2, 1);


/*step = 3 | function page info */
function slideIt_products_info(sel1, sel2, sel3, con1, con2, con3) {

    $('.tab_' + sel1).on('click', function() {
        $('.content' + con2 + ',.content' + con3).slideUp();
        $('.content' + con1).slideDown();
        $(this).css('background', 'orange');
        $('.tab_' + sel2 + ',.tab_' + sel3).css('background', 'transparent');
    });
}


/*RESPONSIVE VIEW*/

/**/
$('.tablet_nav_bar,ul.menu .icon_mobile').hide();

$('.button img').on('click', function() {

    $('.tablet_nav_bar,ul.menu .icon_mobile').fadeToggle(300);
    $('.container.row').toggleClass('border');

    setTimeout(function() {
        var mobile = $('ul.menu .icon_mobile');
        var tablet_nav = $('.tablet_nav_bar');

        if (!mobile.is(':hover')) {
            $('ul.menu .icon_mobile').fadeOut(500);
        }
        if (!tablet_nav.is(':hover')) {
            $('.tablet_nav_bar').fadeOut(300);
            $('.container.row').removeClass('border');
        }
    }, 5000);
});