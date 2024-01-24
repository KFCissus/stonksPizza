<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Winkelwagen</title>
    @vite('resources/css/winkelwagen.css')
    <script src="https://kit.fontawesome.com/80bfb3b6e2.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Winkelwagen bekijken</h1>

    @if($order)
    <table>
        <tr >
            <th>Quantity </th>
            <th>Name     </th>
            <th>Size</th>
            <th>total price</th>
        </tr>
        @foreach($order->orderline as $orderline)
<<<<<<< HEAD
            <tr>
                <th> {{ $orderline->quantity }} </th>
                <th> {{ $orderline->pizza->Name }}</th>
                <th> {{ $orderline->pizzasize->size }} </th>
                <th> {{ $orderline->quantity }} </th>
                <th>
                    <form method="post" action="/deleteorderline">
                        <input type="submit" value="?">
                        <input type="submit" value="verwijder bestelling regel">
                    </form>

                </th>


            </tr>




=======
        <li>
            Pizza: {{ $orderline->pizza->Name }} <br>
           Hoeveelheid: {{ $orderline->quantity }}  
        </li>
        <br>
>>>>>>> 68e9a086ec72d0e36d20e257055cba5e569f88fd
    @endforeach
    </table>
@else
    <p>Your cart is empty.</p>
@endif
</body>
</html>
