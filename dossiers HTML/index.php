<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./../fullcalendar-source/lib/main.css">
    <link href="./../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
    
    <title>Page d'accueil</title>

    <title>Authentification</title>
</head>
<body class="bg-dark ">
     <!-- barre  de navigation -->
    <div class="container-fluid">
        <div class="row">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand ">
                        <img src="./../Images/school_administrator.png" height="111em"  alt="school_administrator">
                        School-administrator
                    </a>
                </nav> 
        </div>
    </div>

   
    <!-- /form -->
    <div class="container-fluid form mt-3 bg-info w-50 " > 
       
        <div class="row ">
            
            <!-- bouttons -->
            <div class="row my-2 " style="margin-left:13% ;">
                <button class="opt text-white col-4 mx-2 bg-dark active rounded "  style="height: 1.6cm;" > 
                    <a href="#login " class="w-75" style="color: white;font-size:1.5em;">Se connecter</a>                     
                </button>
                <button class="opt col-4 mx-2 bg-dark"> 
                    <a href="#signup" style="color: white;font-size:1.5em;">S'inscrire</a>
                </button>

            </div>
               
            <!-- option de connection  -->         
            <div id="optCon" class="row ">
                
                <!-- sign up form --> 
                <div id="signup" class="row my-3 #signup text-white" style="display: none;">
                    <h3>Déjà inscrit : connectez vous!</h3>
                    <form action="registre_utilisateur.php" method="post">
                    
                        
                        <div class="form-group">
                            <label>Nom </label>
                            <input class="form-control" name="nom" type="text" required  />
                        </div>
                    
                        <div class=" form-group">
                            <label>Prénom</label>
                            <input class="form-control" name="prenom" type="text" required >
                        </div>
                        

                        <div class=" form-group">
                            <label>Adresse mail*</label>
                            <input class="form-control" name="mail" type="email" required />
                        </div>
                        
                        <div class=" form-group">
                            <label>Mot de passe*</label>
                            <input class="form-control" name="pwd1" type="password" required />
                        </div>
                        
                        <div class="form-group">
                            <label>Confirmez votre mot de passe* </label>
                            <input class="form-control" name="pwd2" type="password"required />
                        </div>
                    
                        <button type="submit" class=" text-white btn bg-dark mt-2 ">Créer mon compte</button>
                    
                    </form>
                </div>

                <!-- login up form --> 
                <div id="login" class="#login my-3" >   
                <h3>Pas encore de compte? Inscrivez-vous gratuitement</h3>

                    <?php 
                        if(isset($_GET['err']) && $_GET['err']=='true'){
                           echo '<div class="alert alert-danger" role="alert">
                                Mail or Password INVALIDE !
                            </div>';
                        };
                    ?>
                    <form action="login.php" method="post">
                    
                        <div class="field-wrap">
                            <label>
                                Login<span class="req">*</span>
                            </label>
                            <input class="form-control" name="mail" type="text" required autocomplete="off"/>
                        </div>
                    
                        <div class="field-wrap">
                            <label>
                                Mot de passe<span class="req">*</span>
                            </label>
                            <input class="form-control " name="pwd" type="password" required autocomplete="off"/>
                        </div>
                    
                        <!--<p class="forgot"><a href="#">Forgot Password?</a></p>-->
                        
                        <button class=" btn bg-dark mt-2 text-light">Connexion</button>
                        
                    </form>

                </div>
                
            </div>


        </div>

    </div>
         <!-- caroussel -->
    <div class="container bg-dark">
         <div class="row my-5">
             <h1 class="my-5 text-white"> Apercu </h1>
            <div id="demo" class="carousel slide mt-5" data-ride="carousel" data-interval="3000">
            
            <div class="carousel-inner text-left">
                <div class="carousel-item active">
                    <img src="./../Images/exp1.png" class="w-100" alt="">
                </div>

                <div class="carousel-item text-center text-white">
                    <h2>Administrer vos cours </h2>
                    <p> Programmer des cours  <br>
                        Reprogrammer par un simple click Deplacez <br>
                        Faites plus facilement le bilan Utilisez les vues Mois ou Semaine
                    </p>
                </div>

                <div class="carousel-item">
                    <img src="./../Images/exp2.png.png" class=" w-100" alt="">
                </div>

                <div class="carousel-item text-center text-white">
                    <h2>Administrer vos donnees </h2>
                    <p>
                        <ul>
                            <li> Creez de nouvelles donnes </li>
                            <li> Modifiez vos donnes donnes </li>
                            <li> Visualisez les donnes donnes dre votre etablissement</li>
                        </ul>                   
                    </p>
                </div>
            <a class="carousel-control-prev text-dark" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span> Precedent
            </a>
            <a class="carousel-control-next text-dark" href="#demo" data-slide="next">
                Suivant<span class="carousel-control-next-icon"></span> 
            </a>
            </div>
        </div>
    </div>   
       
        
    <?php include('author.php')?>

    
    <script src="./../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="./../dossier javascript/authentification.js"></script>
   
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>
</html>