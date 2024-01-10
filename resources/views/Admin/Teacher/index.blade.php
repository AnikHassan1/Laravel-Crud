<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="div mt-5">
                <a href="{{route('Teachers.create')}}" class="btn btn-primary float-end">Add New Teacher</a>
            </div>
        </div>

        <table class="table mt-5">
            <thead>
                <tr class="table-primary">
                    <th scope="col">ID</th>
                    <th scope="col">name</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Class</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $td as $key=>$data)
                <tr class="table-danger">
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->Subject}}</td>
                   <td>{{$data->Class_id}}</td>
                    <td>
                    <a href="{{route('Teachers.show',$data->id)}}" class="btn btn-primary">Show</a>
                        <a href="{{route('Teachers.edit',$data->id)}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('Teachers.destroy',$data->id)}}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
