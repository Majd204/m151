<html>
<head>
    <title>Alle Produkte</title>
</head>

<body>
    {{dd($products)}}
</body>

<table>
    <tr>
        <th>Name</th>
        <th>Preis</th>
        <th>Details</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td><a href="/product/{{ $product->id }}">Link</a></td>
        </tr>
    @endforeach
</table>
</html>