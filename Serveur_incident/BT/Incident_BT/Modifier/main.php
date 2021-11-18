<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hist HTA</title>
    <link rel="stylesheet" href="modifier.css">
  
</head>
<body>

<h2>Hisotrique BT </h2>

<table>
  <tr>
    <th>id</th>

    <th>depart</th>
    <th>poste</th>
    <th>cause</th>
    <th>siège</th>
    <th>com</th>
    <th>sympa</th>
    <th>autre</th>
    <th>date</th>

    <th>Modifier</th>
    <th>Supprimer</h>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"SELECT * from historique_BT"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['depart']; ?></td>
    <td><?php echo $data['poste']; ?></td>  
    <td><?php echo $data['cause']; ?></td>    
    <td><?php echo $data['incident']; ?></td>    
    <td><?php echo $data['com']; ?></td>    
    <td><?php echo $data['sympa']; ?></td>    
    <td><?php echo $data['autre']; ?></td>   
    <td><?php echo $data['date']; ?></td>    
 
  
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Modifier</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Suppr</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>

