const burgerElt = document.getElementById("burger");
const navElt = document.getElementsByTagName("nav")[0];

burgerElt.addEventListener('click',()=>{
    if(navElt.style.top == "3.5rem"){
        navElt.style.top = "-25rem";
    }else{
        navElt.style.top = "3.5rem";
    }
});