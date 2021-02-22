<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-danger">Seeders exo1 - show</h1>
        <div class="section">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$student->name}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$student->age}}</h6>
                  <p class="card-text">{{$student->mail}}</p>
                  <p class="card-text">{{$student->phone}}</p>
                  <div class="d-flex justify-content-around">
                        <a href="/student/edit/{{$student->id}}" class="btn btn-info">Edit</a>
                        <a href="/student/delete/{{$student->id}}" class="btn btn-danger">Delete</a>
                  </div>
                </div>
              </div>
        </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>