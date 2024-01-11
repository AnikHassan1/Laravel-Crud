<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="card mt-5 ms-5" style="width: 28rem; ">
        <div class="card-header d-flex justify-content-between">
            <h4>Teacher Information</h4>
            <a class="btn btn-danger  " href="{{route('Teachers.index')}}">All Teachers</a>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Name : {{$show->name}}</li>
            <li class="list-group-item">Age : {{$show->Age}}</li>
            <li class="list-group-item">Subject : {{$show->Subject}}</li>
            <li class="list-group-item">Class : {{$show->Class_id}}</li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
