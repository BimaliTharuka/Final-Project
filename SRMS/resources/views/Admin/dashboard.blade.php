<!DOCTYPE html>
<html lang="en">
  <head> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SRMS </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css' )}}">
    <link rel="stylesheet" href="{{ asset( 'assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css' )}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/select.dataTables.min.css' )}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css' )}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-new.png' )}}" />
  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">
      
      <!-- <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
            <div class="ps-lg-3">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 fw-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank" class="btn me-2 buy-now-btn border-0">Buy Now</a>
              </div>
            </div> 
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="ti-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="ti-close text-white"></i>
              </button>
            </div>
          </div>
        </div>
      </div>  -->
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo" href="index.html">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
                <img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" />
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
                <!-- Greeting Text -->
                <h1 class="welcome-text" id="greeting-text">Good Morning, 
                    <span class="text-black fw-bold">{{ auth()->user()->name }}</span>
                </h1>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <!-- Other navigation items -->
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="icon-bell"></i>
                <span class="count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 fw-medium float-start">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-end">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                    <p class="fw-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-lock-outline m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                    <p class="fw-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                    <p class="fw-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li>
            
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{ asset('assets/images/faces/face8.jpg' )}}" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{ asset('assets/images/faces/face8.jpg' )}}" alt="Profile image">
                  <p class="mb-1 mt-3 fw-semibold">{{auth()->user()->name}}</p>
                  <p class="fw-light text-muted mb-0">{{auth()->user()->email}}</p>
                </div>
                <!-- <a href="{{ route('profile') }}" class="dropdown-item">
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a> -->
                
                <a href="{{ route('profile') }}" class="dropdown-item">
   <i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> 
   My Profile 
   <span class="badge badge-pill badge-danger">1</span>
</a>

                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a> 
                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                  </form>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>

<!-- JavaScript to dynamically update the greeting -->
<script>
    function updateGreeting() {
    const greetingText = document.getElementById('greeting-text');
    if (greetingText) {
        // Get the current time in the Asia/Colombo timezone (UTC+05:30)
        const now = new Date();
        const timeZone = 'Asia/Colombo'; // Adjust to your preferred timezone
        const formatter = new Intl.DateTimeFormat([], { timeZone, hour: '2-digit', hour12: false });
        const hours = parseInt(formatter.format(now), 10);

        let greeting;

        // Determine the correct greeting based on the time of day
        if (hours < 6) {
            greeting = 'Good Night';
        } else if (hours < 12) {
            greeting = 'Good Morning';
        } else if (hours < 18) {
            greeting = 'Good Afternoon';
        } else {
            greeting = 'Good Evening';
        }

        // Update the greeting text dynamically
        greetingText.innerHTML = `${greeting}, <span class="text-black fw-bold">{{ auth()->user()->name }}</span>`;
    }
}

// Run the function when the page loads
window.onload = updateGreeting;



    // Run the function when the page loads
    window.onload = updateGreeting;
</script>

<div class="container-fluid page-body-wrapper">
    <!-- Sidebar and other contents -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('student.dashboard') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('student.timetable') }}">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Timetables</span>
              </a>
            </li><li class="nav-item">
              <a class="nav-link" href="{{ route('student.results') }}">
                <i class="mdi mdi-book-open-variant menu-icon"></i>
                <span class="menu-title">Results </span>
              </a>
            </li><li class="nav-item">
              <a class="nav-link" href="{{ route('student.exam-request') }}">
                <i class="mdi mdi-trending-up menu-icon"></i>
                <span class="menu-title">Exam Request</span>
              </a>
            </li> 
          </ul>
        </nav>
