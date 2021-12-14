<?php
// enregistreement d'un nouveau prof____________________

if (isset($_POST['nom_salle']) && isset($_POST['localisation']) && isset($_POST['capacite']) && $_POST['nom_salle']!="" && $_POST['localisation'] != ""){

    try{
        $bdd = new PDO('mysql:host=localhost;dbname=school-administrator','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch (PDOException $e){
            die(' erreur : '.$e->getMessage());
        };

        $req = $bdd->prepare('INSERT INTO salle(nom_salle,localisation,capacite) VALUES(:nom_salle, :localisation, :capacite)') or die(print_r($bdd->errorInfo()));

        $req -> execute(array(
           'nom_salle' => $_POST['nom_salle'],
           'localisation' => $_POST['localisation'],
           'capacite' => $_POST['capacite']
        ));
        // Puis rediriger vers minichat.php comme ceci :
        header('Location: base_de_données.php');
      
}
else{
    echo 'vous n\'avez pas remplis les champs reqies pour valider';

}
?>