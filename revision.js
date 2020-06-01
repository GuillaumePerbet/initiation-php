//return random integer between 1 and 10
function randomInt() {
  return Math.floor(Math.random() * 10) + 1;
}

// setting variables
let random, number, answer;

// getting DOM elements
const resultElt = document.getElementById("result");
const selectElt = document.getElementById("select-table");
const questionElt = document.getElementById("question");
const questionLabelElt = document.querySelector("#question label");

// switching to question form
function questionSwitch(number){
  resultElt.style.display = "none";
  selectElt.style.display = "none";
  random = randomInt();
  questionLabelElt.innerHTML = "Résoudre " + number + " x " + random + " = ";
  questionElt.style.display = "block";
}

// switching to select-table form
function answerSwitch(answer){
  questionElt.style.display = "none";
  if (answer == number * random){
    resultElt.innerHTML = "Bonne réponse !";
  }else{
    resultElt.innerHTML = "Mauvaise réponse : " + number + " x " + random + " = " + number * random;
  }
  resultElt.style.display = "block";
  selectElt.style.display = "block";
}

// select-table form on submit
selectElt.addEventListener('submit', (e)=>{
  e.preventDefault();
  const formData = new FormData(selectElt);
  number = formData.get("number");
  questionSwitch(number);
});

// question form on submit
questionElt.addEventListener('submit', (e)=>{
  e.preventDefault();
  const formData = new FormData(questionElt);
  answer = formData.get("answer");
  answerSwitch(answer);
});