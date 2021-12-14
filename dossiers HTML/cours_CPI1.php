 <?php
 


        try{
    $bdd = new PDO('mysql:host=localhost;dbname=school-administrator','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }catch (PDOException $e){
        die(' erreur : '.$e->getMessage());
    };
    $evenements = [];
    $req = $bdd->query("SELECT id_cour,intitule,debut_cour,fin_cour FROM cour where id_classe = 1 ");
    while ($donnee = $req->fetch()){
        $title = $donnee['intitule'];
        $start = $donnee['debut_cour'];
        $end = $donnee['fin_cour'];

        $evenements[] = [
            'title' => $title,
            'start' => $start,
            'end' => $end,
            'id' => $donnee['id_cour']
        ];
    }
    echo json_encode($evenements);
    ?>
   