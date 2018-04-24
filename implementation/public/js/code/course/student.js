$(document).ready(function() {
    var search_student_field = $('#search_student_field').val();
    var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
    ];
    $( "#student_email" ).autocomplete({
        source: availableTags
    });
    $("#close_student").click(function () {
        //$('#studentModal').hide();
        $( "#student_email" ).autocomplete({
            source: availableTags
        });
    });

});