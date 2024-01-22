<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!--
    TODO:
        Index.blade.php : this  view should show ALL Added data . In this view, add a delete button  for each data rendered, and if the delete data is click, it will delete the specific data.
    -->
</head>
<body>
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
                                    <td>1</td>
                                    <td>Amungus</td>
                                    <td>343</td>
                                    <td>#69 Urmom St.</td>
                                    <td>
                                        <a href="{{url('edit')}}" class="btn btn-primary btn-sm" title="Edit data">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm" title="Delete data">Delete</a>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
