<?php 
require_once 'checkRoutes.php';
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

    <title>Document</title>
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
              <img
                src="https://www.gftskills.com/wp-content/uploads/2012/09/7-Ways-Juggling-Makes-A-Soccer-Player-Better-FB.jpg"
                alt="image"
                class="postImage"
              />
            </div>
            <div class="postDetails">
              <div class="authorPost">
                  <i class="far fa-user"></i> <span>Autor</span>
              </div>
              <div class="authorPost">
                  <i class="far fa-calendar-alt"></i> <span>10/10/1998</span>
              </div>
              <div class="authorPost">
                  <i class="fas fa-hashtag"></i> <span>Muzica</span>
              </div>
            </div>
            
            <div class="titlePost">
              <p>Title Post</p>
            </div>
            <div class="descriptionPost">
              <p>
                <br />
                <br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                corporis, architecto libero perspiciatis reiciendis, cupiditate
                voluptatum quas doloremque dolores cumque, eveniet perferendis
                itaque facilis magnam eaque commodi. Facere, odit facilis. Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                corporis, architecto libero perspiciatis reiciendis, cupiditate
                voluptatum quas doloremque dolores cumque, eveniet perferendis
                itaque facilis magnam eaque commodi. Facere, odit facilis. Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                corporis, architecto libero perspiciatis reiciendis, cupiditate
                voluptatum quas doloremque dolores cumque, eveniet perferendis
                itaque facilis magnam eaque commodi. Facere, odit facilis. Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                corporis, architecto libero perspiciatis reiciendis, cupiditate
                voluptatum quas doloremque dolores cumque, eveniet perferendis
                itaque facilis magnam eaque commodi. Facere, odit facilis. Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Ipsum
                corporis, architecto libero perspiciatis reiciendis, cupiditate
                voluptatum quas doloremque dolores cumque, eveniet perferendis
                itaque facilis magnam eaque commodi.
                <br />
                <br />
                <br />
                Facere, odit facilis. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Ipsum corporis, architecto libero perspiciatis
                reiciendis, cupiditate voluptatum quas doloremque dolores
                cumque, eveniet perferendis itaque facilis magnam eaque commodi.
                Facere, odit facilis. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Ipsum corporis, architecto libero perspiciatis
                reiciendis, cupiditate voluptatum quas doloremque dolores
                cumque, eveniet perferendis itaque facilis magnam eaque commodi.
                Facere, odit facilis.
              </p>
            </div>
            <div class="moreImages">
              <img src="https://via.placeholder.com/1000" alt="" />
              <img src="https://via.placeholder.com/1000" alt="" />
              <img src="https://via.placeholder.com/1000" alt="" />
              <img src="https://via.placeholder.com/1000" alt="" />
              <img src="https://via.placeholder.com/1000" alt="" />
            </div>
            </div>
                </div>
            </div>
            <div class="pageOptions">
                <div class="categories">
                    <div class="categoriesTitle">
                        <span>Categorii</span>
                    </div>
                    <div class="categoriesBody">
                        <div class="categoriesContainer">
                            <a href="#">
                                <span class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                                <span class="nameCategories">
                                    Tehnologie
                                </span>
                                <span class="numberOfPostsForCategories">
                                    10
                                </span>
                            </a>
                        </div>
                        <div class="categoriesContainer">
                            <a href="#">
                                <span class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                                <span class="nameCategories">
                                    Stiinta
                                </span>
                                <span class="numberOfPostsForCategories">
                                    10
                                </span>
                            </a>
                        </div>
                        <div class="categoriesContainer">
                            <a href="#">
                                <span class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                                <span class="nameCategories">
                                    Politica
                                </span>
                                <span class="numberOfPostsForCategories">
                                    10
                                </span>
                            </a>
                        </div>
                        <div class="categoriesContainer">
                            <a href="#">
                                <span class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                                <span class="nameCategories">
                                    Sport
                                </span>
                                <span class="numberOfPostsForCategories">
                                    10
                                </span>
                            </a>
                        </div>
                        <div class="categoriesContainer">
                            <a href="#">
                                <span class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                                <span class="nameCategories">
                                    Social
                                </span>
                                <span class="numberOfPostsForCategories">
                                    10
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pageRecentPosts">
                <div class="recentPosts">
                    <div class="recentTitlePosts">
                        <span>Postari Recente</span>
                    </div>
                    <div class="recentBody">
                        <a href="#">
                            <div class="recentContainer">
                                <div class="recentImg">
                                    <img src="https://www.joslin.org/images/hp-news-icon.png" alt="recentPost" />
                                </div>
                                <div class="recentDescription">
                                    The best title ever Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Aliquid blanditiis natus, atque
                                    repellendus voluptates molestias quaerat ducimus fuga nisi,
                                    excepturi eum...
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="recentContainer">
                                <div class="recentImg">
                                    <img src="https://www.joslin.org/images/hp-news-icon.png" alt="recentPost" />
                                </div>
                                <div class="recentDescription">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptates, adipisci atque nihil sint iste aperiam
                                    distinctio est minima architecto tempore quae at cumque a
                                    quasi illo accusamus necessitatibus minus quia?
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="recentContainer">
                                <div class="recentImg">
                                    <img src="https://www.joslin.org/images/hp-news-icon.png" alt="recentPost" />
                                </div>
                                <div class="recentDescription">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Temporibus laboriosam nostrum dignissimos, minus quasi
                                    impedit asperiores in facere incidunt delectus non sed ut
                                    autem ab quas nemo neque earum ea!
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
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
