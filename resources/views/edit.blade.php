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
        <h1 class="text-danger">Seeders exo1 - edit</h1>
        <section>
            <form action="/student/update/{{$edit->id}}" method="post">
                @csrf
                    <label for="student_name">Name : 
                        <input type="text" name="name" id="student_name" placeholder="Your name here">
                    </label>
                    <label for="student_age">Age : 
                        <input type="number" name="age" id="student_age" placeholder="Your age here">
                    </label>
                    <label for="student_mail">Mail : 
                        <input type="text" name="mail" id="student_mail" placeholder="Your mail here">
                    </label>
                    <label for="student_phone">Phone : 
                        <input type="text" name="phone" id="student_phone" placeholder="Your phone here">
                    </label>
                    <button type="submit" class="btn btn-info">Update</button>
            </form>
        </section>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>