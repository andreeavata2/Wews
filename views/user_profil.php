<?php 
require_once 'checkRoutes.php';
if(!$isLogged){
  header('Location:/Wews/views/login.php?error=noacces');
}

require_once '../controllers/AccountController.php';
$userInfo = AccountController::getUserInfo($_SESSION['id_user']);

// create form with save btn
// create method in controller 'updateUserInfo'
// create update model method

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

    <title>User Profil</title>
  </head>
  <body>
    <div class="mainDashboard">
      <div class="siderbar">
        <div class="siderbar-mainDashbord">
          <div class="siderbarLogo">
            <p>NEWS WEB MANAGER</p>
          </div>
          <div class="nav-sidebar">
            <div class="siderbarElement">
              <a class="active" href="user_profil.php"
                ><i class="fas fa-user"></i> User Profil</a
              >
            </div>
            <div class="siderbarElement">
              <a href="notificari.php"
                ><i class="fas fa-bell"></i>Notificari</a
              >
            </div>
            <div class="siderbarElement">
              <a href="setari.php"> <i class="fas fa-cog"></i>Setari</a>
            </div>
            <div class="siderbarElement">
              <a href="logout.php">
                <i class="fas fa-sign-out-alt"></i>Deconectare</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="main-panel">
        <header>
          <nav>
            <ul class="main">
              <li>
                <a href="index.php"><i class="fas fa-home"></i>Acasa</a>
              </li>
              <li>
                <a href="contact.php"><i class="fas fa-bars"></i> Contact</a>
              </li>
              <li>
                <a class="active" href="user_profil.php">
                  <i class="fas fa-cog"></i>Cont</a
                >
              </li>
            </ul>
          </nav>
        </header>
        <div class="user-profil">
          <div class="info-profil">
            <p>Informatii profil</p>
          </div>
          <div class="body-profil-information">
            <div class="container-profil">
              <form action="/action_page.php">
                <label for="fname">Numele</label>
                <input
                  type="text"
                  id="fname"
                  name="firstname"
                  value="<?php echo $userInfo['firstName']; ?>"
                  placeholder="Numele tau..."
                />

                <label for="lname">Prenumele</label>
                <input
                  type="text"
                  id="lname"
                  name="lastname"
                  value="<?php echo $userInfo['lastName']; ?>"
                  placeholder="Prenumele tau..."
                />

                <label for="email">E-mail</label>
                <input
                  type="text"
                  id="email"
                  name="email"
                  value="<?php echo $userInfo['email']; ?>"
                  placeholder="E-mail-ul tau..."
                />

                <label for="number">Telefon</label>
                <input
                  type="text"
                  id="number"
                  name="phonenumber"
                  value="<?php echo $userInfo['phone']; ?>"
                  placeholder="Telefonul tau..."
                />

                <label for="country">Tara</label>
                <select id="country" name="country" value="<?php echo $userInfo['country']; ?>">
                  <option value="romania">Romania</option>
                  <option value="canada">Canada</option>
                  <option value="usa">USA</option>
                </select>

                <label for="birthday">Zi de nastere</label>

                <input type="date" id="birthday" name="birthday-user"   value="<?php echo $userInfo['DOB']; ?>" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
