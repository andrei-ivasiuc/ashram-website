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
                    ‘Yoga and Meditation’ is an expression used so commonly that nobody feels even the need to pause and think what it means. It is taken to be beyond any doubt or question that the expression refers to a combination of physical practices (asanas and pranayamas), which is yoga; and a technique by which the mind can be free of stress, which is meditation. Both types of techniques, asanas and pranayamas, as well as meditation, are quite fashionable today. Within these techniques also, people try to minimize effort. They start looking for specific asanas, which would help them ‘cure’ a specific disease like diabetes or hypothyroidism. In short, ‘Yoga and Meditation’ is seen as a set of techniques which are an easy way to good health. I don’t agree with this very dwarfed view of the grand discipline that yoga really is.
                </p>
                <p>
                    To justify myself, let me begin by writing about yoga. According to Sri Aurobindo, yoga is a methodised effect towards self-perfection. Its ultimate aim is achieving union with the Divine. We human beings are imperfect beings; the perfect being is the Divine. So, yoga means a systematic way of moving towards the Divine. The movement towards the divine is long and difficult. So, a systematic method is necessary. This systematic route is the use of yogic techniques, which include not only asanas and pranayamas but also meditation. Thus, the first error in the expression ‘Yoga and Meditation’ is that yoga includes meditation. Therefore, in the expression ‘Yoga and Meditation’, ‘Meditation’ is redundant. Meditation is a part of yoga. The second error is that doing these techniques does not by itself constitute yoga. These techniques have to be done with the yogic attitude which will lead to the movement towards the perfect being. The third error is that the yogic attitude is not restricted to the time when one is doing these techniques. The yogic attitude is required throughout the day.
                </p>
                <p>

                    What is the attitude with which the yogic techniques should be done? The attitude is that although we do them to make the body and the mind fit, we want the body and the mind to be fit so that they can be suitable and durable instruments for doing what the Divine expects of us. It is only with this attitude that the asanas become yogasanas. Without this attitude, they are just asanas (postures), not yogasanas. On the other hand, with the yogic attitude, even other exercises such as walking, jogging, cycling or swimming become a part of yoga.
                </p>
                <p>
                    What is the attitude that a practitioner of yoga should have when not doing the techniques? The yogic attitude involves three parts. First, without any ego, everything that one does should be done as an instrument of the Divine. Yogasanas and meditation sharpen the instrument so that it can serve the Divine better. Secondly, all work is done as an offering to the Divine, with no desire for reward. This brings great mental peace. Finally, since all work is offered to the Divine, it is done with love, and to the best of one’s ability, so that it is fit as an offering to the Divine. By living with such attitude, yoga becomes a journey to reach the Divine. Since the attitude is required all twenty-four hours, all life becomes yoga. That is why, Sri Aurobindo said, “All life is yoga.”
                </p>
                <hr>
                <h6>
                    Rachna Bansal did a Course on Teaching Yoga at Sri Aurobindo Ashram – Delhi Branch in 2017
                </h6>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php'); ?>