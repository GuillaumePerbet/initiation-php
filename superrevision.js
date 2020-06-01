//return random integer between 1 and 10
function randomInt() {
    return Math.floor(Math.random() * 10) + 1;
}

// setting variables
let random1 = randomInt();
let random2 = randomInt();
let state = 0;
let score = 0;
let answer = 0;

// getting DOM elements
const resultElt = document.getElementById("result");
const scoreElt = document.getElementById("score");
const questionElt = document.getElementById("question");
const questionLabelElt = document.querySelector("#question label");
const finishElt = document.getElementById("finish");