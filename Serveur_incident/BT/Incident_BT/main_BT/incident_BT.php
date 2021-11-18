<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>INCIDENT HTA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=devicPPI-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="incident_BT.css">
        <link rel="stylesheet" href="boite_incident_BT.css">
        <script type="text/javascript" src="../../Script/menu_dynamique.js"></script>
    </head>
    <body>

        <!--Retour -->
        <a href="http://localhost/code/Serveur_incident/index.html">
            <div class="Top_boutons Retour">
                <div class="icones">
                    <i class="fas fa-angle-double-left"></i></div>
                <!--<p>Retour</p>-->
                </div>  
        </a>
        <style>
            .icones{
                color:#E7590F;
                margin-top:1.25rem;
            }
        </style>
       
        <!--en-tete pagPPI-->
        <div class="TITRE">
            <p class="text_titre">REPERTORIAGE DES INCIDENTS HTA<p>
        </div>
        <style>
            .TITRE{
                background-color:#09357a ;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 2rem;
                margin-top:1.5rem;
                text-align: center;

                width:27rem;
                border-radius:40px;
            
                font-weight: bold;
                font-size:1.4rem;
                color: white;
            }
        </style>
        
        <div class="Sous_titre">
            <p class="text_sous_titre">DECLARATION D'UN NOUVEL INCIDENT HTA<p>
        </div>
        <style>
            .text_sous_titre{
                font-weight: bold;
                color:#09357a;
            }
        </style>
        
        <!--Logo EDF -->
        <div class="logo_edf">
            <img src="../Images/logo-EDF.jpg" alt="">
        </div>
        
        </br>

        <form action="connect_sql.php" method="post">
            <!-- Box conteant les menus déroulanH-->
            
            <div class="gen gen1">     
                <!--Selection du Départ HTA-->
                <div class="box box1">
                        <div class="label_box label_box_1">
                            <label for="Type">Départ</label>
                        </div>
                        <div class="input_box input_box_1">
                            <select name="depart" id="depart">
                            <option value="" selected="selected">---</option>
                        </select>
                        </div>
                </div>
                <style>
                    .gen{
                        text-decoration: white;
                    }
                </style>

                <!--Poste-->
                <div class="box box2">
                        <div class="label_box label_box_2">
                            <label for="Type">Poste</label>
                        </div>
                        <div class="input_box input_box_2">
                            <select name="poste" id="poste">
                                <option value="" selected="selected"> --- </option>
                            </select>
                        </div>
                </div>

                <!--Cause--> 
                    <?php 
                    $mysqli=NEW MySQLi ('localhost','root','','edf_suivi_panne');
                    $resultSet=$mysqli->query("SELECT cause from cause_incident");
                    ?>

                    <div class="box box6">                  
                        <div class="label_box label_box_6">
                            <label for="Type">Cause</label>
                        </div>
                        <div class="input_box input_box_6">
                            <select class="cause" name='cause' id="cause">
                                <?php
                                
                                while ($rows = $resultSet->fetch_assoc()){
                                    $cause = $rows['cause'];
                                    echo "<option value='$cause'>$cause</option>";
                                }
                                
                                ?>
                            </select>                        
                        </div>
                </div>

                            
                <!--Nature Incident-->
                <div class="box box3">                  
                        <div class="label_box label_box_3">
                            <label for="Type">Siège</label>
                        </div>
                        <div class="input_box input_box_3">
                            <select class="menu" name='incident' id='incident'>
                                <option value="Plein câble synthétique">Plein câble synthétique</option>
                                <option value="Pas de siège">Pas de siège</option>
                                <option value="Jonction HTA câble">Jonction HTA câble</option>
                                <option value="Contact entre conducteurs">Contact entre conducteurs</option>
                                <option value="Ligne aériennes conducteurs">Ligne aériennes conducteurs</option>
                                <option value="Poste HTA/BT: appareillages HTA">Poste HTA/BT: appareillages HTA</option>
                                <option value="Transfo HS">Transfo HS</option>
                                <option value="Autre">Autre</option>

                            </select>
                        </div>
                </div>

            </div>
        </br>
        </br>
            <div class="gen gen2">

                <!--Commenataire-->
                <div class="Commentaire">
                    <div class='label_box label_box7'>
                        <label for="name">Commentaire:</label>
                    </div>
                    <textarea class="com" id="com" name="com" col="50" row="4"></textarea>
                </div>

                <!--Sympathie-->
                <div class="box box4">                  
                        <div class="label_box label_box_4">
                            <label for="Type">Déclenchement par Sympathie </label>
                        </div>
                        <div class="input_box input_box_4">
                            <select class="menu" name='sympa' id="sympa">
                                <option value="Non">Non</option>
                                <option value="Oui">Oui</option>
                            </select>
                        </div>
                </div>
                <!--Autre-->
                <div class="box box5">
                    <div class='label_box label_box_5'>
                        <label for="date">Autre poste déclenché</label>
                    </div>
                    <div class="input_box input_box_5">
                        <input class="autre" type="text" id="autre" name="autre">
                    </div>
                </div>
                <!--Date-->
                <div class="box box8">
                    <div class='label_box label_box8'>
                        <label for="date">Date de l'incident</label>
                    </div>
                    <div class="input_box">
                        <input class="date" type="date" id="date" name="date">
                    </div>
                </div>

            </div>
        </br>
             
        <!--Boutton-->

        <div class="wrapper">
            <Button class="button" type="submit" ><span>AJOUTER</span></input>
        </div>
        
        </form>

        <div class="wrap2">
            <a href="..\Historique\historique_HTA.php">
                <button  class="button2"><span>Historique BT</span>
            </a>
        </div>
                           

        <div class="legende">
            <h4>Légende :</h4>
            <p>1i: PSSB  |  S: Porte Socle |  P: Privé  |  C: Commande à distance  |  H: Harmoire HTA  |  A: Aérien</p>
            </br>
            <p>** Ne mettez pas de ";" dans la section commentaire. Cela poserait des problèmes lors de l'exportation d'un tableau.</p>

        </div>

    </body>
</html>
