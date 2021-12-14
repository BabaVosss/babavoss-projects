<?php

try{
    $bdd = new PDO("mysql:host=localhost;dbname=school-administrator",'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}catch(PDOException $e){
    die('erreur : '.$e->getMessage());
};

$req = $bdd->query("SELECT nom_prof FROM professeur");

while ($donnees = $req->fetch()){

   echo '<li class="list-group-item bg-info" >' . $donnees['nom_prof'].'</li> ';
   
}



?>