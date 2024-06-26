<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Een all you can eat restaurant waar je Franse gerechten met een Aziatische twist kan proeven!">
    <meta name="keywords" content="Sushi, Restaurant, Eindhoven, RestaurantEhv, Ehv, De Pink">
    <meta name="author" content="Restaurant De Pink">
    <title>Stonks Pizza</title>
    <link rel="icon" type="image/png" href="img/thuisbezorgd2.png" />
  <meta property='og:image' content='/img/reserveren.jpg'/>
    <!-- Importeren van de Google font -->
    <link href='https://fonts.googleapis.com/css?family=Luckiest Guy' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Jura' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/80bfb3b6e2.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
  @vite('resources/css/home.css')
</head>

<body>
    <noscript id="noscript">Your browser does not support JavaScript! Please update your site settings!</noscript>
    <div class="hero-image">
        <nav>
            <ul>
                <li id="active"><a href="/home"> <i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href="#menukaart"> <i class="fa-solid fa-utensils"></i> Menukaart</a></li>
                <li><a href="#"> <i class="fa-solid fa-book"></i> Boek een tafel</a>
                </li>
              <li class="hamburger-menu"><a href="javascript:void(0);" onclick="openNav()"><i class="fa-solid fa-bars"></i> Bekijk meer</a></li>
            </ul>
        </nav>
      <div id="myNav" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="overlay-content">
            <img src="https://i.pinimg.com/originals/04/88/32/04883229aaa10693e1966b39142ad4a9.png" alt="ladyimage" height="500px">
            <a href="/bestellen">Eten bestellen</a>
            <a href="/order-status">Status bestelling</a>
            <a href="/dashboard">Account beheren</a>
            <a href="/koerier">Koerier</a>
            <a href="/track-and-trace">Track and trace</a>
          </div>
      </div>
        <article>
            <div class="hero-text">
                <h1>Stonks Pizza</h1>
                <p>Een warme pizza uit onze steen-oven!</p> <br>
                <button id="hero-button1" type="button" onclick="window.location.href='/bestellen';">
                    <i class="fa-solid fa-shop"></i> Bestellen</button>
              <p style="width: 500px">Of bel naar <a href="tel:+31615321479">+316000000</a></p>
            </div>
    </div>
    <div id="whiteStripeUnderHero">
        <br>
    </div>

    <div class="text-block">
        <h2>We hopen u in ontvangst te nemen</h2>
        <p>Geniet onbeperkt en zonder tijdslimiet van onze Europese en Aziatische specialiteiten. In een gemoedelijke
            sfeer
            gaat u samen met uw gezelschap op culinaire ontdekkingsreis.

            Onze gerechten zijn geïnspireerd op de Europese en Aziatische keuken. De keukenbrigade heeft de authentieke
            Aziatische kookkunsten in hun bloed zitten. Denk hierbij aan traditionele Kantonese smaken, maar ook sushi
            en
            Szechuan gerechten. Samen met de Europese invloeden kunt u rekenen op een echte Asian-Fusion ervaring

            Wij heten u van harte welkom om eens te komen proeven en ervaren.</p>
    </div> <br>
    <div class="video-block">
