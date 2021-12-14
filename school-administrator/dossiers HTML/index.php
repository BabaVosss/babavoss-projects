<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../Dossiers CSS/index.css">
    <link rel="stylesheet" href="./../Dossiers CSS/salles_des_classes.css">
    <script src="./../dossier javascript/index.js"></script>
    
    <link rel="stylesheet" href="./../fullcalendar-5.5.0/core/main.css">
    <link rel="stylesheet" href="./../fullcalendar-5.5.0/daygrid/main.css">
    <link rel="stylesheet" href="./../fullcalendar-5.5.0/timegrid/main.css">
    <link rel="stylesheet" href="./../fullcalendar-5.5.0/list/main.css">
  
    <script src="./../fullcalendar-5.5.0/core/main.js"></script>
    <script src="./../fullcalendar-5.5.0/daygrid/main.js"></script>
    <script src="./../fullcalendar-5.5.0/list/main.js"></script>  
    <script src="./../fullcalendar-5.5.0/timegrid/main.js"></script>
    <script src="./../fullcalendar-5.5.0/interaction/main.js"></script>
    <title>Page d'accueil</title>
  
 
</head> 

<body>
    <hr>
    <header>
        <img src="./../Images/school_administrator.png" alt="school_administrator">
        <h1>School-administrator</h1>
    </header>
    <hr>

    <nav>
            <ul>
                <li><a href="./../dossiers HTML/index.php">Accueil</a></li>
                <li><a href="./../dossiers HTML/classes.php">Classes</a></li>
                <li><a href="./../dossiers HTML/professeurs.php">Proffesseurs</a></li>
                <li><a href="./../dossiers HTML/salles_des_classes.php">Salles de classes</a></li>
                <li><a href="./../dossiers HTML/base_de_données.php">Base de données</a></li>
                <li><a href="#">Deconnexion</a></li>
            </ul>
    </nav>
    
    <div class = "content">
            <div id="calendrier">

            </div>
         
            <form id="form_index" method="post" action="registre_cour.php">
                <h5>Programmer un cours </h5>
                <div>
                    <input name="intitule" type="text" placeholder="nom du cours">

                    <select class="classe" name="id_classe" id="heure" >
                        <option value="null" selected> classe</option>
                        <?php include('index_liste_classe.php'); ?>
                    </select>
                    
                    <select name="id_prof" id="heure" >
                        <option value="null" selected> professeur</option>
                        <?php include('index_liste_professeur.php'); ?>
                    </select> 
                    
                    <select name="id_salle" id="heure" >
                        <option value="null" selected> salle de cour </option>
                        <?php include('index_liste_salle.php'); ?>
                    </select>

                    <input type="date" name="date" id="">
                    
                    <label for="debut_cour" class="heure_de_cour">debut_cour<input type="time" name="debut_cour" id=""></label>
                    <label for="fin_cour"  class="heure_de_cour" >fin_cour<input type="time" name="fin_cour" id=""></label>
                    
                     
                </div>
                    <textarea name="commentaire" placeholder="Commentaires"></textarea>
                    <button type="submit">Enregistrer</button>
            </form>
    </div>
</body>
<footer style="margin : auto;">
   <p>
    Author : Mouhamadou Souleymane Diallo <br/>
    Eleve ingenieur en deuxieme année à l'Institut Polytechnique de Saint Louis <br/>
    Promo 8 . <br/>
    Date : 2021
   </p>
</footer>



<?php  // scripte permettant d'instantier le caledrirer _____________________________ ?>

<?php //document.querySelector(".classe").addEventListener("change",function (){
     //classe = "./cours_"+this.value+".php";
    // alert(classe);
                //});
?>
<script src="jquery-3.5.1.js"></script>
<script>
 let liste_cours = "./evenement_cour.php";
 
               
                // On va chercher la div dans le HTML
                let element = document.getElementById('calendrier');

                // On instancie le calendrier
                let calendar = new FullCalendar.Calendar(element, {
                    // On charge le composant "dayGrid"
                    plugins: ['dayGrid', 'timeGrid' , 'list','interaction'],
                    defaultView: 'timeGridWeek',
                    locale: 'fr',
                    editable: true,
                    eventLimit: true,
                    header: {
                        left: 'timeGridWeek,list',
                        center: 'title',
                        right: 'prev,next'
                    },
                    buttonText: {
                        week: 'vue semaine',
                        list: 'vue liste'
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