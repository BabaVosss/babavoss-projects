window.print()
location.href("http://localhost/school-administrator/dossiers%20HTML/AAA.php")

/*
function imprimer_bloc(titre, objet) {
// Définition de la zone à imprimer
var zone = document.getElementById(objet).innerHTML;
 
// Ouverture du popup
var fen = window.open("", "", "height=500, width=600,toolbar=0, menubar=0, scrollbars=1, resizable=1,status=0, location=0, left=10, top=10");
 
// style du popup
fen.document.body.style.color = '#000000';
fen.document.body.style.backgroundColor = '#FFFFFF';
fen.document.body.style.padding = "20px";
 
// Ajout des données a imprimer
fen.document.title = titre;
fen.document.body.innerHTML += " " + zone + " ";
 
// Impression du popup
fen.window.print();
 
//Fermeture du popup
fen.window.close();
return true;
}


var ImpButt = document.getElementById('impr');
        var NI = document.getElementsByClassName('no-imp');
        ImpButt.addEventListener("click",function(){
          imprimer_bloc('ppppp','calendrier')
        });


 function imprimer(divName) {
    var printContents = document.getElementById(divName).innerHTML;    
 var originalContents = document.body.innerHTML;      
 document.body.innerHTML = printContents;     
 window.print();     
 document.body.innerHTML = originalContents;
 }
 
 
 

         for(i=0;i<NI.length;i++) {
                NI[i].remove();
            };
            window.print();
            console.log(ImpButt);
            console.log(NI);
            

       
      */