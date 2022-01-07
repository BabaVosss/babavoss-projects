<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="./../fullcalendar-source/lib/main.css">
    

    <link href="./../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
    
    
    <script src="./../fullcalendar-source/lib/main.js"></script>
    <title>Page d'accueil</title>
  
 
</head> 

<body>

    <!-- corps de la page -->
    <div class="container-fluid mt-2">
        <div class="row">
            <!-- position calendrier -->
            <div class="container-fluid bg-light">
                <div id="calendrier" style="height: 25cm; position : static">
                
                </div>
            </div>
        </div>
    </div>

    <nav>
           
    </nav>
    
</body>
<footer style="margin : auto;">
    <?php include('author.php') ?>
</footer>



<?php  // scripte permettant d'instantier le caledrirer _____________________________ ?>

<?php //document.querySelector(".classe").addEventListener("change",function (){
     //classe = "./cours_"+this.value+".php";
    // alert(classe);
                //});
?>
    <script src="./../dossier javascript/impression.js"></script>
    <script src="./../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="./jquery-3.5.1.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  
    <script> // instatiation du clendrier 
        let liste_cours = "./evenement_cour.php";
    
                
                    // On va chercher la div dans le HTML
                    let element = document.getElementById('calendrier');

                    // On instancie le calendrier
                    let calendar = new FullCalendar.Calendar(element, {
                        // On charge le composant "dayGrid"
                       
                        timeZone: 'UTC',
                        initialView: 'timeGridWeek',
                        locale: 'fr',
                        editable: true,
                        eventLimit: true,
                        headerToolbar: {
                        left: 'prev,next',
                        center: 'title',
                        right: 'timeGridWeek,dayGridMonth'
                        },
                        buttonText: {
                            week: 'vue semaine',
                            month: 'vue mois '
                        },


                        //recuperation des evenements a partire d'un fichier php
                        events: liste_cours,

                        eventDrop:(infos)=>{

                        // sy = strat year
                            let sy = infos.event.start.getFullYear();
                        // sm = start month 
                            let sm = infos.event.start.getUTCMonth() +1; 
                            let sd = infos.event.start.getDate(); 
                            let sh = infos.event.start.getHours(); 
                            let smn = infos.event.start.getMinutes();
                            
                        // ey = end year
                            let ey = infos.event.end.getFullYear(); 
                        // em = end month
                            let em = infos.event.end.getUTCMonth() +1; 
                            let ed = infos.event.end.getDate(); 
                            let eh = infos.event.end.getHours(); 
                            let emn = infos.event.end.getMinutes(); 

                            let ID = infos.event.id;
                            let START = sy+"-"+sm+"-"+sd+" "+sh+":"+smn;
                            let END = ey+"-"+em+"-"+ed+" "+eh+":"+emn; 

                            
                            const cour = {
                                "id" : ID,
                                "start" : START,
                                "end" : END
                            };

                            let element = JSON.stringify(cour);
                            
                            console.log(cour);

                            $.ajax({
                                url :'drag_cour.php',
                                dataType : 'json',
                                type : 'post',
                                data : {cour : JSON.stringify(cour)},
                                success : function(reponse){
                                    console.log(reponse);
                                }

                            });

                        
                        }
                        
                    });
                    
                    
                    // On affiche le calendrier
                    calendar.render();
                    
                    
                    

    </script>
</html>