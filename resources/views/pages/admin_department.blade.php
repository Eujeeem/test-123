@extends('layout.master')

@section('title')
    Admin - Departments
@endsection


@section('content')


@include('sections.header')

<div class="container col-md-8 offset-md-2 mt-5">

<a href="#" class="btn btn-primary" id="myBtn" >Add</a>
<a href="{{route('admin')}}" class="btn btn-secondary offset-md-9">Back</a>

<!-- Table -->
<div class="grid-container ">
    <table id="example" class="table table-hover mt-3 table-bordered table-striped border-dark" style="width:100%">
    <thead class="table-primary table-sm border-dark">
        <tr>
        <th >Deparment Name</th>
        <th >Incharge</th>
        <th class="text-center">Action</th>

        </tr>
    </thead>
    <tbody>
    @foreach ($show as $lists)
      
        <tr>
        <td>{{$lists->department_name}} </td>
        <td>{{$lists->incharge_name}}</td>
  
        <td class="text-center"><a href="{{route('edit_department', $lists->id)}}" class="me-1"><i class="fas fa-edit"></i></a><a href="{{route('delete_department', $lists->id)}}" onclick="return confirm('Are you sure you want to delete it?');"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
      
    @endforeach

    </tbody>
    </table>
</div>

    @include('Modals.add_department')





</div>

@endsection

@section('scripts')

<script>
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

  <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
  </script>
@endsection