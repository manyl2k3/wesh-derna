<?php
include "user.php";
session_start();

if(isset($_GET['email'])&& isset($_GET['pwd'])){
   
    
    $email = $_GET['email'];
    $password = $_GET['pwd'];
    $username='';

   

    $user=new user($username,$email,$password);
    if($user->exist()==true){
       
       
     
        if($user->verifpwd()==true){
            
     

if($user->getState()==true){
   

    $_SESSION['isAdmin'] = true;
    $_SESSION['username'] = $user->getUsername();
    $_SESSION['id']=$user->getId();


header("Location: index.php");
exit;

    }
    else{
        echo'non admin';
        $_SESSION['isAdmin'] = false;
        $_SESSION['username'] = $user->getUsername();
        $_SESSION['id']=$user->getId();
        header("Location: index.php");
exit;
    }
    }
    else{
        $valeur2 = "1";
        $url = "login.php?valeur2=$valeur2";
        header("Location: $url");
       // Display alert for incorrect password
       
    }

}
else{
    $valeur2 = "2";
    $url = "login.php?valeur2=$valeur2";
    header("Location: $url");
    // Display alert for incorrect email
}


}
else{
    echo "no";
}