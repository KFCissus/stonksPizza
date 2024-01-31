<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status bestelling</title>
    @vite('resources/css/track-and-trace.css')
</head>
<body>

    <h1 id="trackandtrace">Track and trace</h1>
    <div id="statusGrid">
        <div id="columnBetaald">
            <h1>Bij StonksPizza</h1>

        </div>
        <div id="columnBereiden">
            <h1>In uw wijk</h1>

        </div>
        <div id="columnBesteld">
            <h1>In uw straat</h1>

        </div>
        <div id="columnBesteld">
            <h1>Afgeleverd</h1>

        </div>
    </div>

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
