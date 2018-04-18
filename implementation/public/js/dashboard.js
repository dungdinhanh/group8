//
// (function ($) {
//     "use strict";

function tryMe() {
    $('.d-inline').each(function () {
        if ($(".d-inline").hasClass("open")) {
            $(this).removeClass('open');
        }
        else {
            $(this).addClass('open');
        }
    });
}

function tryMe2() {
    console.log('aaa')
    $('#nav-drawer').each(function () {
        if ($("#nav-drawer").hasClass("closed")) {
            $(this).removeClass('closed');
        }
        else {
            $(this).addClass('closed');
        }
    })
    console.log('bbb')

    $('#page-my-index').each(function () {
        if ($("#page-my-index").hasClass("drawer-open-left")) {
            $(this).removeClass('drawer-open-left');
        }
        else {
            $(this).addClass('drawer-open-left');
        }
    })
}

/*==================================================================
[ Focus input ]*/


// })(jQuery);