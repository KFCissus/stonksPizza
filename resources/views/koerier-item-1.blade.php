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
  @vite('resources/css/koerier-item.css')
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
            <a href="/status-bestelling">Status bestelling</a>
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
    <div class="status-text" id="statusText"></div>
    <div class="koerier-item-page">
        <div class="content-wrapper">
            <div class="image-section">
                <img src="/images/scooter.jpg" alt="Image 1">
            </div>
            <div class="details-section">
                <div class="radiobuttons">
                    <form action="{{ route('submit.form') }}" method="post">
                        @csrf

                        <div class="radiobuttons">
                            <label>
                                <input type="radio" name="checkOption" value="inchecken" id="incheckenRadio">
                                Inchecken
                            </label>
                            <label>
                                <input type="radio" name="checkOption" value="uitchecken" id="uitcheckenRadio">
                                Uitchecken
                            </label>
                        </div>


                        <input type="hidden" name="uitchecken" value="1">


                        <label for="textarea">Schade vermelden:</label>
                        <textarea id="textarea" name="textarea" rows="8" cols="50" required></textarea>

                        <button type="submit">Versturen</button>
                    </form>
            </div>
        </div>
    </div>

    </article>

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

        function saveRadioButtonState() {
    const radioButtons = document.querySelectorAll('.radiobuttons input[type="radio"]');
    const selectedRadioButton = [...radioButtons].find(rb => rb.checked);

    if (selectedRadioButton) {
        // Set the value of 'checkOption' in the form based on the selected radio button
        document.querySelector('input[name="checkOption"]').value = selectedRadioButton.value;

        // Log the selected radio button value
        console.log('Selected RadioButton:', selectedRadioButton.value);

        // Save to localStorage
        localStorage.setItem('selectedRadioButton', selectedRadioButton.id);
    }
}

function loadRadioButtonState() {
    const selectedRadioButtonId = localStorage.getItem('selectedRadioButton');

    if (selectedRadioButtonId) {
        const selectedRadioButton = document.getElementById(selectedRadioButtonId);
        if (selectedRadioButton) {
            selectedRadioButton.checked = true;

            // Log the loaded radio button value
            console.log('Loaded RadioButton:', selectedRadioButton.value);
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    // Load radio button state on page load
    loadRadioButtonState();

    // Add event listener to radio buttons to save their state when changed
    const radioButtons = document.querySelectorAll('.radiobuttons input[type="radio"]');
    radioButtons.forEach((radioButton) => {
        radioButton.addEventListener('change', saveRadioButtonState);
    });
});

    </script>
</body>

</html>
