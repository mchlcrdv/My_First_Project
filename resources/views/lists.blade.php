@extends('layout')
@section('title', 'List')

@section('content')
<link rel='stylesheet' type='text/css' href='<?php echo asset('storage/css/style.css')?>'>


<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5">
      <div class="table-responsive">
        <table class ="table table-striped">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Repeat Password</th>
              <th>Action</th>
            </tr>
          <tbody>
            @foreach($student_profile as $student)
            <tr>
              <td>{{ $student->name }} {{ $student->Name }}</td>
              <td>{{ $student->email}}</td>
              <td>{{ $student->password}}</td>
              <td>{{ $student->repeat_password }}</td>
              <td>
                <div class="text-center">
                <a href="{{ route('edit', ['id' => $student->id]) }}" class="btn btn-dark">Edit</a>
                <a href="{{ route('student-delete', ['id' => $student->id]) }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

