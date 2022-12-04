@extends('layouts.sidebar')

@section('content')
  <div style="display: flex; flex: 1; height: 100vh;">
    <div style="display: flex; flex-direction: column; width: 270px; background-color: #B22222; color: #FFF;">
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; margin: 20px 0 20px;">
        <a href="/">
          <img src="{{ url('img/bfp-apalit-logo.png') }}" alt="BFP Apalit Logo" width="150px">
        </a>
        <h3>Bureau of<br>Fire Protection</h3>
      </div>
      <div style="display: flex; flex: 1; flex-direction: column; ">
        <div style="margin-bottom: 20px;">
          <a href="#">
            <span style="padding-left: 30px;"><i class='bx bx-home' style="font-size: 25px;"></i></span>
            <span style="font-weight: bold; margin-left: 20px;">Dashboard</span>
          </a>
        </div>
        <div style="margin-bottom: 20px;">
          <a href="#">
            <span style="padding-left: 30px;"><i class='bx bx-buildings' style="font-size: 25px;"></i></span>
            <span style="font-weight: bold; margin-left: 20px;">Establishments</span>
          </a>
        </div>
        <div></div>
        <div></div>
      </div>
      <div style="display: flex; height: 50px; align-items: center; justify-content: space-around; padding: 10px 0 10px;">
        <div style="display: flex; flex: 2; align-items: center; justify-content: center;">
          <a href="">
            <img src="{{ url('img/bfp-clerk-profile.png') }}" alt="profileImg" style="width: 36px; padding-right: 5px;">
            <div class="name">{{ Auth::user()->name }}</div>
          </a>
        </div>
        <div style="display: flex; flex: 1; align-items: center; justify-content: space-around;">
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class='bx bx-log-out' id="log_out" style="font-size: 25px;"></i>
            <!-- <span>Logout</span> -->
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </div>
    </div>
    <div style="display: flex; flex-direction: column; flex: 1; background-color: #FFF">
      <div
        style="
          display: flex;
          flex: 1;
          background-image: url('img/header-image.png');
          background-repeat: no-repeat;
          background-size: cover;
        "
      >
        <div
          style="
            display: flex;
            flex: 1;
            flex-direction: column;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.6);
            color: #FFF;
            padding-left: 100px;
          "
        >
          <h1 style="margin: 0; letter-spacing: 2px;">WELCOME!</h1>
          <h5 style="margin: 0; letter-spacing: 5px;">BFP Region 3 | APALIT FIRE STATION</h5>
        </div>
      </div>
      <div style="flex: 3;"></div>
    </div>
  </div>
@endsection