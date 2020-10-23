<?php

if($page == 'index.php'){
    echo '<body style="background-image: url(assets/img/index.jpg);">';
    
} elseif($page == 'register.php') {
    echo '<body style="background-image: url(assets/img/index.jpg);">';

} elseif($page == 'profile.php') {
    echo '<body style="background-image: url(assets/img/profile.jpg);">';
    
} elseif($page == 'modifyuser.php') {
    echo '<body style="background-image: url(assets/img/profile.jpg);">';
    
} elseif($page == 'displaybook.php') {
    echo '<body style="background-image: url(assets/img/displaybook.jpg);">'; 
    
} elseif($page == 'add_book.php') {
    echo '<body style="background-image: url(assets/img/booklist.jpg);">';

} elseif($page == 'add_book_post.php') {
    echo '<body style="background-image: url(assets/img/booklist.jpg);">';
    
} elseif($page == 'booklist.php') {
    echo '<body style="background-image: url(assets/img/comment.jpg);">';

} elseif($page == 'comments.php') {
    echo '<body style="background-image: url(assets/img/comment.jpg);">';

} elseif($page == 'vote.php') {
    echo '<body style="background-image: url(assets/img/booklist.jpg);">';

} elseif($page == 'tools.php') {
    echo '<body style="background-image: url(assets/img/tools.jpg);">';

} elseif($page == 'modifybook.php') {
    echo '<body style="background-image: url(assets/img/booklist.jpg);">';

} elseif($page == 'modifybook_post.php') {
    echo '<body style="background-image: url(assets/img/booklist.jpg);">';
 
}else{
    echo '<body>';
}