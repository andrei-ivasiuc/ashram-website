<?php

define("ARTICLES_NUMBER", 1000);

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
<?php if (count($latest_articles) == 0) return; ?>
<section id="articles" class="home-section">
    <div class="container">
        <div class="col text-center mb-4">
            <h2>Words of Wisdom</h2>
        </div>
        <div id="AshramCarousel" class="carousel slide carousel-dark" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                <?php $col = 1;
                $active = 1; ?>
                <?php foreach ($latest_articles as $i => $article) {
                    // echo "count " . count($latest_articles) . " " . $article["path"] . $article["title"] . " col : " . $col . " active : " . $active;
                    if ($col == 1) {
                        if ($active == 1) {
                            $active = 0; ?>
                            <div class="carousel-item active">
                            <?php } else { ?>
                                <div class="carousel-item">
                                <?php  } ?>
                                <div class="row mb-5 gy-5">
                                <?php } ?>

                                <div class="col-12 col-lg-3 col-md-6">
                                    <div class="card <?php echo $article["type"] ?>" style="background-color: var(--bg-darker)">
                                        <div class="img">
                                            <a href="<?php echo $article["path"] ?>"><img src="<?php echo $article["img"] ?>" class="card-img-top" alt="<?php echo $article["title"] ?>"></a>
                                        </div>
                                        <div class="card-body">
                                            <h4><a href="<?php echo $article["path"] ?>"><?php echo $article["title"] ?></a></h4>
                                            <!-- <p class="card-text"><a href="<?php echo $article["path"] ?>"><?php echo $article["description"] ?></a></p> -->
                                        </div>
                                    </div>
                                </div>
                                <?php $col++;
                                if ($col == 5) {
                                    $col = 1; ?>
                                </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                        <!-- IF END OF $latest_articles AND $COL <5 INSERT 2 DIVs                             -->
                        <?php if ($col >1 && $col< 5) { ?>
                            </div>
            </div>
        <?php } ?>
        </div>
        <!-- <h6><?php echo date_format(date_create($article['date']), "d M Y") ?></h6> -->

        <a class="carousel-control-prev" href="#AshramCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#AshramCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>

    <div class="row">
        <div class="col text-center">
            <a href="/articles" class="btn btn-lg btn-primary">Read all Articles</a>
        </div>
    </div>
    </div>
</section>