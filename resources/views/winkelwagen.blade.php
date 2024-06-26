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
{{--test--}}


@if($order)
    <table>
        <tr >
            <th>Hoeveelheid </th>
            <th>Naam     </th>
            <th>Grootte</th>
            <th>Totaal regel prijs</th>
        </tr>
        @foreach($order->orderline as $orderline)
            <tr>
                <th> {{ $orderline->quantity }} </th>
                <th> {{ $orderline->pizza->Name }}</th>
                <th> {{ $orderline->pizzasize->size }} </th>
                <th> €{{ $orderline->lineprice() }} </th>
                <th>
                    <form method="post" action="/deleteorderline">
                        @csrf
                        <input type="hidden" name="id" value="{{$orderline->id}}">
                        <input type="submit" value="Verwijder item">
                    </form>

                </th>


            </tr>



    @endforeach
    </table>
    <h1>Totaal prijs: €{{$order->price()}}</h1>
    <a href="{{ route('order.status') }}">Status bekijken</a>
    <a href="/bestellen">Terug naar bestellen</a>

@else
    <p>Your cart is empty.</p>
@endif
</body>
</html>
