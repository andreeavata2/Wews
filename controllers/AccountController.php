<?php

class AccountController
{
    public function __contruct()
    {
        // $this->check
        echo 'sa';
    }

    public static function SignIn()
    {
        if (isset($_POST['email'])) {
            require_once '../models/AuthModel.php';
            $email = $_POST['email'];
            $password = $_POST['password'];
            $AuthModel = new AuthModel();
            $res = $AuthModel->getUserbyEmail($email);
            if ($res === false) {
                header("Location:/Wews/views/login.php?login=false");
            } else {
                if ($res['password'] === $password) {
                    $_SESSION['email'] = $email;
                    $_SESSION['id_user'] = $res['id_user'];
                    $_SESSION['name'] = $res['firstName'] . ' ' . $res['lastName'];
                    // echo $_SESSION['email'];
                    header('Location:/Wews/views/index.php?login=true');
                }

            }
        } else {
            header("Location:/Wews/views/login.php?error=emailNotValid");
        }
    }

    public static function clearData($str){
        $str = trim($str);
        $str = stripslashes($str);
        $str = htmlspecialchars($str);
        return $str;
    }
    public static function SignUp()
    {
        if (isset($_POST['email'])) {

            require_once '../models/AuthModel.php';
            $firstName = AccountController::clearData($_POST['firstName']);
            $lastName = AccountController::clearData($_POST['lastName']);
            $email = AccountController::clearData($_POST['email']);
            $password = AccountController::clearData($_POST['password']);
            $confPass = AccountController::clearData($_POST['confPass']);
            $phone = AccountController::clearData($_POST['phone']);
            $date = AccountController::clearData($_POST['date']);
            $country = AccountController::clearData($_POST['country']);

            // echo $firstName.$lastName.$email.$password.$confPass.$phone.$date.$country;

            $AuthModel = new AuthModel();
            $res = $AuthModel->addNewUser($firstName,$lastName,$email,$password,$phone,$date,$country);
            echo $res;
            
            echo $res === false ? 
             'false'
            : 
            header("Location:/Wews/views/login.php?success=accountCreated");
        } else {
            header("Location:/Wews/views/login.php?error=emailNotValid");
        }

    }
    public static function getUserInfo($id){
        require_once '../models/AuthModel.php';
        $AuthModel = new AuthModel();
        return $AuthModel->getUserInfoFromDB($id);
    }

    public static function updateUserInfo($id){

            require_once '../models/AuthModel.php';
            $firstName = AccountController::clearData($_POST['firstName']);
            $lastName = AccountController::clearData($_POST['lastName']);
            $email = AccountController::clearData($_POST['email']);
            $phone = AccountController::clearData($_POST['phone']);
            $DOB = AccountController::clearData($_POST['DOB']);
            $country = AccountController::clearData($_POST['country']);
            // echo $firstName.$lastName.$email.$phone.$DOB.$country;

            $AuthModel = new AuthModel();
            $res = $AuthModel->updateUserInfoFromDb($id,$firstName,$lastName,$email,$phone,$DOB,$country);
            echo $res ?  
            header("Location:/Wews/views/user_profil.php?successfullUpdated=true") 
            : 
            header("Location:/Wews/views/user_profil.php?succes=$res");

    }

    

    public static function getUserCategories(){ //  getCateroies
        if(isset($_SESSION['id_user'])){
            $user = AccountController::getUserInfo($_SESSION['id_user']);
            $categories = $user['categories'];
            return explode('[-=-]',$categories); 
        }   
    }

    public static function getCategories() // change to set
    {
        if(isset($_POST['categorie'])){
            $categories = $_POST['categorie'];
            $finalRes ='';
            $separateElement = '[-=-]';
            require_once '../models/AuthModel.php';
        $AuthModel = new AuthModel();
        $i = 0;
        $total = count($categories);
        $finalRes = $categories[0];
        for($i = 1 ;$i<count($categories);$i++)
        {
            $finalRes = $finalRes.$separateElement.$categories[$i];
        }


        $res = $AuthModel->setCategoriesInDb($finalRes);
        $res === false ? 
        header("Location:/Wews/views/setari.php?error=categoriiOf")
        : 

        header("Location:/Wews/views/setari.php?success=categoriiONN");

        }
    }
    
    public static function getTheme() //settheme
    {
        if (isset($_POST["theme"])) {
            require_once '../models/AuthModel.php';
            $theme = AccountController::clearData($_POST["theme"]);
            $AuthModel = new AuthModel();
            $res = $AuthModel->setThemeInDb($theme);
            $res === false ? 
            header("Location:/Wews/views/setari.php?error=themeOff")
            : 

            header("Location:/Wews/views/setari.php?success=themeOn");
        }
    }
}