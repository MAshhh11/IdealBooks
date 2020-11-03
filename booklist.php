<?php 
$page = 'booklist.php';
require 'assets/php/connect.php';
require 'assets/php/function.php';
include 'assets/php/background-image.php';
include 'assets/php/header.php';
include 'assets/php/nav.php';

// RECUPERATION DE LA BDD TABLE BOOK
$sql = $db->query("SELECT * FROM book");
$sql->setFetchMode(PDO::FETCH_ASSOC);

?>

<section>
      
    <article id="cartouche">
        <div id="text-welcome">
                <h2 class="ml3">Welcome to ideal books!</h2>
                <h3>THE LIBRARY</h3>
            
            <?php if(isset($_SESSION['id'])){ 
                //AJOUT DE LIVRES ET RECHERCHE POUR LES USERS SEULEMENT
            ?> 
            <p>Search for wine or you can also add a new entry to Ideal Books:</p>
                <div class="button">
                    <a href="add_book.php" class="button3">ADD A NEW BOOK</a>
                </div>
        <?php
        }?>
        <!-- FORMULAIRE DE RECHERCHE -->
            <p>You can find your favorite book in our list below:</p>
            <form action="">
                <input id="search" type="text" placeholder="Search for books..." name="search">
            </form>
    <!-- ZONE CIBLE DE RESULTATS -->
            <div id="results" class="flex">
                <?php while($row = $sql->fetch()){ 
                    // LA LISTE DES LIVRES S'AFFICHE ICI
        ?>
                <div id="card" class="center">
                    <img src="<?=$row['picture'];?>" alt="cover_book" width="100%" height="auto" style="border-radius:10px">
                    <h2><?= $row['title']; ?></h2>
                    <p><?= $row['author']; ?></p>
                    <p><?= $row['genre']; ?></p>
                    <a class="button3" href="displaybook.php?id=<?= $row['id']; ?>">OPEN</a>
                <?php 
                    if(isset($_SESSION['id'])){
                        // BOUTONS MODIFY ET DELETE POUR LES USERS
                ?>
                             <a class="button3" href="modifybook.php?id=<?= $row['id']; ?>">MODIFY</a>
                            <a class="confirm button3" href="deletebook.php?id=<?= $row['id']; ?>">DELETE</a>
                            <a class="button3" href="vote.php?id=<?= $row['id']; ?>">RATE</a>
                        
                <?php } ?>
                </div>
            <?php } ?>
                
            </div>
            
        <?php if(!isset($_SESSION['id'])){
                // BOUTON RETOUR POUR LES USERS
            ?>
             <div class="button2">
                <a href="index.php" class="button3">RETURN</a>
            </div>
            <?php
        }?>
        
        <?php if(isset($_SESSION['id'])){ 
             // BOUTON RETOUR POUR LES NON USERS
            ?>
            <div class="button2">
                <a href="profile.php" class="button3">RETURN</a>
            </div>
        <?php
        }?>
        </div> 
    </article>

</section>

<?php include 'assets/php/footer.php'; ?>