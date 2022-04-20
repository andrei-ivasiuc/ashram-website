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
                        You will progress when it is decided that the time has come to
                        progress and not because you desire it.
                    </p>
                    <p>
                        &mdash; The Mother (‘The Great Adventure’ p. 338)
                    </p>
                </h6>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center mt-3 mb-4" style="vertical-align: middle;">
            <div class="col-lg-4" style="vertical-align: middle;">

                <img style="height:300;" class="img-fluid card-img-top" src="./img/Catharanthus roseus.jpg">
            </div>
            <div class="col-lg-4 " style="height: 320px ; vertical-align: middle;">
                <p class="fs-5">
                    <b>Catharanthus roseus </b>
                </p fs-6>
                <p>
                    (Popular names: Madagascar periwinkle, Old maid, Cayenne jasmine, Rose periwinkle)
                    <br>
                    <br>
                    Spiritual significance: PROGRESS. This is
                    why we are on earth.
                    <br>
                </p>
                <p>
                    Small to medium-sized salver form flowers
                    with a narrow green corolla tube and limb
                    divided into five separated spatulate lobes;
                    in white and shades of pink and red, often with a contrasting eye;
                    borne singly in the leaf axils. A long-blooming perennial herb.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 mb-4 col-sm-12 fs-5">
                <p>
                    Progress is one of those seemingly simple topics that seem
                    beyond debate. Who can question the value of a process that
                    takes us from where we are now to something better, something
                    higher, something more desirable? That is what everybody
                    wants, although in different spheres. A school teacher wants
                    to be the principal, a Major wants to be a Colonel, one living
                    in a two-bedroom house dreams of a four-bedroom house,
                    a manager may switch jobs to add zeroes to his income and
                    bank balance, and so on. Anyone who knows that life levels
                    everybody understands the ultimate futility of chasing roads to
                    progress. In spite of the understanding, he may walk these roads,
                    but possessing the knowledge that in the long run material
                    progress would mean nothing adds a sense of proportion to the
                    pursuit, and introduces morals into the means adopted to gain
                    speed or handle hurdles. Senseless and unscrupulous material
                    progress has ruined individuals; spectacular but shortsighted
                    material progress followed by the human race during the last
                    few centuries is threatening to drive life on planet earth to
                    extinction.
                </p>
                <p>
                    There is another type of progress, however, that is risk-free.
                    The progress that adds joy and purpose to life is spiritual
                    progress. Spiritual progress means growth of consciousness. As
                    human beings, we are born at a certain level of consciousness.
                    Consciousness basically means awareness. Most of us are born
                    with a consciousness that enables us to see ourselves as distinct
                    individuals with a characteristic personality. As individuals
                    we identify ourselves with our body and mind, but also
                    have a dim awareness of a Reality deeper, wider and higher
                    than the body-mind complex which is not only a part of our
                    being but also has a universal presence. To move from dim
                    awareness to vivid awareness of that Reality is a movement
                    towards a better awareness, a more complete awareness. Since
                    awareness is consciousness, expansion of awareness is growth
                    of consciousness. Growth of consciousness is spiritual progress.
                </p>
                <p>
                    Why should one be interested in spiritual progress? For reasons
                    more than one. First, as human beings we are born with the urge
                    for spiritual progress. Secondly, only human beings seem to have
                    the capacity for spiritual progress. Finally, working towards
                    spiritual progress is the only way to get what everybody is
                    looking for but does not know where to find it. Paradoxically,
                    the dictum in spiritual progress is not to look for anything,
                    not even for spiritual progress. Everything, including spiritual
                    progress is a by-product, not something to be pursued. Instead
                    of looking for anything, what one needs to do is to see through
                    the superficial perception of separation from others. Doing so
                    enables one to see the oneness that unites us at a deeper level.
                    A feeling of oneness leads to love. Cultivating love leads to
                    intimacy. Love and intimacy get expressed through giving what
                    one has to those who need it. The by-products of giving are
                    joy, peace, harmony, health, fulfillment and, of course, spiritual
                    progress. What else does anybody want? But how many look
                    for what they want at the right place? Instead, most people look
                    for it in material progress, and eventually get disappointed.
                    Then they may start looking for it in meditation. Again, they
                    are disappointed. Then they start looking for someone who will
                    teach them exactly how to meditate. What one has to realise is
                    that meditation is good, but it is neither necessary nor sufficient
                    for spiritual progress. The simplest, safest and surest way to
                    progress spiritually is through work, selfless work that is
                    inspired by love. That is why, the Mother has advised us “to
                    devote part of our time each day to some impersonal action;
                    every day, we must do something useful for others.” If we do
                    our bit, the Mother takes care of the rest, including our spiritual
                    progress. We need neither worry about spiritual progress nor
                    try to monitor how much we have progressed, or how fast we
                    are progressing. In short, we should aspire to progress, but not
                    be obsessed with it. The Mother has assured us that all what
                    is expected of us is to be simple, happy and quiet; to do our
                    work as well as we can; and to remain open to Her. Remaining
                    open to Her means not letting mental afflictions such as doubts
                    about progress and anxiety for progress block the work that
                    Her Grace is doing on us out of Her Infinite Love for us.

                </p>
                <hr>
                <p>
                <h6>
                    <p>
                        When they come out of their meditation, they are no better than
                        they were before. All their defects are there which come back as soon
                        as they come back into their waking consciousness; and they never
                        make any progress because they do not establish a relation between
                        their deeper consciousness, the truth of their being, and their outer
                        being. You see, [during meditation] they take off their outer being
                        as though they were taking off a cloak, and they put it in a corner.
                        [And after meditation, they put on the cloak again.
                    </p>
                    <p>&mdash; The Mother (‘The Great Adventure’, p. 153)</p>

                </h6>
                </p>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php') ?>