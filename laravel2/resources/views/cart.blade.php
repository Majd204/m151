
    <table id="cart">
        <head>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>FullPrice</th>

        </tr>
        </head>
        <body>
        <?php $total = 0 ?>
            @foreach(session('cart') as $id => $details)
                <?php $total += $details['price'] * $details['quantity'] ?>
                <tr>
                <td>
                <div>
                     <h4>{{ $details['name'] }}</h4>
                </div>
                 </td>
                <td>{{ $details['price'] }}CHF</td>
                 <td>{{ $details['quantity'] }} </td>
               <td>{{ $details['price'] * $details['quantity'] }}CHF</td>

                </tr>
            @endforeach
        </body>
        <tr>
            <td><strong>Total {{ $total }}</strong></td>

            <td><a href="{{ url('/products') }}"> Continue Shopping</a></td> 

               <td><a href="{{URL::to('/ordering') }}">order</a></td>         
        </tr>
    </table>
