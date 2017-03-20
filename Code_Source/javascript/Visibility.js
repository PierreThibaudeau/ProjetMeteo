function afficher_cacher_Graph_Tab(id) // Toutes les fonctions de cette page fonctionnent de la même manière
              {
                  if(id=='first_load')
                  {
                    document.getElementById('Affichage2').style.display="none"; //cache le graphique au premier chargement
                  }

                  if(id=='Affichage1')      // Si l'internaute appuie sur Tableau
                  {
                        document.getElementById(id).style.display="block";    // le tableau apparait
                        document.getElementById('Affichage2').style.display="none"; // le graphique disparait              
                  }

                  if(id=='Affichage2')      // Si l'internaute appuie sur Graphique
                  {
                        document.getElementById(id).style.display="block";   // le graphique apparait
                        document.getElementById('Affichage1').style.display="none"; // le tableau disparait
                  }


                  return true;
              }

function afficher_cacher_Accueil(id)
            {
                  if(id=='first_load')
                  {
                    document.getElementById('Affichage2').style.display="none";
                    document.getElementById('Affichage3').style.display="none";
                    document.getElementById('Affichage4').style.display="none";
                  }

                  if(id=='Affichage1')
                  {
                        document.getElementById(id).style.display="block";
                        document.getElementById('Affichage2').style.display="none";
                        document.getElementById('Affichage3').style.display="none";
                        document.getElementById('Affichage4').style.display="none";                    
                  }

                  if(id=='Affichage2')
                  {
                        document.getElementById(id).style.display="block";
                        document.getElementById('Affichage1').style.display="none";
                        document.getElementById('Affichage3').style.display="none";
                        document.getElementById('Affichage4').style.display="none";
                  }

                  if(id=='Affichage3')
                  {
                        document.getElementById(id).style.display="block";
                        document.getElementById('Affichage1').style.display="none";
                        document.getElementById('Affichage2').style.display="none";
                        document.getElementById('Affichage4').style.display="none";
                  }

                  if(id=='Affichage4')
                  {
                        document.getElementById(id).style.display="block";
                        document.getElementById('Affichage1').style.display="none";
                        document.getElementById('Affichage2').style.display="none";
                        document.getElementById('Affichage3').style.display="none";
                  }


                  return true;
              }   
function afficher_cacher_Graphs(id)
            {
                  if(id=='first_load')
                  {
                    document.getElementById('Wind_Container').style.display="none";
                    document.getElementById('Earth_Container').style.display="none";
                    document.getElementById('Water_Container').style.display="none";

                    document.getElementById('Wind_Button_Off').style.display="none";
                    document.getElementById('Earth_Button_Off').style.display="none";
                    document.getElementById('Water_Button_Off').style.display="none";
                    document.getElementById('Fire_Button_On').style.display="none";
                  }

                  if(id=='Fire_Button_On')
                  {
                        document.getElementById('Fire_Container').style.display="block";

                        document.getElementById(id).style.display="none"; 
                        document.getElementById('Fire_Button_Off').style.display="block";                
                  }

                  if(id=='Fire_Button_Off')
                  {
                        document.getElementById('Fire_Container').style.display="none";

                        document.getElementById(id).style.display="none"; 
                        document.getElementById('Fire_Button_On').style.display="block";
                  }

                  if(id=='Earth_Button_On')
                  {
                        document.getElementById('Earth_Container').style.display="block";

                        document.getElementById(id).style.display="none"; 
                        document.getElementById('Earth_Button_Off').style.display="block";
                  }

                  if(id=='Earth_Button_Off')
                  {
                        document.getElementById('Earth_Container').style.display="none";

                        document.getElementById(id).style.display="none"; 
                        document.getElementById('Earth_Button_On').style.display="block";
                  }
                  if(id=='Water_Button_On')
                  {
                        document.getElementById('Water_Container').style.display="block";

                        document.getElementById(id).style.display="none"; 
                        document.getElementById('Water_Button_Off').style.display="block";                  
                  }

                  if(id=='Water_Button_Off')
                  {
                        document.getElementById('Water_Container').style.display="none";

                        document.getElementById(id).style.display="none"; 
                        document.getElementById('Water_Button_On').style.display="block";
                  }

                  if(id=='Wind_Button_On')
                  {
                        document.getElementById('Wind_Container').style.display="block";

                        document.getElementById(id).style.display="none"; 
                        document.getElementById('Wind_Button_Off').style.display="block";
                  }

                  if(id=='Wind_Button_Off')
                  {
                        document.getElementById('Wind_Container').style.display="none";

                        document.getElementById(id).style.display="none"; 
                        document.getElementById('Wind_Button_On').style.display="block";
                  }
                  return true;
              }           


