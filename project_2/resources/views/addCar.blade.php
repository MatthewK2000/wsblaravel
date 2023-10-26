<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="AddCar" method="POST">
        @crsf
        <input type="text" name="brand" > brand
        <input type="text" name="model" >model
        <input type="number" name="capacity" > pojemnosc
        <input type="submit" value="Dodaj samochod" >

    </form>
</body>
</html>