<html>

<body>
<table>
    <tr>
        <th>Name</th>
        <th>Preis</th>
        <th>Detailss</th>
    </tr>
    @foreach ($product as $producte)
        <tr>
            <td>{{ $producte->name }}</td>
            <td>{{ $producte->price }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>