<?php

define("ARTICLES_NUMBER", 4);

$uri_path = parse_url($_SERVER['SCRIPT_NAME'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
$topic = $uri_segments[2];
$json = "../../articles/" . $topic . "/index.json";
echo "topic" . $json;
if (!file_exists($json)) {
    return;
}
// Read json file with articles
$str = file_get_contents($json);

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
                    <h2><?php echo strtoupper($topic); ?></h2>
                </div>
            </div>

            <div class="row mb-5 gy-5">
                <?php foreach ($latest_articles as $i => $article) : ?>
                    <?php
                    echo ($article["file"]). "<br>";
                    echo (basename(__FILE__))."<br>";
                    if (strcasecmp($article["file"], basename(__FILE__)) == 0) {
                        echo ('match');
                        break;
                    } else {
                        echo ('mismatch');
                    }
                    ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>