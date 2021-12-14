<?php
  header('Content-Type: application/json');
try{
    $bdd = new PDO('mysql:host=localhost;dbname=school-administrator','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }catch (PDOException $e){
        die(' erreur : '.$e->getMessage());
    };
    $c = array();
    $evenements=array();
    $req = $bdd->query("SELECT id_cour,intitule,debut_cour,fin_cour FROM cour ");
    while ($donnee = $req->fetch()){
        $c['title']= $donnee['intitule'];
        $c['start'] = $donnee['debut_cour'];
        $c['end'] = $donnee['fin_cour'];
        $c['id'] = $donnee['id_cour'];
        array_push($evenements, $c);
    }
    echo json_encode($evenements);
    ?>
   