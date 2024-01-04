<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Edit</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" value="{{$student->name}}" id="Name" aria-describedby="emailHelp" name="name">

                    </div>
                    <div class="mb-3">
                        <label for="Class" class="form-label">Class</label>
                        <input type="text" class="form-control" value="{{$student->class}}" id="class" name="class">
                    </div>
                    <div class="mb-3">
                        <label for="Marks" class="form-label">Marks</label>
                        <input type="number" class="form-control" value="{{$student->marks}}" id="marks" name="marks">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

                @if(session()->has('status'))
                <div class="alert alert-success"> 
                {{session('status')}}
                </div>
                @endif

            </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>