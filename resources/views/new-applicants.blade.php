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
            flex-direction: row;
            justify-content: start;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.6);
            color: #FFF;
            padding-left: 100px;
          "
        >
          <img class="header-icon" src="{{ url('img/new-applicants-button.png') }}" alt="New Applicants Button">
          <h1 class="header-h1">NEW APPLICANTS</h1>
        </div>
      </div>
      <div style="display: flex; justify-content: end; margin: 20px 50px;">
        <label for="">Search: </label>
        <input type="search" name="" id="" placeholder="Search here..." style="margin-left: 10px; border: solid 2px rgba(0, 0, 0, 0.3); font-family: poppins;">
      </div>
      <div style="display: flex; flex-direction: column; flex: 3; justify-content: flex-start; margin: 20px 50px 50px;">
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
          @foreach ($establishments as $establishment)
          <tr>
            <!-- <td>{{ ++$i }}</td> -->
            <td>{{ $establishment->bin_ban_no }}</td>
            <td class="except">{{ $establishment->establishment_name }}</td>
            <td class="except">{{ $establishment->establishment_representative }}</td>
            <td>
              <form action="{{ route('establishments.destroy',$establishment->id) }}" method="POST" class="flex">
   
                <a class="button button-icon button-show" href="{{ route('establishments.show',$establishment->id) }}"><i class="bx bx-show"></i></a>
    
                <a class="button button-icon button-edit" href="{{ route('establishments.edit',$establishment->id) }}"><i class="bx bx-edit"></i></a>
                
                <div class="button button-icon button-upload"><i class="bx bx-upload"></i></div>
   
                @csrf
                @method('DELETE')
      
                <button type="submit" class="button-icon button-delete"><i class="bx bx-trash"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
  
        {!! $establishments->links() !!}
      </div>
@endsection