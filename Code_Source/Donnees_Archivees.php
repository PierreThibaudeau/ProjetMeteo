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

    <title>Données Archivées</title>

    <!-- Fichiers Bootstrap -->
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="./bootstrap/ie-emulation-modes-warning.js"></script>

    <!--fichier css pour l'armature de la page -->
    <link href="./css/offcanvas.css" rel="stylesheet">  
      
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
 
    <!-- Fichier javascript pour les apparitions/disparitions liées aux bouttons-->
    <script type="text/javascript" src="./javascript/Visibility.js"></script>
    
  </head>

  <body>

    <?php
      if(isset($_POST['Valider']))                    // Modification des valeurs des inputs si le bouton "valider" à été appuyé
      {
          $Freq_J= $_POST['Freq_J'];                  // La valeur de la fréquence en Jour prend la valeur entrée dans le champ input lié
          $Freq_H= $_POST['Freq_H'];                  // La valeur de la fréquence en Heures prend la valeur entrée dans le champ input lié
          $Freq_M= $_POST['Freq_M'];                  // La valeur de la fréquence en Minutes prend la valeur entrée dans le champ input lié
          $Intervalle_D= $_POST['Intervalle_D'];      // La Date de Début des relevés
          $Intervalle_F= $_POST['Intervalle_F'];      // La Date de Fin des relevés
          $Intervalle_D_H = $_POST['Intervalle_D_H']; // Le Timer de Début des relevés
          $Intervalle_F_H = $_POST['Intervalle_F_H']; // Le Timer de Fin des relevés     




      } 
      else                                             // Valeurs par défaut des inputs pour le 1er chargement de la page
      {
          $Freq_J= "0";                                // Valeur par défaut de la fréquence en Jour
          $Freq_H= "1";                                // Valeur par défaut de la fréquence en Heure
          $Freq_M= "0";                                // Valeur par défaut de la fréquence en Minutes 
          $Intervalle_D= date('Y-m-d',time());         // Valeur par défaut de la Date de Début
          $Intervalle_F= date('Y-m-d',time());         // Valeur par défaut de la Date de Fin 
          $temp_time= mktime(00,00);                   // Stockage dans un variable de la valeur "Minuit"
          $Intervalle_D_H=date('H:i', $temp_time);     // Valeur par défaut du Timer de Début
          $Intervalle_F_H= date('H:i',time());         // Valeur pa défaut du Timer de Fin

      }

          $date_d = date_parse($Intervalle_D);        // Explose la Date de Début en plusieurs valeurs
          $Day_d = $date_d['day'];                    // Stockage dans une variable de la valeur du Jour
          $Month_d = $date_d['month'];                // Stockage dans une variable de la valeur du Mois
          $Year_d = $date_d['year'];                  // Stockage dans une variable de la valeur de l'Année
          

          $date_f = date_parse($Intervalle_F);        // Explose la Date de Fin en plusieurs valeurs
          $Day_f = $date_f['day'];                    // Stockage dans une variable de la valeur du Jour
          $Month_f = $date_f['month'];                // Stockage dans une variable de la valeur du Mois
          $Year_f = $date_f['year'];                  // Stockage dans une variable de la valeur de l'Année
          
          $date_d_h = date_parse($Intervalle_D_H);    // Explose le Timer de Début en plusieurs valeurs
          $Hour_d = $date_d_h['hour'];                // Stockage dans une variable de la valeur des Heures
          $Minute_d = $date_d_h['minute'];            // Stockage dans une variable de la valeur des Minutes
          $Second_d = $date_d_h['second'];            // Stockage dans une variable de la valeur des Secondes
         

          $date_f_h = date_parse($Intervalle_F_H);    // Explose le Timer de Fin en plusieurs valeurs
          $Hour_f = $date_f_h['hour'];                // Stockage dans une variable de la valeur des Heures
          $Minute_f = $date_f_h['minute'];            // Stockage dans une variable de la valeur des Minutes
          $Second_f = $date_f_h['second'];            // Stockage dans une variable de la valeur des Secondes
          
   
      
      $datetime1 = date('Y-m-d H:i:s', strtotime("$Intervalle_D $Intervalle_D_H"));     // Création de la Date+Timer de Début en format AAAA/MM/JJ HH/mm/ss
      $datetime2 = date('Y-m-d H:i:s', strtotime("$Intervalle_F $Intervalle_F_H"));     // Création de la Date+Timer de Fin en format AAAA/MM/JJ HH/mm/ss
      $datetime3=strtotime($datetime1);                 // Création du Timestamp lié à la Date+Timer de Début
      $datetime4=strtotime($datetime2);                 // Création du Timestamp lié à la Date+Timer de Fin
      $Interval = abs($datetime3 - $datetime4);         // Calcul du Timestamp lié à l'intervalle entre Date+Timer de Début et de Fin 
 
      ?><br><?php

      $Minutes=0;
      $Heures=0;
      $Jours=0;         

      while ($Interval > 60)                // Calcul du nombre de Minute dans le Timestamp  
      {
        while ($Interval > 3600)            // Calcul du nombre d'Heures dans le Timestamp
        {
          while ($Interval > 86400)         // Calcul du nombre de Jours dans le Timestamp
          {
            $Interval = $Interval-86400;    
            $Jours = $Jours+1;              
          }
          $Interval = $Interval-3600;
          $Heures = $Heures+1;
        }
        $Interval = $Interval-60;
        $Minutes = $Minutes+1;
      }

      $Timestamp_Interval= 86400*$Jours + 3600*$Heures + 60*$Minutes;    // Reformation du Timestamp, Arrondi à la minute

