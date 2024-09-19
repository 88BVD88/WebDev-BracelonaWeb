document.addEventListener('DOMContentLoaded', function() {
    let currentIndex = 0; 
    const articleImages = document.querySelectorAll('.article').length; // Count the number of articles

    function updateBackground() {
        // Cycle through articles based on currentIndex
        const nextArticle = document.querySelectorAll('.article')[currentIndex];
        const imageUrl = nextArticle.getAttribute('data-background');
        document.body.style.backgroundImage = `url('${imageUrl}')`;

        
        currentIndex = (currentIndex + 1) % articleImages;
    }


    updateBackground(); 
    setInterval(updateBackground, 5000); 
});


function expandArticle(articleElement) {
    // Prevent the function from running if the article is already expanded
    if (articleElement.classList.contains('expanded')) return;

    // Collapse any currently expanded article
    document.querySelectorAll('.article.expanded').forEach(function(el) {
        el.classList.remove('expanded');
    });

    // Expand the clicked article
    articleElement.classList.add('expanded');

    // Stop the propagation to prevent the article from immediately closing when the expand is triggered
    event.stopPropagation();
}

function closeArticle(event, button) {
    const article = button.closest('.article');
    article.classList.remove('expanded');
    event.stopPropagation(); // Prevent the article from expanding again when closing
}

document.querySelectorAll('.article').forEach(function(article) {
    article.addEventListener('click', function() {
        expandArticle(this);
    });
});



//cookie consent

document.addEventListener("DOMContentLoaded", function() {
    // Check user consent from localStorage
    var consent = localStorage.getItem("userConsent");
    if (consent !== "accepted" && consent !== "declined") {
        document.getElementById("cookieConsentBanner").style.display = "block";
    }

    // Attach event listeners to buttons
    document.getElementById("acceptCookies").addEventListener("click", function() {
        localStorage.setItem("userConsent", "accepted");
        document.getElementById("cookieConsentBanner").style.display = "none";
    });

    document.getElementById("declineCookies").addEventListener("click", function() {
        localStorage.setItem("userConsent", "declined");
        document.getElementById("cookieConsentBanner").style.display = "none";
    });

    document.getElementById("settingsCookies").addEventListener("click", function() {
        document.getElementById("cookieSettingsModal").style.display = "block";
    });

    document.getElementById("saveCookieSettings").addEventListener("click", function() {
        var analyticsConsent = document.getElementById("analyticsCookies").checked;
        localStorage.setItem("analyticsConsent", analyticsConsent ? "true" : "false");
        localStorage.setItem("userConsent", "accepted");
        document.getElementById("cookieSettingsModal").style.display = "none";
        document.getElementById("cookieConsentBanner").style.display = "none";
    });

    // Check if the resetCookies button exists before adding event listener
    var resetCookiesBtn = document.getElementById("resetCookies");
    if (resetCookiesBtn) {
        resetCookiesBtn.addEventListener("click", function() {
            resetCookieConsent();
        });
    }
});

function resetCookieConsent() {
    localStorage.removeItem("userConsent");
    localStorage.removeItem("analyticsConsent");
    document.getElementById("cookieConsentBanner").style.display = "block";
}



document.addEventListener("DOMContentLoaded", function() {
    showRandomPopup();
  });
  
  function showRandomPopup() {
    var randomPopupNumber = Math.floor(Math.random() * 2) + 1; // Randomly generates 1 or 2
    showPopup(`popup${randomPopupNumber}`);
  }
  
  function showPopup(popupId) {
    document.getElementById(popupId).style.display = 'block';
  }
  
  function closePopup(popupId) {
    document.getElementById(popupId).style.display = 'none';
    setTimeout(showRandomPopup, 10000); // Wait 10 seconds before showing a pop-up again
  }
  
  
  document.addEventListener("DOMContentLoaded", function() {
    showRandomPopup();
  });
  
  function showRandomPopup() {
    var randomPopupNumber = Math.floor(Math.random() * 2) + 1; // Randomly generates 1 or 2
    positionPopupRandomly(`popup${randomPopupNumber}`);
  }
  
  function positionPopupRandomly(popupId) {
    var popup = document.getElementById(popupId);
    var maxHeight = window.innerHeight - popup.offsetHeight;
    var maxWidth = window.innerWidth - popup.offsetWidth;
  
    var randomTop = Math.floor(Math.random() * maxHeight);
    var randomLeft = Math.floor(Math.random() * maxWidth);
  
    popup.style.top = `${randomTop}px`;
    popup.style.left = `${randomLeft}px`;
    popup.style.display = 'block';
  }
  
  function closePopup(popupId) {
    document.getElementById(popupId).style.display = 'none';
    setTimeout(showRandomPopup, 5000); // Wait 10 seconds before showing a pop-up again
  }
  

  //social media share

