<?php 
$page = 'index.php';
require 'assets/php/connect.php';
include 'assets/php/background-image.php';
include 'assets/php/header.php';
include 'assets/php/nav.php';

if(isset($_SESSION['id'])){
    echo '<div class="danger">You are already logged! You can consult our library or add new books!</div>';
}

if(isset($_POST['submit-login'])){ // VERIFICATION D'IDENTIFIANTS
    $user_email = htmlspecialchars($_POST['user_email']);
    $user_pass = htmlspecialchars($_POST['user_password']);
   $sql= $db->query("SELECT * FROM user WHERE email ='$user_email'");
   
    if($row = $sql->fetch()){
            $db_id = $row['id'];
            $db_email = $row['email'];
            $db_pass = $row['password'];
        
        if(password_verify($user_pass,$db_pass)){
            $_SESSION['id'] = $db_id;
            $_SESSION['email'] = $db_email;

            echo '<div class="success">Welcome to our website!</div>';
            header('Location:profile.php');
            
        }else{
            echo '<div class="danger">Incorrect Password!</div>';
        }
   }else{
       echo '<div class="danger">Unknown User ID!</div>';
    }
}
?>

<section>
    <article id="cartouche" class="fond">
        <div id="text-welcome">
            <h1 class="ml3">Welcome to ideal books!</h1>
            <p>If you want to be a part of the community, contact request@idealbook.com!</p>
        <!-- FORMULAIRE -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div>
                    <input type="text" name="user_email" placeholder="EMAIL">
                </div>
                <div>
                    <input type="password" name="user_password" placeholder="PASSWORD">
                </div>
                <div>
                    <input type="submit" name="submit-login" class="button3" value="LOGIN">
                </div>
                <div>
                    <a id="gallery" href="booklist.php" class="button3">ENTER THE LIBRARY</a>
                </div>  
            </div>
            </form>
        </div>
    </article>
</section>

<?php include 'assets/php/footer.php'; ?>