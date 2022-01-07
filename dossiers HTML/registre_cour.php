<?php
// enregistreement d'un nouveau prof____________________

if (isset($_POST['intitule']) && isset($_POST['id_classe']) && isset($_POST['id_prof']) && isset($_POST['id_salle']) && isset($_POST['date']) && isset($_POST['debut_cour']) && isset($_POST['fin_cour']) && isset($_POST['commentaire'])){

    try{
        $bdd = new PDO('mysql:host=localhost;dbname=school-administrator','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch (PDOException $e){
            die(' erreur : '.$e->getMessage());
        };

        

        $req = $bdd->prepare('INSERT INTO cour(id_classe,id_prof,id_salle,intitule,debut_cour,fin_cour,commentaire) VALUES(:id_classe,:id_prof,:id_salle,:intitule,:debut_cour,:fin_cour,:commentaire)') or die(print_r($bdd->errorInfo()));
        

        $req -> execute(array(
            'intitule' => $_POST['intitule'],
            'id_classe' => $_POST['id_classe'],
            'id_prof' => $_POST['id_prof'],
            'id_salle' => $_POST['id_salle'],
            'debut_cour' => $_POST['date'].' '. $_POST['debut_cour'],
            'fin_cour' => $_POST['date'].' '.$_POST['fin_cour'],
            'commentaire' => $_POST['commentaire']
        ));
        // Puis rediriger vers minichat.php comme ceci :
        header('Location: acceuille.php');
      
}
else{
    echo 'vous n\'avez pas remplis les champs reqies pour valider';
}
?>