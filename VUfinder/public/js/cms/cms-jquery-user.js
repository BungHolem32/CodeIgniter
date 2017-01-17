/*(GLOBAL FUNCTIONS)*/

/*CHANGE PAGE URL DEPEND ON THE ID */
function change_url(id, page, select_id){
    var select = $('.'+select_id).val();
    $(id).attr('href',CI_ROOT+'cms/dashboard/delete_form/'+select+'/'+page+'/');
}

/*DASHBOARD CATEGORY ROLE DOWN*/
$('.inner_product_menu').hide();

/*ON LOAD RUN PLACEHOLDER + HIDE ELEMENTS + SHOW ELEMENTS ON CLICK + CHANGE URL-LINK ON CATEGORY + USER MANAGEMENT*/
$().ready(function () {
    /*enable the placeholder script*/
    $('input').placeholder();

    /*HIDE ALL THE EDITABLE ELEMENTS ON (user management & category management )*/
    $('.inner_product_menu,.edit_form-style div h4, .create_form-style div h4,.edit-category>h2,.create-category>h2,.delete-category>h2,.editUser>h2,.addUser>h2, .delUser>h2, .category_list>h2, .products_list>h2,.userList>h2,.user_order>ul>li').nextAll().hide();



    /*SHOW  EDITABLE ELEMENTS IN THE USER MANAGEMENT AND CATEGORY MANAGEMENT PAGE ON CLICK*/
    $('.category>h4,.edit-category>h2, .create-category>h2,.delete-category>h2,.editUser>h2,.addUser>h2,.delUser>h2, .category_list>h2, .products_list>h2, .userList>h2,.edit_form-style div h4, .create_form-style div h4, .user_order>ul>li').on('click', function () {
        $(this).nextAll().slideToggle(500);
    });

    $('li.small-menu').
        on('click',function(){
        $('li.small-menu li').slideToggle(500);
    });


    /*GET VALUE OF THE SELECT BOX IN THE URL FOR DELETING PRODUCT*/
    var user = 'user_management',
        category ='category_management',
        attr = $('div.content-cms').attr('url') ;

    /*pass variable depend on the url page*/
    if (attr == category) {change_url("a.select", category, 'select-category')};
    if (attr== user)      {change_url("a.select", user, 'Select_changeUser')};

});


/*==( PRODUCT MANAGEMENT PAGE )==*/




/*==( ORDER PAGE )==*/

/*nav bar fixed in the*/
$(window).scroll(function () {
    var top = $ ( this ).scrollTop ();
    if ( top >= 200 ) {
        $ ( '.header-titles-order' ).addClass ( 'fixed-top' );
    }
    else {
        $ ( '.header-titles-order' ).removeClass ( 'fixed-top' );
    }
});


/*==( AJAX SECTION  )==*/

/*==( CATEGORY MANAGEMENT )==*/

/*get input values on landing in page (category edit)*/
$('.select-category.edit,.select-category.delete').on('change',function(){
    var category_id = $(this).val();
    console.log(category_id);

    $.ajax({
        url:CI_ROOT+'cms/dashboard/edit_category',
        type:'POST',
        datatype:'json',
        data:{id:category_id},
        success: function(data){
            var category = prepare_Json(data);

            //set Values on the edit form
            $('a.select').attr('href',CI_ROOT+'cms/dashboard/delete_form/'+category[0]+'/category_management');
            $('input[name="c-name-edit"]' ).attr('placeholder',category[1]);
            $('input[name="c-machine-edit"]' ).attr('placeholder',category[2]);
            (category[3]==1)?$(".visibility-edit_on").attr('checked','checked'):$('.visibility-edit_off').attr('checked','checked');
            $('input[name="c-comment-edit"]' ).attr('placeholder',category[4]);
        }
    });
});


/*==( USER MANAGEMENT )==*/

/*get edit values on user with ajax*/
$('.Select_changeUser').on('change',function(){
    var user_edit = $(this).val();
    console.log(user_edit);

    $.ajax({

        url:CI_ROOT+'cms/dashboard/users_edit',
        type:'POST',
        datatype:'json',
        data:{'user_id':user_edit},
        success: function(data){
            var user = prepare_Json(data);

            //set Values on the edit form
            $('a.select').attr('href',CI_ROOT+'cms/dashboard/delete_form/'+user[0]+'/user_management/');
            $('input[name="firstName_edit"]').attr('placeholder' ,user[1]);
            $('input[name="lastName_edit"]').attr('placeholder' ,user[2]);
            (user[3]=='Male')?$('.gender_male').attr('checked','checked'):$('.gender_female').attr('checked','checked');
            $('input[name="email_edit"]').attr('placeholder' ,user[4]);
            $('input[name="password_edit"]').attr('placeholder',user[5]);
            //(user[6]==5)?$('.gender_male').attr('checked','checked'):$('.gender_female').attr('checked','checked');

        }
    });
});

/*prepare json category && user management*/
function prepare_Json(data){
    var parsed = JSON.parse(data);
    var arr = [];
    for(var x in parsed){
        arr.push(parsed[x]);
    }
    return arr;
}

/*==( PRODUCT MANAGEMENT | PRODUCT EDIT)==*/

/*change picture */
$('.change_active').on('click', function () {

    var checked_id = $(this).data('checked_id');
    var product_id = $(this).data('product');


    $.ajax({
        url:CI_ROOT+'cms/dashboard/change_active',
        type:'POST',
        datatype:'json',
        data:{'checked_id':checked_id, 'product_id':product_id},
        success: function(data){
            location.reload();
        }



    })
});


///*HIDE */
//$('.submit_delete').on('click',function(){
//    $('.error_val').addClass('hide');
//    $('.error_val_delete').removeClass('hide');
//
//});
