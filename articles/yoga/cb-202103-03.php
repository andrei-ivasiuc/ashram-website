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
                <h6>
                    To seek Thee constantly in all things, to want to manifest Thee ever better in every circumstance, in this attitude lies supreme peace, perfect serenity, true contentment.

                    </p>
                    <p>&mdash; The Mother (‘Prayers & Meditations’, p. 96)
                </h6>
                </p>

                </p>
                <hr>
                <p>
                    When I chanced upon the opportunity of enrolling into a course on Integral Yoga, I was extremely elated, but soon caution threw in a wind of doubt – is this going against my religion? We have to chant mantras which is not a part of my religion; would that be ok?
                </p>
                <p>
                    Despite this dilemma, I did enroll, and through my time in this course, and with the help of my teachers and classmates, I have begun to understand what Yoga really is, and am now able to dispel this confusion for myself and for those near me.

                </p>
                <p>
                    Unfortunately, to understand the true meaning of yoga, one has to start practicing it. While Yoga is gaining popularity in the West, it is also being modified in ways acceptable to them so that they can still be religiously right. Chanting of mantras is not insisted upon , and the Sanskrit terms are replaced with their translations into local languages.
                </p>
                <p>
                    One must look closely at what they consider as religious, and then try to find its true meaning. The main conflict that other religions have with Yoga is the chanting of ‘Om’ and the mantras. Some non-Hindus hesitate to chant OM (including me at first), because they think that it is a Hindu word. This is wrong. It is a symbol found of the Divine, the
                    one God we all believe in. The mantras chanted in yoga are in Sanskrit. Sanskrit is an ancient Indian language, and hence ancient Indian religious scriptures were written in Sanskrit. Language is only a means of communication. It has no religion. When the Sanskrit mantras are translated, one finds that they have a meaning that would be acceptable across religions.
                </p>
                <p>
                    Sadhguru has aptly explained this in one of his blogs: “Why the yogic sciences have gotten labeled as Hindu is because this science and technology grew in this culture. And because this culture was dialectical in nature, naturally they delivered the science in a dialectical manner, involving the cultural strengths of the land, which is essentially the Hindu way of life. The word ‘Hindu’ has come from the word ‘Sindhu,’ which is a river. Because this culture grew from the banks of the river Sindhu or Indus, this culture got labeled as Hindu. Anybody who is born in the land of Indus is a Hindu. It is a geographical identity, which slowly evolved into a cultural identity.”
                </p>
                <p>
                    In fact, recent studies in quantum physics have given much importance to OM. Nikola Tesla said, “If you want to find the secrets of the universe, think in terms of energy, frequency and vibration.” In terms of spirituality and evolution of the universe
                    – if at first there was nothing, the very first thing was a sound vibration, and from there everything sprang into existence and the material world was born. OM was that primal sound vibration. The very foundations of our Universe, of matter and thought, appear to lie in sound vibration. Considered to represent the primal or primordial sound of the Universe, OM connects us to and carries the Divine in vibrational form, making our prayers and mantras more effective.

                </p>
                <p>

                    According to Paramahansa Yogananda, author of the classic text ‘Autobiography of a Yogi’, “Om or Aum of the Vedas became the sacred word Hum of the Tibetans, Ameen of the Moslems, and Amen of the Egyptians, Greeks, Romans, Jews, and Christians.” The syllable has been translated into many different languages, cultures, and religious traditions, but the creative and transformative power of the sound remains the same.
                </p>
                <p>
                    Some religious people also have an issue with the name of the postures. The Sanskrit names of the yoga postures are changed suitably in other languages to take care of such objections. For example, Surya Namaskar, literally salutation to the Sun, is not acceptable to some people. While honouring the sun seems quite innocuous, one of my teachers said that the practice could be called ‘dwaadashaasana’ (‘dwaadash’ in Sanskrit means twelve), because Surya Namaskar is a set of twelve postures that flow harmoniously from one into another, and give a good top to toe workout.
                </p>
                <p>
                    However, is something religious if you don’t have the intention there? With reference to kneeling – is one in a position of prayer, or is that person just kneeling? Kneeling is visible; prayer during kneeling is invisible and optional.
                </p>
                <p>
                    On the other hand, for some Muslims, Christians and Jews, yoga is attractive precisely because it supplies a mystical element, which they feel is not sufficiently emphasized in their own religion.

                </p>
                <p>
                    In a BBC article, ‘Does doing yoga make you a Hindu?’, an Iranian yoga teacher told the BBC that her religious students sometimes report that they pray with more concentration after practicing yoga. “They say, ‘when we go to Mecca, we
                    feel we are able to make a deeper pilgrimage because of the yoga. Our minds and our bodies move closer to our faith.’, she said.”
                </p>
                <p style="color: var(--bg-gold)">
                    <b>
                        The co-founder of Yoga London, Rebecca French, says, “Something that is interesting about yoga is that whilst it is spiritual, it doesn’t stipulate a specific religion. Even in the devotional forms of yoga, it says you can use any object of devotion you like, be it Ganesha, Krishna, Jesus or Allah. Even atheists can practice yoga. They can fix their attention on the ‘wonder of the universe’ or perhaps the complexity of the DNA helix.”
                    </b>
                </p>
                <p>
                    Whilst there is a constant debate amongst non-Hindus on the acceptance of yoga, they tend to ignore the real essence of Yoga. In ‘The Synthesis of Yoga’, Sri Aurobindo says that while Hatha Yoga works towards physical perfection, Raja Yoga focuses on mental perfection. Raja yoga is based on the eight limbs of Patanjali’s yoga. The first two of these limbs are Yamas (restraints) and Niyama (rules), which are essentially common to the ethical codes of all religions.
                </p>
                <p>
                    The Yamas are:
                <ul>
                    <li>Ahimsa (Non-violence) </li>
                    <li>Satya (Not telling a lie)</li>
                    <li>Asteya (Not stealing)</li>
                    <li>Brahmacharya (Moving towards the Divine)</li>
                    <li>Aparigraha (Not adding to one’s possession)</li>
                </ul>
                </p>
                <p>
                    The Niyamas are:
                <ul>
                    <li>Shauchha (Cleanliness)</li>
                    <li>Santosh (Contentment)</li>
                    <li>Tapas (Concentration of effort)</li>
                    <li>Swadhyaya (Self-study)</li>
                    <li>Ishwar pranidhana (Surrender to the Divine)</li>
                </ul>
                </p>
                <p>
                    Aren’t these the precepts to becoming a better human being? In today’s times of moral decline and religious conflicts, aren’t such precepts really the need of the hour?
                </p>
                <p>
                    Yoga is not a religion; it is instead a spiritual path. Yoga is a quest for self-perfection; perfection of the mind and the body, so that these instruments become one with the spirit. The aim of Yoga is to help our ascent towards a higher spiritual being, to take us closer to the Divine. What else is the true meaning, or purpose, of human life?

                </p>
                <hr>
                <p>
                <h6>
                    Ritisha Nadia James was a student in the Course on Teaching Yoga conducted at Sri Aurobindo Ashram – Delhi Branch in 2018. This article was an assignment submitted by her as one of the requirements for the course. The topic of the article was her choice, and the views expressed are personal views of the author.

                </h6>
                </p>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php'); ?>