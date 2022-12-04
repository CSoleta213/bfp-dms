@extends('layouts.sidebar')

@section('content')
  <div style="display: flex; height: 100vh; flex-direction: column;">
    <div style="display: flex; flex: 1; flex-direction: column; justify-content: center; background-image: url('img/header-image.png'); background-repeat: no-repeat; background-size: cover; color: #FFF; padding-left: 100px;">
      <h1>WELCOME!</h1>
      <h6>BFP Region 3 | APALIT FIRE STATION</h6>
    </div>
    <div style="flex: 3;">
      <h1>{{ __('Dashboard') }}</h1>
      <div class="card-body">
        @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
        @endif
      </div>
      <hr>
      <h5>Establishments</h5>
      <h5>Renewal</h5>
      <h5>New</h5>
    </div>
  </div>
@endsection
