<?php 
$page = 'tools.php';
require 'assets/php/connect.php';
require 'assets/php/function.php';
include 'assets/php/background-image.php';
include 'assets/php/header.php';
include 'assets/php/nav.php';
if (isset($_SESSION['id']) && $_SESSION['id'] == 3){
?>

<section>
    <article id="cartouche">
        <div id="text-welcome">
        <h2 class="ml3">WELCOME TO THE ADMIN PANEL!</h2>
        <nav>
            <ul>
                <li class="litools"><a href="#userlist">USER LIST</a></li>
                <li class="litools"><a href="#moderate">MODERATE COMMENTS</a></li>
                <li class="litools"><a href="#booklist">LIST OF BOOKS</a></li>
            </ul>

            <div>
                    <a href="booklist.php" class="button3">RETURN TO THE LIBRARY</a>
            </div>

        <h3 id="userlist">USER LIST</h3>
        <p>You can decide whether to update users profile or to remove users from database:</p>
            <div class="flex" id="results">

            <?php
                displayAllUsers(); //FONCTION QUI AFFICHE LES USERS
            ?>
            </div>
        <h3 id="moderate">MODERATE COMMENTS</h3>
        <p>You can moderate user comments:</p>
            <div class="flex" id="results">
            <?php
                displayAllComments(); //FONCTION QUI AFFICHE LES COMMENTAIRES
            ?>
            </div>
         <h3 id="booklist">LIST OF BOOKS</h3>
         <p>You can decide whether to update wines descriptions or to remove books from database:</p>
            <div class="flex" id="results">
            <?php
                displayAllBookTools(); //FONCTION QUI AFFICHE LES LIVRES
            ?>
            </div>
            <div class="button2">
                <a href="profile.php" class="button3">RETURN</a>
            </div>
        </div>
        
    </article>
</section>

<?php  
}else{
    echo "<div class ='danger'>You do not have sufficient permissions to access this page.</div>";
}
include 'assets/php/footer.php'; ?>