?><br><?php

      $Timestamp_Frequence = 86400*$Freq_J + 3600*$Freq_H + 60*$Freq_M;  // Création d'un Timestamp lié à la fréquence

?><br><?php

      $Limite_Valeurs=$Timestamp_Interval/$Timestamp_Frequence;          // Détermine le nombre de valeurs à afficher
      $Limite_Valeurs=round($Limite_Valeurs)+1;                            // Arrondi de la valeur à l'unité

?><p><?php include('./includes/Connect.html'); ?></p><?php


      $TableauMoyenne=array();                           //Tableau qui accueillera les valeurs moyennes
      $TableauStock=array();                             //Tableau temporaire pour stocker les valeurs intermédiaires
      $Timestamp_Depart=round($datetime3/60)*60;         
      $Limite_Valeurs2 = $Timestamp_Frequence/60;        //Calcul du nombre de valeurs incluses dans une moyenne
      $i=0;
      $j=1;

      $delete_request=$bdd_Write->prepare("DELETE FROM calcul_tempo");   //remet à zéro la table temporaire qui accueille les moyennes
      $alter_request=$bdd_Write->prepare("ALTER TABLE calcul_tempo AUTO_INCREMENT=1 ");  //remet à 0 l'incrémentation des id de la table
      $delete_request->execute(); 
      $alter_request->execute();

      while ($i<$Limite_Valeurs)         //tant que la limite globale n'est pas atteinte
      {
          $Timestamp_Inc=$Timestamp_Depart;
          $Inc_Tab=date('Y-m-d H:i', $Timestamp_Inc);
          $TableauStock[0]='"'.$Inc_Tab.'"';      //première valeur (date&Heure de début)

          $Somme_Out_C=0;
          $Somme_Out_F=0;
          $Somme_In_C=0;
          $Somme_In_F=0;
          $Somme_Ressentie=0;
          $Somme_Tx_Humid_Out=0;
          $Somme_Tx_Humid_In=0;
          $Somme_Press=0;
          $Somme_Pluvio=0;
          $Somme_Vitesse_Vent=0;

          while ($j<$Limite_Valeurs2)            //tant que la limite de valeurs incluse dans un moyenne n'est pas atteinte
          {
              $Timestamp_Inc=$Timestamp_Depart+$j*60;            //Incrémentation de la date toutes les minutes
              $Inc_Tab=date('Y-m-d H:i', $Timestamp_Inc);     
              $TableauStock[$j]='"'.$Inc_Tab.'"';             //Stockage des valeurs à moyenner dans le tableau
              $j++;
          }
          $Implode_TableauStock=implode(',', $TableauStock);  //formatage du tableau selon SQL

          $select_request=$bdd_Read->prepare("SELECT * FROM donnees_capteurs WHERE DateTime IN ($Implode_TableauStock)");  
                                            //Recherche des valeurs des capteurs quand la date est égale à celle calculée
          $select_request->execute();
          $k=0;
          while ($donnees= $select_request->fetch())   //tant qu'il y a des valeurs disponibles
          {
            $Somme_Out_C=$Somme_Out_C+$donnees['Tempe_Out_C'];    //ajoute à la somme la valeur courante
            $Somme_Out_F=$Somme_Out_F+$donnees['Tempe_Out_F'];
            $Somme_In_C=$Somme_In_C+$donnees['Tempe_In_C'];
            $Somme_In_F=$Somme_In_F+$donnees['Tempe_In_F'];
            $Somme_Ressentie=$Somme_Ressentie+$donnees['Tempe_Ressentie'];
            $Somme_Tx_Humid_Out=$Somme_Tx_Humid_Out+$donnees['Tx_Humid_Out'];
            $Somme_Tx_Humid_In=$Somme_Tx_Humid_In+$donnees['Tx_Humid_In'];
            $Somme_Press=$Somme_Press+$donnees['Press_Atm_hPa'];
            $Somme_Pluvio=$Somme_Pluvio+$donnees['Pluvio'];
            $Somme_Vitesse_Vent=$Somme_Vitesse_Vent+$donnees['Vitesse_Vent'];


            $k++;
          }
          if ($k > 0) 
          {

            $Moyenne_Out_C  =       $Somme_Out_C          /$k;   //division de la somme par le nombre de valeurs (=moyenne)
            $Moyenne_Out_F=         $Somme_Out_F          /$k; 
            $Moyenne_In_C=          $Somme_In_C           /$k; 
            $Moyenne_In_F=          $Somme_In_F           /$k; 
            $Moyenne_Ressentie=     $Somme_Ressentie      /$k; 
            $Moyenne_Tx_Humid_Out=  $Somme_Tx_Humid_Out   /$k; 
            $Moyenne_Tx_Humid_In=   $Somme_Tx_Humid_In    /$k; 
            $Moyenne_Press=         $Somme_Press          /$k; 
            $Moyenne_Pluvio=        $Somme_Pluvio            ;  
            //la pluviométrie fonctionne différemment, c'est une somme et non une moyenne
            $Moyenne_Vitesse_Vent=  $Somme_Vitesse_Vent   /$k; 

          }
          else
          {
            $Moyenne_Out_C=         $Somme_Out_C        ;
            $Moyenne_Out_F=         $Somme_Out_F        ;
            $Moyenne_In_C=          $Somme_In_C         ;
            $Moyenne_In_F=          $Somme_In_F         ;
            $Moyenne_Ressentie=     $Somme_Ressentie    ;
            $Moyenne_Tx_Humid_Out=  $Somme_Tx_Humid_Out ;
            $Moyenne_Tx_Humid_In=   $Somme_Tx_Humid_In  ;
            $Moyenne_Press=         $Somme_Press        ;
            $Moyenne_Pluvio=        $Somme_Pluvio       ;
            $Moyenne_Vitesse_Vent=  $Somme_Vitesse_Vent ;

          }

          $insert_request = $bdd_Write->prepare("INSERT INTO calcul_tempo ( Tempe_Out_C, Tempe_Out_F,  Tempe_In_C, Tempe_In_F, Tempe_Ressentie, Tx_Humid_Out, Tx_Humid_In, Press_Atm_hPa, Pluvio, Vitesse_Vent) VALUES ( '".$Moyenne_Out_C."', '".$Moyenne_Out_F."', '".$Moyenne_In_C."', '".$Moyenne_In_F."', '".$Moyenne_Ressentie."', '".$Moyenne_Tx_Humid_Out."', '".$Moyenne_Tx_Humid_In."', '".$Moyenne_Press."', '".$Moyenne_Pluvio."', '".$Moyenne_Vitesse_Vent."')"); 
          //insertion des valeurs dans la BdD

          $insert_request->execute();

          $Timestamp_Depart=$Timestamp_Depart+($j*60);

          
          $i++;
      }


      ?><br>



      <!-- inputs secret pour récupérer les valeurs à partir du javascript dans "Graph.html" -->

      <input type="hidden" id="In_Date_Year" value="<?php echo $Year_d;?>"> </input>  
      <input type="hidden" id="In_Date_Month" value="<?php echo $Month_d;?>"> </input>
      <input type="hidden" id="In_Date_Day" value="<?php echo $Day_d;?>"> </input> 
      <input type="hidden" id="In_Date_Hour" value="<?php echo $Hour_d;?>"> </input>  
      <input type="hidden" id="In_Date_Min" value="<?php echo $Minute_d;?>"> </input>
      <input type="hidden" id="In_Date_Year_f" value="<?php echo $Year_f;?>"> </input>  
      <input type="hidden" id="In_Date_Month_f" value="<?php echo $Month_f;?>"> </input>
      <input type="hidden" id="In_Date_Day_f" value="<?php echo $Day_f;?>"> </input> 

