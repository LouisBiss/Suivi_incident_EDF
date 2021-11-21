<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"SELECT * from cause_incident where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $Code = $_POST['Code'];
    $cause = $_POST['cause'];
   
	
    $edit = mysqli_query($db,"UPDATE cause_incident SET Code='$Code', cause='$cause' WHERE id='$id'");
	
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
  <input type="text" name="Code" value="<?php echo $Code['Code'] ?>" placeholder="Code" requiered>
  
  <input type="text" name="cause" value="<?php echo $data['cause'] ?>" placeholder="Cause" requiered>
  

  <input type="submit" name="update" value="Update">
</form>