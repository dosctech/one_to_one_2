<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Index</title>
</head>

<body>
    <div class="mx-5">
        <a href="{{route('create')}}" class="btn btn-primary  m-1">
            Add Data
        </a>
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Continent</th>
                    <th scope="col">Country Name</th>
                    <th scope="col">Capital</th>
                    <th scope="col">Course</th>
                    <th scope="col">Year</th>
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
                    @foreach ($countries as $country)
                    @if ($student->id == $country->id)
                    <td class="align-middle">{{ $country->continent }}</td>
                    <td class="align-middle">{{ $country->country_name }}</td>
                    <td class="align-middle">{{ $country->capital }}</td>
                    @endif
                    @endforeach
                    @foreach ($academics as $academic)
                    @if ($student->id == $academic->id)
                    <td class="align-middle">{{ $academic->course }}</td>
                    <td class="align-middle">{{ $academic->year }}</td>
                    @endif
                    @endforeach
                    <td>
                        <a href="{{route('edit', ['student' => $student])}}">
                            <button class="btn btn-success">Edit</button>
                        </a>
                    </td>
                    <td>

                        <form method="POST" action="{{route('delete', ['student' => $student])}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
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


   

</body>

</html>