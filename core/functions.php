<?php

function connectBDD(){
    
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=forum;charset=utf8","root","");
        return $bdd;
    }catch(Exception $e){
        die("erreur bdd");
    }
}

function auth($lvl){// fonction qui controle si le lvl de l utilisateur est suffisant
    if(isset($_SESSION['lvl']) && $_SESSION['lvl'] >= $lvl)
        return true;
    else
        header("Location:login");
}

function setFlash($message, $type = "success") {
    $_SESSION['flash']['message'] = $message;
    $_SESSION['flash']['type'] = $type;
}


function getFlash() {
    if (isset($_SESSION['flash'])) {
        extract($_SESSION['flash']); // récupere et créer les variables correspondantes
        unset($_SESSION['flash']);
        return "<div class='alert alert-$type'>$message</div>";
    }
}

?>