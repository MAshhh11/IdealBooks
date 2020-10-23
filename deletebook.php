<?php
$page = 'deletebook.php';
require 'assets/php/connect.php';
require 'assets/php/function.php';
include 'assets/php/background-image.php';
include 'assets/php/header.php';
include 'assets/php/nav.php';

if (isset($_SESSION['id'])){ // VISIBLE SEULEMENT DES USERS
   
        if(isset($_GET['id'])){ 
            $id = $_GET['id']; // RECUPERE L'ID
            $sth = $db->prepare("DELETE FROM book WHERE id = $id");
            $sth->execute();
            
            if($sth){
                echo "<div class ='success'>Book detected!</div>";
                header("Location:booklist.php");
            }else{
                echo "<div class ='danger'>Something when wrong!</div>";
                
            }
        }
}else{
        echo "<div class ='danger'>You need to log into the website to complete this modification</div>";
    }

?>