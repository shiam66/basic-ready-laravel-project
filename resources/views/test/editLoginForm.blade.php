<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Test Registration Form</title>
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
        <div class="col-md-4 offset-md-4 custome_design">
            <h3 class="text-center">Edit Registration Form</h3>
            <a href="{{ url('/index') }}" class="btn btn-primary btn-sm mb-1">User List</a>
            <form method="POST" action="/editRegFormStore" name="editForm">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $regDataById->name }}">
                    <span class="text-danger">{{  $errors->has('name') ? $errors->first('name'): '' }}</span>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="emailAddress" value="{{ $regDataById->emailAddress }}">
                    <span class="text-danger">{{  $errors->has('emailAddress') ? $errors->first('emailAddress'): '' }}</span>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="{{ $regDataById->password }}">
                    <span class="text-danger">{{  $errors->has('password') ? $errors->first('password'): '' }}</span>
                </div>

                <input type="hidden" value="{{ $regDataById->id }}" class="form-control" name="regDataById">

                <select class="form-select mb-3" name="userType">
                    <option selected>Open this one</option>
                    <option value="1">Admin</option>
                    <option value="2">Post Creator</option>
                    <option value="3">Public User</option>
                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


<script>
    document.forms['editForm'].elements['userType'].value={{ $regDataById->userType }}
</script>

</body>
</html>
