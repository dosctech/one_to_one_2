<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!--Create new student data-->
</head>
<body>
    <div class="card">
        <div class="card-header" style="margin:20px"><h1>Register Student</h1></div>
        <div class="card-body">

            <form action="{{url('api/students')}}" method="store"></form>
            {!! csrf_field() !!}
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label>Age</label><br>
            <input type="text" name="age" id="age" class="form-control"><br>
            <label>Address</label><br>
            <input type="text" name="address" id="address" class="form-control"><br>
            <hr>
            <label>Course</label><br>
            <input type="text" name="course" id="course" class="form-control"><br>
            <label>Year</label>
            <input type="text" name="year" id="year" class="form-control"><br>
            <hr>
            <label>Continent</label><br>
            <input type="text" name="continent" id="continent" class="form-control"><br>
            <label>Country Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label>Capital</label><br>
            <input type="text" name="capital" id="capital" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success">
        </div>
    </div>
</body>
</html>
