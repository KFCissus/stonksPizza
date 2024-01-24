<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bestellen - Pizza</title>
    @vite('resources/css/bestellen.css')
    <script src="https://kit.fontawesome.com/80bfb3b6e2.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li id="active"><a href="/"> <i class="fa-solid fa-house"></i> Home pagina </a></li>
                <li id="active"><a href="/winkelwagen"> <i class="fa-solid fa-cart-shopping"></i> Winkelwagen bekijken</a></li>
                <li><a href="/order-status"> <i class="fa-solid fa-utensils"></i> Order status</a></li>
            </ul>
        </nav>
    </header>
 <div id="productContainer">
    <div id="pepperoniPizza">
        <img src="https://static.vecteezy.com/system/resources/previews/010/793/986/original/pepperoni-pizza-isolated-with-clipping-path-png.png" rel="pepperoni">
        <p>Deze pepperoni pizza is super duper duper lekker, dus koop deze nu en het wordt snel bezorgd.</p>
        <form method="post" action="/order">
            @csrf
            <select name="size" >
                <option value="small">Klein</option>
                <option  value="medium">Middel</option>
                <option  value="large">Groot</option>
            </select>
           <br> <br>
           <input type="number" value="1" min="1" max="10" name="quantity">
           <br> <br>
            <input type="hidden" name="id" value="1">
    <input type="submit" value="pizza bestellen">

    </form>
    </div>
    <div id="hawaiPizza">
        <img src="https://images.newyorkpizza.nl/Products/Original/Hawaii-8059.png" rel="pepperoni">
        <p>Deze hawai pizza is super duper duper lekker, dus koop deze nu en het wordt snel bezorgd.</p>
        <form method="post" action="/order"         >
            @csrf
            <select name="size" >
                <option  value="small">Klein</option>
                <option  value="medium">Middel</option>
                <option  value="large">Groot</option>
            </select>
           <br> <br>
           <input type="number" value="1" min="1" max="10" name="quantity">
           <br> <br>
            <input type="hidden" name="id" value="2">
    <input type="submit" value="pizza bestellen">

    </form>
    </div>
    <div id="olijfPizza">
        <img src="https://www.freeiconspng.com/thumbs/pizza-png/pizza-png-15.png" rel="pepperoni">
        <p>Deze pepperoni pizza is super duper duper lekker, dus koop deze nu en het wordt snel bezorgd.</p>
        <form method="post" action="/order"         >
            @csrf
            <select name="size" >
                <option  value="small">Klein</option>
                <option  value="medium">Middel</option>
                <option value="large">Groot</option>
            </select>
           <br> <br>
           <input type="number" value="1" min="1" max="10" name="quantity">
           <br> <br>
            <input type="hidden" name="id" value="3">
    <input type="submit" value="pizza bestellen">

    </form>
    </div>
    <div id="americanoPizza">
        <img src="https://pabilimanila.com/cdn/shop/files/Bacon-Glazed-1-_1.png?v=1698749406" rel="pepperoni">
        <p>Deze pepperoni pizza is super duper duper lekker, dus koop deze nu en het wordt snel bezorgd.</p>
        <form method="post" action="/order"         >
            @csrf
            <select name="size" >
                <option  value="small">Klein</option>
                <option  value="medium">Middel</option>
                <option  value="large">Groot</option>
            </select>
           <br> <br>
           <input type="number" value="1" min="1" max="10" name="quantity">
           <br> <br>
            <input type="hidden" name="id" value="4">
    <input type="submit" value="pizza bestellen">

    </form>
    </div>
    <div id="blauwekaasPizza">
        <img src="https://images.newyorkpizza.nl/Products/Original/4_cheese-8058.png" rel="pepperoni">
        <p>Deze pepperoni pizza is super duper duper lekker, dus koop deze nu en het wordt snel bezorgd.</p>
                <form method="post" action="/order"         >
                    @csrf
                    <select name="size" >
                        <option  value="small">Klein</option>
                        <option  value="medium">Middel</option>
                        <option  value="large">Groot</option>
                    </select>
                   <br> <br>
                   <input type="number" value="1" min="1" max="10" name="quantity">
                   <br> <br>
                    <input type="hidden" name="id" value="5">
            <input type="submit" value="pizza bestellen">

            </form>
    </div>
 </div>
</body>
</html>
