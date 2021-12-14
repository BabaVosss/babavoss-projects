<?php

try{
    $bdd = new PDO("mysql:host=localhost;dbname=school-administrator",'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}catch(PDOException $e){
    die('erreur : '.$e->getMessage());
};

$req = $bdd->query("SELECT id_salle,nom_salle FROM salle");

while ($donnees = $req->fetch()){

   echo '<option value='.$donnees['id_salle'].'>' . $donnees['nom_salle'].'</option> ';
   
}



?>