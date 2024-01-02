<?php
include "user.php";
session_start();

if(isset($_GET['username'])){
   
    $username = $_GET['username'];
    $email = $_GET['email'];
    $password = $_GET['pwd'];

   

    $user=new user($username,$email,$password);
$_SESSION['username'] = $username;
$_SESSION['id']=$user->getId();

if($username == "admin"){
    $_SESSION['isAdmin'] = true;
   
    $user->SetAdmin(true);
$user->save();
}

else{
    $_SESSION['isAdmin'] = true;
    $user->SetAdmin(false);
$user->save();
}

header("Location: index.php");
exit;


}
else{
    echo "no";
}