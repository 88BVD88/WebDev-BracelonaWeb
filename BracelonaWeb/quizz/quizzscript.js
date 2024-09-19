
let players = ["Lewandowski.jpg", "Pedri.jpg","Cancelo.jpg", "Gavi.jpg",   "Gündoğan.jpg", "Araujo.jpg", "ter Stegen.jpg"];

// Array that will store the correct option
let correct = [2, 2, 1, 2, 0, 0, 2];

// Array that will store the countries to display in each round
let options = [];
// Load the options for each round into the array
options.push(["Felix", "Kounde", "Lewandowski"]);
options.push(["Gavi", "Lewandowski", "Pedri"]);
options.push(["Araujo", "Cancelo", "Dejong"]);
options.push(["Gundogan", "Ferran", "Gavi", ]);
options.push(["Gundogan","Araujo", "Felix"]);
options.push(["Araujo","Roque", "Yamal"]);
options.push(["De Jong","Roque", "Ter Stegen"]);


let currentPos = 0;
// Variable that stores the number of correct answers so far
let numCorrect = 0;

function startGame(){
    // Reset variables
    currentPos = 0;
    numCorrect = 0;
    // Activate the necessary screens
    document.getElementById("initial-screen").style.display = "none";
    document.getElementById("game-screen").style.display = "block";
    loadPlayer();
}


function loadPlayer(){
    
    if(players.length <= currentPos){
        endGame();
    }
    else { // Load options
        // Clear classes that were assigned
        clearOptions();

        document.getElementById("imgQuizz").src = "quizzImg/" + players[currentPos];
        document.getElementById("n0").innerHTML = options[currentPos][0];
        document.getElementById("n1").innerHTML = options[currentPos][1];
        document.getElementById("n2").innerHTML = options[currentPos][2];
    }
}

function clearOptions(){
    document.getElementById("n0").className = "name";
    document.getElementById("n1").className = "name";
    document.getElementById("n2").className = "name";

    document.getElementById("l0").className = "letter";
    document.getElementById("l1").className = "letter";
    document.getElementById("l2").className = "letter";
}

function checkAnswer(chosenOpt){
    if(chosenOpt == correct[currentPos]) { // correct
        // Add classes to set the chosen option to green color
        document.getElementById("n" + chosenOpt).className = "name nameCorrect";
        document.getElementById("l" + chosenOpt).className = "letter letterCorrect";
        numCorrect++;
    } else { // incorrect
        // Add classes to set the chosen option to red color
        document.getElementById("n" + chosenOpt).className = "name nameIncorrect";
        document.getElementById("l" + chosenOpt).className = "letter letterIncorrect";

        // The option that was correct
        document.getElementById("n" + correct[currentPos]).className = "name nameCorrect";
        document.getElementById("l" + correct[currentPos]).className = "letter letterCorrect";
    }
    currentPos++;

    setTimeout(loadPlayer, 1000);
}

function endGame(){
    // Hide screens and show the final screen
    document.getElementById("game-screen").style.display = "none";
    document.getElementById("final-screen").style.display = "block";
    // Display the results
    document.getElementById("numCorrect").innerHTML = numCorrect;
    document.getElementById("numIncorrect").innerHTML = players.length - numCorrect;
}

function returnToStart(){
    // Hide screens and activate the initial one
    document.getElementById("final-screen").style.display = "none";
    document.getElementById("initial-screen").style.display = "block";
    document.getElementById("game-screen").style.display = "none";
}
