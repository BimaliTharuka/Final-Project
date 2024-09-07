<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SRMS</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  
  <!-- Favicons -->
  <link href="{{asset('assets/images/saegiswh.png')}}" rel="icon" type="image/png">
  <link href="{{asset('assets/images/saegiswh.png')}}" rel="apple-touch-icon">
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="{{asset('imports/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('imports/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('imports/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('imports/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('imports/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  
  <!-- FullCalendar CSS -->
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet">
  
  <!-- Main CSS File -->
  <link href="{{asset('imports/assets/css/main.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <!-- Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

  <style>
    /* Custom Styles */
    .btn-custom-blue {
      background-color: #007bff !important; /* Bootstrap's primary blue shade */
      border-color: #007bff !important;
      color: white !important;
    }
    .btn-custom-blue:hover {
      background-color: #0056b3 !important; /* Darker shade for hover effect */
      border-color: #004085 !important;
    }
    #calendar {
      max-width: 900px;
      margin: 0 auto;
    }
    /* Custom Styles */
    #header {
    background-color: #ffffff !important; /* White background */
    color: #000000 !important; /* Black text color */
    padding: 10px 0 !important; /* Adjust padding as needed */
    border-bottom: 1px solid #dddddd !important; /* Optional: light gray border for separation */
    z-index: 1000; /* Ensure header is above other elements */
    position: fixed; /* Keep header fixed at the top */
    width: 100%; /* Full width */
  }
  #header .logo h1 {
    color: #000000 !important; /* Black text color for the logo text */
  }
  #navmenu {
    background-color: #ffffff !important; /* White background for nav menu */
    color: #000000 !important; /* Black text color */
    padding: 10px !important; /* Adjust padding as needed */
  }
  #navmenu a {
    color: #000000 !important; /* Black text color for links */
    text-decoration: none !important; /* Remove underline from links */
    padding: 10px !important; /* Adjust padding for spacing */
  }
  #navmenu a.active {
    color: #f4511e !important; /* Optional: color for active link */
  }
  #navmenu a:hover {
    color: #f4511e !important; /* Optional: color for link hover effect */
  }
    .logo img {
      max-height: 50px !important; /* Adjust logo size as needed */
    }
    .jumbotron {
      background-color: #f4511e !important;
      color: #fff !important;
      padding: 100px 25px !important;
    }
    .container-fluid {
      padding: 60px 50px !important;
    }
    .bg-grey {
      background-color: #f6f6f6 !important;
    }
    .logo-small {
      color: #f4511e !important;
      font-size: 50px !important;
    }
    .logo {
      color: #f4511e !important;
      font-size: 200px !important;
    }
    .thumbnail {
      padding: 0 0 15px 0 !important;
      border: none !important;
      border-radius: 0 !important;
    }
    .thumbnail img {
      width: 100% !important;
      height: 100% !important;
      margin-bottom: 10px !important;
    }
    .carousel-control.right, .carousel-control.left {
      background-image: none !important;
      color: #f4511e !important;
    }
    .carousel-indicators li {
      border-color: #f4511e !important;
    }
    .carousel-indicators li.active {
      background-color: #f4511e !important;
    }
    .item h4 {
      font-size: 19px !important;
      line-height: 1.375em !important;
      font-weight: 400 !important;
      font-style: italic !important;
      margin: 70px 0 !important;
    }
    .item span {
      font-style: normal !important;
    }
    .panel {
      border: 1px solid #f4511e !important;
      border-radius: 0 !important;
      transition: box-shadow 0.5s !important;
    }
    .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2) !important;
    }
    .panel-footer .btn:hover {
      border: 1px solid #f4511e !important;
      background-color: #fff !important;
      color: #f4511e !important;
    }
    .panel-heading {
      color: #000000 !important; /* Black text color */
      background-color: #ffffff !important; /* White background color */
      padding: 25px !important;
      border-bottom: 1px solid transparent !important;
      border-top-left-radius: 0px !important;
      border-top-right-radius: 0px !important;
      border-bottom-left-radius: 0px !important;
      border-bottom-right-radius: 0px !important;
    }
    .panel-footer {
      background-color: white !important;
    }
    .panel-footer h3 {
      font-size: 32px !important;
    }
    .panel-footer h4 {
      color: #aaa !important;
      font-size: 14px !important;
    }
    .panel-footer .btn {
      margin: 15px 0 !important;
      background-color: #f4511e !important;
      color: #fff !important;
    }
    @media screen and (max-width: 768px) {
      .col-sm-4 {
        text-align: center !important;
        margin: 25px 0 !important;
      }
    }

    body {
    margin-top: 100px; /* Adjust this value to control the space below the header */
  }
  </style>
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="{{asset ('assets/images/logo-no-background.png')}}" alt="">
        <h1 class="sitename">Student Result Management System</h1>
      </a>

      <!-- Simplified Navigation Menu -->
      <nav id="navmenu" class="navmenu">
          <ul>
              @if (Route::has('login'))
                  @auth
                      <!-- Dashboard Link for Authenticated Users -->
                      <li><a href="{{ route('admin.dashboard') }}" class="active">Dashboard</a></li>
                  @else                                
                      <!-- Login Link -->
                      <li><a href="{{ route('login') }}">Log in</a></li>

                      @if (Route::has('register'))
                          <!-- Register Link -->
                          <li><a href="{{ route('register') }}">Register</a></li>
                      @endif
                  @endauth
              @endif
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <!-- End of Navigation Menu -->

    </div>
</header>

<!-- <div class="p-5 bg-primary text-white text-center">
  <br><br>
  <h1>Saegis</h1>
  <img src="{{asset ('assets/images/saegiswh.png')}}" alt="">
  <br>
  <p>Student Result Management System</p> 
</div> -->

<div class="container mt-5">
  <div class="row">
    <!-- Notice Board on the Left Side -->
    <div class="col-md-8">
      <div class="card">
        
</div>
    <!-- Calendar on the Right Side -->
    <div class="col-md-4">
      <div id="calendar"></div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center">
      <div class="d-flex justify-content-center">
              <span class="text-muted text-center">Created by Team 05 from BIT 03 2024</span>
            </div>
      </div>
    </div>
  </div>
</footer>


<!-- Vendor JS Files -->
<script src="{{asset('imports/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('imports/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('imports/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('imports/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>

<!-- Main JS File -->
<script src="{{asset('imports/assets/js/main.js')}}"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    events: [
      {
        title: 'Event 1',
        start: '2024-09-07',
        end: '2024-09-08'
      },
      {
        title: 'Event 2',
        start: '2024-09-10'
      }
    ]
  });
  calendar.render();
});
</script>

</body>
</html>
