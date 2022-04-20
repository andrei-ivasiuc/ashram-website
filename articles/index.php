<?php require_once('../header.php') ?>

<?php
$uri_path = parse_url($_SERVER['SCRIPT_NAME'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);

//echo PHP_URL_PATH;
//echo $uri_segments[2];

$topic=$uri_segments[2];
//echo "topic : " . $uri_segments[2];
?>

<?php
//echo substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); 
//$_SERVER["PHP_SELF"];
if (!file_exists("./index.json")) {
    return;
}

// Read json file with articles
$str = file_get_contents("./index.json");

// Convert json into array
$articles = json_decode($str, true);

// Sort articles DESC
uasort($articles, function ($event1, $event2) {
    return strtotime($event2["date"]) - strtotime($event1["date"]);
});

$latest_articles = $articles;
?>

<?php if (count($latest_articles) > 0) : ?>
    <section id="articles" class="home-section" >
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4">
                    <h2>Words of Wisdom</h2>
                </div>
            </div>
            <div class="row mb-5 gy-5">
                <?php foreach ($latest_articles as $i => $article) : ?>
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="card <?php echo $article["type"]?>" style="background-color: var(--bg-darker)">
                            <div class="img">
                                <a href="<?php echo $article["path"] ?>"><img src="<?php echo $article["img"] ?>" class="card-img-top" alt="<?php echo $article["title"] ?>"></a>
                            </div>
                            <div class="card-body">
                                <h4><a href="<?php echo $article["path"] ?>"><?php echo $article["title"] ?></a></h4>
                                <!-- <h6><?php echo date_format(date_create($article['date']), "d M Y") ?></h6> -->
                                <!-- <p class="card-text"><a href="<?php echo $article["path"] ?>"><?php echo $article["description"] ?></a></p> -->
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php require_once('../footer.php') ?>
