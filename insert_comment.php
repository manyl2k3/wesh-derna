<?php
if (isset($_POST['comment']) && isset($_POST['user_id']) && isset($_POST['annonce_id'])) {
    $comment = $_POST['comment'];
    echo $comment;
    $user_id = $_POST['user_id'];
    $annonce_id = $_POST['annonce_id'];



  $host = 'localhost';
  $dbname = 'weshderna';
  $username = 'root';
  $password = '';
  
  try {
      $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  
  
      $stmt = $pdo->prepare("INSERT INTO commentaire(text, user_id, activité_id) VALUES (:text, :user_id, :annonce_id)");
        $stmt->bindParam(':text', $comment);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':annonce_id', $annonce_id);
      $stmt->execute();
  
      // Afficher les résultats
     
  } catch(PDOException $e) {
      echo "Erreur : " . $e->getMessage();
  }
}
  ?>

