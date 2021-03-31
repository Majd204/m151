<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">  
    <title>Alle Produkte</title>
</head>
<table>
<body>
    
        <th>Name</th>
        <th>Preis</th>
        <th>Details</th>
        <th><a href="{{ url('/cart') }}">Warenkorb</a></th>
        
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }} CHF</td>
            <td><a href="/product/{{ $product->id }}">Link</a></td>
            <td><a href="/addtocart/{{$product->id}}">addtocart</a></td>
        </tr>  
        
    @endforeach
</table>
</body>
</html>