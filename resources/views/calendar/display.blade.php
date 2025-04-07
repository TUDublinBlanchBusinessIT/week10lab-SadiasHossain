@extends('layouts.app')
@section('content')
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
        events: '{{ route ('calendar.json') }}'
      });
     calendar.render();
  });
</script>
@endsection