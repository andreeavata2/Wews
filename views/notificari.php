<?php 
require_once 'checkRoutes.php';
if(!$isLogged){
  header('Location:/Wews/views/login.php?error=noacces');
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

    <title>Notificari</title>
  </head>
  <body class="<?php echo $theme; ?>">
    <div class="mainDashboard">
      <div class="siderbar">
        <div class="siderbar-mainDashbord">
          <div class="siderbarLogo">
            <p>NEWS WEB MANAGER</p>
          </div>
          <div class="nav-sidebar">
            <div class="siderbarElement">
              <a href="user_profil.php"
                ><i class="fas fa-user"></i> User Profil</a
              >
            </div>
            <div class="siderbarElement">
              <a class="active" href="notificari.php"
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
        <div class="main-notification-post">
          <div class="notification-post">
            <div class="notification-title-post">
              <p>Notificari:</p>
            </div>
            <div class="body-notification-post">
              <a href="#">
                <div class="notification-container">
                  <div class="notification-img">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlIf2cfbBPOJYeShF_x9VbDGGHdEI0obp7ohO9_8EfCsYquYxI"
                      alt="notificationImg"
                    />
                  </div>

                  <div class="notification-description">
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Molestias, molestiae sed minima cumque numquam odio esse.
                      Cum deleniti deserunt necessitatibus, officiis neque
                      pariatur nam! Voluptas nobis alias debitis sint ipsam!
                    </p>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="notification-container">
                  <div class="notification-img">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlIf2cfbBPOJYeShF_x9VbDGGHdEI0obp7ohO9_8EfCsYquYxI"
                      alt="notificationImg"
                    />
                  </div>
                  <div class="notification-description">
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Nihil ab maxime ipsa quis doloribus distinctio incidunt
                      non, aut neque quaerat, consequatur fuga corrupti optio.
                      Iste suscipit praesentium alias numquam nemo!
                    </p>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="notification-container">
                  <div class="notification-img">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlIf2cfbBPOJYeShF_x9VbDGGHdEI0obp7ohO9_8EfCsYquYxI"
                      alt="notificationImg"
                    />
                  </div>
                  <div class="notification-description">
                    <p>
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Non tempore enim ullam alias debitis ipsum obcaecati
                      fugiat, fuga molestiae nostrum omnis praesentium optio
                      eveniet quod officia quos neque consectetur ipsam.
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
