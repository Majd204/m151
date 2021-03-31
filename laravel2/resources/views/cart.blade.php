
    <table>
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
        @if(session('cart'))
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
        @endif 
        </body>
        <tr>
            <td>
            <div>
            <h4>Total {{ $total }}</h4>
            </div>
            </td>

            <td><a href="{{ url('/products') }}"> Continue Shopping</a></td> 
            <form action="{{URL::to('/ordering') }}" method="Get">
               <td><a action="{{URL::to('/ordering') }}"  href="">order</a></td>   
            </form>      
        </tr>
    </table>
