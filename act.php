<?php

class Activite {
    private $titre;
    private $prix;
    private $date;
    private $num_tel;
    private $adresse;
    private $wilaya;
    private $categorie;
    private $image;

    private $description;

    private $createur;
  
    public function __construct($titre, $prix, $date, $num_tel, $adresse, $wilaya, $categorie, $image, $description, $createur) {
      $this->titre = $titre;
      $this->prix = $prix;
      $this->date = $date;
      $this->num_tel = $num_tel;
      $this->adresse = $adresse;
        $this->wilaya = $wilaya;
        $this->categorie = $categorie;
        $this->image = $image;
        $this->description = $description;
        $this->createur = $createur;

    }
  
    public function save() {
      $host = 'localhost';
      $dbname = 'weshderna';
      $username = 'root';
      $password = '';
  
      try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
        $stmt = $pdo->prepare("INSERT INTO activité (titre, prix, date, tel, adresse, wilaya, categorie, image, description, createur) VALUES (:titre, :prix, :date, :num_tel, :adresse, :wilaya, :categorie, :image, :description, :createur)");
        $stmt->bindParam(':titre', $this->titre);
        $stmt->bindParam(':prix', $this->prix);
        $stmt->bindParam(':date', $this->date);
        $stmt->bindParam(':num_tel', $this->num_tel);
        $stmt->bindParam(':adresse', $this->adresse);
        $stmt->bindParam(':wilaya', $this->wilaya);
        $stmt->bindParam(':categorie', $this->categorie);
        $stmt->bindParam(':image', $this->image);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':createur', $this->createur);
        $stmt->execute();
      } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
      }
    }
  }
  
?>