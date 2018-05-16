$(document).ready(function() {
    var lesson_id;
    $('.meeting_modal_open').click(function (e) {
        e.preventDefault();
        lesson_id = $(this).attr('lesson');
    });
    $('#create_meeting').click(function () {
        var meeting_title = $("#meeting_title").val();
        $.ajax({
            type: 'POST',
            url: '/teacher/course/meeting/'+ lesson_id,
            data: {meeting_title: meeting_title},
            success: function (data) {

            }
        });
        location.reload();
    })

    $('#create_material').click(function () {
        var title = $("#material_title").val();
        var url = $("#material_url").val();
        $.ajax({
            type: 'POST',
            url: '/teacher/material/'+ lesson_id,
            data: {
                title: title,
                url: url
            },
            success: function (data) {
            }
        });
       // location.reload();
    })
});