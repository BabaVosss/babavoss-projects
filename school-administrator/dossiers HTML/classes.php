<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Dossiers CSS/index.css">
    <link rel="stylesheet" href="../Dossiers CSS/salles_des_classes.css">
   

    <link rel="stylesheet" href="../fullcalendar-5.5.0/core/main.css">
    <link rel="stylesheet" href="../fullcalendar-5.5.0/daygrid/main.css">
    <link rel="stylesheet" href="../fullcalendar-5.5.0/timegrid/main.css">
    <link rel="stylesheet" href="../fullcalendar-5.5.0/list/main.css">
  
    <script src="../fullcalendar-5.5.0/core/main.js"></script>
    <script src="../fullcalendar-5.5.0/daygrid/main.js"></script>
    <script src="../fullcalendar-5.5.0/list/main.js"></script>  
    <script src="../fullcalendar-5.5.0/timegrid/main.js"></script>
    <script src="../fullcalendar-5.5.0/interaction/main.js"></script>


    <title>classes</title>
</head>
<body> 
    <hr>
    <header>
        <img src="../Images/school_administrator.png" alt="school_administrator">
        <h1>School-administrator</h1>
    </header>
    <hr>

    <nav>
            <ul>
                <li><a href="../dossiers HTML/index.php">Accueil</a></li>
                <li><a href="../dossiers HTML/classes.php">Classes</a></li>
                <li><a href="../dossiers HTML/professeurs.php">Proffesseurs</a></li>
                <li><a href="../dossiers HTML/salles_des_classes.php">Salles de classes</a></li>
                <li><a href="../dossiers HTML/base_de_données.php">Base de données</a></li>
                <li><a href="#">Deconnexion</a></li>
            </ul>
    </nav>

<div class= "content" style="display: flex;">

    <div class="liste">
         <fieldset>
         <legend>classes</legend>
                   
        <ul class="liste2">
           <?php include('liste_classe.php') ?>
        </ul>

        </fieldset>
        
       

  
    </div>
    
    <div id="calendrier" >
      
    </div>
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

<script>
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
                    events: './evenement_cour.php'
                });

                // On affiche le calendrier
                calendar.render();

            </script>
</html>