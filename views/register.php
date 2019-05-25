<?php 

require_once '../controllers/AccountController.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    AccountController::SignUp(); //  static function
    // $auth  = new AuthController();
    // $auth->SignUp(); // fara static
}
?>
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
  <body>
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
          <span>Formular de inregistrare</span>
        </div>
      </article>
    </header>
    <form action="#" method="post">
    <div class="background">
      <div class="space"></div>
      <section class="loginBox">
        <div class="firstName">
          <p>
            Nume
          </p>
          <input type="text" name="firstName" class="form-control" required placeholder="Nume" />
        </div>
        <div class="Prenume">
          <p>Prenume</p>
          <input type="text" name="lastName"  class="form-control" required placeholder="Prenume" />
        </div>
        <div class="email">
          <p>
            E-mail
          </p>
          <input type="email" name="email" class="form-control" required placeholder="E-mail" />
        </div>
        <div class="password">
          <p>Parola</p>
          <input type="password" name="password" class="form-control" required placeholder="Parola" />
        </div>
        <div class="confPass">
          <p>Confirma Parola</p>
          <input
            type="password"
            name="confPass"
            class="form-control"
            required
            placeholder="Confirma parola"
          />
        </div>
        <div class="phone">
          <p>Telefon</p>
          <input type="text" name="phone" class="form-control" placeholder="Telefon" required />
        </div>
        <div class="birthday">
          <p>Zi de nastere</p>
          <input type="date" name="date" class="form-control" />
        </div>
        <div class="country">
          <p>Tara</p>
          <input type="text" name="country" class="form-control" placeholder="Tara" required />
        </div>
        <div class="btn">
          <button class="button" type="submit">
            Inscrie-te
            <i class="fas fa-arrow-right"></i>
          </button>
      </div>
      </section>
    </div>
    </form>
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
