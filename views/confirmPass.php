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
            <a href="contact.php"><i class="fas fa-bars"></i> Contact</a>
          </li>
          <li>
            <a class="active" href="login.php"
              ><i class="fas fa-user-circle"></i> Login</a
            >
          </li>
        </ul>
      </nav>
      <article>
        <div class="main-title">
          <span>Mi-am uitat parola</span>
        </div>
      </article>
    </header>
    <form action="#" method="post">
    <div class="background">
      <div class="space"></div>
      <div class="loginBox">
        <input
          type="text"
          name="email"
          required
          placeholder="Email"
        />
        <input
          type="password"
          name="password"
          required
          placeholder="Parola noua"
        />
        <input
          type="password"
          name="confirmPass"
          required
          placeholder="Confirma parola"
        />
        <div class="btn forgotPass">
          <button class="button" type="submit">
            Reseteaza parola
          </button>
        </div>
      </div>
      <div class="spaceEnd"></div>
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

<?php
session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'userregistration');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPass = $_POST['confirmPass'];

$s = " select * from usertable where email = '$email' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if( $num == 1 && $password == $confirmPass ){
  $sql = "UPDATE usertable SET password ='$password' WHERE email= '$email' ";
  $result2 = mysqli_query($con, $sql);
  $num2 = mysqli_num_rows($result2);
  header('location:login.php');
}else{
  header('location:confirmPass.php');
}
}
?>
