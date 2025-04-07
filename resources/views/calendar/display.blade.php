@extends('layouts.app')
@section('content')

@include('calendar.modalbooking')
<div id="calendar"></div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar(calendarEl, {
      plugins: [ dayGridPlugin, timeGridPlugin, listPlugin, interactionPlugin ],
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title'
        },
        slotDuration: '00:10:00',
        initialDate: '2017-01-01',
        editable: true,
        events: '{{ route ('calendar.json') }}',
        dateClick: function(info) {
          document.getElementById('starttime').value = info.date.toISOString().substring(11, 16);
          document.getElementById('bookingDate').value = info.date.toISOString().substring(0, 10);
          var modalElement = document.getElementById('fullCalModal');
          var modal = new bootstrap.Modal(modalElement);
          modal.show();
        },
      });
     calendar.render();
  });
</script>
@endsection