<?php 
      $Freq_Totale= $Timestamp_Frequence*1000;
      ?>

      <!-- Inclusion du Haut de Page-->
      <p><?php include('./includes/header.html'); ?></p>
    
      <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
          <div  class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
              <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Options</button>
            </p>
          <div  class="jumbotron" id="jumbotron">
            <h1> 
              <h3 >Options d'affichage</h3>  <!-- Création des Bouttons d'apparition/disparition du tableau & graphiques-->
                <a href="#" id="type_Affichage1" onclick="javascript:afficher_cacher_Graph_Tab('Affichage1');" name="type_Affichage" type="radio"><button class="btn btn-lg btn-success">Tableau</button></a> <!--Appel   du script pour alterner vers le tableau -->    
                <a href="#" id="type_Affichage2" onclick="javascript:afficher_cacher_Graph_Tab('Affichage2');" name="type_Affichage" type="radio"><button class="btn btn-lg btn-success" >Graphique</button></a> <!-- Appel du script pour alterner vers le graph -->  
            </h1>
            <div id="Affichage1" >

            <!-- Inclusion du Fichier de Connexion à la BdD-->
            

              <div id="dvData" class="table-responsive"> 
                <table class="table table-bordered table-condensed">
                  <caption> Données Archivées </caption>

                    <!-- création de la première ligne du tableau (légende) -->
                    <tr>
                      <th style="padding-right:30px; padding-left:30px;"> Date</th>
                      <th>Température Extérieure en °C</th>
                      <th>Température Extérieure en °F</th>
                      <th>Température Intérieure en °C</th>
                      <th>Température Intérieure en °F</th>
                      <th>Température Ressentie en °C</th>
                      <th>Taux d'Humidité Extérieure en %</th>
                      <th>Taux d'Humidité Intérieure en %</th>
                      <th>Pression Relative en hPa</th>
                      <th>Pluviométrie en mm/m²</th>
                      <th>Vitesse du vent en km/h</th>
                      <th>Sens du Vent</th>
                    </tr>

                  <?php
                    $i3=1;
                    $Somme_Cumul3= $datetime1;                                             // Création d'une varible contenant la Date+Timer de Début
                    /* Création de Variables */
                    $Somme_Premier3= 0;       // Stockera la première Date Bonne                                             
                    $Somme_Cumul_Date3=0;     // Stockera chacunes des dates bonnes l'une après l'autre
                    $Somme_Cumul_TStamp3=0;   // Stockera une date bonne sous forme de Timestamp

                    $Somme_Premier3=strtotime($Somme_Cumul3);                               // Converti le Date+Timer de Début en Timestamp
                    $Somme_Premier3 = round($Somme_Premier3/60)*60;                         // Arrondi le Timestamp à la minute
                    $Tableau_Comparatif3= array();                                         // Création du Tableau de Stockage de toutes les Bonnes Dates
                    $Somme_Cumul_Date3 = date('Y-m-d H:i:s', $Somme_Premier3);              // Changement du Timestamp en Date Formatée
                    $Tableau_Comparatif3[0]= '"'.$Somme_Cumul_Date3.'"';                    // Inclusion dans le Tableau de la Première Date Bonne
                    $Somme_Cumul_TStamp3=strtotime($Somme_Cumul3);                          // Converti le Date+Timer de Début en Timestamp
                    

                    while ($i3 < $Limite_Valeurs)                                          // Execute les Instruction tant que la limite des Dates Bonnes n'est pas atteinte
                    {
                        $Somme_Cumul_TStamp3 = $Somme_Cumul_TStamp3 + $Timestamp_Frequence; // Ajoute à la Date Bonne précédente la Fréquence en Timestamp
                        $Somme_Cumul_TStamp3 = round($Somme_Cumul_TStamp3/60)*60;           // Arrondi à la minutes
                        $Somme_Cumul_Date3 = date('Y-m-d H:i:s', $Somme_Cumul_TStamp3);     // Reformation du Timestamp en Date Formatée
                        $Tableau_Comparatif3[$i3]= '"'.$Somme_Cumul_Date3.'"';               // Inclusion de la Date Bonne dans le Tableau
                        $i3++;                                                             // Incrémentation
                    }

                    $Tab_Final3 = implode(',', $Tableau_Comparatif3);                       // Sépare les valeurs du Tableau avec des ";" en le stockant sous forme de string

                    ?> <!-- Inclusion du Fichier de Connection à la BdD "Connect.html" -->
                    <p><?php include('./includes/Connect.html'); ?></p><?php

                    ?><!-- Demande à la BdD toutes les valeurs correspondant au Dates Bonnes --><?php
                    $reponse = $bdd_Read->prepare("SELECT * FROM donnees_capteurs WHERE DateTime IN ($Tab_Final3) LIMIT $Limite_Valeurs ");
                    $reponse->execute();

                    while ($donnees = $reponse->fetch())   // Tant qu'il y a des valeurs correspondantes à des Dates Bonnes
                    {
                  ?>
                      <!-- Création en boucle des lignes du tableau en fonction de la bdd-->
                      <tr>
                        <td><?php echo $donnees['DateTime'];?></td>
                        <td><?php echo $donnees['Tempe_Out_C'];?></td>
                        <td><?php echo $donnees['Tempe_Out_F'];?></td>
                        <td><?php echo $donnees['Tempe_In_C'];?></td>
                        <td><?php echo $donnees['Tempe_In_F'];?></td>
                        <td><?php echo $donnees['Tempe_Ressentie'];?></td>
                        <td><?php echo $donnees['Tx_Humid_Out'];?></td>
                        <td><?php echo $donnees['Tx_Humid_In'];?></td>    
                        <td><?php echo $donnees['Press_Atm_hPa'];?></td>
                        <td><?php echo $donnees['Pluvio'];?></td>
                        <td><?php echo $donnees['Vitesse_Vent'];?></td>
                        <td><?php echo $donnees['Sens_Vent'];?></td>
                      </tr>
                  <?php
                    }
                  ?>

                </table>
              </div>
              <a  id ="export" role='button'>
              <button  class='btn btn-lg btn-default'>
                Exporter en CSV
              </button>
              </a>
            </div>  
                    <!-- Fonction Javascript "Exporter en CSV" -->
            <script type='text/javascript' src='https://code.jquery.com/jquery-1.11.0.min.js'></script>
            <script type='text/javascript'>
           
              $(document).ready(function () 
              {
                console.log("HELLO")
                function exportTableToCSV($table, filename) 
                {
                  var $headers = $table.find('tr:has(th)')
                      ,$rows = $table.find('tr:has(td)')
                      ,tmpColDelim = String.fromCharCode(11) 
                      ,tmpRowDelim = String.fromCharCode(0) 
                      ,colDelim = '","'
                      ,rowDelim = '"\r\n"';
                      var csv = '"';
                      csv += formatRows($headers.map(grabRow));
                      csv += rowDelim;
                      csv += formatRows($rows.map(grabRow)) + '"';
                      var csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);
                  $(this)
                      .attr(
                      {
                        'download': filename
                        ,'href': csvData
                      });
                  function formatRows(rows)
                  {
                    return rows.get().join(tmpRowDelim)
                      .split(tmpRowDelim).join(rowDelim)
                      .split(tmpColDelim).join(colDelim);
                  }
                  function grabRow(i,row)
                  {         
                    var $row = $(row);
                    var $cols = $row.find('td'); 
                    if(!$cols.length) $cols = $row.find('th');  
                      return $cols.map(grabCol)
                        .get().join(tmpColDelim);
                  }
                  function grabCol(j,col)
                  {
                    var $col = $(col),
                      $text = $col.text();
                    return $text.replace('"', '""'); 
                  }
                }
                $("#export").click(function (event) 
                {
                  var outputFile = window.prompt("Quel nom voulez-vous donner à votre fichier?") || 'export';
                  outputFile = outputFile.replace('.csv','') + '.csv'
                  exportTableToCSV.apply(this, [$('#dvData>table'), outputFile]);
                });
              });
            </script>

            <!-- Inclusion du Fichier des Graphiques -->
            <p><?php include('./includes/Graph.html'); ?></p>
  
            <div id="Affichage2" >     
   
              <div id="Fire_Button_On">   <!-- Boutton pour Montrer le Graph Température -->
                <a href="#">
                  <button class="btn btn-lg btn-success" style="width: 200px" onclick="javascript:afficher_cacher_Graphs('Fire_Button_On');">
                    Montrer Température
                  </button>
                </a>
              </div>
              <div id="Fire_Button_Off">  <!-- Boutton pour Cacher le Graph Température -->
                <a href="#">
                  <button class="btn btn-lg btn-success" style="width: 200px" onclick="javascript:afficher_cacher_Graphs('Fire_Button_Off')
                  ;" >Cacher Température
                </button>
              </a>
            </div>

              <div id="Wind_Button_On">   <!-- Boutton pour Montrer le Graph Eolien -->
                <a href="#">
                  <button class="btn btn-lg btn-success" style="width: 200px"  onclick="javascript:afficher_cacher_Graphs('Wind_Button_On');">
                    Montrer Vent
                  </button>
                </a>
              </div>
              <div id="Wind_Button_Off">  <!-- Boutton pour CacherAfficher le Graph Eolien -->
                <a href="#">
                  <button class="btn btn-lg btn-success" style="width: 200px"  onclick="javascript:afficher_cacher_Graphs('Wind_Button_Off');"
                  >Cacher Vent
                </button>
              </a>
            </div>

              <div id="Water_Button_On">  <!-- Boutton pour Montrer le Graph Pluviométrie -->
                <a href="#">
                  <button class="btn btn-lg btn-success" style="width: 200px"  onclick="javascript:afficher_cacher_Graphs('Water_Button_On');"
                  >Montrer Pluviométrie
                </button>
              </a>
            </div>
              <div id="Water_Button_Off"> <!-- Boutton pour Cacher le Graph Pluviométrie -->
                <a href="#">
                  <button class="btn btn-lg btn-success" style="width: 200px"  onclick="javascript:afficher_cacher_Graphs('Water_Button_Off');
                  ">Cacher Pluviométrie
                </button>
              </a>
            </div>

              <div id="Earth_Button_On">  <!-- Boutton pour Montrer le Graph Atmosphérique -->
                <a href="#">
                  <button class="btn btn-lg btn-success" style="width: 200px" onclick="javascript:afficher_cacher_Graphs('Earth_Button_On');"
                  >Montrer Pression
                </button>
              </a>
            </div>
              <div id="Earth_Button_Off"> <!-- Boutton pour Cacher le Graph Atmosphérique -->
                <a href="#">
                  <button class="btn btn-lg btn-success" style="width: 200px" onclick="javascript:afficher_cacher_Graphs('Earth_Button_Off');
                  ">Cacher Pression
                </button>
              </a>
            </div>
      

              
              <div id="Fire_Container">             <!-- Contient le Graph Températures -->
                <h1>Températures</h1>
                <div id="Tempe_Chart" ></div>
              </div>  
                
              <div style="height: 20px;"></div>     

              <div id="Wind_Container">             <!-- Contient le Graph Eolien -->
                <h1>Vent</h1>
                <div id="Vent_Chart"></div>
              </div>  

              <div style="height: 20px;"></div> 

              <div id="Water_Container">            <!-- Contient le Graph Pluviométrie -->
                <h1>Pluviométrie</h1>
                <div id="Water_Chart" ></div>
              </div>
                
              <div style="height: 20px;"></div> 

              <div id="Earth_Container">            <!-- Contient le Graph Atmosphérique -->
                <h1>Pression Atmosphérique</h1>
                <div id="Pression_Chart" ></div>
              </div>


            </div> 
          </div>          
        </div><!--/.col-xs-12.col-sm-9-->
        
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">

          <!-- Appel de la fonction qui permet d'alterner entre graph et tableau pour le premier chargement de la page-->
          <script type="text/javascript">afficher_cacher_Graph_Tab('first_load');</script> 
          <script type="text/javascript">afficher_cacher_Graphs('first_load');</script>


          <!-- Création de la Zone de Choix de Dates/Fréquence-->
       
          <div class="btn btn-lg btn-warning" > 
            <form method="POST" action="Donnees_Archivees.php"> 
              <p>Mesures du: </p>
              <input  id="Intervalle_Debut" type="date" style="color:#000;" value="<?php echo $Intervalle_D; ?>" name="Intervalle_D"></input> <!-- Champ Date début -->
              <p> au: </p>
              <input id="Intervalle_Fin" type="date" style="color:#000;" value="<?php echo $Intervalle_F; ?>" name="Intervalle_F"></input> <!-- Champ Date Fin-->
              <p> de: </p>
              <input id="Intervalle_Debut_Heure" type="time" style="color:#000;" value="<?php echo $Intervalle_D_H; ?>" name="Intervalle_D_H"></input> <!-- Champ Date Fin-->
              <p> à: </p>
              <input id="Intervalle_Fin_Heure" type="time" style="color:#000;" value="<?php echo $Intervalle_F_H; ?>" name="Intervalle_F_H"></input> <!-- Champ Date Fin-->
              <hr>
              <p>Fréquence d'acquisition:</p>
              <input id="Freq_Acqui_Jour" type="texte" maxlength="2" size="5" value="<?php echo $Freq_J; ?>" style="color:#000;" name="Freq_J" > &nbsp&nbsp Jour(s)</input> <!-- Champ Fréquence en Jour-->
              <br>
              <input id="Freq_Acqui_Heure" type="texte" maxlength="2" size="5" value="<?php echo $Freq_H; ?> " style="color:#000;" name="Freq_H" > Heure(s)</input> <!-- Champ fréquence en Heure--> 
              <br>
              <input id="Freq_Acqui_Min" type="texte" maxlength="2" size="5" value="<?php echo $Freq_M; ?>" style="color:#000;" name="Freq_M" > Minute(s)</input> <!-- Champ fréquence en minutes -->
              <hr>
             
              <button type="submit" name="Valider" class="btn btn-lg btn-success">Valider</button><!-- Création du boutton valider -->
            </form>
          </div>       
        </div>
      </div>
    </div>
  </div>
  
  <!-- Fichiers Javascript de Bootstrap--> 
  <script>window.jQuery || document.write('<script src="./bootstrap/jquery.min.js"><\/script>')</script>
  <script src="./bootstrap/bootstrap.min.js"></script>
  <script src="./bootstrap/ie10-viewport-bug-workaround.js"></script>
  <script src="./javascript/offcanvas.js"></script>
  </body>
</html>
