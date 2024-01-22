@extends('layout')
@section('content')
<!--
Create.blade.php : this view should allow creation of data
-->
    <div class="card">
        <div class="card-header" style="margin:20px"><h1>Register Student</h1></div>
        <div class="card-body">

            <form action="{{url('api/students')}}" method="POST">
                {!! csrf_field() !!}
                <h2>Student:</h2>
                <label>Name</label><br>
                <input type="text" name="name" id="name" class="form-control"><br>
                <label>Age</label><br>
                <input type="text" name="age" id="age" class="form-control"><br>
                <label>Address</label><br>
                <input type="text" name="address" id="address" class="form-control"><br>
                <hr>
                <h2>Academic:</h2>
                <label>Course</label><br>
                <input type="text" name="course" id="course" class="form-control"><br>
                <label>Year</label>
                <input type="text" name="year" id="year" class="form-control"><br>
                <hr>
                <h2>Country:</h2>
                <label>Continent</label><br>
                <input type="text" name="continent" id="continent" class="form-control"><br>
                <label>Country Name</label><br>
                <input type="text" name="country_name" id="country_name" class="form-control"><br>
                <label>Capital</label><br>
                <input type="text" name="capital" id="capital" class="form-control"><br>

                <input type="submit" value="Save" class="btn btn-success">
            </form>
        </div>
    </div>
@stop
