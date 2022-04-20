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
    <div class="text-center  pt-5 pb-3">
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
                <p> During the corona virus pandemic, there has been an understandable urge that
                    most of us have felt to ask all our near and dear ones how they are doing. In the
                    process, we have ended up getting connected once again with many people with
                    whom we had otherwise not communicated for years. Yet, there have been many whom
                    neither we contacted, nor did they take the initiative. We thought about some of them off and on, decided to call or
                    message them, but before we could do it, we simply ‘forgot’. Whether there is a numerical limit to social relationships is
                    a subject in which Robin Dunbar took deep interest. On the basis of his study, Dunbar, a British anthropologist, proposed
                    in the 1990s that there is a limit to the number of people with whom one can maintain stable social relationships, and that
                    number is 150. This number is the people with whom we currently have a relationship; it does not include those with
                    whom once we had a close relationship but it ended due to one reason or the other: the reason could be change of
                    residence, change of workplace, or getting married! Those with whom the relationship ends keep getting replaced by
                    others, but the number seldom exceeds 150. A recent study has suggested that Dunbar’s number is applicable also to
                    online social networks. But within these 150 also, there is a stratification. Dunbar mentioned two more numbers: an inner
                    core of about 5 people to whom we devote about 40 percent of our available social time, and 10 more people to whom
                    we devote another 20 percent. All in all, we devote about two thirds of our time to just 15 people.
                </p>
                <p>
                    Realizing these limitations, if we failed to contact during the lockdown someone who was once pretty close to us, the
                    person should not mind. It does not mean that we do not love that person. It is just that there is a limit to connectivity
                    imposed, according to Dunbar, by the ‘size of our brain.’ Therefore, love for all is understandable as a mental ideal
                    and a spiritual conviction, but in practice, the expression of love remains limited to very few. For those on the spiritual
                    path, these few include their ‘spiritual family’; the family they feel close to because of a similar level of consciousness.
                    It is only the Divine who can love all, and express it too! And, what an abundant expression it is!!!
                <p>
                    <hr>
                <h6>
                    <p>
                        <i>Reference : </i>
                        https://en.wikipedia.org/wiki/Dunbar%27s_number
                    </p>
                    <p>
                        <i>Acknowledgement : </i>
                        The editor first learnt about the Dunbar number from ‘Yoga Life’, January 2020, p. 12.
                    </p>
                </h6>
                </p>
                <hr>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php') ?>