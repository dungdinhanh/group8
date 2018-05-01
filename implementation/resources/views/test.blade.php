<!doctype html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('js/lib/sortable.js')}}"></script>
    <script>
        $( function() {
            $( "#sortable" ).sortable();
            // $( "#sortable" ).disableSelection();
        } );
    </script>
</head>
<body>
<ol class='example'>
    <li>First</li>
    <li>Second</li>
    <li>Third</li>
</ol>g
</body>
</html>