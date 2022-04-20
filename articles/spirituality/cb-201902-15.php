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
    <div class="text-center pt-5 pb-5">
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
                <br>
                <p>
                    One often finds himself shackled by the circumstances of life.
                    A lot of the responsibility of being in that situation is a direct
                    or indirect consequence of our own mindset or actions. We
                    have an erroneous conception of the world, of how things
                    should or should not be. Sometimes, we might not be at fault,
                    but we are still responsible for the adversity in life.
                    We have an endless stream of desires. Our focus is always
                    on wanting and getting rather than being fulfilled by giving.
                    We have an ignorant, superficial, fragile sense of I, ruled by
                    the ego. We lack an understanding of what would make
                    life purposeful. We manage to suppress our inner voice,
                    whenever it tries to guide us, because of bloated egos and
                    selfish desires. We keep doing more of the same and still
                    wish for a miracle.
                </p>
                <p>
                    It does not work. That is when, if we are fortunate, we
                    can find an answer in spirituality. It can liberate us from
                    the shackles, largely of our own making. Spirituality is an
                    inner journey that has been lit up for us by Sri Aurobindo
                    and the Mother who are reaching out to us and inspiring
                    us to walk the path they have walked before and graciously
                    illumined for us.
                </p>
                <hr>
                <p>
                <h6>
                    Manan Bindal has just completed a course on Teaching Yoga conducted by Sri
                    Aurobindo Ashram – Delhi Branch. This article is an answer that he wrote in response
                    to a question asked in a test conducted during the course.
                </h6>
                </p>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php');?>