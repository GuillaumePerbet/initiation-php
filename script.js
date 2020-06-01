// getting form element
const formElt = document.getElementsByTagName('form')[0];

// adding submit event
formElt.addEventListener('submit', (e)=>{
  e.preventDefault();
  // AJAX request
  const formData = new FormData(formElt);
  let question = document.getElementById("question");
  question.style.display = "block";
  const request = new XMLHttpRequest();
  request.open("POST", "revisionajax.php");
  request.send(formData);
});


