<?php 
require_once 'checkRoutes.php';
if(!$isLogged){
  header('Location:/Wews/views/login.php?error=noacces');
}

require_once '../controllers/AccountController.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    AccountController::getTheme();
    AccountController::getCategories();
    
}

$error = '';
$mess = '';
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    switch ($error) {
        case 'categoriiOff':
            $mess = 'Categoriile nu s-au putut actualiza.';
            break;
        case 'themeOff':
            $mess = 'Tema nu s-a putut actualiza.';
            break;
    }
}
if(isset($_GET['success'])){
    switch ($_GET['success']) {
      case 'themeOn':
        $mess = 'Tema s-a actualizat cu succes.';
        break;
      case 'categoriiOn':
          $mess = 'Categoriile/Tema s-au actualizat cu succes.';
          break;
      
  }
  }

// $userInfo = AccountController::getUserInfo($_SESSION['id_user']);
$arrayOfCategories = AccountController::getUserCategories();
$userInfo = AccountController::getUserInfo($_SESSION['id_user']);

?>
<?php
// require_once 'checkRoutes.php';

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

    <title>Setari</title>
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
                        <a href="user_profil.php"><i class="fas fa-user"></i> User Profil</a>
                    </div>
                    <div class="siderbarElement">
                        <a href="notificari.php"><i class="fas fa-bell"></i>Notificari</a>
                    </div>
                    <div class="siderbarElement">
                        <a class="active" href="setari.php">
                            <i class="fas fa-cog"></i>Setari</a>
                    </div>
                    <div class="siderbarElement">
                        <a href="logout.php">
                            <i class="fas fa-sign-out-alt"></i>Deconectare</a>
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
                                <i class="fas fa-cog"></i>Cont</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <form action="" method="post">
                <div class="setting-box">
                    <div class="checkbox">
                        <div class="checkbox-title">
                            Categorii:
                        </div>
                        <input type="checkbox" name="categorie[]" value="business" <?php if(in_array('business',$arrayOfCategories)) echo 'checked'; ?>  />
                        Business<br /><br />
                        <input type="checkbox" name="categorie[]" value="entertainment" <?php if(in_array('entertainment',$arrayOfCategories)) echo 'checked'; ?>  />
                        Entertainment<br /><br />
                        <input type="checkbox" name="categorie[]" value="health" <?php if(in_array('health',$arrayOfCategories)) echo 'checked'; ?>  />
                        Health<br /><br />
                        <input type="checkbox" name="categorie[]" value="science" <?php if(in_array('science',$arrayOfCategories)) echo 'checked'; ?> />
                        Science<br /><br />
                        <input type="checkbox" name="categorie[]" value="sports" <?php if(in_array('sports',$arrayOfCategories)) echo 'checked'; ?>  />
                        Sports<br /><br />
                        <input type="checkbox" name="categorie[]" value="technology" <?php if(in_array('technology',$arrayOfCategories)) echo 'checked'; ?>  />
                        Technology<br /><br />
                        <input type="submit" value="Submit" />
                    </div>
                    <div class="theme">
                        <div class="theme-title">
                            Teme:
                        </div>
                        <input type="radio" name="theme" value="white" <?php if($userInfo['theme'] === 'white') { echo 'checked'; } ?>/> White<br />
                        <input type="radio" name="theme" value="dark"  <?php if($userInfo['theme'] === 'dark') { echo 'checked'; } ?>/> Dark<br />
                        <input type="submit" value="Submit" />
                    </div>
                    <div class="popup">
                      <?php 
                      require_once 'popup-success.php'; 
                      ?>
                    </div>
                </div>
                
            </form>
            
        </div>
    </div>
</body>

</html>