<video src="../restaurant_mellemrum_-_kitchen (1080p).mp4" controls autoplay loop muted></video>
    </div>

    <div id="menukaart" class="text-block">
        <h2>Bekijk onze menukaart!</h2>
        <p>Ons restaurant heeft een uitgebreid en gevarieerd menu met heerlijke gerechten om uit te kiezen. Door ons
            menu te
            downloaden, heeft u altijd een duidelijk overzicht van alle beschikbare opties, zodat u gemakkelijk kunt
            beslissen
            wat u wilt bestellen. Bovendien kunt u ons menu ook thuis of onderweg bekijken, zodat u altijd op de hoogte
            bent
            van wat we te bieden hebben.

            Daarnaast kunt u met het gedownloade menu ook gemakkelijk de allergie-informatie en prijzen van de gerechten
            raadplegen, zodat u goed geïnformeerd kunt zijn voordat u naar ons restaurant komt.</p> <br>
        <a href="/bestellen" id="menu-button" class="notification">
            <span>Bekijken</span>
            <span class="badge">Vernieuwd!</span>
        </a>
    </div>
    <br>
    <div class="foto-block">
        <a target="_blank" href="img/banken.jpg" class="invisbleA">
            <img src="https://dejavu-veldhoven.nl/wp-content/uploads/2022/04/MES05997-HDR.jpg" alt="banken" width="380">
        </a>
        <a target="_blank" href="img/drank.jpg" class="invisbleA">
            <img src="https://dejavu-veldhoven.nl/wp-content/uploads/2022/05/MES06160.jpg" alt="drank" width="380">
        </a>
        <a target="_blank" href="img/tafels.jpg" class="invisbleA">
            <img src="https://dejavu-veldhoven.nl/wp-content/uploads/2022/04/MES05937-HDR-1.jpg" alt="tafels" width="380">
        </a>
    </div>
    <div class="text-block">
        <h2>Geniet van onze heerlijke gerechten</h2>
        <p>Het Franse en Aziatische keuken zijn beide bekend om hun gepassioneerde aanpak van voeding en hun focus op
            kwaliteit van ingrediënten. Een gerecht met een Franse en Aziatische twist kan een leuke en interessante
            manier
            zijn om deze twee culturen te combineren en nieuwe smaken te creëren.

            Een voorbeeld van een heerlijk gerecht met een Franse en Aziatische twist is een geroosterde kip met een
            saus
            gemaakt van citroengras, kokosmelk en limoenblaadjes. De kip wordt geroosterd totdat het krokant is aan de
            buitenkant en zacht en smaakvol aan de binnenkant. De saus geeft het gerecht een frisse en pittige smaak die
            perfect bij de geroosterde kip past.

            Een ander voorbeeld van een lekker gerecht met een Franse en Aziatische twist is gestoomde vis met een saus
            gemaakt van gember, knoflook en koriander. De vis wordt gestoomd totdat het zacht en sappig is en de saus
            geeft
            het gerecht een heerlijke, subtiele smaak. Dit gerecht is niet alleen lekker, maar ook gezond en een goede
            bron
            van eiwitten en gezonde vetten.</p>
    </div>
    <br>
  <br>
    <div id="reserveren-block" class="text-block">
        <h2>Reserveren kan gemakkelijk online!</h2>
        <p>Via onze website is reserveren 24/7 mogelijk. Klik <a href="https://wwc.resengo.com/">hier</a> om online te
            reserveren. Of
            bel ons gewoon even: <a href="tel:+31615321479">+31615321479</a>.
        </p>
        <br>
    </div>
    </article>
    <footer>
        <br>
        <div class="row">
            <div id="paginas" class="column">
                <h2>Pagina's</h2>
                <p><a class="links" href="/home">Home-pagina</a> <br>
                  <a class="links" href="#" target="_blank">Reserveren van een tafel</a> <br>
                <a class="links" href="/bestellen">Eten bestellen</a> <br>
                    <a class="links" href="/status-bestelling">Status bestelling</a> <br>
                    <a class="links" href="#">Contact</a><br>
                </p>
            </div>
            <div class="column">
                <h2 class="footerH2">Sociale media</h2>
                <p><a class="links" href="https://instagram.com"> <i class="fa-brands fa-instagram"></i> Instagram</a>
                </p> <br>
                <p><a class="links" href="https://facebook.com"> <i class="fa-brands fa-facebook"></i> FaceBook</a></p>
                <br>
                <p><a class="links" href="htps://twitter.com"> <i class="fa-brands fa-x-twitter"></i> Twitter</a></p> <br>
            </div>
    </footer>
    <script src="script.js"></script>

    <!-- Alert bericht -->
    <div class="callout">
        <div class="callout-header">Bekijk reviews</div>
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <div class="callout-container">
          <div id="call-column-one">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Trustpilot_logo.png?20180712105602" alt="feedbackcomp" height="50px">
          </div>
          <div id="call-column-two">
          <img src="https://govolt.nl/wp-content/themes/vwpfw-govolt/dist/images/google-reviews-min.svg" alt="googlereview">
          </div>
        </div>
    </div>

    <script>
        function openNav() {
    document.getElementById("myNav").style.width = "100%";
    document.querySelector(".hamburger-menu").style.display = "none";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0";
    document.querySelector(".hamburger-menu").style.display = "block";
}

    </script>
</body>

</html>
