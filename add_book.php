<?php 
$page = 'add_book.php';
require 'assets/php/connect.php';
include 'assets/php/background-image.php';
include 'assets/php/header.php';
include 'assets/php/nav.php';

if(isset($_SESSION['id'])){    // VISIBLE SEULEMENT DES USERS
        
?>
<section>
    <article id="cartouche">
        <div id="text-welcome">
            <h2 class="ml3">ADD A NEW BOOK</h2>
            <p>Please fill in all fields:</p>
            <!-- FORMULAIRE -->
            <form action="add_book_post.php" method="post" enctype="multipart/form-data">
            <div class="flex3">
    <div>
        <div>
            <input type="text" name="title" placeholder="TITLE" >
        </div>
        <div>
            <input type="text" name="author" placeholder="AUTHOR" >
        </div>
        <div>
            <input type="text" name="genre" placeholder="GENRE" >
        </div>
    </div>
    <div>
        <div>
            <input type="text" name="synopsis" placeholder="SYNOPSIS" >
        </div>
        <div>
            <input type="text" name="edition" placeholder="EDITION" >
        </div>
        <div>
            <input type="text" name="publishyear" placeholder="PUBLISHYEAR">
        </div>
        </div> 
    </div>
                <div>
                    <label for="file" class="label-file">ADD A BOOK COVER
                    <input id="file" class="input-file" type="file" name="picture">
                    </label>
                </div> 
                <div class="button">
                    <input type="submit" name="submit-wine" class="button3" value="ADD A NEW BOOK">
                </div> 
            </form>
            <div class="button">
                <?php if($page == 'booklist.php'){?>
            <a href="booklist.php" class="btn2">RETURN</a>
                <?php }else{?>
                        <a href="profile.php" class="button3">RETURN</a>
            <?php  }?>
            </div>
        </div>
    </article>
</section>

<?php  
    }else{
        echo "<div class ='danger'>You need to log into our website to access this page</div>";
    
    } 
    
    include 'assets/php/footer.php';?>