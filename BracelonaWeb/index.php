<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Barca Website</title>
<link rel="stylesheet" href="style.css" id="theme-style">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="manifest" href="/manifest.json">

</head>
<body>




        <div class="promo">
            Win 2 tickets for the next game ⚽ <a href="#" class="promo-link">SIGN UP AND PARTICIPATE</a>
        </div>
        <div class="user-options">
            <a href="#">Login</a> | 
            <a href="#">Register</a> 
            <select name="languages" id="language-select">
    <option value="English">English</option>
    <option value="Spanish">Spanish</option>
</select>

            <button id="resetCookies">resetCookie </button>

        </div>
    </div>
<nav>
    <div class="nav-left">
        <a href="index.php"><img src="images/BarcaLogo.png" alt="Barca Logo" class="logo"></a>
        
        <div class="dropdown">
            <button class="dropbtn">Club</button>
            <div class="dropdown-content">
                <a href="#">History</a>
                <a href="#">Stadium</a>
                <a href="#">Board</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Barca Teams</button>
            <div class="dropdown-content">
                <a href="players/index.html">First Team </a>
                <a href="#">Women's Team</a>
                
            </div>
        </div>
    </div>

    <div class="nav-right">
        <a href="fixtures.html">Fixtures</a>
        <a href="Shop/sh_cart.php">Shop</a>
        <a href="quizz/quizz.html">Quizz</a>
    </div>
</nav>

  
<div class="articles">
    <div class="article" onclick="expandArticle(this)" data-background="images/img (1).jpg">
        <img src="images/img (1).jpg" alt="Article 1 Image">
        <div class="content">
            <h2>Lionel Messi - The Maestro of Modern Football</h2>
            <p>Lionel Messi, often hailed as the greatest footballer of all time, continues to dazzle fans worldwide with his unparalleled skill and relentless passion for the game. Born in Rosario, Argentina, Messi's journey to stardom began at a young age when he joined the famed La Masia academy at FC Barcelona. From there, he rose through the ranks to become the linchpin of Barcelona's legendary team, mesmerizing audiences with his extraordinary dribbling ability, precise passing, and clinical finishing.

                Messi's list of accolades is as impressive as it is extensive, boasting numerous Ballon d'Or awards and countless records shattered. His partnership with Barcelona saw the club dominate European football for over a decade, winning numerous La Liga titles and lifting the UEFA Champions League trophy multiple times. Messi's move to Paris Saint-Germain in 2021 only solidified his status as a global icon, showcasing his adaptability and enduring brilliance on the pitch.
                
                Beyond his individual achievements, Messi's humility and dedication to the sport have endeared him to fans worldwide, inspiring generations of aspiring footballers to chase their dreams relentlessly. Whether wearing the colors of Barcelona, Paris Saint-Germain, or the Argentine national team, Messi's mere presence on the field elevates the game to an art form, cementing his legacy as one of football's true immortals..</p>
            <button class="close-btn" onclick="closeArticle(event, this)">Close</button>
        </div>
    </div>

    <div class="article" onclick="expandArticle(this)" data-background="images/img (2).jpg">
        <img src="images/img (2).jpg" alt="Article 1 Image">
        <div class="content">
            <h2> Xavi Hernandez - The Mastermind of Midfield Mastery</h2>
            <p>Xavi Hernandez, the epitome of midfield excellence, is renowned for his unparalleled vision, precise passing, and unrivaled footballing intelligence. Born in Terrassa, Spain, Xavi's footballing journey began at FC Barcelona's famed La Masia academy, where he honed his skills and developed a deep understanding of the beautiful game.

                As a pivotal figure in Barcelona's golden era under Pep Guardiola, Xavi played a pivotal role in revolutionizing the concept of possession-based football, often dictating the tempo of matches with his exceptional control and distribution. His partnership with midfield maestro Andres Iniesta formed the backbone of Barcelona's dominance, guiding the team to numerous domestic and international triumphs, including multiple UEFA Champions League titles.
                
                Xavi's influence transcended club football, as he played a crucial role in Spain's unprecedented success on the international stage, orchestrating the midfield en route to victory in the 2010 FIFA World Cup and two consecutive UEFA European Championships.
                
                Following a distinguished playing career, Xavi transitioned seamlessly into management, seeking to impart his vast knowledge and philosophy onto the next generation of players. As he continues to make waves in the managerial realm, Xavi's legacy as one of football's greatest minds remains firmly intact, serving as an inspiration to aspiring footballers and coaches alike</p>
            <button class="close-btn" onclick="closeArticle(event, this)">Close</button>
        </div>
    </div>
    <div class="article" onclick="expandArticle(this)" data-background="images/img (3).jpg">
        <img src="images/img (3).jpg" alt="Article 1 Image">
        <div class="content">
            <h2> The Enthralling Spectacle of the UEFA Champions League</h2>
            <p>The UEFA Champions League, Europe's premier club football competition, stands as a beacon of excellence and excitement in the world of sports. Since its inception in 1955, the tournament has captured the imagination of football fans worldwide, showcasing the best teams and players on the continent in a thrilling showcase of skill and passion.

                The allure of the Champions League lies in its fiercely contested matches, where the stakes are high, and the drama unfolds with every kick of the ball. From the group stages to the knockout rounds, the competition never fails to deliver unforgettable moments, from stunning upsets to last-minute heroics.
                
                The prestige of lifting the iconic Champions League trophy serves as the ultimate goal for every club, driving players to push the boundaries of their abilities in pursuit of glory. Whether it's the historic dominance of Real Madrid, the breathtaking attacking football of FC Barcelona, or the underdog triumphs of teams like Leicester City and Porto, the Champions League offers a stage for dreams to be realized and legends to be born.
                
                As the pinnacle of European club football, the UEFA Champions League continues to captivate audiences around the globe, cementing its status as one of the most prestigious and revered competitions in the world of sports.</p>
            <button class="close-btn" onclick="closeArticle(event, this)">Close</button>
        </div>
    </div>
</div>
<div id="popup2" class="popup" style="display:none;">
    <img src="images/popup2.png" alt="#">
    <p>This is Pop-up!</p>
    <button onclick="closePopup('popup2')">Close</button>
  </div>
<div id="popup1" class="popup" style="display:none;">
    <img src="images/popup.png" alt="#">
    <p>This is Pop-up !</p>
    <button onclick="closePopup('popup1')">X</button>
  </div>
<div id="cookieConsentBanner" class="cookie-consent-banner">
    <p>This website uses cookies to ensure you get the best experience on our website. <a href="#">Learn More</a></p>
    <button id="acceptCookies">Accept</button>
    <button id="declineCookies">Decline</button>
    <button id="settingsCookies">Settings</button>
</div>

<div id="cookieSettingsModal" class="cookie-settings-modal">
    <div class="cookie-settings-content">
        <p>Choose which cookies you want to accept:</p>
        <div>
            <input type="checkbox" id="essentialCookies" name="cookiePreference" value="essential" checked disabled>
            <label for="essentialCookies">Essential Cookies</label>
        </div>
        <div>
            <input type="checkbox" id="analyticsCookies" name="cookiePreference" value="analytics">
            <label for="analyticsCookies">Analytics Cookies</label>
        </div>
        <button id="saveCookieSettings">Save Settings</button>
    </div>
</div>
<div id="next-game-highlight" class="scrolling-bar"></div>

<script src="script.js"></script>
</body>
<?php require 'social-media-links.php' ?>
</html>

 
<script>
 type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "Education.com",
  "url": "https://www.BarcelonaWeb.com",
  "logo": "https://www.BarcelonaWeb.com/logo.png"
}

    </script>