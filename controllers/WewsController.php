<?php

class WewsController
{
    public function __contruct()
    { }

    public function getTime()
    {
        return "respone from server";
    }

    

    public function getPostByCategory($cat){
        require_once '../models/WewsModel.php';
        $WewsModel = new WewsModel();
        $res = $WewsModel->getPostsByCategory($cat);
        return $res ? $res : false;
    }
    public function getPosts($categoriesArray = "")
    {
        require_once '../models/WewsModel.php';
        $WewsModel = new WewsModel();
        $res = $WewsModel->getPostsFromDb($categoriesArray);
        return $res ? $res : false;
    }
    public function getPostsOrderBy($total = 0)
    {
        require_once '../models/WewsModel.php';
        $WewsModel = new WewsModel();
        $res = $WewsModel->getPostsOrderBy();
        return $res ? $res : false;
    }

    public function getPostInfo($id)
    {
        require_once '../models/WewsModel.php';
        $WewsModel = new WewsModel();
        $res = $WewsModel->getPostInfoFromDb($id);
        return $res ? $res : false;
    }

    public function addPost($postSourceName = "",$postAuthor = "",$postTitle = "",$postDescription = "",$postUrl ="",$postUrlToImage  = "",$postPublishedAt = "",$postContent = "",$postCategory = ""){
        $postLoadedAt = new DateTime(); //  the current time
        $stringPostLoadedAt = $postLoadedAt -> format('Y-m-d H:i:s');
        $WewsModel = new WewsModel();
        $res = $WewsModel->addPostToDb($postSourceName,$postAuthor ,$postTitle,$postDescription,$postUrl,$postUrlToImage,$postPublishedAt,$postContent,$postCategory,$stringPostLoadedAt);
        return $res ? "trueee" : "falseee";
    }
}
