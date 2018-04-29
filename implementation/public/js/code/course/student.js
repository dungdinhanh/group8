$(document).ready(function() {
    var course_id = $('#course_id').val();
    $('#search_student_group')
        .dropdown({
            apiSettings: {
                url: '/teacher/course/search_student?q={query}',
                data: {
                    'courseId': course_id,
                },
                cache: false
            },
            fields: {
                remoteValues : 'results', // grouping for api results
                name         : 'full_name',   // displayed dropdown text
                value        : 'id',   // actual dropdown value
                description  : 'email'
            },
            filterRemoteData: true,
            placeholder: "enter email or fullname of student"
        })
    $("#clear_student").click(function () {
        $('#search_student_group').dropdown('clear');
    });
    $("#enroll_student").click(function () {
        $.ajax({
            type: 'GET',
            url: '/teacher/course/enroll_student',
            data: {
                courseId: course_id,
                userIds: $('#search_student_group').dropdown('get value')
            },
            success: function (data) {
                location.reload();
            }
        });
    });
});