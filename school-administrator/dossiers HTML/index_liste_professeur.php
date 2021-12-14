<?php

try{
    $bdd = new PDO("mysql:host=localhost;dbname=school-administrator",'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}catch(PDOException $e){
    die('erreur : '.$e->getMessage());
};

$req = $bdd->query("SELECT id_prof,nom_prof FROM professeur");

while ($donnees = $req->fetch()){

   echo '<option value='.$donnees['id_prof'].'>' . $donnees['nom_prof'].'</option> ';
   
}



?>