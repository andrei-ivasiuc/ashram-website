<?php

define("ARTICLES_NUMBER", 4);

$uri_path = parse_url($_SERVER['SCRIPT_NAME'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
$topic=$uri_segments[2];
$json="../../articles/".$topic."/index.json";
echo "tp ".$json;
if (!file_exists($json)) {
    echo "not exit";
    return;
}
// Read json file with articles
$str = file_get_contents($json);

// Convert json into array
$articles = json_decode($str, true);

if (count($latest_articles) > 0) : ?>
    <section id="articles" class="home-section" style="background-color: var(--bg-light)">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4">
                    <h2><?php echo strtoupper($topic);?></h2>
                </div>
            </div>
            <div class="row mb-5 gy-5">
                <?php foreach ($latest_articles as $i => $article) : ?>
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="card <?php echo $article["type"]?>">
                            <div class="img">
                                <a href="<?php echo $article["path"].$topic."/".$article["file"] ?>" target="_blank"><img src="<?php echo $article["img"] ?>" class="card-img-top" alt="<?php echo $article["title"] ?>"></a>
                            </div>
                            <div class="card-body">
                                <h4><a href="<?php echo $article["path"] ?>" target="_blank"><?php echo $article["title"] ?></a></h4>
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

<!DOCTYPE html>
<html lang="en">
<?php require_once('../../header.php') ?>

<body>
    <section class="header-horizontal dark" style="background-color: var(--bg-darker);">
        <div class="text-center mb-4">
            <h2>Yoga</h2>
            <img src="<?php echo $article['img']?>">
        </div>
    </section>
    <section class="event-text">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 col-sm-12 fs-5 p-5">
                    <h2 class="fs-3"><?php echo $article['title']?></h2>
                    <h1><?php echo $article['heading']?></h1>
                    <h3><?php echo $article['author']?></h3>
                    <h6><?php echo $article['source']?> </h6>
                </div>
            </div>
        </div>
    </section>
</body>

</html>   

