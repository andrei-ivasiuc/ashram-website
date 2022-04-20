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
                    It is not the number of years you have lived that makes you grow
                    old. You become old when you stop progressing. … … I have
                    known old people of 20 years of age and young ones of 70.
                    The Mother
                </p>
                <p>
                    A long and healthy life is a blessing. It becomes a double blessing
                    when the person becomes useful to others. Generally, from age
                    70 onwards, the energy levels decline perceptibly and steadily,
                    and paradoxically, our demands may multiply, likes and
                    dislikes magnify, level of tolerance plummets and mood swings
                    become frequent. The person may feel unwanted everywhere
                    except in a nursing home where he is seen as a money-bag.
                </p>
                <p>
                    But old age need not be so bad. It all depends on how much you
                    make yourself useful to others. The best solution is to be selfless,
                    to talk less, and to be generous with both love and money.
                    However, everybody is not equally lucky, and many may not
                    be healthy and wealthy enough for doing what can make old
                    age comfortable and happy. Broadly speaking, there are at least
                    four types of circumstances one may find oneself in, or choose
                    for oneself, in old age.
                </p>
                <p>
                    First, you have earned enough money to be economically
                    independent, and can depend on family or hired help for
                    physical support. That may secure care, but cannot guarantee
                    loving care.
                </p>
                <p>
                    The second option is to join an old age home or some other
                    similar organization which is geared for taking care of a large
                    number of old people in the community. Besides physical care,
                    the person gets there also the company of one’s own age group.
                    One can develop a new family in such a setting, provided the
                    person is friendly, accommodating, and loving.
                </p>
                <p>
                    The third option is to live the life of a recluse, detach oneself
                    from family and friends and live a secluded life in a spiritual
                    organization, balancing outer work (selfless service) with inner
                    work (study, meditation, and inner churning).
                </p>
                <p>
                    The fourth option is to realise that there is no well-defined set of
                    circumstances that are ideal. The important thing is to focus on
                    one’s spiritual growth rather than the circumstances. Spiritual
                    growth is possible in all circumstances. Spiritual growth has
                    a few pre-requisites that are essentially in the person’s own
                    hands. The first is to cultivate love, and to express that love.
                    The essence of love is to give what one has to those who need
                    it. Such opportunities are easily found if one just looks around.
                    Second, to be grateful for one’s blessings. Third, to be vigilant
                    not to give in to one’s weaknesses and negativities. Fourth, to
                    acknowledge that our life is in the hands of the Divine, who is
                    all-knowing and all-powerful. The ways of the Divine we may
                    not understand, but one can always surrender to the Divine. An
                    unquestioning surrender to the Will and Wisdom of the Divine
                    is an infallible prescription for lasting mental peace. Further,
                    surrender is not a feel-good formula; it is an attitude that is
                    rooted in the deepest truths of existence. With these attitudes
                    the person becomes, irrespective of circumstances, like a flower
                    that spreads fragrance, and the person’s life turns beautiful.
                </p>
                <p>
                    <hr>
                <h6>
                    <p>
                        When grace is joined with wrinkles, it is adorable. There is an
                        unspeakable dawn in happy old age.
                    </p>
                    <p> &mdash; Victor Hug</p>
                </h6>
                </p>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php'); ?>