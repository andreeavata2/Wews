<?php
require_once '../views/config.php';
class WewsModel
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

    public function makeQuery($sqlQuery){
        $list = [];
        $newList = array();
        
        $sql = $this->connection->prepare($sqlQuery);

        $sql->execute();
        foreach ($sql->fetchAll() as $result) {
            array_push($newList,
                array("postId" => $result['postId'],
                    "postSourceName" => $result['postSourceName'],
                    "postAuthor" => $result['postAuthor'],
                    "postTitle" => $result['postTitle'],
                    "postDescription" => $result['postDescription'],
                    "postUrl" => $result['postUrl'],
                    "postUrlToImage" => $result['postUrlToImage'],
                    "postPublishedAt" => $result['postPublishedAt'],
                    "postContent" => $result['postContent'],
                    "postCategory" => $result['postCategory'],
                    "postLoadedAt" => $result['postLoadedAt'])
            );
        }
        return $newList;
    }

    public function getPostsByCategory($cat){
        $sql = "SELECT * from posts where postCategory='$cat' ";
        return $this->makeQuery($sql);
    }

    public function getPostsOrderBy($orderBy = "postPublishedAt",$total = 3){

        $list = [];
        $newList = array();

        $sqlQ = "SELECT * FROM posts
        ORDER BY '$orderBy' DESC LIMIT $total";
        
        $sql = $this->connection->prepare($sqlQ);
        // return ($sql->rowcount() ? $sql->fetch(PDO::FETCH_ASSOC) : false);

        $sql->execute();
        foreach ($sql->fetchAll() as $result) {
            array_push($newList,
                array("postId" => $result['postId'],
                    "postSourceName" => $result['postSourceName'],
                    "postAuthor" => $result['postAuthor'],
                    "postTitle" => $result['postTitle'],
                    "postDescription" => $result['postDescription'],
                    "postUrl" => $result['postUrl'],
                    "postUrlToImage" => $result['postUrlToImage'],
                    "postPublishedAt" => $result['postPublishedAt'],
                    "postContent" => $result['postContent'],
                    "postCategory" => $result['postCategory'],
                    "postLoadedAt" => $result['postLoadedAt'])
            );
        }
        return $newList;
    }

    public function getPostsFromDb($categories = "") {
        $list = [];
        $newList = array();
        // cate el sunt in array, daca e dif de string gol mg mai dep, 1 cu prima chestie,   for 0-count-1   ultimul el fara or
        // echo 'blaaaaaaaaaaa  ' . count($categories);
        $numberOfCategories= count($categories);

        // if($numberOfCategories != 0) {
            if($numberOfCategories==1){
                $sqlQ = "SELECT * FROM (
                    SELECT * FROM posts ORDER BY RAND() 
                ) u Where postCategory  LIKE '%$categories[0]%' 
                ORDER BY postTitle";
            }else if($numberOfCategories>1){
                $sqlQ = "SELECT * FROM (
                    SELECT * FROM posts ORDER BY RAND() 
                ) u Where postCategory  LIKE '%$categories[0]%' ";
                for($i=1;$i<=$numberOfCategories-1;$i++){
                    $sqlQ = $sqlQ . " OR postCategory LIKE '%" . $categories[$i] . "%' ";
                }
                $sqlQ = $sqlQ . " ORDER BY postTitle ";
            }
        else{
            $sqlQ = "SELECT * FROM (
                SELECT * FROM posts ORDER BY RAND() 
            ) u
            ORDER BY postTitle";
        }

        
        
        $sql = $this->connection->prepare($sqlQ);
        // return ($sql->rowcount() ? $sql->fetch(PDO::FETCH_ASSOC) : false);

        $sql->execute();
        foreach ($sql->fetchAll() as $result) {
            array_push($newList,
                array("postId" => $result['postId'],
                    "postSourceName" => $result['postSourceName'],
                    "postAuthor" => $result['postAuthor'],
                    "postTitle" => $result['postTitle'],
                    "postDescription" => $result['postDescription'],
                    "postUrl" => $result['postUrl'],
                    "postUrlToImage" => $result['postUrlToImage'],
                    "postPublishedAt" => $result['postPublishedAt'],
                    "postContent" => $result['postContent'],
                    "postCategory" => $result['postCategory'],
                    "postLoadedAt" => $result['postLoadedAt'])
            );
        }
        return $newList;
    }
    public function getPostInfoFromDb($id) {
        $sql = $this->connection->prepare('SELECT * FROM posts WHERE postId = :id');
        $sql->execute(array(':id' => $id));
        return ($sql->rowcount() ? $sql->fetch(PDO::FETCH_ASSOC) : false);
    }

    public function addPostToDb($postSourceName,$postAuthor,$postTitle,$postDescription,$postUrl,$postUrlToImage,$postPublishedAt,$postContent,$postCategory,$postLoadedAt){
        $sql = "INSERT INTO posts (postSourceName, postAuthor, postTitle,postDescription,postUrl,postUrlToImage,postPublishedAt,postContent,postCategory,postLoadedAt) VALUES (:postSourceName,:postAuthor,:postTitle,:postDescription,:postUrl,:postUrlToImage,:postPublishedAt,:postContent,:postCategory,:postLoadedAt)";
        $query = $this->connection->prepare($sql);
        $parameters = array(':postSourceName' => $postSourceName,':postAuthor' => $postAuthor,':postTitle' => $postTitle ,':postDescription' => $postDescription ,':postUrl' => $postUrl ,':postUrlToImage' => $postUrlToImage ,':postPublishedAt' => $postPublishedAt ,':postContent' => $postContent ,':postCategory' => $postCategory ,':postLoadedAt' => $postLoadedAt);
        if($query->execute($parameters))
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function deleteAllPostsFromDb()
    {
        $sql = "DELETE FROM posts ";
        $query = $this->connection->prepare($sql);
    
        if($query->execute())
        {
            return true;
        }
        else{
            return false;
        }
    }
    
}