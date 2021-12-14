<?php

//permet d'enregistrer les cdeplacemeents effectues par drag and drop


$cour = json_decode($_POST['cour'],true);
print_r($cour['id']);

try{
    $bdd = new PDO('mysql:host=localhost;dbname=school-administrator','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch (PDOException $e){
        die(' erreur : '.$e->getMessage());
};

    $req = $bdd->prepare("UPDATE cour SET debut_cour = :debut , fin_cour = :fin WHERE id_cour = :id ");
    $req->execute(array(
        'debut' => $cour['start'],
        'fin' => $cour['end'],
        'id' => $cour['id']
    ));
?>
