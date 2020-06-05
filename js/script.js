// get DOM elements
const questionsElt = document.getElementById("questions");
const questionsSubmitElt = document.getElementById("questionsSubmit");
const scoreElt = document.getElementById("score");
const launchElt = document.getElementById("launch");
const introElt = document.getElementById("intro");

// questions form on submit
questionsElt.addEventListener('submit', (e)=>{
    e.preventDefault();
    const formData = new FormData(questionsElt);
    // check answers
    for (let i=1; i<=5; i++){
        let answer = document.getElementById("answer"+i);
        answer.style.color = "#FFFFFF";
        if(formData.get("answer"+i) == formData.get("number"+i+"-1") * formData.get("number"+i+"-2")){
            answer.style.backgroundColor = "#018786";
        }else{
            answer.style.backgroundColor = "#B00020";
        }
    }
    // calculate score
    fetch( 'js/ajax.php', { method : "post" , body : formData } )
        .then( res => res.text() ).then( data =>{
            scoreElt.innerHTML = data;
        });
    // display score and launch
    questionsSubmitElt.value = "corriger";
    scoreElt.style.display = "block";
    launchElt.getElementsByTagName("input")[0].value = "Recommencer"
    launchElt.style.display = "block";
});

// launch form on submit
launchElt.addEventListener('submit', (e)=>{
    e.preventDefault();
    // fetch five objects { number1 , number2 , question } and fill form
    for (let i=1 ; i<=5 ; i++){
        let answer = document.getElementById("answer"+i);
        answer.style.backgroundColor = "#D1C4E9";
        answer.style.color = "#000000";
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
    questionsSubmitElt.value = "valider";
    questionsElt.style.display = "flex";
    introElt.style.display = "none";
});