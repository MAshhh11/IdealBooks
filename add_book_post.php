<?php

$page = 'add_book_post.php';
require 'assets/php/connect.php';
include 'assets/php/background-image.php';
include 'assets/php/header.php';
include 'assets/php/nav.php';
          
if(!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['genre']) && !empty($_POST['synopsis']) && !empty($_POST['edition']) && !empty($_POST['publishyear'])){ // RECUPERE LES DONNEES DU FORMULAIRE
                
    $file = $_FILES['picture'];
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars ($_POST['author']);
    $genre = htmlspecialchars($_POST['genre']);
    $synopsis = htmlspecialchars($_POST['synopsis']);
    $edition = htmlspecialchars($_POST['edition']);
    $publishyear = htmlspecialchars($_POST['publishyear']);
            
    
            if($file['size'] <= 1000000): // si la taille de fichier n'excède pas 1000000 alors on l'upload
                $dbname = uniqid() . '_' . $file['name'];
                $upload_dir = "upload/img/";
                $upload_name = $upload_dir . $dbname;
                $move_result = move_uploaded_file($file['tmp_name'], $upload_name);
                if($move_result): 
                // si l'upload réussi on envoie la requete
                     
                    $sth = $db->prepare(" INSERT INTO book(title,author,genre,synopsis,edition,publishyear,picture,id_user) VALUES (:title,:author,:genre,:synopsis,:edition,:publishyear,:picture,:id_user)");
                        $sth->bindValue(':title',$title);
                        $sth->bindValue(':author',$author);
                        $sth->bindValue(':genre',$genre);
                        $sth->bindValue(':synopsis',$synopsis);
                        $sth->bindValue(':edition',$edition);
                        $sth->bindValue(':publishyear',$publishyear);
                        $sth->bindValue(':picture',$upload_name);
                        $sth->bindValue(':id_user',$_SESSION['id']);
                        $sth->execute();
                        
                else: 
                    echo '<div class="danger">Error in uploading the file</div>';
                    die();
                endif;
            else: 
                echo '<div class="danger">The size of the file is not suitable</div>';
                die();
            endif;
            echo '<div class="success">Congrats your wine list has been updated!</div>';
            header('location:booklist.php');

}else{
     echo '<div class="danger">You must fill out all required fields!</div>';
}

        include 'assets/php/footer.php';?>