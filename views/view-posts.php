<div class="articles">
<?php 
    require_once '../controllers/WewsController.php';
    $wews = new WewsController();
    $posts = $wews->getPosts();
    // var_dump($posts) ;
    foreach ($posts as $post) {
        ?> 
        <div class="articleContainer">
        <div class="articleImg">
            <img src= <?php echo $post['postUrlToImage'];?> alt="imgPng" class="center" />
        </div>
        <div class="articleTitle">
            <h2>
                <?php 
                echo $post['postTitle'];
                ?>
            </h2>
        </div>
        <div class="articleDescription">
        <?php 
          echo $post['postDescription'];
          ?>
        </div>
        <div class="articleButton">
    <button class="btn normal" onclick="location.href='post.php?id=<?php echo $post['postId']; ?>'" type="button">
                Vezi mai multe
            </button>
        </div>
        </div>
        <?php 
    }
?>
</div>
