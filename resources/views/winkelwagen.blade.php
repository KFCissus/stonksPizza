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
    <ul>
        @foreach($order->orderline as $orderline)
        <li>
           Quantity: {{ $orderline->quantity }}   {{ $orderline->pizza->Name }}
        </li>
    @endforeach
    </ul>
@else
    <p>Your cart is empty.</p>
@endif
</body>
</html>