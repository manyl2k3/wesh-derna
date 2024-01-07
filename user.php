<?php
$bd = new PDO('mysql:host=localhost;dbname=wesh-derna', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));



  

class user {
 var $id;
 var $username;
 var $email; 
  var $pwd; 
  var $isadmin;

public function setUsername($username)
{
$this->username = $username;
}
public function setEmail($email)
{
$this->email = $email;
}

public function SetAdmin($isadmin)
{
$this->isadmin = $isadmin;
}

public function setPwd($pwd)
{
$this->pwd = $pwd;
}

public function getUsername()
{

    try {
        $host = 'localhost';
  $dbname = 'wesh-derna';
  $username = 'root';
  $password = '';
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
        $stmt = $pdo->prepare("SELECT pseudo FROM utilisateur WHERE mail = :mail");
        $stmt->bindParam(':mail', $this->email);
        

        $stmt->execute();

        while ($row = $stmt->fetch()) {
            $id = $row['pseudo'];
          }
            return $id;
            
        }

    // Add this closing brace
    catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
      }


}

public function getId()
{

    
    try {
        $host = 'localhost';
  $dbname = 'weshderna';
  $username = 'root';
  $password = '';
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
        $stmt = $pdo->prepare("SELECT user_id FROM utilisateur WHERE mail = :mail");
        $stmt->bindParam(':mail', $this->email);
        

        $stmt->execute();

        while ($row = $stmt->fetch()) {
            $id = $row['user_id'];
          }
            return $id;
            
        }

    // Add this closing brace
    catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
      }


}




public function __construct($username,$email,$pwd)
{
$this->setUsername($username);
$this->setEmail($email);
$this->setPwd($pwd);

}


public function save()
{
 
      try {
        $host = 'localhost';
      $dbname = 'weshderna';
      $username = 'root';
      $password = '';
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
        $stmt = $pdo->prepare("INSERT INTO utilisateur (pseudo, mail, motdepasse, admin) VALUES (:pseudo, :mail, :motdepasse, :admin)");
        $stmt->bindParam(':pseudo', $this->username);
        $stmt->bindParam(':mail', $this->email);
        $stmt->bindParam(':motdepasse', $this->pwd);
        $stmt->bindParam(':admin', $this->isadmin);

        $stmt->execute();
      } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
      }

      

    }


    public function getState()
    {
        try {
            $host = 'localhost';
      $dbname = 'weshderna';
      $username = 'root';
      $password = '';
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
            $stmt = $pdo->prepare("SELECT admin FROM utilisateur WHERE mail = :mail");
            $stmt->bindParam(':mail', $this->email);
            
    
            $stmt->execute();

            while ($row = $stmt->fetch()) {
                $adm = $row['admin'];
              }
                return $adm;
                
            }

        // Add this closing brace
        catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
          }
    
    }


    public function exist()
    {
        
        try {
            $host = 'localhost';
            $dbname = 'weshderna';
            $username = 'root';
            $password = '';
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
            $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE mail = :mail");
            $stmt->bindParam(':mail', $this->email);
          
    
            $stmt->execute();

            while ($row = $stmt->fetch()) {
                $id = $row['user_id'];
              }
                
              if($id == null)
              {
                
                return false;
                
              }
              else
              {
               

                return true;
              }

            }

        // Add this closing brace
        catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
          }
    
    }


    public function verifpwd(){

        try {
            $host = 'localhost';
      $dbname = 'weshderna';
      $username = 'root';
      $password = '';
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
            $stmt = $pdo->prepare("SELECT motdepasse FROM utilisateur WHERE mail = :mail");
            $stmt->bindParam(':mail', $this->email);
            
    
            $stmt->execute();

            while ($row = $stmt->fetch()) {
                $mdp = $row['motdepasse'];
              }
               
              if($mdp == $this->pwd)
              {
                return true;
              }
              else
              {
                return false;
              }
                
            }

        // Add this closing brace
        catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
          }

    }


public function supprimer($id){
    $del = $bd->prepare("delete from user where id = ?");
    $del->execute(array($id));
}

}