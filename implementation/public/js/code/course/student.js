$(document).ready(function() {
    var course_id = $('#course_id').val();
    // data table

    var t = $('#table_id').DataTable({
        "dom": 'lf<"toolbar">rtip',
        "iDisplayLength": 5,
        "aLengthMenu": [[5, 10, 50, 100, -1], [5, 10, 50, 100, "All"]],
        "ajax": {
            "url": "/teacher/course/"+course_id+"/student/list",
            "dataSrc": ""
        },
        "columns": [
            {
                data: null,
                "orderable":      false,
                "searchable": false,
                render: function ( data, type, full, meta  ) {
                    return meta.row + 1;
                }
            },
            { "data": "full_name" },
            { "data": "email" },
            { "data": "university" },
            { "data": "class" },
            { "data": "date_of_birth" },
            {
                data: null,
                "orderable":      false,
                "searchable": false,
                render: function ( data, type, full, meta  ) {
                    return '<button class="kick_student circular ui negative basic button">Unenroll</button>';
                }
            }
        ],
        initComplete: function () {
            var column = this.api().column(4);
            var select = $('<select><option value=""></option></select>')
                .appendTo( $(column.footer()).empty() )
                .on( 'change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                    );

                    column
                        .search( val ? '^'+val+'$' : '', true, false )
                        .draw();
                } );

            column.data().unique().sort().each( function ( d, j ) {
                select.append( '<option value="'+d+'">'+d+'</option>' )
            } );
        }
    });

    $("div.toolbar").html('<button class="ui positive circular button" style="margin-left: 150px" data-toggle="modal" data-target="#studentModal">' +
        'Enroll a new student</button>')

    $('#table_id').on('click', 'tr td .kick_student', function(e){
        var selectedRow = $(this).parent().parent();
        var data = t.row( selectedRow ).data();
        $.alertable.confirm("Are you sure to kick "+ data.full_name + " out of this course?").then(function() {
            $.ajax({
                type: 'GET',
                url: '/teacher/course/student/kick',
                data: {
                    courseId: course_id,
                    studentId: data.id,
                },
                success: function (data) {
                    console.log(data)
                    t.row( selectedRow )
                        .remove()
                        .draw();
                }
            });
        });
    });

    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();


    // dropdown ui
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
                t.ajax.reload();
                $('#search_student_group').dropdown('clear');
            }
        });
    });
});