<!-- </div> -->

        @extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <!-- Left Side Sections -->
            <div class="col-md-8 d-flex flex-column">
                <!-- Course Overview Section -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Recently Accessed Courses</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Introduction to Programming</span>
                                <span class="badge bg-success">Accessed on: September 10, 2024</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Advanced Data Structures</span>
                                <span class="badge bg-info">Accessed on: September 5, 2024</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Database Management Systems</span>
                                <span class="badge bg-warning">Accessed on: September 1, 2024</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Web Development Fundamentals</span>
                                <span class="badge bg-danger">Accessed on: August 28, 2024</span>
                            </li>
                        </ul>
                        <div class="chart-container mt-4">
                            <canvas id="courseOverviewLineChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Site Announcements Section -->
                <div class="card flex-fill mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Site Announcements</h5>
                        <div class="announcement">
                            <p><strong>REVISED RE-SIT, RE-TAKE & RE-CORRECTION FEES/CHARGES (DIPLOMA/CERTIFICATE PROGRAMMES)</strong></p>
                            <p>by <strong>Lakmini Chamalika</strong> - Monday, 2 November 2023, 4:50 PM</p>
                            <p><strong>DATE:</strong> 27.09.2022</p>
                            <p><strong>TO:</strong> DIPLOMA/CERTIFICATE PROGRAMME STUDENTS (PEARSON ASSURED/LOCAL)</p>
                            <p><strong>FROM:</strong> REGISTRAR</p>
                            <p><strong>THROUGH:</strong> MANAGEMENT OF SAEGIS CAMPUS</p>
                            <p><strong>SUBJECT:</strong> RE-SIT, RE-TAKE & RE-CORRECTION FEES/CHARGES</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side Sections -->
            <div class="col-md-4">
                <!-- Upcoming Exam Section -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Upcoming Exam</h5>
                        <p>There are no upcoming exams</p>
                        <a href="{{ route('calendar.index') }}" class="btn btn-primary">Go to calendar</a> <!-- Updated link -->
                    </div>
                </div>

                <!-- Recent Activity Section -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Recent Activity</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Assignment Submission: Web Development</span>
                                <span class="badge bg-info">September 12, 2024</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Discussion Post: Data Structures</span>
                                <span class="badge bg-success">September 10, 2024</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Course Enrollment: Advanced Databases</span>
                                <span class="badge bg-warning">September 5, 2024</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Assignment Feedback: Introduction to Programming</span>
                                <span class="badge bg-danger">September 2, 2024</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Student Evaluation Chart Section -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Student Evaluation</h5>
                        <canvas id="studentEvaluationChart" width="400" height="200"></canvas>
                    </div>
                </div>

                <!-- Online Users Section -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Online Users</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>User 1</span>
                                <span class="badge bg-success">Online</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>User 2</span>
                                <span class="badge bg-success">Online</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>User 3</span>
                                <span class="badge bg-success">Online</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>User 4</span>
                                <span class="badge bg-success">Online</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="row mt-4">
        <div class="col-md-12 text-left">
            @if(Auth::check())
                <p>You are logged in as <strong>{{ Auth::user()->name }}</strong></p>
            @else
                <p>You are not logged in. <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a></p>
            @endif
        </div>
    </div>

    <!-- Chart.js Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Course Overview Line Chart
            var ctx1 = document.getElementById('courseOverviewLineChart').getContext('2d');
            var courseOverviewLineChart = new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
                    datasets: [{
                        label: 'Course Access Frequency',
                        data: [12, 15, 8, 20, 18],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.raw;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: '#333'
                            },
                            grid: {
                                color: '#ddd'
                            }
                        },
                        x: {
                            ticks: {
                                color: '#333'
                            },
                            grid: {
                                color: '#ddd'
                            }
                        }
                    }
                }
            });

            // Student Evaluation Chart
            var ctx2 = document.getElementById('studentEvaluationChart').getContext('2d');
            var studentEvaluationChart = new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: ['Your Score', 'Class Average'],
                    datasets: [{
                        label: 'Evaluation Score',
                        data: [85, 88], // Replace with actual data
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)'
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
    </div>

@endsection




                  <!-- <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="statistics-details d-flex align-items-center justify-content-between">
                            <div>
                              <p class="statistics-title">Bounce Rate</p>
                              <h3 class="rate-percentage">32.53%</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                            </div>
                            <div>
                              <p class="statistics-title">Page Views</p>
                              <h3 class="rate-percentage">7,682</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                            </div>
                            <div>
                              <p class="statistics-title">New Sessions</p>
                              <h3 class="rate-percentage">68.8</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Avg. Time on Site</p>
                              <h3 class="rate-percentage">2m:35s</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">New Sessions</p>
                              <h3 class="rate-percentage">68.8</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Avg. Time on Site</p>
                              <h3 class="rate-percentage">2m:35s</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-8 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                      <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                                      <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                                    </div>
                                    <div id="performanceLine-legend"></div>
                                  </div>
                                  <div class="chartjs-wrapper mt-4">
                                    <canvas id="performanceLine" width=""></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                              <div class="card bg-primary card-rounded">
                                <div class="card-body pb-0">
                                  <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                                  <div class="row">
                                    <div class="col-sm-4">
                                      <p class="status-summary-ight-white mb-1">Closed Value</p>
                                      <h2 class="text-info">357</h2>
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="status-summary-chart-wrapper pb-4">
                                        <canvas id="status-summary"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                        <div class="circle-progress-width">
                                          <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                        </div>
                                        <div>
                                          <p class="text-small mb-2">Total Visitors</p>
                                          <h4 class="mb-0 fw-bold">26.80%</h4>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="d-flex justify-content-between align-items-center">
                                        <div class="circle-progress-width">
                                          <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                        </div>
                                        <div>
                                          <p class="text-small mb-2">Visits per day</p>
                                          <h4 class="mb-0 fw-bold">9065</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 

                      <div class="row">
                        <div class="col-lg-8 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                      <h4 class="card-title card-title-dash">Market Overview</h4>
                                      <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                    </div>
                                    <div>
                                      <div class="dropdown">
                                        <button class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                          <h6 class="dropdown-header">Settings</h6>
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                    <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                      <h2 class="me-2 fw-bold">$36,2531.00</h2>
                                      <h4 class="me-2">USD</h4>
                                      <h4 class="text-success">(+1.37%)</h4>
                                    </div>
                                    <div class="me-3">
                                      <div id="marketingOverview-legend"></div>
                                    </div>
                                  </div>
                                  <div class="chartjs-bar-wrapper mt-3">
                                    <canvas id="marketingOverview"></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded table-darkBGImg">
                                <div class="card-body">
                                  <div class="col-sm-8">
                                    <h3 class="text-white upgrade-info mb-0"> Enhance your <span class="fw-bold">Campaign</span> for better outreach </h3>
                                    <a href="#" class="btn btn-info upgrade-btn">Upgrade Account!</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                      <h4 class="card-title card-title-dash">Pending Requests</h4>
                                      <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p>
                                    </div>
                                    <div>
                                      <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new member</button>
                                    </div>
                                  </div>
                                  <div class="table-responsive  mt-1">
                                    <table class="table select-table">
                                      <thead>
                                        <tr>
                                          <th>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false" id="check-all"><i class="input-helper"></i></label>
                                            </div>
                                          </th>
                                          <th>Customer</th>
                                          <th>Company</th>
                                          <th>Progress</th>
                                          <th>Status</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="d-flex ">
                                              <img src="assets/images/faces/face1.jpg" alt="">
                                              <div>
                                                <h6>Brandon Washington</h6>
                                                <p>Head admin</p>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                          </td>
                                          <td>
                                            <div>
                                              <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">79%</p>
                                                <p>85/162</p>
                                              </div>
                                              <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="badge badge-opacity-warning">In progress</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="d-flex">
                                              <img src="assets/images/faces/face2.jpg" alt="">
                                              <div>
                                                <h6>Laura Brooks</h6>
                                                <p>Head admin</p>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                          </td>
                                          <td>
                                            <div>
                                              <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">65%</p>
                                                <p>85/162</p>
                                              </div>
                                              <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="badge badge-opacity-warning">In progress</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="d-flex">
                                              <img src="assets/images/faces/face3.jpg" alt="">
                                              <div>
                                                <h6>Wayne Murphy</h6>
                                                <p>Head admin</p>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                          </td>
                                          <td>
                                            <div>
                                              <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">65%</p>
                                                <p>85/162</p>
                                              </div>
                                              <div class="progress progress-md">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="badge badge-opacity-warning">In progress</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="d-flex">
                                              <img src="assets/images/faces/face4.jpg" alt="">
                                              <div>
                                                <h6>Matthew Bailey</h6>
                                                <p>Head admin</p>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                          </td>
                                          <td>
                                            <div>
                                              <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">65%</p>
                                                <p>85/162</p>
                                              </div>
                                              <div class="progress progress-md">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="badge badge-opacity-danger">Pending</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="d-flex">
                                              <img src="assets/images/faces/face5.jpg" alt="">
                                              <div>
                                                <h6>Katherine Butler</h6>
                                                <p>Head admin</p>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <h6>Company name 1</h6>
                                            <p>company type</p>
                                          </td>
                                          <td>
                                            <div>
                                              <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">65%</p>
                                                <p>85/162</p>
                                              </div>
                                              <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="badge badge-opacity-success">Completed</div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row flex-grow">
                            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body card-rounded">
                                  <h4 class="card-title  card-title-dash">Recent Events</h4>
                                  <div class="list align-items-center border-bottom py-2">
                                    <div class="wrapper w-100">
                                      <p class="mb-2 fw-medium"> Change in Directors </p>
                                      <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                          <i class="mdi mdi-calendar text-muted me-1"></i>
                                          <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="list align-items-center border-bottom py-2">
                                    <div class="wrapper w-100">
                                      <p class="mb-2 fw-medium"> Other Events </p>
                                      <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                          <i class="mdi mdi-calendar text-muted me-1"></i>
                                          <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="list align-items-center border-bottom py-2">
                                    <div class="wrapper w-100">
                                      <p class="mb-2 fw-medium"> Quarterly Report </p>
                                      <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                          <i class="mdi mdi-calendar text-muted me-1"></i>
                                          <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="list align-items-center border-bottom py-2">
                                    <div class="wrapper w-100">
                                      <p class="mb-2 fw-medium"> Change in Directors </p>
                                      <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                          <i class="mdi mdi-calendar text-muted me-1"></i>
                                          <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="list align-items-center pt-3">
                                    <div class="wrapper w-100">
                                      <p class="mb-0">
                                        <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h4 class="card-title card-title-dash">Activities</h4>
                                    <p class="mb-0">20 finished, 5 remaining</p>
                                  </div>
                                  <ul class="bullet-line-list">
                                    <li>
                                      <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                        <p>Just now</p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                                        <p>1h</p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Jack William</span> assign you a task</div>
                                        <p>1h</p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                                        <p>1h</p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                                        <p>1h</p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                        <p>1h</p>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                        <p>1h</p>
                                      </div>
                                    </li>
                                  </ul>
                                  <div class="list align-items-center pt-3">
                                    <div class="wrapper w-100">
                                      <p class="mb-0">
                                        <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="card-title card-title-dash">Todo list</h4>
                                        <div class="add-items d-flex mb-0">
                                          <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                                          <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                        </div>
                                      </div>
                                      <div class="list-wrapper">
                                        <ul class="todo-list todo-list-rounded">
                                          <li class="d-block">
                                            <div class="form-check w-100">
                                              <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                              </label>
                                              <div class="d-flex mt-2">
                                                <div class="ps-4 text-small me-3">24 June 2020</div>
                                                <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                                <i class="mdi mdi-flag ms-2 flag-color"></i>
                                              </div>
                                            </div>
                                          </li>
                                          <li class="d-block">
                                            <div class="form-check w-100">
                                              <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                              </label>
                                              <div class="d-flex mt-2">
                                                <div class="ps-4 text-small me-3">23 June 2020</div>
                                                <div class="badge badge-opacity-success me-3">Done</div>
                                              </div>
                                            </div>
                                          </li>
                                          <li>
                                            <div class="form-check w-100">
                                              <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                              </label>
                                              <div class="d-flex mt-2">
                                                <div class="ps-4 text-small me-3">24 June 2020</div>
                                                <div class="badge badge-opacity-success me-3">Done</div>
                                              </div>
                                            </div>
                                          </li>
                                          <li class="border-bottom-0">
                                            <div class="form-check w-100">
                                              <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                              </label>
                                              <div class="d-flex mt-2">
                                                <div class="ps-4 text-small me-3">24 June 2020</div>
                                                <div class="badge badge-opacity-danger me-3">Expired</div>
                                              </div>
                                            </div>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="card-title card-title-dash">Type By Amount</h4>
                                      </div>
                                      <div>
                                        <canvas class="my-auto" id="doughnutChart"></canvas>
                                      </div>
                                      <div id="doughnutChart-legend" class="mt-5 text-center"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                          <h4 class="card-title card-title-dash">Leave Report</h4>
                                        </div>
                                        <div>
                                          <div class="dropdown">
                                            <button class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                              <h6 class="dropdown-header">week Wise</h6>
                                              <a class="dropdown-item" href="#">Year Wise</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="mt-3">
                                        <canvas id="leaveReport"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                          <h4 class="card-title card-title-dash">Top Performer</h4>
                                        </div>
                                      </div>
                                      <div class="mt-3">
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                          <div class="d-flex">
                                            <img class="img-sm rounded-10" src="assets/images/faces/face1.jpg" alt="profile">
                                            <div class="wrapper ms-3">
                                              <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                              <small class="text-muted mb-0">162543</small>
                                            </div>
                                          </div>
                                          <div class="text-muted text-small"> 1h ago </div>
                                        </div>
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                          <div class="d-flex">
                                            <img class="img-sm rounded-10" src="assets/images/faces/face2.jpg" alt="profile">
                                            <div class="wrapper ms-3">
                                              <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                              <small class="text-muted mb-0">162543</small>
                                            </div>
                                          </div>
                                          <div class="text-muted text-small"> 1h ago </div>
                                        </div>
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                          <div class="d-flex">
                                            <img class="img-sm rounded-10" src="assets/images/faces/face3.jpg" alt="profile">
                                            <div class="wrapper ms-3">
                                              <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                              <small class="text-muted mb-0">162543</small>
                                            </div>
                                          </div>
                                          <div class="text-muted text-small"> 1h ago </div>
                                        </div>
                                        
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                          <div class="d-flex">
                                            <img class="img-sm rounded-10" src="assets/images/faces/face4.jpg" alt="profile">
                                            <div class="wrapper ms-3">
                                              <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                              <small class="text-muted mb-0">162543</small>
                                            </div>
                                          </div>
                                          <div class="text-muted text-small"> 1h ago </div>
                                        </div>
                                        <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                          <div class="d-flex">
                                            <img class="img-sm rounded-10" src="assets/images/faces/face5.jpg" alt="profile">
                                            <div class="wrapper ms-3">
                                              <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                              <small class="text-muted mb-0">Alaska, USA</small>
                                            </div>
                                          </div>
                                          <div class="text-muted text-small"> 1h ago </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          <!-- </div> -->
          <!-- content-wrapper ends
           partial:partials/_footer.html 
           <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
              <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
            </div>
          </footer> 
           partial
        </div> 
         main-panel ends 
      </div>
       page-body-wrapper ends -->
    <!-- </div>  -->
    <!-- container-scroller -->
    <!-- plugins:js -->

    
     
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/chart.umd.js')}}"></script>
    <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{ asset('assets/js/template.js')}}"></script>
    <script src="{{ asset('assets/js/settings.js')}}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html> 