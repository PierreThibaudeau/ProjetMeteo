<?php
session_start(); 
date_default_timezone_set("Europe/Paris");
?>




<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./images/Icône_Soleil.png">
    <title>Données Instantanées</title>

    <!-- Fichiers Bootstrap -->
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="./bootstrap/ie-emulation-modes-warning.js"></script>

    <!--fichier css pour l'armature de la page -->
    <link href="./css/4-col-portfolio.css" rel="stylesheet">
    
 

    <?php

    if (isset($_POST['Valider'])) // si le formulaire à été validé   
    {
        $_SESSION['rafraich']=$_POST['Rafraich'];  // variable de session = valeur du formulaire
    }

    ?>
    <!-- Fonction de rafraichissement automatique de la page -->
    <meta http-equiv="Refresh" content="<?php echo $_SESSION['rafraich']*60?>; url=Donnees_Instantanees.php">



</head>

<body>

    <!-- Inclusion du Fichier de conncetion à la BdD-->
    <p><?php include('./includes/Connect.html'); ?></p>

  <?php             // récupère la dernière donnée disponible pour chaque champ 
  $reponse = $bdd_Read->prepare("SELECT * FROM donnees_capteurs ORDER BY ID DESC LIMIT 0,1");   
  ?>

    <!-- Inclusion du Haut de Page-->
    <p><?php include('./includes/header.html'); ?></p>


    <form style="text-align: center; opacity: 1; color: white; background-image: url('./images/Fond_Portfolio2.jpg'); width: 500px; border-radius: 20px; margin-bottom: 20px;"  method="POST" action="Donnees_Instantanees.php"> 
        Actualisation de la page toutes les <input type="texte" style="color: black; text-align: center; " value="<?php echo $_SESSION['rafraich']; ?>" maxlength="2" size="2" name="Rafraich"></input> minutes 
        <button type="submit" name="Valider" class="btn btn-lg btn-success">Valider</button>
    </form>
    <div class="container" >
            <!-- Nouvelle Colonne -->
        
        <div class="row" >
            <div class="col-md-3 portfolio-item" >   <!-- tout les blocs de ce type sont fait de la même manière, mais avec des valeurs différentes -->
                 <br>
                <h2 style="text-align: center; opacity: 1; color: white; ">
                Température Exterieure
                </h2>
                
                
                <h3 style="text-align: center; opacity: 1; color: white;  ">
                <p>
                    <?php
                                $reponse->execute();
                                while ($donnees = $reponse->fetch()) // tant que lrésultat de la requète contient des données
                                {
                                    echo $donnees['Tempe_Out_C'];        /* affichage de la valeur du champ Tempe_Out_C en cours */
                                }
                    ?>
                      °C
                     
                <h3 style="text-align: center; opacity: 1; color: white; ">
                <p>
                    <?php
                                $reponse->execute();
                                while ($donnees = $reponse->fetch())
                                {
                                    echo $donnees['Tempe_Out_F'];
                                }
                    ?>
                      °F
              </p>
                </h3>
              </p>
                </h3>

            </div>
        
            <div class="col-md-3 portfolio-item" >
                
                 <br>
                <h2 style="text-align: center; opacity: 1; color: white; ">
                Température Intérieure
                </h2>
                
                
                <h3 style="text-align: center; opacity: 1; color: white; ">
                <p>
                    <?php
                                $reponse->execute();
                                while ($donnees = $reponse->fetch())
                                {
                                    echo $donnees['Tempe_In_C'];
                                }
                    ?>
                      °C
              </p>
                </h3>
               
                <h3 style="text-align: center; opacity: 1; color: white; ">
                <p>
                    <?php
                                $reponse->execute();
                                while ($donnees = $reponse->fetch())
                                {
                                    echo $donnees['Tempe_In_F'];
                                }
                    ?>
                      °F
              </p>
                </h3>
                
            </div>
          
       
        <div class="col-md-3 portfolio-item" >
                 <br>
                <h2 style="text-align: center; opacity: 1; color: white; ">
                Température Ressentie
                </h2>
                <br>
                
                <h3 style="text-align: center; opacity: 1; color: white; ">
                <p>
                    <?php
                                $reponse->execute();
                                while ($donnees = $reponse->fetch())
                                {
                                    echo $donnees['Tempe_Ressentie'];
                                }
                    ?>
                      °C
              </p>
                </h3>
            </div> 
        </div>

        <!-- Nouvelle Colonne -->

        <div class="row">
            
            <div class="col-md-3 portfolio-item" >
                 <br>
                <h2 style="text-align: center; opacity: 1; color: white; ">
                Taux d'Humidité Exterieure
                </h2>
                <br>
                
                <h3 style="text-align: center; opacity: 1; color: white; ">
                <p>
                    <?php
                                $reponse->execute();
                                while ($donnees = $reponse->fetch())
                                {
                                    echo $donnees['Tx_Humid_Out'];
                                }
                    ?>
                      %
              </p>
                </h3>
            </div>
            <div class="col-md-3 portfolio-item" >
                 <br>
                <h2 style="text-align: center; opacity: 1; color: white; ">
                Taux d'Humidité Interieure
                </h2>
                <br>
                
                <h3 style="text-align: center; opacity: 1; color: white; ">
                <p>
                    <?php
                                $reponse->execute();
                                while ($donnees = $reponse->fetch())
                                {
                                    echo $donnees['Tx_Humid_In'];
                                }
                    ?>
                      %
              </p>
                </h3>
            </div>
          
        
            <div class="col-md-3 portfolio-item" >
                 <br>
                <h2 style="text-align: center; opacity: 1; color: white; ">
                Pression Atmosphérique
                </h2>
                <br>
                
                <h3 style="text-align: center; opacity: 1; color: white; ">
                <p>
                    <?php
                                $reponse->execute();
                                while ($donnees = $reponse->fetch())
                                {
                                    echo $donnees['Press_Atm_hPa'];
                                }
                    ?>
                      hPa
              </p>
                </h3>
            </div>
        </div>

        <!-- Nouvelle Colonne -->

        <div class="row">
            <div class="col-md-3 portfolio-item" >
                 <br>
                <h2 style="text-align: center; opacity: 1; color: white; ">
                Pluviométrie
                </h2>
                <br>
                
                <h3 style="text-align: center; opacity: 1; color: white; ">
                <p>
                    <?php
                                $reponse->execute();
                                while ($donnees = $reponse->fetch())
                                {
                                    echo $donnees['Pluvio'];
                                }
                    ?>
                      mm/m²
              </p>
                </h3>
            </div>
           <div class="col-md-3 portfolio-item">
                <br>
                <h2 style="text-align: center; opacity: 1; color: white; ">
                Vitesse du Vent
                </h2>
                <br>
                
                <h3 style="text-align: center; opacity: 1; color: white; ">
                <p>
                    <?php
                                $reponse->execute();
                                while ($donnees = $reponse->fetch())
                                {
                                    echo $donnees['Vitesse_Vent'];
                                }
                    ?>
                      km/h
              </p>
                </h3>
                
            </div>
            <div class="col-md-3 portfolio-item">
                <br>
                <h2 style="text-align: center; opacity: 1; color: white; ">
                Sens du Vent
                </h2>
                <br>
                
                <h3 style="text-align: center; opacity: 1; color: white; ">
                <p>
                    <?php
                                $reponse->execute();
                                while ($donnees = $reponse->fetch())
                                {
                                    echo $donnees['Sens_Vent'];
                                }
                    ?>
                      
                </p>
                </h3>
                
            </div>
          
        </div>
 
    </div>

      <!-- Fichiers Javascript de Bootstrap--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./bootstrap/jquery.min.js"><\/script>')</script>
    <script src="./bootstrap/jquery.js"></script>
    <script src="./bootstrap/bootstrap.min.js"></script>

</body>

</html>
