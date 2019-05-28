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
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Roboto"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Playfair+Display"
      rel="stylesheet"
    />

    <title>Document</title>
  </head>
  <body class="<?php echo $theme; ?>">
    <header>
      <nav>
        <ul class="main">
          <li>
            <a href="index.php"><i class="fas fa-home"></i> Acasa</a>
          </li>
          <li>
            <a class="active" href="contact.php"
              ><i class="fas fa-bars"></i> Contact</a
            >
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
          <h1> Wews - News Web Manager</h1>
        </div>
      </article>
    </header>
    <div class="background">
      <div class="space"></div>
      <form class="contactBox">
        <h2>Cum va putem ajuta?</h2>
        <p>
          Suntem aici pentru a răspunde la toate întrebările dvs. pentru animale
          de companie - mari sau mici, cu adevărat grave sau puțin prostești.
          Contactați-ne direct în orice moment, în orice mod. Dacă nu aveți o
          întrebare specifică, consultați mai jos conținutul nostru.
        </p>
        <h2>Ne puteti gasi la urmatoarele adrese de E-mail:</h2>
        <p>andreea.vatamanelu@yahoo.com</p>
        <p>ralucamavriche@yahoo.com</p>
        <h2>Sau la numerele de telefon:</h2>
        <p>0761032361 - Andreea</p>
        <p>0743302140 - Raluca</p>
      </form>
      <div class="spaceEnd"></div>
    </div>

    <aside></aside>
    <footer class="footer">
      <div class="iconsFooter">
        <a href="https://www.facebook.com/andreea.vatamanelu"
          ><i class="fab fa-facebook-f"></i
        ></a>
        <a href="https://github.com/andreeavata2/Wews"
          ><i class="fab fa-github"></i
        ></a>
        <a href="https://www.instagram.com/xranobi/"
          ><i class="fab fa-instagram"></i
        ></a>
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
