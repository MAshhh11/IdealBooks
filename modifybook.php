<?php 
$page = 'modifybook.php';
require 'assets/php/connect.php';
include 'assets/php/background-image.php';
include 'assets/php/header.php';
include 'assets/php/nav.php';


if(isset($_SESSION['id'])){    // VISIBLE SEULEMENT DES USERS
    if(isset($_GET['id'])) { 

        $id = $_GET['id']; // RECUPERE L'ID
        $sql = $db->query("SELECT * FROM book WHERE id=$id");
        $sql->setFetchMode(PDO::FETCH_ASSOC);
    
        $result = $sql->fetch(); // AFFICHAGE LES DONNEES DU LIVRE A MODIFIER
    }

?>

<section>
<article id="cartouche">
<div id="text-welcome">
    <h2 class="ml3">MODIFY A BOOK</h2>
    <p>Please, modify the information provided:</p>
    <form action="modifybook_post.php?id=<?= $result['id'] ?>" method="post" enctype="multipart/form-data">
    <div class="flex3">
    <div>
        <div>
            <input type="text" name="title" value="<?= $result['title'] ?>" >
        </div>
        <div>
            <input type="text" name="author" value="<?= $result['author'] ?>" >
        </div>
        <div>
            <input type="text" name="genre" value="<?= $result['genre'] ?>" >
        </div>
    </div>
    <div>
        <div>
            <input type="text" name="synopsis" value="<?= $result['synopsis'] ?>" >
        </div>
        <div>
            <input type="text" name="edition" value="<?= $result['edition'] ?>" >
        </div>
        <div>
            <input type="text" name="publishyear" value="<?= $result['publishyear'] ?>">
        </div>
        </div> 
    </div>
        <div>
            <label for="file" class="label-file">ADD A BOOK COVER
            <input id="file" class="input-file" type="file" name="picture">
            </label>
        </div> 
        <div class="button2">
            <input type="submit" name="submit-wine" class="button3" value="UPDATE INFOS">
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
