<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Dossiers CSS/index.css">
    <link rel="stylesheet" href="../Dossiers CSS/salles_des_classes.css">
    <link rel="stylesheet" href="../Dossiers CSS/pop_up.css">
    
       <title>contacts</title>
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
                <li><a href="../dossiers HTML/salles_des_classes.php">Salles de cours</a></li>
                <li><a href="../dossiers HTML/base_de_données.php">Base de données</a></li>
                <li><a href="#">Deconnexion</a></li>
            </ul>
    </nav>
<div class="page">
    <div class="BDD">
        <div class="bouttons" name="bouttons">
            <button class="btn1" id="btn1" type="submit" >creer une nouvelle donnée</button>
            <button type="submit" id="modifier_donnee">modifier données </button>
        
        </div> 

        <div id="champsConfig">

 <?php  // on defini lla liste des differents entites : profs classes salles _____________________________ ?>

           <div class="field">

                <fieldset>
                    <legend>professeurs</legend>
                    <div class="liste_donnees">
                    <ul>
                       <?php include('liste_prof.php');?>
                    </ul>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>classes</legend>
                    <div class="liste_donnees">
                    <ul>
                         <?php include('liste_classe.php');?>
                    </ul>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>salles de cours</legend>
                    <div class="liste_donnees">
                    <ul>
                         <?php include('liste_salle.php');?>
                    </ul>
                    </div>
                </fieldset>

            </div>

            <div id="donnees">
                    iehfohefh

                  
            </div>
        </div>
    </div>


    <?php  // on defini le contnu du pop-up dans le contenu modal _________________________________?>


    <div id="modal_bg">
    <div id="modal">
        <div id="exit"> &times; </div>

        <div class="modal_content">

               <div class="renseignement_box" >
                        <label> nouveau profeseur<form action="registre_prof.php" method="post" class="renseignement" ></label><br/>
                        <label for="id_prof"> ID : <input type="text" name="id_prof" ></label> <br>
                        <label for="nom_prof"> nom : <input type="text" name="nom_prof" ></label> <br>
                        <label for="matiere"> matiere : <input type="text" name="matiere" ></label> <br>
                        <label for="id_prof"> tel : <input type="text" name="num_prof" ></label> <br>
                        <label for="mail_prof"> mail <input type="text" name="mail_prof" ></label> <br>
                        <label for="address_prof"> addresse : <input type="text" name="addresse_prof" ></label> <br>
                        
                        <button type="submit"> envoyer </button>
                        </form> 
                </div>
                
                <div class="renseignement_box">
                    <label> nouvelle classe
                        <form action="registre_classe.php" method="post" class="renseignement" >
                    </label><br/>
                        <label for="nom_classe"> nom : <input type="text" name="nom_classe" ></label> <br>
                        <label for="effectif"> effectif : <input type="text" name="effectif" ></label> <br>
                        <label for="num_responsable"> num reponsable : <input type="text" name="num_responsable" ></label> <br>
                        
                        <button type="submit"> envoyer </button> 
                    </form>
                </div>

                <div class="renseignement_box">               
                    <label> nouvelle salle
                    <form action="registre_salle.php" method="post" class="renseignement" >
                    </label><br/>
                        <label for="nom_salle"> nom : <input type="text" name="nom_salle" ></label> <br>
                        <label for="localisation"> localisation : <input type="text" name="localisation" ></label> <br>
                        <label for="capacite_salle"> capacite : <input type="text" name="capacite" ></label> <br>
                        
                        <button type="submit"> envoyer </button>
                    </form>
                </div>
              
               
            </div>
      
    </div>
    </div>
</div>


<?php  // on ajpoute  le scripte  du pop-up_______________________________ ?>
    <script src="../dossier javascript/pop_up.js"></script>
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
<footer style="margin : auto;">
   <p>
    Author : Mouhamadou Souleymane Diallo <br/>
    Eleve ingenieur en deuxieme année à l'Institut Polytechnique de Saint Louis <br/>
    Promo 8 . <br/>
    Date : 2021
   </p>
</footer>
</html>