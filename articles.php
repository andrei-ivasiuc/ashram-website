<?php

define("ARTICLES_NUMBER", 4);

if (!file_exists("articles/index.json")) {
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
$latest_articles = array_slice($articles, 0, ARTICLES_NUMBER);
?>

<?php if (count($latest_articles) > 0) : ?>
    <section id="articles" class="home-section" style="background-color: var(--bg-light)">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4">
                    <h2>Words of Wisdom</h2>
                </div>
            </div>
            <div class="row mb-5 gy-5">
                <?php foreach ($latest_articles as $i => $article) : ?>
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="card <?php echo $article["type"]?>">
                            <div class="img">
                                <a href="<?php echo $article["path"] ?>"><img src="<?php echo $article["img"] ?>" class="card-img-top" alt="<?php echo $article["title"] ?>"></a>
                            </div>
                            <div class="card-body">
                                <h4><a href="<?php echo $article["path"] ?>"><?php echo $article["title"] ?></a></h4>
                                <h6><?php echo date_format(date_create($article['date']), "d M Y") ?></h6>
                                <p class="card-text"><a href="<?php echo $article["path"] ?>"><?php echo $article["description"] ?></a></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="/articles" class="btn btn-lg btn-primary">Read all Articles</a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>