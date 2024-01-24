<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status bestelling</title>
    @vite('resources/css/status.css')
    <script src="https://kit.fontawesome.com/80bfb3b6e2.js" crossorigin="anonymous"></script>
</head>
<body>
    @if($order)
    
    <h1>Pizza Tracking</h1>
    <div id="statusGrid">
        <div id="columnBetaald">
            <h1>Betaald</h1>
            <i class="fa-solid fa-money-check-dollar"></i>
        </div>
        <div id="columnBereiden">
            <h1>Bereiden</h1>
            <i class="fa-solid fa-pizza-slice"></i>
        </div>
        <div id="columnBesteld">
            <h1>In de oven</h1>
            <i class="fa-solid fa-fire"></i>
        </div>
        <div id="columnBesteld">
            <h1>Onderweg</h1>
            <i class="fa-solid fa-truck-front"></i>
        </div>
    </div>

    @else
    <p>U heeft niks besteld! Ga naar <a href="/bestellen">bestellen</a> om een pizza toe te voegen.</p>
@endif
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function () {
                document.getElementById("columnBetaald").classList.add("green-border");
            }, 5000);

            setTimeout(function () {
                document.getElementById("columnBereiden").classList.add("green-border");
            }, 25000);
        });
    </script>
</body>
</html>