<?php 
$page = 'vote.php';
require 'assets/php/connect.php';
require 'assets/php/function.php';
include 'assets/php/background-image.php';
include 'assets/php/header.php';
include 'assets/php/nav.php';

if(isset($_SESSION['id'])){ // ACCES SEULEMENT AUX USERS
    if(isset($_GET['id'])) { // SI L'ID EST RECUPEREE

        $id = $_GET['id'];
        // RECUPERATION DES DONNÉES D'UN LIVRE EN PARTICULIER
        $sql = $db->query("SELECT * FROM book WHERE id=$id");
        $sql->setFetchMode(PDO::FETCH_ASSOC);
    
        $result = $sql->fetch();

        $id_user = $_SESSION['id'];
        // RECUPERATION DES DONNÉES DE L'UTILISATEUR
        $sql2 = $db->query("SELECT * FROM user WHERE id=$id_user");
        $sql2->setFetchMode(PDO::FETCH_ASSOC);
        $row = $sql2->fetch();
    } 
    ?>
    <section>
        <article id="cartouche">
            <div id="text-welcome">
                <h2 class="ml3">RATE YOUR FAVORITE BOOK</h2>
                <p>On a scale of 1 to 5, please rate this book:<br>
                (please stay polite or your comment will be deleted):</p>
        <!-- FORMULAIRE -->
                <form action="vote_book_post.php?id=<?= $result['id'] ?>" method="post" enctype="multipart/form-data">
                <div class="center2">
                    <div>
                        <input type="text" name="fullname" value="<?= $row['firstname']; ?> <?= $row['lastname']; ?>" >
                    </div>
                    <div>
                        <select name="vote" id="rate-select">
                        <option value="">RATE THIS BOOK</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </div>
                    <div>
                        <label for="comment">Tell us your story about this book:</label>:</label>
                        <input id="comment" name="comment" placeholder="YOUR COMMENT..."></input>
                    </div>
                    <div class="button margin">
                        <input type="submit" name="submit-book" class="button3" value="RATE">
                    </div> 
                </div>
                </form>


                <div class="button">
                    <a href="displaybook.php?id=<?= $id ?>" class="button3">RETURN</a>
                </div>
            </div>
        </article>
    </section>
    
    <?php  
        }else{
            echo "<div class ='danger'>You need to log into our website to access this page</div>";
        
        } 
        
        include 'assets/php/footer.php';?>