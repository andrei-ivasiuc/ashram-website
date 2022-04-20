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
    <div class="text-center  pt-5 pb-5">
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
                <p>
                    Rome was not built in a day.
                    The long time that it takes to
                    do anything of lasting value
                    is itself a deterrent. On top
                    of that, the journey from
                    start to finish is not smooth.
                    There are roadblocks and
                    traffic jams, which test one’s
                    patience. Hence, the one
                    quality needed to reach the
                    goal in a long journey is to
                    go on, no matter how long it
                    takes. That is perseverance.
                </p>
                <p>
                    Life is a long journey, but long and short are relative. One
                    lifetime is only a small part of a much longer journey of the
                    soul. How we muster the perseverance to keep coming back
                    to this difficult world again and again for thousands of lives
                    is mind-boggling, but we need not bother our mind with it.
                    What concerns us is primarily the present life, its purpose, and
                    how to fulfill it. In the simplest of terms, the purpose of life is
                    to change, to change for the better. Since there is always room
                    for improvement, changing for the better gives us enough
                    work for a lifetime. The work is further complicated by at
                    least two factors. First, what is genuinely good can be quite
                    different from what seems good. Secondly, what is clearly evil
                    can be quite tempting. To know what is genuinely good we
                    need guidance. To reject what is clearly evil, we need a strong
                    will power. The ultimate resource for meeting both these
                    needs is our divine essence, the soul. The soul is so effectively
                    hidden from ordinary powers of perception that to discover it
                    we need a Guru. A Guru is necessary, but not sufficient. For
                    the Guru’s guidance and Grace to work, we need a sincere
                    aspiration that is intense but calm and above all, persistent.
                    To have an aspiration that persists no matter what, we have to
                    persevere. Perseverance is a powerful tool. With perseverance,
                    Edison invented a bulb after ‘failing’ about a thousand times;
                    he never thought he failed, he used to say that he had learnt
                    a thousand ways that did not work. The Mother calls this
                    attitude “a kind of inner good humour which helps you not to
                    get discouraged, not to become sad, and to face all difficulties
                    with a smile.” With perseverance, we can also discover the
                    inner bulb that will take us from the darkness of ignorance
                    towards the Light of Knowledge, <i>tamaso maa jyotirgamaya.</i>
                </p>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php'); ?>