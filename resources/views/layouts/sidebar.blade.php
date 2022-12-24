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
              <span style="padding-left: 30px;"><img class="sidebar-icon" src="{{ url('img/home-icon-white.png') }}" alt="Establishments Button"></span>
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
        <div class="sidebar-links">
          <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <span style="padding-left: 30px;"><img class="sidebar-icon" src="{{ url('img/logout-icon.png') }}" alt="Establishments Button"></span>
            <span style="font-weight: bold; margin-left: 20px;">Logout</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </div>
      @yield('content')
    </div>
  </body>
</html>