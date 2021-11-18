<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script type="text/javascript" src="../../Script/menu_dynamique.js"></script>
    <link rel="stylesheet" href="multi_criètes.css">

</head>
<body>

<!-- Retour -->

<a href="../historique_HTA.php">
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

<h3> Sélectionner les critères et sections désirés</h3>

<form action="3_critères_tab.php" method="post">

<div class="selec_1">
    <select class="menu" name='choix1' id='choix1'>
        <option value="depart">Depart</option>
        <option value="poste">Poste</option>
        <option value="cause">Cause</option>
        <option value="incident">Incident</option>
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

    <div class="selec_3">
        <select class="menu" name='choix2' id='choix2'>
            <option value="depart">Depart</option>
            <option value="poste">Poste</option>
            <option value="cause">Cause</option>
            <option value="incident">Incident</option>
            <option value="sympa">Déclenchement par Sympathie</option>
        </select>

        <input class="text" type="crit3" id="crit3" name="crit3">
    </div>

    <Button class="button" type="submit" ><span>Afficher</span></input>


</from>

<h3> Attention</h3>

Il faut que vous rentiez les données exactement comme celle que vous recherchez dans le tableau. Sinon rien ne sera affiché. Pour se faire aidez vous des listes misent à disposition. 
</body>
</html>