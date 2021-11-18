<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="un_critère.css">
    <link rel="stylesheet" href="un_critère.css">
    <link rel="stylesheet" href="../main_hist_BT/historique_BT.css">


</head>
<body>

</br>
<!--Bouton Export  
<form method="post" action="export_crit.php" class="row">
    <div class="col-6"><input class="excel" type="submit" value="Exporter au Fromat CSV" name="export" id="export" class="button" /></div>
</form> -->

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

        $choix1 = strip_tags($_POST['choix1']);
        $choix2 = strip_tags($_POST['choix2']);
        $choix3 = strip_tags($_POST['choix3']);

        $crit1 = strip_tags($_POST['crit1']);
        $crit2 = strip_tags($_POST['crit2']);
        $crit3 = strip_tags($_POST['crit3']);


        $records = mysqli_query($db,"SELECT * from historique WHERE $choix1='$crit1' AND $choix2='$crit2' AND $choix3='$crit3' ORDER BY date DESC"); // fetch data from database

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