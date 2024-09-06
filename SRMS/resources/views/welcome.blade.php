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
  
  <!-- Main CSS File -->
  <link href="{{asset('imports/assets/css/main.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

  <!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet">



  
 
  <style>
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
   background-image: none;
   color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  .btn-custom-blue {
        background-color: #007bff; /* Bootstrap's primary blue shade */
        border-color: #007bff;
        color: white;
    }
    .btn-custom-blue:hover {
        background-color: #0056b3; /* Darker shade for hover effect */
        border-color: #004085;
    }
    #calendar {
      max-width: 900px;
      margin: 0 auto;
    }
    
    </style>
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top" style="background-color: rgba(0, 128, 255, 0.8);">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset ('assets/images/saegiswh.png')}}" alt="">
        <h1 class="sitename">Student Result managemnet System</h1>
      </a>

      <!-- Simplified Navigation Menu -->
<nav id="navmenu" class="navmenu">
    <ul>
        @if (Route::has('login'))
            @auth
                <!-- Dashboard Link for Authenticated Users -->
                <li><a href="{{ url('/dashboard') }}" class="active">Dashboard</a></li>
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
</div>
</header>
<!-- End of Navigation Menu -->



    

  

<div class="p-5 bg-primary text-white text-center">
    <br><br>
  <h1>Saegis</h1>
  <img src="{{asset ('assets/images/saegiswh.png')}}" alt="">
  <br>
  <p>Student Result management System</p> 
</div>



<div class="container mt-5">
  <div class="row">
    <!-- Notice Board on the Left Side -->
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h2>Notice Board</h2>
        </div>
        <div class="card-body">
          <h5 class="card-title">Latest Notices</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <strong>Notice 1:</strong> New exam schedules are out for the semester.
            </li>
            <li class="list-group-item">
              <strong>Notice 2:</strong> Library hours extended during finals week.
            </li>
            <li class="list-group-item">
              <strong>Notice 3:</strong> Don't forget to submit your assignments by the due date.
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Calendar on the Right Side -->
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Upcoming Exams</h3>
        </div>
        <div class="card-body">
          <!-- Calendar Container -->
          <div id="calendar"></div>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- <h2>Contextual Classes</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Default</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
      </tr>      
      <tr class="table-primary">
        <td>Primary</td>
        <td>Joe</td>
        <td>joe@example.com</td>
      </tr>
      <tr class="table-success">
        <td>Success</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="table-danger">
        <td>Danger</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="table-info">
        <td>Info</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr class="table-warning">
        <td>Warning</td>
        <td>Refs</td>
        <td>bo@example.com</td>
      </tr>
      <tr class="table-active">
        <td>Active</td>
        <td>Activeson</td>
        <td>act@example.com</td>
      </tr>
      <tr class="table-secondary">
        <td>Secondary</td>
        <td>Secondson</td>
        <td>sec@example.com</td>
      </tr>
      <tr class="table-light">
        <td>Light</td>
        <td>Angie</td>
        <td>angie@example.com</td>
      </tr>
      <tr class="table-dark">
        <td>Dark</td>
        <td>Bo</td>
        <td>bo@example.com</td>
      </tr>
    </tbody>
  </table> -->
  </div>
</div>
<br>
<div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p class="contact-info">
          <i class="fas fa-map-marker-alt"></i> Chicago, US
        </p>
        <p class="contact-info">
          <i class="fas fa-phone"></i> +00 1515151515
        </p>
        <p class="contact-info">
          <i class="fas fa-envelope"></i> myemail@something.com
        </p>
      </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
        <button class="btn btn-custom-blue pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>


  <footer id="footer" class="footer dark-background">

    

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Anyar</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
    
        Designed by <a href="">abc</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  

  <!-- Vendor JS Files -->
  <script src="{{asset ('imports/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset ('imports/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset ('imports/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset ('imports/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset ('imports/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset ('imports/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset ('imports/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

  <!-- Main JS file ->
  <script src="{{asset('imports/assets/js/main.js')}}"></script>

  <!-- Include jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth', // or 'listWeek', 'dayGridDay', etc.
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      events: [
        {
          title: 'Exam 1',
          start: '2024-09-05',
          description: 'Description for Exam 1'
        },
        {
          title: 'Exam 2',
          start: '2024-09-10',
          description: 'Description for Exam 2'
        }
        // Add more events here
      ]
    });

    calendar.render();
  });
</script>


  </body>

</html>