<?php

$page = 'vote_book_post.php';
require 'assets/php/connect.php';
include 'assets/php/background-image.php';
include 'assets/php/header.php';
include 'assets/php/nav.php';

if (isset($_SESSION['id'])){ // VISIBLE SEULEMENT DES USERS
    $id_user = $_SESSION['id']; // RECUPERE L'ID

    if(isset($_GET['id'])){
        $id_book = $_GET['id']; // RECUPERE L'ID DE L'URL
    
        if(!empty($_POST['fullname']) && !empty($_POST['vote']) && !empty($_POST['comment'])){ // RECUPERE LES DONNEES DU FORMULAIRE
                        
            $user_fullname = htmlspecialchars($_POST['fullname']);
            $rate = $_POST['vote'];
            $comment = htmlspecialchars($_POST['comment']);
                             
             $sth = $db->prepare(" INSERT INTO rate(user_fullname,rate,comment, id_user, id_book) VALUES (:user_fullname,:rate,:comment,:id_user,:id_book)");
                $sth->bindValue(':user_fullname',$user_fullname);
                $sth->bindValue(':rate',$rate);
                $sth->bindValue(':comment',$comment);
                $sth->bindValue(':id_user',$id_user);
                $sth->bindValue(':id_book',$id_book);
                if($sth->execute()){
                        //SI LA PREMIERE REQUETE S'EXECUTE ON VA MODIFIER LA TABLE BOOK POUR AUGMENTER LE COMPTEUR DE VOTE 

                    $sql = $db->query("SELECT * FROM book WHERE id=$id_book");
                    $sql->setFetchMode(PDO::FETCH_ASSOC);

                    $row = $sql->fetch();
                    $count_rate = $row['count_rate'] + 1;

                    $sth2 = $db->prepare(" UPDATE book SET count_rate=:count_rate  WHERE id=:id");
                    $sth2->bindValue(':count_rate',$count_rate);
                    $sth2->bindValue(':id',$id_book);
                    $sth2->execute();

                    header('Location: displaybook.php?id='.$id_book);
                    exit(); //REDIRECTION

                }else{
                    echo '<div class="danger">Something went wrong!</div>';
                }

        }else{
             echo '<div class="danger">You must fill out all required fields!</div>';
        }
    }else{
        echo '<div class="danger">$_GET is empty!</div>';
    }          
}else{
    echo "<div class ='danger'>You need to log into our website to access this page</div>";
    
}

        include 'assets/php/footer.php';?>