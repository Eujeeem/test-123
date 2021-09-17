@extends('layout.master')

@section('title')
    Admin - Students
@endsection


@section('content')


@include('sections.searchbar')

<div class="container col-md-9 offset-md-2 mt-5">

<a href="#" class="btn btn-primary" id="myBtn">Add</a>
<a href="{{route('admin')}}" class="btn btn-secondary offset-md-9">Back</a>

<!-- Table -->
    <table class="table table-hover mt-3 table-bordered border-dark">
    <thead class="table-primary table-sm border-dark">
        <tr>
        <th scope="col" class="text-center">Student ID</th>
        <th scope="col" class="text-center">Student Name</th>
        <th scope="col" class="text-center">Course</th>
        <th scope="col" class="text-center">Year</th>
        <th scope="col" class="text-center">Contact Number</th>
        <th scope="col" colspan="2" class="text-center">Action</th>

        </tr>
    </thead>
    <tbody>
    @foreach ($show as $lists)
        <tr>
        <td>{{$lists->id}}</td>
        <td>{{$lists->student_lname}}, {{$lists->student_fname}} {{$lists->student_mname}}. </td>
        <td>{{$lists->course_name}}</td>
        <td>{{$lists->student_year}}</td>
        <td>{{$lists->student_contactnumber}}</td>
        <td class="text-center"><a href="{{route('edit_student', $lists->id)}}" class="btn btn-warning">Edit</a></td>
        <td class="text-center"><a href="{{route('delete_student', $lists->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete it?');">Delete</a></td>
        </tr>
    @endforeach

    </tbody>
    </table>

    @include('Modals.add_student')

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


@endsection