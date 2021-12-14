 
let btnProf = document.getElementById("new-prof");
let popProf = document.getElementById('popup-new-prof');
let closeProf = document.getElementById('exit-new-prof');
let sendProf = document.getElementById('submit-prof')
let oldpopProf = document.getElementById('popup');

btnProf.addEventListener("click",openModal);
function openModal(){
    oldpopProf.style.display = 'none';
    popProf.style.display = 'flex';
};

sendProf.addEventListener('click',closeModal);
function closeModal(){
    popProf.style.display = 'none';
};
closeProf.addEventListener('click',closeModal);
function closeModal(){
    popProf.style.display = 'none';
};

window.addEventListener('click',outsideClick);
function outsideClick(e){
    if(e.target == pop){
        popProf.style.display = 'none';
    };
};