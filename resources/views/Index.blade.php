@extends('layout')
@section('content')
<!--
Index.blade.php : this  view should show ALL Added data .
In this view, add a delete button  for each data rendered, and if the delete data is click, it will delete the specific data.
-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>STUDENT DATA</h1>
                    </div>
                    <div class="card-body">
                        <a href="{{url('create')}}" class="btn btn-success btn-sm" title="Create data">Create</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->age }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>
                                            <a href="{{url('students/'.$item->id.'/display')}}" class="btn btn-primary btn-sm" title="View Student data">View</a>
                                            <a href="{{url('students/'.$item->id.'/edit')}}" class="btn btn-secondary btn-sm" title="Edit Student data">Edit</a>

                                            <a href="#" class="btn btn-danger btn-sm" title="Delete Student data">Delete</a>

                                        </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
