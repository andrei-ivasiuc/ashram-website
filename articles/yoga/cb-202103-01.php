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
            <div class="col-lg-8 col-sm-12 fs-5">
                <h2> <?php echo  $article["title"] ?></h2>
                <h1></h1>
                <h3><?php echo $article["author"] ?></h3>
                <h6><?php echo $article["source"] ?></h6>
                <h6><?php echo date_format(date_create($article["date"]), "d M Y") ?></h6>
                <hr>

                <p>
                    Yoga refers to the movement of the individual from an
                    ordinary state of consciousness driven by personal desires
                    and impulses towards a state of higher consciousness,
                    which expresses as unity, love, power, bliss, all possibility
                    and all knowledge. In that state of consciousness, our
                    life is organised around our divine center or the
                    psychic being.
                </p>
                <p>
                    Yoga also seeks to answer the questions such as why we
                    are born, who we are we, what this world is, why this
                    world was created, who created the world, and where we
                    are headed.
                </p>
                <p>
                    Yoga also has tools such as asanas, pranayama, meditation,
                    chanting, prayer, constant remembrance and offering, and
                    dispassionate work.
                </p>
                <p>
                    Yoga eventually refers to a goal. The goal is the union
                    of the individual soul with the divine. In order to effect
                    this union, one part of the being like our mind, body, or
                    emotions can be taken as the starting point to connect our
                    individual self to the divine, or our entire being can be
                    used to effect this link.
                </p>
                <p>
                    If our individual personality is driven by knowledge and
                    learning, then we can start with seeking answers to the
                    eternal questions through reading, inquiry and deliberation.
                    These eternal questions have been asked since millennia,
                    more intensely in India than elsewhere, and there are
                    numerous texts such as the Vedas and the Upanishads
                    that answer these questions. Some exceptional beings who
                    realised these truths, noted down their experiences in
                    words for all of humanity to benefit from them. However,
                    even though this knowledge has been available to us since
                    millennia, humanity as a whole has not evolved or gone
                    through a transformation.
                </p>
                <p>
                    This tell us that for realizing the higher realities, mental
                    knowledge can be only a starting point. It can be the
                    magnet that pulls us to the object of our knowledge. But
                    if we stay content with just the mental knowledge, nothing
                    real is attained by us and our nature continues to be what
                    we were before getting the new knowledge. For example,
                    we can understand and learn the concept of One in all,
                    that the Divine is one and from Himself He created many.
                    Therefore, we are all one. But till we get a true experience
                    of unity with everything and everyone, we can only operate
                    from a limited place within us, our Mind. We continue to
                    feel isolated from others, we continue to divide people into
                    categories such as friends, family, enemy, self and nonself. We continue to work primarily with the intention of
                    self-gain. The knowledge of our oneness does lend to us a
                    compassionate leaning and an empathetic approach to our
                    relations, but it is not complete and hence marred with
                    imperfections.
                </p>
                <p>
                    Mentally, most people know that we are not the body or
                    the mind, but the Soul. But how many truly live their life
                    making this the central feature? Almost all of us organise
                    our life around the ego, and the world is a reflection of
                    this today. This means that until we get a real experience
                    of ourselves as the Soul, we are not able to translate the
                    mental knowledge into our everyday life.
                    Does this mean we should not seek or try to learn anything
                    mentally?
                </p>
                <p> Here we might need to look at the individual nature of a person. Some people must know and understand something clearly. Some people have faith and devotion, and don’t care for mental knowledge. Yet others believe in working, and through work, finding answers. Hence it is not wrong to try to learn yoga, to seek to know what is implies, its methods, its various turns, paths, its powers, the peace and joy it can bring. But until we translate what we know mentally into action and everyday living, it stays at the level of the mind and doesn’t take us closer to the object of our learning – the Divine. Unless we make the voice of the psychic the central unifying principle of our life and follow its dictates, we are still not practicing yoga. When the knowledge we gain mentally is also put into practice by making the right choices every minute of our life and following that choice, then we can say that we are practicing yoga. Hence, to progress on the spiritual path, we must make yoga not just a mental seeking but the most important pursuit in our life where every thought, every feeling, every action must be offered to the divine. That is why, yoga is not simply something to be learnt, it is something to be lived. </p>
                <hr>
                <p>
                <h6>
                    This essay was submitted by Monica Chand as part of the requirements for the Course on Teaching Yoga conducted by Sri Aurobindo Ashram – Delhi Branch in 2019

                </h6>
                </p>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php'); ?>