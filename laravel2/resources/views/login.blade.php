<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<center>
    <form action="{{URL::to('/logs') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    E-MAil: <input type="text" name="mail"></br>
    PASSWORD: <input type="password" name="password">
    <input type="submit" name="login "value="Login">
    
    </form>
    </center>
</body>
</html>