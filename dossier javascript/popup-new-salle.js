 
let btnsalle = document.getElementById("new-salle");
let popsalle = document.getElementById('popup-new-salle');
let closesalle = document.getElementById('exit-new-salle');
let sendsalle = document.getElementById('submit-salle')
let oldpopsalle = document.getElementById('popup');

btnsalle.addEventListener("click",openModal);
function openModal(){
    oldpopsalle.style.display = 'none';
    popsalle.style.display = 'flex';
};

sendsalle.addEventListener('click',closeModal);
function closeModal(){
    popsalle.style.display = 'none';
};
closesalle.addEventListener('click',closeModal);
function closeModal(){
    popsalle.style.display = 'none';
};

window.addEventListener('click',outsideClick);
function outsideClick(e){
    if(e.target == pop){
        popsalle.style.display = 'none';
    };
};