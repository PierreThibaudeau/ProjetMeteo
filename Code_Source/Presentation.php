<?php
session_start(); 
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

    <title>Accueil</title>

    <!-- fichiers bootstrap -->
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="./bootstrap/ie-emulation-modes-warning.js"></script>

    <!-- fichier css pour l'armature de la page -->
    <link href="./css/portfolio-item.css" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fichier javascript pour les apparitions/disparitions liées aux bouttons-->
    <script type="text/javascript" src="./javascript/Visibility.js"></script>

</head>

<body>

    <!-- inclusion du Haut de page -->
     <p><?php include('./includes/header.html'); ?></p>

    <div class="container">
   	    <div id="Affichage1">
  
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Présentation du projet   
                        
                    </h1>
                </div>
            </div>

            <div class="row">

                <div class="col-md-8">
                    <img class="img-responsive" src="./images/Sat_Collège.jpg" style=" border-width: 15px; border-radius: 20px" alt="">
                </div>

                <div class="col-md-4">
                    <h3>Description</h3>
                    <p>&nbsp&nbsp&nbspLes professeurs de sciences du collège LA PETITE LANDE à Rezé, désirent disposer de données météorologiques relatives à cet établissement afin d'exploiter ces données avec leurs élèves pour des activités pédagogiques.
                    <br><br>
                    &nbsp&nbsp&nbspM.FREARD, professeur de technologie et passioné de nouvelles technologies, cherchait un partenaire capable de concevoir un système simple de station météo, à base de technologies OpenSource, économique, modulaire, facile à installer et facile d'utilisation. C'est pourquoi il a confié à notre section SN le soin de concevoir et de réaliser ce système.
                    <br><br>
                    &nbsp&nbsp&nbspLe partenaire souhaiterait que ces données soit visibles sur un site Web et que l'on puisse les exporter en fonction de paramètres choisis ("Je veux la température moyenne journalière du 15 juin au 15 juillet"). Ainsi, par simple navigateur Web, les élèves pourront, en sciences, récupérer simplement des données météorologiques propres à leur lieu d'étude et les exploiter dans un tableur.
                    </p>
                    <h3>Informations sur le collège :</h3>
                    <ul>
                        <li>Adresse: Rue Georges Berthomé 44404</li>
                        <li>Télephone: 02 40 75 48 50 </li>
                        <li>Coordonnées GPS: <br>&nbsp&nbsp&nbsp Latitude: 47.1787271 <br>&nbsp&nbsp&nbsp Longitude: -1.5529120999999577</li>
                        
                    </ul>
                </div>

            </div>
        </div>    
        <div id="Affichage2">
            <div class="row" >
                <div class="col-lg-12">
                    <h1 class="page-header">Présentation de l'Équipe  
                        
                    </h1>
                </div>
            </div>

            <div class="row">

                <div class="col-md-8">
                    <img class="img-responsive" src="./images/Vue_Appert.jpg" alt="">
                </div>

                <div class="col-md-4">
                    
                    <p> 
                		<div class="col-sm-3 col-xs-6">
                			<h4 style="text-align: center;">BOURRIAUD Alexandre</h4>
                		    
                		    <a href="#" id="type_Affichage1" onclick="javascript:afficher_cacher_Accueil('Affichage1');" name="type_Affichage" type="radio">
                		    	
                		    		<img class="img-responsive portfolio-item" src="" alt="">
                		   		
                		   	</a>
                		</div>


                	</p>
                	<p>
                		<div class="col-sm-3 col-xs-6">
                			<h4 style="text-align: center;">THIBAUDEAU Pierre</h4>
                		    
                		    <a href="#" id="type_Affichage1" onclick="javascript:afficher_cacher_Accueil('Affichage1');" name="type_Affichage" type="radio">
                		    	
                		    		<img class="img-responsive portfolio-item" src="" alt="">
                		   		
                		   	</a>
                		</div>
                		

                    </p>
                    <div class="col-sm-3 col-xs-6">
                    <h3>Informations</h3>
                    <ul>
                        <li>Sous-Système: Acquisition</li>
                        
                        
                       
                    </ul>
                    </div>

                    <div class="col-sm-3 col-xs-6">
                    <h3>Informations</h3>
                    <ul>
                        <li>Sous-Système: Exploitation</li>
                        
                        
                        
                    </ul>
                    </div>

                </div>

            </div>
        </div>
        <div id="Affichage3">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Présentation du Sous-système: Acquisition 
                        
                    </h1>
                </div>
            </div>

            <div class="row">

                <div class="col-md-8">
                    <img class="img-responsive" src="./images/Acquisition.JPG" alt="">
                </div>

                <div class="col-md-4">
                    <h3>Description</h3>
                    <p> 
                    	 &nbsp&nbsp&nbsp Afin d'utiliser les données météos relevées par les différents capteurs situés sur la perche WS1080, il était impératif de créer une liaison entre le serveur et la station. La liaison disponible est l'USB.<br><br>
                    	 &nbsp&nbsp&nbsp Grâce à un programme réalisé en C++, qui relève les données dans la mémoire de la station puis qui les stockent sur la base de données du serveur, il est possible de les exploiter
                    	 pour les afficher sur le site web. 
                    </p>
                    <h3>Outils utilisés</h3>
                    <ul>
                        <li>Équipement: Raspberry Pi 2, WS1080</li>
                        <li>Language de programmation: c++</li>
                        <li>Logiciel: Qt Creator</li>
                        <li>Librairie utilisée: LibUsbX 1.0.20</li>
                        
                    </ul>
                <h3>Cahier des charges</h3>
                    <ul>
                        <li>Données à récupérer: 
                        	<br>&nbsp&nbsp&nbsp - Température en °C
                        	<br>&nbsp&nbsp&nbsp - Température en °F
                        	<br>&nbsp&nbsp&nbsp - Pression Atmosphérique Absolue en inHg
                        	<br>&nbsp&nbsp&nbsp	- Pression Atmosphérique Relative en hPa
                        	<br>&nbsp&nbsp&nbsp	- Vitesse du Vent en Km/h
                        	<br>&nbsp&nbsp&nbsp	- Sens du vent
                        	<br>&nbsp&nbsp&nbsp	- Humidité de l'air en ?
                        	<br>&nbsp&nbsp&nbsp	- Pluviométrie en ?
                        </li>
                    </ul>
                    <h3>Contraintes</h3>
                    <ul>             

                    	<li> Une documentation précise et complète sera rédigée à l'issue du projet ->>>LINK </li>
                           
                    </ul>

                </div>

            </div>
        </div>
        <div id="Affichage4">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Présentation du Sous-système: Exploitation 
                        
                    </h1>
                </div>
            </div>

            <div class="row">

                <div class="col-md-8">
                    <img class="img-responsive" src="./images/Site_Web.png" alt="">
                </div>

                <div class="col-md-4">
                    <h3>Description</h3>
                    <p>
                    &nbsp&nbsp&nbspLe but de cette partie du projet est la création d'un site web dynamique et intuitif, qui affichera les informations de la station en fonction des besoins de l'utilisateur.<br><br>
                    &nbsp&nbsp&nbspPour simplifier son utilisation et pour l'optimiser de façon à ce qu'il puisse être consulté depuis n'importe quel équipement, j'ai choisit de limiter les actualisation des pages en utilisant au maximum le JavaScript.
                    <br><br>
                    &nbsp&nbsp&nbspBonne Visite ! 
                    </p>
                    <h3>Outils utilisés</h3>
                    <ul>
                        <li>Logiciel Serveur: EasyPhp</li>
                        <li>Framework: Twitter Bootstrap</li>
                        <li>Logiciel de développement: SublimeText</li>
                        <li>Languages de programmation: HTML, CSS, PHP, JavaScript, SQL</li>
                    </ul>
                    <h3>Cahier des charges</h3>
                    <ul>
                        <li>Contenu de la Page: Données du jour
                        	<br>&nbsp&nbsp&nbsp	- Éphéméride
                        	<br>&nbsp&nbsp&nbsp	- Date & Heure
                        	<br>&nbsp&nbsp&nbsp	- Fête du jour
                        	<br>&nbsp&nbsp&nbsp	- Heure de lever & coucher du soleil
                        	<br>&nbsp&nbsp&nbsp	- Phase de la lune
                        </li>
                        <li>Contenu de la Page: Données Instantanées
                        	<br>&nbsp&nbsp&nbsp - Température en °C
                        	<br>&nbsp&nbsp&nbsp - Température en °F
                        	<br>&nbsp&nbsp&nbsp - Pression Atmosphérique Absolue en inHg
                        	<br>&nbsp&nbsp&nbsp	- Pression Atmosphérique Relative en hPa
                        	<br>&nbsp&nbsp&nbsp	- Vitesse du Vent en Km/h
                        	<br>&nbsp&nbsp&nbsp	- Sens du vent
                        	<br>&nbsp&nbsp&nbsp	- Humidité de l'air en ?
                        	<br>&nbsp&nbsp&nbsp	- Pluviométrie en ?
                        </li>
                        <li>Contenu de la Page: Données Archivées
    	                    	<br>&nbsp&nbsp&nbsp Options Disponibles:
    	                    	<br>&nbsp&nbsp&nbsp	- Choix du mode de visualisation (Tableau ou Graphique)
    	                    	<br>&nbsp&nbsp&nbsp	- Choix des données à afficher
    	                    	<br>&nbsp&nbsp&nbsp  - Choix de l'intervalle de mesures
    	                    	<br>&nbsp&nbsp&nbsp  - Choix de la fréquence                     	
                        </li> 
                        <li>Contenu de la Page: Accueil
                        	<br>&nbsp&nbsp&nbsp - Vue aèrienne du collège
                        	<br>&nbsp&nbsp&nbsp - Position des points de mesure sur la photo
                        	<br>&nbsp&nbsp&nbsp - Localisation GPS
                        	<br>&nbsp&nbsp&nbsp	- Adresse postale   
                        </li>
                    </ul>
                    <h3>Contraintes</h3>
                    <ul>             
                    	<li> L'ensemble du site sera "responsive"</li>
                        <li> La base de données sera MySql</li>
                        <li> Les librairies et les éléments extérieurs (Framework & autres) devront êtres sécurisés et fiables</li>
                        <li> Une documentation précise sera fournie à l'issue du projet ->>> LINK</li>     
                    </ul>
                </div>

            </div>
        </div>
           
        <!-- Execution du script lié aux bouttons au premier chargement de page-->
        <script type="text/javascript">afficher_cacher_Accueil('first_load');</script>
            
       <div class="row">

                <div class="col-lg-12">
                    <h3 class="page-header">Related Projects</h3>
                </div>

                <div class="col-sm-3 col-xs-6">
                	<h4 style="text-align: center;">Le Collège La Petite Lande</h4>
                    
                    <a href="#" id="type_Affichage1" onclick="javascript:afficher_cacher_Accueil('Affichage1');" name="type_Affichage" type="radio">
                    	<button class="btn btn-lg btn-success" >
                    		<img class="img-responsive portfolio-item" src="./images/Vue_Aerienne2.png" alt="">
                   		</button>
                   	</a>
                </div>

                <div class="col-sm-3 col-xs-6">
                	<h4 style="text-align: center;">L'Équipe de Developpement</h4>
                    <a href="#" id="type_Affichage2" onclick="javascript:afficher_cacher_Accueil('Affichage2');" name="type_Affichage" type="radio">
                    	<button class="btn btn-lg btn-success" >
                    		<img class="img-responsive portfolio-item" src="./images/Vue_appert2.jpg" alt="">
                   		</button>
                   	</a>
                        
                    
                </div>

                <div class="col-sm-3 col-xs-6">
                	<h4 style="text-align: center;">Sous-système: Acquisition</h4>
                    <a href="#" id="type_Affichage3" onclick="javascript:afficher_cacher_Accueil('Affichage3');" name="type_Affichage" type="radio">
                    	<button class="btn btn-lg btn-success">
                    		<img class="img-responsive portfolio-item" src="./images/Rasberry_ws1080.JPG" alt="">
                    	</button>
                    </a>
                </div>

                <div class="col-sm-3 col-xs-6">
                	<h4 style="text-align: center;">Sous-système: Exploitation</h4>
                    
                    <a href="#" id="type_Affichage4" onclick="javascript:afficher_cacher_Accueil('Affichage4');" name="type_Affichage" type="radio">
                    	<button class="btn btn-lg btn-success">
                    		<img class="img-responsive portfolio-item" src="./images/Imp_Ecran.png" alt="">
                    	</button>
                    </a>    
                </div>

        </div> 

            <hr>
    </div>

      <!-- Fichiers Javascript de Bootstrap--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./bootstrap/jquery.min.js"><\/script>')</script>
    <script src="./bootstrap/bootstrap.min.js"></script>
    <script src="./bootstrap/ie10-viewport-bug-workaround.js"></script>

</body>

</html>
