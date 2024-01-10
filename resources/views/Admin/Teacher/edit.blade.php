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

            <div class="card mt-5" style="width: 38rem;">

                <div class="card-body">
                    <div class="div mt-1">
                        <a href="{{route('Teachers.index')}}" class="btn btn-primary float-end">Teacher List</a>
                    </div>

                </div>
                <hr>
                @if(session()->has('success'))
                <strong>{{session()->get('success')}}</strong>

                @endif
                <!-- <h3 class="text-center bg-primary text-white">Create Student</h3> -->
                <form action="{{route('Teachers.update',$td->id)}}" method="Post">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required value="{{$td->name}}">
                        @error('name')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Age
                        </label>
                        <input type="text" name="Age" class="form-control  @error('email') is-invalid @enderror" required value="{{$td->Age}}">
                        @error('Age')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label ">Subject</label>
                        <input type="text" name="Subject" class="form-control @error('Password') is-invalid @enderror" required value="{{$td->Subject}}">
                        @error('Subject')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Class_id</label>
                        <select name="Class_id"class="form-select" aria-label="Default select example @error('Phone') is-invalid @enderror" value="{{$td->Class_id}}">
                            @foreach($st as $data)
                            <option value="{{$data->id}}" @if($data->id ===$td->id)selected @endif>{{$data->name}}</option>
                            @endforeach
                        </select>
                        @error('Class_id')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mb-2 ">Submit</button>
                </form>
            </div>
        </div>

    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
