
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>{{ $product->name }}</p>
<p>{{ $product->price }}</p>
<p>{{ $product->details }}</p>
<p>{{ $product->text }}</p>
<img style="max-width: 100px;" src="{{ $product->image }}" alt="">
</body>
</html>

