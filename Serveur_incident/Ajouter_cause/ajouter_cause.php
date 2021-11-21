<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../BT/Incident_BT/Modifier/modifier.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


</head>
<body>
    <!-- Retour -->

    <a href="../Index/index.html">
        <div class="Retour">
            <div class="icones">
                <i class="fas fa-angle-double-left"></i></div>
            <!--<p>Retour</p>-->
            </div>  
    </a>

   

    <p class="titre">Ajout d'une Nouvelle Cause</p>

    <form action="ajout_sql.php" method="post">

    <div class="données">
        <label for="date">Code</label>
            <input class="code" type="text" id="Code" name="Code">
        <label for="date">Cause</label>
            <input class="cause" type="text" id="cause" name="cause">
        <Button class="button" type="submit" ><span>AJOUTER</span></button>

    </div> 


    </form>



     <!--Tableau-->
     <table >
        <tr>
            <th>Id</th>
            <th>Code</th>
            <th>Cause</th>

            <th>Modifier</th>
            <th>Supprimer</th>

            
        </tr>
    
        <p class="sous_titre">Liste des causes</p> 
        <?php
        
        include "connect_sql.php"; // Using database connection file here

        $records = mysqli_query($db,"SELECT * from cause_incident ORDER  BY Code "); // fetch data from database

        while($data = mysqli_fetch_array($records))
        {
        ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['Code']; ?></td>
            <td><?php echo $data['cause']; ?></td>

            <td><a href="edit.php?id=<?php echo $data['id']; ?>">Modifier</a></td>
             <td><a href="delete.php?id=<?php echo $data['id']; ?>">Suppr</a></td>
           
        </tr>	
        <?php
        }
        ?>
        </table>

        <?php mysqli_close($db); // Close connection ?>

</body>
</html>