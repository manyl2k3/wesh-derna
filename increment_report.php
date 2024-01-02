<?php

if(isset($_POST['annonce_id']) ) {
   
$id = $_POST['annonce_id'];


    $host = 'localhost';
    $dbname = 'weshderna';
    $username = 'root';
    $password = '';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    
        $stmt = $pdo->prepare("UPDATE activité SET report = report + 1 WHERE activité_id = :id;");
        $stmt->bindParam(':id', $id);
          
        $stmt->execute();
    
        // Afficher les résultats
       
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }


    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    
        $stmt = $pdo->prepare("SELECT report FROM activité WHERE activité_id = :id;");
        $stmt->bindParam(':id', $id);
          
        $stmt->execute();
    

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $report = $result['report'];
        echo $report;


        // Afficher les résultats
       
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

}


?>
