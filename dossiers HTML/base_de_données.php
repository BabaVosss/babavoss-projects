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
    <div class="container-fluid">
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
                                        <a class="nav-link " href="./../dossiers HTML/acceuille.php">Accueil</a></li>
                            <li class="nav-item active">
                                        <a class="nav-link" href="./../dossiers HTML/classes.php">Classes</a></li>
                            <li class="nav-item active">
                                        <a class="nav-link" href="./../dossiers HTML/professeurs.php">Enseignant</a></li>
                            <li class="nav-item active">
                                        <a class="nav-link" href="./../dossiers HTML/salles_des_classes.php">Salles de classes</a></li>
                            <li class="nav-item active">
                                        <a class="nav-link active" href="./../dossiers HTML/base_de_données.php">Base de données</a></li>
                            <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Deconnexion</a></li>
                        </ul>
                    </div>
                </nav> 
        </div>
    </div>
    

<div class="container-fluide mt-2 ">
    <div class="row ">
        
        <div class="col-9 bg-light text-white">
            <div class="row">
                <div class="col-3 bg-dark pb-3">

                    <fieldset class="border border-dark rounded mx-1">
                        <legend class="font-weight-bold ">professeurs</legend>
                        <div class="liste_donnees">
                            <ul class="list-group mx-4">
                                <?php include('liste_prof.php');?>
                            </ul>
                        </div>
                    </fieldset>

                    <fieldset class="border border-dark rounded mx-1">
                        <legend class="font-weight-bold ">classes</legend>
                            <div class="liste_donnees">
                                <ul class="list-group mx-4">
                                    <?php include('liste_classe.php');?>
                                </ul>
                            </div>
                    </fieldset>

                    <fieldset class="border border-dark rounded mx-1">
                        <legend class="font-weight-bold ">salles de cours</legend>
                            <div class="liste_donnees">
                                <ul class="list-group mx-4">
                                    <?php include('liste_salle.php');?>
                                </ul>
                            </div>
                    </fieldset>

                </div>

                <div class="col 9 bg-secondary mx-1">

                </div>
            </div>
            
        </div>

        <div class="col-3 bg-info" >
            <div class="row">
                <button  id="new-data" class="btn my-5 shadow bg-dark text-white" data-toggle="modal" data-target="#popup" type="submit" id="new_data" > nouvelle donnée</button>
                <button class="btn my-5  shadow bg-dark text-white"  type="submit" id="mdf_data">modifier données </button>
            </div>
           
        </div>
       
    </div>
    <!-- pop up NEW DATA-->
    <div id="popup" class="modal bg-dark text-white">
        <div class="modal-dialog ">
            
                    <div class="modal-content modal-dialog-centered bg-info">

                        <div class="modal-header bg-dark mt-5 mx-2">
                            <h2> creation de nouvelle donnees </h2> 
                        </div>

                        <div class="modal-body mt-5">
                            <ul class="list-group ">
                                <li class="list-group-item list-group-item-action "> 
                                    <button id="new-prof" class="btn " type="button" data-toggle="modal-new-prof" data-target="#popup-new-prof">  Ajouter un nouvel enseignant </button></li>
                                <li class="list-group-item list-group-item-action "> 
                                    <button  id="new-classe" class="btn " type="button" data-toggle="modal-new-classe" data-target="#popup-new-classe"> Ajouter une nouvelle classe </button> </li>
                                <li class="list-group-item list-group-item-action "> 
                                    <button  id="new-salle" class="btn " type="button" data-toggle="modal-new-salle" data-target="#popup-new-salle"> Ajouter une nouvelle salle</button>  </li>
                            </ul>
                        </div>

                        <div class="modal-footer">
                            <button id="exit" class="btn bg-secondary bg-dark text-white" data-dismiss="modal"> Exit </button>
                        </div>
                    </div>
        </div>
    </div>

