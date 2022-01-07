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
    <!-- barre  de navigation -->
    <div class="container-fluid no-imp">
        <div class="row">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand ">
                        <img src="./../Images/school_administrator.png" height="111em" width="111em" alt="school_administrator">
                        School-administrator
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                        <span class="navbar-toggler-icon">
                        </span>
                    </button>

                    <div id="navbarContent" class="collapse navbar-collapse mx-5">

                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                        <a class="nav-link active" href="./../dossiers HTML/acceuille.php">Accueil</a></li>
                            <li class="nav-item active">
                                        <a class="nav-link" href="./../dossiers HTML/classes.php">Classes</a></li>
                            <li class="nav-item active">
                                        <a class="nav-link" href="./../dossiers HTML/professeurs.php">Enseignant</a></li>
                            <li class="nav-item active">
                                        <a class="nav-link" href="./../dossiers HTML/salles_des_classes.php">Salles de classes</a></li>
                            <li class="nav-item active">
                                        <a class="nav-link" href="./../dossiers HTML/base_de_données.php">Base de données</a></li>
                            <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Deconnexion</a></li>
                        </ul>
                    </div>
                </nav> 
        </div>
    </div>
    
    <!-- corps de la page -->
    <div class="container-fluid mt-2">
        <div class="row">
            <!-- position calendrier -->
            <div class="col-10 container bg-light">
                <div id="calendrier" style="height: 25cm; position : static">
                
                </div>
            </div>

            <!--formulaire -->
            <div class="col-2 bg-info no-imp">
                <form id="form_index" class="no-imp" method="post" action="registre_cour.php">
                    <div class="form-group my-3">
                        <h3>Programmer un cours </h3>
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" name="intitule" type="text" placeholder="nom du cours">
                    </div>

                    <div class="form-group">
                        <select class="form-control my-3" name="id_classe" id="heure" >
                            <option value="null" selected> classe</option>
                            <?php include('index_liste_classe.php'); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-control my-3" name="id_prof" id="heure" >
                            <option value="null" selected> professeur</option>
                            <?php include('index_liste_professeur.php'); ?>
                        </select> 
                    </div>

                    <div class="form-group">
                        <select class="form-control my-3" name="id_salle" id="heure" >
                            <option value="null" selected> salle de cour </option>
                            <?php include('index_liste_salle.php'); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="date" name="date" class="form-control my-3" id="">
                    </div>

                    <div class="form-group my-3">
                        <label for="debut_cour" >debut_cour</label>
                        <input class="form-control " type="time" name="debut_cour" id="">
                    </div>

                    <div class="form-group my-3">
                        <label for="fin_cour"   >fin_cour</label>
                        <input class="form-control " type="time" name="fin_cour" id="">

                    </div>

                    <div class="form-group">
                        <textarea class="form-control my-3" name="commentaire" placeholder="Commentaires"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary my-3">Enregistrer</button>
                    </div>
                    
                    <div class="form-group">
                        <input type="button" id="impr" class="btn btn-dark " value="imprimer" />
                    </div>
                </form>
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
    <script src="./../dossier javascript/redirect impression.js"></script>
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