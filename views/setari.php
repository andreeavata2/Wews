<?php
require_once 'checkRoutes.php';
if (!$isLogged) {
    header('Location:/Wews/views/login.php?error=noacces');
}

require_once '../controllers/AccountController.php';
require_once '../controllers/WewsController.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    AccountController::getTheme();
    AccountController::getCategories();
    AccountController::setDuration();

}

$userInfo = AccountController::getUserInfo($_SESSION['id_user']);
$arrayOfCategories = AccountController::getUserCategories();
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
                        <input type="checkbox" name="categorie[]" id="business" value="business"
                            <?php if (in_array('business', $arrayOfCategories)) echo 'checked'; ?> />
                        <label for="business">Business</label><br /><br />
                        <input type="checkbox" name="categorie[]" id="entertainment" value="entertainment"
                            <?php if (in_array('entertainment', $arrayOfCategories)) echo 'checked'; ?> />
                        <label for="entertainment">Entertainment</label><br /><br />
                        <input type="checkbox" name="categorie[]" id="health" value="health"
                            <?php if (in_array('health', $arrayOfCategories)) echo 'checked'; ?> />
                        <label for="health">Health</label><br /><br />
                        <input type="checkbox" name="categorie[]" id="science" value="science"
                            <?php if (in_array('science', $arrayOfCategories)) echo 'checked'; ?> />
                        <label for="science">Science</label><br /><br />
                        <input type="checkbox" name="categorie[]" id="sports" value="sports"
                            <?php if (in_array('sports', $arrayOfCategories)) echo 'checked'; ?> />
                        <label for="sports">Sports</label><br /><br />
                        <input type="checkbox" name="categorie[]" id="technology" value="technology"
                            <?php if (in_array('technology', $arrayOfCategories)) echo 'checked'; ?> />
                        <label for="technology">Technology</label><br /><br />
                        <input type="submit" value="Submit" />
                    </div>
                    <div class="theme">
                        <div class="theme-title">
                            Teme:
                        </div>
                        <input type="radio" name="theme" id="white" value="white" <?php if ($userInfo['theme'] === 'white') {
                                                                                        echo 'checked';
                                                                                    } ?> /> <label
                            for="white">White</label><br />
                        <input type="radio" name="theme" id="dark" value="dark" <?php if ($userInfo['theme'] === 'dark') {
                                                                                    echo 'checked';
                                                                                } ?> /> <label
                            for="dark">Dark</label><br />
                        <input type="submit" value="Submit" />
                    </div>
                    <div class="duration">
                        <div class="duration-title">
                            Interval de timp:
                        </div>
                        <input type="radio" name="duration" id="2minute" value="2 minutes" <?php if ($userInfo['duration'] === '2 minutes') {
                                                                                        echo 'checked';
                                                                                    } ?> /> <label
                            for="2minute">2 minutes</label><br />
                        <input type="radio" name="duration" id="5minute" value="5 minutes" <?php if ($userInfo['duration'] === '5 minutes') {
                                                                                    echo 'checked';
                                                                                } ?> /> <label
                            for="5minute">5 minute</label><br />
                        <input type="radio" name="duration" id="2h" value="2 hour" <?php if ($userInfo['duration'] === '2 hour') {
                                                                                    echo 'checked';
                                                                                } ?> /> <label
                            for="2h">2h</label><br />
                        <input type="radio" name="duration" id="12h" value="12 hour" <?php if ($userInfo['duration'] === '12 hour') {
                                                                                    echo 'checked';
                                                                                } ?> /> <label
                            for="12h">12h</label><br />
                        <input type="submit" value="Submit" />
                    </div>
                    <?php
                    if (isset($_GET['error'])) {
                        $errorMsg = "";
                        $error = $_GET['error'];
                        switch ($error) {
                            case 'categoriiOff':
                                $errorMsg = 'Categoriile nu s-au putut actualiza.';
                                break;
                            case 'themeOff':
                                $errorMsg = 'Tema nu s-a putut actualiza.';
                                break;
                        }
                        echo '
                            <div class="errorContainer" id="errorContainerId">
                                <span class="errorMessage">' . $errorMsg . '</span>
                            </div>';
                    }
                    ?>
                    <?php
                    if (isset($_GET['success'])) {
                        $successMsg = "";
                        switch ($_GET['success']) {
                            case 'themeOn':
                                $successMsg = 'Tema s-a actualizat cu succes.';
                                break;
                            case 'categoriiOn':
                                $successMsg = 'Categoriile/Tema s-au actualizat cu succes.';
                                break;
                        }
                        echo '
                            <div class="successContainer" id="successContainerId">
                                <span class="successMessage">' . $successMsg . '</span>
                            </div>';
                    }
                    ?>
                </div>

            </form>

        </div>
    </div>
</body>

</html>