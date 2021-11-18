<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"SELECT * from historique where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $depart = $_POST['depart'];
    $poste = $_POST['poste'];
    $cause = $_POST['cause'];
    $incident = $_POST['incident'];
    $com = $_POST['com'];
    $sympa = $_POST['sympa'];
    $autre = $_POST['autre'];
    $date = $_POST['date'];
	
    $edit = mysqli_query($db,"UPDATE historique SET depart='$depart', poste='$poste', cause='$cause', incident='$incident', com='$com', sympa='$sympa', autre='$autre', date='$date' WHERE id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:main.php"); // redirige vers la page d'acceuil
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Modifier les Données</h3>

<form method="POST">
  <input type="text" name="depart" value="<?php echo $data['depart'] ?>" placeholder="Départ" requiered>
  <input type="text" name="poste" value="<?php echo $data['poste'] ?>" placeholder="Poste" >
  <input type="text" name="cause" value="<?php echo $data['cause'] ?>" placeholder="Cause" >
  <input type="text" name="incident" value="<?php echo $data['incident'] ?>" placeholder="incident" >
  <input type="text" name="com" value="<?php echo $data['com'] ?>" placeholder="com" >
  <input type="text" name="sympa" value="<?php echo $data['sympa'] ?>" placeholder="sympa" >
  <input type="text" name="autre" value="<?php echo $data['autre'] ?>" placeholder="autre" >
  <input type="date" name="date" value="<?php echo $data['date'] ?>" placeholder="date" >

  <input type="submit" name="update" value="Update">
</form>