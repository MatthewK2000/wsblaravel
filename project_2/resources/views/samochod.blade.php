<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    
    <table class="table">
        <thead>
        <tr>
            <th>Marka</th>
            <th>Model</th>
            <th>Pojemnosc</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $x)
        <tr>
            <td> {{$x-> brand}}</td>
            <td> {{$x-> model}}</td>
            <td> {{$x-> capacity}}</td>
        </tr>
     
        @endforeach
    </tbody>
       <tr>
            {{$data->links('pagination::bootstrap-5')}}

        </tr>
    </table>
    <a href="\addCar">dodaj auto</a>
</body>
</html>