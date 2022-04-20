<!DOCTYPE html>
<html lang="en">
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
    <section id="articles" class="home-section" style="background-color: var(--bg-light)">
        <div class="container">
            <!-- <div class="row">
                <div class="col text-center mb-4">
                    <h2><?php echo strtoupper($topic); ?></h2>
                </div>
            </div> -->

            <div class="row mb-5 gy-5">
                <?php foreach ($latest_articles as $i => $article) : ?>
                    <?php
                    if (strcasecmp($article["file"], basename(__FILE__)) == 0) {
                        // echo ('match');
                        break;
                    } else {
                        // echo ('mismatch');
                    }
                    ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<body>
    <section class="header-horizontal dark" style="background-color: var(--bg-darker);">
        <div class="text-center  pt-5 pb-5">
            <h2><?php echo strtoupper($topic); ?></h2>
            <img src=<?php echo $article["img"]; ?>>
        </div>
    </section>
    <section class="event-text">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-12 fs-5 ">
                    <h2> <?php echo  $article["title"] ?></h2>
                    <h1></h1>
                    <h3><?php echo $article["author"] ?></h3>
                    <h6><?php echo $article["source"] ?></h6>
                    <h6><?php echo date_format(date_create($article["date"]), "d M Y") ?></h6>
                    <hr>
                    <p>
                        Love must not cease to live upon the earth;
                        For Love is the bright link twixt earth and heaven,
                        Love is the far Transcendent’s angel here;
                        Love is man’s lien on the Absolute.
                        Sri Aurobindo (Savitri, Book 10, Canto 3, p. 633)
                    </p>
                    <p>
                        Apart from the almost unreal orderliness that marks the
                        city of Singapore, there was another thing that took me by
                        surprise – the number of strangers who would smile at you.
                        On the roads, at the markets, in public transportations – if
                        you had an eye contact with anyone, you could extend it with
                        a smile. A gesture as simple as an unsolicited smile is very
                        powerful. It has the strength to turn an ordinary day into a
                        memorable one. It can calm a person down in one instant. It
                        has the ability to momentarily evaporate tension. Smile brings
                        in peace. It creates a bonding, a kind of trust between people.
                        A smile has the ability to create an unspoken connection that
                        could have lasting effects. Even after so many years, I can
                        quite clearly remember the faces that extended courtesy to
                        me with a smile. There were no reasons or purposes behind
                        that action. I thought it be one of the most beautiful gestures
                        requiring negligible effort. Smiling at someone not known to
                        you. What a magnificent bridge between two souls!
                    </p>
                    <p>
                        In this regard, the Indian middle-class value system has often
                        posed a slightly different opinion. Smiling at strangers is
                        not taken as a friendly or even a sweet gesture. As children,
                        we are in fact, taught to not smile at people unknown to
                        us. It may send out wrong signals, we have often been told.
                        While I am not going to deny or even negate this possibility,
                        I unabashedly believe that smiling at a stranger may be the
                        easiest and the quickest way to spread goodness. A smile or a
                        simple friendly nod at people unknown to us, I believe, has the
                        power to reaffirm our faith in humanity and provide us with
                        a great deal of hope. Of the foremost and basic expressions of
                        love, one is just a smile. ++
                    </p>
                    <p>
                        Love brings about equilibrium. In our household, one of the
                        simple yet effective ways of achieving this equilibrium lies in
                        being just a little more empathetic in dealing with our domestic
                        helpers. As radical as it would seem, this idea I feel is worth a
                        thought – surprising your helper occasionally by cooking and
                        having a meal with, or even partnering him/her on the chores.
                        A gesture of this kind may sound ludicrous. But if practiced, I
                        believe, it could well become a solid foundation for a trusting
                        and a deep bond between two persons that could help both
                        become better human beings. In this case, love extends itself
                        into empathy. And empathy creates better understanding
                        and equilibrium between two people who interact practically
                        everyday. That in turn, creates smoother interactions and lesser
                        friction, thereby enabling a better day-to-day functioning of
                        the household. Wherever there arises better understanding,
                        people often go out of their ways and bend their backs for
                        each other, creating a more harmonious environment. Good
                        behavior, I believe, can spark off a chain reaction of sorts;
                        what you receive is what you give. Empathy is sure to arouse
                        empathy. If this kind of love extends to our interactions in
                        offices, where one is just a little bit more considerate of one’s
                        colleagues, specially subordinates, work related stress can get
                        reduced, far greater coordination and understanding between
                        the employees can be attained, thereby enabling greater output
                        and a friendlier work environment.
                    </p>
                    <p>
                        Jostling for space creates stress. An area where an average
                        person faces stress of extreme high levels is the road. If
                        road behavior were to be treated as one of the benchmarks
                        of civility, we Indians wouldn’t really be right up at the top.
                        Having said that, I do see an opportunity here in making
                        a positive change with a little bit of love. In this case, love
                        would extend to courtesy, by ‘giving way to others.’ A little
                        smile, better behavior, just a little consideration for a fellow
                        road-user as we cross our paths, I believe, can go a long way
                        in diminishing this stress. It may take practice but if we do
                        inculcate a few changes in ourselves, I believe traffic stress
                        can be tackled. Let us indulge in love on the road! Let us be
                        considerate towards our fellow road-users. This is bound to
                        make all of us respect the traffic rules just a little bit more. As
                        we follow rules, there will form a better sense of discipline
                        on the roads. Better discipline would result in lesser stress.
                        And lesser traffic stress would definitely mean better traffic
                        management. In turn, better traffic management would lead to
                        reduction in cases of rage, accidents and casualties.
                    </p>
                    <p>
                        Essentially speaking, if we are able to add just a dash of love in
                        our everyday interactions, it can be quite an accomplishment.
                        Being polite and respectful is an empowering habit. Love
                        usually works where most of the other methods have failed.
                        A little bit of love can make big changes. And a little bit of
                        love costs almost nothing. Repercussions of love can raise
                        hopes and make the act of living stress-free to quite an extent.
                        Love in everyday life is a choice that we make. And let this
                        love reach out not only to our fellow humans but also to the
                        animals and plants in the form of compassion. Let us be gentle
                        as we observe nature more closely. Let us find time to soak
                        in a sunrise, the chirping of birds, change in weather, a new
                        leaf or a flower, newborn stray pups in our locality. Let us be
                        loud and clear with our thanking to the local colony guard,
                        to the parking attendant, to the sales boy at the mall, to the
                        taxi driver, to the car cleaner, to the delivery boy. This kind of
                        love is sure to benefit one and all in our society. If we give this
                        love a good deal of practice in our day-to-day lives, we are
                        bound to find ourselves in a far greater harmony within our
                        community. The only way to rekindle the romance in living
                        that may have gotten lost in the hustle bustle of the city life is
                        to be able to give and receive Love in our everyday living.
                    </p>
                    <p><i>
                            Thus shall the earth open to divinity
                            And common natures feel the wide uplift,
                            Illumine common acts with the Spirit’s ray
                            And meet the deity in common things.
                            Sri Aurobindo (Savitri, Book 11, Canto 1, pp. 710-711)
                        </i>
                    </p>
                    <p>
                        By quoting the example of Singaporeans, I do not mean to
                        put one type of society on a higher platform of civility than
                        the other. And many would argue that an orderly society is
                        a product of state-imposed discipline. Be that as it may, what
                        I wish to emphasize is that an orderly situation is surely
                        more desirable than a chaotic one. There’s harmony in it. In
                        orderliness greater number of people have the opportunity to
                        flourish. At the same time, I would not say that orderliness
                        is a direct byproduct of love. But I can safely say that by
                        extending love to chaotic and crowded scenarios, the chance
                        of gaining order becomes greater. And this becomes beneficial
                        for one and all.
                    </p>
                    <p><i>
                            Harmony is one phase of the law whose spiritual expression
                            is love.
                            - James Allen
                        </i>
                    </p>
                    <p>
                        <hr>
                    <h6>
                        Debangshu Chaudhury, an alumnus of The Mother’s International School, did
                        the Course on Teaching Yoga in the Ashram in 2019. This article was submitted
                        by him as an assignment to meet one of the requirements of the course
                    </h6>
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </section>
</body>

</html>