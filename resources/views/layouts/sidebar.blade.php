<!DOCTYPE html>
<html>
  <title>BFP DMS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="{{ url('img/bfp-apalit-logo.png') }}">

  <!-- Sidebar CSS -->
  <link rel="stylesheet" href="{{ url('css/sidebar.css') }}">
  
  <!-- Boxicons CSS -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <body>
    <div class="main-container">
      <div class="sidebar">
        <div class="sidebar-heading">
          <a href="/">
            <img src="{{ url('img/bfp-apalit-logo.png') }}" alt="BFP Apalit Logo" width="150px">
          </a>
          <h3>Bureau of<br>Fire Protection</h3>
        </div>
        <div class="sidebar-links-container">
          <div class="sidebar-links">
            <a href="/home">
              <span style="padding-left: 30px;"><img class="sidebar-icon" src="{{ url('img/home-button.png') }}" alt="Establishments Button"></span>
              <span style="font-weight: bold; margin-left: 20px;">Dashboard</span>
            </a>
          </div>
          <div class="sidebar-links">
            <a class="active" href="/establishments">
              <span style="padding-left: 30px;"><img class="sidebar-icon" src="{{ url('img/establishments-button.png') }}" alt="Establishments Button"></span>
              <span style="font-weight: bold; margin-left: 20px;">Establishments</span>
            </a>
          </div>
          <div class="sidebar-links">
            <a href="/for-renewal">
              <span style="padding-left: 30px;"><img class="sidebar-icon" src="{{ url('img/for-renewal-button.png') }}" alt="Establishments Button"></span>
              <span style="font-weight: bold; margin-left: 20px;">For Renewal</span>
            </a>
          </div>
          <div class="sidebar-links">
            <a href="/for-approval">
              <span style="padding-left: 30px;"><img class="sidebar-icon" src="{{ url('img/for-approval-button.png') }}" alt="Establishments Button"></span>
              <span style="font-weight: bold; margin-left: 20px;">For Approval</span>
            </a>
          </div>
          <div class="sidebar-links">
            <a href="/new-applicants">
              <span style="padding-left: 30px;"><img class="sidebar-icon" src="{{ url('img/new-applicants-button.png') }}" alt="Establishments Button"></span>
              <span style="font-weight: bold; margin-left: 20px;">New Applicants</span>
            </a>
          </div>
        </div>
        <div style="display: flex; height: 50px; align-items: center; justify-content: space-around; padding: 10px 0 10px; align-content: center; margin: 10px;">
          <div style="display: flex; flex: 1.5; align-items: center; justify-content: center;">
            <a href="">
              <img src="{{ url('img/bfp-clerk-profile.png') }}" alt="profileImg" style="width: 36px; padding-right: 10px;">
              <div class="name">{{ Auth::user()->name }}</div>
            </a>
          </div>
          <div style="display: flex; flex: 1; align-items: center; justify-content: space-around;">
            <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class='bx bx-log-out' id="log_out" style="font-size: 24px;"></i>
              <span style="margin-left: 5px;">Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </div>
      </div>
      @yield('content')
    </div>
  </body>
</html>