<!-- pop up new prof -->
<div id="popup-new-prof" class=" modal modal-new-prof bg-dark text-white">
    <div class="modal-dialog ">
        
                <div class="modal-content modal-dialog-centered bg-info">

                    <div class="modal-header bg-dark mt-5 mx-2">
                        <h2> creation de nouvel enseignant  </h2> 
                    </div>

                    <div class="modal-body mt-5">
                        <img src="./../Images/logo enseignant.jpg" class="mx-auto mb-2" alt="" width="100em">
                        <form action="registre_prof.php" method="post" >
                            <div class="form-group">
                                <label for="id_prof"> ID :</label> 
                                <input class="form-control bg-white" type="text" name="id_prof" >
                            </div>
                            <div class="form-group">
                                <label for="nom_prof"> Nom : </label> 
                                <input type="text" class="form-control" name="nom_prof" >
                            </div>
                            <div class="form-group">
                                <label for="matiere"> Matiere : </label> 
                                <input type="text" class="form-control" name="matiere" >
                            </div>
                            <div class="form-group">
                                <label for="id_prof"> Tel : </label>
                                <input type="text" class="form-control" name="num_prof" >
                            </div>
                            <div class="form-group">
                                <label for="mail_prof"> Mail : </label>
                                <input type="text" class="form-control" name="mail_prof" >
                            </div>
                            <div class="form-group">
                                <label for="address_prof"> Addresse : </label>
                                <input type="text" class="form-control" name="addresse_prof" >
                            </div>

                            <div class="form-group" >
                                <button type="submit" id="submit-prof" class="btn btn-info bg-dark mt-3 text-white"> envoyer </button>
                            </div>
                        </form> 
                        
                        <button id="exit-new-prof" class="btn text-white" data-dismiss="modal-new-prof"> Exit </button>  

                    </div>


                </div>
    </div>
</div>

<!-- pop up new classe -->
<div id="popup-new-classe" class=" modal modal-new-classe bg-dark text-white">
        <div class="modal-dialog ">
            
                    <div class="modal-content modal-dialog-centered bg-info">

                        <div class="modal-header bg-dark mt-5 mx-2">
                            <h2> Creation d'une nouvelle Classe  </h2> 
                        </div>

                        <div class="modal-body mt-5">
                            <img src="./../Images/logo classe.jpg" class="mx-auto mb-2" alt="" width="130em">
                            <form action="registre_classe.php" method="post" >
                                <div class="form-group">
                                    <label for="nom_classe"> nom : </label>
                                    <input class="form-control" type="text" name="nom_classe" >
                                </div>

                                <div class="form-group">
                                    <label for="effectif"> effectif : </label> 
                                    <input class="form-control" type="text" name="effectif" >
                                </div>

                                <div class="form-group">
                                    <label for="num_responsable"> num reponsable :</label>
                                    <input class="form-control" type="text" name="num_responsable" >
                                </div>

                                
                                <button type="submit" id="submit-classe" class="btn btn-info bg-dark mt-3 text-white"> envoyer </button>
                                
                            </form> 
                            
                            <button id="exit-new-classe" class="btn text-white" data-dismiss="modal-new-classe"> Exit </button>  

                        </div>


                    </div>
        </div>
    </div>
<!-- pop up new salle -->
<div id="popup-new-salle" class=" modal modal-new-salle bg-dark text-white" >
    <div class="modal-dialog ">

        <div class="modal-content modal-dialog-centered bg-info">

            <div class="modal-header bg-dark mt-5 mx-2">
                <h2> creation de nouvel enseignant  </h2> 
            </div>

            <div class="modal-body mt-5">
                <img src="./../Images/logo salle de classe 2-4.webp" class="mx-auto mb-2" alt="" width="150em">
                <form action="registre_salle.php" method="post" >

                    <div class="form-group">
                        <label for="nom_salle"> Nom : </label> 
                        <input type="text" class="form-control" name="nom_salle" >
                    </div>
                    <div class="form-group">
                        <label for="matiere"> Localisation : </label> 
                        <input type="text" class="form-control" name="localisation" >
                    </div>
                    <div class="form-group">
                        <label for="id_salle"> Capacite : </label>
                        <input type="text" class="form-control" name="capacite" >
                    </div>

                    <div class="form-group" >
                        <button type="submit" id="submit-salle" class="btn btn-info bg-dark mt-3 text-white" > envoyer </button>
                    </div>
                </form> 
                
                <button id="exit-new-salle" class="btn text-white"  data-dismiss="modal-new-salle"> Exit </button>  

            </div>


        </div>
    </div>
</div>

<footer style="margin : auto;">
    <?php include('author.php') ?>
</footer>
    

    <script src="./../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="./jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="./../dossier javascript/pop_up.js"></script>
    <script src="./../dossier javascript/popup-new-prof.js"></script>
    <script src="./../dossier javascript/popup-new-classe.js"></script>
    <script src="./../dossier javascript/popup-new-salle.js"></script>
    


    <?php  // on ajpoute  le scripte  du pop-up_______________________________ ?>
    
    <script> 
        let classe = document.getElementsByClassName('element_liste_classe');
<?php  // il faut creer un servive web_______________________________ ?>      
        for( let i = 0; i < classe.length; i++ ){
            classe[i].addEventListener("click",function(e){
                let champDonnee = document.getElementById('donnees');
                chompDonnee.innerHTML = <?php include('donne_c') ?>
            });
        }

    </script>
</body>

</html>