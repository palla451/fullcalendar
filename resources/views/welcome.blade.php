<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 5.6 FullCalendar</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link href="{{ asset('vendor/giovanni/fullcalendar/fullcalendar.min.css') }}" rel='stylesheet' />

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>

        <div class="container">

            <div id="calendar">

            </div>

        </div>

    </body>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript" src="{{ asset('vendor/giovanni/fullcalendar/lib/jquery.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('vendor/giovanni/fullcalendar/lib/moment.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('vendor/giovanni/fullcalendar/fullcalendar.min.js') }}"></script>

    <script>

    var BASEURL = "{{ url('/') }}";

        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: '2018-03-12',
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: BASEURL + '/events'
            });

        });

    </script>





</html>
