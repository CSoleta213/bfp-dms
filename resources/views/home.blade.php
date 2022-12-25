@extends('layouts.sidebar')

@section('content')
  <div class="content-container">
    <div class="content-header">
      <div class="content-header-black" style="flex-direction: column; align-items: start;">
        <h1>WELCOME, {{ Auth::user()->name }}!</h1>
        <h5>BFP Region 3 | APALIT FIRE STATION</h5>
      </div>
    </div>
    <div class="content-body">
      <div style="display: flex; align-items: center; padding-bottom: 15px; border-bottom: 2px solid rgba(0, 0, 0, 0.2)">
        <img src="{{ url('img/home-icon-black.png') }}" alt="" width="35px" height="35px" style="margin-right: 20px;">
        <h1 style="margin: 0;">DASHBOARD</h1>
        <div style="display: flex; flex: 1; justify-content: flex-end;"> <a href="{{ url('/new-applicants') }}" class="button button-red" style="display: flex; align-items: center;"><img src="{{ url('img/plus-icon.png') }}" style="margin-right: 10px;">ADD NEW APPLICANT</a></div>
      </div>
      <div style="display: flex; justify-content: flex-end; margin: 5px;">
        <label for="">Year:</label>
        <input type="text" style="margin-left: 10px; border: solid 2px rgba(0, 0, 0, 0.3); font-family: poppins;">
      </div>
      <div style="display: flex; flex: 1; flex-direction: column;">
        <div class="stats" style="display: flex; flex-direction: column; flex-wrap: wrap; padding: 10px;">
        <div style="display: flex; flex: 1">
          <div class="box-stats" style="display: flex; flex-direction: column; align-items: center; flex: 1; height: 75px; color: #FFF; background-image: url('img/total-estab-bg.png'); background-size: 100% 100%; border-radius: 10px; padding: 5px; margin: 5px;">
            <h1 style="margin: 0;">{{ $number_of_estab }}</h1>
            <h4 style="margin: 0;">Total Establishments</h4>
          </div>
          <div class="box-stats" style="display: flex; flex-direction: column; align-items: center; flex: 1; height: 75px; color: #FFF; background-image: url('img/approved-bg.png'); background-size: 100% 100%; border-radius: 10px; padding: 5px; margin: 5px;">
            <h1 style="margin: 0;">0</h1>
            <h4 style="margin: 0;">Approved FSIC</h4>
          </div>
          <div class="box-stats" style="display: flex; flex-direction: column; align-items: center; flex: 1; height: 75px; color: #FFF; background-image: url('img/for-approval-bg.png'); background-size: 100% 100%; border-radius: 10px; padding: 5px; margin: 5px;">
            <h1 style="margin: 0;">0</h1>
            <h4 style="margin: 0;">For Approval of FSIC</h4>
          </div>
          <div class="box-stats" style="display: flex; flex-direction: column; align-items: center; flex: 1; height: 75px; color: #FFF; background-image: url('img/new-bg.png'); background-size: 100% 100%; border-radius: 10px; padding: 5px; margin: 5px;">
            <h1 style="margin: 0;">0</h1>
            <h4 style="margin: 0;">New Establishments</h4>
          </div>
          </div>
          <div style="display: flex; flex: 1">
          <div class="box-stats" style="display: flex; flex-direction: column; align-items: center; flex: 1; height: 75px; color: #FFF; background-image: url('img/renewed-bg.png'); background-size: 100% 100%; border-radius: 10px; padding: 5px; margin: 5px;">
            <h1 style="margin: 0;">0</h1>
            <h4 style="margin: 0;">Renewed FSIC</h4>
          </div>
          <div class="box-stats" style="display: flex; flex-direction: column; align-items: center; flex: 1; height: 75px; color: #FFF; background-image: url('img/for-renewal-bg.png'); background-size: 100% 100%; border-radius: 10px; padding: 5px; margin: 5px;">
            <h1 style="margin: 0;">0</h1>
            <h4 style="margin: 0;">For Renewal of FSIC</h4>
          </div>
          <div class="box-stats" style="display: flex; flex-direction: column; align-items: center; flex: 1; height: 75px; color: #FFF; background-image: url('img/pending-bg.png'); background-size: 100% 100%; border-radius: 10px; padding: 5px; margin: 5px;">
            <h1 style="margin: 0;">0</h1>
            <h4 style="margin: 0;">Incomplete Requirements</h4>
          </div>
          <div class="box-stats" style="display: flex; flex-direction: column; align-items: center; flex: 1; height: 75px; color: #FFF; background-image: url('img/closed-bg.png'); background-size: 100% 100%; border-radius: 10px; padding: 5px; margin: 5px;">
            <h1 style="margin: 0;">0</h1>
            <h4 style="margin: 0;">Closed Establishments</h4>
          </div>
          </div>
        </div>
        <div style="display: flex;">
        <div style="display: flex; flex: 1; flex-direction: column; margin: 5px;">
        <h3 style="text-align: center;">Top 10 Newest Applied Establishment</h3>
          <table>
            <tr style="background-color: #800909; color: #FFF;">
              <th>No</th>
              <th>Bin Ban No.</th>
              <th>Name of Establishment</th>
            </tr>
            @foreach ($establishments as $establishment)
            <tr>
              <td>{{ ++$i }}</td>
              <td>{{ $establishment->bin_ban_no }}</td>
              <td class="except">{{ $establishment->establishment_name }}</td>
            </tr>
            @endforeach
          </table>
        </div>
        <div style="display: flex; flex: 1; flex-direction: column; margin: 5px;">
        <h3 style="text-align: center;">Top 10 Establishments Nearest to Expire FSIC</h3>
          <table>
          <tr style="background-color: #800909; color: #FFF;">
              <th>No</th>
              <th>Bin Ban No.</th>
              <th>Name of Establishment</th>
            </tr>
            @foreach ($establishments as $establishment)
            <tr>
              <td>{{ ++$i }}</td>
              <td>{{ $establishment->bin_ban_no }}</td>
              <td class="except">{{ $establishment->establishment_name }}</td>
            </tr>
            @endforeach
          </table>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection