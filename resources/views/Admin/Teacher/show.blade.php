<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Show Teachers Information</h1>


    <table class="table mt-5">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">ID</th>
                        <th scope="col">name</th>
                        <th scope="col">Subject</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($show as $key=>$showdata)
                    <tr class="table-danger">
                        <td>{{$showdata->id}}</td>
                        <td>{{$showdata->Subject}}</td>
                    </tr>
                    @endforeach
                </tbody>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
