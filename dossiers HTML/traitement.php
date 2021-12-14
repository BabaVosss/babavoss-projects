<?php 


try{
    $bdd = new PDO('mysql:host=localhost;dbname=school-administrator','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }catch (PDOException $e){
        die(' erreur : '.$e->getMessage());
    };

    $reponse = $bdd->query("SELECT * FROM cour");
    $f= fopen('txt.txt','r+');
   while($donnee = $reponse->fetch()){
            
    fputs($f,$donnee);
    echo '<br /> cour de : ' .$donnee['intitule'].'<br />';
    echo '<br /> id professeur '.$donnee['id_prof'].'<br />';
    echo '<br /> id salle '.$donnee['id_salle'].'<br />';
    echo '<br /> id classe '.$donnee['id_classe'].'<br />';
    echo '<br /> debut :'.$donnee['debut_cour'].'<br />';
    echo '<br /> fin :  '.$donnee['fin_cour'].'<br />';
   }
 fclose($f);

 
?>
