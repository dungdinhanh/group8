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


function changePage(index, total) {
    console.log(index, total);
    for(let i = 1; i <= total; i++){
        if(parseInt(i) === parseInt(index) ){
            $('#page' + index).each(function () {
                if ($('#page' + index).hasClass("hidden")) {
                    $(this).removeClass('hidden');
                }
            })

            $('#pageItem' + index).each(function () {
                if ($('#pageItem' + index).hasClass("active")) {
                    // $(this).removeClass('active');
                } else {
                    $(this).addClass('active');
                }
            })
        }else {
            $('#page' + i).each(function () {
                if ($('#page' + i).hasClass("hidden")) {
                    // $(this).removeClass('hidden');
                } else {
                    $(this).addClass('hidden');
                }
            })

            $('#pageItem' + i).each(function () {
                if ($('#pageItem' + i).hasClass("active")) {
                    $(this).removeClass('active');
                }
            })
        }
    }

}

/*==================================================================
[ Focus input ]*/


// })(jQuery);