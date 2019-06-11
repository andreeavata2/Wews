<?php
require_once '../controllers/WewsController.php';
$wews = new WewsController();
$posts = $wews->getPosts();
if ($posts === false) { // if false because are 0 lines or because the time expired
    $apiBody = "https://newsapi.org/v2/top-headlines";
    $API_KEY = "3e2c1db3db4d483b89d53e709221d179";
    $newApiCategories = array("business", "entertainment", "health", "science", "sports", "technology");
    for ($i = 0; $i < count($newApiCategories); $i++) { // for every category 

        $requestApiURL = $apiBody . "?country=ro&category=" . $newApiCategories[$i] . "&apiKey=" . $API_KEY;

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
                    $newApiCategories[$i]
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
