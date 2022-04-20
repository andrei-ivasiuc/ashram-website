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
    <?php foreach ($latest_articles as $i => $article) : ?>
        <?php
        // If the opened file matches json entry, pick title and author
        if (strcasecmp($article["file"], basename(__FILE__)) == 0) {
            // echo ('match');
            break;
        } else {
            // echo ('mismatch');
        }
        ?>
    <?php endforeach; ?>
<?php endif; ?>

<section style="background-color: var(--bg-darker);">
    <div class="text-center pt-5 ">
        <h2><?php echo strtoupper($topic); ?></h2>
        <img class="img-fluid p-5" src=<?php echo $article["img"]; ?>>
    </div>
</section>
<section style="background-color: var(--bg-darker);">
    <div class="container">
        <div class="row justify-content-center pb-3">
            <div class="col-lg-8 col-sm-12 fs-5 ">
                <h2> <?php echo  $article["title"] ?></h2>
                <h1></h1>
                <h3><?php echo $article["author"] ?></h3>
                <h6><?php echo $article["source"] ?></h6>
                <h6><?php echo date_format(date_create($article["date"]), "d M Y") ?></h6>
                <hr>
                <h6>
                    <p>
                        How shall I describe that utter relief, that delightful lightness
                        which comes when one is free from all anxiety for oneself, for one’s
                        life and health and satisfaction, and even one’s progress?
                    </p>
                    <p>&mdash; The Mother (‘Prayers & Meditations’, prayer dated 17 August 1913) </p>
                </h6>
                <hr>
                <p>
                    To celebrate the hundredth anniversary of the Mother in
                    Pondicherry on 24 April 1920, in ‘The Call Beyond’ this year
                    we are concentrating on the twelve petals in the outermost
                    circle in the Mother’s symbol, one petal at a time. This month
                    we enter, in a way, a new phase with the seventh petal. The
                    petals discussed in the previous issue – sincerity, humility,
                    gratitude, perseverance, aspiration and receptivity – were
                    different aspects of the personal effort required on the path
                    of integral yoga. What the seeker expects from the personal
                    effort is progress on the path. Effort is the process; progress
                    is the product. While aspiring for progress is natural and
                    even desirable, and there are ways in which one may monitor
                    progress, anxiety and preoccupation with progress are neither
                    desirable nor helpful. Progress means being better today than
                    one was yesterday. So, the person is competing only with
                    himself or herself. In a journey that goes on throughout life,
                    and life after life, perceptible change may not be always visible
                    in a day. Further, while there may be days when one has a ‘lifechanging experience’ and has a feeling of remarkable progress,
                    there may also be days of sliding down, when instead of going
                    further, one has done something indicating an unbecomingly
                    low consciousness. But the person should be able to feel an
                    overall change over a period of five or ten years. By looking
                    back, if the person sincerely feels that now she is more loving,
                    has greater equanimity, can handle uncertainty better, and has
                    less fear of death than was the case five or ten years ago, she
                    can conclude that she has made some progress. But perhaps
                    the best indicator is that the more progress a person makes, the
                    less she is thinking about it! The person just enjoys serving the
                    Divine. As the Mother wrote to the founder of Sri Aurobindo
                    Ashram – Delhi Branch on his birthday 50 years ago, “No joy
                    can be greater than that of serving the Divine.” One who has
                    experienced that joy is in no hurry to progress. She is eager to
                    serve the Divine for a thousand lives without thinking about
                    how much progress she has made. As in a game, if one plays
                    well, the score board takes care of itself.
                </p>
                <p>
                    PETAL OF THE MONTH: Progress
                </p>
            </div>
        </div>
    </div>
</section>
<section style="background-color: var(--bg-darker);">
    <div class="text-center">
        <img class="img-fluid pt-2 pb-5" src="./img/mother-divine-serving.jpg" ?>
    </div>
</section>
<?php require_once('../../footer.php') ?>