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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "bla bla bla";
$updateUserInfo = AccountController::updateUserInfo($_SESSION['id_user']);
}
?>
<?php
require_once 'checkRoutes.php';
$error = '';
$mess = '';
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    switch ($error) {
        case 'canNotUpdateFile':
            $mess = 'Datele nu s-au putut actualiza. Te rugam sa incerci din nou.';
        case 'emailIsAllreadyExist':
            $mess = 'Emailul pe care l-ati introdus este deja folosit';
    }
}
if(isset($_GET['successfullUpdated'])){
  switch ($_GET['successfullUpdated']) {
    case 'true':
        $mess = 'Date actualizate cu succes.';
}
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

    <title>User Profil</title>
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
                        <a class="active" href="user_profil.php"><i class="fas fa-user"></i> User Profil</a>
                    </div>
                    <div class="siderbarElement">
                        <a href="notificari.php"><i class="fas fa-bell"></i>Notificari</a>
                    </div>
                    <div class="siderbarElement">
                        <a href="setari.php"> <i class="fas fa-cog"></i>Setari</a>
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
            <div class="user-profil">
                <div class="info-profil">
                    <p>Informatii profil</p>
                </div>
                <div class="body-profil-information">
                    <div class="container-profil">
                        <form action="" method="post">
                            <label for="firstName">Numele</label>
                            <input type="text" id="firstName" name="firstName"
                                value="<?php echo $userInfo['firstName']; ?>" placeholder="Numele tau..." />

                            <label for="lastName">Prenumele</label>
                            <input type="text" id="lastName" name="lastName"
                                value="<?php echo $userInfo['lastName']; ?>" placeholder="Prenumele tau..." />

                            <label for="email">E-mail</label>
                            <input type="text" id="email" name="email" value="<?php echo $userInfo['email']; ?>"
                                placeholder="E-mail-ul tau..." />

                            <label for="phone">Telefon</label>
                            <input type="text" id="phone" name="phone" value="<?php echo $userInfo['phone']; ?>"
                                placeholder="Telefonul tau..." />
                            <label for="DOB">Zi de nastere</label>

                            <input type="date" id="DOB" name="DOB" value="<?php echo $userInfo['DOB']; ?>" />

                            <label for="country">Tara</label>
                            <select id="country" name="country" value="<?php echo $userInfo['country']; ?>">
                                <option value="Romania">Romania</option>
                                <option value="Canada">Canada</option>
                                <option value="Usa">USA</option>
                            </select>
                            <input type="submit" name="Submit">
                            <div class="popup">
                                <?php  
                                require_once 'popup-success.php'; 
                                ?>
                            </div>
                            <!-- <div style=" <?php echo $error === '' ? 'none' : 'block'; ?>" class="message">
                            <span>
                                <?php echo $mess; ?>
                            </span>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
