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






        <form id="quickForm" class="col-6" action="{{route('user.store')}}" method="post">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="test">Test Text : </label>
                    <input type="text" name="tests" class="form-control" id="test" placeholder="Full Name">
                </div>

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

        $.validator.addMethod('testvalided',function (value,element,args) {

            return /^[a-zA-Z0-9]/.test(value);

        },'OOKKK');


        $('#quickForm').validate({
          rules: {
              tests:{
                  required:true,
                  testvalided:true

              },

                name: {
                    required: true,
                   minlength: 3
                },
                email: {
                    required: true,
                    email: true
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

                tests:{
                    required:"Is Required",
                    testvalided:"[a-z] Only."

                },

                name: {
                    required: "Please enter a Name",
                    minlength: "Please Input Minimum 3 Characters."
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

        $('#quickForm').validate({
            submitHandler: function (form) {

                form.submit();
            }
        });
    });
</script>

</body>
</html>
