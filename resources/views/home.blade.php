@extends('layouts.sidebar')

@section('content')
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
          <h1 style="margin: 0; letter-spacing: 2px;">WELCOME!</h1>
          <h5 style="margin: 0; letter-spacing: 5px;">BFP Region 3 | APALIT FIRE STATION</h5>
        </div>
      </div>
      <div style="display: flex; flex-direction: column; flex: 3; justify-content: center; margin: 0 50px 50px;">
        <div style="display: flex; flex: 1; align-self: center; align-items: center; margin: 5px; width: 70%;">
          <div style="display: flex; flex: 1"><h1>DASHBOARD</h1></div>
          <!-- Trigger/Open The Modal -->
          <div id="addNewEstablishmentBtn" style=" flex: 1; display: flex; flex-direction: column; align-content: center;"><button style="align-self: flex-end; background-color: #B22222; color: #FFF; width: 210px; border: none; border-radius: 10px; padding: 10px; font-family: 'Poppins', sans-serif; cursor: pointer;"><i class='bx bxs-plus-square' style="padding-right: 5px;"></i>Add New Establishments</button></div>
        </div>
        <hr style="display: flex; width: 70%; border: 1px solid rgba(0, 0, 0, 0.7);">
        <div style="display: flex; flex: 1; align-self: center; align-items: center; margin: 5px; width: 70%; background-color: #800909; color: #FFF; border-radius: 10px; padding-left: 25px;">
          <h3 style="flex: 1">Total No. of Establishments</h3>
          <div style="display: flex; justify-content: center; align-items: center; text-align: center; background-image: url('img/establishment-icon.png'); background-size: 50% 100%; background-repeat: no-repeat; margin: 0 25px;">
            <h1 style="margin: 0px 50px;">0</h1>
          </div>
        </div>
        <div style="display: flex; align-self: center; align-items: center; flex: 1; margin: 5px; width: 70%; background-color: #F27D0C; color: #FFF; border-radius: 10px; padding-left: 25px;">
          <h3 style="flex: 1">No. of Establishments for Renewal of FSIC</h3>
          <div style="display: flex; justify-content: center; align-items: center; text-align: center; background-image: url('img/renewal-icon.png'); background-size: 50% 100%; background-repeat: no-repeat; margin: 0 25px;">
            <h1 style="margin: 0px 50px;">0</h1>
          </div>
        </div>
        <div style="display: flex; align-self: center; align-items: center; flex: 1; margin: 5px; width: 70%; background-color: #E4B53B; color: #FFF; border-radius: 10px; padding-left: 25px;">
          <h3 style="flex: 1">No. of New Applied Establishments</h3>
          <div style="display: flex; justify-content: center; align-items: center; text-align: center; background-image: url('img/new-icon.png'); background-size: 50% 100%; background-repeat: no-repeat; margin: 0 25px;">
            <h1 style="margin: 0px 50px;">0</h1>
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