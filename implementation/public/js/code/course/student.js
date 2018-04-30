$(document).ready(function() {
    var course_id = $('#course_id').val();
    $('#search_student_group')
        .dropdown({
            apiSettings: {
                url: '/teacher/course/student/search?q={query}',
                data: {
                    'courseId': course_id,
                },
                cache: false,
                onResponse: function(data) {
                    var response = { // response as the items on the front-end
                        results: []
                    };
                    console.log(data);
                    $.each(data.results, function (index, item) {
                        response.results.push({
                            full_name: '<img src="https://runestone.it.uu.se/attachments/download/1278/22519192_10155209527636799_4798772387481420173_n.jpg" width="30px">'+
                                        '<br><br>'+'<h5>'+item.full_name+'</h5>' + item.email,
                            id: item.id,
                        });
                    });
                    console.log(response)
                    return response
                }
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
            url: '/teacher/course/student/enroll',
            data: {
                courseId: course_id,
                userIds: $('#search_student_group').dropdown('get value')
            },
            success: function (data) {
                // location.reload();
                t.row.add([
                    {
                        "id": "Tiger Nixon",
                        "full_name": "System Architect",
                        "email": "$3,120",
                        "university": "2011/04/25",
                        "class": "Edinburgh",
                        "date_of_birth": "5421"
                    }
                ]).draw( false );
            }
        });
    });

     var t = $('#table_id').DataTable({
        "dom": '<"top"if>rt<"bottom"lp><"clear">',
         // "columnDefs": [ {
         //     "searchable": false,
         //     "orderable": false,
         //     "targets": 0
         // } ],
         // "order": [[ 1, 'asc' ]],
        "ajax": {
            "url": "/teacher/course/"+course_id+"/student/list",
            "dataSrc": ""
        },
        "columns": [
            // { "data": "id" },
            { "data": "full_name" },
            { "data": "email" },
            { "data": "university" },
            { "data": "class" },
            { "data": "date_of_birth" }
        ]
    });
    // t.on( 'order.dt search.dt', function () {
    //     t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
    //         cell.innerHTML = i+1;
    //     } );
    // } ).draw();
});