 /*PRODUCT PAGE - FIXING FOR ADDING PRODUCTS BUG */

/*ON-LOAD CHECK IF THERE IS ITEMS ON THE CART*/
$ ( document ).ready ( function () {

    /*start with the updated info from the local storage */
    var items = typeof localStorage[ 'products' ] === 'undefined' ? [] : localStorage[ 'products' ].split ( ',' );

    /*run loop with all the items and disable them , so you can't recheck on them*/
    $.each ( items, function (key, value) {
        /*create value products and */
        var products = '.k' + parseInt ( value );
        $ ( products ).attr ( { disabled: 'disabled' } ).addClass ( 'btn_disable' );
        $ ( products+' > span' ).css ( 'visibility', 'visible' );
    } )
} );


/*UPDATE THE CART  + FIX BUTTON BUG*/
/*AJAX CONNECTION*/
$ ( '.add_to_cart' ).on ( 'click', function () {

    //get the id of the product(store in data-btn attribute );
    var product_id = $ ( this ).data ( 'btn' );

    /*store all the items in array  (if there some items in the localstorage they will add to the items ,else the items will be empty array*/
    items = typeof localStorage[ 'products' ] === 'undefined' ? [] : localStorage[ 'products' ].split ( ',' );

    /*check if the value doesn't already in the array (i did to string function because the value in the array saves as string
     * it gets from the local-storage */
    if ( items.indexOf ( (product_id).toString() ) == -1 ) {

        /*push the value to the end of the array*/
        items.push ( product_id );

        /*then store it in the local storage*/
        localStorage[ 'products' ] = typeof localStorage[ 'products' ] === 'undefined' ?
            /*if the local storage already have values just add the new one , else add only the one we've got*/
            product_id : localStorage[ 'products' ] + ',' + product_id;
    }
    /*pass the product id to the */
    $.ajax ( {

        /*add the new element to the cart*/
        url: CI_ROOT + 'cart/add_to_cart',
        type: "GET",
        dataType: "html",
        data: { id: product_id },
        success: (function (data) {

           /*after update the cart pop up a message that ask the*/
            $('.overlay').fadeIn(100, function () {
                $('.popup').addClass('popup-cart',20,'swing');
            });





            /*if no key will press for 5 sec the page will reload with the update info*/
            setTimeout(reload,10000);

        })
    } )
} );

/*function relad that called in the setTimeout function (reload the page)*/
function reload(){
    location.reload();
}

/*UPDATE CART ,WITH + AND -  SIGN*/
$ ( '.update-cart-btn' ).on ( 'click', function () {

    var role = $ ( this ).data ( 'role' );

    if ( role == 'up' ) {
        var data = parseInt ( $ ( this ).prev ().val () );
        data++;
        $ ( this ).prev ().val ( data );
    }

    else {
        var data = parseInt ( $ ( this ).next ().val () );
        data--;
        $ ( this ).next ().val ( data );
    }

    $ ( '#checkout-form' ).submit ();

} );


/*REMOVE WITH THE '-' SIGN UPDATE THE SUM OF THE ELEMENTS*/
function removeLocalStorage (item, quantity, sum) {

    if ( item ) {
        if ( quantity ) {
            var products = localStorage[ 'products' ];
            products = products.replace ( ',' + item, '' );
            localStorage[ 'products' ] = products;
        }

        if ( sum <= 1 ) {
            localStorage.removeItem ( 'products' );
        }
    }
}




