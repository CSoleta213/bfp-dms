@extends('layouts.sidebar')
 
@section('content')
  <div class="content-container">
    <div class="content-header">
      <div class="content-header-black">
        <img class="header-icon" src="{{ url('img/establishments-button.png') }}" alt="">
        <div>
          <h2>{{ $new_applicant->establishment_name }}</h2>
          <span>{{ $new_applicant->address }} | {{ $new_applicant->contact_no }} | {{ $new_applicant->establishment_representative }}</span>
        </div>
      </div>
    </div>
    <div class="content-inner-body">
      <div class="content-inner-body-content">
        <div class="content-inner-body-item">
          <!-- Trigger/Open The Modal -->
          <button class="button-orange">
            <div class="estab-modal" href="#uploadIOModal">
              UPLOAD
            </div>
          </button>
          <!-- The Add New Applicant Form Modal -->
          <div id="uploadIOModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <h2>Inspection Order for {{ $new_applicant->bin_ban_no }}</h2>
              <form action="{{ route('new-applicants.store') }}" method="POST">
              @csrf
                <div class="modal-body">
                  <div class="form-item">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <strong>Inspection Order</strong>
        </div>
        
        <div class="content-inner-body-item">
          <!-- Trigger/Open The Modal -->
          <button class="button-orange">
            <div class="estab-modal" href="#uploadAIRModal">
              UPLOAD
            </div>
          </button>
          <!-- The Add New Applicant Form Modal -->
          <div id="uploadAIRModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <h2>After Inspection Report for {{ $new_applicant->bin_ban_no }}</h2>
              <form action="{{ route('new-applicants.store') }}" method="POST">
              @csrf
                <div class="modal-body">
                  <div class="form-item">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <strong>After Inspection Report</strong>
        </div>

        <div class="content-inner-body-item">
          <!-- Trigger/Open The Modal -->
          <button class="button-orange">
            <div class="estab-modal" href="#uploadAFModal">
              UPLOAD
            </div>
          </button>
          <!-- The Add New Applicant Form Modal -->
          <div id="uploadAFModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <h2>Application Form for {{ $new_applicant->bin_ban_no }}</h2>
              <form action="{{ route('new-applicants.store') }}" method="POST">
              @csrf
                <div class="modal-body">
                  <div class="form-item">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <strong>Application Form</strong>
        </div>

        <div class="content-inner-body-item">
          <!-- Trigger/Open The Modal -->
          <button class="button-orange">
            <div class="estab-modal" href="#uploadTOPModal">
              UPLOAD
            </div>
          </button>
          <!-- The Add New Applicant Form Modal -->
          <div id="uploadTOPModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <h2>Tax Order of Payment for {{ $new_applicant->bin_ban_no }}</h2>
              <form action="{{ route('new-applicants.store') }}" method="POST">
              @csrf
                <div class="modal-body">
                  <div class="form-item">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <strong>Tax Order of Payment</strong>
        </div>

        <div class="content-inner-body-item">
          <!-- Trigger/Open The Modal -->
          <button class="button-orange">
            <div class="estab-modal" href="#uploadReceiptModal">
              UPLOAD
            </div>
          </button>
          <!-- The Add New Applicant Form Modal -->
          <div id="uploadReceiptModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <h2>Receipt for {{ $new_applicant->bin_ban_no }}</h2>
              <form action="{{ route('new-applicants.store') }}" method="POST">
              @csrf
                <div class="modal-body">
                  <div class="form-item">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <strong>Receipt</strong>
        </div>

        <div class="content-inner-body-item">
          <!-- Trigger/Open The Modal -->
          <button class="button-orange">
            <div class="estab-modal" href="#uploadPFPModal">
              UPLOAD
            </div>
          </button>
          <!-- The Add New Applicant Form Modal -->
          <div id="uploadPFPModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <h2>Pre-fire Plan for {{ $new_applicant->bin_ban_no }}</h2>
              <form action="{{ route('new-applicants.store') }}" method="POST">
              @csrf
                <div class="modal-body">
                  <div class="form-item">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <strong>Pre-fire Plan</strong>
        </div>

        <div class="content-inner-body-item">
          <!-- Trigger/Open The Modal -->
          <button class="button-orange">
            <div class="estab-modal" href="#uploadFOModal">
              UPLOAD
            </div>
          </button>
          <!-- The Add New Applicant Form Modal -->
          <div id="uploadFOModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <h2>FSIC Occupancy for {{ $new_applicant->bin_ban_no }}</h2>
              <form action="{{ route('new-applicants.store') }}" method="POST">
              @csrf
                <div class="modal-body">
                  <div class="form-item">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <strong>FSIC Occupancy</strong>
        </div>

      </div>
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