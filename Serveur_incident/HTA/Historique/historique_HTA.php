<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Hist HTA</title>
    <link rel="stylesheet" href="historique_HTA.css">
    <script type="text/javascript" src="..\Script\menu_dynamique.js"></script>

</head>
<body>
    <!--Retour -->
    <a href="../../Index/index.html">
            <div class="Top_boutons Retour">
                <div class="icones">
                    <i class="fas fa-angle-double-left"></i></div>
                <!--<p>Retour</p>-->
                </div>  
    </a>
  
    <!--Logo EDF -->
    <div class="logo_edf">
        <img src="../Images/logo-EDF.jpg" alt="">
    </div>

    <!--en-tete page-->
    <div class="TITRE">
        <p class="text_tire">HISOTRIQUE DES INCIDENTS HTA <p>
    </div>
        
    <!--Selection spécifique-->

    <div class="selection">
        <p class="selec">Appliquer un critère de sélection:</p>
        
        <div class="menu">
        

            <!-- DEPART -->

            <div class="sous_selec sous_selec_1">
                <p class="depart_texte">Par Départ</p>
                <form action="Mono_critère_sélec/tableau_un_critère_départ.php" method="post">
                    <select class="menu" name='depart' id='depart'>
                        <option value="Baie Nettle">Baie Nettle</option>
                        <option value="Baie Orientale">Baie Orientale</option>
                        <option value="Grand Case">Grand Case</option>
                        <option value="Hope Estate">Hope Estate</option>
                        <option value="La Savane">La Savane</option>
                        <option value="St James">St James</option>
                        <option value="Spring">Spring</option>
                        <option value="Terres Basses">Terres Basses</option>
                    </select>
                    </br>

                    <Button class="button" type="submit" ><span>Afficher</span></input>
                </form>
            </div>

            <!-- Poste -->

            <div class="sous_selec sous_selec_2">

                <form action="Mono_critère_sélec/tableau_un_critère_poste.php" method="post">
                    <p class="poste_texte">Par Poste</p>
                 

                    <select class="poste" name="poste" id="poste">
                        <option value="" selected="selected"> --- </option>
                    </select>
                  </br></br>

                    <Button class="button" type="submit" ><span>Afficher</span></input>
                </form>

            </div>

            <!-- Cause -->

            <div class="sous_selec sous_selec_3">
                <p class="cause_texte">Par Cause</p>
                <form action="Mono_critère_sélec/tableau_un_critère_cause.php" method="post">
                    <?php 
                        $mysqli=NEW MySQLi ('localhost','root','','edf_suivi_panne');
                        $resultSet=$mysqli->query("SELECT cause from cause_incident");
                    ?>

                    <select class="cause" name='cause' id="cause">
                        <?php
                        
                        while ($rows = $resultSet->fetch_assoc()){
                            $cause = $rows['cause'];
                            echo "<option value='$cause'>$cause</option>";
                        }
                        
                        ?>
                    </select>
                    </br></br>
 
                    <Button class="button" type="submit" ><span>Afficher</span></input>
                </form> 

                <style>
                    select#cause{
                        width:9rem;
                    }
                </style>

            </div>

            <!-- Siège -->

            <div class="sous_selec sous_selec_4">
                <p class="siège_texte">Par Siège</p>
                <form action="Mono_critère_sélec/tableau_un_critère_siège.php" method="post">
                    <select class="menu" name='siège' id='siège'>
                        <option value="Plein câble synthétique">Plein câble synthétique</option>
                        <option value="Pas de siège">Pas de siège</option>
                        <option value="Jonction HTA câble">Jonction HTA câble</option>
                        <option value="Contact entre conducteurs">Contact entre conducteurs</option>
                        <option value="Ligne aériennes conducteurs">Ligne aériennes conducteurs</option>
                        <option value="Poste HTA/BT: appareillages HTA">Poste HTA/BT: appareillages HTA</option>
                        <option value="Autre">Autre</option>

                    </select>
                    </br>

                    <Button class="button" type="submit" ><span>Afficher</span></input>
                </form>

                <style>
                    select#siège{
                        width:9rem;
                    }
                </style>
            </div>

            <!-- Sympathie -->

            <div class="sous_selec sous_selec_5">
                <p class="depart">Par Sympathie</p>
                <form action="Mono_critère_sélec/tableau_un_critère_sympa.php" method="post">
                    <select class="menu" name='sympa' id="sympa">
                        <option value="Non">Non</option>
                        <option value="Oui">Oui</option>
                    </select>
                </br>
                    <Button class="button" type="submit" ><span>Afficher</span></input>
                </form>
            </div>



        </div>
    </div>

    <style>
        .menu{
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
    </style>

    <!--Multi Selection -->

    </br>
    <div class="multi_selection">
        <p class="selec2">Appliquer plusieurs critères de sélection:</p>
        <div class="crit">
            <a href="Multi_critère_sélec/2_critères.php">
            <Button class="button1" type="submit" ><span>2 critères</span></input>
            </a>
            <a href="Multi_critère_sélec/3_critères.php">
            <Button class="button2" type="submit" ><span>3 critères</span></input>
            </a>
            <a href="Multi_critère_sélec/4_critères.php">
            <Button class="button2" type="submit" ><span>4 critères</span></input>
            </a>
        </div>
    </div>
    </br>

    <!--Bouton Export -->
        
        <form method="post" action="export.php" class="row">
            <div class="col-6">
                <input class="excel" type="submit" value="Exporter au Fromat CSV" name="export" id="export"/>
            </div>
        </form>

    <!--Tableau-->
    <table >
        <tr>
            <th>Id</th>
            <th>Départ</th>
            <th>Poste</th>
            <th>Cause</th>
            <th>Siège</th>
            <th>Commentaire</th>
            <th>Déclenchement par Sympathie</th>
            <th>Autre poste Déclenché</th>
            <th>Date</th>
        </tr>
    
    <?php
    
        include "connect_sql.php"; // Using database connection file here

        $records = mysqli_query($db,"SELECT * from historique ORDER  BY date DESC"); // fetch data from database

        while($data = mysqli_fetch_array($records))
        {
        ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['depart']; ?></td>
            <td><?php echo $data['poste']; ?></td>
            <td><?php echo $data['cause']; ?></td>
            <td><?php echo $data['incident']; ?></td>
            <td class="case_com"><?php echo $data['com']; ?></td>
            <td><?php echo $data['sympa']; ?></td>
            <td><?php echo $data['autre']; ?></td>
            <td><?php echo $data['date']; ?></td>

        </tr>	
        <?php
        }
        ?>
        </table>

        <?php mysqli_close($db); // Close connection ?>
 
</body>

</html>

