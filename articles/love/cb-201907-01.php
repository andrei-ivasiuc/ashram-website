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
                    Blacky and Browny are two street dogs whom I met outside
                    my husband Manu’s office. I had heard about them from him
                    but it was my experience with them that still continues to
                    amaze me.
                </p>
                <p>
                    These two dogs are sort of unofficial watchdogs with the
                    security personnel manning the entrance of the office where
                    Manu works. So one day when he tried to enter the premises
                    in the absence of the security personnel, these two made
                    sure that he would not be able to enter the gate till the
                    security guards returned. No, they did not bark or bite or do
                    anything to harm him; they simply made sure that he was
                    engaged in petting them by literally putting up their paws
                    onto his chest, with wagging tails. My husband came home
                    that night with the tale of this intelligent twosome.
                    Next day, my husband took along some eatables for them.
                    Of course he was in love with their ingenious way of stalling
                    his entry into his own office! The twosome simply refused
                    to eat anything and again made sure that they got enough
                    cuddling and petting from him for people to start believing
                    that they must be his pets.
                </p>
                <p>
                    The favourite place of sleeping for Blacky is the sofa designated
                    for guests, which she forfeits with a look that would make
                    any human being feel pretty bad about dislodging a queen
                    from her royal throne! Her second best choice is the air
                    conditioned workplace. It appears that Blacky is more
                    vibrant and involved in things around her than Browny who
                    is more of the silent, sensitive and diplomat kind. So on and
                    off I kept on hearing various anecdotes about their antics
                    from my husband and then came the moment of absolute
                    surprise for me.
                </p>
                <p>
                    It was the festive season and my husband was working. So
                    in the evening me and my mom were scheduled to pick him
                    up from his office on our way home from the puja pandal.
                    Once we reached there, I got out of the car, intimated him
                    about our arrival and started to walk around since this was
                    my first visit to his office.
                </p>
                <p>
                    Suddenly I saw one black dog making its way towards me
                    with a grin on its face and a wagging tail. You guessed
                    it right - it was Blacky. I was nowhere near the gate. Till
                    date I don’t know how she recognised me or why she came
                    towards me on her own. I love animals - that’s no secret. But
                    in this particular case, I had not even noticed that she was
                    there. I will never forget the expression in her eyes - full of
                    love and laughter, as if we were long lost friends who were
                    getting reunited. As soon as she saw an answering grin on
                    my face, she simply ran up to me, putting her front paws
                    on my chest, trying her level best to lick me anywhere and
                    everywhere; it felt like a warm homecoming to me. I can
                    recall very few occasions in my life where human beings
                    have given me such genuine, warm and unconditional love
                    or made me feel so welcome.
                </p>
                <p>
                    Following her closely and watching me with eager
                    and soulful eyes was her partner Browny. He did not
                    immediately come up to me but waited patiently for Blacky
                    to shower her exuberance on me. It wagged its tail, a little
                    less vigorously than Blacky but with such a soulful look
                    in its liquid brown eyes that my immediate reaction was
                    to nod my head towards him. That was enough to start an
                    avalanche of affection from him too. Browny is bigger than
                    Blacky, and heavier too. He simply came forward, nudged
                    his nose in-between me and Blacky for his share of petting.
                    Once he realised that Blacky had no intentions of letting
                    him get in between, he went over to the other side and
                    stood up with his front two paws on my chest! I realised
                    that if I did not want to land up on my back on the road,
                    I had better do something about my position! So all three
                    of us shifted to the pavement near the road to continue our
                    non verbal conversation.
                </p>
                <p>
                    For the next few minutes, all three of us were deeply
                    engaged in simply sharing our love for each other. Blacky
                    wanted to have all the attention whereas Browny was sure
                    that such a proposition was not fair. So on one hand I had
                    Blacky licking my hands, my face and my feet to make sure
                    that she had the maximum attention and on the other hand,
                    Browny would simply nudge his wet nose under my elbow
                    to get his share of love and petting. What was amazing was
                    the way both of them would look up at me. I can still feel
                    that choking sensation of the emotions that I had experienced
                    and those tears of absolute bliss and homecoming that I had
                    felt at that moment. The unconditional love that these two
                    bestowed upon me was amazing.
                </p>
                <p>
                    Once Manu arrived on the scene, Blacky continued to stay
                    with me unabashedly. But we discovered that Browny was
                    quite a diplomat! He immediately looked pretty concerned
                    about what my husband would think about their display
                    of affection towards me. He moved towards him with a
                    look of trepidation and an expression which seemed to say
                    that his loyalty towards him was in no way compromised.
                    Once he petted him and said that it was alright with him,
                    Browny waited for a few more seconds before coming back
                    to me for more petting! It was amazing the way these two
                    dogs can communicate with their eyes. They understand
                    what we are saying in words or through our silence and
                    respond immediately to that…
                </p>
                <p>
                    I have gone to meet my husband a couple of times
                    after that day, sometimes with a reason and sometimes
                    just for meeting those two loving creatures! Each time I
                    have come back with so much of unconditional love and
                    affection which I cannot describe and limit in words. It’s
                    an experience, which I hope, I shall continue to have with
                    them for a long long time.
                </p>
                <p>
                    I could not lie anymore,
                    so I started to call my dog ‘God’.
                    First he looked confused,
                    then he started smiling, then he even danced.
                    I kept at it, now he doesn’t even bite,
                    I am wondering if this might work on people.
                </p>
                <p>
                <h6>
                    <p>
                        — Sant Tukaram, Translated by Daniel Ladinsky
                    </p>
                    <p>
                        (Daniel Ladinsky (2002), Love Poems from God, Penguin, ISBN 978-0142196120, page 333)
                    </p>
                </h6>
            </div>
        </div>
    </div>
</section>
<?php require_once('../../footer.php') ?>