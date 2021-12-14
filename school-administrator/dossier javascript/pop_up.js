const bouttons = document.getElementsByTagName("button");
let btn = bouttons[0];
let pop = document.getElementById('modal_bg');
let close = document.getElementById('exit');

btn.addEventListener("click",openModal);
function openModal(){
    pop.style.display = 'flex';
};

close.addEventListener('click',closeModal);
function closeModal(){
    pop.style.display = 'none';
};

window.addEventListener('click',outsideClick);
function outsideClick(e){
    if(e.target == pop){
        pop.style.display = 'none';
    };
};