<!DOCTYPE html>
<html lang="en">
<?php require_once('../../header.php') ?>

<?php

define("ARTICLES_NUMBER", 4);

$uri_path = parse_url($_SERVER['SCRIPT_NAME'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
$topic = $uri_segments[2];
$json = "../../articles/" . $topic . "/index.json";
// echo "topic" . $json;
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
            <!-- <div class="row">
                <div class="col text-center mb-4">
                    <h2><?php echo strtoupper($topic); ?></h2>
                </div>
            </div> -->

            <div class="row mb-5 gy-5">
                <?php foreach ($latest_articles as $i => $article) : ?>
                    <?php
                    if (strcasecmp($article["file"], basename(__FILE__)) == 0) {
                        // echo ('match');
                        break;
                    } else {
                        // echo ('mismatch');
                    }
                    ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<body>
    <section class="header-horizontal dark" style="background-color: var(--bg-darker);">
        <div class="text-center  pt-5 pb-5">
            <h2><?php echo strtoupper($topic); ?></h2>
            <img src=<?php echo $article["img"]; ?>>
        </div>
    </section>
    <section class="event-text">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-12 fs-5 ">
                <h2> <?php echo  $article["title"] ?></h2>
                    <h1></h1>
                    <h3><?php echo $article["author"] ?></h3>
                    <h6><?php echo $article["source"] ?></h6>
                    <h6><?php echo date_format(date_create($article["date"]), "d M Y") ?></h6>
                    <hr>

                    <p>
                        Integral courage: whatever the domain, whatever the danger, the
                        attitude remains the same – calm and reassured.
                        The Mother (CWM, 14:169)
                        To celebrate the hundredth anniversary of the Mother’s
                        second and final arrival in Pondicherry on 24 April 1920,
                        in ‘The Call Beyond’ this year we are concentrating on the
                        twelve petals in the outermost circle in the Mother’s symbol,
                        one petal at a time. This month’s focus is on a virtue that
                        is a part of the spiritual process as well as the product of
                        spiritual progress; the virtue is ‘courage’. In a world in which
                        walking the spiritual path is looked upon by many seemingly
                        sensible and successful people as a sign of anything ranging
                        from eccentricity to stupidity, choosing the path is itself an
                        act of courage. While on the path, rejecting repeatedly the
                        accustomed voices of the vital or the mental in favour of the
                        voice of the psychic being needs courage. At the same time,
                        continuing on the path generates the courage required not
                        only to let the voice of the psychic being prevail, but also
                        that required to banish all fear, anxiety and insecurity despite
                        living in a basically erratic and unpredictable world. As in
                        other aspects of sadhana, if we take care of the process, the
                        product takes care of itself.
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>