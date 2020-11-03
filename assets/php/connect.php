<?php

//TRY CATCH DE CONNEXION: ACCES A LA DB ET REDIRECTION INDEX SI LOGOUT
    session_start();
     if (empty($_SESSION) && $page =='profile' || empty($_SESSION) && $page == 'index'){
         header('Location: index.php');
         exit;
     }
     if (isset($_GET['logout'])){
         session_destroy();
         header ('Location:index.php');
    }
    
    $servername = 'localhost'; $dbname='idealbooks';$user='root'; $pass='';
    try{
    $db = new PDO("mysql:host=$servername;dbname=$dbname",$user,$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $ex){
        echo "Error : " . $ex->getMessage();
    }
?>