document.addEventListener('DOMContentLoaded', function() {
    const socialLinks = document.querySelectorAll('.social-media-links a');

    socialLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.color = '#4CAF50'; // Change to your hover color
            this.firstChild.classList.add('hovered');
        });

        link.addEventListener('mouseleave', function() {
            this.style.color = 'white'; // Revert to original color
            this.firstChild.classList.remove('hovered');
        });
    });
});


// translate
document.addEventListener('DOMContentLoaded', function() {
    const languageSelect = document.getElementById('language-select');
    languageSelect.addEventListener('change', function(e) {
        translateContent(e.target.value);
    });

});

function translateContent(language) {
    let targetLang = 'en'; // Default to English
    if (language === 'Spanish') targetLang = 'es'; // Spanish translation

    const contentElements = document.querySelectorAll('.content p');

    contentElements.forEach((element) => {
        const requestBody = [{ 'Text': element.innerText }];

        // Use the specific endpoint from your Azure configuration
        const endpoint = `https://paginabarca.cognitiveservices.azure.com/translate?api-version=3.0&to=${targetLang}`;

        fetch(endpoint, {
            method: 'POST',
            headers: {
                // Use your actual subscription key
                'Ocp-Apim-Subscription-Key': '1fda011e055a4215bdb57e37d63c93b8',
                'Ocp-Apim-Subscription-Region': 'westeurope',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(requestBody)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            if (data[0] && data[0].translations[0]) {
                // Update the element text with the translated text
                element.innerText = data[0].translations[0].text;
            }
        })
        .catch(error => console.error('Error translating:', error));
    });
}




// API fixtures
document.addEventListener('DOMContentLoaded', function() {
    const API_KEY = '47a629d596f241a1a6167ae01cace826';
    const BASE_URL = 'https://api.football-data.org/v2/';
    const TEAM_ID = '81'; // FC Barcelona's team ID in the API
    const headers = new Headers();
    headers.append('X-Auth-Token', API_KEY);

    // Function to display fixtures, limiting to the last/next 10
    function displayFixtures(matches, containerId, limit = 10) {
    const fixturesElement = document.getElementById(containerId);
    matches.slice(0, limit).forEach(match => {
        const matchElement = document.createElement('div');
        
        // Constructing the match text
        const matchDate = new Date(match.utcDate).toLocaleDateString();
        let matchText = `${match.homeTeam.name} vs ${match.awayTeam.name} - ${matchDate}`;

        // Check if "FC Barcelona" is part of the match and highlight it
        matchText = matchText.replace(/FC Barcelona/g, '<span class="golden-text">FC Barcelona</span>');

        // Using innerHTML to include the span with styling
        matchElement.innerHTML = matchText;

        fixturesElement.appendChild(matchElement);
    });
}


    // Fetch and display upcoming fixtures
    fetch(`${BASE_URL}teams/${TEAM_ID}/matches?status=SCHEDULED`, { headers })
    .then(response => response.json())
    .then(data => {
        // Assuming the API returns fixtures in ascending chronological order
        displayFixtures(data.matches, 'upcoming-fixtures');
    })
    .catch(error => console.error('Error fetching data:', error));

    // Fetch and display past fixtures
    fetch(`${BASE_URL}teams/${TEAM_ID}/matches?status=FINISHED`, { headers })
    .then(response => response.json())
    .then(data => {
        // Assuming the API returns fixtures in descending chronological order
        // Reverse to display the most recent first, then slice to limit
        displayFixtures(data.matches.reverse(), 'past-fixtures');
    })
    .catch(error => console.error('Error fetching data:', error));
    fetch(`${BASE_URL}teams/${TEAM_ID}/matches?status=SCHEDULED`, { headers })
    .then(response => response.json())
    .then(data => {
        // Assuming the API returns fixtures in ascending chronological order
        if (data.matches && data.matches.length > 0) {
            const firstMatch = data.matches[0]; // The next game
            const matchText = `${firstMatch.homeTeam.name} vs ${firstMatch.awayTeam.name} - ${new Date(firstMatch.utcDate).toLocaleDateString()}`;
            const highlightedText = matchText.replace(/FC Barcelona/g, '<span class="golden-text">FC Barcelona</span>');
            
            document.getElementById('next-game-highlight').innerHTML = `<div>${highlightedText}</div>`;
        }
    })
    .catch(error => console.error('Error fetching data:', error));

});


