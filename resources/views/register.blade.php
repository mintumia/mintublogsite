<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Name</title>
    <link rel="stylesheet" href="{{url('/')}}/libraries/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/libraries/adminlte_v3.2/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{url('/')}}/libraries/adminlte_v3.2/dist/css/adminlte.min.css">
</head>
<body>

<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-center">

       {{-- id name gender email password url is_active last_login_date created_at updated_at

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
            <div class="form-check mb-2 was-validated">
                <p>Gender : </p>
                <span>

                <input type="radio" name="gender" id="gender" class="form-check-input" value="M" required>
                <label for="gender" class="form-check-label">Male</label>

                    <input type="radio" name="gender" id="gender" class="form-check-input" value="M" required>
                <label for="gender" class="form-check-label">Male</label>

                    <input type="radio" name="gender" id="gender" class="form-check-input" value="M" required>
                <label for="gender" class="form-check-label">Male</label>

                <div class="invalid-feedback">
                    Please Input Gender.
                </div>
                </span>
            </div>


            <div class="form-group mb-2 was-validated">
                <label for="email" class="form-label">Name : </label>
                <input type="email" name="email" id="email" class="form-control" required>
                <div class="invalid-feedback">
                    Please Input Email.
                </div>
            </div>

            <button class="btn btn-primary w-100" type="submit">Register</button>
        </form>--}}


{{--     *************************************************************************   --}}

        <form id="quickForm" class="col-6" action="{{route('user.store')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                        <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>







    </div>
</div>

<script src="{{url('/')}}/libraries/bootstrap.min.js"></script>
<!-- jQuery -->
<script src="{{url('/')}}/libraries/adminlte_v3.2/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/libraries/adminlte_v3.2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="{{url('/')}}/libraries/adminlte_v3.2/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{url('/')}}/libraries/adminlte_v3.2/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/')}}/libraries/adminlte_v3.2/dist/js/adminlte.min.js"></script>




<script>
    $(function () {
        $.validator.setDefaults({
            submitHandler: function () {
                alert( "Form successful submitted!" );
            }
        });
        $('#quickForm').validate({
            rules: {

                names: {
                    required: true,
                    names: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 5
                },
                terms: {
                    required: true
                },
            },
            messages: {
                names: {
                    required: "Please enter a Name",
                    names: "Please enter a valid Name"
                },
                email: {
                    required: "Please enter a email address",
                    email: "Please enter a valid email address"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>

</body>
</html>
