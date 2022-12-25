@extends('layouts.sidebar')
 
@section('content')
  <div class="content-container">
    <div class="content-header">
      <div class="content-header-black">
        <img class="header-icon" src="{{ url('img/new-applicants-button.png') }}" alt="New Applicants Button">
        <h1>NEW APPLICANTS</h1>
      </div>
    </div>
    <div class="content-body">
      <div style="display: flex; align-items: center;">
        <button class="button-red">
          <!-- Trigger/Open The Modal -->
          <div class="estab-modal" href="#AddNewApplicantModal" style="display: flex; align-items: center;">
            <img src="{{ url('img/plus-icon.png') }}" style="margin-right: 10px;">
            ADD NEW APPLICANT
          </div>
        </button>
        <div style="display: flex; flex: 1; justify-content: end; margin: 20px 0px;">
          <label for="">Search: </label>
          <input type="search" name="" id="" placeholder="Search here..." style="margin-left: 10px; border: solid 2px rgba(0, 0, 0, 0.3); font-family: poppins;">
        </div>
      </div>
      <div style="display: flex; flex-direction: column; flex: 3; justify-content: flex-start; margin: 20px 0px 50px;">
        <center>   
          @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
          @endif
        </center>
   
        <table>
          <tr>
            <!-- <th>No</th> -->
            <th>Bin Ban No.</th>
            <th>Name of Establishment</th>
            <th>Establishment's Representative</th>
            <th width="280px">Action</th>
          </tr>
          @foreach ($new_applicants as $new_applicant)
          <tr>
            <!-- <td>{{ ++$i }}</td> -->
            <td>{{ $new_applicant->bin_ban_no }}</td>
            <td class="except">{{ $new_applicant->establishment_name }}</td>
            <td class="except">{{ $new_applicant->establishment_representative }}</td>
            <td>
              <form action="{{ route('new-applicants.destroy',$new_applicant->id) }}" method="POST" class="flex">
                
                <a class="button button-icon button-show" href="{{ route('new-applicants.show',$new_applicant->id) }}"><i class="bx bx-show"></i></a>
    
                <a class="button button-icon button-edit" href="{{ route('new-applicants.edit',$new_applicant->id) }}"><i class="bx bx-edit"></i></a>
                
                <div class="button button-icon button-upload"><i class="bx bx-upload"></i></div>
   
                @csrf
                @method('DELETE')
      
                <button type="submit" class="button-icon button-delete"><i class="bx bx-trash"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
  
        {!! $new_applicants->links() !!}
      </div>
    </div>
  </div>
  <!-- The Add New Applicant Form Modal -->
  <div id="AddNewApplicantModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <h1>ADD NEW ESTABLISHMENT</h1>
      <form action="{{ route('new-applicants.store') }}" method="POST">
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
    // Get the div that opens the modal
    var div = document.querySelectorAll("div.estab-modal");

    // All page modals
    var  modals = document.querySelectorAll('.modal');

    // Get the <span> element that closes the modal
    var spans = document.getElementsByClassName("close");

    // When the user clicks the div, open the modal 
    for (var i = 0; i < div.length; i++) {
    div[i].onclick = function(e) {
        e.preventDefault();
        modal = document.querySelector(e.target.getAttribute("href"));
        modal.style.display = "block";
      }
    }

    // When the user clicks on <span> (x), close the modal
    for (var i = 0; i < spans.length; i++) {
    spans[i].onclick = function() {
        for (var index in modals) {
          if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
        }
      }
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
        for (var index in modals) {
          if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
        }
      }
    }
  </script>
@endsection