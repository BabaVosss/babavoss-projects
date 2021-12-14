<?php
// enregistreement d'un nouveau prof____________________

if (isset($_POST['id_prof']) && isset($_POST['nom_prof']) && isset($_POST['num_prof']) && isset($_POST['mail_prof']) && isset($_POST['addresse_prof'])){

    try{
        $bdd = new PDO('mysql:host=localhost;dbname=school-administrator','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch (PDOException $e){
            die(' erreur : '.$e->getMessage());
        };

        $req = $bdd->prepare('INSERT INTO professeur(id_prof,nom_prof,matiere,numero,mail,addresse) VALUES(:id_prof, :nom_prof, :matiere, :numero, :mail, :addresse)') or die(print_r($bdd->errorInfo()));

        $req -> execute(array(
            'id_prof' => $_POST['id_prof'],
            'nom_prof' => $_POST['nom_prof'],
            'matiere' => $_POST['matiere'],
            'numero' => $_POST['num_prof'],
            'mail' => $_POST['mail_prof'],
            'addresse' => $_POST['addresse_prof']
        ));
        // Puis rediriger vers minichat.php comme ceci :
        header('Location: base_de_données.php');
      
}
else{
    echo 'vous n\'avez pas remplis les champs reqies pour valider';
}
?>