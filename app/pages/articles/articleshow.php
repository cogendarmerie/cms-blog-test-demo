<?php
$database  = new database();
if(isset($articleId))
{
    $articleId = $articleId;
    $article = $database->get_data("blog_articles", "*", "id='".$articleId."'", "1");
}
else
{
    header('Location: /');
    exit();
}
?>
<main>
    <div class="m-5">
        <?php
        if(isset($article['article'])&&$article['article']!=""&&file_exists($article['article']))
        {
            echo file_get_contents($article['article']);
        }
        ?>
    </div>
    <!-- banner-last Start -->
    <div class="banner-area gray-bg pt-90 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="banner-one">
                        <img src="/assets/img/gallery/body_card3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-last End -->
</main>