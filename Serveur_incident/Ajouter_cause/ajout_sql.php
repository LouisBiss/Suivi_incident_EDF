<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=edf_suivi_panne", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt insert query execution
try{
    // Create prepared statement
    $sql = "INSERT INTO cause_incident (Code, cause) VALUES (:Code, :cause)";
    $stmt = $pdo->prepare($sql);

    //Connection avec la base pour le menu déroulant des causes dans incident_hta.php
    //$resultSet=$pdo->query("SELECT cause from cause_incident");

    
    // Bind parameters to statement
    $stmt->bindParam(':Code', $_REQUEST['Code']);
    $stmt->bindParam(':cause', $_REQUEST['cause']);
   
    
    // Execute the prepared statement
    $stmt->execute();
    echo "Cause ajouté avec succès.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>