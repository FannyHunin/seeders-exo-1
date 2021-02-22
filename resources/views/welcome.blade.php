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
        <h1 class="text-danger">Seeders exo1</h1>
        <section>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name :</th>
                    <th scope="col">Age :</th>
                    <th scope="col">Email :</th>
                    <th scope="col">Phone</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($students as $student)
                    <tr>
                      <th scope="row">{{$student->name}}</th>
                      <td>{{$student->age}}</td>
                      <td>{{$student->mail}}</td>
                      <td>{{$student->phone}}</td>
                      <td><a href="/student/show/{{$student->id}}" class="btn btn-success">Show</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </section>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>