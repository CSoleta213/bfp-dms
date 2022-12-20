@extends('layouts.sidebar')
 
@section('content')

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
            <span style="padding-left: 30px;"><i class='bx bx-home'></i></span>
            <span style="font-weight: bold; margin-left: 20px;">Dashboard</span>
          </a>
        </div>
        <div class="sidebar-links">
          <a class="active" href="/establishments">
            <span style="padding-left: 30px;"><i class='bx bx-buildings'></i></span>
            <span style="font-weight: bold; margin-left: 20px;">Establishments</span>
          </a>
        </div>
        <div class="sidebar-links">
          <a href="/for-renewal">
            <span style="padding-left: 30px;"><i class='bx bx-buildings'></i></span>
            <span style="font-weight: bold; margin-left: 20px;">For Renewal</span>
          </a>
        </div>
        <div class="sidebar-links">
          <a href="/new-applicant">
            <span style="padding-left: 30px;"><i class='bx bx-buildings'></i></span>
            <span style="font-weight: bold; margin-left: 20px;">New Applicant</span>
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
    <div style="display: flex; flex-direction: column; flex: 1; background-color: #FFF">
      <div
        style="
          display: flex;
          flex: 1.4;
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
          <h1 style="margin: 0; letter-spacing: 2px;">ESTABLISHMENTS</h1>
        </div>
      </div>
      <div style="display: flex; flex-direction: column; flex: 3; justify-content: center; margin: 0 50px 50px;">
   
        @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
        @endif
   
        <table class="table table-bordered">
          <tr>
            <!-- <th>No</th> -->
            <th>Bin Ban No</th>
            <th>Expiration Date</th>
            <th>Name of Establishment</th>
            <th>Establishment's Representative</th>
            <th width="280px">Status</th>
          </tr>
          @foreach ($establishments as $establishment)
          <tr>
            <!-- <td>{{ ++$i }}</td> -->
            <td>{{ $establishment->bin_ban_no }}</td>
            <td>{{ $establishment->expiration_date }}</td>
            <td>{{ $establishment->establishment_name }}</td>
            <td>{{ $establishment->establishment_representative }}</td>
            <td>
              <form action="{{ route('establishments.destroy',$establishment->id) }}" method="POST">
   
                <a class="btn btn-info" href="{{ route('establishments.show',$establishment->id) }}">Show</a>
    
                <a class="btn btn-primary" href="{{ route('establishments.edit',$establishment->id) }}">Edit</a>
   
                @csrf
                @method('DELETE')
      
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
  
        {!! $establishments->links() !!}
      </div>
  </div>
@endsection