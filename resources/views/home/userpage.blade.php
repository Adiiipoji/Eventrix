<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Eventrix</title>

  <!-- Airbnb Style Minimalist CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Sixtyfour+Convergence&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Afacad Flux', sans-serif;
      font-size:20px;
      background-color: #f9f9f9;
      color: #333;
    }

    header {
      background-color: #fff;
      padding: 20px 0;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    header img {
      width: 180px;
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: flex-end;
      gap: 20px;
    }

    nav ul li a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      padding: 10px 20px;
    }

    nav ul li a:hover {
      color: #008000;
    }

    .hero_area {
      position: relative;
      text-align: center;
      background-image: url('home/images/ggs.jpg');
      background-size: cover;
      background-position: center;
      padding: 22%;
      height: 100%;
    }

    .hero_area h1 {
      color: white;
      font-size: 48px;
      font-weight: bold;
    }

    .hero_area::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero_area .content {
      position: relative;
      z-index: 2;
    }

    section {
      padding: 60px 0;
    }

    .heading_container h2 {
      font-size: 36px;
      margin-bottom: 30px;
      text-align: center;
    }

    .event_card {
      border: none;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s;
    }

    .event_card:hover {
      transform: translateY(-10px);
    }

    .event_card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .event_card .card-body {
      padding: 20px;
    }

    .event_card h5 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .event_card p {
      color: #666;
    }

    .btn-primary {
      background-color: #008000;
      border: none;
      padding: 10px 20px;
    }

    .about_section img {
      max-width: 100%;
      border-radius: 8px;
    }

    .footer_section {
      background-color: #333;
      color: white;
      padding: 60px 0;
    }

    .footer_section a {
      color: white;
      text-decoration: none;
    }

    .footer_section p {
      font-size: 14px;
    }
    .form {
    width: 25%;
    margin: 0 auto; /* Centers the form horizontally */
    text-align: center;
    }
    .scroll-top-btn {
        display: none; /* Hidden by default */
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 99; /* Make sure it stays on top */
        width: 50px; /* Adjust the size as needed */
        height: 50px; /* Adjust the size as needed */
        cursor: pointer;
        opacity: 0.7; /* Make it slightly transparent */
        transition: opacity 0.3s;
    }

    .scroll-top-btn:hover {
        opacity: 1; /* Fully opaque on hover */
    }
    .logo{
        width: 250px;
        padding: -100px
    }
    nav ul li a.btn {
    width: 100px;
    text-align: center;
    padding: 10px 0;
    }

    .btn-primary, .btn-success {
    height: 40px;
    line-height: 20px;
    }
    .common-btn {
    width: 120px; /* Set fixed width */
    height: 40px; /* Set fixed height */
    line-height: 20px; /* Center text vertically */
    text-align: center;
    color: white; /* Set text color */
    background-color: #008000; /* Set the same background color */
    border: none; /* Remove border */
    padding: 10px 0; /* Set equal vertical padding */
    text-decoration: none; /* Remove underline */
    display: inline-block; /* Ensure block display for proper dimensions */
    transition: background-color 0.3s; /* Add hover effect */
    }

    .common-btn:hover {
    background-color: #005700; /* Darken color on hover */
    }



  </style>
</head>
<body>

  <!-- Header Section -->
  <!-- Header Section -->
<header class="header_section" id="home">
  <div class="container">
      <nav class="navbar navbar-expand-lg">
          <a href="index.html">
              <img src="logo/logo1T.png" alt="Eventrix Logo" class="logo"/>
          </a>
          <div class="collapse navbar-collapse">
              <ul class="navbar-nav ms-auto">
                  <li><a href="#home">Home</a></li>
                  <li><a href="#occasion">Event</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#book">Book</a></li>
                  @if (Route::has('login'))
                      @auth
                          <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                          <li><span>Welcome, {{ Auth::user()->name }}!</span></li>
                          <li><x-app-layout></x-app-layout></li>
                      @else
                        <li><a href="{{ route('login') }}" class="btn btn-primary common-btn">Log In</a></li>
                        <li><a href="{{ route('register') }}" class="btn btn-success common-btn">Register</a></li>
                      @endauth
                  @endif
              </ul>
          </div>
      </nav>
  </div>
</header>


  <!-- Hero Section -->
  <div class="hero_area">
    <div class="content">
      <h1>Welcome to Eventrix</h1>
    </div>
  </div>

  <!-- Event Section -->
  <section id="occasion">
    <div class="container">
      <div class="heading_container">
        <h2>Our Events</h2>
      </div>
      <div class="row">
        @foreach($events as $event)
        <div class="col-md-4">
          <div class="event_card card">
            <img src="event_img/{{$event->image}}" alt="{{ $event->event_title }}">
            <div class="card-body">
              <h5>{{ $event->event_title }}</h5>
              <p>{{ $event->description }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <span>{{ $event->price }}</span>
                <a href="{{ url('event_details', $event->id) }}" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about_section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="images/logo.png" alt="Eventrix">
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h2>We Are Eventrix</h2>
            <p>Eventrix brings simplicity and elegance to event management, offering a wide range of services and beautiful venues. Join us for a seamless event experience.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Reservation Section -->
  <section id="book">
    <div class="container">
      <div class="heading_container">
        <h2>Reserve Your Event</h2>
      </div>
      <form class="form" action="{{url('addreservation')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" @if(Auth::id()) value="{{Auth::user()->name}}" @endif required />
        </div>
        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" @if(Auth::id()) value="{{Auth::user()->email}}" @endif required />
        </div>
        <div class="mb-3">
          <label for="phone">Phone</label>
          <input type="tel" class="form-control" id="phone" name="phone" @if(Auth::id()) value="{{Auth::user()->phone}}" @endif required />
        </div>
        <div class="mb-3">
          <label for="startDate">Start Date</label>
          <input type="date" class="form-control" id="startDate" name="startDate" required />
        </div>
        <div class="mb-3">
          <label for="endDate">End Date</label>
          <input type="date" class="form-control" id="endDate" name="endDate" required />
        </div>
        <button type="submit" class="btn btn-primary">Book Event</button>
      </form>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4>Contact Us</h4>
          <p><i class="fa fa-map-marker-alt"></i> Arellano Street, Dagupan City, Pangasinan</p>
          <p><i class="fa fa-phone-alt"></i> Call #09632854430</p>
          <p><i class="fa fa-envelope"></i> occasionbooker@gmail.com</p>
        </div>
        <div class="col-md-4">
          <h4>About Eventrix</h4>
          <p>Providing the best event management services with modern simplicity and elegance.</p>
        </div>
        <div class="col-md-4">
          <h4>Opening Hours</h4>
          <p>Everyday: 10:00 AM - 10:00 PM</p>
        </div>
      </div>
      <div class="footer-info text-center">
        <p>&copy; <span id="displayYear"></span> All Rights Reserved By Eventrix</p>
      </div>
    </div>
  </footer>

  <img id="scrollTopBtn" class="scroll-top-btn" src="logo/upArrow.png" alt="Scroll to Top" onclick="scrollToTop()" />



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  <script>
    // Get the button
    let scrollTopBtn = document.getElementById("scrollTopBtn");

    // When the user scrolls down 20px from the top, show the button
    window.onscroll = function() {
      scrollFunction();
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollTopBtn.style.display = "block"; // Show button
      } else {
        scrollTopBtn.style.display = "none"; // Hide button
      }
    }

    // When the user clicks on the button, scroll to the top
    function scrollToTop() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
    }
  </script>

</body>
</html>
