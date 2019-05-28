<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
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
            <a href="contact.php"><i class="fas fa-bars"></i> Contact</a>
          </li>
          <li>
            <a class="active" href="login.php"
              ><i class="fas fa-user-circle"></i> Login</a
            >
          </li>
          <li>
            <a href="user_profil.php"> <i class="fas fa-cog"></i>Cont</a>
          </li>
        </ul>
      </nav>
      <article>
        <div class="main-title">
          <span>Mi-am uitat parola</span>
        </div>
      </article>
    </header>
    <div class="background">
      <div class="space"></div>
      <div class="loginBox">
        <p class="forgotPass">Poti reseta parola aici</p>
        <input
          type="text"
          name="resetPass"
          required
          placeholder="Numarul de telefon"
        />
        <div class="btn forgotPass">
          <button class="button" type="submit">
            Trimite-mi parola
          </button>
        </div>
        <div class="cancel">
          <a class="cancelRef" href="login.php">
            <p>
              <i class="fas fa-arrow-left"></i>Anuleaza si mergi inapoi la
              pagina de Login
            </p>
          </a>
        </div>
      </div>
      <div class="spaceEnd"></div>
    </div>

    <aside></aside>
    <!-- <footer class="footer">
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
    </footer> -->
  </body>
</html>
