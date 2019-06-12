<?php 
require_once 'checkRoutes.php';
require_once '../controllers/WewsController.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
   $id = $_GET['id'];
   $wews = new WewsController();
   $post = $wews->getPostInfo($id);
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet" />

    <title>Wews</title>
</head>

<body class="<?php echo $theme; ?>">
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
            if($isLogged){
              echo '
              <li>
                  <a href="logout.php"><i class="fas fa-user-circle"></i> Logout</a>
              </li>
              <li>
                <a href="user_profil.php"> <i class="fas fa-cog"></i>Cont</a>
               </li>
              ';
            }else{
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
            <div class="PostPage">
                <div class="postContainer">
                    <div class="mainImage">
                        <img src= <?php echo $post['postUrlToImage']; ?>
                            alt="image" class="postImage" />
                    </div>
                    <div class="postDetails">
                        <div class="authorPost">
                            <i class="far fa-user"></i> <span><?php echo $post['postAuthor']; ?></span>
                        </div>
                        <div class="authorPost">
                            <i class="far fa-calendar-alt"></i> <span><?php echo $post['postPublishedAt']; ?></span>
                        </div>
                        <div class="authorPost">
                            <i class="fas fa-hashtag"></i> <span><?php echo $post['postCategory']; ?></span>
                        </div>
                    </div>
                    <div class="titlePost">
                        <p> <?php echo $post['postTitle']; ?> </p>
                    </div>
                    <div class="descriptionPost">
                        <p>
                            <br />
                            <br />
                            <?php echo explode('[+',$post['postDescription'])[0].'...'; ?>
                            <a target="_blank"; href=<?php  echo $post['postUrl']; ?>>Spre articol original</a>
                        </p>
                    </div>
                    <!-- <div class="moreImages">
                        <img src="https://via.placeholder.com/1000" alt="" />
                        <img src="https://via.placeholder.com/1000" alt="" />
                        <img src="https://via.placeholder.com/1000" alt="" />
                        <img src="https://via.placeholder.com/1000" alt="" />
                        <img src="https://via.placeholder.com/1000" alt="" />
                    </div> -->
                </div>
            </div>

            <!-- close PostPage  -->
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
</body>

</html>