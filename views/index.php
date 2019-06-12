<?php
require_once 'checkRoutes.php';
require_once '../controllers/WewsController.php';
$wews = new WewsController();
if(isset($_GET['category'])){
    $posts = $wews->getPostByCategory($_GET['category']);
}else{
    $posts = $wews->getPosts();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet" />

    <title>Document</title>
</head>

<body onload="fetchingData()" class="<?php echo $theme; ?>">
    <div class="onLoad" id="onLoadContainer">
        <span class="textToLoad" id="textToLoadId">Loading</span>
    </div>
    <header>
        <nav>
            <ul class="main">
                <li>
                    <a class="active" href="index.php"><i class="fas fa-home"></i> Acasa</a>
                </li>
                <li>
                    <a href="contact.php"><i class="fas fa-bars"></i> Contact</a>
                </li>

                <?php
                if ($isLogged) {
                    echo '
              <li>
                  <a href="logout.php"><i class="fas fa-user-circle"></i> Logout</a>
              </li>
              <li>
                <a href="user_profil.php"> <i class="fas fa-cog"></i>Cont</a>
               </li>
              ';
                } else {
                    echo '
              <li>
              <a href="login.php"><i class="fas fa-user-circle"></i> Login</a>
          </li>
              ';
                }
                ?>

            </ul>
        </nav>
        <article>
            <div class="main-title">
                <h1>Wews - News Web Manager</h1>
            </div>
        </article>
    </header>

    <article class="mainContainer">
        <section class="mainPage">
           <?php require_once 'view-posts.php'; ?>
            <div class="pageOptions">
                <?php require_once 'categories.php'; ?>
            </div>

            <div class="pageRecentPosts">
                <?php require_once 'recentPosts.php'; ?>
            </div>
        </section>
    </article>
    <aside></aside>
    <footer class="footer">
        <div class="iconsFooter">
            <a href="https://www.facebook.com/andreea.vatamanelu"><i class="fab fa-facebook-f"></i></a>
            <a href="https://github.com/andreeavata2/Wews"><i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/xranobi/"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="creator">
            <p class="creat">
                Powered by Mavriche Gabriela-Raluca and Vatamanelu Andreea
            </p>
        </div>
    </footer>

    <script src="../assets/js/main.js"></script>
</body>

</html>