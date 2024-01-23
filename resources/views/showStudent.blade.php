@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Student Profile</h1>
        </div>
        <div class="card-body">
            <h3>Student:</h3>
            <p>Name: {{$student->name}}</p>
            <p>Age: {{$student->age}}</p>
            <p>Address: {{$student->address}}</p>
            <hr>
            <h3>Academic:</h3>
            <p>Course: {{$student->academic->course}}</p>
            <p>Year: {{$student->academic->year}}</p>
            <hr>
            <h3>Country:</h3>
            <p>Continent: {{$student->country->continent}}</p>
            <p>Country: {{$student->country->country_name}}</p>
            <p>Capital: {{$student->country->capital}}</p>
            <hr>
            <a href="{{url('/')}}" class="btn btn-primary btn-sm" title="Return to table">Return</a>
        </div>
    </div>
@stop
