<div class="articles">
    <?php
    require_once '../controllers/WewsController.php';
    // $wews = new WewsController();
    // $posts = $wews->getPosts();
    // var_dump($posts) ;
    if ($posts == null) { ?>
        <div class="errorNotExist"> Nu exista elemente din aceasta categorie. </div>
    <?php } else {
    foreach ($posts as $post) {
        ?>
            <div class="articleContainer">
                <div class="articleImg">
                    <!-- echo $wews->getPostByCategory('science') !== false ? count($wews->getPostByCategory('science')) : "0"; -->
                    <!-- echo $post['postUrlToImage'] !== null ? $post['postUrlToImage'] : "" -->
                    <img src=<?php echo $post['postUrlToImage'] !== null ? $post['postUrlToImage'] : "https://makitweb.com/demo/broken_image/images/noimage.png"; ?> alt="img" class="center" />
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
}
?>
</div>