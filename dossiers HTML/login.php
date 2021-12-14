<?php


// enregistreement d'un nouveau prof____________________
$target='index.php';
if ( isset($_POST['mail']) && isset($_POST['pwd']) ){

    try{
        $bdd = new PDO('mysql:host=localhost;dbname=school-administrator','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch (PDOException $e){
            die(' erreur : '.$e->getMessage());
        };

        $req = $bdd->prepare('SELECT mail,pwd FROM utilisateur WHERE mail = ? AND pwd = ?');
        $req->execute(array($_POST['mail'], $_POST['pwd']));
        while($donnees = $req->fetch()){
         if($_POST['mail'] == $donnees[0]  && $_POST['pwd'] == $donnees[1]){
          $target="acceuille.php";
        
        };
    };
        // Puis rediriger vers minichat.php comme ceci :
        header('Location:'.$target.'?err=true');
     
}
else{
    echo 'vous n\'avez pas remplis les champs reqies pour valider';

}
?>


