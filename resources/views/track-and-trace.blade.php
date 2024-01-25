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
  @vite('resources/css/track-and-trace.css')
</head>

<body>
    <noscript id="noscript">Your browser does not support JavaScript! Please update your site settings!</noscript>
    <div class="hero-image">
        <nav>
            <ul>
                <li id="active"><a href="#"> <i class="fa-solid fa-house"></i> Huis</a></li>
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
            <a href="#">Reserveren</a>
              <a href="/status-bestelling">Status bestelling</a>
              <a href="/dashboard">Account beheren</a>
            <a href="#">Contact</a>
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


    <p class="track-and-trace-text">Track and Trace</p>
    <p id="courierInfo">
        Uw koerier voor vandaag is: <span id="courierName"></span>
    </p>

    <div class="map-container">
        <iframe src="https://maps.google.com/maps?width=100%%26amp;height=100%&hl=en&amp;q=Sterrenlaan%2010%20Eindhoven+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div>

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

function getRandomCourier() {
            const couriers = ["Noah Klaassen", "Christian Chilov", "Aiden Onyenwenu"];
            const randomIndex = Math.floor(Math.random() * couriers.length);
            return couriers[randomIndex];
        }

        // Set the courier name in the span element
        document.getElementById("courierName").innerText = getRandomCourier();
    </script>
</body>

</html>
