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
                    “God? You talk to me about God? … Do you think I can pray
                    now to a God who allowed my whole family to be killed for no
                    reason? Could I believe in a God that gives punishment where
                    there is no crime?” (– Erich Segal, in his novel, Doctors, on page
                    164)
                </p>
                <p>
                    Answer: Tragic, but sounds familiar. An event shatters the
                    image of God that a person had, and faith evaporates. The
                    image of God as One who is full of love and compassion for
                    all, or as a Super-judge who rewards good and punishes evil,
                    does not survive the realities of the world. But who created that
                    image of God? Humans, who try to impose their interpretation
                    of love, logic and justice on God. Why should we expect God
                    to ‘think’ like us? Since our capacities to think and judge are
                    limited, whereas those of God by very definition are Infinite,
                    why not have faith in God, and trust Him to do what is best?
                    But how about tragedies such as ‘a whole family getting killed
                    for no reason’? The character in the novel is looking at the event
                    from a personal angle, and therefore his view is coloured by
                    attachment, which is a function of the ego. Looking at it from
                    a higher plane, it is only a minor accident in a vast universe.
                    The journey of a few souls has been cut short tragically, but
                    these souls can get embodied again and continue the journey
                    in the next life. Therefore, the event need not be looked upon
                    as punishment for a crime not committed. God neither rewards
                    nor punishes; he only gives conditions and circumstances for
                    spiritual growth. Each one gets the circumstances that suit the
                    person the best. Most get circumstances which are a mixture of
                    those perceived as pleasant and those perceived as unpleasant,
                    because that is what we need. The person who is going through
                    the experience of his family getting killed has received an
                    unpleasant experience, which he can use as an opportunity
                    for spiritual growth. Losing faith in God amounts to losing an
                    opportunity. Luckily, after initial anger and loss of faith, most
                    people come round and make some use of such opportunities.
                    But still, how can God allow an event such as ‘a whole family
                    getting killed for no reason’ happen. Possibly it is an accident,
                    to which some human wills and perhaps some other mysterious
                    forces contributed. From God’s plane, it was perhaps too minor
                    an event to intervene in. Like the boss at the top, God perhaps
                    takes care of the overall direction of the universe. The minor
                    details are left to the interaction of the various forces that He
                    only has created, human freewill being one of them. No matter
                    what happens through these interactions, God’s Will can make
                    sure that the overall direction remains as designed by Him.
                    <hr>
                </p>
                <h6>
                    <p>
                        A will to climb lifts a delight to live,
                        Heaven’s height companion of earth-beauty’s charm,
                        An aspiration to the immortal’s air
                        Lain on the lap of mortal ecstasy.
                    </p>
                    <p>
                        Sri Aurobindo (‘Savitri’, Book 6, Canto 1)
                    </p>
                </h6>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php') ?>