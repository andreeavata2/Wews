<?php

require_once '../views/config.php';
class AuthModel
{
    public $connection = null;

    public function __construct()
    {
        try {
            $this->connect();
        } catch (\PDOException $exc) {
            exit('Database connection could not be established.' . $exc);
        }
    }

    private function connect()
    {
        $connection_string = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';';
        $this->connection = new PDO($connection_string, DB_USER, DB_PASS);
    }
    public function getUserbyEmail($email)
    {
        $sql = $this->connection->prepare('SELECT * FROM users WHERE email = :email');
        $sql->execute(array(':email' => $email));
        return ($sql->rowcount() ? $sql->fetch(PDO::FETCH_ASSOC) : false);
    }
    public function userExisting($email){
        $sql = $this->connection->prepare('SELECT id_user FROM users WHERE email = :email');
        $sql->execute(array(':email' => $email));
        return ($sql->rowcount() ? $sql->fetch(PDO::FETCH_ASSOC) : false);
    }
    public function addNewUser($firstName,$lastName,$email,$password,$phone,$DOB,$country){
        
        $sql = "INSERT INTO users (firstName, lastName, email,password,phone,DOB,country) VALUES (:firstName, :lastName, :email,:password,:phone,:DOB,:country)";
        $query = $this->connection->prepare($sql);
        $parameters = array(':firstName' => $firstName, ':lastName' => $lastName, ':email' => $email,':password' => $password,':phone' => $phone,':DOB' => $DOB,':country' => $country);
        if($query->execute($parameters))
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function getUserInfoFromDB($id)
    {
        $sql = $this->connection->prepare('SELECT * FROM users WHERE id_user = :id');
        $sql->execute(array(':id' => $id));
        return ($sql->rowcount() ? $sql->fetch(PDO::FETCH_ASSOC) : false);

    }

    public function updateUserInfoFromDb($id,$firstName,$lastName,$email,$phone,$DOB,$country){
        $sql = "UPDATE users SET firstName = :firstName, lastName = :lastName, email = :email, phone = :phone, DOB = :DOB, country = :country WHERE id_user = $id";
        $query = $this->connection->prepare($sql);
        $parameters = array(':firstName' => $firstName, ':lastName' => $lastName, ':email' => $email,':phone' => $phone, ':DOB' => $DOB, ':country' => $country);
        if($query->execute($parameters)){
            return true;
        }else{
            return false;
        }
    }

    public function setCategoriesInDb($categories){
        $sql = "UPDATE users SET categories = :categories WHERE id_user = :id";
        $query = $this->connection->prepare($sql);
        $parameters = array(':categories' => $categories, ':id' => $_SESSION['id_user']);
        if($query->execute($parameters))
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function setThemeInDb($theme)
    {
        $sql = "UPDATE users SET theme = :theme WHERE id_user = :id";
        $query = $this->connection->prepare($sql);
        $parameters = array(':theme' => $theme, ':id' => $_SESSION['id_user']);
        if($query->execute($parameters))
        {
            return true;
        }
        else{
            return false;
        }
    }
}
