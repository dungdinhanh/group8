$(document).ready(function() {
    $("#search").keyup(function () {

        var search = $("#search").val();
        console.log('sssssv', search.length);

        if (search.length < 1) {
            $("#origin_result").show();
            $("#search_result").hide();
        } else {
            $("#origin_result").hide();
            $("#search_result").show();
            $.ajax({
                type: 'POST',
                url: '/teacher/course/search',
                data: {search: search},
                success: function (data) {
                    $("#search_result").html(data);
                }
            });
        }
    });
});