@extends('layouts.sidebar')

@section('content')
  <div style="display: flex; flex: 1; flex-direction: column; margin-left: 275px;">
    <div class="content-header" style="width: 100%; background-image: url('img/header-image.png'); background-size: cover; color: #FFF;">
      <div style="background-color: rgba(0, 0, 0, 0.6); padding: 50px;">
        <h1 style="margin: 0; letter-spacing: 3px; text-transform: uppercase;">WELCOME, {{ Auth::user()->name }}!</h1>
        <h5 style="margin: 0; letter-spacing: 3px;">BFP Region 3 | APALIT FIRE STATION</h5>
      </div>
    </div>
    <div class="content-body" style="padding: 50px;">
      <div style="display: flex; align-items: center;">
        <img src="{{ url('img/home-icon-black.png') }}" alt="" width="35px" height="35px">
        <h1 style="margin: 0;">DASHBOARD</h1>
        <!-- Trigger/Open The Modal -->
        <div id="addNewEstablishmentBtn" style="display: flex; flex: 1; justify-content: flex-end;"><button class="button-red" style="display: flex; align-items: center;"><img src="{{ url('img/plus-icon.png') }}" style="margin-right: 5px;">ADD NEW ESTABLISHMENTS</button></div>
      </div>
      <hr>
      <div style="display: flex; justify-content: flex-end; margin: 10px;">
        <label for="">Year:</label>
        <input type="text" style="margin-left: 10px; border: solid 2px rgba(0, 0, 0, 0.3); font-family: poppins;">
      </div>
      <div style="display: flex; flex: 1; flex-direction: column;">
        <div class="stats" style="display: flex; flex-direction: column; flex-wrap: wrap; padding: 10px;">
        <div style="display: flex; flex: 1">
          <div class="box-stats" style="display: flex; flex-direction: column; align-items: center; flex: 1; height: 75px; color: #FFF; background-image: url('img/total-estab-bg.png'); background-size: 100% 100%; border-radius: 10px; padding: 5px; margin: 5px;">
            <h1 style="margin: 0;">0</h1>
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

  <!-- The Add New Establishment Form Modal -->
  <div id="addNewEstablishmentFormModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <h1>ADD NEW ESTABLISHMENT</h1>
      <form action="{{ route('establishments.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="form-item">
            <label for="">Bin Ban No.:</label>
            <input type="text" name="bin_ban_no" placeholder="Type here..."><br><br>
          </div>
          <div class="form-item">
            <label for="">Name of Establishment:</label>
            <input type="text" name="establishment_name" placeholder="Type here..."><br><br>
          </div>
          <div class="form-item">
            <label for="">Establishment's Representative:</label>
            <input type="text" name="establishment_representative" placeholder="Type here..."><br><br>
          </div>
          <div class="form-item">
            <label for="">Address:</label>
            <input type="text" name="address" placeholder="Type here..."><br><br>
          </div>
          <div class="form-item">
            <label for="">Contact #:</label>
            <input type="tel" name="contact_no" placeholder="Format: 09123456789" pattern="[0-9]{11}"><br><br>
          </div>
          <div class="form-item button">
            <button class="button-orange margin-lr">BACK</button>
            <button type="submit" class="button-submit">CONFIRM</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script>
// Get the modal
var modal = document.getElementById("addNewEstablishmentFormModal");

// Get the button that opens the modal
var btn = document.getElementById("addNewEstablishmentBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
@endsection