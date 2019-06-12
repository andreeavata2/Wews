<div class="recentPosts">
    <div class="recentTitlePosts">
        <span>Postari Recente</span>
    </div>
    <div class="recentBody">
        <?php 
    require_once '../controllers/WewsController.php';
    $wews = new WewsController();
    $posts = $wews->getPostsOrderBy();
    // var_dump($posts) ;
    foreach ($posts as $post) {
        ?>
        <a href="" onclick="location.href='post.php?id=<?php echo $post['postId']; ?>'">
            <div class="recentContainer">
                <div class="recentImg">
                    <img src=<?php echo $post['postUrlToImage'];?> alt="recentPost" />
                </div>
                <div class="recentDescription">
                    <?php 
          echo explode('[+',$post['postDescription'])[0];
          ?>
                </div>
                <span><?php echo $post['postPublishedAt']; ?></span>
            </div>
        </a>

        <?php 
    }
?>
    </div>
</div>