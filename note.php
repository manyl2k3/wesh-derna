<?php

if(isset($_POST['annonce_id'])&& isset($_POST['note']) ) {
   
$id = $_POST['annonce_id'];
$note= $_POST['note'];

    $host = 'localhost';
    $dbname = 'weshderna';
    $username = 'root';
    $password = '';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    
        $stmt = $pdo->prepare("UPDATE activité SET nb_note = nb_note + 1  WHERE activité_id = :id;");
        $stmt->bindParam(':id', $id);
          
        $stmt->execute();
    

        $stmt = $pdo->prepare("SELECT nb_note from activité  WHERE activité_id = :id;");
        $stmt->bindParam(':id', $id);
          
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $nbnote = $result['nb_note'];


        $stmt = $pdo->prepare("SELECT note from activité  WHERE activité_id = :id;");
        $stmt->bindParam(':id', $id);
          
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $noteact = $result['note'];

        $nvnote = (($noteact*($nbnote-1))+$note)/$nbnote;
       
        $stmt = $pdo->prepare("UPDATE activité SET note = :note  WHERE activité_id = :id;");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':note', $nvnote);

        $stmt->execute();

        
        $stmt = $pdo->prepare("SELECT note from activité  WHERE activité_id = :id;");
        $stmt->bindParam(':id', $id);
          
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $noteact = $result['note'];

        echo $noteact;
       
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }


   

}


?>
