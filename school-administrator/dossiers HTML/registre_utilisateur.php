<?php


// enregistreement d'un nouveau prof____________________

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['pwd1'])  && isset($_POST['pwd2']) && ($_POST['pwd1'] == $_POST['pwd2'])){

    try{
        $bdd = new PDO('mysql:host=localhost;dbname=school-administrator','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch (PDOException $e){
            die(' erreur : '.$e->getMessage());
        };

        $req = $bdd->prepare('INSERT INTO utilisateur(nom,prenom,mail,pwd) VALUES(:nom, :prenom, :mail , :pwd)') or die(print_r($bdd->errorInfo()));

        $req -> execute(array(
           'nom' => $_POST['nom'],
           'prenom' => $_POST['prenom'],
           'mail' => $_POST['mail'],
           'pwd' => $_POST['pwd1']
        ));
        // Puis rediriger vers minichat.php comme ceci :
        header('Location: index.php');
      
}
else{
    echo 'vous n\'avez pas remplis les champs reqies pour valider';

}
?>