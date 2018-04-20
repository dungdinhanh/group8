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
    $('#nav-drawer').each(function () {
        if ($("#nav-drawer").hasClass("closed")) {
            $(this).removeClass('closed');
        }
        else {
            $(this).addClass('closed');
        }
    });

    $('#page-my-index').each(function () {
        if ($("#page-my-index").hasClass("drawer-open-left")) {
            $(this).removeClass('drawer-open-left');
        }
        else {
            $(this).addClass('drawer-open-left');
        }
    })
}

function changeCourseOverview() {
    $('#myoverview_courses_view').each(function () {
        if ($("#myoverview_courses_view").hasClass("in")) {
            // $(this).removeClass('in');
        } else {
            $(this).addClass('in');
        }
    })

    $('#myoverview_courses_view').each(function () {
        if ($("#myoverview_courses_view").hasClass("active")) {
            // $(this).removeClass('active');
        } else {
            $(this).addClass('active');
        }
    })
}

/*==================================================================
[ Focus input ]*/


// })(jQuery);