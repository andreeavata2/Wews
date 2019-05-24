<?php 

class  AccountController {
    public function __contruct() {
        // $this->check
        echo 'sa';
    }

    public static function SignIn() {
        echo 'as';
        if(isset($_POST['email'])){
            header("Location:/");
        }else{
            header("Location:/Wews/views/login.php?error=emailNotValid");
        }
    }
}

?>