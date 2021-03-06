<!DOCTYPE html>
<html>
<head>
    <title>FullCalendar Dengan Codeigniter & Ajax</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script>
        $(document).ready(function(){
            var calendar = $('#calendar').fullCalendar({
                editable:true,
                header:{
                    left:'prev,next today',
                    center:'title',
                    right:'month,agendaWeek,agendaDay'
                },
                events:"<?php echo base_url(); ?>index.php/fullcalendar/load",
                displayEventTime: false,
                eventAfterRender: function (event, element, view) {
        var dataHoje = new Date();
            element.css('color', '#ffffff');
    },
            });
        });
    </script>
</head>
<body>
    <br />
    <h2 align="center"><a href="#">FullCalendar Dengan Codeigniter & Ajax</a></h2>
    <br />
    <div class="container">
        <div id="calendar"></div>
    </div>
</body>
</html>