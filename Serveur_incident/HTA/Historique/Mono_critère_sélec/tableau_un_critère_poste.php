<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="un_critère.css">

</head>
<body>

</br>
<!--Bouton Export--> 
<form method="post" action="export_post.php" class="row">
    <div class="col-6"><input class="excel" type="submit" value="Exporter au Fromat CSV" name="export" id="export" class="button" /></div>
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

        $poste = strip_tags($_POST['poste']);

        $records = mysqli_query($db,"SELECT * from historique WHERE poste='$poste'"); // fetch data from database

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