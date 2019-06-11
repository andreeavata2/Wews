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
            <img src="http://3.bp.blogspot.com/-NueqQ2PZA84/UKyNDSYhmhI/AAAAAAAAVPc/NiLUWaN8g5c/s1600/105412447497948643_A29uXd1s_c.jpg" alt="imgPost" />
        </div>
        <div class="articleTitle">
            <h2>
                <?php 
                echo $post['postTitle'];
                ?>
            </h2>
        </div>
        <div class="articleDescription">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Doloremque repudiandae animi ullam velit quas distinctio nesciunt
            molestias delectus labore. Corrupti iure maiores minus esse soluta
            a eius distinctio, eveniet magni.
        </div>
        <div class="articleButton">
            <button class="btn normal" onclick="location.href='post.php'" type="button">
                Vezi mai multe
            </button>
        </div>
        
        <?php 
    }
?>

    </div>





</div>