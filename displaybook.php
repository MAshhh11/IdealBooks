<?php 
$page = 'displaybook.php';
require 'assets/php/connect.php';
require 'assets/php/function.php';
include 'assets/php/background-image.php';
include 'assets/php/header.php';
include 'assets/php/nav.php';

?>

<section>
    <article id="cartouche">
        <div id="text-welcome">
            <h2 class="ml3">Welcome to ideal books!</h2>
                <?php
                    displayBook();//FONCTION QUI AFFICHE LE LIVRE
                ?>
        </div>
    </article>
</section>

<?php 

include 'assets/php/footer.php'; ?>