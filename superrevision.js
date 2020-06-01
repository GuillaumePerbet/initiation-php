// setting variables
let random1, random2, answer;
let score = 0;
let state = 0;

// getting DOM elements
const resultElt = document.getElementById("result");
const scoreElt = document.getElementById("score");
const questionElt = document.getElementById("question");
const questionLabelElt = document.querySelector("#question label");
const finishElt = document.getElementById("finish");

function randomInt() {
    //return random integer between 1 and 10
    return Math.floor(Math.random() * 10) + 1;
}

function nextQuestion(){
    // generate next question
    random1 = randomInt();
    random2 = randomInt();
    state++;
    questionLabelElt.innerHTML = "Question " + state + " : résoudre " + random1 + " x " + random2 + " = ";
}
nextQuestion();

function finish(){
    // check if revision is finished
    if (state == 5){
        // switch view to finish form
        questionElt.style.display = "none";
        finishElt.style.display = "block";
    }else{
        nextQuestion();
    }
}

function checkAnswer(answer){
    //check answer and print results
    if (answer == random1*random2){
        score++;
        resultElt.innerHTML = "Bonne réponse !";
        
    }else{
        resultElt.innerHTML = "Mauvaise réponse !";
    }
    scoreElt.innerHTML = "Score : " + score + " / " + state;
    // check state
    finish();
}

// question form on submit
// send answer to checkAnswer() function
questionElt.addEventListener('submit', (e)=>{
    e.preventDefault();
    const formData = new FormData(questionElt);
    answer = formData.get("answer");
    checkAnswer(answer);
});

// finish form on submit
// switch view from finish form to first question
finishElt.addEventListener('submit', (e)=>{
    e.preventDefault();
    finishElt.style.display = "none";
    resultElt.innerHTML = "";
    scoreElt.innerHTML = "";
    questionElt.style.display = "block";
    score = 0;
    state = 0;
    nextQuestion();
});