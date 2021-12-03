<?php

if(!file_exists("articles/index.json")){
    return;
}

// Read json file with articles
$str = file_get_contents("articles/index.json");

// Convert json into array
$articles = json_decode($str, true);

// Sort articles DESC
uasort($articles, function ($event1, $event2) {
    return strtotime($event2["date"]) - strtotime($event1["date"]);
});

// Take only 4 latest articles
$latest_articles = array_slice($articles, 0, 4);
?>

<?php if (count($latest_articles) > 0) : ?>
    <section id="articles">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Articles</h3>
                </div>
            </div>
            <div class="row" id="article-container">
                <?php foreach ($latest_articles as $i => $article) : ?>
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="card">
                            <a href="<?php echo $article["path"] ?>"><img src="<?php echo $article["img"] ?>" class="card-img-top" alt="<?php echo $article["title"] ?>"></a>
                            <div class="card-body">
                                <h4><a href="<?php echo $article["path"] ?>"><?php echo $article["title"] ?></a></h4>
                                <p class="card-text"><a href="<?php echo $article["path"] ?>"><?php echo $article["description"] ?></a></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>