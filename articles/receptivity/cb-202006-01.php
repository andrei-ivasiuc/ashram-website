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
    <div class="text-center  pt-5 ">
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
                <h6>
                    <p>
                        What Makes the Receptacle Ready to Receive?
                        Aspiration calls down an answer, and this answer, the effect, which
                        is the result of the aspiration, depends upon each one, for it depends
                        upon his receptivity.
                    </p>
                    <p>&mdash;The Mother (The Great Adventure, p. 138)</p>
                </h6>
                </p>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center mt-3 mb-4" style="vertical-align: middle;">
            <div class="col-lg-8">
                <img class="article-img img-fluid" style="height: 200px;" src="./img/Gladiolus xhortulanus.jpg">
                <p class="fs-5">
                    <b>Gladiolus xhortulanus</b>
                </p>

                <p class="fs-6">
                    Multicoloured. Spiritual significance: Manifold
                    receptivity. Nothing resists the Light.
                </p>
            </div>
        </div>

        <div class="row justify-content-center" style="vertical-align: middle;">
            <div class="col-lg-8 mb-4 col-sm-12 fs-5">
                <p>
                    Forty students attend the same class, but only a
                    few are able to go to the heart of the lesson. The
                    Call Beyond goes to a few thousand, but only a few
                    hundred read it. A few hundred thousand people
                    live within walking distance of Sri Aurobindo
                    Ashram – Delhi Branch, but only a handful walk
                    to it, even when there is no lockdown. Millions of
                    people see beggars outside temples, but only one
                    Narayanan Krishnan changes the plans of his life
                    to feed them.* It is as if there is plenty of positivity labelled ‘to
                    whom it may concern’ around, and those whom it concerns are
                    uniquely equipped to receive it, just as the television is uniquely
                    equipped to receive what is telecast.
                </p>
                <p>
                    What equips a person to be especially receptive to spiritual
                    awakening, the call from the beyond? Each individual soul is
                    on an evolutionary journey. When a soul gets embodied as a
                    human being on earth for the first time, the individual may
                    behave almost as an animal, which it was in the previous life.
                    But as a human being, she has a free will, which she may use
                    throughout life for making choices, some of which raise the
                    consciousness and some that lower it, and per chance she may
                    leave the world at a level of consciousness higher than the one
                    with which she arrived. This goes on for several lives, and finally
                    she arrives as a human being who has a level of consciousness
                    that sets her apart from the average of her species. She may be
                    the odd one out, ‘too good’, ‘won’t fit into the world’ types. She
                    does not live to eat, she eats to live. And, she is highly receptive
                    to a trigger that wakes her up. The trigger is the call from the
                    beyond. She now knows how she has to live, why she has to
                    live that way, she enjoys living that way, and that is the only
                    way she can live. In short, she is now on the spiritual path. Just
                    as she was receptive to the call, she is also receptive to a contact
                    with the one who was destined to be her Guru. Now she walks
                    the spiritual path secure in the guidance, the protection, and
                    above all, the Grace of the Guru.
                </p>
                <p>
                    The spiritual awakening often comes through a misfortune, a
                    traumatic event, which makes a person miserable and helpless.
                    But sometimes it comes through good fortune, as it did in case
                    of Mani Bhaumik who, after staying intoxicated with material
                    success, one day suddenly got a queasy feeling of being
                    overfed and underfed at the same time – overfed with material
                    possessions, progress, name and fame; and underfed spiritually.
                    The awakening leads to an aspiration for discovering what it is
                    that is truly Eternal, Everlasting; for discovering how I as an
                    individual am related to that Absolute Reality; and for giving
                    a meaning and direction to life that would be based on these
                    discoveries. The more intense and sincere the aspiration, more
                    effective is the Divine Grace because the intensity and sincerity
                    of the aspiration heighten the receptivity. Taking a clue from
                    one of Kabir’s couplets, the Divine Grace is always there, but
                    it is like sugar mixed up in a heap of sand. An elephant cannot
                    find the sugar, but an ant can, because the ant has receptivity
                    for sugar. Similarly, it is not the wealth of a millionaire or the
                    intellect of a genius that gives receptivity. It is the spiritual
                    evolution over several lives that creates aspiration; and it is
                    sincere aspiration, which even a simpleton might have, that
                    creates receptivity.
                </p>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php') ?>