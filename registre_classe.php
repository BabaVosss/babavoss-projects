<?php
// enregistreement d'un nouveau prof____________________

if (isset($_POST['nom_classe']) && isset($_POST['effectif']) && isset($_POST['num_responsable'])){

    try{
        $bdd = new PDO('mysql:host=localhost;dbname=school-administrator','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch (PDOException $e){
            die(' erreur : '.$e->getMessage());
        };

        $req = $bdd->prepare('INSERT INTO classe(nom_classe,effectif,numero_ress) VALUES(:nom_classe, :effectif, :num_responsable)') or die(print_r($bdd->errorInfo()));

        $req -> execute(array(
            'nom_classe' => $_POST['nom_classe'],
            'effectif' => $_POST['effectif'],
            'num_responsable' => $_POST['num_responsable']
        ));
        // Puis rediriger vers minichat.php comme ceci :
        header('Location: base_de_données.php');
      
}
else{
    echo 'vous n\'avez pas remplis les champs reqies pour valider';
}
?>