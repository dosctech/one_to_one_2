<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Index</title>
</head>

<body>
    <p class="h1 text-center my-5">Teacher</p>
    <div class="mx-5">
        <a href="{{route('create')}}" class="btn btn-primary float-right m-1">
            Add Data
        </a>
    <table class="table table-striped table-dark ">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Academic ID</th>
            <th scope="col">Country ID</th>
            <th scope="col" class="col-1">Edit</th>
            <th scope="col" class="col-1">Delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
          <tr>
            <td class="align-middle">{{$student->id}}</td>
            <td class="align-middle">{{$student->name}}</td>
            <td class="align-middle">{{$student->age}}</td>  
            <td class="align-middle">{{$student->address}}</td>
            <td class="align-middle">{{$student->id}}</td>
            <td class="align-middle">{{$student->id}}</td>
            <td>
                <a href="{{route('edit', ['student' => $student])}}">
                    <button class="btn btn-primary">
                    <i class="bi bi-pencil-fill"></i>
                    </button>
                </a>
            </td>
            <td>
                
                <form method="POST" action="{{route('delete', ['student' => $student])}}"> 
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">
                    <i class="bi bi-trash-fill"></i>
                    </button>
                </form>
                
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div>
        @if (session()->has('success student'))
        <div class="text-center">
            <div class="alert alert-success d-inline-block">
                {{ session('success student') }}
            </div>
        </div>
        @endif
    </div>
    </div>

    <hr class="mt-5 hr hr-blurry"/>
    
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <p class="h1 text-center my-5">Country</p>
            <div class="mx-5">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Country ID</th>
                            <th scope="col">Continent</th>
                            <th scope="col">Country Name</th>
                            <th scope="col">Capital</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($countries as $country)
                        <tr>
                            <td class="align-middle">{{$country->id}}</td>
                            <td class="align-middle">{{$country->continent}}</td>
                            <td class="align-middle">{{$country->country_name}}</td>
                            <td class="align-middle">{{$country->capital}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <p class="h1 text-center my-5">Academic</p>
            <div class="mx-5">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Academic ID</th>
                            <th scope="col">Course</th>
                            <th scope="col">Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($academics as $academic)
                        <tr>
                            <td class="align-middle">{{$academic->id}}</td>
                            <td class="align-middle">{{$academic->course}}</td>
                            <td class="align-middle">{{$academic->year}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>