<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./../../fullcalendar-source/lib/main.css">
    

    <link href="./../../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
        
    <script src="./../../fullcalendar-source/lib/main.js"></script>
    
    <title>Document</title>
</head>
<body>
<div id="modal_bg">
    <div id="modal">
        <div id="btn"> &times; </div>

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

<script src="./../../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="./jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="./../dossier javascript/pop_up.js"></script>
</body>
</html>