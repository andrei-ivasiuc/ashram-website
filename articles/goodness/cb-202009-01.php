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
                <hr>
                <h6>
                    <p>
                        A tireless benevolence, clear seeing and comprehensive, free from
                        all personal reaction, is the best way to love God and serve Him
                        upon earth.
                    </p>
                    <p>
                        &mdash; The Mother 
                    </p>
                </h6>
                <hr>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 mb-4 col-sm-12 fs-5">
                <p>
                All of us go through phases of self-certification as well as self-flagellation. While we do have occasional moments of humbling
                introspection that make us hate ourselves for being what we are,
                there are also prolonged phases of uninterrupted complacency.
                We certify ourselves as being at least good enough, if not the
                best possible. I am good because I do my job in the office
                honestly, take good care of my children, pay my taxes, and do
                no harm to anybody. If I am not the best, it is because there
                is no time to do anything more than what I am already doing.
                If that remains the attitude, there never will be any time to
                spare. Doctors would tell you that that is the reason many
                old people have chronic aches and pains. When their essential
                worldly responsibilities are over, their attention is focused on
                the body, and the result is that every suspicious sound that
                their worn-out machine makes becomes a cause of concern.
                Thus, wanting to be better than I am is always a conscious
                decision. Anyone who has taken that conscious decision has
                taken the first step on the path of yoga. The equipment for
                the first step is love. Love whispers to me. Albert Schweitzer
                describes the whisper thus, “Whatever more than others you
                have received in health, natural gifts, working capacity, success,
                a beautiful childhood, harmonious family circumstances, you
                must not accept as a matter of course.” Nobody receives all of
                these, but all of us have received something. How should we
                accept what we have received? With gratitude. What should
                we do with what we have received? Share it with those who
                haven’t. In short, give. Not just give; give selflessly, give
                unconditionally. That is what being good is about.
                </p>
                <p>
                PETAL OF THE MONTH: Goodness
                </p>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php') ?>