// setting variables
let random, number, answer;

// getting DOM elements
const resultElt = document.getElementById("result");
const selectElt = document.getElementById("select");
const questionElt = document.getElementById("question");
const questionLabelElt = document.querySelector("#question label");

function randomInt() {
  //return random integer between 1 and 10
  return Math.floor(Math.random() * 10) + 1;
}

function question(number){
  // generate question
  random = randomInt();
  questionLabelElt.innerHTML = "Résoudre " + number + " x " + random + " = ";
}

function checkAnswer(answer){
  //check answer and print result
  if (answer == number * random){
    resultElt.innerHTML = "Bonne réponse !";
  }else{
    resultElt.innerHTML = "Mauvaise réponse : " + number + " x " + random + " = " + number * random;
  }
}

// select form on submit
// prepare question
// switch to question view
selectElt.addEventListener('submit', (e)=>{
  e.preventDefault();
  const formData = new FormData(selectElt);
  number = formData.get("number");
  question(number);
  resultElt.innerHTML = "";
  selectElt.style.display = "none";
  questionElt.style.display = "block";
});

// question form on submit
// check answer
// switch to select view
questionElt.addEventListener('submit', (e)=>{
  e.preventDefault();
  const formData = new FormData(questionElt);
  answer = formData.get("answer");
  checkAnswer(answer);
  questionElt.style.display = "none";
  selectElt.style.display = "block";
});