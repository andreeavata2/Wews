<?php
require_once 'checkRoutes.php';
require_once '../controllers/WewsController.php';
require_once '../controllers/AccountController.php';
$wews = new WewsController();
$posts = $wews->getPosts();

if(isset($_SESSION['id_user']))
{ 
    $userInfo = AccountController::getUserInfo($_SESSION['id_user']);
    $updateAt = $userInfo['updateAt'];
    $duration = $userInfo['duration'];
    $currentDate = date("Y-m-d H:i:s");
    $res = date('Y-m-d H:i:s',strtotime("+$duration" ,strtotime($updateAt)));
    if($currentDate > $res)
    {
        $deletePosts = WewsController::deleteAllPosts();

        $apiBody = "https://newsapi.org/v2/top-headlines";
        $API_KEY = "3e2c1db3db4d483b89d53e709221d179";
        $newApiCategories = array("business", "entertainment", "health", "science", "sports", "technology");
        for ($i = 0; $i < count($newApiCategories); $i++) { // for every category 

        $requestApiURL = $apiBody . "?country=ro&category=" . $newApiCategories[$i] . "&apiKey=" . $API_KEY;
        $dd = "https://newsapi.org/v2/top-headlines?country=ro&category=health&apiKey=3e2c1db3db4d483b89d53e709221d179";
        $requestForPosts = curl_init();
        curl_setopt($requestForPosts, CURLOPT_URL, $requestApiURL);              
        curl_setopt($requestForPosts, CURLOPT_RETURNTRANSFER, true);  
        curl_setopt($requestForPosts, CURLOPT_SSL_VERIFYPEER, false); 
        $res = curl_exec($requestForPosts);                           
        curl_close($requestForPosts);
        $postsByCategory = json_decode($res);
        header('Content-type: text/javascript');
        if ($postsByCategory->status == "ok") {
            foreach ($postsByCategory->articles as $article) {
               echo $wews->addPost(
                    $article->source->name || "nulll",
                    $article->author,
                    $article->title,
                    $article->description,
                    $article->url,
                    $article->urlToImage,
                    $article->publishedAt,
                    $article->content,
                    $newApiCategories[$i]
                );
            }
        } else {
            echo "status" . $postsByCategory->status;
        }
        // echo json_encode($postsByCategory, JSON_PRETTY_PRINT);
    }

    }
    $currentDateForUpdate = date("Y-m-d H:i:s");
    AccountController::setUpdateAt($currentDateForUpdate);
    //  coloana updatedAt , duration 20
    // metoda if(current + 20*3600 > updated) 
    // if(a trecut){ // delete all posts // , call tha api call to get posts updated, #wews->updatedDone($current)}
}else if ($posts === false ) { // if false because are 0 lines or because the time expired
    $apiBody = "https://newsapi.org/v2/top-headlines";
    $API_KEY = "3e2c1db3db4d483b89d53e709221d179";
    $newApiCategories = array("business", "entertainment", "health", "science", "sports", "technology");
    for ($i = 0; $i < count($newApiCategories); $i++) { // for every category 

        $requestApiURL = $apiBody . "?country=ro&category=" . $newApiCategories[$i] . "&apiKey=" . $API_KEY;
        $dd = "https://newsapi.org/v2/top-headlines?country=ro&category=health&apiKey=3e2c1db3db4d483b89d53e709221d179";
        $requestForPosts = curl_init();
        curl_setopt($requestForPosts, CURLOPT_URL, $requestApiURL);              // stabilim URL-ul serviciului
        curl_setopt($requestForPosts, CURLOPT_RETURNTRANSFER, true);  // rezultatul cererii va fi disponibil ca șir de caractere
        curl_setopt($requestForPosts, CURLOPT_SSL_VERIFYPEER, false); // nu verificam certificatul digital
        $res = curl_exec($requestForPosts);                           // executam cererea GET
        curl_close($requestForPosts);
        $postsByCategory = json_decode($res);
        header('Content-type: text/javascript');
        if ($postsByCategory->status == "ok") {
            foreach ($postsByCategory->articles as $article) {
               echo $wews->addPost(
                    $article->source->name || "nulll",
                    $article->author,
                    $article->title,
                    $article->description,
                    $article->url,
                    $article->urlToImage,
                    $article->publishedAt,
                    $article->content,
                    $newApiCategories[$i],
                );
            }
        } else {
            echo "status" . $postsByCategory->status;
        }
        // echo json_encode($postsByCategory, JSON_PRETTY_PRINT);
    }
} else {
    echo 'true';
}
