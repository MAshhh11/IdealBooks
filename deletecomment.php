<?php
$page = 'deletecomment.php';
require 'assets/php/connect.php';
require 'assets/php/function.php';
include 'assets/php/background-image.php';
include 'assets/php/header.php';
include 'assets/php/nav.php';

if (isset($_SESSION['id']) && $_SESSION['id'] == 3){ // VISIBLE SEULEMENT DES ADMINS
   
        if(isset($_GET['id'])){
            $id = $_GET['id']; // RECUPERE L'ID

            //REQUETTE JOINTE POUR ATTEINDRE LE COMPTEUR DANS LA TABLE BOOK DEPUIS L'A ID RATE
            $sql = $db->query("SELECT * FROM book AS b RIGHT JOIN rate AS r on b.id=r.id_book WHERE r.id_rate= $id");
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $row = $sql->fetch();

            // MODIFICATION DU COMPTEUR
            $id_book = $row['id_book'];
            $count_rate = $row['count_rate'] - 1;

            $sth = $db->prepare(" UPDATE book SET count_rate=:count_rate  WHERE id=:id");
            $sth->bindValue(':count_rate',$count_rate);
            $sth->bindValue(':id',$id_book);
            $sth->execute();

            if($sth->execute()){
                //ON SUPPRIME LA LIGNE DANS LA TABLE RATE 
                $sth2 = $db->prepare("DELETE FROM rate WHERE id_rate = $id");
                $sth2->execute();

            header('Location: displaybook.php?id='.$id_book);
            exit(); //REDIRECTION

             }else{
            echo '<div class="danger">Something went wrong!</div>';
             }   
            
        }else {
            echo "<div class ='danger'>Error: Got not id!</div>";
        }
}else{
        echo "<div class ='danger'>You need privilege user admin</div>";
    }

?>