// get DOM elements
const questionsElt = document.getElementById("questions");
const questionsSubmitElt = document.getElementById("questionsSubmit");
const scoreElt = document.getElementById("score");
const launchElt = document.getElementById("launch");

// questions form on submit
questionsElt.addEventListener('submit', (e)=>{
    e.preventDefault();
    const formData = new FormData(questionsElt);
    fetch( 'js/ajax.php', { method : "post" , body : formData } )
        .then( res => res.text() ).then( data =>{
            scoreElt.innerHTML = data;
        });
    // display score and launch
    questionsSubmitElt.style.display = "none";
    scoreElt.style.display = "block";
    launchElt.style.display = "block";
});

// launch form on submit
launchElt.addEventListener('submit', (e)=>{
    e.preventDefault();
    // fetch five objects { number1 , number2 , question } and fill form
    for (let i=1 ; i<=5 ; i++){
        fetch('js/ajax.php').then(res=>res.json()).then(data=>{
            let labelElt = document.getElementById(`label${i}`);
            labelElt.innerHTML = data.question;
            let answerElt = document.getElementById(`answer${i}`);
            answerElt.value = "";
            let number1Elt = document.getElementById(`number${i}-1`);
            number1Elt.value = data.number1;
            let number2Elt = document.getElementById(`number${i}-2`);
            number2Elt.value = data.number2;
        });
    }
    // switch view from launch to questions
    scoreElt.style.display = "none";
    launchElt.style.display = "none";
    questionsSubmitElt.style.display = "block";
    questionsElt.style.display = "block";
});