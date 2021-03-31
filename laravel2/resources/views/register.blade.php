<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
<center>
<form action="{{URL::to('/store') }}" method="POST">
    <input type="hidden" name="_token" value ="{{ csrf_token() }}">
    <input type="text" name="email" placeholder="email">
    <br><br><body>
    <input type="text" name="first_name" placeholder="Firstname">
    <br><br>
    <input type="text" name="last_name" placeholder="lastname">
    <br><br>
    <input type="text" name="street" placeholder="street">
    <br><br>
    <input type="text" name="zip" placeholder="Zip">
    <br><br>
    <input type="text" name="city" placeholder="city">
    <br><br>
    <input type="text" name="number" placeholder="number">
    <br><br>
    <input type="password" name="password" placeholder="password">
    <br><br>
    <button type="submit" name="button">Register </button>
    </form>
    <center> 

</body>
</html>