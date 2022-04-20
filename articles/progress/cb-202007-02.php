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
                        The rolling cycles passed and came again,
                        Brought the same toils and the same barren end,
                        Forms ever new and ever old, the long,
                        Appalling revolutions of the world.
                    </p>
                    <p>&mdash; Sri Aurobindo (‘Savitri’, book 10, Canto 4, p. 643, SABCL edition)
                    </p>
                </h6>
                <hr>

                <p>
                    That material progress is illusory is easy to understand. Sri
                    Aurobindo raises the same question about spiritual progress
                    in ‘Savitri’ by putting in the mouth of the God of Death the
                    words: “Where leads the march, whither the pilgrimage?” A
                    popular idea is that spiritual progress would ultimately lead
                    to merging with the Divine, thereby eliminating the necessity
                    for returning to this terrible world in another body. But Sri
                    Aurobindo and the Mother do not look upon an escape to
                    another world, where there is no sorrow or misery, as the
                    final goal of spiritual life. Here two points deserve emphasis.
                    First, it is not just the individual soul that has to evolve to a
                    level that it merges with the Divine. All parts of the being: the
                    physical (body), vital (emotions) and mental (intellect) should
                    be taken up for transformation so that they are illumined,
                    without any obscuring veil, by the Light of the soul. The
                    physical, vital and mental are our instruments of action. As
                    a result of transformation of the instruments, the person is
                    able to organize outer life around her divine essence, the soul.
                    Thus, an inner change gets reflected in outer life. Secondly, even
                    after the person’s surface has unified around her deepest Self,
                    escaping the cycle of birth and death is not the goal. One can
                    still return to the world for the sake of one’s fellow beings, for
                    the sake of the consciousness of the human race, for changing
                    the character of the world from that of a place of sorrow and
                    suffering to one of peace and harmony. In short, the person
                    should return to the world to contribute to bringing heaven
                    down to earth. That is the vision of Sri Aurobindo and the
                    Mother. And, just imagine the joy of the individual who returns
                    to earth although she need not. This person can experience the
                    delight of being active in the world, and yet can view with
                    total detachment all happenings here like a game (leela) of the
                    Divine. If all ‘serious stuff’ is a game, isn’t spiritual progress
                    also a part of the game? If spiritual progress is just a game, isn’t
                    spiritual progress also, like material progress, a myth? Even if
                    it is a myth, it is a magnificent myth. It is a myth that destroys
                    all other myths. The myth that destroys all other myths cannot
                    be a myth. As Sri Aurobindo says in his Upanishad, jagadapi
                    brahma, satyam na mithyaa: since the Universe is also the Divine,
                    it is Truth, not a falsehood.
                </p>
                <hr>
                <h6>
                <p>
                    The thirst for progress, the thirst to know, the thirst to transform
                    yourself, and above all the thirst for Love and Truth - if you keep
                    that, you go faster. Truly a thirst, a need, you know, a need. All
                    the rest has no importance, what you need is that.
                </p>
                <p>
                    No more bonds - free, free, free, free! Always ready to change
                    everything, except one thing: to aspire. That thirst. The
                    “Something” we need, the Perfection we need, the Light we need,
                    the Love we need, the Truth we need, the supreme Perfection
                    we need - and that’s all. The formulas - the fewer the formulas,
                    the better. A need, a need, a need . . . which only the Thing can
                    satisfy, nothing else, no half measure. Only That. And then,
                    move on, move on! Your path will be your path, it doesn’t matter;
                    any path, any path whatever.
                <p>&mdash; The Mother</p>
                </p>
                </h6>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php') ?>