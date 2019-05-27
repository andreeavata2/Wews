<?php 
require_once 'checkRoutes.php';
if(!$isLogged){
  header('Location:/Wews/views/login.php?error=noacces');
}

require_once '../controllers/AccountController.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    AccountController::getCategories();
    AccountController::getTheme();
}

// $userInfo = AccountController::getUserInfo($_SESSION['id_user']);
$arrayOfCategories = AccountController::getUserCategories();
$userInfo = AccountController::getUserInfo($_SESSION['id_user']);


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
                        <input type="checkbox" name="categorie[]" value="Tehnologie" <?php if(in_array('Tehnologie',$arrayOfCategories)) echo 'checked'; ?>  />
                        Tehnologie<br /><br />
                        <input type="checkbox" name="categorie[]" value="Stiinta" <?php if(in_array('Stiinta',$arrayOfCategories)) echo 'checked'; ?>  />
                        Stiinta<br /><br />
                        <input type="checkbox" name="categorie[]" value="Politica" <?php if(in_array('Politica',$arrayOfCategories)) echo 'checked'; ?>  />
                        Politica<br /><br />
                        <input type="checkbox" name="categorie[]" value="Sport" <?php if(in_array('Sport',$arrayOfCategories)) echo 'checked'; ?> />
                        Sport<br /><br />
                        <input type="checkbox" name="categorie[]" value="Social" <?php if(in_array('Social',$arrayOfCategories)) echo 'checked'; ?>  />
                        Social<br /><br />
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
                </div>
            </form>
        </div>
    </div>
</body>

</html>