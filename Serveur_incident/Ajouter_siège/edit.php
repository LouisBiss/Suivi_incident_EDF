<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"SELECT * from siège where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $Code = $_POST['siège'];
   
	
    $edit = mysqli_query($db,"UPDATE siège SET siège='$siège' WHERE id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:ajouter_sql.php"); // redirige vers la page d'acceuil
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
  <input type="text" name="siège" value="<?php echo $Code['siège'] ?>" placeholder="siège" requiered>
  
  

  <input type="submit" name="update" value="Update">
</form>