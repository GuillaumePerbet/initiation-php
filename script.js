// get DOM elements
const questionsElt = document.getElementById("questions");
const labelElts = document.querySelectorAll("#questions label");
const scoreElt = document.getElementById("score");
const launchElt = document.getElementById("launch");

// questions form on submit
questionsElt.addEventListener('submit', (e)=>{
    e.preventDefault();
    const formData = new FormData(questionsElt);

    // display score and launch
    scoreElt.style.display = "block";
    launchElt.style.display = "block";
});

// launch form on submit
launchElt.addEventListener('submit', (e)=>{
    e.preventDefault();

    // switch view from launch to questions
    scoreElt.style.display = "none";
    launchElt.style.display = "none";
    questionsElt.style.display = "block";
});