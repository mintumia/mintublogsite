<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="{{url('/')}}/libraries/bootstrap.min.css">
</head>
<body>
<h1>Welcome to User Home Page.</h1>

@foreach($forms as $key => $user )
    <pre>
{{$user}}

@endforeach




<script src="{{url('/')}}/libraries/bootstrap.min.js"></script>
</body>
</html>
