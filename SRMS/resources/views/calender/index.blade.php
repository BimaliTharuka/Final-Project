<!-- resources/views/calendar/index.blade.php -->
@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Exam Calendar</h1>
    <div id="calendar"></div>
  </div>

  <style>
    .calendar {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      grid-gap: 10px;
    }

    .day {
      border: 1px solid #ccc;
      padding: 20px;
      text-align: center;
    }
  </style>

  <script>
    const today = new Date();
    const month = today.getMonth();
    const year = today.getFullYear();

    const renderCalendar = () => {
      let days = new Date(year, month + 1, 0).getDate();
      let calendarHTML = '<div class="calendar">';
      for (let day = 1; day <= days; day++) {
        calendarHTML += `<div class="day">${day}</div>`;
      }
      calendarHTML += '</div>';
      document.getElementById('calendar').innerHTML = calendarHTML;
    };

    window.onload = renderCalendar;
  </script>
@endsection
