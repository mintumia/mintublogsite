<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Register Page</title>
    <link rel="stylesheet" href="{{url('/')}}/libraries/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-center">


        <form action="{{route('user.store')}}" method="post"
              class="col-sm-12 col-md-6 col-lg-4 needs-validation bg-white p-3 mt-5 rounded-3">
            @csrf
            <h2 class="text-dark text-center">User Register Form</h2>
            <div class="form-group mb-2 was-validated">
                <label for="name" class="form-label">Name : </label>
                <input type="text" name="name" id="name" class="form-control" required>
                <div class="invalid-feedback">
                    Please Input Name.
                </div>
            </div>
            <div class="form-group mb-2 was-validated">
                <label for="email" class="form-label">Name : </label>
                <input type="email" name="email" id="email" class="form-control" required>
                <div class="invalid-feedback">
                    Please Input Email.
                </div>
            </div>

            <button class="btn btn-primary w-100" type="submit">Register</button>
        </form>


    </div>
</div>

<script src="{{url('/')}}/libraries/bootstrap.min.js"></script>
</body>
</html>
