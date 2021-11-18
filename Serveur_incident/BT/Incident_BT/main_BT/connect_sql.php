

<!-- Test 2 connexion BDD -->
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
    $sql = "INSERT INTO historique_BT (depart, poste,cause, incident,com,sympa,autre,date) VALUES (:depart, :poste,:cause, :incident, :com, :sympa, :autre, :date)";
    $stmt = $pdo->prepare($sql);

    //Connection avec la base pour le menu déroulant des causes dans incident_hta.php
    //$resultSet=$pdo->query("SELECT cause from cause_incident");

    
    // Bind parameters to statement
    $stmt->bindParam(':depart', $_REQUEST['depart']);
    $stmt->bindParam(':poste', $_REQUEST['poste']);
    $stmt->bindParam(':cause', $_REQUEST['cause']);
    $stmt->bindParam(':incident', $_REQUEST['incident']);
    $stmt->bindParam(':com', $_REQUEST['com']);
    $stmt->bindParam(':sympa', $_REQUEST['sympa']);
    $stmt->bindParam(':autre', $_REQUEST['autre']);
    $stmt->bindParam(':date', $_REQUEST['date']);

    
    // Execute the prepared statement
    $stmt->execute();
    echo "Incident ajouté avec succès.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>