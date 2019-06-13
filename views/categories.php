<div class="categories">
    <div class="categoriesTitle">
        <span>Categorii</span>
    </div>
    <div class="categoriesBody">
        <div class="categoriesContainer <?php echo in_array("business", $userCategories) ? "" : " hide"; ?> ">
            <a href="index.php?category=business">
                <span class="icon">
                    <i class="fas fa-angle-right"></i>
                </span>
                <span class="nameCategories">
                    Afaceri
                    <?php $category = "business"; ?>
                </span>
                <span class="numberOfPostsForCategories">
                    <?php
                    echo count($wews->getPostByCategory('business'));
                    ?>
                </span>
            </a>
        </div>
        <div class="categoriesContainer <?php echo in_array("entertainment", $userCategories) ? "" : " hide"; ?> ">
            <a href="index.php?category=entertainment">
                <span class="icon">
                    <i class="fas fa-angle-right"></i>
                </span>
                <span class="nameCategories">
                    Divertisment
                    <?php $category = "entertainment"; ?>
                </span>
                <span class="numberOfPostsForCategories">
                    <?php
                    echo count($wews->getPostByCategory('entertainment'));
                    ?>
                </span>
            </a>
        </div>
        <div class="categoriesContainer <?php echo in_array("health", $userCategories) ? "" : " hide"; ?> ">
            <a href="index.php?category=health">
                <span class="icon">
                    <i class="fas fa-angle-right"></i>
                </span>
                <span class="nameCategories">
                    Sanatate
                    <?php $category = "health"; ?>
                </span>
                <span class="numberOfPostsForCategories">
                    <?php
                    echo count($wews->getPostByCategory('health'));
                    ?>
                </span>
            </a>
        </div>
        <div class="categoriesContainer <?php echo in_array("science", $userCategories) ? "" : " hide"; ?> ">
            <a href="index.php?category=science">
                <span class="icon">
                    <i class="fas fa-angle-right"></i>
                </span>
                <span class="nameCategories">
                    Ştiinţă
                    <?php $category = "science"; ?>
                </span>
                <span class="numberOfPostsForCategories">
                    <?php
                    echo $wews->getPostByCategory('science') !== false ? count($wews->getPostByCategory('science')) : "0";
                    ?>
                </span>
            </a>
        </div>
        <div class="categoriesContainer <?php echo in_array("sports", $userCategories) ? "" : " hide"; ?> ">
            <a href="index.php?category=sports">
                <span class="icon">
                    <i class="fas fa-angle-right"></i>
                </span>
                <span class="nameCategories">
                    Sport
                    <?php $category = "sports"; ?>
                </span>
                <span class="numberOfPostsForCategories">
                    <?php
                    echo count($wews->getPostByCategory('sports'));
                    ?>
                </span>
            </a>
        </div>
        <div class="categoriesContainer <?php echo in_array("technology", $userCategories) ? "" : " hide"; ?> ">
            <a href="index.php?category=technology">
                <span class="icon">
                    <i class="fas fa-angle-right"></i>
                </span>
                <span class="nameCategories">
                    Tehnologie
                    <?php $category = "technology"; ?>
                </span>
                <span class="numberOfPostsForCategories">
                    <?php
                    echo count($wews->getPostByCategory('technology'));
                    ?>
                </span>
            </a>
        </div>
    </div>
</div>