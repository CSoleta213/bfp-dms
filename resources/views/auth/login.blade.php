@extends('layouts.app')

@section('content')
<div style="display: flex; height: 100vh; flex-direction: column; justify-content: center; align-items: center; background-image: url('img/login-page-bg.png');">
  <div style="flex: 1;"></div>
  <div style="display: flex; flex: 3; flex-direction: column; align-items: center; background-color: rgba(255, 255, 255, 0.95); width: 40%; border-radius: 15px; padding: 2%;">
    <div>
      <img src="{{ url('img/bfp-apalit-logo.png') }}" alt="BFP Apalit Logo" width="200px">
    </div>
    
    <h2 style="margin-bottom: 0; color: #221639;">Welcome!</h2>
    <p style="margin: 0; color: #1D0A57;">Please enter your email and password to continue.</p>

    <br>

    <form method="POST" action="{{ route('login') }}" style="display: flex; flex-direction: column; flex: 1; width: 70%;">
      @csrf

      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus style="border: 1px solid #7BB9FA; padding: 10px; display: flex; width: 100%; margin-bottom: 10px; font-family: 'Poppins', sans-serif; letter-spacing: 2px;">

      @error('email')
        <strong>{{ $message }}</strong>
      @enderror

      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password" style="border: 1px solid #7BB9FA; padding: 10px; display: flex; width: 100%; font-family: 'Poppins', sans-serif; letter-spacing: 2px;">

      @error('password')
        <strong>{{ $message }}</strong>
      @enderror
      
      @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" style="display: flex; justify-content: flex-end; text-decoration: none;">
          {{ __('Forgot Your Password?') }}
        </a>
      @endif
      <br>

      <center>
        <button class="login" type="submit">
          {{ __('Login') }}
        </button>
        <!-- <button class="signup" type="submit" style="border: 2px solid #1E4178; border-radius: 4px; padding: 10px 40px 10px; font-family: 'Poppins', sans-serif; font-weight: bold;">
          {{ __('Sign Up') }}
        </button> -->
      </center>
      
    </form>
    <!-- <p>Don’t have an account? <a href="{{ route('register') }}">Sign Up</a></p> -->
  </div>
  <div style="flex: 1;"></div>
</div>  
@endsection
