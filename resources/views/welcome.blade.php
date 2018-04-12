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

            {{ Form::open(['route'=> 'events.store','method'=>'post', 'role'=>'form']) }}

            <div id="responsive-modal" class="modal fade" tabindex="=1" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4>Registra nuovo evento</h4>

                        </div>

                        <div class="modal-body">

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"></button>
                            {!! Form::submit('GUARDAR',['class'=> 'btn btn-info pull-right']) !!}
                        </div>

                    </div>
                </div>
            </div>

            {{ Form::close() }}

            <div id="calendar"></div>

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
                selectable: true,
                selectHelper: true,

                select:function(start){
                    start = moment(start.format());
                    alert(start);
                },
              //  eventLimit: true, // allow "more" link when too many events
                events: BASEURL + '/events'
            });

        });

    </script>





</html>
