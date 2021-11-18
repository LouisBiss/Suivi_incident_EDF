<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script type="text/javascript" src="../../Script/menu_dynamique.js"></script>
    <link rel="stylesheet" href="multi_critères.css">


</head>
<body>
<!-- Retour -->

<a href="../main_hist_BT/historique_BT.php">
    <div class="Retour">
        <div class="icones">
            <i class="fas fa-angle-double-left"></i></div>
        <!--<p>Retour</p>-->
        </div>  
</a>

<!-- Acceuil -->

<a href="../../index.html">
    <div class="Accueil">
        <div class="icones">
            <i class="fas fa-home"></i>              
        </div>
        <!--<p>Accueil</p>-->
    </div>
</a>


<div class="titre">
    <h3> Sélectionner les critères et sections désirés</h3>
</div>


<form action="2_critères_tab.php" method="post">

<div class="selec_1">
    <select class="menu" name='choix1' id='choix1'>
        <option value="depart">Depart</option>
        <option value="poste">Poste</option>
        <option value="cause">Cause</option>
        <option value="incident">Siège</option>
        <option value="sympa">Déclenchement par Sympathie</option>
    </select>

    <input class="text" type="crit1" id="crit1" name="crit1">
    </div>

    <div class="selec_2">
        <select class="menu" name='choix2' id='choix2'>
            <option value="depart">Depart</option>
            <option value="poste">Poste</option>
            <option value="cause">Cause</option>
            <option value="incident">Incident</option>
            <option value="sympa">Déclenchement par Sympathie</option>
        </select>

        <input class="text" type="crit2" id="crit2" name="crit2">
    </div>
    <div>
    <Button class="button" type="submit" ><span>Afficher</span></input>
    </div>

     <!-- LISTE -->
        <H4>Listes</h4>

        <div class="liste_gen">

            <!--Selection du Départ HTA-->
                <div class="box box1">
                            <label for="Type">Départ</label>
                        <div class="input_box input_box_1">
                            <select name="depart" id="depart">
                            <option value="" selected="selected">---</option>
                        </select>
                        </div>
                </div>
                

                <!--Poste-->
                <div class="box box2">
                            <label for="Type">Poste</label>
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
                            <label for="Type">Cause</label>
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
                            <label for="Type">Siège</label>
                        <div class="input_box input_box_3">
                            <select class="menu" name='incident' id='incident'>
                                <option value="Plein câble synthétique">Plein câble synthétique</option>
                                <option value="Pas de siège">Pas de siège</option>
                                <option value="Jonction HTA câble">Jonction HTA câble</option>
                                <option value="Contact entre conducteurs">Contact entre conducteurs</option>
                                <option value="Ligne aériennes conducteurs">Ligne aériennes conducteurs</option>
                                <option value="Poste HTA/BT: appareillages HTA">Poste HTA/BT: appareillages HTA</option>
                                <option value="Autre">Autre</option>

                            </select>
                        </div>
                </div>

        </div>
</from>
<h3> Attention</h3>

Il faut que vous rentiez les données exactement comme celle que vous recherchez dans le tableau. Sinon rien ne sera affiché. Pour se faire aidez vous des listes misent à disposition. 
</body>
</html>