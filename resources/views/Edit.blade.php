@extends('layout')
@section('content')
<div class="card">
    <div class="card-header" style="margin:20px"><h1>Edit Student</h1></div>
    <div class="card-body">

        <!--
        Update student form
        -->
        <form action="{{url('students/'.$student->id)}}" method="POST">
            @csrf
            @method('PUT')
            <h2>Student:</h2>
            <label>Name</label><br>
            <input type="text" name="name" value="{{ $student->name }}" class="form-control"><br>
            <label>Age</label><br>
            <input type="text" name="age" value="{{ $student->age }}" class="form-control"><br>
            <label>Address</label><br>
            <input type="text" name="address" value="{{ $student->address }}" class="form-control"><br>
            <hr>
            <h2>Academic:</h2>
            <label>Course</label><br>
            <input type="text" name="course" value="{{ $student->academic->course }}" class="form-control"><br>
            <label>Year</label>
            <input type="text" name="year" value="{{ $student->academic->year }}" class="form-control"><br>
            <hr>
            <h2>Country:</h2>
            <label>Continent</label><br>
            <input type="text" name="continent" value="{{ $student->country->continent }}" class="form-control"><br>
            <label>Country Name</label><br>
            <input type="text" name="country_name" value="{{ $student->country->country_name }}" class="form-control"><br>
            <label>Capital</label><br>
            <input type="text" name="capital" value="{{ $student->country->capital }}" class="form-control"><br>

            <input type="submit" value="Update" class="btn btn-success">
            <a href="{{url('/')}}" class="btn btn-primary btn-sm" title="Return to table">Return</a>
        </form>

    </div>
</div>
@stop
