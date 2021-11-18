<?php  

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=data.csv');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
$poste = strip_tags($_POST['poste']);

 if(isset($_POST['export']))  
 {  
     session_start();
      $connect = mysqli_connect("localhost","root","","edf_suivi_panne");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id', 'depart', 'poste', 'cause', 'incident', 'com','sympa','autre','date'));  
      $query = "SELECT * from historique_BT WHERE poste='$poste' ORDER BY date DESC";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>
