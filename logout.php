<?php

if(isset($_SESSION['id'])){
    session_destroy();
   echo "Vous êtes déconnecté";
}
else{
    echo "Vous n'êtes pas connecté";
}