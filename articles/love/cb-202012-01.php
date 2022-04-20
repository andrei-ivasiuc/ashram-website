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
                    A few days back, I was confronted with a strange dream. I had
                    died and was going up in the sky, above the clouds, above the
                    moon and stars, still above. Suddenly, I came across the God of
                    Death. His face was familiar. I had met him a number of times
                    before. But there was a marked change in his visage. Previously,
                    it used to be tense and hard-looking. This time, it was showing
                    up a glimpse of a faint smile. It relieved me. It seemed I had
                    done some good acts during my lifetime that had pleased him.
                    He addressed me saying, “One thing of your world below we
                    have appreciated so much that we have also adopted it here
                    in our management. That is what you call ‘Self-assessment
                    Report’. Accordingly, you have to tell us faithfully, about such
                    acts done by you on the Earth which left an indelible mark on
                    your heart and soul. In the light of your account, we will decide
                    about sending you back to Earth once again.”
                </p>
                <p>
                    I replied, “This time, I cultivated many friendships and loved my
                    friends immensely. Whenever I felt the pangs of love, I would
                    either hanker after my old friends or make new ones. But the
                    more I love, the more unquenchable became my thirst for love. I
                    would pine for the company of some friends, and meeting them
                    daily or on alternate days became a sort of necessity for me. It
                    was, however, a big task to maintain my friendships. These took
                    a great toll of my time and resources. Such was their extent that
                    year after year, I had to send more than a hundred New Year
                    cards to my friends alone.
                </p>
                <p>
                    Then, one day, I had an unusual experience. I was sitting
                    alone. My mind was empty. Neither any emotion nor any
                    thought. A deep silence within and about me. All of a sudden,
                    a caressing wave of love poured forth on my heart. It was
                    like a ray of light coming from somewhere very near. I felt
                    saturated. It was, however, short-lived and soon departed. It
                    was all a puzzle, a mystery. I wondered from where it came,
                    how it came and how it left?
                </p>
                <p>
                    After some days, this unusual experience happened again. Then
                    too, some entity in me observed that my thoughts and emotions
                    had fallen from me and my mind, denuded of its contents, had
                    become like an empty vessel ready to receive some mysterious
                    love pouring in.
                </p>
                <p>
                    This time I got convinced that there existed a fount of love
                    somewhere deep inside me. Henceforth, whenever I felt the
                    pangs of love, all I had to do was to empty my mind of all the
                    useless weaving of thoughts, emotions and passions. And soon,
                    the soothing waves of love would ripple in my heart and wrap
                    my whole being in their fold. I then realised that I need not
                    hanker after my old friends or make new ones.”
                </p>
                <p>
                    I was speaking all this and the God of Death was listening. I
                    observed that the faint smile had spread over his entire visage.
                    Suddenly I realised that I was supposed to answer some of
                    his queries but I had gone astray in my narration. This gave
                    me a jolt which awoke me and stopped my dream. It took me
                    a few seconds to assure myself that I was very much alive
                    and all my narration in the dream to the God of Death was a
                    fact in real life.
                </p>
                <p>
                    <hr>
                <h6>
                    <p>
                        Reproduced from The Call Beyond, Vol. 20, No. 3, p. 41, 1995
                    </p>
                    <p>
                        To seek Thee constantly in all things, to want to manifest Thee
                        ever better in every circumstance, in this attitude lies supreme
                        Peace, perfect serenity, true contentment.
                    </p>
                    <p>&mdash; The Mother</p>
                </h6>
                </p>
                <hr>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php') ?>