<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .custome_design{
            margin: 25px auto;
            background-color: #eee;
            padding: 15px;
            border-radius: 5px;
            box-shadow: #c5f8ff;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12 custome_design">
            <h3>Registration List</h3>
            <a href="{{ url('/regForm') }}" class="btn btn-primary btn-sm mb-1">Add User</a>
            <table class="table table-success table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">User Type</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allUsers as $user)

                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->emailAddress }}</td>
                        <td>
                            @if($user->userType == 1)
                                Admin
                            @elseif($user->userType == 2)
                                Post Creator
                            @else
                                Public User
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('/editRegForm/'.$user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ url('/refUserDelete/'.$user->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
