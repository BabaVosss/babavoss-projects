 
let btnClasse = document.getElementById("new-classe");
let popClasse = document.getElementById('popup-new-classe');
let closeClasse = document.getElementById('exit-new-classe');
let sendClasse = document.getElementById('submit-classe')
let oldpopClasse = document.getElementById('popup');

btnClasse.addEventListener("click",openModal);
function openModal(){
    oldpopClasse.style.display = 'none';
    popClasse.style.display = 'flex';
};

sendClasse.addEventListener('click',closeModal);
function closeModal(){
    popClasse.style.display = 'none';
};
closeClasse.addEventListener('click',closeModal);
function closeModal(){
    popClasse.style.display = 'none';
};

window.addEventListener('click',outsideClick);
function outsideClick(e){
    if(e.target == pop){
        popClasse.style.display = 'none';
    };
};